<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutUnitTypes( $unit_type_id, $name, $initials, $category, $education_level ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fUnitTypeID = CRUDUtils::checkIDParam('unit_type_id', $params, $unit_type_id, 'UnitTypeID');

        //init entity for update row============================================
        $UnitType = CRUDUtils::findIDParam($fUnitTypeID, 'UnitTypes', 'UnitType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($UnitType, $name, 'UnitTypeName', 'name', $params);
        } else if ( Validator::IsNull($UnitType->getName()) ){
            throw new Exception(ExceptionMessages::MissingUnitTypeNameValue, ExceptionCodes::MissingUnitTypeNameValue);
        } 
        
        //$initials=============================================================
        if ( Validator::IsExists('initials') ){
            CRUDUtils::EntitySetParam($UnitType, $initials, 'UnitTypeInitial', 'initials', $params);
        } else if ( Validator::IsNull($UnitType->getInitials()) ){
            throw new Exception(ExceptionMessages::MissingUnitTypeInitialValue, ExceptionCodes::MissingUnitTypeInitialValue);
        } 
        
        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($UnitType, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($UnitType->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
        //$education_level======================================================
        if ( Validator::IsExists('education_level') ){
            CRUDUtils::entitySetAssociation($UnitType, $education_level, 'EducationLevels', 'educationLevel', 'EducationLevel', $params, 'education_level');
        } else if ( Validator::IsNull($UnitType->getEducationLevel()) ){
            throw new Exception(ExceptionMessages::MissingEducationLevelValue, ExceptionCodes::MissingEducationLevelValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ut.unitTypeId) AS fresultName')
                            ->from('UnitTypes', 'ut')
                            ->where("ut.name = :name AND ut.unitTypeId != :unitTypeId")
                            ->setParameter('name', $UnitType->getName())
                            ->setParameter('unitTypeId', $UnitType->getUnitTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresultName"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedUnitTypeNameValue,ExceptionCodes::DuplicatedUnitTypeNameValue);
        }
        
        //check initials duplicate==============================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ut.unitTypeId) AS fresultInitials')
                            ->from('UnitTypes', 'ut')
                            ->where("ut.initials = :initials AND ut.unitTypeId != :unitTypeId")
                            ->setParameter('initials', $UnitType->getInitials())
                            ->setParameter('unitTypeId', $UnitType->getUnitTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresultInitials"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedUnitTypeInitialValue,ExceptionCodes::DuplicatedUnitTypeInitialValue);
        }
        
//update to db================================================================== 
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