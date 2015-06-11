<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteSources($source_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$source_id============================================================ 
        $fSourceID = CRUDUtils::checkIDParam('source_id', $params, $source_id, 'SourceID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Sources')->findBy(array( 'sourceId' => $fSourceID ));
        $count= count($check);
 
        if ($count == 1)
            $Sources = $entityManager->find('Sources', $fSourceID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelSourceValue." : ".$fSourceID, ExceptionCodes::NotFoundDelSourceValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelSourceValue." : ".$fSourceID, ExceptionCodes::DuplicateDelSourceValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'source'  => $fSourceID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSourceUnits, ExceptionCodes::ReferencesSourceUnits);
        
        $checkReference = $entityManager->getRepository('Workers')->findOneBy(array( 'source'  => $fSourceID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSourceWorkers, ExceptionCodes::ReferencesSourceWorkers);
                
//delete from db================================================================
        $entityManager->remove($Sources);
        $entityManager->flush($Sources);
           
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