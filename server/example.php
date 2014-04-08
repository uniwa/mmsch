<?php
header("Content-Type: text/html; charset=utf-8");

require_once('config.php');

$server = $Options["ServerURL"]."/unit_dns";

$params = array(
    
//postunitnetworksobjects    
//    "ip" => "::ffff:10.10.1",
//    "object_dns_name" => "teithess.gr",
//    "unit_network_subnet_id" => "1",
    
//PUTunitnetworksobjects   
//    "unit_network_object_id" => "2",
//    "ip" => "555.555",
//    
//postunitnetworkssubnets   
//    "subnet_name" => "subnet ver3",
//    "subnet_ip" => "192.168.1.6",
//    "subnet_default_router" => "1923.16.1.254",
//    "mask" => "/33",    
//    "mm_id" => "1000019",   
    //"unit_network_subnet_type_id" => "2", 
    
//PUTunitnetworkssubnets   
//    "unit_network_subnet_id" => "1",
//    "subnet_name" => "BEE",
    
//deleteunitnetworksobjects    
//    "unit_network_subnet_id" => "1",
    
//postUnitDNS
   // "unit_dns_id" => "1",
    "unit_dns" => "test",
    "unit_ext_dns" => "test",
    "unit_uid" => "1gympall",
    
    //"prefecture" => 
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
//    "circuit_type_id" => "2",
//    "phone_number" => "value",
//    "status" => "TRUE",
//    "activated_date" => "2003-06-01 16:08:00",
//    "mm_id" => "1013390",
//    "paid_by_psd" => "TRUE",
//    "updated_date" => "2013-12-18 16:08:00",
//    "deactivated_date" => "null",
//    "bandwidth" => "24576/1024Kbps",
//    "readspeed" => "null",

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