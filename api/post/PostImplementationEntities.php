<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostImplementationEntities ( $name, $initials, $street_address, $postal_code, $email, $phone_number, $domain, $url  ) {
    
    global $app, $entityManager;

    $ImplementationEntity = new ImplementationEntities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $name, 'ImplementationEntityName', 'name', $params);
     
    //$initials=================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $initials, 'ImplementationEntityInitial', 'initials', $params);
    
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

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('ImplementationEntities')->findOneBy(array( 'name'  => $ImplementationEntity->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedImplementationEntityValue,ExceptionCodes::DuplicatedImplementationEntityValue);  
        
        //check for initials duplicate =============================================   
        $checkDuplicateInitials = $entityManager->getRepository('ImplementationEntities')->findOneBy(array( 'initials'  => $ImplementationEntity->getInitials() ));
        
        if ((count($checkDuplicateInitials) != 0))
            throw new Exception(ExceptionMessages::DuplicatedImplementationEntityInitialsValue,ExceptionCodes::DuplicatedImplementationEntityInitialsValue);  
        
//insert to db================================================================== 
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