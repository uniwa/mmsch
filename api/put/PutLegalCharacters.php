<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutLegalCharacters( $legal_character_id, $name, $category ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$legal_character_id=================================================== 
        $fLegalCharacterID = CRUDUtils::checkIDParam('legal_character_id', $params, $legal_character_id, 'LegalCharacterID');

        //init entity for update row============================================
        $LegalCharacter = CRUDUtils::findIDParam($fLegalCharacterID, 'LegalCharacters', 'LegalCharacter');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($LegalCharacter, $name, 'LegalCharacterName', 'name', $params);
        } else if ( Validator::IsNull($LegalCharacter->getName()) ){
            throw new Exception(ExceptionMessages::MissingLegalCharacterNameValue, ExceptionCodes::MissingLegalCharacterNameValue);
        } 

        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($LegalCharacter, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($LegalCharacter->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(lc.legalCharacterId) AS fresult')
                            ->from('LegalCharacters', 'lc')
                            ->where("lc.name = :name AND lc.legalCharacterId != :legalCharacterId")
                            ->setParameter('name', $LegalCharacter->getName())
                            ->setParameter('legalCharacterId', $LegalCharacter->getLegalCharacterId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedLegalCharacterValue ,ExceptionCodes::DuplicatedLegalCharacterValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($LegalCharacter);
        $entityManager->flush($LegalCharacter);

        $result["legal_character_id"] = $LegalCharacter->getLegalCharacterId();

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