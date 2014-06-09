<?php
header("Content-Type: text/html; charset=utf-8");

function sync_survey_units()
{
    global $Options;
    
    $rowToStop = 0;

    $progressbar_block = 100;
    $totalRowsErrors = 0;
    $totalRowsInstalled = 0;
    $totalRowsUpdated = 0;
    $totalRowsSkipped = 0;
    $totalRowsCounter = 0;
    $blockRowsErrors = 0;
    $blockRowsInstalled = 0;
    $blockRowsUpdated = 0;
    $blockRowsSkiped = 0;

    $logMessage = array();

    $br = ($_SERVER["argv"] ? "\n" : "<br>");

    $totalSyncTime = time();

    $last_sync_date = date('Y-m-d');  
    $last_sync_time = date('H:i:s');  
    $last_sync = $last_sync_date." ".$last_sync_time;  

    $script_title = "Συγχρονισμός Σχολικών Μονάδες με Survey";
    echo "==================== ".$script_title." ====================".$br.$br; //$logMessage[] = $script_title."\n\n";
    ob_get_flush(); ob_flush(); flush();

    if (!file_exists( $Options["dbUnits"] )) 
    {
        $msg = "[Script] Το αρχείο δεδομένων ".$Options["dbUnits"]." δεν βρέθηκε !!!";
        $errorMessages[] = $msg;
        
        ob_get_flush(); ob_flush(); flush();
        $totalRowsErrors++;
    }
    else 
    {
        $msg = "Έναρξη Συγχρονισμού : ".$last_sync;
        echo $msg.$br.$br; $logMessage[] = $msg."\n\n";
        ob_get_flush(); ob_flush(); flush();


        $msg = "Επεξεργασία";
        echo $msg; //$logMessage[] = $msg;
        ob_get_flush(); ob_flush(); flush();

        // DO THE PARSING HERE
        $stream = fopen($Options["dbUnits"], 'r');
        $listener = new UnitsParseListener();
        $listener->init($totalRowsCounter, $progressbar_block, $rowToStop, $totalRowsErrors,
            $totalRowsInstalled, $totalRowsUpdated, $totalRowsSkipped,
            $blockRowsErrors, $blockRowsInstalled, $blockRowsUpdated, $blockRowsSkiped,
            $logMessage, $last_sync);
        try {
            $parser = new JsonStreamingParser_Parser($stream, $listener);
            $parser->parse();
        } catch (Exception $e) {
            fclose($stream);
            throw $e;
        }

        echo $br.$br; //$logMessage[] = "\n\n";

    }

    foreach ($errorMessages as $error) 
    {
       echo $error.$br;
       $logMessage[] = $error."\n";
    }


    if (count($errorMessages) > 0) 
    {
        $msg = (count($errorMessages) > 1 ? 'Παρουσιάστηκαν' : 'Παρουσιάστηκε')." ".count($errorMessages).' '.(count($errorMessages) == 1 ? 'σφάλμα' : 'σφάλματα');
        echo $br.$msg.$br.$br; $logMessage[] = "\n".$msg."\n\n";
    }
    else 
    {
        $msg = "Δεν βρέθηκαν Σφάλματα !!!";
        echo $msg.$br.$br; $logMessage[] = $msg."\n\n";
    }

    $msg = "Συνολικά βρέθηκαν ".$totalRowsCounter . ($totalRowsCounter == 1 ? " Μονάδες" : " Μονάδα").' :: '.$totalRowsInstalled." Καταχωρήθηκαν, ".$totalRowsUpdated." Ενημερώθηκαν, ".$totalRowsSkipped." Αγνοήθηκαν, ".$totalRowsErrors." Σφάλματα";;
    echo $msg.$br; $logMessage[] = $msg."\n";

    $totalSyncTimeValue = humanTiming($totalSyncTime);
    $msg = 'Συνολικός Χρόνος Εκτέλεσης : '.$totalSyncTimeValue;
    echo $msg.$br; $logMessage[] = $msg."\n";

    echo $br.$br;
    $logMessage[] = "\n\n";

    ob_get_flush(); ob_flush(); flush();

    $result = array(
        "title" => $script_title,
        "message" => implode("", $logMessage),
        "start_date" => $last_sync_date,
        "start_time" => $last_sync_time,
        "records" => $totalRowsCounter,
        "installed" => $totalRowsInstalled,
        "updated" => $totalRowsUpdated,
        "skipped" => $totalRowsSkipped,
        "errors" => $totalRowsErrors,
        "time" => $totalSyncTimeValue        
    );
    
    return json_encode($result);
}

class UnitsParseListener implements \JsonStreamingParser_Listener {
    private $_level;
    private $_stack;
    private $_key;

    public function init(&$totalRowsCounter, &$progressbar_block, &$rowToStop, &$totalRowsErrors,
            &$totalRowsInstalled, &$totalRowsUpdated, &$totalRowsSkipped,
            &$blockRowsErrors, &$blockRowsInstalled, &$blockRowsUpdated, &$blockRowsSkiped,
            &$logMessage, &$lastSync) {
        
        $this->totalRowsCounter =& $totalRowsCounter;
        $this->progressbar_block =& $progressbar_block;
        $this->rowToStop =& $rowToStop;
        $this->totalRowsErrors =& $totalRowsErrors;
        $this->totalRowsInstalled =& $totalRowsInstalled;
        $this->totalRowsUpdated =& $totalRowsUpdated;
        $this->totalRowsSkipped =& $totalRowsSkipped;
        $this->blockRowsErrors =& $blockRowsErrors;
        $this->blockRowsInstalled =& $blockRowsInstalled;
        $this->blockRowsUpdated =& $blockRowsUpdated;
        $this->blockRowsSkiped =& $blockRowsSkiped;
        $this->logMessage =& $logMessage;
        $this->lastSync =& $lastSync;


        $msg = "Ανάκτηση Λεξικών";
        $br = ($_SERVER["argv"] ? "\n" : "<br>");
        echo $msg.$br.$br; $logMessage[] = $msg."\n\n";
        ob_get_flush(); ob_flush(); flush();

        load_region_edu_admins($this->a_region_edu_admins, $this->o_region_edu_admins);
        load_edu_admins($this->a_edu_admins, $this->o_edu_admins);
        load_transfer_areas($this->a_transfer_areas, $this->o_transfer_areas);
        load_municipalities($this->a_municipalities, $this->o_municipalities);
        load_prefectures($this->a_prefectures, $this->o_prefectures);
        load_unit_types($this->a_unit_types, $this->o_unit_types);
        load_operation_shifts($this->a_operation_shifts, $this->o_operation_shifts);
        load_legal_characters($this->a_legal_characters, $this->o_legal_characters);
        load_orientation_types($this->a_orientation_types, $this->o_orientation_types);
        load_special_types($this->a_special_types, $this->o_special_types);
        load_sync_unit_types($this->a_sync_unit_types, $this->o_sync_unit_types);
        load_tax_offices($this->a_tax_offices, $this->o_tax_offices);
        load_education_levels($this->a_education_levels, $this->o_education_levels);
        load_states($this->a_states, $this->o_states);
        load_implementation_entities($this->a_implementation_entities, $this->o_implementation_entities);
        load_categories($this->a_categories, $this->o_categories);
    }

    public function file_position($line, $char) {}

    public function start_document() {
        $this->_level = 0;
        $this->_stack = array();
        $this->_key = null;
    }

    public function end_document() {
        // w00t!
    }

    public function start_object() {
        array_push($this->_stack, array());
        $this->_level++;
    }

    public function end_object() {
        $obj = array_pop($this->_stack);
        $this->_level--;
        if (empty($this->_stack)) {
            // doc is DONE!
        } else {
            if($this->_level == 1) { $this->addUnit($obj); return; }
            $this->value($obj);
        }
    }

    public function start_array() {
        $this->start_object();
    }

    public function end_array() {
        $this->end_object();
    }

    // Key will always be a string
    public function key($key) {
        $this->_key = ucfirst($key);
    }

    // Note that value may be a string, integer, boolean, null
    public function value($value) {
        $obj = array_pop($this->_stack);
        if ($this->_key) {
            $obj[$this->_key] = $value;
            $this->_key = null;
        } else {
            array_push($obj, $value);
        }
        array_push($this->_stack, $obj);
    }

    public function whitespace($whitespace) {
      // do nothing
    }

    public function addUnit($unit) {
        global $db, $Options;
        $this->isError = false;

        if ( ($this->totalRowsCounter > 0 ) && (($this->totalRowsCounter % $this->progressbar_block) == 0) )
        {
            $msg = ':'.$this->totalRowsCounter;
            echo $msg; //$logMessage[] = $msg;
            ob_get_flush(); ob_flush(); flush();
        }

        if (($this->rowToStop <> 0 ) && ($this->totalRowsCounter == $this->rowToStop)) break;

        if ((trim($unit["Perifereia"]) <> "ΣΥΝΤΟΝΙΣΤΙΚΟ ΓΡΑΦΕΙΟ ΕΚΚΛΗΣΙΑΣΤΙΚΩΝ") &&
            (trim($unit["Perifereia"]) <> "ΣΥΝΤΟΝΙΣΤΙΚΟ ΓΡΑΦΕΙΟ ΜΕΙΟΝΟΤΙΚΩΝ") &&
            (trim($unit["Perifereia"]) <> "ΣΙΒΙΤΑΝΙΔΕΙΟΣ"))
        {

//= Unit =======================================================================
            $accented = array('Ά', 'ά', 'Έ', 'έ', 'Ή', 'ή', 'Ό', 'ό', 'Ύ', 'ύ', 'Ώ', 'ώ', 'Ί', 'ί');
            $nonaccented = array('α', 'α', 'ε', 'ε', 'η', 'η', 'ο', 'ο', 'υ', 'υ', 'ω', 'ω', 'ι', 'ι');

            $region_edu_admin_id = $this->getDictionary($unit, $unit["Perifereia"], $this->a_region_edu_admins, $this->o_region_edu_admins, 'InvalidRegionEduAdminValue', 'RegionEduAdmins', 'name', load_region_edu_admins);

            $edu_admin_id = $this->getDictionary($unit, $unit["Diefthinsi"], $this->a_edu_admins, $this->o_edu_admins, 'InvalidEduAdminValue', 'EduAdmins', 'name', load_edu_admins);

            $implementation_entity_id = $this->o_edu_admins[$edu_admin_id]->implementation_entity_id;

            $transfer_area_id = $this->getDictionary($unit, $unit["PostingTransferArea"], $this->a_transfer_areas, $this->o_transfer_areas, 'InvalidEduAdminValue', 'TransferAreas', 'name', load_transfer_areas);

            $prefecture_id = $this->getDictionary($unit, $unit["Prefecture"], $this->a_prefectures, $this->o_prefectures, 'InvalidEduAdminValue', 'Prefectures', 'name', load_prefectures);

            $municipality_id = $this->getDictionary($unit, $unit["Municipality"], $this->a_municipalities, $this->o_municipalities, 'InvalidEduAdminValue', 'Municipalities', 'name', load_municipalities);
;

            $sync_unit_type_id = $this->getDictionary($unit, mb_strtoupper(str_replace($accented, $nonaccented, $unit["SchoolType"]), 'UTF-8'), $this->a_sync_unit_types, $this->o_sync_unit_types, 'InvalidEduAdminValue', 'SyncTypes', 'name', load_unit_types);

            if ($sync_unit_type_id)
            {
                $unit_type_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->unit_type_id;
                $operation_shift_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->operation_shift_id;
                $legal_character_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->legal_character_id;
                $orientation_type_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->orientation_type_id;
                $special_type_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->special_type_id;
            }
            $tax_office_id = $this->getDictionary($unit, $unit["SchoolDOY"], $this->a_tax_offices, $this->o_tax_offices, 'InvalidEduAdminValue', 'TaxOffices', 'name', load_tax_offices);

            $unit["SchoolLevel"] = trim($unit["SchoolLevel"]);
            $education_level_id = $unit["SchoolLevel"];

            $unit["Active"] = trim($unit["Active"]);
            $unit["Anastoli"] = trim($unit["Anastoli"]);

            if (($unit["Active"] == "true") && ($unit["Anastoli"] == "false"))
                $state_id = array_search("ΕΝΕΡΓΗ", $this->a_states);
            else if (($unit["Active"] == "true") && ($unit["Anastoli"] == "true"))
                $state_id = array_search("ΣΕ ΑΝΑΣΤΟΛΗ", $this->a_states);
            else if (($unit["Active"] == "false") && ($unit["Anastoli"] == "true"))
                $state_id = array_search("ΚΑΤΑΡΓΗΜΕΝΗ", $this->a_states);
            else if (($unit["Active"] == "false") && ($unit["Anastoli"] == "false"))
                $state_id = array_search("ΚΑΤΑΡΓΗΜΕΝΗ", $this->a_states);


            $category_id = array_search("ΣΧΟΛΙΚΕΣ ΜΟΝΑΔΕΣ", $this->a_categories);


            if (!$this->isError)
            {
                $lastUpdate = \DateTime::createFromFormat('Y-m-d\TH:i:s.u', trim($unit["LastUpdated"]));
                $params = array(
                    "registry_no"           => trim($unit["RegistryNo"]),
                    //"gluc" => "",
                    "source"                => "MySchool",
                    "name"                  => trim($unit["Name"]),
                    "special_name"          => trim($unit["SpecialName"]),
                    "category"              => $this->a_categories[ $category_id ],
                    "active"                => trim($unit["Active"]),
                    "suspended"             => trim($unit["Anastoli"]),
                    "state"                 => $this->a_states[ $state_id ],
                    "region_edu_admin"      => $this->a_region_edu_admins[ $region_edu_admin_id ],
                    "edu_admin"             => $this->a_edu_admins[ $edu_admin_id ],
                    "implementation_entity" => $this->a_implementation_entities[ $implementation_entity_id ],
                    "transfer_area"         => $this->a_transfer_areas[ $transfer_area_id ],
                    "municipality"          => $this->a_municipalities[ $municipality_id ],
                    "prefecture"            => $this->a_prefectures[ $prefecture_id ],
                    "unit_type"             => $this->a_unit_types[ $unit_type_id ],
                    "operation_shift"       => $this->a_operation_shifts[ $operation_shift_id ],
                    "legal_character"       => $this->a_legal_characters[ $legal_character_id ],
                    "orientation_type"      => $this->a_orientation_types[ $orientation_type_id ],
                    "special_type"          => $this->a_special_types[ $special_type_id ],
                    "education_level"       => $this->a_education_levels[ $education_level_id ],
                    "postal_code"           => trim($unit["PostalCode"]),
                    "area_team_number"      => trim($unit["AreaTeam"]),
                    "email"                 => trim($unit["Email"]),
                    "fax_number"            => trim($unit["FaxNumber"]),
                    "street_address"        => trim($unit["StreetAddress"]),
                    "phone_number"          => trim($unit["TelephoneNumber"]),
                    "levels_count"          => trim($unit["LevelsCount"]),
                    "groups_count"          => trim($unit["GroupsCount"]),
                    "students_count"        => trim($unit["StudentsSum"]),
                    "last_sync"             => $this->lastSync,
                    "last_update"           => $lastUpdate instanceof \DateTime ? $lastUpdate->format('Y-m-d H:i:s') : null,
                    "tax_number"            => trim($unit["SchoolAFM"]),
                    "tax_office"            => $this->a_tax_offices[ $tax_office_id ],
                    //"comments" => trim(""),
                    //"latitude" => NULL,
                    //"longitude" => NULL,
                    //"positioning" => NULL,
                    "fek"          => trim($unit["SchoolCreationFEK"]),
                );

                //echo "<pre>"; var_dump( $unit ); echo "</pre>";

                $sql = "SELECT mm_id FROM units "
                     . "WHERE registry_no = '".mysql_escape_string(trim($unit["RegistryNo"]))."' and source_id = 1";
                //echo "<br><br>".$sql."<br><br>";

                $stmt = $db->query( $sql );
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $row["mm_id"] )
                {
                    $params["mm_id"] = $row["mm_id"];
                }

                $curl = curl_init($Options["ServerURL"]."/units");
                curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $params["mm_id"] ? "PUT" : "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


                $data = curl_exec($curl);
                $data = json_decode( $data );

                //echo "<pre>"; var_dump( $data ); echo "</pre>";

                $isNew = is_null($params["mm_id"]);

                if ( $data->status == 200 )
                {
                    //$mm_id = $data->mm_id;
                }
                else
                {
                    var_dump($data); die();
                    $this->isError = true;

                    $this->blockRowsErrors++;
                    $this->totalRowsErrors++;

                    $this->errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                     . $data->status." : ".$data->message;
                }
            }

//= Workers ====================================================================

            if ((!$this->isError) && (trim ($unit["Manager"]["RegistryNo"]) <> ""))
            {
                $params = array(
                    "registry_no" => trim($unit["Manager"]["RegistryNo"]),
                    "lastname" => trim($unit["Manager"]["Lastname"]),
                    "firstname" => trim($unit["Manager"]["Firstname"]),
                    "fathername" => trim($unit["Manager"]["FatherFirstname"]),
                    "sex" => trim($unit["Manager"]["Sex"]),
                    "tax_number" => trim($unit["Manager"]["TaxNumber"]),
                );

                $sql = "SELECT worker_id FROM workers "
                     . "WHERE registry_no = '".mysql_escape_string(trim($unit["Manager"]["RegistryNo"]))."'";

                //echo "<br><br>".$sql."<br><br>";

                $stmt = $db->query( $sql );
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $row["worker_id"] )
                {
                    $params["worker_id"] = $row["worker_id"];
                }

                $curl = curl_init($Options["ServerURL"]."/workers");
                curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $params["worker_id"] ? "PUT" : "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                $data = curl_exec($curl);
                $data = json_decode( $data );

                //echo "<pre>"; var_dump( $data ); echo "</pre>";

                if ($data->status == 200 )
                {
                    //$worker_id = $data->worker_id;
                }
                else
                {
                    $this->isError = true;

                    $this->blockRowsErrors++;
                    $this->totalRowsErrors++;

                    $this->errorMessages[] = "[Workers] registry_no : ".$unit["RegistryNo"]." => ".$data->status." : ".$data->message;
                }
            }

            if ( ! $this->isError )
            {
                if ($isNew)
                {
                    $this->blockRowsInstalled++;
                    $this->totalRowsInstalled++;
                }
                else
                {
                    $this->blockRowsUpdated++;
                    $this->totalRowsUpdated++;
                }
            }
        }
        else
        {
            $this->blockRowsSkiped++;
            $this->totalRowsSkipped++;
        }

        $this->totalRowsCounter++;
    }

    private function getDictionary($unit, $value, &$a_values, &$o_values, $exceptionString, $classname, $attr, callable $reloadFunc) {
        global $entityManager;

        $value = trim($value);
        if ($value)
        {
            if (!in_array($value, $a_values)) {
                $obj = new $classname();
                $method = 'set'.ucfirst($attr);
                $obj->$method($value);
                $entityManager->persist($obj);
                $entityManager->flush($obj);
                $reloadFunc($a_values, $o_values);
            }
            if (!in_array($value, $a_values)) {
                $this->isError = true;
                $this->totalRowsErrors++;
                $this->errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                 . constant('ExceptionCodes::'.$exceptionString) ." : ".constant('ExceptionMessages::'.$exceptionString)
                                 . " '".$unit["Perifereia"]."'";
            }
        }
        return array_search($value, $a_values);
    }

}
?>