<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostOrientationTypes( $name, $category ) {
    
    global $app, $entityManager;

    $OrientationType = new OrientationTypes();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($OrientationType, $name, 'OrientationTypeName', 'name', $params);
     
    //$category=================================================================      
    CRUDUtils::entitySetAssociation($OrientationType, $category, 'Categories', 'category', 'Category', $params, 'category');

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('OrientationTypes')->findOneBy(array( 'name'  => $OrientationType->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedOrientationTypeValue,ExceptionCodes::DuplicatedOrientationTypeValue);  
        
//insert to db================================================================== 
        $entityManager->persist($OrientationType);
        $entityManager->flush($OrientationType);

        $result["orientation_type_id"] = $OrientationType->getOrientationTypeId();

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