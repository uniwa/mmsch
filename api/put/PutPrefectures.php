<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutPrefectures( $prefecture_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$prefecture_id======================================================== 
        $fPrefectureID = CRUDUtils::checkIDParam('prefecture_id', $params, $prefecture_id, 'PrefectureID');

        //init entity for update row============================================
        $Prefecture = CRUDUtils::findIDParam($fPrefectureID, 'Prefectures', 'Prefecture');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($Prefecture, $name, 'PrefectureName', 'name', $params);
        } else if ( Validator::IsNull($Prefecture->getName()) ){
            throw new Exception(ExceptionMessages::MissingPrefectureNameValue, ExceptionCodes::MissingPrefectureNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(p.prefectureId) AS fresult')
                            ->from('Prefectures', 'p')
                            ->where("p.name = :name AND p.prefectureId != :prefectureId")
                            ->setParameter('name', $Prefecture->getName())
                            ->setParameter('prefectureId', $Prefecture->getPrefectureId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedPrefectureValue ,ExceptionCodes::DuplicatedPrefectureValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($Prefecture);
        $entityManager->flush($Prefecture);

        $result["prefecture_id"] = $Prefecture->getPrefectureId();

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