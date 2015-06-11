<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteLegalCharacters($legal_character_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$legal_character_id=================================================== 
        $fLegalCharacterID = CRUDUtils::checkIDParam('legal_character_id', $params, $legal_character_id, 'LegalCharacterID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('LegalCharacters')->findBy(array( 'legalCharacterId' => $fLegalCharacterID ));
        $count= count($check);
 
        if ($count == 1)
            $LegalCharacters = $entityManager->find('LegalCharacters', $fLegalCharacterID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelLegalCharacterValue." : ".$fLegalCharacterID, ExceptionCodes::NotFoundDelLegalCharacterValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelLegalCharacterValue." : ".$fLegalCharacterID, ExceptionCodes::DuplicateDelLegalCharacterValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'legalCharacter'  => $fLegalCharacterID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesLegalCharacterUnits, ExceptionCodes::ReferencesLegalCharacterUnits);  
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'legalCharacter'  => $fLegalCharacterID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesLegalCharacterSyncTypes, ExceptionCodes::ReferencesLegalCharacterSyncTypes);  
        
//delete from db================================================================
        $entityManager->remove($LegalCharacters);
        $entityManager->flush($LegalCharacters);
           
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