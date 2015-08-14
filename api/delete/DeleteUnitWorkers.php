<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteUnitWorkers($unit_worker_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$unit_worker_id======================================================= 
        $fUnitWorkerID = CRUDUtils::checkIDParam('unit_worker_id', $params, $unit_worker_id, 'UnitWorkerID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('UnitWorkers')->findBy(array( 'unitWorkerId' => $fUnitWorkerID ));
        $count= count($check);
 
        if ($count == 1)
            $UnitWorkers = $entityManager->find('UnitWorkers', $fUnitWorkerID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelUnitWorkerValue." : ".$fUnitWorkerID, ExceptionCodes::NotFoundDelUnitWorkerValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelUnitWorkerValue." : ".$fUnitWorkerID, ExceptionCodes::DuplicateDelUnitWorkerValue);
        
//delete from db================================================================
        $entityManager->remove($UnitWorkers);
        $entityManager->flush($UnitWorkers);
           
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