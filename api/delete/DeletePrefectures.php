<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeletePrefectures($prefecture_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$prefecture_id======================================================== 
        $fPrefectureID = CRUDUtils::checkIDParam('prefecture_id', $params, $prefecture_id, 'PrefectureID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Prefectures')->findBy(array( 'prefectureId' => $fPrefectureID ));
        $count= count($check);
 
        if ($count == 1)
            $Prefectures = $entityManager->find('Prefectures', $fPrefectureID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelPrefectureValue." : ".$fPrefectureID, ExceptionCodes::NotFoundDelPrefectureValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelPrefectureValue." : ".$fPrefectureID, ExceptionCodes::DuplicateDelPrefectureValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'prefecture'  => $fPrefectureID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesPrefectureUnits, ExceptionCodes::ReferencesPrefectureUnits);
        
        $checkReference = $entityManager->getRepository('Municipalities')->findOneBy(array( 'prefecture'  => $fPrefectureID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesPrefectureMunicipalities, ExceptionCodes::ReferencesPrefectureMunicipalities); 
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'prefecture'  => $fPrefectureID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesPrefectureSchoolCommittees, ExceptionCodes::ReferencesPrefectureSchoolCommittees);  
         
//delete from db================================================================
        $entityManager->remove($Prefectures);
        $entityManager->flush($Prefectures);
           
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