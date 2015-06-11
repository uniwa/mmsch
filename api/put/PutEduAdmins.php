<?php
/**
 *
 * @version 1.1
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutEduAdmins( $edu_admin_id, $name, $registry_no, $region_edu_admin, $implementation_entity, $parent_rdn, $third_level_dns ) {
    
    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$edu_admin_id========================================================= 
        $fEduAdminId = CRUDUtils::checkIDParam('edu_admin_id', $params, $edu_admin_id, 'EduAdminID');

        //init entity for update row============================================
        $EduAdmin = CRUDUtils::findIDParam($fEduAdminId, 'EduAdmins', 'EduAdmin');

    //$name=====================================================================
    if ( Validator::IsExists('name') ){
        CRUDUtils::entitySetParam($EduAdmin, $name, 'EduAdminName', 'name' , $params);
    } else if ( Validator::IsNull($EduAdmin->getName()) ){
        throw new Exception(ExceptionMessages::MissingEduAdminNameValue, ExceptionCodes::MissingEduAdminNameValue);
    }
    
    //$registry_no==============================================================
    if ( Validator::IsExists('registry_no') ){
        CRUDUtils::entitySetParam($EduAdmin, $registry_no, 'EduAdminCode', 'registry_no' , $params);
    } else if ( Validator::IsNull($EduAdmin->getRegistryNo()) ){
        throw new Exception(ExceptionMessages::MissingEduAdminCodeValue, ExceptionCodes::MissingEduAdminCodeValue);
    }
    
    //$region_edu_admin=========================================================      
    CRUDUtils::entitySetAssociation($EduAdmin, $region_edu_admin, 'RegionEduAdmins', 'regionEduAdmin', 'RegionEduAdmin', $params, 'region_edu_admin', false, true);
    
    //$implementation_entity====================================================
    CRUDUtils::entitySetAssociation($EduAdmin, $implementation_entity, 'ImplementationEntities', 'implementationEntity', 'ImplementationEntity', $params, 'implementation_entity', false, true);
    
    //$parent_rdn===============================================================
    CRUDUtils::entitySetParam($EduAdmin, $parent_rdn, 'EduAdminParentRdn', 'parent_rdn' , $params, false ,true);
        
    //$third_level_dns==========================================================
    CRUDUtils::entitySetParam($EduAdmin, $third_level_dns, 'EduAdminThirdLevelDns', 'third_level_dns' , $params, false ,true);
              
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(e.eduAdminId) AS fname')
                            ->from('EduAdmins', 'e')
                            ->where("e.name = :name AND e.eduAdminId != :eduAdminId")
                            ->setParameter('name', $EduAdmin->getName())
                            ->setParameter('eduAdminId', $EduAdmin->getEduAdminId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fname"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedEduAdminValue ,ExceptionCodes::DuplicatedEduAdminValue);
        }  
        
        //check registry_no duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(e.eduAdminId) AS fRegistryNo')
                            ->from('EduAdmins', 'e')
                            ->where("e.registryNo = :registryNo AND e.eduAdminId != :eduAdminId")
                            ->setParameter('registryNo', $EduAdmin->getRegistryNo())
                            ->setParameter('eduAdminId', $EduAdmin->getEduAdminId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fRegistryNo"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedEduAdminCodeValue ,ExceptionCodes::DuplicatedEduAdminCodeValue);
        }
        
//update to db================================================================== 
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