<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostTaxOffices ( $name ) {
    
    global $app, $entityManager;

    $TaxOffice = new TaxOffices();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($TaxOffice, $name, 'TaxOfficeName', 'name', $params);

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('TaxOffices')->findOneBy(array( 'name'  => $TaxOffice->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedTaxOfficeValue,ExceptionCodes::DuplicatedTaxOfficeValue);  
        
//insert to db================================================================== 
        $entityManager->persist($TaxOffice);
        $entityManager->flush($TaxOffice);

        $result["tax_office_id"] = $TaxOffice->getTaxOfficeId();
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