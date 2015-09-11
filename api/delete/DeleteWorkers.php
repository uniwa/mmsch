<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **Διαγραφή Εργαζόμενου**
 *
 * Η συνάρτηση διαγράφει Εργαζόμενο σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **workers** : 
 * <br>https://mm.sch.gr/api/workers
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
 * "controller": "DeleteWorkers",
 * "function": "workers",
 * "method": "DELETE",
 * "parameters": { "worker_id": `` },
 * "worker_id": ``,
 * "status": 200,
 * "message": "[DELETE][workers]:success"
 * }
 * </code>
 *
 * 
 * @param integer $worker_id ID Εργαζόμενου
 * <br>
 * <br>Ο Κωδικός ID του Εργαζόμενου
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Εργαζόμενου : {@see GetWorkers}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Εργαζόμενου
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
 * <br>integer : <b>worker_id</b> : Ο Κωδικός ID Εργαζόμενου που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
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
 * @throws NotFoundDelWorkerValue {@see ExceptionMessages::NotFoundDelWorkerValue}
 * <br>{@see ExceptionCodes::NotFoundDelWorkerValue}
 * 
 * @throws DuplicateDelWorkerValue {@see ExceptionMessages::DuplicateDelWorkerValue}
 * <br>{@see ExceptionCodes::DuplicateDelWorkerValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteWorkers($worker_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$worker_id============================================================ 
        $fWorkerID = CRUDUtils::checkIDParam('worker_id', $params, $worker_id, 'WorkerID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Workers')->findBy(array( 'workerId' => $fWorkerID ));
        $count= count($check);
 
        if ($count == 1)
            $Workers = $entityManager->find('Workers', $fWorkerID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelWorkerValue." : ".$fWorkerID, ExceptionCodes::NotFoundDelWorkerValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelWorkerValue." : ".$fWorkerID, ExceptionCodes::DuplicateDelWorkerValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'worker'  => $fWorkerID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesWorkerUnitWorkers, ExceptionCodes::ReferencesWorkerUnitWorkers);  
        
//delete from db================================================================
        $entityManager->remove($Workers);
        $entityManager->flush($Workers);
           
//result_messages===============================================================      
        $result["worker_id"] = $fWorkerID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>