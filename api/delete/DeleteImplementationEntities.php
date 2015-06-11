<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteImplementationEntities($implementation_entity_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$implementation_entity_id============================================= 
        $fImplementationEntityID = CRUDUtils::checkIDParam('implementation_entity_id', $params, $implementation_entity_id, 'ImplementationEntityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('ImplementationEntities')->findBy(array( 'implementationEntityId' => $fImplementationEntityID ));
        $count= count($check);
 
        if ($count == 1)
            $ImplementationEntities = $entityManager->find('ImplementationEntities', $fImplementationEntityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelImplementationEntityValue." : ".$fImplementationEntityID, ExceptionCodes::NotFoundDelImplementationEntityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelImplementationEntityValue." : ".$fImplementationEntityID, ExceptionCodes::DuplicateDelImplementationEntityValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'implementationEntity'  => $fImplementationEntityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesImplementationEntityUnits, ExceptionCodes::ReferencesImplementationEntityUnits);  
        
        $checkReference = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'implementationEntity'  => $fImplementationEntityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesImplementationEntityEduAdmins, ExceptionCodes::ReferencesImplementationEntityEduAdmins);  
        
//delete from db================================================================
        $entityManager->remove($ImplementationEntities);
        $entityManager->flush($ImplementationEntities);
           
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