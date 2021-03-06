<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Θέσης Εργασίας**
 *
 * Η συνάρτηση διαγράφει Θέση Εργασίας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **worker_positions** : 
 * <br>https://mm.sch.gr/api/worker_positions
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
 * "controller": "DeleteWorkerPositions",
 * "function": "worker_positions",
 * "method": "DELETE",
 * "parameters": { "worker_position_id": `` },
 * "worker_position_id": ``,
 * "status": 200,
 * "message": "[DELETE][worker_positions]:success"
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
 *
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>worker_position_id</b> : Ο Κωδικός ID της Θέσης Εργασίας που διαγράφηκε
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
 * @throws InvalidWorkerPositionIDΤype {@see ExceptionMessages::InvalidWorkerPositionIDΤype}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionIDΤype}
 *
 * @throws NotFoundDelWorkerPositionValue {@see ExceptionMessages::NotFoundDelWorkerPositionValue}
 * <br>{@see ExceptionCodes::NotFoundDelWorkerPositionValue}
 * 
 * @throws DuplicateDelWorkerPositionValue {@see ExceptionMessages::DuplicateDelWorkerPositionValue}
 * <br>{@see ExceptionCodes::DuplicateDelWorkerPositionValue}
 *
 * @throws ReferencesWorkerPositionUnitWorkers {@see ExceptionMessages::ReferencesWorkerPositionUnitWorkers}
 * <br>{@see ExceptionCodes::ReferencesWorkerPositionUnitWorkers}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteWorkerPositions($worker_position_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$worker_position_id=================================================== 
        $fWorkerPositionID = CRUDUtils::checkIDParam('worker_position_id', $params, $worker_position_id, 'WorkerPositionID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('WorkerPositions')->findBy(array( 'workerPositionId' => $fWorkerPositionID ));
        $count= count($check);
 
        if ($count == 1)
            $WorkerPositions = $entityManager->find('WorkerPositions', $fWorkerPositionID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelWorkerPositionValue." : ".$fWorkerPositionID, ExceptionCodes::NotFoundDelWorkerPositionValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelWorkerPositionValue." : ".$fWorkerPositionID, ExceptionCodes::DuplicateDelWorkerPositionValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'workerPosition'  => $fWorkerPositionID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesWorkerPositionUnitWorkers, ExceptionCodes::ReferencesWorkerPositionUnitWorkers);  
        
//delete from db================================================================
        $entityManager->remove($WorkerPositions);
        $entityManager->flush($WorkerPositions);
           
//result_messages===============================================================
        $result["worker_position_id"] = $fWorkerPositionID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>