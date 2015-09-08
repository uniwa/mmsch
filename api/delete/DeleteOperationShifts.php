<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Ωράριου Λειτουργίας**
 *
 * Η συνάρτηση διαγράφει Ωράριο Λειτουργίας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **operation_shifts** : 
 * <br>https://mm.sch.gr/api/operation_shifts
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
 * "controller": "DeleteOperationShifts",
 * "function": "operation_shifts",
 * "method": "DELETE",
 * "parameters": { "operation_shift_id": `` },
 * "operation_shift_id": ``,
 * "status": 200,
 * "message": "[DELETE][operation_shift_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $operation_shift_id ID Ωράριου Λειτουργίας
 * <br>
 * <br>Ο Κωδικός ID του Ωράριου Λειτουργίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Ωράριου Λειτουργίας : {@see GetOperationShifts}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Ωράριου Λειτουργίας
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
 * <br>integer : <b>operation_shift_id</b> : Ο Κωδικός ID του Ωράριου Λειτουργίας που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingOperationShiftIDParam {@see ExceptionMessages::MissingOperationShiftIDParam}
 * <br>{@see ExceptionCodes::MissingOperationShiftIDParam}
 *
 * @throws MissingOperationShiftIDValue {@see ExceptionMessages::MissingOperationShiftIDValue}
 * <br>{@see ExceptionCodes::MissingOperationShiftIDValue}
 *  
 * @throws InvalidOperationShiftIDArray {@see ExceptionMessages::InvalidOperationShiftIDArray}
 * <br>{@see ExceptionCodes::InvalidOperationShiftIDArray}
 *
 * @throws InvalidOperationShiftIDΤype {@see ExceptionMessages::InvalidOperationShiftIDΤype}
 * <br>{@see ExceptionCodes::InvalidOperationShiftIDΤype}
 *
 * @throws NotFoundDelOperationShiftValue {@see ExceptionMessages::NotFoundDelOperationShiftValue}
 * <br>{@see ExceptionCodes::NotFoundDelOperationShiftValue}
 * 
 * @throws DuplicateDelOperationShiftValue {@see ExceptionMessages::DuplicateDelOperationShiftValue}
 * <br>{@see ExceptionCodes::DuplicateDelOperationShiftValue}
 *
 * @throws ReferencesOperationShiftUnits {@see ExceptionMessages::ReferencesOperationShiftUnits}
 * <br>{@see ExceptionCodes::ReferencesOperationShiftUnits}
 * 
 * @throws ReferencesOperationShiftSyncTypes {@see ExceptionMessages::ReferencesOperationShiftSyncTypes}
 * <br>{@see ExceptionCodes::ReferencesOperationShiftSyncTypes}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteOperationShifts($operation_shift_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$operation_shift_id=================================================== 
        $fOperationShiftID = CRUDUtils::checkIDParam('operation_shift_id', $params, $operation_shift_id, 'OperationShiftID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('OperationShifts')->findBy(array( 'operationShiftId' => $fOperationShiftID ));
        $count= count($check);
 
        if ($count == 1)
            $OperationShifts = $entityManager->find('OperationShifts', $fOperationShiftID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelOperationShiftValue." : ".$fOperationShiftID, ExceptionCodes::NotFoundDelOperationShiftValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelOperationShiftValue." : ".$fOperationShiftID, ExceptionCodes::DuplicateDelOperationShiftValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'operationShift'  => $fOperationShiftID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOperationShiftUnits, ExceptionCodes::ReferencesOperationShiftUnits);
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'operationShift'  => $fOperationShiftID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOperationShiftSyncTypes, ExceptionCodes::ReferencesOperationShiftSyncTypes);  
         
//delete from db================================================================
        $entityManager->remove($OperationShifts);
        $entityManager->flush($OperationShifts);
           
//result_messages===============================================================
        $result["operation_shift_id"] = $fOperationShiftID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>