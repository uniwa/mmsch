<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteTransferAreaMunicipalities($transfer_area_municipality_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$transfer_area_municipality_id======================================== 
        $fTransferAreaMunicipalityID = CRUDUtils::checkIDParam('transfer_area_municipality_id', $params, $transfer_area_municipality_id, 'TransferAreaMunicipalityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('TransferAreaMunicipalities')->findBy(array( 'transferAreaMunicipalityId' => $fTransferAreaMunicipalityID ));
        $count= count($check);
 
        if ($count == 1)
            $TransferAreaMunicipalities = $entityManager->find('TransferAreaMunicipalities', $fTransferAreaMunicipalityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelTransferAreaMunicipalityValue." : ".$fTransferAreaMunicipalityID, ExceptionCodes::NotFoundDelTransferAreaMunicipalityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelTransferAreaMunicipalityValue." : ".$fTransferAreaMunicipalityID, ExceptionCodes::DuplicateDelTransferAreaMunicipalityValue);
                
//delete from db================================================================
        $entityManager->remove($TransferAreaMunicipalities);
        $entityManager->flush($TransferAreaMunicipalities);
           
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