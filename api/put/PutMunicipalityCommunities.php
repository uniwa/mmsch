<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */

header("Content-Type: text/html; charset=utf-8");

function PutMunicipalityCommunities($municipality_community_id, $name, $municipality, $myschoolMunicipalityCommunityId) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$municipality_community_id============================================ 
        $fMunicipalityCommunityID = CRUDUtils::checkIDParam('municipality_community_id', $params, $municipality_community_id, 'MunicipalityCommunityID');

        //init entity for update row============================================
        $MunicipalityCommunity = CRUDUtils::findIDParam($fMunicipalityCommunityID, 'MunicipalityCommunities', 'MunicipalityCommunity');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($MunicipalityCommunity, $name, 'MunicipalityCommunityName', 'name', $params);
        } else if ( Validator::IsNull($MunicipalityCommunity->getName()) ){
            throw new Exception(ExceptionMessages::MissingMunicipalityCommunityNameValue, ExceptionCodes::MissingMunicipalityCommunityNameValue);
        } 
    
        //$municipality=========================================================
        if ( Validator::IsExists('municipality') ){
            CRUDUtils::entitySetAssociation($MunicipalityCommunity, $municipality, 'Municipalities', 'municipality', 'Municipality', $params, 'municipality');
        } else if ( Validator::IsNull($MunicipalityCommunity->getMunicipality() ) ){
            throw new Exception(ExceptionMessages::MissingMunicipalityValue, ExceptionCodes::MissingMunicipalityValue);
        } 
     
        //$name=================================================================
        if ( Validator::IsExists('myschoolMunicipalityCommunityId') ){
            CRUDUtils::EntitySetParam($MunicipalityCommunity, $myschoolMunicipalityCommunityId, 'MySchoolIDMunicipalityCommunity', 'myschoolMunicipalityCommunityId', $params, true, false, true);
        } else if ( Validator::IsNull($MunicipalityCommunity->getMyschoolMunicipalityCommunityId()) ){
            throw new Exception(ExceptionMessages::MissingMySchoolIDMunicipalityCommunityValue, ExceptionCodes::MissingMunicipalityCommunityNameValue);
        } 
    
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(mc.municipalityCommunityId) AS fresult')
                            ->from('MunicipalityCommunities', 'mc')
                            ->where("mc.name = :name AND mc.municipalityCommunityId != :municipalityCommunityId")
                            ->setParameter('name', $MunicipalityCommunity->getName())
                            ->setParameter('municipalityCommunityId', $MunicipalityCommunity->getMunicipalityCommunityId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedMunicipalityCommunityValue,ExceptionCodes::DuplicatedMunicipalityCommunityValue);
        }

        //check for myschoolMunicipalityCommunityId duplicate ==================
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(mc.municipalityCommunityId) AS fresult')
                            ->from('MunicipalityCommunities', 'mc')
                            ->where("mc.myschoolMunicipalityCommunityId = :myschoolMunicipalityCommunityId AND mc.municipalityCommunityId != :municipalityCommunityId")
                            ->setParameter('myschoolMunicipalityCommunityId', $MunicipalityCommunity->getMyschoolMunicipalityCommunityId())
                            ->setParameter('municipalityCommunityId', $MunicipalityCommunity->getMunicipalityCommunityId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedMySchoolIDMunicipalityCommunityValue,ExceptionCodes::DuplicatedMySchoolIDMunicipalityCommunityValue);
        }

//update to db================================================================== 
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