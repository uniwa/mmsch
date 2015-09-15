<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Τύπου Μονάδας**
 *
 * Η συνάρτηση καταχωρεί Τύπο Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **unit_types** :
 * <br>https://mm.sch.gr/api/unit_types
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **name**
 * * **initials**
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
 * "controller": "PostUnitTypes",
 * "function": "unit_types",
 * "method": "POST",
 * "parameters": { "name": ``,"initials": ``,"category": ``,"education_level": `` },
 * "unit_type_id": ``,
 * "status": 200,
 * "message": "[POST][unit_types]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Τύπου Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $initials Αρχικά Ονόματος
 * <br>
 * <br>Τα Αρχικά Ονόματος του Τύπου Μονάδας
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
 * @param integer|string $education_level Όνομα ή ID Επίπεδου Εκπαίδευσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Επίπεδου Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Επίπεδου Εκπαίδευσης : {@see GetEducationLevels}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Επίπεδου Εκπαίδευσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Επίπεδου Εκπαίδευσης
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
 * <br>integer : <b>unit_type_id</b> : Ο Κωδικός ID του Τύπου Μονάδας που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws MissingUnitTypeNameParam {@see ExceptionMessages::MissingUnitTypeNameParam}
 * <br>{@see ExceptionCodes::MissingUnitTypeNameParam}
 *
 * @throws MissingUnitTypeNameValue {@see ExceptionMessages::MissingUnitTypeNameValue}
 * <br>{@see ExceptionCodes::MissingUnitTypeNameValue}
 *
 * @throws InvalidUnitTypeNameType {@see ExceptionMessages::InvalidUnitTypeNameType}
 * <br>{@see ExceptionCodes::InvalidUnitTypeNameType}
 * 
 * @throws MissingUnitTypeInitialParam {@see ExceptionMessages::MissingUnitTypeInitialParam}
 * <br>{@see ExceptionCodes::MissingUnitTypeInitialParam}
 *
 * @throws MissingUnitTypeInitialValue {@see ExceptionMessages::MissingUnitTypeInitialValue}
 * <br>{@see ExceptionCodes::MissingUnitTypeInitialValue}
 *
 * @throws InvalidUnitTypeInitialType {@see ExceptionMessages::InvalidUnitTypeInitialType}
 * <br>{@see ExceptionCodes::InvalidUnitTypeInitialType}
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
 * @throws MissingEducationLevelParam {@see ExceptionMessages::MissingEducationLevelParam}
 * <br>{@see ExceptionCodes::MissingEducationLevelParam}
 *
 * @throws MissingEducationLevelValue {@see ExceptionMessages::MissingEducationLevelValue}
 * <br>{@see ExceptionCodes::MissingEducationLevelValue}
 *  
 * @throws InvalidEducationLevelArray {@see ExceptionMessages::InvalidEducationLevelArray}
 * <br>{@see ExceptionCodes::InvalidEducationLevelArray}
 *
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelType}
 * 
 * @throws DuplicatedEducationLevelUniqueValue {@see ExceptionMessages::DuplicatedEducationLevelUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedEducationLevelUniqueValue}
 *  
 * @throws DuplicatedUnitTypeNameValue {@see ExceptionMessages::DuplicatedUnitTypeNameValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitTypeNameValue}
 * 
 * @throws DuplicatedUnitTypeInitialValue {@see ExceptionMessages::DuplicatedUnitTypeInitialValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitTypeInitialValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostUnitTypes ( $name, $initials, $category, $education_level ) {
    
    global $app, $entityManager;

    $UnitType = new UnitTypes();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($UnitType, $name, 'UnitTypeName', 'name', $params);
     
    //$initials=================================================================
    CRUDUtils::EntitySetParam($UnitType, $initials, 'UnitTypeInitial', 'initials', $params);
     
    //$category=================================================================      
    CRUDUtils::entitySetAssociation($UnitType, $category, 'Categories', 'category', 'Category', $params, 'category');
    
    //$education_level==========================================================      
    CRUDUtils::entitySetAssociation($UnitType, $education_level, 'EducationLevels', 'educationLevel', 'EducationLevel', $params, 'education_level');

//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('UnitTypes')->findOneBy(array( 'name'  => $UnitType->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedUnitTypeNameValue,ExceptionCodes::DuplicatedUnitTypeNameValue);  
    
        //check for initials duplicate =========================================   
        $checkDuplicateInitial = $entityManager->getRepository('UnitTypes')->findOneBy(array( 'initials'  => $UnitType->getInitials() ));
        
        if ((count($checkDuplicateInitial) != 0))
            throw new Exception(ExceptionMessages::DuplicatedUnitTypeInitialValue,ExceptionCodes::DuplicatedUnitTypeInitialValue);  
        
//insert to db================================================================== 
        $entityManager->persist($UnitType);
        $entityManager->flush($UnitType);

//result_messages===============================================================
        $result["unit_type_id"] = $UnitType->getUnitTypeId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>