<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutMunicipalities( $municipality_id, $name, $prefecture ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$municipality_id====================================================== 
        $fMunicipalityID = CRUDUtils::checkIDParam('municipality_id', $params, $municipality_id, 'MunicipalityID');

        //init entity for update row============================================
        $Municipality = CRUDUtils::findIDParam($fMunicipalityID, 'Municipalities', 'Municipality');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($Municipality, $name, 'MunicipalityName', 'name', $params);
        } else if ( Validator::IsNull($Municipality->getName()) ){
            throw new Exception(ExceptionMessages::MissingMunicipalityNameValue, ExceptionCodes::MissingMunicipalityNameValue);
        } 
        
        //$prefecture===========================================================
        if ( Validator::IsExists('prefecture') ){
            CRUDUtils::entitySetAssociation($Municipality, $prefecture, 'Prefectures', 'prefecture', 'Prefecture', $params, 'prefecture');
        } else if ( Validator::IsNull($Municipality->getPrefecture()) ){
            throw new Exception(ExceptionMessages::MissingPrefectureValue, ExceptionCodes::MissingPrefectureValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(m.municipalityId) AS fresult')
                            ->from('Municipalities', 'm')
                            ->where("m.name = :name AND m.municipalityId != :municipalityId")
                            ->setParameter('name', $Municipality->getName())
                            ->setParameter('municipalityId', $Municipality->getMunicipalityId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedMunicipalityValue,ExceptionCodes::DuplicatedMunicipalityValue);
        }
        
//update to db================================================================== 
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