<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteRegionEduAdmins($region_edu_admin_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$region_edu_admin_id================================================== 
        $fRegionEduAdminID = CRUDUtils::checkIDParam('region_edu_admin_id', $params, $region_edu_admin_id, 'RegionEduAdminID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('RegionEduAdmins')->findBy(array( 'regionEduAdminId' => $fRegionEduAdminID ));
        $count= count($check);
 
        if ($count == 1)
            $RegionEduAdmins = $entityManager->find('RegionEduAdmins', $fRegionEduAdminID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelRegionEduAdminValue." : ".$fRegionEduAdminID, ExceptionCodes::NotFoundDelRegionEduAdminValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelRegionEduAdminValue." : ".$fRegionEduAdminID, ExceptionCodes::DuplicateDelRegionEduAdminValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'regionEduAdmin'  => $fRegionEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesRegionEduAdminUnits, ExceptionCodes::ReferencesRegionEduAdminUnits);
        
        $checkReference = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'regionEduAdmin'  => $fRegionEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesRegionEduAdminEduAdmins, ExceptionCodes::ReferencesRegionEduAdminEduAdmins); 
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'regionEduAdmin'  => $fRegionEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesRegionEduAdminSchoolCommittees, ExceptionCodes::ReferencesRegionEduAdminSchoolCommittees);  
         
//delete from db================================================================
        $entityManager->remove($RegionEduAdmins);
        $entityManager->flush($RegionEduAdmins);
           
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