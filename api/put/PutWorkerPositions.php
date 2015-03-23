<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutWorkerPositions( $worker_position_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fWorkerPositionID = CRUDUtils::checkIDParam('worker_position_id', $params, $worker_position_id, 'WorkerPositionID');

        //init entity for update row============================================
        $WorkerPosition = CRUDUtils::findIDParam($fWorkerPositionID, 'WorkerPositions', 'WorkerPosition');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($WorkerPosition, $name, 'WorkerPositionName', 'name', $params);
        } else if ( Validator::IsNull($WorkerPosition->getName()) ){
            throw new Exception(ExceptionMessages::MissingWorkerPositionNameValue, ExceptionCodes::MissingWorkerPositionNameValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(wp.workerPositionId) AS fresult')
                            ->from('WorkerPositions', 'wp')
                            ->where("wp.name = :name AND wp.workerPositionId != :workerPositionId")
                            ->setParameter('name', $WorkerPosition->getName())
                            ->setParameter('workerPositionId', $WorkerPosition->getWorkerPositionId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedWorkerPositionValue,ExceptionCodes::DuplicatedWorkerPositionValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($WorkerPosition);
        $entityManager->flush($WorkerPosition);

        $result["worker_position_id"] = $WorkerPosition->getWorkerPositionId();

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