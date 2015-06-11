<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteEducationLevels($education_level_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$education_level_id=================================================== 
        $fEducationLevelID = CRUDUtils::checkIDParam('education_level_id', $params, $education_level_id, 'EducationLevelID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('EducationLevels')->findBy(array( 'educationLevelId' => $fEducationLevelID ));
        $count= count($check);
 
        if ($count == 1)
            $EducationLevels = $entityManager->find('EducationLevels', $fEducationLevelID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelEducationLevelValue." : ".$fEducationLevelID, ExceptionCodes::NotFoundDelEducationLevelValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelEducationLevelValue." : ".$fEducationLevelID, ExceptionCodes::DuplicateDelEducationLevelValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'educationLevel'  => $fEducationLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEducationLevelUnits, ExceptionCodes::ReferencesEducationLevelUnits);  
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'educationLevel'  => $fEducationLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEducationLevelSchoolCommittees, ExceptionCodes::ReferencesEducationLevelSchoolCommittees);  

        $checkReference = $entityManager->getRepository('UnitTypes')->findOneBy(array( 'educationLevel'  => $fEducationLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEducationLevelUnitTypes, ExceptionCodes::ReferencesEducationLevelUnitTypes);  
                
//delete from db================================================================
        $entityManager->remove($EducationLevels);
        $entityManager->flush($EducationLevels);
           
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