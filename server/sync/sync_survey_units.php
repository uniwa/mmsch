<?php
header("Content-Type: text/html; charset=utf-8");

function sync_survey_units()
{
    global $db;
    global $Options;
    
    $rowToStop = 0;

    $progressbar_block = 100;
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
        $units_array = unserialize( file_get_contents( $Options["dbUnits"] ) );

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

            //var_dump($unit); echo "<br><br>";

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
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . ExceptionCodes::InvalidRegionEduAdminValue ." : ".ExceptionMessages::InvalidRegionEduAdminValue
                                             . " '".$unit["Perifereia"]."'";
        //                    $sql = "INSERT INTO region_edu_admins SET name='".mysql_escape_string($unit["Perifereia"])."'";
        //                    $db->query($sql);
        //                    load_region_edu_admins($a_region_edu_admins, $o_region_edu_admins);
                        }
                    }
                    $region_edu_admin_id = array_search($unit["Perifereia"], $a_region_edu_admins);


                    $unit["Diefthinsi"] = trim($unit["Diefthinsi"]);
                    if ($unit["Diefthinsi"])
                    {
                        if (!in_array($unit["Diefthinsi"], $a_edu_admins))
                        {
                            $isError = true;
                            $totalRowsErrors++;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . ExceptionCodes::InvalidEduAdminValue ." : ".ExceptionMessages::InvalidEduAdminValue
                                             . " '".$unit["Diefthinsi"]."'";

        //                    $sql = "INSERT INTO edu_admins SET "
        //                            . "name='".mysql_escape_string($unit["Diefthinsi"])."'"
        //                            . ($region_edu_admin_id ? ", region_edu_admin_id='".$region_edu_admin_id."'" : "");
        //                    $db->query($sql);
        //                    load_edu_admins($a_edu_admins, $o_edu_admins);
                        }
                    }
                    $edu_admin_id = array_search($unit["Diefthinsi"], $a_edu_admins);

                    $implementation_entity_id = $o_edu_admins[$edu_admin_id]->implementation_entity_id;


                    $unit["PostingTransferArea"] = trim($unit["PostingTransferArea"]);
                    if ($unit["PostingTransferArea"])
                    {
                        if (!in_array($unit["PostingTransferArea"], $a_transfer_areas))
                        {
                            $isError = true;
                            $totalRowsErrors++;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . ExceptionCodes::InvalidTransferAreaValue ." : ".ExceptionMessages::InvalidTransferAreaValue
                                             . " '".$unit["PostingTransferArea"]."'";
        //                    $sql = "INSERT INTO transfer_areas SET "
        //                            . "name='".mysql_escape_string($unit["PostingTransferArea"])."'"
        //                            . ($edu_admin_id ? ", edu_admin_id='".$edu_admin_id."'" : "");
        //                    //echo "<br><br>".$sql."<br><br>";
        //                    $db->query($sql);
        //                    load_transfer_areas($a_transfer_areas, $o_transfer_areas);
                        }
                        //Μόνο κατά την Δημιουργία
        //                else if ($edu_admin_id)
        //                {
        //                    $transfer_area_id = array_search($unit["PostingTransferArea"], $a_transfer_areas);
        //
        //                    if ( !$o_transfer_areas[$transfer_area_id]->edu_admin_id )
        //                    {
        //                        $sql = "UPDATE transfer_areas SET "
        //                                . "name='".mysql_escape_string($unit["PostingTransferArea"])."'"
        //                                . ($edu_admin_id ? ", edu_admin_id='".$edu_admin_id."'" : "")
        //                                . " WHERE transfer_area_id='".$transfer_area_id."'";
        //                        //echo "<br><br>".$sql."<br><br>";
        //                        $db->query($sql);
        //                        load_transfer_areas($a_transfer_areas, $o_transfer_areas);
        //                    }
        //                }
                    }
                    $transfer_area_id = array_search($unit["PostingTransferArea"], $a_transfer_areas);


                    $unit["Prefecture"] = trim($unit["Prefecture"]);
                    if ($unit["Prefecture"])
                    {
                        if (!in_array($unit["Prefecture"], $a_prefectures))
                        {
                            $isError = true;
                            $totalRowsErrors++;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . ExceptionCodes::InvalidPrefectureValue ." : ".ExceptionMessages::InvalidPrefectureValue
                                             . " '".$unit["Prefecture"]."'";
        //                    $sql = "INSERT INTO prefectures SET "
        //                            . "name='".mysql_escape_string($unit["Prefecture"])."'";
        //                    $db->query($sql);
        //                    load_prefectures($a_prefectures, $o_prefectures);
                        } 
                    }
                    $prefecture_id = array_search($unit["Prefecture"], $a_prefectures);


                    $unit["Municipality"] = trim($unit["Municipality"]);
                    if ($unit["Municipality"])
                    {
                        if (!in_array($unit["Municipality"], $a_municipalities))
                        {
                            $isError = true;
                            $totalRowsErrors++;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . ExceptionCodes::InvalidMunicipalityValue ." : ".ExceptionMessages::InvalidMunicipalityValue
                                             . " '".$unit["Municipality"]."'";
        //                    $sql = "INSERT INTO municipalities SET "
        //                            . "name='".mysql_escape_string($unit["Municipality"])."'"
        //                            . ($transfer_area_id ? ", transfer_area_id='".$transfer_area_id."'" : "")
        //                            . ($prefecture_id ? ", prefecture_id='".$prefecture_id."'" : "");
        //                    $db->query($sql);
        //                    load_municipalities($a_municipalities, $o_municipalities);
                        }           
                        //Μόνο κατά την Δημιουργία
        //                else if ($transfer_area_id && $prefecture_id)
        //                {
        //                    $municipality_id = array_search($unit["Municipality"], $a_municipalities);
        //
        //                    if ( !$o_municipalities[$municipality_id]->transfer_area_id || !$o_municipalities[$municipality_id]->prefecture_id)
        //                    {
        //                        $sql = "UPDATE municipalities SET "
        //                            . "name='".mysql_escape_string($unit["Municipality"])."'"
        //                            . ($transfer_area_id ? ", transfer_area_id='".$transfer_area_id."'" : "")
        //                            . ($prefecture_id ? ", prefecture_id='".$prefecture_id."'" : "")
        //                            . " WHERE municipality_id='".$municipality_id."'";
        //                        $db->query($sql);
        //                        load_municipalities($a_municipalities, $o_municipalities);
        //                    }
        //                }
                    }
                    $municipality_id = array_search($unit["Municipality"], $a_municipalities);



                    $unit["SchoolType"] = trim($unit["SchoolType"]);
                    if ($unit["SchoolType"])
                    {
                        if (!in_array($unit["SchoolType"], $a_sync_unit_types))
                        {
                            $isError = true;
                            $totalRowsErrors++;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . ExceptionCodes::InvalidUnitTypeValue ." : ".ExceptionMessages::InvalidUnitTypeValue
                                             . " '".$unit["SchoolType"]."'";
        //                    $sql = "INSERT INTO sync_types SET "
        //                            . "name='".mysql_escape_string($unit["SchoolType"])."'";
        //                    $db->query($sql);
        //                    load_sync_unit_types($a_sync_unit_types, $o_sync_unit_types);
                        }
                    }
                    $sync_unit_type_id = array_search($unit["SchoolType"], $a_sync_unit_types);

                    if ($sync_unit_type_id)
                    {
                        $unit_type_id = $o_sync_unit_types[ $sync_unit_type_id ]->unit_type_id;
                        $operation_shift_id = $o_sync_unit_types[ $sync_unit_type_id ]->operation_shift_id;
                        $legal_character_id = $o_sync_unit_types[ $sync_unit_type_id ]->legal_character_id;
                        $orientation_type_id = $o_sync_unit_types[ $sync_unit_type_id ]->orientation_type_id;
                        $special_type_id = $o_sync_unit_types[ $sync_unit_type_id ]->special_type_id;
                    }


                    $unit["SchoolDOY"] = trim($unit["SchoolDOY"]);
                    if ($unit["SchoolDOY"])
                    {
                        if (!in_array($unit["SchoolDOY"], $a_tax_offices))
                        {
                            $isError = true;
                            $totalRowsErrors++;
                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . ExceptionCodes::InvalidTaxOfficeValue ." : ".ExceptionMessages::InvalidTaxOfficeValue
                                             . " '".$unit["SchoolDOY"]."'";
        //                    $sql = "INSERT INTO tax_offices SET "
        //                            . "name='".mysql_escape_string($unit["SchoolDOY"])."'";
        //                    $db->query($sql);
        //                    load_tax_offices($a_tax_offices, $o_tax_offices);
                        }
                    }
                    $tax_office_id = array_search($unit["SchoolDOY"], $a_tax_offices);


                    $unit["SchoolLevel"] = trim($unit["SchoolLevel"]);
                    $education_level_id = $unit["SchoolLevel"];


                    $unit["Active"] = trim($unit["Active"]);
                    $unit["Anastoli"] = trim($unit["Anastoli"]);

                    if (($unit["Active"] == "true") && ($unit["Anastoli"] == "false"))
                        $state_id = array_search("ΕΝΕΡΓΗ", $a_states);
                    else if (($unit["Active"] == "true") && ($unit["Anastoli"] == "true"))
                        $state_id = array_search("ΣΕ ΑΝΑΣΤΟΛΗ", $a_states);
                    else if (($unit["Active"] == "false") && ($unit["Anastoli"] == "true"))
                        $state_id = array_search("ΚΑΤΑΡΓΗΜΕΝΗ", $a_states);
                    else if (($unit["Active"] == "false") && ($unit["Anastoli"] == "false"))
                        $state_id = array_search("ΚΑΤΑΡΓΗΜΕΝΗ", $a_states);


                    $category_id = array_search("ΣΧΟΛΙΚΕΣ ΜΟΝΑΔΕΣ", $a_categories);


                    if (!$isError)
                    {
                        $params = array(
                            "registry_no"           => trim($unit["RegistryNo"]),
                            //"gluc" => "",
                            "source"                => "SURVEY",
                            "name"                  => trim($unit["Name"]),
                            "special_name"          => trim($unit["SpecialName"]),
                            "category"              => $a_categories[ $category_id ],
                            "active"                => trim($unit["Active"]),
                            "suspended"             => trim($unit["Anastoli"]),
                            "state"                 => $a_states[ $state_id ],
                            "region_edu_admin"      => $a_region_edu_admins[ $region_edu_admin_id ],
                            "edu_admin"             => $a_edu_admins[ $edu_admin_id ],
                            "implementation_entity" => $a_implementation_entities[ $implementation_entity_id ],
                            "transfer_area"         => $a_transfer_areas[ $transfer_area_id ],
                            "municipality"          => $a_municipalities[ $municipality_id ],
                            "prefecture"            => $a_prefectures[ $prefecture_id ],
                            "unit_type"             => $a_unit_types[ $unit_type_id ],
                            "operation_shift"       => $a_operation_shifts[ $operation_shift_id ],
                            "legal_character"       => $a_legal_characters[ $legal_character_id ],
                            "orientation_type"      => $a_orientation_types[ $orientation_type_id ],
                            "special_type"          => $a_special_types[ $special_type_id ],
                            "education_level"       => $a_education_levels[ $education_level_id ],
                            "postal_code"           => trim($unit["PostalCode"]),
                            "area_team_number"      => trim($unit["AreaTeam"]),
                            "email"                 => trim($unit["Email"]),
                            "fax_number"            => trim($unit["FaxNumber"]),
                            "street_address"        => trim($unit["StreetAddress"]),
                            "phone_number"          => trim($unit["TelephoneNumber"]),
                            "levels_count"          => trim($unit["LevelsCount"]),
                            "groups_count"          => trim($unit["GroupsCount"]),
                            "students_count"        => trim($unit["StudentsSum"]),
                            "last_sync"             => $last_sync,
                            "last_update"           => trim($unit["LastUpdated"]),
                            "tax_number"            => trim($unit["SchoolAFM"]),
                            "tax_office"            => $a_tax_offices[ $tax_office_id ],
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
                            $mm_id = $data->mm_id;
                        }
                        else
                        {
                            $isError = true;

                            $blockRowsErrors++;
                            $totalRowsErrors++;

                            $errorMessages[] = "[Script] ".$unit["RegistryNo"]." : ".trim($unit["Name"])." => "
                                             . $data->status." : ".$data->message;
                        }
                    }

    //= Workers ====================================================================

                    if ((!$isError) && (trim ($unit["Manager"]["RegistryNo"]) <> ""))
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
                            $worker_id = $data->worker_id;
                        }    
                        else
                        {
                            $isError = true;

                            $blockRowsErrors++;
                            $totalRowsErrors++;

                            $errorMessages[] = "[Workers] registry_no : ".$unit["RegistryNo"]." => ".$data->status." : ".$data->message;
                        }
                    }


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
            //
            //                    //= Committees =============================================
            //                    if ((!$isError) && $fMmId && (trim($unit["SchoolCommitteeAFM"] ) <> ""))
            //                    {
            //                        switch (trim($unit["SchoolLevel"]))
            //                        {
            //                            case 1: $fName = "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΠΡΩΤΟΒΑΘΜΙΑΣ ".$unit["Municipality"];  break;
            //                            case 2: $fName = "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ".$unit["Municipality"];  break;
            //                            default : $fName = ""; break;
            //                        }
            //                                             
            //                        $filter = array(
            //                            new DFC(UnitsExt::FIELD_NAME, $fName, DFC::EXACT),
            //                            new DFC(UnitsExt::FIELD_SOURCE_ID, 1, DFC::EXACT)
            //                        );
            //                        
            //                        $oCommittee = new UnitsExt($db);
            //
            //                        $arrayCommittees = $oCommittee->findByFilter($db, $filter, true);
            //
            //                        if ( count( $arrayCommittees ) > 0 ) 
            //                        { 
            //                            $oCommittee = $arrayCommittees[0];
            //                        }
            //                        
            //                        //echo "<pre>"; var_dump($oCommittee); echo "</pre>";
            //                      
            //                        if ($oCommittee->getMmId())
            //                        {
            //                            $params = array(
            //                                "host_mm_id" => $oCommittee->getMmId(),
            //                                "guest_mm_id" => $fMmId,
            //                                "relation_state" => true,
            //                                "true_date" => null,
            //                                "true_fek" => null,
            //                                "false_date" => null,
            //                                "false_fek" => null,
            //                                "relation_type" => "ΕΞΥΠΗΡΕΤΕΙ", //3
            //                            );
            //                            
            //                            
            //                            $oRelation = new RelationsExt($db);
            //                        
            //                            $filter = array(
            //                                new DFC(RelationsExt::FIELD_HOST_MM_ID, $oCommittee->getMmId(), DFC::EXACT),
            //                                new DFC(RelationsExt::FIELD_GUEST_MM_ID, $fMmId, DFC::EXACT),
            //                                new DFC(RelationsExt::FIELD_RELATION_TYPE_ID, 3, DFC::EXACT),
            //                            );
            //
            //                            $arrayRelations = $oRelation->findByFilter($db, $filter, true);
            //
            //                            if (count( $arrayRelations ) > 0)
            //                            {
            //                                $oRelation = $arrayRelations[0];
            //                                $params["relation_id"] = $oRelation->getRelationId();
            //                            }
            //
            //                            $curl = curl_init($Options["ServerURL"]."/relations");
            //                            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            //                            curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
            //                            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
            //                            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $oRelation->getRelationId() ? "PUT" : "POST");
            //                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //                        
            //
            //                            $data = curl_exec($curl);
            //                            $data = json_decode( $data );
            //
            //                            //echo "<pre>"; var_dump($data); echo "</pre>";
            //                            
            //                            if ( ! ($data->status == 200 ))
            //                            {
            //                                $isError = true;
            //                                $blockRowsErrors++; 
            //                                $totalRowsErrors++;
            //                                $errorMessages[] = $unit["RegistryNo"]." => ".$data->status." : ".$data->message;
            //                            }    
            //                        }
            //                    }
            //                    
            //   
            //                    //= Levels & Groups ========================================
            //                    if (!$isError)
            //                    {
            //                        if (is_array($unit["Levels"]["Level"]))
            //                        {
            //                            if (key_exists("Groups", $unit["Levels"]["Level"]))
            //                            {
            //                                $tmp_level = $unit["Levels"]["Level"];
            //                                unset($unit["Levels"]["Level"]);
            //                                $unit["Levels"]["Level"][0] = $tmp_level;
            //                            }
            //                        }
            //                        
            //                        foreach ($unit["Levels"]["Level"] as $level)
            //                        {
            //                            if (trim ($level["Name"]) <> "")
            //                            {
            //                                $params = array(
            //                                    "mm_id" => $fMmId,
            //                                    "name" => trim ($level["Name"]),
            //                                    "groups_count" => $level["GroupsCount"],
            //                                    "students_count" => $level["StudentsSum"],
            //                                );
            //
            //                                $oLevel = new LevelsExt($db);
            //
            //                                $filter = array(
            //                                    new DFC(LevelsExt::FIELD_MM_ID, $fMmId, DFC::EXACT),
            //                                    new DFC(LevelsExt::FIELD_NAME, trim($level["Name"]), DFC::EXACT)
            //                                );
            //
            //                                $arrayLevels = $oLevel->findByFilter($db, $filter, true);
            //
            //                                if (count( $arrayLevels ) > 0)
            //                                {
            //                                    $oLevel = $arrayLevels[0];
            //                                    $params["level_id"] = $oLevel->getLevelId();
            //                                }
            //
            //                                $curl = curl_init($Options["ServerURL"]."/levels");
            //                                curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            //                                curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
            //                                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
            //                                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $oLevel->getLevelId() ? "PUT" : "POST");
            //                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //
            //                                $data = curl_exec($curl);
            //                                $data = json_decode( $data );
            //                                
            //                                //var_dump($data);
            //                                
            //                                if ( ! ($data->status == 200 ))
            //                                {
            //                                    $isError = true;
            //                                    $blockRowsErrors++;
            //                                    $totalRowsErrors++;
            //                                    $errorMessages[] = $unit["RegistryNo"]." => ".$data->status." : ".$data->message;
            //                                }  
            //                                else
            //                                {
            //                                    $fLevelId = $data->level_id;
            //                                }
            //                                
            //                                
            //                                if (key_exists("Name", $level["Groups"]["Group"]))
            //                                {
            //                                    $tmp_group = $level["Groups"]["Group"];
            //                                    unset($level["Groups"]["Group"]);
            //                                    $level["Groups"]["Group"][0] = $tmp_group;
            //                                }
            //
            //
            //                                foreach ($level["Groups"]["Group"] as $group )
            //                                {
            //                                    if (trim ($level["Name"]) <> "")
            //                                    {
            //                                        $params = array(
            //                                            "mm_id" => $fMmId,
            //                                            "level" => $level["Name"],
            //                                            "name" => $group["Name"],
            //                                            "students_count" => $group["Students"],
            //                                        );
            //
            //                                        $oGroup = new GroupsExt($db);
            //
            //                                        $filter = array(
            //                                            new DFC(GroupsExt::FIELD_MM_ID, $fMmId, DFC::EXACT),
            //                                            new DFC(GroupsExt::FIELD_LEVEL_ID, $fLevelId, DFC::EXACT),
            //                                            new DFC(GroupsExt::FIELD_NAME, trim($group["Name"]), DFC::EXACT)
            //                                        );
            //
            //                                        $arrayGroups = $oGroup->findByFilter($db, $filter, true);
            //
            //                                        if (count( $arrayGroups ) > 0)
            //                                        {
            //                                            $oGroup = $arrayGroups[0];
            //                                            $params["group_id"] = $oGroup->getGroupId();
            //                                        }
            //
            //                                        $curl = curl_init($Options["ServerURL"]."/groups");
            //                                        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            //                                        curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
            //                                        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
            //                                        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $oGroup->getGroupId() ? "PUT" : "POST");
            //                                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //
            //                                        $data = curl_exec($curl);
            //                                        $data = json_decode( $data );
            //
            //                                        //var_dump($data);
            //
            //                                        if ( ! ($data->status == 200 ))
            //                                        {
            //                                            $isError = true;
            //                                            $blockRowsErrors++;
            //                                            $totalRowsErrors++;
            //                                            $errorMessages[] = $unit["RegistryNo"]." => ".$data->status." : ".$data->message;
            //                                        }  
            //                                    }
            //                                }
            //
            //                            }
            //                            else 
            //                            {
            //                                $fLevelId = null;
            //                            }
            //                        }
            //                    }

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
?>