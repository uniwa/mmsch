<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutTaxOffices( $tax_office_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fTaxOfficeID = CRUDUtils::checkIDParam('tax_office_id', $params, $tax_office_id, 'TaxOfficeID');

        //init entity for update row============================================
        $TaxOffice = CRUDUtils::findIDParam($fTaxOfficeID, 'TaxOffices', 'TaxOffice');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($TaxOffice, $name, 'TaxOfficeName', 'name', $params);
        } else if ( Validator::IsNull($TaxOffice->getName()) ){
            throw new Exception(ExceptionMessages::MissingTaxOfficeNameValue, ExceptionCodes::MissingTaxOfficeNameValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(to.taxOfficeId) AS fresult')
                            ->from('TaxOffices', 'to')
                            ->where("to.name = :name AND to.taxOfficeId != :taxOfficeId")
                            ->setParameter('name', $TaxOffice->getName())
                            ->setParameter('taxOfficeId', $TaxOffice->getTaxOfficeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedTaxOfficeValue,ExceptionCodes::DuplicatedTaxOfficeValue);
        }
        
//update to db================================================================== 
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