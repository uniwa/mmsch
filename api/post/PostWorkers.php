<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Καταχώρηση Στοιχείων Εργαζόμενου**
 *
 * Η συνάρτηση καταχωρεί Στοιχεία Εργαζόμενου σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **workers** :
 * <br>https://mm.sch.gr/api/workers
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **registry_no**
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
 * "controller": "PostWorkers",
 * "function": "workers",
 * "method": "POST",
 * "parameters": {  "registry_no": ``, "lastname": ``, 
 *                  "firstname": ``, "fathername": ``, "sex": ``, 
 *                  "tax_number": ``, "worker_specialization": ``, "source": `` },
 * "worker_id": ``,
 * "status": 200,
 * "message": "[POST][workers]:success"
 * }
 * </code>
 * 
 * 
 * @param date $registry_no Αριθμός Μητρώου
 * <br>
 * <br>Ο Αριθμός Μητρώου του Εργαζόμενου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $lastname Επώνυμο
 * <br>
 * <br>Το Επώνυμο του Εργαζόμενου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $firstname Όνομα
 * <br>
 * <br>Το Όνομα του Εργαζόμενου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $fathername Πατρώνυμο
 * <br>
 * <br>Το Πατρώνυμο του Εργαζόμενου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $sex Φύλο
 * <br>
 * <br>Το Φύλο του Εργαζόμενου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $tax_number Αριθμός Φορολογικού Μητρώου
 * <br>
 * <br>Ο Αριθμός Φορολογικού Μητρώου του Εργαζόμενου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param integer|string $worker_specialization Όνομα ή ID Ειδικότητας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Ειδικότητας Εργαζόμενου
 * <br>Όνομα ή ID Ειδικότητας Εργαζόμενου : {@see GetWorkerSpecializations}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Ειδικότητας Εργαζόμενου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Ειδικότητας Εργαζόμενου
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 * @param integer|string $source Όνομα ή ID Πρωτογενής Πηγή
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Πρωτογενής Πηγής
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Ειδικότητας Εργαζόμενου : {@see GetSources}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Πρωτογενής Πηγής
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Πρωτογενής Πηγής
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
 * <br>integer : <b>worker_id</b> : Ο Κωδικός ID του Εργαζόμενου που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 * 
 * 
 * @throws MissingWorkerRegistryNoParam {@see ExceptionMessages::MissingWorkerRegistryNoParam}
 * <br>{@see ExceptionCodes::MissingWorkerRegistryNoParam}
 *
 * @throws MissingWorkerRegistryNoValue {@see ExceptionMessages::MissingWorkerRegistryNoValue}
 * <br>{@see ExceptionCodes::MissingWorkerRegistryNoValue}
 *
 * @throws InvalidWorkerRegistryNoType {@see ExceptionMessages::InvalidWorkerRegistryNoType}
 * <br>{@see ExceptionCodes::InvalidWorkerRegistryNoType}
 *
 * @throws MissingWorkerLastnameParam {@see ExceptionMessages::MissingWorkerLastnameParam}
 * <br>{@see ExceptionCodes::MissingWorkerLastnameParam}
 *
 * @throws MissingWorkerLastnameValue {@see ExceptionMessages::MissingWorkerLastnameValue}
 * <br>{@see ExceptionCodes::MissingWorkerLastnameValue}
 *
 * @throws InvalidWorkerLastnameType {@see ExceptionMessages::InvalidWorkerLastnameType}
 * <br>{@see ExceptionCodes::InvalidWorkerLastnameType}
 *
 * @throws MissingWorkerFirstnameParam {@see ExceptionMessages::MissingWorkerFirstnameParam}
 * <br>{@see ExceptionCodes::MissingWorkerFirstnameParam}
 *
 * @throws MissingWorkerFirstnameValue {@see ExceptionMessages::MissingWorkerFirstnameValue}
 * <br>{@see ExceptionCodes::MissingWorkerFirstnameValue}
 *
 * @throws InvalidWorkerFirstnameType {@see ExceptionMessages::InvalidWorkerFirstnameType}
 * <br>{@see ExceptionCodes::InvalidWorkerFirstnameType}
 * 
 * @throws MissingWorkerFathernameParam {@see ExceptionMessages::MissingWorkerFathernameParam}
 * <br>{@see ExceptionCodes::MissingWorkerFathernameParam}
 *
 * @throws MissingWorkerFathernameValue {@see ExceptionMessages::MissingWorkerFathernameValue}
 * <br>{@see ExceptionCodes::MissingWorkerFathernameValue}
 *
 * @throws InvalidWorkerFathernameType {@see ExceptionMessages::InvalidWorkerFathernameType}
 * <br>{@see ExceptionCodes::InvalidWorkerFathernameType}
 * 
 * @throws MissingWorkerSexParam {@see ExceptionMessages::MissingWorkerSexParam}
 * <br>{@see ExceptionCodes::MissingWorkerSexParam}
 *
 * @throws MissingWorkerSexValue {@see ExceptionMessages::MissingWorkerSexValue}
 * <br>{@see ExceptionCodes::MissingWorkerSexValue}
 *
 * @throws InvalidWorkerSexType {@see ExceptionMessages::InvalidWorkerSexType}
 * <br>{@see ExceptionCodes::InvalidWorkerSexType}
 * 
 * @throws MissingWorkerTaxNumberParam {@see ExceptionMessages::MissingWorkerTaxNumberParam}
 * <br>{@see ExceptionCodes::MissingWorkerTaxNumberParam}
 *
 * @throws MissingWorkerTaxNumberValue {@see ExceptionMessages::MissingWorkerTaxNumberValue}
 * <br>{@see ExceptionCodes::MissingWorkerTaxNumberValue}
 *
 * @throws InvalidWorkerTaxNumberType {@see ExceptionMessages::InvalidWorkerTaxNumberType}
 * <br>{@see ExceptionCodes::InvalidWorkerTaxNumberType}
 *
 * @throws MissingWorkerSpecializationParam {@see ExceptionMessages::MissingWorkerSpecializationParam}
 * <br>{@see ExceptionCodes::MissingWorkerSpecializationParam}
 *
 * @throws MissingWorkerSpecializationValue {@see ExceptionMessages::MissingWorkerSpecializationValue}
 * <br>{@see ExceptionCodes::MissingWorkerSpecializationValue}
 *  
 * @throws InvalidWorkerSpecializationArray {@see ExceptionMessages::InvalidWorkerSpecializationArray}
 * <br>{@see ExceptionCodes::InvalidWorkerSpecializationArray}
 *
 * @throws InvalidWorkerSpecializationType {@see ExceptionMessages::InvalidWorkerSpecializationType}
 * <br>{@see ExceptionCodes::InvalidWorkerSpecializationType}
 * 
 * @throws DuplicatedWorkerSpecializationUniqueValue {@see ExceptionMessages::DuplicatedWorkerSpecializationUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedWorkerSpecializationUniqueValue} 
 * 
 * @throws MissingSourceParam {@see ExceptionMessages::MissingSourceParam}
 * <br>{@see ExceptionCodes::MissingSourceParam}
 *
 * @throws MissingSourceValue {@see ExceptionMessages::MissingSourceValue}
 * <br>{@see ExceptionCodes::MissingSourceValue}
 *  
 * @throws InvalidSourceArray {@see ExceptionMessages::InvalidSourceArray}
 * <br>{@see ExceptionCodes::InvalidSourceArray}
 *
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * <br>{@see ExceptionCodes::InvalidSourceType}
 * 
 * @throws DuplicatedSourceUniqueValue {@see ExceptionMessages::DuplicatedSourceUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedSourceUniqueValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 * 
 */

function PostWorkers( $registry_no, $lastname, $firstname, $fathername, $sex, $tax_number,
                      $worker_specialization, $source ) {
    
    global $app, $entityManager;
    
    $Worker = new Workers();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {

    //$registry_no==============================================================
    CRUDUtils::entitySetParam($Worker, $registry_no, 'WorkerRegistryNo', 'registry_no' , $params, false, true );
  
    //$lastname=================================================================
    CRUDUtils::entitySetParam($Worker, $lastname, 'WorkerLastname', 'lastname' , $params, false, true );

    //$firstname================================================================
    CRUDUtils::entitySetParam($Worker, $firstname, 'WorkerFirstname', 'firstname' , $params, false, true );

    //$fathername===============================================================
    CRUDUtils::entitySetParam($Worker, $fathername, 'WorkerFathername', 'fathername' , $params, false, true );
  
    //$sex======================================================================
    CRUDUtils::entitySetParam($Worker, $sex, 'WorkerSex', 'sex' , $params, false, true );

    //$tax_number===============================================================
    CRUDUtils::entitySetParam($Worker, $tax_number, 'WorkerTaxNumber', 'tax_number' , $params, false, true );

    //$worker_specialization====================================================
    CRUDUtils::entitySetAssociation($Worker, $worker_specialization, 'WorkerSpecializations', 'workerSpecialization', 'WorkerSpecialization', $params, 'worker_specialization', false, true);
      
    //$source===================================================================
    CRUDUtils::entitySetAssociation($Worker, $source, 'Sources', 'source', 'Source', $params, 'source');

    //insert to db==============================================================
           $entityManager->persist($Worker);
           $entityManager->flush($Worker);

//result_messages===============================================================      
        $result["worker_id"] = $Worker->getWorkerId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>