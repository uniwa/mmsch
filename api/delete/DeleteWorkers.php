<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteWorkers($worker_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$worker_id============================================================ 
        $fWorkerID = CRUDUtils::checkIDParam('worker_id', $params, $worker_id, 'WorkerID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Workers')->findBy(array( 'workerId' => $fWorkerID ));
        $count= count($check);
 
        if ($count == 1)
            $Workers = $entityManager->find('Workers', $fWorkerID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelWorkerValue." : ".$fWorkerID, ExceptionCodes::NotFoundDelWorkerValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelWorkerValue." : ".$fWorkerID, ExceptionCodes::DuplicateDelWorkerValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'worker'  => $fWorkerID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesWorkerUnitWorkers, ExceptionCodes::ReferencesWorkerUnitWorkers);  
        
//delete from db================================================================
        $entityManager->remove($Workers);
        $entityManager->flush($Workers);
           
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