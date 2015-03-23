<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostWorkerSpecializations ( $name ) {
    
    global $app, $entityManager;

    $WorkerSpecialization = new WorkerSpecializations();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($WorkerSpecialization, $name, 'WorkerSpecializationName', 'name', $params);

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('WorkerSpecializations')->findOneBy(array( 'name'  => $WorkerSpecialization->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedWorkerSpecializationValue,ExceptionCodes::DuplicatedWorkerSpecializationValue);  
        
//insert to db================================================================== 
        $entityManager->persist($WorkerSpecialization);
        $entityManager->flush($WorkerSpecialization);

        $result["worker_specialization_id"] = $WorkerSpecialization->getWorkerSpecializationId();
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