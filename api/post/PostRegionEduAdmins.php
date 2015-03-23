<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostRegionEduAdmins( $name ) {
    
    global $app, $entityManager;

    $RegionEduAdmin = new RegionEduAdmins();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($RegionEduAdmin, $name, 'RegionEduAdminName', 'name', $params);

//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('RegionEduAdmins')->findOneBy(array( 'name'  => $RegionEduAdmin->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedRegionEduAdminValue,ExceptionCodes::DuplicatedRegionEduAdminValue);  
        
//insert to db================================================================== 
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