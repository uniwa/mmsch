<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteEduAdmins($edu_admin_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$edu_admin_id========================================================= 
        $fEduAdminID = CRUDUtils::checkIDParam('edu_admin_id', $params, $edu_admin_id, 'EduAdminID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('EduAdmins')->findBy(array( 'eduAdminId' => $fEduAdminID ));
        $count= count($check);
 
        if ($count == 1)
            $EduAdmins = $entityManager->find('EduAdmins', $fEduAdminID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelEduAdminValue." : ".$fEduAdminID, ExceptionCodes::NotFoundDelEduAdminValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelEduAdminValue." : ".$fEduAdminID, ExceptionCodes::DuplicateDelEduAdminValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'eduAdmin'  => $fEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEduAdminUnits, ExceptionCodes::ReferencesEduAdminUnits);  
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'eduAdmin'  => $fEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEduAdminSchoolCommittees, ExceptionCodes::ReferencesEduAdminSchoolCommittees);  

        $checkReference = $entityManager->getRepository('TransferAreas')->findOneBy(array( 'eduAdmin'  => $fEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEduAdminTransferAreas, ExceptionCodes::ReferencesEduAdminTransferAreas);  
                
//delete from db================================================================
        $entityManager->remove($EduAdmins);
        $entityManager->flush($EduAdmins);
           
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