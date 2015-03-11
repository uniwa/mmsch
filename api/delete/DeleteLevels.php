<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteLevels($level_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$level_id============================================================= 
        $fLevelID = CRUDUtils::checkIDParam('level_id', $params, $level_id, 'LevelID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Levels')->findBy(array( 'levelId' => $fLevelID ));
        $count= count($check);
 
        if ($count == 1)
            $Levels = $entityManager->find('Levels', $fLevelID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelLevelsValue." : ".$fLevelID, ExceptionCodes::NotFoundDelLevelsValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelLevelsValue." : ".$fLevelID, ExceptionCodes::DuplicateDelLevelsValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Groups')->findOneBy(array( 'level'  => $fLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesLevelsGroups, ExceptionCodes::ReferencesLevelsGroups);  
        
//delete from db================================================================
        $entityManager->remove($Levels);
        $entityManager->flush($Levels);
           
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