<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteUnitTypes($unit_type_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$unit_type_id========================================================= 
        $fUnitTypeID = CRUDUtils::checkIDParam('unit_type_id', $params, $unit_type_id, 'UnitTypeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('UnitTypes')->findBy(array( 'unitTypeId' => $fUnitTypeID ));
        $count= count($check);
 
        if ($count == 1)
            $UnitTypes = $entityManager->find('UnitTypes', $fUnitTypeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelUnitTypeValue." : ".$fUnitTypeID, ExceptionCodes::NotFoundDelUnitTypeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelUnitTypeValue." : ".$fUnitTypeID, ExceptionCodes::DuplicateDelUnitTypeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'unitType'  => $fUnitTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitTypeUnits, ExceptionCodes::ReferencesUnitTypeUnits);  
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'unitType'  => $fUnitTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitTypeSyncTypes, ExceptionCodes::ReferencesUnitTypeSyncTypes);  
        
//delete from db================================================================
        $entityManager->remove($UnitTypes);
        $entityManager->flush($UnitTypes);
           
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