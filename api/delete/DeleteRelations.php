<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteRelations($relation_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$relation_id========================================================== 
        $fRelationID = CRUDUtils::checkIDParam('relation_id', $params, $relation_id, 'RelationID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Relations')->findBy(array( 'relationId' => $fRelationID ));
        $count= count($check);
 
        if ($count == 1)
            $Relations= $entityManager->find('Relations', $fRelationID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelRelationValue." : ".$fRelationID, ExceptionCodes::NotFoundDelRelationValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelRelationValue." : ".$fRelationID, ExceptionCodes::DuplicateDelRelationValue);
         
//delete from db================================================================
        $entityManager->remove($Relations);
        $entityManager->flush($Relations);
           
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