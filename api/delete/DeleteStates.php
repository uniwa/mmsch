<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Λειτουργικής Κατάστασης**
 *
 * Η συνάρτηση διαγράφει Λειτουργική Κατάσταση σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **states** : 
 * <br>https://mm.sch.gr/api/states
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
 * "controller": "DeleteStates",
 * "function": "states",
 * "method": "DELETE",
 * "parameters": { "state_id": `` },
 * "state_id": ``,
 * "status": 200,
 * "message": "[DELETE][states]:success"
 * }
 * </code>
 *
 * 
 * @param integer $state_id ID Λειτουργικής Κατάστασης
 * <br>
 * <br>Ο Κωδικός ID της Λειτουργικής Κατάστασης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Λειτουργικής Κατάστασης : {@see GetStates}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Λειτουργικής Κατάστασης
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
 * <br>integer : <b>state_id</b> : Ο Κωδικός ID της Λειτουργικής Κατάστασης που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingStateIDParam {@see ExceptionMessages::MissingStateIDParam}
 * <br>{@see ExceptionCodes::MissingStateIDParam}
 *
 * @throws MissingStateIDValue {@see ExceptionMessages::MissingStateIDValue}
 * <br>{@see ExceptionCodes::MissingStateIDValue}
 *  
 * @throws InvalidStateIDArray {@see ExceptionMessages::InvalidStateIDArray}
 * <br>{@see ExceptionCodes::InvalidStateIDArray}
 *
 * @throws InvalidStateIDΤype {@see ExceptionMessages::InvalidStateIDΤype}
 * <br>{@see ExceptionCodes::InvalidStateIDΤype}
 *
 * @throws NotFoundDelStateValue {@see ExceptionMessages::NotFoundDelStateValue}
 * <br>{@see ExceptionCodes::NotFoundDelStateValue}
 * 
 * @throws DuplicateDelStateValue {@see ExceptionMessages::DuplicateDelStateValue}
 * <br>{@see ExceptionCodes::DuplicateDelStateValue}
 *
 * @throws ReferencesStateUnits {@see ExceptionMessages::ReferencesStateUnits}
 * <br>{@see ExceptionCodes::ReferencesStateUnits}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteStates($state_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$state_id============================================================= 
        $fStateID = CRUDUtils::checkIDParam('state_id', $params, $state_id, 'StateID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('States')->findBy(array( 'stateId' => $fStateID ));
        $count= count($check);
 
        if ($count == 1)
            $States = $entityManager->find('States', $fStateID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelStateValue." : ".$fStateID, ExceptionCodes::NotFoundDelStateValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelStateValue." : ".$fStateID, ExceptionCodes::DuplicateDelStateValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'state'  => $fStateID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesStateUnits, ExceptionCodes::ReferencesStateUnits);
                
//delete from db================================================================
        $entityManager->remove($States);
        $entityManager->flush($States);
           
//result_messages===============================================================
        $result["state_id"] = $fStateID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>