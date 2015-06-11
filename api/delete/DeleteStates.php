<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteStates($state_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$state_id============================================================= 
        $fStateID = CRUDUtils::checkIDParam('state_id', $params, $state_id, 'StateID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('States')->findBy(array( 'stateId' => $fStateID ));
        $count= count($check);
 
        if ($count == 1)
            $States = $entityManager->find('States', $fStateID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelStateValue." : ".$fStateID, ExceptionCodes::NotFoundDelStateValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelStateValue." : ".$fStateID, ExceptionCodes::DuplicateDelStateValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'state'  => $fStateID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesStateUnits, ExceptionCodes::ReferencesStateUnits);
                
//delete from db================================================================
        $entityManager->remove($States);
        $entityManager->flush($States);
           
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>