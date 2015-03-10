<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostSpecialTypes( $name, $category ) {
    
    global $app, $entityManager;

    $SpecialType = new SpecialTypes();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($SpecialType, $name, 'SpecialTypeName', 'name', $params);
     
    //$category=================================================================      
    CRUDUtils::entitySetAssociation($SpecialType, $category, 'Categories', 'category', 'Category', $params, 'category');

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('SpecialTypes')->findOneBy(array( 'name'  => $SpecialType->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedSpecialTypeValue,ExceptionCodes::DuplicatedSpecialTypeValue);  
        
//insert to db================================================================== 
        $entityManager->persist($SpecialType);
        $entityManager->flush($SpecialType);

        $result["special_type_id"] = $SpecialType->getSpecialTypeId();

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