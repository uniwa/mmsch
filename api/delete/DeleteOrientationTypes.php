<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteOrientationTypes($orientation_type_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$orientation_type_id================================================== 
        $fOrientationTypeID = CRUDUtils::checkIDParam('orientation_type_id', $params, $orientation_type_id, 'OrientationTypeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('OrientationTypes')->findBy(array( 'orientationTypeId' => $fOrientationTypeID ));
        $count= count($check);
 
        if ($count == 1)
            $OrientationTypes = $entityManager->find('OrientationTypes', $fOrientationTypeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelOrientationTypeValue." : ".$fOrientationTypeID, ExceptionCodes::NotFoundDelOrientationTypeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelOrientationTypeValue." : ".$fOrientationTypeID, ExceptionCodes::DuplicateDelOrientationTypeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'orientationType'  => $fOrientationTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOrientationTypeUnits, ExceptionCodes::ReferencesOrientationTypeUnits);
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'orientationType'  => $fOrientationTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOrientationTypeSyncTypes, ExceptionCodes::ReferencesOrientationTypeSyncTypes);  
         
//delete from db================================================================
        $entityManager->remove($OrientationTypes);
        $entityManager->flush($OrientationTypes);
           
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