<?php
header("Content-Type: text/html; charset=utf-8");

chdir("../");

require_once('system/includes.php');

require_once('libs/nusoap/nusoap.php');

$br = ($_SERVER["argv"] ? "\n" : "<br>");
        
        
$GLOBALS['_transient']['static']['nusoap_base']->globalDebugLevel = 0;

$start = 0;
$buffer = 5;
$rowToStop = 5;

ob_start();

$logMessage = array();

echo $br;

$msg = "MONADES :: Synchronization with Survey started at : ".date("d/m/Y H:i:s");
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


    $blockCounter ++;

    $msg = "Requested ".$buffer." unit".($buffer > 1 ? "s" : "" )." started from ".$start.", as block ".$blockCounter;
    echo $msg.$br; $logMessage[] = $msg;
    ob_get_flush(); ob_flush(); flush();

    $syncTime = time();

    $client->clearDebug();
    
    var_dump($_REQUEST["RegistryNo"]);

    $param = array('StartAt' => $start, 
                   'Count' => $buffer, 
             );
    
    if ($_REQUEST["RegistryNo"] ) 
        $param['RegistryNo'] = $_REQUEST["RegistryNo"];
    
                       
    $result = $client->call('GetUnits', array('parameters' => $param), '', '', false, true);


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

            if (key_exists("RegistryNo", $result["GetUnitsResult"]["Unit"]))
            {
                $tmp_level = $result["GetUnitsResult"]["Unit"];
                unset($result["GetUnitsResult"]["Unit"]);
                $result["GetUnitsResult"]["Unit"][0] = $tmp_level;
            }
            
            $blockRowsErrors = 0;
            $blockRowsInstalled = 0;
            $blockRowsUpdated = 0;
            $blockRowsSkiped = 0;
            $blockRowsCounter = 0;

            $blockRowsCount = count($result["GetUnitsResult"]["Unit"]);

            $msg = "Transfer completed in ".humanTiming($syncTime).", found ".$blockRowsCount." unit".($blockRowsCount > 1 ? "s" : "" );
            echo $msg.$br; $logMessage[] = $msg;
            ob_get_flush(); ob_flush(); flush();

            $proccessTime = time();
            
            $errorMessages = array();
            
            foreach ($result["GetUnitsResult"]["Unit"] as $array_key => $unit)
            {
                $isError = false;
                
                echo "<pre>"; var_dump($unit); echo "</pre>";
                
                //die();
                
                
                
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