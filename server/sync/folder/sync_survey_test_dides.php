<?php
header("Content-Type: text/html; charset=utf-8");

chdir("../");

require_once('system/includes.php');

require_once('libs/nusoap/nusoap.php');

$br = ($_SERVER["argv"] ? "\n" : "<br>");
        
        
$GLOBALS['_transient']['static']['nusoap_base']->globalDebugLevel = 0;

$start = 0;
$buffer = 5;
$rowToStop = 0;

ob_start();

$logMessage = array();

echo $br;

$msg = "DIDES :: Synchronization with Survey started at : ".date("d/m/Y H:i:s");
echo $msg.$br.$br; $logMessage[] = $msg."\n";

$totalSyncTime = time();

$canContinue = true;

$client = new nusoap_client('https://ws.is.sch.gr/Retriever.svc?wsdl', 'wsdl');
$err = $client->getError();

if ($err)
{
    echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
    $logMessage[] = "Constructor error : ".var_export($err, true);
    $canContinue = false;
}

$client->setCredentials('schoolws', 'Apl0us+3fs!', 'basic');
$client->soap_defencoding = 'UTF-8';
$client->decode_utf8 = false;

$fLastUpdate = date('Y-m-d H:i:s');

$totalRowsErrors = 0;
$totalRowsInstalled = 0;
$totalRowsUpdated = 0;
$totalRowsSkiped = 0;
$totalRowsCounter = 0;

$totalErrorMessages = array();

while ($canContinue)
{
    $blockCounter ++;

    $msg = "Requested ".$buffer." unit".($buffer > 1 ? "s" : "" )." started from ".$start.", as block ".$blockCounter;
    echo $msg.$br; $logMessage[] = $msg;
    ob_get_flush(); ob_flush(); flush();

    $syncTime = time();

    $client->clearDebug();

    $param = array('StartAt' => $start, 
                   'Count' => $buffer, 
                   'RegistryNo' => '0100105',
             );
    
    $result = $client->call('GetDides', array('parameters' => $param), '', '', false, true);


    // Check for a fault
    if ($client->fault) 
    {
        echo '<h2>Fault</h2>';
        var_dump($result); $logMessage[] = "Fault : ".var_export($unit, true);
        $canContinue = false;
    } 
    else 
    {
        // Check for errors
        $err = $client->getError();
        if ($err) 
        {
            // Display the error
            echo '<h2>Error</h2>';
            echo $err.$br; $logMessage[] = "Error : ".$err;
            $canContinue = false;
        } 
        else 
        {
            //print_r($result);

            if (key_exists("RegistryNo", $result["GetDidesResult"]["Dide"]))
            {
                $tmp_level = $result["GetDidesResult"]["Dide"];
                unset($result["GetDidesResult"]["Dide"]);
                $result["GetDidesResult"]["Dide"][0] = $tmp_level;
            }
            
            $blockRowsErrors = 0;
            $blockRowsInstalled = 0;
            $blockRowsUpdated = 0;
            $blockRowsSkiped = 0;
            $blockRowsCounter = 0;

            $blockRowsCount = count($result["GetDidesResult"]["Dide"]);

            $msg = "Transfer completed in ".humanTiming($syncTime).", found ".$blockRowsCount." unit".($blockRowsCount > 1 ? "s" : "" );
            echo $msg.$br; $logMessage[] = $msg;
            ob_get_flush(); ob_flush(); flush();

            $proccessTime = time();
            
            $errorMessages = array();
            
            foreach ($result["GetDidesResult"]["Dide"] as $array_key => $unit)
            {
                $isError = false;
                
                echo "<pre>"; var_dump($unit); echo "</pre>";
                //die();
                
//                if ((trim($unit["Perifereia"]) <> "ΣΥΝΤΟΝΙΣΤΙΚΟ ΓΡΑΦΕΙΟ ΕΚΚΛΗΣΙΑΣΤΙΚΩΝ") &&
//                    (trim($unit["Perifereia"]) <> "ΣΥΝΤΟΝΙΣΤΙΚΟ ΓΡΑΦΕΙΟ ΜΕΙΟΝΟΤΙΚΩΝ") &&
//                    (trim($unit["Perifereia"]) <> "ΣΙΒΙΤΑΝΙΔΕΙΟΣ"))
//                {
                    
//                    $unit["Diefthinsi"] = trim($unit["Diefthinsi"]);
//                    if ($unit["Diefthinsi"])
//                    {
//                        $oSyncEduAdmin = new SyncEduAdmins($db);
//                        $filter = new DFC(SyncEduAdmins::FIELD_NAME, $unit["Diefthinsi"], DFC::EXACT);
//                        $oSyncEduAdmin = $oSyncEduAdmin->findByFilter($db, $filter, true);
//                        
//                        $oEduAdmin = ( count($oSyncEduAdmin) > 0) ? $oSyncEduAdmin[0]->fetchEduAdmins($db) : NULL;
//                    }
//                    $fEduAdmin = $unit["Diefthinsi"] && $oEduAdmin ? $oEduAdmin->getName() : NULL;
//                    
//                    
                    //$oImplementationEntity = $oEduAdmin ? $oEduAdmin->fetchImplementationEntities($db) : NULL;
                    //$fImplementationEntity = $unit["Diefthinsi"] && $oImplementationEntity ? $oImplementationEntity->getName() : NULL;
//                    
//                    
//                    $unit["PostingTransferArea"] = trim($unit["PostingTransferArea"]);
//                    if ($unit["PostingTransferArea"])
//                    {
//                        $oSyncTransferArea = new SyncTransferAreas($db);
//                        $filter = new DFC(SyncTransferAreas::FIELD_NAME, $unit["PostingTransferArea"], DFC::EXACT);
//                        $oSyncTransferArea = $oSyncTransferArea->findByFilter($db, $filter, true);
//                        
//                        $oTransferArea = ( count($oSyncTransferArea) > 0) ? $oSyncTransferArea[0]->fetchTransferAreas($db) : NULL;
//                    }
//                    $fTransferArea = $unit["PostingTransferArea"] && $oTransferArea ? $oTransferArea->getName() : NULL;
//
//                    
//                    $unit["SchoolType"] = trim($unit["SchoolType"]);
//                    if ($unit["SchoolType"])
//                    {
//                        $oSyncType = new SyncTypes($db);
//                        $filter = new DFC(SyncTypes::FIELD_NAME, $unit["SchoolType"], DFC::EXACT);
//                        $oSyncType = $oSyncType->findByFilter($db, $filter, true);
//                        
//                        $oUnitType = ( count($oSyncType) > 0) ? $oSyncType[0]->fetchUnitTypes($db) : NULL;
//                        $oOperationShift = ( count($oSyncType) > 0) ? $oSyncType[0]->fetchOperationShifts($db) : NULL;
//                        $oLegalCharacter = ( count($oSyncType) > 0) ? $oSyncType[0]->fetchLegalCharacters($db) : NULL;
//                        $oOrientationType = ( count($oSyncType) > 0) ? $oSyncType[0]->fetchOrientationTypes($db) : NULL;
//                        $oSpecialType = ( count($oSyncType) > 0) ? $oSyncType[0]->fetchSpecialTypes($db) : NULL;
//                    }
//                    $fUnitType = $unit["SchoolType"] && $oUnitType ? $oUnitType->getName() : NULL;
//                    $fOperationShift = $unit["SchoolType"] && $oOperationShift ? $oOperationShift->getName() : NULL;
//                    $fLegalCharacter = $unit["SchoolType"] && $oLegalCharacter ? $oLegalCharacter->getName() : NULL;
//                    $fOrientationType = $unit["SchoolType"] && $oOrientationType ? $oOrientationType->getName() : NULL;
//                    $fSpecialType = $unit["SchoolType"] && $oSpecialType ? $oSpecialType->getName() : NULL;

//                    switch (trim($unit["Level_A_B"]))
//                    {
//                        case "Π.Ε." : $fEducationLevel = "ΠΡΩΤΟΒΑΘΜΙΑ"; break;
//                        case "Δ.Ε." : $fEducationLevel = "ΔΕΥΤΕΡΟΒΑΘΜΙΑ"; break;
//                        default : $fEducationLevel = $unit["Level_A_B"];
//                    }
//                    
//                    if (!$isError)
//                    {
//                        $params = array(
//                                "registry_no" => trim($unit["RegistryNo"]),
////                                //"gluc" => null,
//                                "source" => "SURVEY",
//                                "name" => trim($unit["Lektiko"]),
////                                "special_name" => trim($unit["SpecialName"]),
//                                "category" => "ΣΧΟΛΙΚΕΣ ΚΑΙ ΔΙΟΙΚΗΤΙΚΕΣ ΜΟΝΑΔΕΣ",
//                                "active" => "true",
//                                "suspended" => "false",
//                                "region_edu_admin" => trim($unit["Perifereia"]),
////                                "edu_admin" => $fEduAdmin,
////                                "implementation_entity" => $fImplementationEntity,
////                                "transfer_area" => $fTransferArea,
//                                "municipality" => trim($unit["Municipality"]),
//                                "prefecture" => trim($unit["Prefecture"]),
////                                "unit_type" => $fUnitType,
////                                "operation_shift" => $fOperationShift,
////                                "legal_character" => $fLegalCharacter,
////                                "orientation_type" => $fOrientationType,
////                                "special_type" => $fSpecialType,
//                                "education_level" => trim($fEducationLevel),                            
//                                "postal_code" => trim($unit["PostalCode"]),
////                                "area_team_number" => trim($unit["AreaTeam"]),
//                                "email" => trim($unit["Email"]),
//                                "fax_number" => trim($unit["FaxNumber"]),
////                                "levels_count" => trim($unit["LevelsCount"]),
//                                "street_address" => trim($unit["StreetAddress"]),
//                                "phone_number" => trim($unit["TelephoneNumber"]),
////                                "students_sum" => trim($unit["StudentsSum"]),
////                                "groups_count" => trim($unit["GroupsCount"]),
////                                "last_update" => trim($unit["LastUpdated"]),
//                                "tax_number" => trim($unit["AFMDieythinsi"]),
////                                "tax_office" => trim($unit["SchoolDOY"]),
////                                "comments" => trim(""),
////                                "latitude" => NULL,
////                                "longitude" => NULL,
////                                "positioning" => NULL,
////                                "creation_fek" => trim($unit["SchoolCreationFEK"]),
//                        );
//
//                        $oUnit = new UnitsExt($db);
//                        
//                        $filter = array(
//                                    new DFC(UnitsExt::FIELD_REGISTRY_NO, trim($unit["RegistryNo"]), DFC::EXACT),
//                                    new DFC(UnitsExt::FIELD_SOURCE_ID, 1, DFC::EXACT)
//                                  );
//
//                        $arrayUnits = $oUnit->findByFilter($db, $filter, true);
//
//                        if (count( $arrayUnits ) > 0)
//                        {
//                            $oUnit = $arrayUnits[0];
//                            $params["mm_id"] = $oUnit->getMmId();
//                        }
//                        
//                        $curl = curl_init($Options["ServerURL"]."/units");
//                        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//                        curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
//                        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
//                        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $oUnit->getMmId() ? "PUT" : "POST");
//                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//                        
//                        $data = curl_exec($curl);
//                        $data = json_decode( $data );
//                        
//                        //$data = preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $data);
//                        //echo "<pre>".var_dump($data); echo "</pre><hr><br>";
//                        
//                        if ( ! ($data->status == 200 ))
//                        {
//                            $isError = true;
//
//                            $blockRowsErrors++;
//                            $totalRowsErrors++;
//                            
//                            $errorMessages[] = $unit["RegistryNo"]." => ".$data->status." : ".$data->message;
//                        }
//                        else
//                        {
//                            $fMmId = $data->mm_id;
//                        }
//                    }
//                    else
//                    {
//                        $fMmId = NULL;
//                    }
//
//                    //= Workers ================================================
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
//                        $oWorker = new WorkersExt($db);
//                        
//                        $filter = new DFC(WorkersExt::FIELD_REGISTRY_NO, trim($unit["Manager"]["RegistryNo"]), DFC::EXACT);
//
//                        $arrayWorkers = $oWorker->findByFilter($db, $filter, true);
//
//                        if (count( $arrayWorkers ) > 0)
//                        {
//                            $oWorker = $arrayWorkers[0];
//                            $params["worker_id"] = $oWorker->getWorkerId();
//                        }
//                        
//                        $curl = curl_init($Options["ServerURL"]."/workers");
//                        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//                        curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"].":".$Options["ServerAdminPassWord"]);
//                        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
//                        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $oWorker->getWorkerId() ? "PUT" : "POST");
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
//
//                            $blockRowsErrors++;
//                            $totalRowsErrors++;
//                            
//                            $errorMessages[] = $unit["RegistryNo"]." => ".$data->status." : ".$data->message;
//                        }    
//                        else
//                        {
//                            $fWorkerId = $data->worker_id;
//                        }
//                    }
//                    else
//                    {
//                        $fWorkerId = NULL;
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
//                    if ( ! $isError )
//                    {
//                        if (count( $arrayUnits ) > 0)
//                        {
//                            $blockRowsUpdated++;
//                            $totalRowsUpdated++;
//                        }
//                        else
//                        {
//                            $blockRowsInstalled++;
//                            $totalRowsInstalled++;
//                        }
//                        
//                    }
//                }
//                else
//                {
//                    $blockRowsSkiped++;
//                    $totalRowsSkiped++;
//                }
//                
                $totalRowsCounter++;
            }

            foreach ($errorMessages as $error) 
            {
               echo $error.$br;
               $logMessage[] = $error;
            }
        }
    }    
    
    $msg = "Installation completed in ". humanTiming($proccessTime)." :: ".$blockRowsInstalled." installed, ".$blockRowsUpdated." updated, ".$blockRowsSkiped." skipped, ".$blockRowsErrors." errors";
    echo $msg.$br; $logMessage[] = $msg;

    $msg = "Block ".$blockCounter." completed in ".humanTiming($syncTime);
    echo $msg.$br.$br; $logMessage[] = $msg."\n";
    
    $start = $start + $blockRowsCount;

    $canContinue = ($rowToStop ? ($totalRowsCounter < $rowToStop) : ($blockRowsCount == $buffer));
}

if ($totalRowsErrors > 0) 
{
    $msg = $totalRowsErrors.' error'.($totalRowsErrors > 1 ? 's' : '').' found ';
    echo $msg.$br; $logMessage[] = $msg;
}
else 
{
    $msg = "No errors found";
    echo $msg.$br; $logMessage[] = $msg;
}

$msg = "Total found ".$totalRowsCounter.' unit'.($totalRowsCounter > 1 ? 's' : '').' in '.$blockCounter.' block'.($blockCounter > 1 ? 's' : '').' :: '.$totalRowsInstalled." installed, ".$totalRowsUpdated." updated, ".$totalRowsSkiped." skipped, ".$totalRowsErrors." errors";;
echo $br.$msg.$br; $logMessage[] = "\n".$msg;

$totalSyncTimeValue = humanTiming($totalSyncTime);
$msg = 'Total elapsed time : '.$totalSyncTimeValue;
echo $msg.$br; $logMessage[] = $msg;

echo $br.$br;

ob_get_flush(); ob_flush(); flush();

$oSyncLogs = new SyncLogsExt($db);
$oSyncLogs->setMessage( implode("\n", $logMessage) );
$oSyncLogs->setStartDate($fLastUpdate);
$oSyncLogs->setRecords($totalRowsCounter);
$oSyncLogs->setInstalled($totalRowsInstalled);
$oSyncLogs->setUpdated($totalRowsUpdated);
$oSyncLogs->setSkiped($totalRowsSkiped);
$oSyncLogs->setErrors($totalRowsErrors);
$oSyncLogs->setTime($totalSyncTimeValue);
$oSyncLogs->insertIntoDatabase($db);

?>