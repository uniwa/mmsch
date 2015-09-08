<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Περιφερειακής Ενότητας**
 *
 * Η συνάρτηση ενημερώνει Περιφερειακή Ενότητα σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **prefectures** :
 * <br>https://mm.sch.gr/api/prefectures
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **prefecture_id**
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
 * "controller": "PutPrefectures",
 * "function": "prefectures",
 * "method": "PUT",
 * "parameters": { "prefecture_id": ``,"name": `` },
 * "prefecture_id": ``,
 * "status": 200,
 * "message": "[PUT][prefectures]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $prefecture_id ID Περιφερειακής Ενότητας
 * <br>
 * <br>Ο Κωδικός ID της Περιφερειακής Ενότητας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Περιφερειακής Ενότητας : {@see GetPrefectures}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιφερειακής Ενότητας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Περιφερειακής Ενότητας
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
 * <br>integer : <b>prefecture_id</b> : Ο Κωδικός ID της Περιφερειακής Ενότητας που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingPrefectureIDParam {@see ExceptionMessages::MissingPrefectureIDParam}
 * <br>{@see ExceptionCodes::MissingPrefectureIDParam}
 *
 * @throws MissingPrefectureIDValue {@see ExceptionMessages::MissingPrefectureIDValue}
 * <br>{@see ExceptionCodes::MissingPrefectureIDValue}
 *  
 * @throws InvalidPrefectureIDArray {@see ExceptionMessages::InvalidPrefectureIDArray}
 * <br>{@see ExceptionCodes::InvalidPrefectureIDArray}
 *
 * @throws InvalidPrefectureIDType {@see ExceptionMessages::InvalidPrefectureIDType}
 * <br>{@see ExceptionCodes::InvalidPrefectureIDType}
 *
 * @throws InvalidPrefectureValue {@see ExceptionMessages::InvalidPrefectureValue}
 * <br>{@see ExceptionCodes::InvalidPrefectureValue}
 *
 * @throws DuplicatedPrefectureUniqueValue {@see ExceptionMessages::DuplicatedPrefectureUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedPrefectureUniqueValue}
 * 
 * @throws MissingPrefectureNameParam {@see ExceptionMessages::MissingPrefectureNameParam}
 * <br>{@see ExceptionCodes::MissingPrefectureNameParam}
 *
 * @throws MissingPrefectureNameValue {@see ExceptionMessages::MissingPrefectureNameValue}
 * <br>{@see ExceptionCodes::MissingPrefectureNameValue}
 *
 * @throws InvalidPrefectureNameType {@see ExceptionMessages::InvalidPrefectureNameType}
 * <br>{@see ExceptionCodes::InvalidPrefectureNameType}
 * 
 * @throws DuplicatedPrefectureValue {@see ExceptionMessages::DuplicatedPrefectureValue}
 * <br>{@see ExceptionCodes::DuplicatedPrefectureValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutPrefectures( $prefecture_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$prefecture_id======================================================== 
        $fPrefectureID = CRUDUtils::checkIDParam('prefecture_id', $params, $prefecture_id, 'PrefectureID');

        //init entity for update row============================================
        $Prefecture = CRUDUtils::findIDParam($fPrefectureID, 'Prefectures', 'Prefecture');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($Prefecture, $name, 'PrefectureName', 'name', $params);
        } else if ( Validator::IsNull($Prefecture->getName()) ){
            throw new Exception(ExceptionMessages::MissingPrefectureNameValue, ExceptionCodes::MissingPrefectureNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(p.prefectureId) AS fresult')
                            ->from('Prefectures', 'p')
                            ->where("p.name = :name AND p.prefectureId != :prefectureId")
                            ->setParameter('name', $Prefecture->getName())
                            ->setParameter('prefectureId', $Prefecture->getPrefectureId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedPrefectureValue ,ExceptionCodes::DuplicatedPrefectureValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($Prefecture);
        $entityManager->flush($Prefecture);

//result_messages===============================================================      
        $result["prefecture_id"] = $Prefecture->getPrefectureId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>