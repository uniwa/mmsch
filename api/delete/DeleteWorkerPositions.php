<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteWorkerPositions($worker_position_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$worker_position_id=================================================== 
        $fWorkerPositionID = CRUDUtils::checkIDParam('worker_position_id', $params, $worker_position_id, 'WorkerPositionID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('WorkerPositions')->findBy(array( 'workerPositionId' => $fWorkerPositionID ));
        $count= count($check);
 
        if ($count == 1)
            $WorkerPositions = $entityManager->find('WorkerPositions', $fWorkerPositionID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelWorkerPositionValue." : ".$fWorkerPositionID, ExceptionCodes::NotFoundDelWorkerPositionValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelWorkerPositionValue." : ".$fWorkerPositionID, ExceptionCodes::DuplicateDelWorkerPositionValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'workerPosition'  => $fWorkerPositionID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesWorkerPositionUnitWorkers, ExceptionCodes::ReferencesWorkerPositionUnitWorkers);  
        
//delete from db================================================================
        $entityManager->remove($WorkerPositions);
        $entityManager->flush($WorkerPositions);
           
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