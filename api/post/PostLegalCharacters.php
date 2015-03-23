<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostLegalCharacters( $name, $category ) {
    
    global $app, $entityManager;

    $LegalCharacter = new LegalCharacters();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($LegalCharacter, $name, 'LegalCharacterName', 'name', $params);
     
    //$category=================================================================      
    CRUDUtils::entitySetAssociation($LegalCharacter, $category, 'Categories', 'category', 'Category', $params, 'category');

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('LegalCharacters')->findOneBy(array( 'name'  => $LegalCharacter->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedLegalCharacterValue,ExceptionCodes::DuplicatedLegalCharacterValue);  
        
//insert to db================================================================== 
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