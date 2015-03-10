<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostTransferAreaMunicipalities ( $transfer_area, $municipality ) {
    
    global $app, $entityManager;

    $TransferAreaMunicipality = new TransferAreaMunicipalities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$transfer_area============================================================      
    CRUDUtils::entitySetAssociation($TransferAreaMunicipality, $transfer_area, 'TransferAreas', 'transferArea', 'TransferArea', $params, 'transfer_area');
     
    //$municipality=============================================================    
    CRUDUtils::entitySetAssociation($TransferAreaMunicipality, $municipality, 'Municipalities', 'municipality', 'Municipality', $params, 'municipality');
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('TransferAreaMunicipalities')->findOneBy(array( 'municipality' => $TransferAreaMunicipality->getMunicipality(),
                                                                                                            'transferArea' => $TransferAreaMunicipality->getTransferArea()
                                                                                                           ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedTransferAreaMunicipalityValue,ExceptionCodes::DuplicatedTransferAreaMunicipalityValue);  
        
//insert to db================================================================== 
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