<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutTransferAreas( $transfer_area_id, $name, $edu_admin ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$transfer_area_id===================================================== 
        $fTransferAreaID = CRUDUtils::checkIDParam('transfer_area_id', $params, $transfer_area_id, 'TransferAreaID');

        //init entity for update row============================================
        $TransferArea = CRUDUtils::findIDParam($fTransferAreaID, 'TransferAreas', 'TransferArea');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($TransferArea, $name, 'TransferAreaName', 'name', $params);
        } else if ( Validator::IsNull($TransferArea->getName()) ){
            throw new Exception(ExceptionMessages::MissingTransferAreaNameValue, ExceptionCodes::MissingTransferAreaNameValue);
        } 
        
        //$edu_admin============================================================
        if ( Validator::IsExists('edu_admin') ){
            CRUDUtils::entitySetAssociation($TransferArea, $edu_admin, 'EduAdmins', 'eduAdmin', 'EduAdmin', $params, 'edu_admin');
        } else if ( Validator::IsNull($TransferArea->getEduAdmin()) ){
            throw new Exception(ExceptionMessages::MissingEduAdminValue, ExceptionCodes::MissingEduAdminValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ta.transferAreaId) AS fresult')
                            ->from('TransferAreas', 'ta')
                            ->where("ta.name = :name AND ta.transferAreaId != :transferAreaId")
                            ->setParameter('name', $TransferArea->getName())
                            ->setParameter('transferAreaId', $TransferArea->getTransferAreaId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedTransferAreaValue,ExceptionCodes::DuplicatedTransferAreaValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($TransferArea);
        $entityManager->flush($TransferArea);

        $result["transfer_area_id"] = $TransferArea->getTransferAreaId();

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