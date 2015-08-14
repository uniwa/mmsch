<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteMunicipalityCommunities($municipality_community_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$municipality_community_id============================================ 
        $fMunicipalityCommunityID = CRUDUtils::checkIDParam('municipality_community_id', $params, $municipality_community_id, 'MunicipalityCommunityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('MunicipalityCommunities')->findBy(array( 'municipalityCommunityId' => $fMunicipalityCommunityID ));
        $count= count($check);
 
        if ($count == 1)
            $MunicipalityCommunities = $entityManager->find('MunicipalityCommunities', $fMunicipalityCommunityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelMunicipalityCommunityValue." : ".$fMunicipalityCommunityID, ExceptionCodes::NotFoundDelMunicipalityCommunityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelMunicipalityCommunityValue." : ".$fMunicipalityCommunityID, ExceptionCodes::DuplicateDelMunicipalityCommunityValue);
        
//delete from db================================================================
        $entityManager->remove($MunicipalityCommunities);
        $entityManager->flush($MunicipalityCommunities);
           
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