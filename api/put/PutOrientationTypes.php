<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Προσανατολισμού**
 *
 * Η συνάρτηση ενημερώνει Προσανατολισμό σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **orientation_types** :
 * <br>https://mm.sch.gr/api/orientation_types
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **orientation_type_id**
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
 * "controller": "PutOrientationTypes",
 * "function": "orientation_types",
 * "method": "PUT",
 * "parameters": { "orientation_type_id": ``,"name": ``,"category": `` },
 * "orientation_type_id": ``,
 * "status": 200,
 * "message": "[PUT][orientation_types]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $orientation_type_id ID Προσανατολισμού
 * <br>
 * <br>Ο Κωδικός ID του Προσανατολισμού
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Προσανατολισμού : {@see GetOrientationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Προσανατολισμού
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Προσανατολισμού
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
 * <br>integer : <b>orientation_type_id</b> : Ο Κωδικός ID του Προσανατολισμού που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingOrientationTypeIDParam {@see ExceptionMessages::MissingOrientationTypeIDParam}
 * <br>{@see ExceptionCodes::MissingOrientationTypeIDParam}
 *
 * @throws MissingOrientationTypeIDValue {@see ExceptionMessages::MissingOrientationTypeIDValue}
 * <br>{@see ExceptionCodes::MissingOrientationTypeIDValue}
 *  
 * @throws InvalidOrientationTypeIDArray {@see ExceptionMessages::InvalidOrientationTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeIDArray}
 *
 * @throws InvalidOrientationTypeIDType {@see ExceptionMessages::InvalidOrientationTypeIDType}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeIDType}
 *
 * @throws InvalidOrientationTypeValue {@see ExceptionMessages::InvalidOrientationTypeValue}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeValue}
 *
 * @throws DuplicatedOrientationTypeUniqueValue {@see ExceptionMessages::DuplicatedOrientationTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedOrientationTypeUniqueValue}
 * 
 * @throws MissingOrientationTypeNameParam {@see ExceptionMessages::MissingOrientationTypeNameParam}
 * <br>{@see ExceptionCodes::MissingOrientationTypeNameParam}
 *
 * @throws MissingOrientationTypeNameValue {@see ExceptionMessages::MissingOrientationTypeNameValue}
 * <br>{@see ExceptionCodes::MissingOrientationTypeNameValue}
 *
 * @throws InvalidOrientationTypeNameType {@see ExceptionMessages::InvalidOrientationTypeNameType}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeNameType}
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
 * @throws DuplicatedOrientationTypeValue {@see ExceptionMessages::DuplicatedOrientationTypeValue}
 * <br>{@see ExceptionCodes::DuplicatedOrientationTypeValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutOrientationTypes( $orientation_type_id, $name, $category ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$orientation_type_id================================================== 
        $fOrientationTypeID = CRUDUtils::checkIDParam('orientation_type_id', $params, $orientation_type_id, 'OrientationTypeID');

        //init entity for update row============================================
        $OrientationType = CRUDUtils::findIDParam($fOrientationTypeID, 'OrientationTypes', 'OrientationType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($OrientationType, $name, 'OrientationTypeName', 'name', $params);
        } else if ( Validator::IsNull($OrientationType->getName()) ){
            throw new Exception(ExceptionMessages::MissingOrientationTypeNameValue, ExceptionCodes::MissingOrientationTypeNameValue);
        } 

        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($OrientationType, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($OrientationType->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ot.orientationTypeId) AS fresult')
                            ->from('OrientationTypes', 'ot')
                            ->where("ot.name = :name AND ot.orientationTypeId != :orientationTypeId")
                            ->setParameter('name', $OrientationType->getName())
                            ->setParameter('orientationTypeId', $OrientationType->getOrientationTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedOrientationTypeValue ,ExceptionCodes::DuplicatedOrientationTypeValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($OrientationType);
        $entityManager->flush($OrientationType);

//result_messages===============================================================
        $result["orientation_type_id"] = $OrientationType->getOrientationTypeId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>