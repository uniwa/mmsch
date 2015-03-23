<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostUnitTypes ( $name, $initials, $category, $education_level ) {
    
    global $app, $entityManager;

    $UnitType = new UnitTypes();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($UnitType, $name, 'UnitTypeName', 'name', $params);
     
    //$initials=================================================================
    CRUDUtils::EntitySetParam($UnitType, $initials, 'UnitTypeInitial', 'initials', $params);
     
    //$category=================================================================      
    CRUDUtils::entitySetAssociation($UnitType, $category, 'Categories', 'category', 'Category', $params, 'category');
    
    //$education_level==========================================================      
    CRUDUtils::entitySetAssociation($UnitType, $education_level, 'EducationLevels', 'educationLevel', 'EducationLevel', $params, 'education_level');

//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('UnitTypes')->findOneBy(array( 'name'  => $UnitType->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedUnitTypeNameValue,ExceptionCodes::DuplicatedUnitTypeNameValue);  
    
        //check for initials duplicate =========================================   
        $checkDuplicateInitial = $entityManager->getRepository('UnitTypes')->findOneBy(array( 'initials'  => $UnitType->getInitials() ));
        
        if ((count($checkDuplicateInitial) != 0))
            throw new Exception(ExceptionMessages::DuplicatedUnitTypeInitialValue,ExceptionCodes::DuplicatedUnitTypeInitialValue);  
        
//insert to db================================================================== 
        $entityManager->persist($UnitType);
        $entityManager->flush($UnitType);

        $result["unit_type_id"] = $UnitType->getUnitTypeId();
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