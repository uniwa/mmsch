<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **Διαγραφή Συσχέτισης Εργαζόμενου-Μονάδας**
 *
 * Η συνάρτηση διαγράφει Συσχέτιση Εργαζόμενου-Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **unit_workers** : 
 * <br>https://mm.sch.gr/api/unit_workers
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
 * "controller": "DeleteUnitWorkers",
 * "function": "unit_workers",
 * "method": "DELETE",
 * "parameters": { "unit_worker_id": `` },
 * "unit_worker_id": ``,
 * "status": 200,
 * "message": "[DELETE][unit_workers]:success"
 * }
 * </code>
 *
 * 
 * @param integer $unit_worker_id ID Συσχέτισης Εργαζόμενου-Μονάδας
 * <br>
 * <br>Ο Κωδικός ID της Συσχέτισης Εργαζόμενου-Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Συσχέτισης Εργαζόμενου-Μονάδας : {@see GetUnitWorkers}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Συσχέτισης Εργαζόμενου-Μονάδας
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
 * <br>integer : <b>unit_worker_id</b> : Ο Κωδικός ID Συσχέτισης Εργαζόμενου-Μονάδας που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingUnitWorkerIDParam {@see ExceptionMessages::MissingUnitWorkerIDParam}
 * <br>{@see ExceptionCodes::MissingUnitWorkerIDParam}
 *
 * @throws MissingUnitWorkerIDValue {@see ExceptionMessages::MissingUnitWorkerIDValue}
 * <br>{@see ExceptionCodes::MissingUnitWorkerIDValue}
 *  
 * @throws InvalidUnitWorkerIDArray {@see ExceptionMessages::InvalidUnitWorkerIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitWorkerIDArray}
 *
 * @throws InvalidUnitWorkerIDType {@see ExceptionMessages::InvalidUnitWorkerIDType}
 * <br>{@see ExceptionCodes::InvalidUnitWorkerIDType}
 *
 * @throws NotFoundDelUnitWorkerValue {@see ExceptionMessages::NotFoundDelUnitWorkerValue}
 * <br>{@see ExceptionCodes::NotFoundDelUnitWorkerValue}
 * 
 * @throws DuplicateDelUnitWorkerValue {@see ExceptionMessages::DuplicateDelUnitWorkerValue}
 * <br>{@see ExceptionCodes::DuplicateDelUnitWorkerValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteUnitWorkers($unit_worker_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$unit_worker_id======================================================= 
        $fUnitWorkerID = CRUDUtils::checkIDParam('unit_worker_id', $params, $unit_worker_id, 'UnitWorkerID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('UnitWorkers')->findBy(array( 'unitWorkerId' => $fUnitWorkerID ));
        $count= count($check);
 
        if ($count == 1)
            $UnitWorkers = $entityManager->find('UnitWorkers', $fUnitWorkerID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelUnitWorkerValue." : ".$fUnitWorkerID, ExceptionCodes::NotFoundDelUnitWorkerValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelUnitWorkerValue." : ".$fUnitWorkerID, ExceptionCodes::DuplicateDelUnitWorkerValue);
        
//delete from db================================================================
        $entityManager->remove($UnitWorkers);
        $entityManager->flush($UnitWorkers);
           
//result_messages===============================================================      
        $result["unit_worker_id"] = $fUnitWorkerID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>