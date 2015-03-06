<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostRelationTypes( $name ) {
    
    global $app, $entityManager;

    $RelationType = new RelationTypes();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
     CRUDUtils::EntitySetParam($RelationType, $name, 'RelationTypeName', 'name', $params);

//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('RelationTypes')->findOneBy(array( 'name'  => $RelationType->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedRelationTypeValue,ExceptionCodes::DuplicatedRelationTypeValue);  
        
//insert to db================================================================== 
        $entityManager->persist($RelationType);
        $entityManager->flush($RelationType);

        $result["relation_type_id"] = $RelationType->getRelationTypeId();

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