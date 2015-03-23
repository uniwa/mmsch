<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostTransferAreas ( $name, $edu_admin ) {
    
    global $app, $entityManager;

    $TransferArea = new TransferAreas();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($TransferArea, $name, 'TransferAreaName', 'name', $params);
     
    //$edu_admin================================================================      
    CRUDUtils::entitySetAssociation($TransferArea, $edu_admin, 'EduAdmins', 'eduAdmin', 'EduAdmin', $params, 'edu_admin');
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('TransferAreas')->findOneBy(array( 'name'  => $TransferArea->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedTransferAreaValue,ExceptionCodes::DuplicatedTransferAreaValue);  
        
//insert to db================================================================== 
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