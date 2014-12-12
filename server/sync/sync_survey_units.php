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

    $script_title = "Συγχρονισμός Σχολικών Μονάδες Mysch με ". gethostname();
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
            $logMessage, $errorMessages, $last_sync);
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
    private $_keyStack;

    public function init(&$totalRowsCounter, &$progressbar_block, &$rowToStop, &$totalRowsErrors,
            &$totalRowsInstalled, &$totalRowsUpdated, &$totalRowsSkipped,
            &$blockRowsErrors, &$blockRowsInstalled, &$blockRowsUpdated, &$blockRowsSkiped,
            &$logMessage, &$errorMessages, &$lastSync) {
        
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
        $this->errorMessages =& $errorMessages;
        $this->lastSync =& $lastSync;


        $msg = "Ανάκτηση Λεξικών";
        $br = ($_SERVER["argv"] ? "\n" : "<br>");
        echo $msg.$br.$br; $this->logMessage[] = $msg."\n\n";
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
        $this->_keyStack = array();
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
        array_push($this->_keyStack, ucfirst($key));
    }

    // Note that value may be a string, integer, boolean, null
    public function value($value) {
        $obj = array_pop($this->_stack);
        $key = array_pop($this->_keyStack);
        if ($key) {
            $obj[$key] = $value;
        } else {
            array_push($obj, $value);
        }
        array_push($this->_stack, $obj);
    }

    public function whitespace($whitespace) {
      // do nothing
    }

    public function addUnit($unit) {
        global $db, $Options, $entityManager;
        $this->isError = false;

        if($this->isIgnored($unit)) {
            return true;
        }

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

            $region_edu_admin_id = $this->getDictionary($unit, $unit["Perifereia"], $this->a_region_edu_admins, $this->o_region_edu_admins, 'InvalidRegionEduAdminValue', 'RegionEduAdmins', 'regionEduAdminId', 'name', load_region_edu_admins);

            if($unit["Diefthinsi"] == $unit["Name"]) { $unit["DiefthinsiRegistryNo"] = $unit["RegistryNo"]; } // DiefthinsiRegistryNo fix because they return the region_edu_admin instead
            $edu_admin_id = $this->getDictionary($unit, $unit["DiefthinsiRegistryNo"], $this->a_edu_admins, $this->o_edu_admins, 'InvalidEduAdminValue', 'EduAdmins', 'eduAdminId', 'registryNo', load_edu_admins);
            if($this->convert_greek_accents($unit["Diefthinsi"]) != $this->convert_greek_accents($this->o_edu_admins[$edu_admin_id]->edu_admin) && $unit["Diefthinsi"] != null && $unit["DiefthinsiRegistryNo"] != null && $unit["Diefthinsi"] != "null" && $unit["DiefthinsiRegistryNo"] != "null") {
                // Update Diefthinsi name
                $eduAdminObj = $entityManager->getRepository('EduAdmins')->findOneBy(array(
                    'registryNo' => $unit["DiefthinsiRegistryNo"],
                ));
                $eduAdminObj->setName($unit["Diefthinsi"]);
                $entityManager->persist($eduAdminObj);
                $entityManager->flush($eduAdminObj);
                load_edu_admins($this->a_edu_admins, $this->o_edu_admins); // Refresh
            }

            $implementation_entity_id = $this->o_edu_admins[$edu_admin_id]->implementation_entity_id;

            $transfer_area_id = $this->getDictionary($unit, $unit["PostingTransferArea"], $this->a_transfer_areas, $this->o_transfer_areas, 'InvalidTransferAreaValue', 'TransferAreas', 'transferAreaId', 'name', load_transfer_areas);

            $prefecture_id = $this->getDictionary($unit, $unit["Prefecture"], $this->a_prefectures, $this->o_prefectures, 'InvalidPrefectureValue', 'Prefectures', 'prefectureId', 'name', load_prefectures);

            $municipality_id = $this->getDictionary($unit, $unit["Municipality"], $this->a_municipalities, $this->o_municipalities, 'InvalidMunicipalityValue', 'Municipalities', 'municipalityId', 'name', load_municipalities);
;

            $unit["SchoolType"] = $this->distinguishSchoolType($unit["SchoolType"], $unit);
            $sync_unit_type_id = $this->getDictionary($unit, mb_strtoupper(str_replace($accented, $nonaccented, $unit["SchoolType"]), 'UTF-8'), $this->a_sync_unit_types, $this->o_sync_unit_types, 'InvalidEduAdminValue', 'SyncTypes', 'syncTypeId', 'name', load_sync_unit_types);

            $category = null;
            if ($sync_unit_type_id)
            {
                $unit_type_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->unit_type_id;
                $operation_shift_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->operation_shift_id;
                $legal_character_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->legal_character_id;
                $orientation_type_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->orientation_type_id;
                $special_type_id = $this->o_sync_unit_types[ $sync_unit_type_id ]->special_type_id;
                $category = isset($this->o_unit_types[ $unit_type_id ]->category) ? $this->o_unit_types[ $unit_type_id ]->category : null;
                if(!isset($unit_type_id)) {
                    //$sql = "DELETE FROM units "
                    //     . "WHERE registry_no = '".mysql_escape_string(trim($unit["RegistryNo"]))."' and (source_id = 1 OR source_id = 5)";
                    //$stmt = $db->query( $sql );
                    //$row = $stmt->execute(PDO::FETCH_ASSOC);
                    return true;
                }
            }

            $tax_office_id = $this->getDictionary($unit, $unit["SchoolDOY"], $this->a_tax_offices, $this->o_tax_offices, 'InvalidTaxOfficeValue', 'TaxOffices', 'taxOfficeId', 'name', load_tax_offices);

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


            if (!$this->isError)
            {
                $lastUpdate = \DateTime::createFromFormat('Y-m-d\TH:i:s.u', trim($unit["LastUpdated"]));
                $params = array(
                    "registry_no"           => trim($unit["RegistryNo"]),
                    "source"                => "MySchool",
                    "name"                  => trim($unit["Name"]),
                    "special_name"          => trim($unit["SpecialName"]),
                    "category"              => $category,
                    "state"                 => $this->a_states[ $state_id ],
                    "region_edu_admin"      => $this->a_region_edu_admins[ $region_edu_admin_id ],
                    "edu_admin"             => $this->o_edu_admins[ $edu_admin_id ]->edu_admin,
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
                    "last_sync"             => $this->lastSync, // This is today's date
                    "last_update"           => $lastUpdate instanceof \DateTime ? $lastUpdate->format('Y-m-d H:i:s') : null,
                    "tax_number"            => trim($unit["SchoolAFM"]),
                    "tax_office"            => $this->a_tax_offices[ $tax_office_id ],
                    //"comments" => trim(""),
                    //"latitude" => NULL,
                    //"longitude" => NULL,
                    //"positioning" => NULL,
                    "creation_fek"          => trim($unit["SchoolCreationFEK"]),
                );

                //echo "<pre>"; var_dump( $unit ); echo "</pre>";

                $sql = "SELECT mm_id, last_sync FROM units "
                     . "WHERE registry_no = '".mysql_escape_string(trim($unit["RegistryNo"]))."' and (source_id = 1 OR source_id = 5)";
                //echo "<br><br>".$sql."<br><br>";

                $stmt = $db->query( $sql );
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $row["mm_id"] )
                {
                    $params["mm_id"] = $row["mm_id"];
                    $lastSync = new \DateTime($row["last_sync"]);
                    if(!($lastUpdate instanceof \DateTime) || $lastSync >= $lastUpdate) {
                        // We already have the latest version, skip the unit
                        $this->blockRowsSkiped++;
                        $this->totalRowsSkipped++;
                        return true;
                    }
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
                    $params['mm_id'] = $data->mm_id;
                }
                else
                {
                    $this->isError = true;

                    $this->blockRowsErrors++;
                    $this->totalRowsErrors++;

                    $this->errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                     . $data->status." : ".$data->message;
                }
            }

//= Workers ====================================================================
            if ((!$this->isError) && (trim ($unit["Manager"]) != 'null') && (trim ($unit["Manager"]["RegistryNo"]) != ""))
            {
                $this->addWorker($params, $unit["Manager"], 'ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ');
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

    public function addWorker($unit, $worker, $position) {
        global $db,$Options;
        // Worker
        if(trim($worker["Sex"]) == 'Θ') { $worker["Sex"] = 'Γ'; }
        if(trim($worker["Sex"]) == 'n') { $worker["Sex"] = null; }
        $params = array(
            "registry_no" => trim($worker["RegistryNo"]),
            "lastname" => trim($worker["Lastname"]),
            "firstname" => trim($worker["Firstname"]),
            "fathername" => trim($worker["FatherFirstname"]),
            "sex" => trim($worker["Sex"]),
            "tax_number" => trim($worker["TaxNumber"]),
            "source" => "MySchool",
        );

        $sql = "SELECT worker_id FROM workers "
             . "WHERE registry_no = '".mysql_escape_string(trim($worker["RegistryNo"]))."'";

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

        // Unit workers
        $params = array(
            'worker' => $data->worker_id,
            'mm_id' => $unit['mm_id'],
            'worker_position' => $position,
        );

        $sql = "SELECT unit_worker_id FROM unit_workers "
             . "WHERE worker_id = '".mysql_escape_string(trim($data->worker_id))."' AND mm_id = '".mysql_escape_string(trim($unit['mm_id']))."'";

        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ( $row["unit_worker_id"] )
        {
            $params["unit_worker_id"] = $row["unit_worker_id"];
        }

        $curl = curl_init($Options["ServerURL"]."/unit_workers");
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $params["unit_worker_id"] ? "PUT" : "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($curl);
        $data = json_decode( $data );

        //echo "<pre>"; var_dump( $data ); echo "</pre>";

        if ($data->status == 200 )
        {
            //$unit_worker_id = $data->unit_worker_id;
        }
        else
        {
            $this->isError = true;

            $this->blockRowsErrors++;
            $this->totalRowsErrors++;

            $this->errorMessages[] = "[Workers] registry_no : ".$unit["RegistryNo"]." => ".$data->status." : ".$data->message;
        }
    }

    private function isIgnored($unit) {
        $ignoredRegistryNos = array(
            'palio1959020', // 3ο ΓΕΛ ΧΟΡΤΙΑΤΗ (ΛΥΚΕΙΑΚΕΣ ΤΑΞΕΙΣ ΦΙΛΥΡΟΥ)
            '0521402', // ΕΙΔΙΚΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΚΕΡΚΥΡΑ - ΕΙΔΙΚΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΚΩΦΩΝ ΚΑΙ ΒΑΡΗΚΟΩΝ -ΑΙΜΙΛΙΟΣ
            '3108010',
            '00106000',
            '00106001',
            '00106002',
            '00106003',
            '00106004',
            '00106005',
            '00106007',
            '00106008',
            '00106009',
            '00106011',
            '00106012',
            '00106013',
            '00106014',
            '00106015',
            '00106016',
            '00106017',
            '00106018',
            '00205000',
            '00205001',
            '00205002',
            '00205003',
            '00307000',
            '00607000',
            '00607001',
            '00607002',
            '00607004',
            '00607005',
            '00607007',
            '00607008',
            '00607010',
            '00607011',
            '00607012',
            '00607013',
            '00607014',
            '00607015',
            '00607016',
            '00701007',
            '00701008',
            '00701009',
            '00701010',
            '00701011',
            '00701012',
            '00701013',
            '00701014',
            '00701015',
            '00701016',
            '00701017',
            '00701018',
            '00701019',
            '00701020',
            '00701021',
            '00701022',
            '00701023',
            '00701024',
            '00701025',
            '00701026',
            '00701027',
            '00701028',
            '00701029',
            '00701030',
            '00701031',
            '00701032',
            '00701033',
            '00701035',
            '00701036',
            '00701037',
            '00701038',
            '00701039',
            '00701040',
            '00701041',
            '00701042',
            '00701043',
            '00701044',
            '00701045',
            '00701046',
            '00701047',
            '00701048',
            '00701049',
            '00701050',
            '00701051',
            '00701052',
            '00701053',
            '00701054',
            '00701055',
            '00701056',
            '00701057',
            '00701058',
            '00701059',
            '00701060',
            '00701062',
            '00701063',
            '00701064',
            '00701065',
            '00701066',
            '00701067',
            '00701068',
            '00701070',
            '00701076',
            '00701077',
            '00701078',
            '00701079',
            '00701080',
            '00701081',
            '00714004',
            '00714005',
            '00714006',
            '00714007',
            '00714008',
            '00714009',
            '00714010',
            '00714011',
            '00714012',
            '00714013',
            '00714014',
            '00714015',
            '00714016',
            '00714017',
            '00714019',
            '00714020',
            '00714021',
            '00714022',
            '00714023',
            '00714024',
            '00714025',
            '00714026',
            '00714027',
            '00714028',
            '00714029',
            '00714030',
            '00714031',
            '00714032',
            '00714033',
            '00714034',
            '00714035',
            '00714036',
            '00714037',
            '00714038',
            '00714039',
            '00714040',
            '00714041',
            '00714042',
            '00714043',
            '00714044',
            '00714045',
            '00714047',
            '00714073',
            '00714074',
            '00714075',
            '00714076',
            '00714077',
            '00714078',
            '00714079',
            '00714080',
            '00714081',
            '00714082',
            '00714083',
            '00714084',
            '00714085',
            '00714086',
            '00714102',
            '00714103',
            '00714104',
            '00714106',
            '00714108',
            '00714109',
            '00714110',
            '00714111',
            '00714113',
            '00714114',
            '00714115',
            '00714116',
            '00714117',
            '00714118',
            '00714119',
            '00714121',
            '00714122',
            '00714123',
            '00714124',
            '00714125',
            '00714129',
            '00714130',
            '00714132',
            '00714133',
            '00714134',
            '00714135',
            '00714136',
            '00714148',
            '00714150',
            '00714153',
            '00714155',
            '00714156',
            '00714157',
            '00724015',
            '00724016',
            '00724017',
            '00724018',
            '00724019',
            '00724020',
            '00724021',
            '00724022',
            '00724023',
            '00724024',
            '00724026',
            '00724027',
            '00724029',
            '00724032',
            '00724033',
            '00724034',
            '00724035',
            '00724036',
            '00724037',
            '00724038',
            '00724039',
            '00724040',
            '00724041',
            '00724042',
            '00724043',
            '00724044',
            '00724045',
            '00724046',
            '00724048',
            '00724050',
            '00724051',
            '00724052',
            '00724053',
            '00724054',
            '00724055',
            '00724056',
            '00724057',
            '00724058',
            '00724059',
            '00724060',
            '00724061',
            '00724062',
            '00724063',
            '00724064',
            '00724065',
            '00724066',
            '00724067',
            '00724068',
            '00724069',
            '00724070',
            '00724071',
            '00724072',
            '00724073',
            '00724074',
            '00724075',
            '00724076',
            '00724077',
            '00724078',
            '00724119',
            '00724120',
            '00724123',
            '00724126',
            '00724130',
            '00724131',
            '00724132',
            '00724134',
            '00724136',
            '00724138',
            '00724146',
            '00724147',
            '00724148',
            '00724149',
            '00724150',
            '00724151',
            '00724152',
            '00724153',
            '00724154',
            '00724155',
            '00724156',
            '00724157',
            '00724158',
            '00724159',
            '00724160',
            '00724161',
            '00724162',
            '00724163',
            '00724164',
            '00724166',
            '00724167',
            '00724171',
            '00724173',
            '00724174',
            '00724175',
            '00724176',
            '00724177',
            '00724178',
            '00724179',
            '00724180',
            '00724181',
            '00724182',
            '00724183',
            '00724184',
            '00724185',
            '00724186',
            '00724187',
            '00724188',
            '00815000',
            '00815001',
            '00815002',
            '00904000',
            '00904001',
            '00904003',
            '00904004',
            '00904005',
            '00904006',
            '00904007',
            '00904008',
            '00904009',
            '00904010',
            '00904011',
            '00904012',
            '00904013',
            '00904014',
            '00904015',
            '00904016',
            '00904017',
            '00904018',
            '00904019',
            '00904020',
            '00904021',
            '00904022',
            '00904023',
            '00904024',
            '00904025',
            '00904026',
            '00904027',
            '00904028',
            '00904029',
            '00904030',
            '00904031',
            '00904032',
            '01207000',
            '01207001',
            '01207003',
            '01207004',
            '01207005',
            '01207006',
            '01207009',
            '01207010',
            '01207011',
            '01207012',
            '01413013',
            '01413014',
            '01413015',
            '01413016',
            '01413017',
            '01413018',
            '01413019',
            '01413020',
            '01413021',
            '01413022',
            '01413023',
            '01413024',
            '01413025',
            '01413026',
            '01413027',
            '01413028',
            '01413029',
            '01413030',
            '01413031',
            '01413034',
            '01413035',
            '01413036',
            '01413037',
            '01413038',
            '01413039',
            '01413040',
            '01413041',
            '01413042',
            '01413043',
            '01413044',
            '01413049',
            '01413050',
            '01413051',
            '01413052',
            '01413053',
            '01413054',
            '01413055',
            '01413056',
            '01413057',
            '01413058',
            '01413059',
            '01413060',
            '01413061',
            '01413062',
            '01413063',
            '01413064',
            '01413065',
            '01413066',
            '01413067',
            '01413068',
            '01413069',
            '01413070',
            '01413071',
            '01413072',
            '01413073',
            '01413074',
            '01413075',
            '01413076',
            '01413077',
            '01413078',
            '01413079',
            '01413080',
            '01413081',
            '01413082',
            '01413083',
            '01413084',
            '01413085',
            '01413088',
            '01413092',
            '01413093',
            '01413094',
            '01413095',
            '01502000',
            '01502001',
            '01502002',
            '01502034',
            '01502035',
            '01502036',
            '01502037',
            '01502038',
            '01502039',
            '01502040',
            '01502041',
            '01502042',
            '01502043',
            '01502044',
            '01502045',
            '01502046',
            '01502047',
            '01502048',
            '01502049',
            '01502050',
            '01502051',
            '01502052',
            '01502053',
            '01502054',
            '01502055',
            '01502056',
            '01502057',
            '01502058',
            '01502059',
            '01502060',
            '01502061',
            '01502062',
            '01502063',
            '01502064',
            '01502065',
            '01502066',
            '01502067',
            '01502068',
            '01502069',
            '01502071',
            '01502072',
            '01502073',
            '01502074',
            '01502075',
            '01502076',
            '01502077',
            '01502078',
            '01502079',
            '01502080',
            '01502081',
            '01502083',
            '01502084',
            '01502085',
            '01502087',
            '01502088',
            '01502089',
            '01502090',
            '01502092',
            '01502103',
            '01502104',
            '01503000',
            '01503001',
            '01503002',
            '01503004',
            '01503005',
            '01503006',
            '01503007',
            '01503008',
            '01503009',
            '01503010',
            '01503011',
            '01503012',
            '01503013',
            '01503014',
            '01503015',
            '01511000',
            '01511001',
            '01511002',
            '01511003',
            '01511031',
            '01511032',
            '01511033',
            '01511034',
            '01511035',
            '01511036',
            '01511037',
            '01511038',
            '01511039',
            '01511040',
            '01511041',
            '01511045',
            '01511046',
            '01511047',
            '01511050',
            '01511051',
            '01511052',
            '01511053',
            '01511054',
            '01511056',
            '01511057',
            '01511058',
            '01511059',
            '01511060',
            '01511061',
            '01511065',
            '01511066',
            '01511070',
            '01511072',
            '01511074',
            '01511075',
            '01511078',
            '01511079',
            '01511081',
            '01511082',
            '01511083',
            '01511084',
            '01511085',
            '01511086',
            '01511087',
            '01511103',
            '01511108',
            '01511109',
            '01511111',
            '01511113',
            '01511114',
            '01511115',
            '01511116',
            '01511117',
            '01511118',
            '01511119',
            '01511121',
            '01511122',
            '01511127',
            '01511131',
            '01511132',
            '01511133',
            '01511134',
            '01511138',
            '01511142',
            '01511143',
            '01511144',
            '01511145',
            '01511146',
            '01511147',
            '01511148',
            '01512000',
            '01512001',
            '01512002',
            '01512003',
            '01512004',
            '01512005',
            '01512006',
            '01512007',
            '01512008',
            '01512009',
            '01512010',
            '01512015',
            '01512016',
            '01512017',
            '01512018',
            '01512019',
            '01512020',
            '01512021',
            '01512022',
            '01512023',
            '01512024',
            '01512025',
            '01512026',
            '01512027',
            '01512028',
            '01512029',
            '01512030',
            '01512031',
            '01515000',
            '01515001',
            '01515002',
            '01515003',
            '01515004',
            '01515006',
            '01515007',
            '01515020',
            '01515022',
            '01515024',
            '01515025',
            '01515027',
            '01515029',
            '01515030',
            '01515031',
            '01515032',
            '01515033',
            '01515034',
            '01515035',
            '01515036',
            '01515037',
            '01515038',
            '01515039',
            '01515040',
            '01515041',
            '01515042',
            '01515043',
            '01515044',
            '01515045',
            '01515046',
            '01515047',
            '01515050',
            '01515053',
            '01515054',
            '01515055',
            '01515056',
            '01515057',
            '01515058',
            '01515059',
            '01515060',
            '01515062',
            '01515063',
            '01515064',
            '01515065',
            '01515068',
            '01515069',
            '01515070',
            '01515071',
            '01515073',
            '01515074',
            '01515075',
            '01515077',
            '01515078',
            '01515079',
            '01515080',
            '01515081',
            '01516000',
            '01516001',
            '01516002',
            '01516003',
            '01516004',
            '01516005',
            '01516006',
            '01516007',
            '01516011',
            '01516012',
            '01516013',
            '01516014',
            '01522001',
            '01522002',
            '01522003',
            '01522004',
            '01522005',
            '01522006',
            '01522007',
            '01522008',
            '01522009',
            '01522010',
            '01522011',
            '01522012',
            '01522013',
            '01522014',
            '01522015',
            '01522016',
            '01522017',
            '01522018',
            '01522019',
            '01522020',
            '01522021',
            '01522022',
            '01522023',
            '01522024',
            '01522025',
            '01522027',
            '01522028',
            '01522029',
            '01522030',
            '01522031',
            '01522032',
            '01522033',
            '01522034',
            '01522035',
            '01522036',
            '01522037',
            '01522038',
            '01522039',
            '01522040',
            '01522041',
            '01522042',
            '01522043',
            '01522044',
            '01522045',
            '01522046',
            '01522047',
            '01522048',
            '01522049',
            '01522050',
            '01522051',
            '01522052',
            '01522053',
            '01522054',
            '01522055',
            '01522056',
            '01522058',
            '01522059',
            '01522060',
            '01522061',
            '01522062',
            '01522063',
            '01522064',
            '01522065',
            '01522066',
            '01522067',
            '01522068',
            '01522069',
            '01522070',
            '01522071',
            '01522072',
            '01522073',
            '01522074',
            '01522075',
            '01522076',
            '01522077',
            '01522078',
            '01522079',
            '01522080',
            '01522081',
            '01522082',
            '01522083',
            '01522084',
            '01522085',
            '01522086',
            '01522087',
            '01522088',
            '01522089',
            '01522090',
            '01522091',
            '01522092',
            '01522093',
            '01522094',
            '01522095',
            '01522096',
            '01522097',
            '01522103',
            '01522104',
            '01522105',
            '01522106',
            '01522107',
            '01522108',
            '01522109',
            '01522110',
            '01522114',
            '01522115',
            '01522116',
            '01522117',
            '01522118',
            '01522120',
            '01522121',
            '01522122',
            '01522123',
            '01522124',
            '01522125',
            '01522127',
            '01522128',
            '01522129',
            '01522130',
            '01522131',
            '01522132',
            '01522133',
            '01522134',
            '01522135',
            '01522136',
            '01522137',
            '01522138',
            '01522139',
            '01522140',
            '01522141',
            '01522142',
            '01522144',
            '01522145',
            '01523000',
            '01523001',
            '01523002',
            '01523003',
            '01523004',
            '01523005',
            '01523006',
            '01523007',
            '01523008',
            '01523009',
            '01523010',
            '01523011',
            '01523012',
            '01523013',
            '01523014',
            '01523015',
            '01523016',
            '01523017',
            '01523018',
            '01523019',
            '01523020',
            '01523021',
            '01523022',
            '01523023',
            '01523024',
            '01523025',
            '01523026',
            '01523027',
            '01523028',
            '01523029',
            '01523030',
            '01523031',
            '01523032',
            '01523033',
            '01523034',
            '01523035',
            '01523036',
            '01523037',
            '01523038',
            '01523039',
            '01523040',
            '01523041',
            '01523042',
            '01523043',
            '01523044',
            '01523045',
            '01523046',
            '01523047',
            '01523048',
            '01523049',
            '01523050',
            '01526000',
            '01526001',
            '01526003',
            '01526004',
            '01526005',
            '01526006',
            '01526007',
            '01526008',
            '01526009',
            '01526010',
            '01526011',
            '01526012',
            '01526013',
            '01526014',
            '01526015',
            '01526016',
            '01526017',
            '01526018',
            '01526019',
            '01526020',
            '01526021',
            '01526022',
            '01526023',
            '01526024',
            '01526025',
            '01526026',
            '01526027',
            '01526028',
            '01526029',
            '01526030',
            '01526031',
            '01526032',
            '01526033',
            '01526034',
            '01526035',
            '01526036',
            '01526037',
            '01526038',
            '01526040',
            '01526042',
            '01526043',
            '01607020',
            '01607022',
            '01607023',
            '01607026',
            '01607035',
            '01607037',
            '01607040',
            '01607041',
            '01607042',
            '01607045',
            '01607046',
            '01607048',
            '01607050',
            '01607054',
            '01607056',
            '01607058',
            '01607059',
            '01607060',
            '01607062',
            '01607064',
            '01607065',
            '01607067',
            '01607068',
            '01607069',
            '01607070',
            '01607071',
            '01607074',
            '01721000',
            '01721001',
            '01822001',
            '01822002',
            '01822003',
            '01822005',
            '01822006',
            '01822007',
            '01822008',
            '01822009',
            '01822010',
            '01822011',
            '01822012',
            '01822013',
            '01822014',
            '01822015',
            '01822016',
            '01822019',
            '01822020',
            '01822023',
            '01822024',
            '01822025',
            '01822026',
            '01822027',
            '01822028',
            '01822029',
            '01822031',
            '01822032',
            '01822033',
            '01823000',
            '01823001',
            '01823002',
            '01823003',
            '01823004',
            '01823005',
            '01823006',
            '01823007',
            '01823008',
            '01823009',
            '01823010',
            '01823011',
            '01823012',
            '01823013',
            '01905000',
            '02005000',
            '02206000',
            '02206001',
            '02206002',
            '02310000',
            '02310001',
            '02310002',
            '02310003',
            '02310004',
            '02310005',
            '02310007',
            '02310011',
            '02310012',
            '02310016',
            '02310017',
            '02310021',
            '02310022',
            '02310023',
            '02310024',
            '02310025',
            '02310027',
            '02310028',
            '02310030',
            '02310032',
            '02310036',
            '02310037',
            '02310042',
            '02310044',
            '02310045',
            '02310048',
            '02310051',
            '02310052',
            '02310054',
            '02310055',
            '02310056',
            '02310057',
            '02310059',
            '02310065',
            '02310066',
            '02310067',
            '02310068',
            '02310070',
            '02310071',
            '02310073',
            '02310074',
            '02310075',
            '02310076',
            '02310078',
            '02310079',
            '02310080',
            '02310081',
            '02310082',
            '02310083',
            '02310087',
            '02310088',
            '02310089',
            '02310090',
            '02310093',
            '02310095',
            '02310098',
            '02310099',
            '02310100',
            '02310101',
            '02310102',
            '02310103',
            '02310104',
            '02310106',
            '02310107',
            '02310108',
            '02310109',
            '02310111',
            '02310112',
            '02310114',
            '02310116',
            '02310117',
            '02310118',
            '02310119',
            '02310120',
            '02310122',
            '02310123',
            '02310126',
            '02310131',
            '02310132',
            '02310133',
            '02310139',
            '02310140',
            '02310143',
            '02310146',
            '02310147',
            '02310148',
            '02310149',
            '02310165',
            '02310166',
            '02310171',
            '02310175',
            '02310182',
            '02310186',
            '02310188',
            '02310189',
            '02310197',
            '02310216',
            '02310232',
            '02310236',
            '02310238',
            '02310240',
            '02310241',
            '02310242',
            '02310243',
            '02310244',
            '02310250',
            '02310252',
            '02310253',
            '02310254',
            '02310255',
            '02310256',
            '02310258',
            '02310261',
            '02310262',
            '02318000',
            '02318001',
            '02318002',
            '02318004',
            '02318005',
            '02318006',
            '02318008',
            '02318009',
            '02318012',
            '02318013',
            '02318015',
            '02318016',
            '02318017',
            '02318018',
            '02318020',
            '02318021',
            '02318023',
            '02318025',
            '02318026',
            '02318029',
            '02318030',
            '02318031',
            '02318033',
            '02318034',
            '02318040',
            '02318044',
            '02318046',
            '02318047',
            '02318048',
            '02318049',
            '02318052',
            '02318053',
            '02318054',
            '02319008',
            '02319009',
            '02319010',
            '02319012',
            '02319013',
            '02319014',
            '02319015',
            '02319016',
            '02319017',
            '02319019',
            '02319020',
            '02319021',
            '02319022',
            '02319023',
            '02319024',
            '02319025',
            '02319026',
            '02319027',
            '02319028',
            '02319029',
            '02319031',
            '02319033',
            '02319035',
            '02319038',
            '02319039',
            '02319040',
            '02319042',
            '02319047',
            '02319048',
            '02319052',
            '02319055',
            '02319056',
            '02319057',
            '02319061',
            '02319064',
            '02319071',
            '02319076',
            '02320000',
            '02320001',
            '02320002',
            '02320003',
            '02320004',
            '02320005',
            '02320006',
            '02320007',
            '02320008',
            '02320009',
            '02320010',
            '02320011',
            '02320012',
            '02320013',
            '02320014',
            '02320015',
            '02320016',
            '02320017',
            '02320018',
            '02320019',
            '02320020',
            '02320021',
            '02320023',
            '02320026',
            '02320029',
            '02320030',
            '02320031',
            '02320034',
            '02320035',
            '02320036',
            '02320037',
            '02320039',
            '02320040',
            '02320044',
            '02320045',
            '02320048',
            '02320050',
            '02320052',
            '02320073',
            '02320075',
            '02320076',
            '02320079',
            '02406000',
            '02406002',
            '02406004',
            '02613000',
            '02613008',
            '02613009',
            '02706000',
            '02706002',
            '02706003',
            '02813000',
            '02813003',
            '02813023',
            '02813025',
            '02813026',
            '02813027',
            '02813028',
            '02813029',
            '02813030',
            '02813032',
            '02813033',
            '02813034',
            '02813035',
            '02813036',
            '02813037',
            '02813038',
            '02813040',
            '02813041',
            '02813045',
            '02813048',
            '02813049',
            '02813050',
            '02813052',
            '02813053',
            '02813054',
            '02813055',
            '02813056',
            '02813057',
            '02813058',
            '02813059',
            '02813060',
            '02813061',
            '02813062',
            '02813063',
            '02813064',
            '02813065',
            '02813066',
            '02813077',
            '02813078',
            '02813079',
            '02813080',
            '02813081',
            '02813082',
            '02813083',
            '02813084',
            '02813085',
            '02813086',
            '02813087',
            '02813088',
            '02813089',
            '02813090',
            '02813091',
            '02813106',
            '02813116',
            '02813117',
            '02813118',
            '02813119',
            '02813121',
            '02813126',
            '02813128',
            '02813130',
            '02907008',
            '02907009',
            '02907010',
            '02907012',
            '02907013',
            '02907014',
            '02907015',
            '02907016',
            '02907017',
            '02907018',
            '02907019',
            '03005000',
            '0301040',
            '03117003',
            '03117004',
            '03117005',
            '03117006',
            '03117008',
            '03117009',
            '03117010',
            '03117011',
            '03117012',
            '03117013',
            '03117014',
            '03117015',
            '03117016',
            '03117017',
            '03117018',
            '03117019',
            '03117026',
            '03117027',
            '03125001',
            '03125002',
            '03125003',
            '03125005',
            '03125007',
            '03125008',
            '03125009',
            '03125011',
            '03125012',
            '03125013',
            '03125014',
            '03125015',
            '03125016',
            '03125017',
            '03125018',
            '03125019',
            '03125020',
            '03125021',
            '03125022',
            '03125023',
            '03125024',
            '03125025',
            '03125026',
            '03125029',
            '03125030',
            '03125031',
            '03125032',
            '03125033',
            '03125034',
            '03125035',
            '03125036',
            '03125037',
            '03125038',
            '03125039',
            '03125040',
            '03125041',
            '03125042',
            '03125043',
            '03125044',
            '03125046',
            '03125047',
            '03125048',
            '03125049',
            '03125050',
            '03125051',
            '03125052',
            '03125053',
            '03125054',
            '03125055',
            '03125056',
            '03125057',
            '03125058',
            '03125059',
            '03125060',
            '03125061',
            '03125062',
            '03125063',
            '03125064',
            '03125065',
            '03125066',
            '03125068',
            '03125069',
            '03125070',
            '03125071',
            '03125072',
            '03125073',
            '03125074',
            '03125075',
            '03125076',
            '03125077',
            '03125078',
            '03125079',
            '03125081',
            '03125082',
            '03125083',
            '03125084',
            '03125090',
            '03125095',
            '03125110',
            '03125113',
            '03125122',
            '03125123',
            '03125124',
            '03125134',
            '03125144',
            '03125146',
            '03125148',
            '03125154',
            '03125164',
            '03125165',
            '03125171',
            '03125172',
            '03125173',
            '03125174',
            '03125179',
            '03125181',
            '03125184',
            '03125185',
            '03125187',
            '03125188',
            '03405000',
            '03405006',
            '03507000',
            '03507002',
            '03507003',
            '0351040',
            '03606000',
            '03606001',
            '03706000',
            '03706002',
            '03706003',
            '03706005',
            '03706007',
            '03706008',
            '03706009',
            '03804000',
            '03804001',
            '03905000',
            '04009001',
            '04009002',
            '04009008',
            '04009009',
            '04009010',
            '04009011',
            '04009012',
            '04009013',
            '04009014',
            '04009016',
            '04009017',
            '04009019',
            '04009021',
            '04009022',
            '04009025',
            '04009027',
            '04009028',
            '04009029',
            '04009030',
            '04009031',
            '04009032',
            '04009033',
            '04009034',
            '04009035',
            '04009036',
            '04009037',
            '04009038',
            '04009039',
            '04009040',
            '04009041',
            '04009042',
            '04009043',
            '04009044',
            '04009045',
            '04009046',
            '04009047',
            '04009048',
            '04009049',
            '04009051',
            '04009052',
            '04009053',
            '04009054',
            '04009055',
            '04009056',
            '04009057',
            '04009058',
            '04009060',
            '04009062',
            '04009066',
            '04009068',
            '04009070',
            '04009071',
            '04009072',
            '04207001',
            '04207002',
            '04207003',
            '04424000',
            '04424001',
            '04424002',
            '04424003',
            '04424004',
            '04424005',
            '04424006',
            '04505000',
            '04621000',
            '04621002',
            '04705000',
            '04705001',
            '04705002',
            '04705003',
            '04705004',
            '04705005',
            '04705006',
            '04705007',
            '04705008',
            '04705009',
            '04705010',
            '04705011',
            '04705012',
            '04705013',
            '04705014',
            '04705015',
            '04705016',
            '04705017',
            '04705018',
            '04705019',
            '04705020',
            '04705021',
            '04705022',
            '04804001',
            '04804002',
            '04804003',
            '04804004',
            '04804005',
            '04804006',
            '04804007',
            '04804008',
            '04804009',
            '04804010',
            '04804011',
            '04804012',
            '04804013',
            '04804014',
            '04804015',
            '04804016',
            '04804017',
            '04804018',
            '04804019',
            '04804020',
            '04915000',
            '04915001',
            '04915002',
            '04915003',
            '05007006',
            '05007007',
            '05007009',
            '05007010',
            '05007011',
            '05007013',
            '05007014',
            '05007015',
            '05107002',
            '05107003',
            '05107005',
            '05107007',
            '05107008',
            '05107010',
            '05107014',
            '05107021',
            '05107022',
            '05107024',
            '05107028',
            '05107029',
            '05107030',
            '05107032',
            '05107033',
            '05107042',
            '05107044',
            '05107047',
            '05107049',
            '05107051',
            '05107052',
            '05107053',
            '05107058',
            '05107060',
            '05107069',
            '05107073',
            '05107075',
            '05107077',
            '05107080',
            '05107097',
            '05107098',
            '05107100',
            '05107102',
            '05107111',
            '05107113',
            '05107115',
            '05107118',
            '05107123',
            '05107130',
            '05107132',
            '05107133',
            '05107135',
            '05107136',
            '05107140',
            '05107141',
            '05107143',
            '05107144',
            '05107146',
            '05107148',
            '05107149',
            '05107150',
            '05107151',
            '05107153',
            '05107154',
            '05107155',
            '05107156',
            '05107157',
            '05107158',
            '05107160',
            '05107162',
            '05107164',
            '05107165',
            '05107166',
            '05107167',
            '05107168',
            '05107172',
            '05107173',
            '05107177',
            '05107178',
            '05107179',
            '05107180',
            '05107181',
            '05107182',
            '05107183',
            '05107184',
            '05107187',
            '05107188',
            '05107190',
            '05107191',
            '05107192',
            '05107199',
            '05107201',
            '05107204',
            '05107205',
            '05107206',
            '05107207',
            '05107208',
            '05107209',
            '05107214',
            '05107216',
            '05107223',
            '05107229',
            '05107231',
            '05107232',
            '05107233',
            '05107234',
            '05107235',
            '05107236',
            '05107237',
            '05107238',
            '05107239',
            '05107240',
            '05107241',
            '05107242',
            '05107243',
            '05107244',
            '05107247',
            '05107248',
            '05107253',
            '05107256',
            '05107257',
            '05107260',
            '05107262',
            '05107263',
            '05107264',
            '05107265',
            '05107268',
            '05107269',
            '05107270',
            '05502000',
            '0560023',
            '05613000',
            '05613001',
            '05613002',
            '05613003',
            '05707005',
            '05707006',
            '05707010',
            '05707011',
            '05707012',
            '05707021',
            '05707022',
            '05707023',
            '05707024',
            '05707025',
            '05707027',
            '05707028',
            '05707029',
            '05707030',
            '05707031',
            '05707032',
            '05707034',
            '05707035',
            '05707036',
            '05707037',
            '05707038',
            '05707039',
            '05707041',
            '05807012',
            '05807028',
            '05807031',
            '05807041',
            '05807042',
            '05807043',
            '05807044',
            '05807045',
            '05807046',
            '05807047',
            '05807048',
            '05807050',
            '05807051',
            '05807052',
            '05807053',
            '05807054',
            '05807055',
            '05807056',
            '05807057',
            '05807058',
            '05807059',
            '05807060',
            '05807061',
            '05807062',
            '05807063',
            '05807064',
            '05807065',
            '05807066',
            '05807067',
            '05807068',
            '05807069',
            '05807070',
            '05807076',
            '05807077',
            '05807078',
            '05807080',
            '05807083',
            '05807084',
            '05807085',
            '05807086',
            '05807088',
            '05807089',
            '05807090',
            '05807092',
            '05807093',
            '05807094',
            '05807095',
            '05807098',
            '05807099',
            '05807100',
            '05807101',
            '05807102',
            '05807103',
            '05807104',
            '05906000',
            '05906001',
            '05906002',
            '05906003',
            '05906004',
            '06007003',
            '06321003',
            '06321004',
            '06321006',
            '06321007',
            '06321008',
            '06321009',
            '06321010',
            '06321011',
            '06321012',
            '06321013',
            '06321016',
            '06321019',
            '06321020',
            '06321021',
            '06321022',
            '06321023',
            '06321024',
            '06321026',
            '06321027',
            '06321028',
            '06321029',
            '06321031',
            '06321033',
            '06321052',
            '06321054',
            '06321069',
            '06321070',
            '06321074',
            '06321082',
            '06321083',
            '06321085',
            '06321086',
            '06321087',
            '06406000',
            '06406001',
            '06505000',
            '06505002',
            '06505003',
            '06708001',
            '06708002',
            '06708003',
            '06708004',
            '06708005',
            '06708006',
            '06708007',
            '06708008',
            '06708009',
            '06708010',
            '06708011',
            '06708012',
            '06708013',
            '07006000',
            '07121001',
            '07234000',
            '07305000',
            '07521000',
            '07621000',
            '07707000',
            '105',
            '170599',
            '5012017-39',
            '7054033',
            '7311031',
            '9050114',
            '9520568',
            '9480005',
            '9170153',
            '9270132',
            '9060230',
            '9250065',
            '8000011',
            '8000012',
            '8000013',
            '0520200',
            '1908929',
            '2050950',
            '3151051',
            '4669010',
            '4057010',
            '1065101',
            '1265010',
            '0581160',
            '0581910',
            '9010472',
            '9410022',
            '9520969',
            '9521248',
            '0106575',
            '9520636',
            '9380188',
            '9080386',
            '9350764',
            '9020146',
            '9107444',
            '9060705',
            '9230116',
            '9111111',
            '9520867',
            '9060578',
            '9520703',
            '9233043',
            '9510118',
            '9050326',
            '9053901',
            '9051885',
            '9270865',
            '9180287',
            '9160166',
            '9050284',
            '0616011',
            '1061001',
            '0637010',
            '944350',
            '944351',
            '9450029',
            '9450030',
            '9450033',
            '9450259',
            '9450293',
            '9450379',
            '9450384',
            '9470033',
            '9520285',
            '9531872',
            '9580105',
            '9952078',
            '9999999',
            'aacdefgh',
            'abcdefg',
            'agnos77',
            'counselor',
            'GYMPAR',
            'IDL0006',
            'IDL0008',
            'neo0',
            'neo15',
            'neo16',
            'neo17',
            'neo24',
            'neo27',
            'neo28',
            'neo33',
            'neo5',
            'neo6',
            'palio195902',
            'r566656',
            'sge98',
            'sivit97',
        );
        if(array_search(trim($unit["RegistryNo"]), $ignoredRegistryNos) !== false) {
            return true;
        }
        return false;
    }

    private function distinguishSchoolType($schoolType, $unit) {
        $schoolType = $this->convert_greek_accents(trim($schoolType));
        $unitName = $this->convert_greek_accents(trim($unit["Name"]));
        if($schoolType == 'ΔΙΕΥΘΥΝΣΗ ΕΚΠΑΙΔΕΥΣΗΣ') {
            if(mb_strpos($unitName, 'ΔΗΜΟΤ', 0, 'UTF-8') !== false || mb_strpos($unitName, 'Π.Ε.', 0, 'UTF-8') !== false || mb_strpos($unitName, 'ΠΡΩΤΟΒ', 0, 'UTF-8') !== false) {
                return 'ΔΙΕΥΘΥΝΣΗ ΠΡΩΤΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ';
            } else {
                return 'ΔΙΕΥΘΥΝΣΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ';
            }
        }
        if($schoolType == 'ΓΡΑΦΕΙΟ ΕΚΠΑΙΔΕΥΣΗΣ') {
            if(mb_strpos($unitName, 'ΔΗΜΟΤ', 0, 'UTF-8') !== false || mb_strpos($unitName, 'Π.Ε.', 0, 'UTF-8') !== false || mb_strpos($unitName, 'ΠΡΩΤΟΒ', 0, 'UTF-8') !== false) {
                return 'ΓΡΑΦΕΙΟ ΠΡΩΤΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ';
            } else {
                return 'ΓΡΑΦΕΙΟ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ';
            }
        }
        return $schoolType;
    }

    private function getDictionary($unit, $value, &$a_values, &$o_values, $exceptionString, $classname, $idAttr, $attr, callable $reloadFunc) {
        global $entityManager;

        if(trim($value) == 'null') { return -1; }

        $origValue = $value;
        $value = mb_strtoupper($this->convert_greek_accents(trim($value)), 'UTF-8'); // ΔΟΥ κΑΛΑΜΠΑΚΑΣ...
        $converted_values = array_map(array($this, 'convert_greek_accents'), $a_values);
        if ($value)
        {
            if (!in_array($value, $converted_values)) {
                $obj = $entityManager->getRepository($classname)->findOneBy(array(
                    $attr => $value,
                ));
                if(!isset($obj)) {
                    $obj = new $classname();
                    $setMethod = 'set'.ucfirst($attr);
                    $obj->$setMethod($origValue);
                    $entityManager->persist($obj);
                    $entityManager->flush($obj);
                }
                $reloadFunc($a_values, $o_values);
                $converted_values = array_map(array($this, 'convert_greek_accents'), $a_values);
                //$idMethod = 'get'.ucfirst($idAttr);
                //$attrMethod = 'get'.ucfirst($attr);
                //$a_values[$obj->$idMethod()] = $obj->$attrMethod();
            }
            if (!in_array($value, $converted_values)) {
                $this->isError = true;
                $this->totalRowsErrors++;
                $this->errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                 . constant('ExceptionCodes::'.$exceptionString) ." : ".constant('ExceptionMessages::'.$exceptionString)
                                 . " '".$value."'";
            }
        }
        return array_search($value, $converted_values);
    }

    function convert_greek_accents($str) {
        $unwanted_array = array('Ά' => 'Α', 'ά' => 'α', 'Έ' => 'Ε', 'έ' => 'ε', 'Ή' => 'Η', 'ή' => 'η', 'Ί' => 'Ι', 'ί' => 'ι', 'Ό' => 'Ο', 'ό' => 'ο', 'Ύ' => 'Υ', 'ύ' => 'υ', 'Ώ' => 'Ω', 'ώ' => 'ω', 'ϊ' => 'ι','ϋ' => 'υ', 'Ϊ' => 'Ι', 'Ϋ' => 'Υ');
        $str = mb_strtoupper(str_replace(array_keys($unwanted_array), array_values($unwanted_array), $str), 'UTF-8');
        return $str;
    }
}
?>
