<?php
header("Content-Type: text/html; charset=utf-8");

function sync_survey_dides()
{
    global $db;
    global $Options;
    
    $rowToStop = 0;

    $progressbar_block = 50;
    $totalRowsErrors = 0;
    $totalRowsInstalled = 0;
    $totalRowsUpdated = 0;
    $totalRowsSkipped = 0;
    $totalRowsCounter = 0;

    $logMessage = array();
    $totalErrorMessages = array();

    $br = ($_SERVER["argv"] ? "\n" : "<br>");

    $totalSyncTime = time();

    $last_sync_date = date('Y-m-d');  
    $last_sync_time = date('H:i:s');  
    $last_sync = $last_sync_date." ".$last_sync_time;  

    $script_title = "Συγχρονισμός Μονάδες ΔΔΕ/ΔΠΕ/ΠΔΕ με Survey";
    echo "==================== ".$script_title." ====================".$br.$br; //$logMessage[] = $script_title."\n\n";
    ob_get_flush(); ob_flush(); flush();

    if (!file_exists( $Options["dbDides"] )) 
    {
        $msg = "[Script] Το αρχείο δεδομένων ".$Options["dbDides"]." δεν βρέθηκε !!!";
        $errorMessages[] = $msg;
        
        ob_get_flush(); ob_flush(); flush();
        $totalRowsErrors++;
    }
    else 
    {
        $units_array = unserialize( file_get_contents( $Options["dbDides"] ) );
        
        $msg = "Ανάκτηση Λεξικών";
        echo $msg.$br.$br; $logMessage[] = $msg."\n\n";
        ob_get_flush(); ob_flush(); flush();

        load_region_edu_admins($a_region_edu_admins, $o_region_edu_admins);
        load_edu_admins($a_edu_admins, $o_edu_admins);
        load_transfer_areas($a_transfer_areas, $o_transfer_areas);
        load_municipalities($a_municipalities, $o_municipalities);
        load_prefectures($a_prefectures, $o_prefectures);
        load_unit_types($a_unit_types, $o_unit_types);
        load_operation_shifts($a_operation_shifts, $o_operation_shifts);
        load_legal_characters($a_legal_characters, $o_legal_characters);
        load_orientation_types($a_orientation_types, $o_orientation_types);
        load_special_types($a_special_types, $o_special_types);
        load_sync_unit_types($a_sync_unit_types, $o_sync_unit_types);
        load_tax_offices($a_tax_offices, $o_tax_offices);
        load_education_levels($a_education_levels, $o_education_levels);
        load_states($a_states, $o_states);
        load_implementation_entities($a_implementation_entities, $o_implementation_entities);
        load_categories($a_categories, $o_categories);

        $msg = "Έναρξη Συγχρονισμού : ".$last_sync;
        echo $msg.$br.$br; $logMessage[] = $msg."\n\n";
        ob_get_flush(); ob_flush(); flush();


        $msg = "Επεξεργασία";
        echo $msg; //$logMessage[] = $msg;
        ob_get_flush(); ob_flush(); flush();
        
        foreach ($units_array as $unit)
        {
            $isError = false;

            if ( ($totalRowsCounter > 0 ) && (($totalRowsCounter % $progressbar_block) == 0) )
            {
                $msg = ':'.$totalRowsCounter;
                echo $msg; //$logMessage[] = $msg;
                ob_get_flush(); ob_flush(); flush();
            }

            if (($rowToStop <> 0 ) && ($totalRowsCounter == $rowToStop)) break;

            
            if (true) //trim($unit["RegistryNo"]) == '9400001')
            {

                if ((trim($unit["Perifereia"]) <> "ΣΥΝΤΟΝΙΣΤΙΚΟ ΓΡΑΦΕΙΟ ΕΚΚΛΗΣΙΑΣΤΙΚΩΝ") &&
                    (trim($unit["Perifereia"]) <> "ΣΥΝΤΟΝΙΣΤΙΚΟ ΓΡΑΦΕΙΟ ΜΕΙΟΝΟΤΙΚΩΝ") &&
                    (trim($unit["Perifereia"]) <> "ΣΙΒΙΤΑΝΙΔΕΙΟΣ"))
                {

//= Unit =======================================================================

                    $unit["Perifereia"] = trim($unit["Perifereia"]);
                    if ($unit["Perifereia"])
                    {
                        if (!in_array($unit["Perifereia"], $a_region_edu_admins))
                        {
                            $isError = true;
                            $totalRowsErrors++;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".$unit["Lektiko"]." => "
                                             . ExceptionCodes::InvalidRegionEduAdminValue ." : ".ExceptionMessages::InvalidRegionEduAdminValue
                                             . " : '".$unit["Perifereia"]."'";
                        }
                    }
                    $region_edu_admin_id = array_search($unit["Perifereia"], $a_region_edu_admins);


//                    $unit["Diefthinsi"] = trim($unit["Lektiko"]);
//                    if ($unit["Diefthinsi"])
//                    {
//                        if (!in_array($unit["Diefthinsi"], $a_edu_admins))
//                        {
//                            $isError = true;
//                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".$unit["Lektiko"]." => "
//                                             . ExceptionCodes::InvalidEduAdminValue ." : ".ExceptionMessages::InvalidEduAdminValue
//                                             . " : '". $unit["Diefthinsi"]."'";
//                        }
//                    }
                    $edu_admin_id = array_search($unit["Diefthinsi"], $a_edu_admins);

                    $implementation_entity_id = $o_edu_admins[$edu_admin_id]->implementation_entity_id;


                    $unit["Prefecture"] = trim($unit["Prefecture"]);
                    if ($unit["Prefecture"])
                    {
                        if (!in_array($unit["Prefecture"], $a_prefectures))
                        {
                            $isError = true;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".$unit["Lektiko"]." => "
                                             . ExceptionCodes::InvalidPrefectureValue ." : ".ExceptionMessages::InvalidPrefectureValue
                                             . " : '". $unit["Prefecture"]."'";
                        } 
                    }
                    $prefecture_id = array_search($unit["Prefecture"], $a_prefectures);


                    $unit["Municipality"] = trim($unit["Municipality"]);
                    if ($unit["Municipality"])
                    {
                        if (!in_array($unit["Municipality"], $a_municipalities))
                        {
                            $isError = true;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".$unit["Lektiko"]." => "
                                             . ExceptionCodes::InvalidMunicipalityValue ." : ".ExceptionMessages::InvalidMunicipalityValue
                                             . " : '".$unit["Municipality"]."'";
                        }
                    }
                    $municipality_id = array_search($unit["Municipality"], $a_municipalities);


                    $unit["SchoolLevel"] = trim($unit["Level_A_B"]);
                    if ($unit["SchoolLevel"] == "Δ.Ε.")
                        $education_level_id = 2;
                    else if ($unit["SchoolLevel"] == "Π.Ε.")
                        $education_level_id = 1;
                    else 
                        $education_level_id = null;


                    $unit["SchoolType"] = trim($unit["Lektiko"]);
                    if ($unit["SchoolType"])
                    {
                        $unit["SchoolType"] = str_replace(".", "", $unit["SchoolType"]);
                        $unit["SchoolType"] = str_replace(" ", "", $unit["SchoolType"]);
                     
                        if ($education_level_id == 1)
                        {
                            if (strpos($unit["SchoolType"], "ΓΡΑΦΕΙΟΕΕ") !== false)
                                $unit["SchoolType"] = "ΓΡΑΦΕΙΟ ΕΠΑΓΓΕΛΜΑΤΙΚΗΣ ΕΚΠΑΙΔΕΥΣΗΣ";
                            else if (strpos($unit["SchoolType"], "ΓΡΑΦΕΙΟ") !== false)
                                $unit["SchoolType"] = "ΓΡΑΦΕΙΟ ΠΡΩΤΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ";
                            else if (strpos($unit["SchoolType"], "ΔΙΕΥΘΥΝΣΗ") !== false)
                                $unit["SchoolType"] = "ΔΙΕΥΘΥΝΣΗ ΠΡΩΤΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ";
                            else
                                $unit["SchoolType"] = "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΕΚΠΑΙΔΕΥΣΗΣ";
                        }
                        else if ($education_level_id == 2)
                        {
                            if (strpos($unit["SchoolType"], "ΓΡΑΦΕΙΟΕΕ") !== false)
                                $unit["SchoolType"] = "ΓΡΑΦΕΙΟ ΕΠΑΓΓΕΛΜΑΤΙΚΗΣ ΕΚΠΑΙΔΕΥΣΗΣ";
                            else if (strpos($unit["SchoolType"], "ΓΡΑΦΕΙΟ") !== false)
                                $unit["SchoolType"] = "ΓΡΑΦΕΙΟ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ";
                            else if (strpos($unit["SchoolType"], "ΔΙΕΥΘΥΝΣΗ") !== false)
                                $unit["SchoolType"] = "ΔΙΕΥΘΥΝΣΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΕΚΠΑΙΔΕΥΣΗΣ";
                            else
                                $unit["SchoolType"] = "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΕΚΠΑΙΔΕΥΣΗΣ";
                        }
                        else
                            $unit["SchoolType"] = null;

                        if (!in_array($unit["SchoolType"], $a_unit_types))
                        {
                            $isError = true;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".$unit["Lektiko"]." => "
                                             . ExceptionCodes::InvalidUnitTypeValue ." : ".ExceptionMessages::InvalidUnitTypeValue
                                             . " : '".$unit["SchoolType"]."'";
                        }
                    }
                    $unit_type_id = array_search($unit["SchoolType"], $a_unit_types);
                    

                    if (strpos($unit["SchoolType"], "ΓΡΑΦΕΙΟ") !== false)
                    {
                        $unit["Active"] = "false";
                        $unit["Anastoli"] = "false";
                    }
                    else
                    {
                        $unit["Active"] = "true";
                        $unit["Anastoli"] = "false";
                    }

                    if (($unit["Active"] == "true") && ($unit["Anastoli"] == "false"))
                        $state_id = array_search("ΕΝΕΡΓΗ", $a_states);
                    else if (($unit["Active"] == "true") && ($unit["Anastoli"] == "true"))
                        $state_id = array_search("ΣΕ ΑΝΑΣΤΟΛΗ", $a_states);
                    else if (($unit["Active"] == "false") && ($unit["Anastoli"] == "true"))
                        $state_id = array_search("ΚΑΤΑΡΓΗΜΕΝΗ", $a_states);
                    else if (($unit["Active"] == "false") && ($unit["Anastoli"] == "false"))
                        $state_id = array_search("ΚΑΤΑΡΓΗΜΕΝΗ", $a_states);
                    

                    
                    $category_id = array_search("ΔΙΟΙΚΗΤΙΚΕΣ ΜΟΝΑΔΕΣ", $a_categories);


                    if (!$isError)
                    {
                        $params = array(
                            "registry_no"           => trim($unit["RegistryNo"]),
//                            //"gluc" => "",
//                            "source"                => "SURVEY",
                            "name"                  => trim($unit["Lektiko"]),
//                            "special_name"          => trim($unit["SpecialName"]),
                            "category"              => $a_categories[ $category_id ],
                            "active"                => trim($unit["Active"]),
                            "suspended"             => trim($unit["Anastoli"]),
                            "state"                 => $a_states[ $state_id ],
                            "region_edu_admin"      => $a_region_edu_admins[ $region_edu_admin_id ],
                            "edu_admin"             => $a_edu_admins[ $edu_admin_id ],
                            "implementation_entity" => $a_implementation_entities[ $implementation_entity_id ],
//                            "transfer_area"         => $a_transfer_areas[ $transfer_area_id ],
                            "municipality"          => $a_municipalities[ $municipality_id ],
                            "prefecture"            => $a_prefectures[ $prefecture_id ],
                            "unit_type"             => $a_unit_types[ $unit_type_id ],
//                            "operation_shift"       => $a_operation_shifts[ $operation_shift_id ],
//                            "legal_character"       => $a_legal_characters[ $legal_character_id ],
//                            "orientation_type"      => $a_orientation_types[ $orientation_type_id ],
//                            "special_type"          => $a_special_types[ $special_type_id ],
                            "education_level"       => $a_education_levels[ $education_level_id ],
                            "postal_code"           => trim($unit["PostalCode"]),
//                            "area_team_number"      => trim($unit["AreaTeam"]),
                            "email"                 => trim($unit["Email"]),
                            "fax_number"            => trim($unit["FaxNumber"]),
                            "street_address"        => trim($unit["StreetAddress"]),
                            "phone_number"          => trim($unit["TelephoneNumber"]),
//                            "levels_count"          => trim($unit["LevelsCount"]),
//                            "groups_count"          => trim($unit["GroupsCount"]),
//                            "students_count"        => trim($unit["StudentsSum"]),
                            "last_sync"             => $last_sync,
//                            "last_update"           => trim($unit["LastUpdated"]),
                            "tax_number"            => trim($unit["AFMDieythinsi"]),
//                            "tax_office"            => $a_tax_offices[ $tax_office_id ],
//                            //"comments" => trim(""),
//                            //"latitude" => NULL,
//                            //"longitude" => NULL,
//                            //"positioning" => NULL,
//                            "fek"          => trim($unit["SchoolCreationFEK"]),
                        );

                        
                        
//array(15) {
//  ["Manager"]=>
//  array(6) {
//    ["FatherFirstname"]=>
//    string(10) "ΙΩΣΗΦ"
//    ["Firstname"]=>
//    string(14) "ΙΑΚΩΒΟΣ"
//    ["Lastname"]=>
//    string(22) "ΠΑΛΑΙΟΛΟΓΟΣ"
//    ["RegistryNo"]=>
//    string(6) "130021"
//    ["Sex"]=>
//    string(2) "Α"
//    ["TaxNumber"]=>
//    string(9) "022583802"
//  }
//}                       
                        
                        
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
                            $mm_id = $data->mm_id;
                        }
                        else
                        {
                            $isError = true;

                            $blockRowsErrors++;
                            $totalRowsErrors++;

                            $errorMessages[] = "[Units] registry_no : ".$unit["RegistryNo"]." => ".$data->status." : ".$data->message;
                        }
                    }

    //= Workers ====================================================================
//
//                    if ((!$isError) && (trim ($unit["Manager"]["RegistryNo"]) <> ""))
//                    {
//                        $params = array(
//                            "registry_no" => trim($unit["Manager"]["RegistryNo"]),
//                            "lastname" => trim($unit["Manager"]["Lastname"]),
//                            "firstname" => trim($unit["Manager"]["Firstname"]),
//                            "fathername" => trim($unit["Manager"]["FatherFirstname"]),
//                            "sex" => trim($unit["Manager"]["Sex"]),
//                            "tax_number" => trim($unit["Manager"]["TaxNumber"]),
//                        );
//
//                        $sql = "SELECT worker_id FROM workers "
//                             . "WHERE registry_no = '".mysql_escape_string(trim($unit["Manager"]["RegistryNo"]))."'";
//
//                        //echo "<br><br>".$sql."<br><br>";
//
//                        $stmt = $db->query( $sql );        
//                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
//
//                        if ( $row["worker_id"] )
//                        {
//                            $params["worker_id"] = $row["worker_id"];
//                        }
//
//                        $curl = curl_init($Options["ServerURL"]."/workers");
//                        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//                        curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
//                        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
//                        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $params["worker_id"] ? "PUT" : "POST");
//                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//
//                        $data = curl_exec($curl);
//                        $data = json_decode( $data );
//
//                        //echo "<pre>"; var_dump( $data ); echo "</pre>";
//
//                        if ($data->status == 200 )
//                        {
//                            $worker_id = $data->worker_id;
//                        }    
//                        else
//                        {
//                            $isError = true;
//
//                            $blockRowsErrors++;
//                            $totalRowsErrors++;
//
//                            $errorMessages[] = "[Workers] registry_no : ".$unit["RegistryNo"]." => ".$data->status." : ".$data->message;
//                        }
//                    }


            //
            //                    //= UnitWorkers ============================================
            //                    if ((!$isError) && $fMmId && $fWorkerId)
            //                    {
            //                        $params = array(
            //                            "mm_id" => $fMmId,
            //                            "worker_registry_no" => trim($unit["Manager"]["RegistryNo"]),
            //                            "worker_position" => "ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ",
            //                        );
            //
            //                        $oUnitWorker = new UnitWorkersExt($db);
            //                        
            //                        $filter = array(
            //                            new DFC(UnitWorkersExt::FIELD_MM_ID, $fMmId, DFC::EXACT),
            //                            new DFC(UnitWorkersExt::FIELD_WORKER_POSITION_ID, 1, DFC::EXACT)
            //                        );
            //
            //                        $arrayUnitWorkers = $oUnitWorker->findByFilter($db, $filter, true);
            //
            //                        if (count( $arrayUnitWorkers ) > 0)
            //                        {
            //                            $oUnitWorker = $arrayUnitWorkers[0];
            //                            $params["unit_worker_id"] = $oUnitWorker->getUnitWorkerId();
            //                        }
            //                        
            //                        $curl = curl_init($Options["ServerURL"]."/unit_workers");
            //                        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            //                        curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
            //                        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
            //                        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $oUnitWorker->getUnitWorkerId() ? "PUT" : "POST");
            //                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //                        
            //                        $data = curl_exec($curl);
            //                        $data = json_decode( $data );
            //                        
            //                        //var_dump($data);
            //                        
            //                        if ( ! ($data->status == 200 ))
            //                        {
            //                            $isError = true;
            //                            $blockRowsErrors++;
            //                            $totalRowsErrors++;
            //                            $errorMessages[] = $unit["RegistryNo"]." => ".$data->status." : ".$data->message;
            //                        }    
            //                    }
            //                        

                    if ( ! $isError )
                    {
                        if ($isNew)
                        {
                            $blockRowsInstalled++;
                            $totalRowsInstalled++;
                        }
                        else
                        {
                            $blockRowsUpdated++;
                            $totalRowsUpdated++;
                        }
                    }
                }
                else
                {
                    $blockRowsSkiped++;
                    $totalRowsSkipped++;
                }
            }

            $totalRowsCounter++;
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

    $msg = "Συνολικά βρέθηκαν ".$totalRowsCounter . ($totalRowsCounter == 1 ? " Μονάδα" : " Μονάδες").' :: '.$totalRowsInstalled." Καταχωρήθηκαν, ".$totalRowsUpdated." Ενημερώθηκαν, ".$totalRowsSkipped." Αγνοήθηκαν, ".$totalRowsErrors." Σφάλματα";;
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
?>