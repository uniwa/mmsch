<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostMunicipalities ( $name, $prefecture ) {
    
    global $app, $entityManager;

    $Municipality = new Municipalities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($Municipality, $name, 'MunicipalityName', 'name', $params);
     
    //$prefecture===============================================================      
    CRUDUtils::entitySetAssociation($Municipality, $prefecture, 'Prefectures', 'prefecture', 'Prefecture', $params, 'prefecture');
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('Municipalities')->findOneBy(array( 'name'  => $Municipality->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedMunicipalityValue,ExceptionCodes::DuplicatedMunicipalityValue);  
        
//insert to db================================================================== 
        $entityManager->persist($Municipality);
        $entityManager->flush($Municipality);

        $result["municipality_id"] = $Municipality->getMunicipalityId();
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