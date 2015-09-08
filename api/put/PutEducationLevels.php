<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Επίπεδου Εκπαίδευσης**
 *
 * Η συνάρτηση ενημερώνει Επίπεδο Εκπαίδευσης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **education_levels** :
 * <br>https://mm.sch.gr/api/education_levels
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **education_level_id**
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
 * "controller": "PutEducationLevels",
 * "function": "education_levels",
 * "method": "PUT",
 * "parameters": { "education_level_id": ``,"name": `` },
 * "education_level_id": ``,
 * "status": 200,
 * "message": "[PUT][education_levels]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $education_level_id ID Επίπεδου Εκπαίδευσης
 * <br>
 * <br>Ο Κωδικός ID του Επίπεδου Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Επίπεδου Εκπαίδευσης : {@see GetEducationLevels}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Επίπεδου Εκπαίδευσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Επίπεδου Εκπαίδευσης Μονάδας
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
 * <br>integer : <b>education_level_id</b> : Ο Κωδικός ID του Επίπεδου Εκπαίδευσης που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingEducationLevelIDParam {@see ExceptionMessages::MissingEducationLevelIDParam}
 * <br>{@see ExceptionCodes::MissingEducationLevelIDParam}
 *
 * @throws MissingEducationLevelIDValue {@see ExceptionMessages::MissingEducationLevelIDValue}
 * <br>{@see ExceptionCodes::MissingEducationLevelIDValue}
 *  
 * @throws InvalidEducationLevelIDArray {@see ExceptionMessages::InvalidEducationLevelIDArray}
 * <br>{@see ExceptionCodes::InvalidEducationLevelIDArray}
 *
 * @throws InvalidEducationLevelIDType {@see ExceptionMessages::InvalidEducationLevelIDType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelIDType}
 *
 * @throws InvalidEducationLevelValue {@see ExceptionMessages::InvalidEducationLevelValue}
 * <br>{@see ExceptionCodes::InvalidEducationLevelValue}
 *
 * @throws DuplicatedEducationLevelUniqueValue {@see ExceptionMessages::DuplicatedEducationLevelUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedEducationLevelUniqueValue}
 * 
 * @throws MissingEducationLevelNameParam {@see ExceptionMessages::MissingEducationLevelNameParam}
 * <br>{@see ExceptionCodes::MissingEducationLevelNameParam}
 *
 * @throws MissingEducationLevelNameValue {@see ExceptionMessages::MissingEducationLevelNameValue}
 * <br>{@see ExceptionCodes::MissingEducationLevelNameValue}
 *
 * @throws InvalidEducationLevelNameType {@see ExceptionMessages::InvalidEducationLevelNameType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelNameType}
 * 
 * @throws DuplicatedEducationLevelValue {@see ExceptionMessages::DuplicatedEducationLevelValue}
 * <br>{@see ExceptionCodes::DuplicatedEducationLevelValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutEducationLevels( $education_level_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$relation_type_id===================================================== 
        $fEducationLevelID = CRUDUtils::checkIDParam('education_level_id', $params, $education_level_id, 'EducationLevelID');

        //init entity for update row============================================
        $EducationLevel = CRUDUtils::findIDParam($fEducationLevelID, 'EducationLevels', 'EducationLevel');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($EducationLevel, $name, 'EducationLevelName', 'name', $params);
        } else if ( Validator::IsNull($EducationLevel->getName()) ){
            throw new Exception(ExceptionMessages::MissingEducationLevelNameValue, ExceptionCodes::MissingEducationLevelNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(el.educationLevelId) AS fresult')
                            ->from('EducationLevels', 'el')
                            ->where("el.name = :name AND el.educationLevelId != :educationLevelId")
                            ->setParameter('name', $EducationLevel->getName())
                            ->setParameter('educationLevelId', $EducationLevel->getEducationLevelId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedEducationLevelValue ,ExceptionCodes::DuplicatedEducationLevelValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($EducationLevel);
        $entityManager->flush($EducationLevel);

//result_messages===============================================================
        $result["education_level_id"] = $EducationLevel->getEducationLevelId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>