<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutOrientationTypes( $orientation_type_id, $name, $category ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$orientation_type_id================================================== 
        $fOrientationTypeID = CRUDUtils::checkIDParam('orientation_type_id', $params, $orientation_type_id, 'OrientationTypeID');

        //init entity for update row============================================
        $OrientationType = CRUDUtils::findIDParam($fOrientationTypeID, 'OrientationTypes', 'OrientationType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($OrientationType, $name, 'OrientationTypeName', 'name', $params);
        } else if ( Validator::IsNull($OrientationType->getName()) ){
            throw new Exception(ExceptionMessages::MissingOrientationTypeNameValue, ExceptionCodes::MissingOrientationTypeNameValue);
        } 

        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($OrientationType, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($OrientationType->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ot.orientationTypeId) AS fresult')
                            ->from('OrientationTypes', 'ot')
                            ->where("ot.name = :name AND ot.orientationTypeId != :orientationTypeId")
                            ->setParameter('name', $OrientationType->getName())
                            ->setParameter('orientationTypeId', $OrientationType->getOrientationTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedOrientationTypeValue ,ExceptionCodes::DuplicatedOrientationTypeValue);
        }
        
//update to db================================================================== 
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