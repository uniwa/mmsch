<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutEducationLevels( $education_level_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$relation_type_id===================================================== 
        $fEducationLevelID = CRUDUtils::checkIDParam('education_level_id', $params, $education_level_id, 'EducationLevelID');

        //init entity for update row============================================
        $EducationLevel = CRUDUtils::findIDParam($fEducationLevelID, 'EducationLevels', 'EducationLevel');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($EducationLevel, $name, 'EducationLevelName', 'name', $params);
        } else if ( Validator::IsNull($EducationLevel->getName()) ){
            throw new Exception(ExceptionMessages::MissingEducationLevelNameValue, ExceptionCodes::MissingEducationLevelNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(el.educationLevelId) AS fresult')
                            ->from('EducationLevels', 'el')
                            ->where("el.name = :name AND el.educationLevelId != :educationLevelId")
                            ->setParameter('name', $EducationLevel->getName())
                            ->setParameter('educationLevelId', $EducationLevel->getEducationLevelId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedEducationLevelValue ,ExceptionCodes::DuplicatedEducationLevelValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($EducationLevel);
        $entityManager->flush($EducationLevel);

        $result["education_level_id"] = $EducationLevel->getEducationLevelId();

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