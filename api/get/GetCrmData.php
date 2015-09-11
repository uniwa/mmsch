<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Crm Data</b>
 * 
 * @global type $app
 * @global type $crmOptions
 * @param type $mm_id
 * @return string
 */

function GetCrmData( $mm_id ) {
    
    //temporary close connection with crm.sch.gr
    //return;
    
    global $app,$crmOptions;
    $result = array();
    
    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();

    try {

    //$mm_id====================================================================
    $fMMID = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');

    //execution crm api web service=============================================
        $curl = curl_init( $crmOptions['crmHOST'].$fMMID);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $crmOptions['crmUSER'] . ":" . $crmOptions['crmPASS']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3); 
	$data = curl_exec($curl);
        $data = json_decode( $data, true );
        $result["data"] = $data;
        
    //result_messages===========================================================   
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 
    return $result;
}

?>