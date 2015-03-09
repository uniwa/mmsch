<?php
/**
 *
 * @version 1.1
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostEduAdmins( $name, $registry_no, $region_edu_admin, $implementation_entity, $parent_rdn, $third_level_dns ) {
    
    global $app,$entityManager;

    $EduAdmin = new EduAdmins();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {

    //$name=====================================================================
    CRUDUtils::entitySetParam($EduAdmin, $name, 'EduAdminName', 'name' , $params);

    //$registry_no==============================================================
    CRUDUtils::entitySetParam($EduAdmin, $registry_no, 'EduAdminCode', 'registry_no' , $params);
    
    //$region_edu_admin=========================================================      
    CRUDUtils::entitySetAssociation($EduAdmin, $region_edu_admin, 'RegionEduAdmins', 'regionEduAdmin', 'RegionEduAdmin', $params, 'region_edu_admin', false, true);
    
    //$implementation_entity====================================================
    CRUDUtils::entitySetAssociation($EduAdmin, $implementation_entity, 'ImplementationEntities', 'implementationEntity', 'ImplementationEntity', $params, 'implementation_entity', false, true);
    
    //$parent_rdn===============================================================
    CRUDUtils::entitySetParam($EduAdmin, $parent_rdn, 'EduAdminParentRdn', 'parent_rdn' , $params, false ,true);
        
    //$third_level_dns==========================================================
    CRUDUtils::entitySetParam($EduAdmin, $third_level_dns, 'EduAdminThirdLevelDns', 'third_level_dns' , $params, false ,true);
             
//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicateName = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'name'  => $EduAdmin->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedEduAdminValue,ExceptionCodes::DuplicatedEduAdminValue);  
        
        $checkDuplicateRegistryNo = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'registryNo'  => $EduAdmin->getRegistryNo() ));
        
        if ((count($checkDuplicateRegistryNo) != 0))
            throw new Exception(ExceptionMessages::DuplicatedEduAdminCodeValue,ExceptionCodes::DuplicatedEduAdminCodeValue);  
        
//insert to db================================================================== 
        $entityManager->persist($EduAdmin);
        $entityManager->flush($EduAdmin);

        $result["edu_admin_id"] = $EduAdmin->getEduAdminId();
           
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