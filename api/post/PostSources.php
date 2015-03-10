<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PostSources( $name, $visible ) {
    
    global $app, $entityManager;

    $Source = new Sources();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($Source, $name, 'SourceName', 'name', $params);
    
    //$visible==================================================================
    if ($visible == 'true' || $visible == 'false')
        CRUDUtils::EntitySetParam($Source, $visible, 'SourceVisible', 'visible', $params);
    else
        throw new Exception(ExceptionMessages::InvalidSourceVisibleType,ExceptionCodes::InvalidSourceVisibleType);  
    
//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('Sources')->findOneBy(array( 'name'  => $Source->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedSourceValue,ExceptionCodes::DuplicatedSourceValue);  
        
//insert to db================================================================== 
        $entityManager->persist($Source);
        $entityManager->flush($Source);

        $result["source_id"] = $Source->getSourceId();
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