<?php
header("Content-Type: text/html; charset=utf-8");

chdir("../");

require_once('system/includes.php');
require_once('libs/nusoap/nusoap.php');


$GLOBALS['_transient']['static']['nusoap_base']->globalDebugLevel = 0;

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

$client->clearDebug();

$param = array(
    'RegistryNo' => $_REQUEST["registry_no"],
);

$result = $client->call('GetUnits', array('parameters' => $param), '', '', false, true);


// Check for a fault
if ($client->fault) 
{
    echo '<h2>Fault</h2>';
    var_dump($result); $logMessage[] = "Fault : ".var_export($unit, true);
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

        foreach ($result["GetUnitsResult"]["Unit"] as $array_key => $unit)
        {
            echo "<pre>"; var_dump($unit); echo "</pre>";

        }
    }
}    

?>