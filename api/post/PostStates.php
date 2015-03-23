<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostStates( $name ) {
    
    global $app, $entityManager;

    $State = new States();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($State, $name, 'StateName', 'name', $params);

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('States')->findOneBy(array( 'name'  => $State->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedStateValue,ExceptionCodes::DuplicatedStateValue);  
        
//insert to db================================================================== 
        $entityManager->persist($State);
        $entityManager->flush($State);

        $result["state_id"] = $State->getStateId();
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