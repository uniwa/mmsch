<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteWorkerSpecializations($worker_specialization_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$worker_specialization_id============================================= 
        $fWorkerSpecializationID = CRUDUtils::checkIDParam('worker_specialization_id', $params, $worker_specialization_id, 'WorkerSpecializationID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('WorkerSpecializations')->findBy(array( 'workerSpecializationId' => $fWorkerSpecializationID ));
        $count= count($check);
 
        if ($count == 1)
            $WorkerSpecializations = $entityManager->find('WorkerSpecializations', $fWorkerSpecializationID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelWorkerSpecializationValue." : ".$fWorkerSpecializationID, ExceptionCodes::NotFoundDelWorkerSpecializationValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelWorkerSpecializationValue." : ".$fWorkerSpecializationID, ExceptionCodes::DuplicateDelWorkerSpecializationValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Workers')->findOneBy(array( 'workerSpecialization'  => $fWorkerSpecializationID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesWorkerSpecializationWorkers, ExceptionCodes::ReferencesWorkerSpecializationWorkers);  
        
//delete from db================================================================
        $entityManager->remove($WorkerSpecializations);
        $entityManager->flush($WorkerSpecializations);
           
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