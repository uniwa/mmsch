<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutImplementationEntities( $implementation_entity_id, $name, $initials, $street_address, $postal_code, $email, $phone_number, $domain, $url ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$municipality_id====================================================== 
        $fImplementationEntityID = CRUDUtils::checkIDParam('implementation_entity_id', $params, $implementation_entity_id, 'ImplementationEntityID');

        //init entity for update row============================================
        $ImplementationEntity = CRUDUtils::findIDParam($fImplementationEntityID, 'ImplementationEntities', 'ImplementationEntity');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($ImplementationEntity, $name, 'ImplementationEntityName', 'name', $params);
        } else if ( Validator::IsNull($ImplementationEntity->getName()) ){
            throw new Exception(ExceptionMessages::MissingImplementationEntityNameValue, ExceptionCodes::MissingImplementationEntityNameValue);
        } 
        
        //$prefecture===========================================================
        if ( Validator::IsExists('prefecture') ){
            CRUDUtils::EntitySetParam($ImplementationEntity, $initials, 'ImplementationEntityInitial', 'initials', $params);
        } else if ( Validator::IsNull($ImplementationEntity->getInitials()) ){
            throw new Exception(ExceptionMessages::MissingImplementationEntityInitialValue, ExceptionCodes::MissingImplementationEntityInitialValue);
        } 
        
    //$street_address===========================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $street_address, 'ImplementationEntityStreetAddress', 'street_address', $params, false, true);
    
    //$postal_code==============================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $postal_code, 'ImplementationEntityPostalCode', 'postal_code', $params, false, true);
    
    //$email====================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $email, 'ImplementationEntityEmail', 'email', $params, false, true);
    
    //$phone_number=============================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $phone_number, 'ImplementationEntityPhoneNumber', 'phone_number', $params, false, true);
    
    //$domain===================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $domain, 'ImplementationEntityDomain', 'domain', $params, false, true);
    
    //$url======================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $url, 'ImplementationEntityUrl', 'url', $params, false, true);
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ie.implementationEntityId) AS fresultName')
                            ->from('ImplementationEntities', 'ie')
                            ->where("ie.name = :name AND ie.implementationEntityId != :implementationEntityId")
                            ->setParameter('name', $ImplementationEntity->getName())
                            ->setParameter('implementationEntityId', $ImplementationEntity->getImplementationEntityId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresultName"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedImplementationEntityValue,ExceptionCodes::DuplicatedImplementationEntityValue);
        }
        
        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ie.implementationEntityId) AS fresultInitials')
                            ->from('ImplementationEntities', 'ie')
                            ->where("ie.initials = :initials AND ie.implementationEntityId != :implementationEntityId")
                            ->setParameter('initials', $ImplementationEntity->getInitials())
                            ->setParameter('implementationEntityId', $ImplementationEntity->getImplementationEntityId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresultInitials"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedImplementationEntityInitialsValue,ExceptionCodes::DuplicatedImplementationEntityInitialsValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($ImplementationEntity);
        $entityManager->flush($ImplementationEntity);

        $result["implementation_entity_id"] = $ImplementationEntity->getImplementationEntityId();

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