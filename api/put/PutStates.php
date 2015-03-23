<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutStates( $state_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fStateID = CRUDUtils::checkIDParam('state_id', $params, $state_id, 'StateID');

        //init entity for update row============================================
        $State = CRUDUtils::findIDParam($fStateID, 'States', 'State');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($State, $name, 'StateName', 'name', $params);
        } else if ( Validator::IsNull($State->getName()) ){
            throw new Exception(ExceptionMessages::MissingStateNameValue, ExceptionCodes::MissingStateNameValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(s.stateId) AS fresult')
                            ->from('States', 's')
                            ->where("s.name = :name AND s.stateId != :stateId")
                            ->setParameter('name', $State->getName())
                            ->setParameter('stateId', $State->getStateId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedStateValue,ExceptionCodes::DuplicatedStateValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($State);
        $entityManager->flush($State);

        $result["state_id"] = $State->getStateId();

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