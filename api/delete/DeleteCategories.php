<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Κατηγορίας**
 *
 * Η συνάρτηση διαγράφει την Κατηγορία σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **categories** : 
 * <br>https://mm.sch.gr/api/categories
 *
 * 
 * ***Πίνακας Παραμέτρων***
 * * Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους μπορεί να γίνει η κλήση της συνάρτησης.
 * * Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί.
 * * Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά.
 *
 * ***Πίνακας Αποτελεσμάτων***
 * * Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση.
 * * Όλες οι μεταβλητές επιστρέφονται σε <a href="#model">JSON objects</a>.
 * * Η μεταβλητή status καθορίζει αν η εκτέλεση της συνάρτησης ήταν επιτυχής (κωδικός 200) ή προέκυψε κάποιο σφάλμα.
 *
 * ***Πίνακας Σφαλμάτων***
 * * Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που μπορεί να προκύψουν κατά την κλήση της συνάρτησης.
 * * Οι περιγραφές των Σφαλμάτων καθώς και οι Κωδικοί τους είναι διαθέσιμες μέσω του πίνακα Μηνύματα Σφαλμάτων ({@see ExceptionMessages}) και Κωδικοί Σφαλμάτων ({@see ExceptionCodes}) αντίστοιχα.
 * 
 * ***Παραδείγματα Κλήσης***
 * * Υπάρχουν διαθέσιμα παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους ({@see ApiRequestExamples}).
 * 
 * ***Μηνύματα Authentication/Authorization***
 * * Υπάρχουν αναλυτικές πληροφορίες για τα μηνύματα Authentication/Authorization ({@see AuthMessages}).
 *
 * ***Δεδομένα Επιστροφής***
 * <br><a id="model"></a>Παρακάτω εμφανίζονται τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {
 * "controller": "DeleteCategories",
 * "function": "categories",
 * "method": "DELETE",
 * "parameters": { "category_id": `` },
 * "category_id": ``,
 * "status": 200,
 * "message": "[DELETE][category_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $category_id ID Κατηγορίας
 * <br>
 * <br>Ο Κωδικός ID της Κατηγορίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Κατηγορίας : {@see GetCategories}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Κατηγορίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>category_id</b> : Ο Κωδικός ID Κατηγορίας που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingCategoryIDParam {@see ExceptionMessages::MissingCategoryIDParam}
 * <br>{@see ExceptionCodes::MissingCategoryIDParam}
 *
 * @throws MissingCategoryIDValue {@see ExceptionMessages::MissingCategoryIDValue}
 * <br>{@see ExceptionCodes::MissingCategoryIDValue}
 *  
 * @throws InvalidCategoryIDArray {@see ExceptionMessages::InvalidCategoryIDArray}
 * <br>{@see ExceptionCodes::InvalidCategoryIDArray}
 *
 * @throws InvalidCategoryIDType {@see ExceptionMessages::InvalidCategoryIDType}
 * <br>{@see ExceptionCodes::InvalidCategoryIDType}
 *
 * @throws NotFoundDelCategoryValue {@see ExceptionMessages::NotFoundDelCategoryValue}
 * <br>{@see ExceptionCodes::NotFoundDelCategoryValue}
 * 
 * @throws DuplicateDelCategoryValue {@see ExceptionMessages::DuplicateDelCategoryValue}
 * <br>{@see ExceptionCodes::DuplicateDelCategoryValue}
 * 
 * @throws ReferencesCategoryUnits {@see ExceptionMessages::ReferencesCategoryUnits}
 * <br>{@see ExceptionCodes::ReferencesCategoryUnits}
 * 
 * @throws ReferencesCategorySpecialTypes {@see ExceptionMessages::ReferencesCategorySpecialTypes}
 * <br>{@see ExceptionCodes::ReferencesCategorySpecialTypes}
 * 
 * @throws ReferencesCategoryUnitTypes {@see ExceptionMessages::ReferencesCategoryUnitTypes}
 * <br>{@see ExceptionCodes::ReferencesCategoryUnitTypes}
 * 
 * @throws ReferencesCategoryOrientationTypes {@see ExceptionMessages::ReferencesCategoryOrientationTypes}
 * <br>{@see ExceptionCodes::ReferencesCategoryOrientationTypes}
 * 
 * @throws ReferencesCategoryOperationShifts {@see ExceptionMessages::ReferencesCategoryOperationShifts}
 * <br>{@see ExceptionCodes::ReferencesCategoryOperationShifts}
 * 
 * @throws ReferencesCategoryLegalCharacters {@see ExceptionMessages::ReferencesCategoryLegalCharacters}
 * <br>{@see ExceptionCodes::ReferencesCategoryLegalCharacters}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

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
        $result["category_id"] = $fCategoryID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>