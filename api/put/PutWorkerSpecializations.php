<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutWorkerSpecializations( $worker_specialization_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fWorkerSpecializationID = CRUDUtils::checkIDParam('worker_specialization_id', $params, $worker_specialization_id, 'WorkerSpecializationID');

        //init entity for update row============================================
        $WorkerSpecialization = CRUDUtils::findIDParam($fWorkerSpecializationID, 'WorkerSpecializations', 'WorkerSpecialization');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($WorkerSpecialization, $name, 'WorkerSpecializationName', 'name', $params);
        } else if ( Validator::IsNull($WorkerSpecialization->getName()) ){
            throw new Exception(ExceptionMessages::MissingWorkerSpecializationNameValue, ExceptionCodes::MissingWorkerSpecializationNameValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ws.workerSpecializationId) AS fresult')
                            ->from('WorkerSpecializations', 'ws')
                            ->where("ws.name = :name AND ws.workerSpecializationId != :workerSpecializationId")
                            ->setParameter('name', $WorkerSpecialization->getName())
                            ->setParameter('workerSpecializationId', $WorkerSpecialization->getWorkerSpecializationId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedWorkerSpecializationValue,ExceptionCodes::DuplicatedWorkerSpecializationValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($WorkerSpecialization);
        $entityManager->flush($WorkerSpecialization);

        $$result["worker_specialization_id"] = $WorkerSpecialization->getWorkerSpecializationId();

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