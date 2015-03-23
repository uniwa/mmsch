<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteGroups($group_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$group_id============================================================= 
        $fGroupID = CRUDUtils::checkIDParam('group_id', $params, $group_id, 'GroupID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Groups')->findBy(array( 'groupId' => $fGroupID ));
        $count= count($check);
 
        if ($count == 1)
            $Groups = $entityManager->find('Groups', $fGroupID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelGroupValue." : ".$fGroupID, ExceptionCodes::NotFoundDelGroupValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelGroupValue." : ".$fGroupID, ExceptionCodes::DuplicateDelGroupValue);
                        
//delete from db================================================================
        $entityManager->remove($Groups);
        $entityManager->flush($Groups);
           
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