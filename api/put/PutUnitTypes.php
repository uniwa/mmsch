<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Τύπου Μονάδας**
 *
 * Η συνάρτηση ενημερώνει Τύπο Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **unit_types** :
 * <br>https://mm.sch.gr/api/unit_types
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **unit_type_id**
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
 * "controller": "PutUnitTypes",
 * "function": "unit_types",
 * "method": "PUT",
 * "parameters": { "unit_type_id": ``,"name": ``,"initials": ``,"category": ``,
 *                 "education_level": `` },
 * "unit_type_id": ``,
 * "status": 200,
 * "message": "[PUT][unit_types]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $unit_type_id ID Τύπου Μονάδας
 * <br>
 * <br>Ο Κωδικός ID του Τύπου Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Τύπου Μονάδας : {@see GetUnitTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Τύπου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
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
 * <br>integer : <b>unit_type_id</b> : Ο Κωδικός ID του Τύπου Μονάδας που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingUnitTypeIDParam {@see ExceptionMessages::MissingUnitTypeIDParam}
 * <br>{@see ExceptionCodes::MissingUnitTypeIDParam}
 *
 * @throws MissingUnitTypeIDValue {@see ExceptionMessages::MissingUnitTypeIDValue}
 * <br>{@see ExceptionCodes::MissingUnitTypeIDValue}
 *  
 * @throws InvalidUnitTypeIDArray {@see ExceptionMessages::InvalidUnitTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitTypeIDArray}
 *
 * @throws InvalidUnitTypeIDType {@see ExceptionMessages::InvalidUnitTypeIDType}
 * <br>{@see ExceptionCodes::InvalidUnitTypeIDType}
 *
 * @throws InvalidUnitTypeValue {@see ExceptionMessages::InvalidUnitTypeValue}
 * <br>{@see ExceptionCodes::InvalidUnitTypeValue}
 *
 * @throws DuplicatedUnitTypeUniqueValue {@see ExceptionMessages::DuplicatedUnitTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitTypeUniqueValue}
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

function PutUnitTypes( $unit_type_id, $name, $initials, $category, $education_level ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fUnitTypeID = CRUDUtils::checkIDParam('unit_type_id', $params, $unit_type_id, 'UnitTypeID');

        //init entity for update row============================================
        $UnitType = CRUDUtils::findIDParam($fUnitTypeID, 'UnitTypes', 'UnitType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($UnitType, $name, 'UnitTypeName', 'name', $params);
        } else if ( Validator::IsNull($UnitType->getName()) ){
            throw new Exception(ExceptionMessages::MissingUnitTypeNameValue, ExceptionCodes::MissingUnitTypeNameValue);
        } 
        
        //$initials=============================================================
        if ( Validator::IsExists('initials') ){
            CRUDUtils::EntitySetParam($UnitType, $initials, 'UnitTypeInitial', 'initials', $params);
        } else if ( Validator::IsNull($UnitType->getInitials()) ){
            throw new Exception(ExceptionMessages::MissingUnitTypeInitialValue, ExceptionCodes::MissingUnitTypeInitialValue);
        } 
        
        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($UnitType, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($UnitType->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
        //$education_level======================================================
        if ( Validator::IsExists('education_level') ){
            CRUDUtils::entitySetAssociation($UnitType, $education_level, 'EducationLevels', 'educationLevel', 'EducationLevel', $params, 'education_level');
        } else if ( Validator::IsNull($UnitType->getEducationLevel()) ){
            throw new Exception(ExceptionMessages::MissingEducationLevelValue, ExceptionCodes::MissingEducationLevelValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ut.unitTypeId) AS fresultName')
                            ->from('UnitTypes', 'ut')
                            ->where("ut.name = :name AND ut.unitTypeId != :unitTypeId")
                            ->setParameter('name', $UnitType->getName())
                            ->setParameter('unitTypeId', $UnitType->getUnitTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresultName"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedUnitTypeNameValue,ExceptionCodes::DuplicatedUnitTypeNameValue);
        }
        
        //check initials duplicate==============================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ut.unitTypeId) AS fresultInitials')
                            ->from('UnitTypes', 'ut')
                            ->where("ut.initials = :initials AND ut.unitTypeId != :unitTypeId")
                            ->setParameter('initials', $UnitType->getInitials())
                            ->setParameter('unitTypeId', $UnitType->getUnitTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresultInitials"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedUnitTypeInitialValue,ExceptionCodes::DuplicatedUnitTypeInitialValue);
        }
        
//update to db================================================================== 
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