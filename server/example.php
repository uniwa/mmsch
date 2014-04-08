<?php
header("Content-Type: text/html; charset=utf-8");

require_once('config.php');

$server = $Options["ServerURL"]."/circuits";

$params = array(
    //"mm_id" => "1000423",
    //"circuit_type_id" => "4",
    //"circuit_type" => "ISDN",
    //"ldap_id" => "1",
    //"cpe_id" => "2",
    //"connection_id" => "1",
    //"circuit_id" => "3",
    //"phone_number" => "9695028013",
    //"bandwidth" => "2048/512Kbps",
    //"unit_network_element_id" => "4530",
    //"activated_date" => "2010-12-04",
    //"status" => true,
    "circuit_type_id" => "2",
    "phone_number" => "value",
    "status" => "TRUE",
    "activated_date" => "2003-06-01 16:08:00",
    "mm_id" => "1013390",
    "paid_by_psd" => "TRUE",
    "updated_date" => "2013-12-18 16:08:00",
    "deactivated_date" => "null",
    "bandwidth" => "24576/1024Kbps",
    "readspeed" => "null",

    "debug" => true
);


$curl = curl_init($server);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"] . ":" . $Options["ServerAdminPassWord"]);
//curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerUserName"] . ":" . $Options["ServerUserName"]);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($curl);
//$data = preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $data);
//$data = json_decode( $data );


echo "<pre>";
echo $data;
echo "<br><br>";
var_dump( json_decode($data) );
echo "</pre>";

//echo "done";
//echo "<pre>".var_dump( $data)."</pre>";

//echo $data;

?>