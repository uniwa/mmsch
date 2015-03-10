<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostWorkerPositions ( $name ) {
    
    global $app, $entityManager;

    $WorkerPosition = new WorkerPositions();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($WorkerPosition, $name, 'WorkerPositionName', 'name', $params);

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('WorkerPositions')->findOneBy(array( 'name'  => $WorkerPosition->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedWorkerPositionValue,ExceptionCodes::DuplicatedWorkerPositionValue);  
        
//insert to db================================================================== 
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