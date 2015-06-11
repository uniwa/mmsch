<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutRelationTypes( $relation_type_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$relation_type_id===================================================== 
        $fRelationTypeId = CRUDUtils::checkIDParam('relation_type_id', $params, $relation_type_id, 'RelationTypeID');

        //init entity for update row============================================
        $RelationType = CRUDUtils::findIDParam($fRelationTypeId, 'RelationTypes', 'RelationType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($RelationType, $name, 'RelationTypeName', 'name', $params);
        } else if ( Validator::IsNull($RelationType->getName()) ){
            throw new Exception(ExceptionMessages::MissingRelationTypeNameValue, ExceptionCodes::MissingRelationTypeNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(rt.relationTypeId) AS fresult')
                            ->from('RelationTypes', 'rt')
                            ->where("rt.name = :name AND rt.relationTypeId != :relationTypeId")
                            ->setParameter('name', $RelationType->getName())
                            ->setParameter('relationTypeId', $RelationType->getRelationTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedRelationTypeValue ,ExceptionCodes::DuplicatedRelationTypeValue);
        }
        
//update to db================================================================== 
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