<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteMunicipalities($municipality_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$municipality_id====================================================== 
        $fMunicipalityID = CRUDUtils::checkIDParam('municipality_id', $params, $municipality_id, 'MunicipalityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Municipalities')->findBy(array( 'municipalityId' => $fMunicipalityID ));
        $count= count($check);
 
        if ($count == 1)
            $Municipalities = $entityManager->find('Municipalities', $fMunicipalityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelMunicipalityValue." : ".$fMunicipalityID, ExceptionCodes::NotFoundDelMunicipalityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelMunicipalityValue." : ".$fMunicipalityID, ExceptionCodes::DuplicateDelMunicipalityValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'municipality'  => $fMunicipalityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesMunicipalityUnits, ExceptionCodes::ReferencesMunicipalityUnits);
        
        $checkReference = $entityManager->getRepository('TransferAreaMunicipalities')->findOneBy(array( 'municipality'  => $fMunicipalityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesMunicipalityTransferAreaMunicipalities, ExceptionCodes::ReferencesMunicipalityTransferAreaMunicipalities);  
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'municipality'  => $fMunicipalityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesMunicipalitySchoolCommittees, ExceptionCodes::ReferencesMunicipalitySchoolCommittees);  
        
//delete from db================================================================
        $entityManager->remove($Municipalities);
        $entityManager->flush($Municipalities);
           
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