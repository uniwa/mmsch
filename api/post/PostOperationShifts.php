<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Ωράριου Λειτουργίας**
 *
 * Η συνάρτηση καταχωρεί Ωράριο Λειτουργίας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **operation_shifts** :
 * <br>https://mm.sch.gr/api/operation_shifts
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
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
 * "controller": "PostOperationShifts",
 * "function": "operation_shifts",
 * "method": "POST",
 * "parameters": { "name": ``,"category": `` },
 * "operation_shift_id": ``,
 * "status": 200,
 * "message": "[POST][operation_shifts]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Ωράριου Λειτουργίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param integer|string $category Όνομα ή ID Κατηγορίας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Κατηγορίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Κατηγορίας : {@see GetCategories}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Κατηγορίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Κατηγορίας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
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
 * <br>integer : <b>operation_shift_id</b> : Ο Κωδικός ID του Ωράριου Λειτουργίας που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws MissingOperationShiftNameParam {@see ExceptionMessages::MissingOperationShiftNameParam}
 * <br>{@see ExceptionCodes::MissingOperationShiftNameParam}
 *
 * @throws MissingOperationShiftNameValue {@see ExceptionMessages::MissingOperationShiftNameValue}
 * <br>{@see ExceptionCodes::MissingOperationShiftNameValue}
 *
 * @throws InvalidOperationShiftNameType {@see ExceptionMessages::InvalidOperationShiftNameType}
 * <br>{@see ExceptionCodes::InvalidOperationShiftNameType}
 * 
 * @throws MissingCategoryParam {@see ExceptionMessages::MissingCategoryParam}
 * <br>{@see ExceptionCodes::MissingCategoryParam}
 *
 * @throws MissingCategoryValue {@see ExceptionMessages::MissingCategoryValue}
 * <br>{@see ExceptionCodes::MissingCategoryValue}
 *  
 * @throws InvalidCategoryArray {@see ExceptionMessages::InvalidCategoryArray}
 * <br>{@see ExceptionCodes::InvalidCategoryArray}
 *
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * <br>{@see ExceptionCodes::InvalidCategoryType}
 * 
 * @throws DuplicatedCategoryUniqueValue {@see ExceptionMessages::DuplicatedCategoryUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedCategoryUniqueValue}
 * 
 * @throws DuplicatedOperationShiftValue {@see ExceptionMessages::DuplicatedOperationShiftValue}
 * <br>{@see ExceptionCodes::DuplicatedOperationShiftValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostOperationShifts( $name, $category ) {
    
    global $app, $entityManager;

    $OperationShift = new OperationShifts();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($OperationShift, $name, 'OperationShiftName', 'name', $params);
     
    //$category=================================================================      
    CRUDUtils::entitySetAssociation($OperationShift, $category, 'Categories', 'category', 'Category', $params, 'category');

//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('OperationShifts')->findOneBy(array( 'name'  => $OperationShift->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedOperationShiftValue,ExceptionCodes::DuplicatedOperationShiftValue);  
        
//insert to db================================================================== 
        $entityManager->persist($OperationShift);
        $entityManager->flush($OperationShift);

//result_messages===============================================================      
        $result["operation_shift_id"] = $OperationShift->getOperationShiftId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>