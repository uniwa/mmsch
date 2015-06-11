<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

function PutOperationShifts( $operation_shift_id, $name, $category ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$operation_shift_id=================================================== 
        $fOperationShiftID = CRUDUtils::checkIDParam('operation_shift_id', $params, $operation_shift_id, 'OperationShiftID');

        //init entity for update row============================================
        $OperationShift = CRUDUtils::findIDParam($fOperationShiftID, 'OperationShifts', 'OperationShift');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($OperationShift, $name, 'OperationShiftName', 'name', $params);
        } else if ( Validator::IsNull($OperationShift->getName()) ){
            throw new Exception(ExceptionMessages::MissingOperationShiftNameValue, ExceptionCodes::MissingOperationShiftNameValue);
        } 

        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($OperationShift, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($OperationShift->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(os.operationShiftId) AS fresult')
                            ->from('OperationShifts', 'os')
                            ->where("os.name = :name AND os.operationShiftId != :operationShiftId")
                            ->setParameter('name', $OperationShift->getName())
                            ->setParameter('operationShiftId', $OperationShift->getOperationShiftId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedOrientationTypeValue ,ExceptionCodes::DuplicatedOrientationTypeValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($OperationShift);
        $entityManager->flush($OperationShift);

        $result["operation_shift_id"] = $OperationShift->getOperationShiftId();

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