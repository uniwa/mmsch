<?php
header("Content-Type: text/html; charset=utf-8");

function sync_survey_dides_data()
{
    global $db;
    global $Options;
    
    $br = ($_SERVER["argv"] ? "\n" : "<br>");

    unlink( $Options["dbDides"] );

    $GLOBALS['_transient']['static']['nusoap_base']->globalDebugLevel = 0;

    $start = 0;
    $buffer = 500;
    $rowToStop = 0;

    ob_start();

    $logMessage = array();

    
    $script_title = "Ανάκτηση Μονάδων ΔΔΕ/ΔΠΕ/ΠΔΕ από Survey";
    echo "==================== ".$script_title." ====================".$br.$br; //$logMessage[] = $script_title."\n\n";

    $totalSyncTime = time();
    $last_sync_date = date('Y-m-d');  
    $last_sync_time = date('H:i:s');  
    $last_sync = $last_sync_date." ".$last_sync_time;  
    
    $msg = "Έναρξη Ανάκτησης : ".$last_sync;
    echo $msg.$br.$br; $logMessage[] = $msg."\n\n";
    ob_get_flush(); ob_flush(); flush();
    
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

    $units_array = array();

    while ($canContinue)
    {
        $blockCounter ++;

        $msg = "Ανάκτηση ".$buffer." ".($buffer > 1 ? "Μονάδων" : "Μονάδα" )." ξεκινώντας από τη Μονάδα ".$start;
        echo $msg.$br; $logMessage[] = $msg."\n";
        ob_get_flush(); ob_flush(); flush();

        $syncTime = time();

        $client->clearDebug();

        $param = array('StartAt' => $start, 
                       'Count' => $buffer, 
                       //'RegistryNo' => '2990094',
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
                
                $blockRowsCount = count($result["GetDidesResult"]["Dide"]);

                $proccessTime = time();

                $errorMessages = array();

                foreach ($result["GetDidesResult"]["Dide"] as $array_key => $unit)
                {
                    $units_array[ $unit['RegistryNo'] ] = $unit;

                    $totalRowsCounter++;
                }
            }
        }    

        $msg = $blockCounter."ο Μπλόκ ανακτήθηκε σε ".humanTiming($syncTime).". Βρέθηκαν ".$blockRowsCount.($blockRowsCount > 1 ? " Μονάδες" : " Μονάδα" );
        echo $msg.$br.$br; $logMessage[] = $msg."\n\n";

        $start = $start + $blockRowsCount;

        $canContinue = ($rowToStop ? ($totalRowsCounter < $rowToStop) : ($blockRowsCount == $buffer));
    }

    file_put_contents( $Options["dbDides"], serialize($units_array) );

    $msg = "Συνολικά βρέθηκαν ".$totalRowsCounter . ($totalRowsCounter > 1 ? " Μονάδες" : " Μονάδα");
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
        "time" => $totalSyncTimeValue        
    );
    
    return json_encode($result);
}
?>