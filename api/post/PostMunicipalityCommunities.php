<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */

header("Content-Type: text/html; charset=utf-8");

function PostMunicipalityCommunities($name, $municipality, $myschoolMunicipalityCommunityId) {
    
    global $app, $entityManager;

    $MunicipalityCommunity = new MunicipalityCommunities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($MunicipalityCommunity, $name, 'MunicipalityCommunityName', 'name', $params);
     
    //$municipality=============================================================      
    CRUDUtils::entitySetAssociation($MunicipalityCommunity, $municipality, 'Municipalities', 'municipality', 'Municipality', $params, 'municipality');

    //$myschoolMunicipalityCommunityId==========================================
    CRUDUtils::EntitySetParam($MunicipalityCommunity, $myschoolMunicipalityCommunityId, 'MySchoolIDMunicipalityCommunity', 'myschoolMunicipalityCommunityId', $params, true, false, true);
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('MunicipalityCommunities')->findOneBy(array( 'name'  => $MunicipalityCommunity->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedMunicipalityCommunityValue,ExceptionCodes::DuplicatedMunicipalityCommunityValue);
        
        //check for myschoolMunicipalityCommunityId duplicate ==================
        $checkDuplicateMySchoolId = $entityManager->getRepository('MunicipalityCommunities')->findOneBy(array( 'myschoolMunicipalityCommunityId'  => $MunicipalityCommunity->getMyschoolMunicipalityCommunityId() ));
        
        if ((count($checkDuplicateMySchoolId) != 0))
            throw new Exception(ExceptionMessages::DuplicatedMySchoolIDMunicipalityCommunityValue,ExceptionCodes::DuplicatedMySchoolIDMunicipalityCommunityValue);
        
//insert to db================================================================== 
        $entityManager->persist($MunicipalityCommunity);
        $entityManager->flush($MunicipalityCommunity);

        $result["municipality_community_id"] = $MunicipalityCommunity->getMunicipalityCommunityId();    

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