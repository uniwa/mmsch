<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Ειδικότητας Εργαζόμενου**
 *
 * Η συνάρτηση διαγράφει Ειδικότητα Εργαζόμενου σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **worker_specializations** : 
 * <br>https://mm.sch.gr/api/worker_specializations
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
 * "controller": "DeleteWorkerSpecializations",
 * "function": "worker_specializations",
 * "method": "DELETE",
 * "parameters": { "worker_specialization_id": `` },
 * "worker_specialization_id": ``,
 * "status": 200,
 * "message": "[DELETE][worker_specialization_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $worker_specialization_id ID Ειδικότητας Εργαζόμενου
 * <br>
 * <br>Ο Κωδικός ID της Ειδικότητας Εργαζόμενου
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Ειδικότητας Εργαζόμενου : {@see GetWorkerSpecializations}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Ειδικότητας Εργαζόμενου
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
 * <br>integer : <b>worker_specialization_id</b> : Ο Κωδικός ID της Ειδικότητας Εργαζόμενου που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingWorkerSpecializationIDParam {@see ExceptionMessages::MissingWorkerSpecializationIDParam}
 * <br>{@see ExceptionCodes::MissingWorkerSpecializationIDParam}
 *
 * @throws MissingWorkerSpecializationIDValue {@see ExceptionMessages::MissingWorkerSpecializationIDValue}
 * <br>{@see ExceptionCodes::MissingWorkerSpecializationIDValue}
 *  
 * @throws InvalidWorkerSpecializationIDArray {@see ExceptionMessages::InvalidWorkerSpecializationIDArray}
 * <br>{@see ExceptionCodes::InvalidWorkerSpecializationIDArray}
 *
 * @throws InvalidWorkerSpecializationIDΤype {@see ExceptionMessages::InvalidWorkerSpecializationIDΤype}
 * <br>{@see ExceptionCodes::InvalidWorkerSpecializationIDΤype}
 *
 * @throws NotFoundDelWorkerSpecializationValue {@see ExceptionMessages::NotFoundDelWorkerSpecializationValue}
 * <br>{@see ExceptionCodes::NotFoundDelWorkerSpecializationValue}
 * 
 * @throws DuplicateDelWorkerSpecializationValue {@see ExceptionMessages::DuplicateDelWorkerSpecializationValue}
 * <br>{@see ExceptionCodes::DuplicateDelWorkerSpecializationValue}
 *
 * @throws ReferencesWorkerSpecializationWorkers {@see ExceptionMessages::ReferencesWorkerSpecializationWorkers}
 * <br>{@see ExceptionCodes::ReferencesWorkerSpecializationWorkers}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteWorkerSpecializations($worker_specialization_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$worker_specialization_id============================================= 
        $fWorkerSpecializationID = CRUDUtils::checkIDParam('worker_specialization_id', $params, $worker_specialization_id, 'WorkerSpecializationID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('WorkerSpecializations')->findBy(array( 'workerSpecializationId' => $fWorkerSpecializationID ));
        $count= count($check);
 
        if ($count == 1)
            $WorkerSpecializations = $entityManager->find('WorkerSpecializations', $fWorkerSpecializationID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelWorkerSpecializationValue." : ".$fWorkerSpecializationID, ExceptionCodes::NotFoundDelWorkerSpecializationValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelWorkerSpecializationValue." : ".$fWorkerSpecializationID, ExceptionCodes::DuplicateDelWorkerSpecializationValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Workers')->findOneBy(array( 'workerSpecialization'  => $fWorkerSpecializationID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesWorkerSpecializationWorkers, ExceptionCodes::ReferencesWorkerSpecializationWorkers);  
        
//delete from db================================================================
        $entityManager->remove($WorkerSpecializations);
        $entityManager->flush($WorkerSpecializations);
           
//result_messages===============================================================
        $result["worker_specialization_id"] = $fWorkerSpecializationID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>