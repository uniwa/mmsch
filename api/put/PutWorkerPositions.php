<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Θέσης Εργασίας**
 *
 * Η συνάρτηση ενημερώνει Θέση Εργασίας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **worker_positions** :
 * <br>https://mm.sch.gr/api/worker_positions
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **worker_position_id**
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
 * "controller": "PutWorkerPositions",
 * "function": "worker_positions",
 * "method": "PUT",
 * "parameters": { "worker_position_id": ``,"name": `` },
 * "worker_position_id": ``,
 * "status": 200,
 * "message": "[PUT][worker_positions]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $worker_position_id ID Θέσης Εργασίας
 * <br>
 * <br>Ο Κωδικός ID της Θέσης Εργασίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Θέσης Εργασίας : {@see GetWorkerPositions}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Θέσης Εργασίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Θέσης Εργασίας
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
 * <br>integer : <b>worker_position_id</b> : Ο Κωδικός ID της Θέσης Εργασίας που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingWorkerPositionIDParam {@see ExceptionMessages::MissingWorkerPositionIDParam}
 * <br>{@see ExceptionCodes::MissingWorkerPositionIDParam}
 *
 * @throws MissingWorkerPositionIDValue {@see ExceptionMessages::MissingWorkerPositionIDValue}
 * <br>{@see ExceptionCodes::MissingWorkerPositionIDValue}
 *  
 * @throws InvalidWorkerPositionIDArray {@see ExceptionMessages::InvalidWorkerPositionIDArray}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionIDArray}
 *
 * @throws InvalidWorkerPositionIDType {@see ExceptionMessages::InvalidWorkerPositionIDType}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionIDType}
 *
 * @throws InvalidWorkerPositionValue {@see ExceptionMessages::InvalidWorkerPositionValue}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionValue}
 *
 * @throws DuplicatedWorkerPositionUniqueValue {@see ExceptionMessages::DuplicatedWorkerPositionUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedWorkerPositionUniqueValue}
 * 
 * @throws MissingWorkerPositionNameParam {@see ExceptionMessages::MissingWorkerPositionNameParam}
 * <br>{@see ExceptionCodes::MissingWorkerPositionNameParam}
 *
 * @throws MissingWorkerPositionNameValue {@see ExceptionMessages::MissingWorkerPositionNameValue}
 * <br>{@see ExceptionCodes::MissingWorkerPositionNameValue}
 *
 * @throws InvalidWorkerPositionNameType {@see ExceptionMessages::InvalidWorkerPositionNameType}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionNameType}
 * 
 * @throws DuplicatedWorkerPositionValue {@see ExceptionMessages::DuplicatedWorkerPositionValue}
 * <br>{@see ExceptionCodes::DuplicatedWorkerPositionValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutWorkerPositions( $worker_position_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fWorkerPositionID = CRUDUtils::checkIDParam('worker_position_id', $params, $worker_position_id, 'WorkerPositionID');

        //init entity for update row============================================
        $WorkerPosition = CRUDUtils::findIDParam($fWorkerPositionID, 'WorkerPositions', 'WorkerPosition');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($WorkerPosition, $name, 'WorkerPositionName', 'name', $params);
        } else if ( Validator::IsNull($WorkerPosition->getName()) ){
            throw new Exception(ExceptionMessages::MissingWorkerPositionNameValue, ExceptionCodes::MissingWorkerPositionNameValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(wp.workerPositionId) AS fresult')
                            ->from('WorkerPositions', 'wp')
                            ->where("wp.name = :name AND wp.workerPositionId != :workerPositionId")
                            ->setParameter('name', $WorkerPosition->getName())
                            ->setParameter('workerPositionId', $WorkerPosition->getWorkerPositionId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedWorkerPositionValue,ExceptionCodes::DuplicatedWorkerPositionValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($WorkerPosition);
        $entityManager->flush($WorkerPosition);

//result_messages===============================================================      
        $result["worker_position_id"] = $WorkerPosition->getWorkerPositionId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>