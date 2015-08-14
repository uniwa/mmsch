<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteUnits($mm_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
                   
        //$mm_id================================================================
        $fUnitMMId = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Units')->findBy(array( 'mmId' => $fUnitMMId ));
        $count= count($check);
 
        if ($count == 1)
            $Units = $entityManager->find('Units', $fUnitMMId);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelWorkerValue." : ".$fUnitMMId, ExceptionCodes::NotFoundDelWorkerValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelWorkerValue." : ".$fUnitMMId, ExceptionCodes::DuplicateDelWorkerValue);
        
        //check for references =================================================
        $checkReference = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitUnitWorkers, ExceptionCodes::ReferencesUnitUnitWorkers);
        
        $checkReference = $entityManager->getRepository('Relations')->findOneBy(array( 'guestMm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitGuestRelations, ExceptionCodes::ReferencesUnitGuestRelations);  
        
        $checkReference = $entityManager->getRepository('Relations')->findOneBy(array( 'hostMm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitHostRelations, ExceptionCodes::ReferencesUnitHostRelations);  
        
        $checkReference = $entityManager->getRepository('Levels')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitLevels, ExceptionCodes::ReferencesUnitLevels);  
        
        $checkReference = $entityManager->getRepository('Groups')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitGroups, ExceptionCodes::ReferencesUnitGroups);  
    
        $checkReference = $entityManager->getRepository('UnitDns')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitUnitDns, ExceptionCodes::ReferencesUnitUnitDns);  
        
//delete from db================================================================
        $entityManager->remove($Units);
        $entityManager->flush($Units);
           
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