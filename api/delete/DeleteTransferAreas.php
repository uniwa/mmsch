<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteTransferAreas($transfer_area_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$transfer_area_id===================================================== 
        $fTransferAreaID = CRUDUtils::checkIDParam('transfer_area_id', $params, $transfer_area_id, 'TransferAreaID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('TransferAreas')->findBy(array( 'transferAreaId' => $fTransferAreaID ));
        $count= count($check);
 
        if ($count == 1)
            $TransferAreas = $entityManager->find('TransferAreas', $fTransferAreaID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelTransferAreaValue." : ".$fTransferAreaID, ExceptionCodes::NotFoundDelTransferAreaValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelTransferAreaValue." : ".$fTransferAreaID, ExceptionCodes::DuplicateDelTransferAreaValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'transferArea'  => $fTransferAreaID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesTransferAreaUnits, ExceptionCodes::ReferencesTransferAreaUnits);
        
        $checkReference = $entityManager->getRepository('TransferAreaMunicipalities')->findOneBy(array( 'transferArea'  => $fTransferAreaID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesTransferAreaTransferAreaMunicipalities, ExceptionCodes::ReferencesTransferAreaTransferAreaMunicipalities);
                
//delete from db================================================================
        $entityManager->remove($TransferAreas);
        $entityManager->flush($TransferAreas);
           
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