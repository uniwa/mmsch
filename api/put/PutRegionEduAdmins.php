<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutRegionEduAdmins( $region_edu_admin_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$region_edu_admin_id================================================== 
        $fRegionEduAdminID = CRUDUtils::checkIDParam('region_edu_admin_id', $params, $region_edu_admin_id, 'RegionEduAdminID');

        //init entity for update row============================================
        $RegionEduAdmin = CRUDUtils::findIDParam($fRegionEduAdminID, 'RegionEduAdmins', 'RegionEduAdmin');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($RegionEduAdmin, $name, 'RegionEduAdminName', 'name', $params);
        } else if ( Validator::IsNull($RegionEduAdmin->getName()) ){
            throw new Exception(ExceptionMessages::MissingRegionEduAdminNameValue, ExceptionCodes::MissingRegionEduAdminNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(re.regionEduAdminId) AS fresult')
                            ->from('RegionEduAdmins', 're')
                            ->where("re.name = :name AND re.regionEduAdminId != :regionEduAdminId")
                            ->setParameter('name', $RegionEduAdmin->getName())
                            ->setParameter('regionEduAdminId', $RegionEduAdmin->getRegionEduAdminId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedRegionEduAdminValue ,ExceptionCodes::DuplicatedRegionEduAdminValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($RegionEduAdmin);
        $entityManager->flush($RegionEduAdmin);

        $result["region_edu_admin_id"] = $RegionEduAdmin->getRegionEduAdminId();

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