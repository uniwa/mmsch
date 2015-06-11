<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteOperationShifts($operation_shift_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$operation_shift_id=================================================== 
        $fOperationShiftID = CRUDUtils::checkIDParam('operation_shift_id', $params, $operation_shift_id, 'OperationShiftID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('OperationShifts')->findBy(array( 'operationShiftId' => $fOperationShiftID ));
        $count= count($check);
 
        if ($count == 1)
            $OperationShifts = $entityManager->find('OperationShifts', $fOperationShiftID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelOperationShiftValue." : ".$fOperationShiftID, ExceptionCodes::NotFoundDelOperationShiftValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelOperationShiftValue." : ".$fOperationShiftID, ExceptionCodes::DuplicateDelOperationShiftValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'operationShift'  => $fOperationShiftID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOperationShiftUnits, ExceptionCodes::ReferencesOperationShiftUnits);
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'operationShift'  => $fOperationShiftID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOperationShiftSyncTypes, ExceptionCodes::ReferencesOperationShiftSyncTypes);  
         
//delete from db================================================================
        $entityManager->remove($OperationShifts);
        $entityManager->flush($OperationShifts);
           
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