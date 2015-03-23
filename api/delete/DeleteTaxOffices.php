<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteTaxOffices($tax_office_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$tax_office_id======================================================== 
        $fTaxOfficeID = CRUDUtils::checkIDParam('tax_office_id', $params, $tax_office_id, 'TaxOfficeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('TaxOffices')->findBy(array( 'taxOfficeId' => $fTaxOfficeID ));
        $count= count($check);
 
        if ($count == 1)
            $TaxOffices = $entityManager->find('TaxOffices', $fTaxOfficeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelTaxOfficeValue." : ".$fTaxOfficeID, ExceptionCodes::NotFoundDelTaxOfficeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelTaxOfficeValue." : ".$fTaxOfficeID, ExceptionCodes::DuplicateDelTaxOfficeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'taxOffice'  => $fTaxOfficeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesTaxOfficeUnits, ExceptionCodes::ReferencesTaxOfficeUnits);
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'taxOffice'  => $fTaxOfficeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesTaxOfficeSchoolCommittees, ExceptionCodes::ReferencesTaxOfficeSchoolCommittees);
                
//delete from db================================================================
        $entityManager->remove($TaxOffices);
        $entityManager->flush($TaxOffices);
           
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