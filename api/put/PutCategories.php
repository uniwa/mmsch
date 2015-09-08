<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Κατηγορίας**
 *
 * Η συνάρτηση ενημερώνει Κατηγορία σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **categories** :
 * <br>https://mm.sch.gr/api/categories
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **category_id**
 * * **name**
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
 * "controller": "PutCategories",
 * "function": "categories",
 * "method": "PUT",
 * "parameters": { "category_id": ``,"name": `` },
 * "category_id": ``,
 * "status": 200,
 * "message": "[PUT][categories]:success"
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
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Κατηγορίας Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>category_id</b> : Ο Κωδικός ID της Κατηγορίας που ενημερώθηκε
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
 * @throws InvalidCategoryValue {@see ExceptionMessages::InvalidCategoryValue}
 * <br>{@see ExceptionCodes::InvalidCategoryValue}
 *
 * @throws DuplicatedCategoryUniqueValue {@see ExceptionMessages::DuplicatedCategoryUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedCategoryUniqueValue}
 * 
 * @throws MissingCategoryNameParam {@see ExceptionMessages::MissingCategoryNameParam}
 * <br>{@see ExceptionCodes::MissingCategoryNameParam}
 *
 * @throws MissingCategoryNameValue {@see ExceptionMessages::MissingCategoryNameValue}
 * <br>{@see ExceptionCodes::MissingCategoryNameValue}
 *
 * @throws InvalidCategoryNameType {@see ExceptionMessages::InvalidCategoryNameType}
 * <br>{@see ExceptionCodes::InvalidCategoryNameType}
 * 
 * @throws DuplicatedCategoryValue {@see ExceptionMessages::DuplicatedCategoryValue}
 * <br>{@see ExceptionCodes::DuplicatedCategoryValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutCategories( $category_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {

        //$category_id========================================================== 
        $fCategoryId = CRUDUtils::checkIDParam('category_id', $params, $category_id, 'CategoryID');

        //init entity for update row============================================
        $Category = CRUDUtils::findIDParam($fCategoryId, 'Categories', 'Category');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($Category, $name, 'CategoryName', 'name', $params );
        } else if ( Validator::IsNull($Category->getName()) ){
            throw new Exception(ExceptionMessages::MissingCategoryNameValue, ExceptionCodes::MissingCategoryNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(c.categoryId) AS fresult')
                            ->from('Categories', 'c')
                            ->where("c.name = :name AND c.categoryId != :categoryId")
                            ->setParameter('name', $Category->getName())
                            ->setParameter('categoryId', $Category->getCategoryId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedCategoryValue ,ExceptionCodes::DuplicatedCategoryValue);
        }
       
//update to db================================================================== 
        $entityManager->persist($Category);
        $entityManager->flush($Category);
           
//result_messages===============================================================
        $result["category_id"] = $Category->getCategoryId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
        
    return $result;
}
?>