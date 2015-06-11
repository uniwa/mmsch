<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutTransferAreaMunicipalities( $transfer_area_municipality_id, $transfer_area, $municipality ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$transfer_area_municipality_id======================================== 
        $fTransferAreaMunicipalityID = CRUDUtils::checkIDParam('transfer_area_municipality_id', $params, $transfer_area_municipality_id, 'TransferAreaMunicipalityID');

        //init entity for update row============================================
        $TransferAreaMunicipality = CRUDUtils::findIDParam($fTransferAreaMunicipalityID, 'TransferAreaMunicipalities', 'TransferAreaMunicipality');
        
        //$transfer_area========================================================
        if ( Validator::IsExists('transfer_area') ){
            CRUDUtils::entitySetAssociation($TransferAreaMunicipality, $transfer_area, 'TransferAreas', 'transferArea', 'TransferArea', $params, 'transfer_area');
        } else if ( Validator::IsNull($TransferAreaMunicipality->getTransferArea()) ){
            throw new Exception(ExceptionMessages::MissingTransferAreaNameValue, ExceptionCodes::MissingTransferAreaNameValue);
        } 
        
        //$municipality=========================================================
        if ( Validator::IsExists('municipality') ){
            CRUDUtils::entitySetAssociation($TransferAreaMunicipality, $municipality, 'Municipalities', 'municipality', 'Municipality', $params, 'municipality');
        } else if ( Validator::IsNull($TransferAreaMunicipality->getMunicipality()) ){
            throw new Exception(ExceptionMessages::MissingMunicipalityValue, ExceptionCodes::MissingMunicipalityValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(tam.transferAreaMunicipalityId) AS fresult')
                            ->from('TransferAreaMunicipalities', 'tam')
                            ->where("tam.transferArea = :transferArea AND tam.municipality = :municipality AND tam.transferAreaMunicipalityId != :transferAreaMunicipalityId")
                            ->setParameter('transferArea', $TransferAreaMunicipality->getTransferArea())
                            ->setParameter('municipality', $TransferAreaMunicipality->getMunicipality())
                            ->setParameter('transferAreaMunicipalityId', $TransferAreaMunicipality->getTransferAreaMunicipalityId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedTransferAreaValue,ExceptionCodes::DuplicatedTransferAreaValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($TransferAreaMunicipality);
        $entityManager->flush($TransferAreaMunicipality);

        $result["transfer_area_municipality_id"] = $TransferAreaMunicipality->getTransferAreaMunicipalityId();

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