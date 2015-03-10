<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutSources( $source_id, $name, $visible ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$source_id============================================================ 
        $fSourceID = CRUDUtils::checkIDParam('source_id', $params, $source_id, 'SourceID');

        //init entity for update row============================================
        $Source = CRUDUtils::findIDParam($fSourceID, 'Sources', 'Source');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($Source, $name, 'SourceName', 'name', $params);
        } else if ( Validator::IsNull($Source->getName()) ){
            throw new Exception(ExceptionMessages::MissingSourceNameValue, ExceptionCodes::MissingSourceNameValue);
        } 
        
    //$visible==================================================================
     if ( Validator::IsExists('visible') ){
        if ($visible == 'true' || $visible == 'false')
            CRUDUtils::EntitySetParam($Source, $visible, 'SourceVisible', 'visible', $params);
        else
            throw new Exception(ExceptionMessages::InvalidSourceVisibleType,ExceptionCodes::InvalidSourceVisibleType);  
     } else if ( Validator::IsNull($Source->getVisible()) ){
            throw new Exception(ExceptionMessages::MissingSourceVisibleValue, ExceptionCodes::MissingSourceVisibleValue);
     }
     
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(s.sourceId) AS fresult')
                            ->from('Sources', 's')
                            ->where("s.name = :name AND s.sourceId != :sourceId")
                            ->setParameter('name', $Source->getName())
                            ->setParameter('sourceId', $Source->getSourceId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedSourceValue ,ExceptionCodes::DuplicatedSourceValue);
        }
        
//update to db================================================================== 
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