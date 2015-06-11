<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteSpecialTypes($special_type_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$special_type_id====================================================== 
        $fSpecialTypeID = CRUDUtils::checkIDParam('special_type_id', $params, $special_type_id, 'SpecialTypeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('SpecialTypes')->findBy(array( 'specialTypeId' => $fSpecialTypeID ));
        $count= count($check);
 
        if ($count == 1)
            $SpecialTypes = $entityManager->find('SpecialTypes', $fSpecialTypeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelSpecialTypeValue." : ".$fSpecialTypeID, ExceptionCodes::NotFoundDelSpecialTypeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelSpecialTypeValue." : ".$fSpecialTypeID, ExceptionCodes::DuplicateDelSpecialTypeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'specialType'  => $fSpecialTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSpecialTypeUnits, ExceptionCodes::ReferencesSpecialTypeUnits);
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'specialType'  => $fSpecialTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSpecialTypeSyncTypes, ExceptionCodes::ReferencesSpecialTypeSyncTypes);
                
//delete from db================================================================
        $entityManager->remove($SpecialTypes);
        $entityManager->flush($SpecialTypes);
           
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