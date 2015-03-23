<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostEducationLevels( $name ) {
    
    global $app, $entityManager;

    $EducationLevel = new EducationLevels();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($EducationLevel, $name, 'EducationLevelName', 'name', $params);

//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('EducationLevels')->findOneBy(array( 'name'  => $EducationLevel->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedEducationLevelValue,ExceptionCodes::DuplicatedEducationLevelValue);  
        
//insert to db================================================================== 
        $entityManager->persist($EducationLevel);
        $entityManager->flush($EducationLevel);

        $result["education_level_id"] = $EducationLevel->getEducationLevelId();

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