<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */

header("Content-Type: text/html; charset=utf-8");

function DeleteCategories($category_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$unit_type_id========================================================= 
        $fCategoryID = CRUDUtils::checkIDParam('category_id', $params, $category_id, 'CategoryID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Categories')->findBy(array( 'categoryId' => $fCategoryID ));
        $count= count($check);
 
        if ($count == 1)
            $Categories = $entityManager->find('Categories', $fCategoryID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelCategoryValue." : ".$fCategoryID, ExceptionCodes::NotFoundDelCategoryValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelCategoryValue." : ".$fCategoryID, ExceptionCodes::DuplicateDelCategoryValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'category'  => $fCategoryID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesCategoryUnits, ExceptionCodes::ReferencesCategoryUnits);  
        
        $checkReference = $entityManager->getRepository('SpecialTypes')->findOneBy(array( 'category'  => $fCategoryID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesCategorySpecialTypes, ExceptionCodes::ReferencesCategorySpecialTypes);  

        $checkReference = $entityManager->getRepository('UnitTypes')->findOneBy(array( 'category'  => $fCategoryID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesCategoryUnitTypes, ExceptionCodes::ReferencesCategoryUnitTypes);  
        
        $checkReference = $entityManager->getRepository('OrientationTypes')->findOneBy(array( 'category'  => $fCategoryID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesCategoryOrientationTypes, ExceptionCodes::ReferencesCategoryOrientationTypes);  
        
        $checkReference = $entityManager->getRepository('OperationShifts')->findOneBy(array( 'category'  => $fCategoryID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesCategoryOperationShifts, ExceptionCodes::ReferencesCategoryOperationShifts);  
        
        $checkReference = $entityManager->getRepository('LegalCharacters')->findOneBy(array( 'category'  => $fCategoryID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesCategoryLegalCharacters, ExceptionCodes::ReferencesCategoryLegalCharacters);  
        
//delete from db================================================================
        $entityManager->remove($Categories);
        $entityManager->flush($Categories);
           
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