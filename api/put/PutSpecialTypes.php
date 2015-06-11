<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutSpecialTypes( $special_type_id, $name, $category ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$special_type_id====================================================== 
        $fSpecialTypeID = CRUDUtils::checkIDParam('special_type_id', $params, $special_type_id, 'SpecialTypeID');

        //init entity for update row============================================
        $SpecialType = CRUDUtils::findIDParam($fSpecialTypeID, 'SpecialTypes', 'SpecialType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($SpecialType, $name, 'SpecialTypeName', 'name', $params);
        } else if ( Validator::IsNull($SpecialType->getName()) ){
            throw new Exception(ExceptionMessages::MissingSpecialTypeNameValue, ExceptionCodes::MissingSpecialTypeNameValue);
        } 

        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($SpecialType, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($SpecialType->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(st.specialTypeId) AS fresult')
                            ->from('SpecialTypes', 'st')
                            ->where("st.name = :name AND st.specialTypeId != :specialTypeId")
                            ->setParameter('name', $SpecialType->getName())
                            ->setParameter('specialTypeId', $SpecialType->getSpecialTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedSpecialTypeValue,ExceptionCodes::DuplicatedSpecialTypeValue);
        }
        
//update to db================================================================== 
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