<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **Καταχώρηση Συσχέτισης Εργαζόμενου και Μονάδας**
 *
 * Η συνάρτηση καταχωρεί Συσχέτιση Εργαζόμενου και Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **unit_workers** :
 * <br>https://mm.sch.gr/api/unit_workers
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
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
 * "controller": "PostUnitWorkers",
 * "function": "unit_workers",
 * "method": "POST",
 * "parameters": {  "mm_id": ``, "worker": ``, "worker_position": `` },
 * "unit_worker_id": ``,
 * "status": 200,
 * "message": "[POST][unit_workers]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $mm_id Κωδικός ΜΜ
 * <br>
 * <br>Ο Κωδικός ΜΜ
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Κωδικός ΜΜ : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικός ΜΜ
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 * @param integer $worker ID Εργαζόμενου
 * <br>
 * <br>Ο Κωδικός ID Εργαζόμενου
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Κωδικός ID Εργαζόμενου : {@see GetWorkers}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Εργαζόμενου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $worker_position Όνομα ή ID Θέσης Εργασίας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Θέσης Εργασίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Θέσης Εργασίας : {@see GetWorkerPositions}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Θέσης Εργασίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Θέσης Εργασίας
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
 * <br>integer : <b>unit_worker_id</b> : Ο Κωδικός ID της Συσχέτισης Εργαζόμενου και Μονάδας που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 * 
 * 
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 *  
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * 
 * @throws DuplicatedUnitMMIDUniqueValue {@see ExceptionMessages::DuplicatedUnitMMIDUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitMMIDUniqueValue}
 *  
 * @throws MissingWorkerIDParam {@see ExceptionMessages::MissingWorkerIDParam}
 * <br>{@see ExceptionCodes::MissingWorkerIDParam}
 *
 * @throws MissingWorkerIDValue {@see ExceptionMessages::MissingWorkerIDValue}
 * <br>{@see ExceptionCodes::MissingWorkerIDValue}
 *  
 * @throws InvalidWorkerIDArray {@see ExceptionMessages::InvalidWorkerIDArray}
 * <br>{@see ExceptionCodes::InvalidWorkerIDArray}
 *
 * @throws InvalidWorkerIDType {@see ExceptionMessages::InvalidWorkerIDType}
 * <br>{@see ExceptionCodes::InvalidWorkerIDType}
 * 
 * @throws DuplicatedWorkerIDUniqueValue {@see ExceptionMessages::DuplicatedSourceUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedSourceUniqueValue}
 *  
 * @throws MissingWorkerPositionParam {@see ExceptionMessages::MissingWorkerPositionParam}
 * <br>{@see ExceptionCodes::MissingWorkerPositionParam}
 *
 * @throws MissingWorkerPositionValue {@see ExceptionMessages::MissingWorkerPositionValue}
 * <br>{@see ExceptionCodes::MissingWorkerPositionValue}
 *  
 * @throws InvalidWorkerPositionArray {@see ExceptionMessages::InvalidWorkerPositionArray}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionArray}
 *
 * @throws InvalidWorkerPositionType {@see ExceptionMessages::InvalidWorkerPositionType}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionType}
 * 
 * @throws DuplicatedWorkerPositionUniqueValue {@see ExceptionMessages::DuplicatedWorkerPositionUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedWorkerPositionUniqueValue}
 * 
 * @throws DuplicatedUnitWorkerValue {@see ExceptionMessages::DuplicatedUnitWorkerValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitWorkerValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 * 
 */

function PostUnitWorkers( $mm_id, $worker, $worker_position ) {
    
    global $app, $entityManager;
    
    $unitWorker = new UnitWorkers();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;
   
    try {

    //$mm_id====================================================================
    CRUDUtils::entitySetAssociation($unitWorker, $mm_id, 'Units', 'mm', 'UnitMMID', $params, 'mm_id', true, false, true);
  
    //$worker===================================================================
    CRUDUtils::entitySetAssociation($unitWorker, $worker, 'Workers', 'worker', 'WorkerID', $params, 'worker', true, false, true);

    //$worker_position==========================================================
    CRUDUtils::entitySetAssociation($unitWorker, $worker_position, 'WorkerPositions', 'workerPosition', 'WorkerPosition', $params, 'worker_position');

//controls======================================================================

       //check for duplicate====================================================
       $checkDuplicate = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'mm' => Validator::toID($mm_id),
                                                                                        'worker' => Validator::toID($worker),
                                                                                        'workerPosition' => Validator::toID($worker_position),
                                                                                       ));

       if (!Validator::isNull($checkDuplicate)){
           throw new Exception(ExceptionMessages::DuplicatedUnitWorkerValue ,ExceptionCodes::DuplicatedUnitWorkerValue);
       }

       // Only one worker of this specialty is allowed per unit
       $distinctSpecialties = array( 'ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ' );

       if(in_array($worker_position, $distinctSpecialties)) {
            $checkDistinct = $entityManager->getRepository('UnitWorkers')->findBy(array( 'mm' => Validator::toID($mm_id),
                                                                                         'workerPosition' => $unitWorker->getWorkerPosition(),
                                                                                       ));
            $toFlush = array();
            foreach($checkDistinct as $curDistinctWorker) {
                $entityManager->remove($curDistinctWorker);
                $toFlush[] = $curDistinctWorker;
            }
            $entityManager->flush($toFlush);
       }

 //insert to db================================================================== 
           $entityManager->persist($unitWorker);
           $entityManager->flush($unitWorker);
       
//result_messages===============================================================
        $result["unit_worker_id"] = $unitWorker->getUnitWorkerId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>