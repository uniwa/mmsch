<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostOperationShifts( $name, $category ) {
    
    global $app, $entityManager;

    $OperationShift = new OperationShifts();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($OperationShift, $name, 'OperationShiftName', 'name', $params);
     
    //$category=================================================================      
    CRUDUtils::entitySetAssociation($OperationShift, $category, 'Categories', 'category', 'Category', $params, 'category');

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('OperationShifts')->findOneBy(array( 'name'  => $OperationShift->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedOperationShiftValue,ExceptionCodes::DuplicatedOperationShiftValue);  
        
//insert to db================================================================== 
        $entityManager->persist($OperationShift);
        $entityManager->flush($OperationShift);

        $result["operation_shift_id"] = $OperationShift->getOperationShiftId();

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