<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Πρωτογενής Πηγή Μονάδων**
 *
 * Η συνάρτηση διαγράφει Πρωτογενής Πηγή Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **sources** : 
 * <br>https://mm.sch.gr/api/sources
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
 * "controller": "DeleteSources",
 * "function": "sources",
 * "method": "DELETE",
 * "parameters": { "source_id": `` },
 * "source_id": ``,
 * "status": 200,
 * "message": "[DELETE][sources]:success"
 * }
 * </code>
 *
 * 
 * @param integer $source_id ID Πρωτογενής Πηγής Μονάδων
 * <br>
 * <br>Ο Κωδικός ID της Πρωτογενής Πηγής Μονάδων
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Πρωτογενής Πηγής Μονάδων : {@see GetSources}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Πρωτογενής Πηγής Μονάδων
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
 * <br>integer : <b>source_id</b> : Ο Κωδικός ID της Πρωτογενής Πηγή Μονάδων που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingSourceIDParam {@see ExceptionMessages::MissingSourceIDParam}
 * <br>{@see ExceptionCodes::MissingSourceIDParam}
 *
 * @throws MissingSourceIDValue {@see ExceptionMessages::MissingSourceIDValue}
 * <br>{@see ExceptionCodes::MissingSourceIDValue}
 *  
 * @throws InvalidSourceIDArray {@see ExceptionMessages::InvalidSourceIDArray}
 * <br>{@see ExceptionCodes::InvalidSourceIDArray}
 *
 * @throws InvalidSourceIDΤype {@see ExceptionMessages::InvalidSourceIDΤype}
 * <br>{@see ExceptionCodes::InvalidSourceIDΤype}
 *
 * @throws NotFoundDelSourceValue {@see ExceptionMessages::NotFoundDelSourceValue}
 * <br>{@see ExceptionCodes::NotFoundDelSourceValue}
 * 
 * @throws DuplicateDelSourceValue {@see ExceptionMessages::DuplicateDelSourceValue}
 * <br>{@see ExceptionCodes::DuplicateDelSourceValue}
 *
 * @throws ReferencesSourceUnits {@see ExceptionMessages::ReferencesSourceUnits}
 * <br>{@see ExceptionCodes::ReferencesSourceUnits}
 * 
 * @throws ReferencesSourceWorkers {@see ExceptionMessages::ReferencesSourceWorkers}
 * <br>{@see ExceptionCodes::ReferencesSourceWorkers}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteSources($source_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$source_id============================================================ 
        $fSourceID = CRUDUtils::checkIDParam('source_id', $params, $source_id, 'SourceID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Sources')->findBy(array( 'sourceId' => $fSourceID ));
        $count= count($check);
 
        if ($count == 1)
            $Sources = $entityManager->find('Sources', $fSourceID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelSourceValue." : ".$fSourceID, ExceptionCodes::NotFoundDelSourceValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelSourceValue." : ".$fSourceID, ExceptionCodes::DuplicateDelSourceValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'source'  => $fSourceID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSourceUnits, ExceptionCodes::ReferencesSourceUnits);
        
        $checkReference = $entityManager->getRepository('Workers')->findOneBy(array( 'source'  => $fSourceID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSourceWorkers, ExceptionCodes::ReferencesSourceWorkers);
                
//delete from db================================================================
        $entityManager->remove($Sources);
        $entityManager->flush($Sources);
           
//result_messages===============================================================
        $result["source_id"] = $fSourceID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>