<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Συσχέτισης Περιοχής Μετάθεσης με Δήμο**
 *
 * Η συνάρτηση διαγράφει Συσχέτιση Περιοχής Μετάθεσης με Δήμο σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **transfer_area_municipalities** : 
 * <br>https://mm.sch.gr/api/transfer_area_municipalities
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
 * "controller": "DeleteTransferAreaMunicipalities",
 * "function": "transfer_area_municipalities",
 * "method": "DELETE",
 * "parameters": { "transfer_area_municipality_id": `` },
 * "transfer_area_municipality_id": ``,
 * "status": 200,
 * "message": "[DELETE][transfer_area_municipality_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $transfer_area_municipality_id ID Συσχέτισης Περιοχής Μετάθεσης με Δήμο
 * <br>
 * <br>Ο Κωδικός ID της Συσχέτισης Περιοχής Μετάθεσης με Δήμο
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Συσχέτισης Περιοχής Μετάθεσης με Δήμο : {@see GetTransferAreaMunicipalities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Συσχέτισης Περιοχής Μετάθεσης με Δήμο
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
 * <br>integer : <b>transfer_area_municipality_id</b> : Ο Κωδικός ID της Συσχέτισης Περιοχής Μετάθεσης με Δήμο που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingTransferAreaMunicipalityIDParam {@see ExceptionMessages::MissingTransferAreaMunicipalityIDParam}
 * <br>{@see ExceptionCodes::MissingTransferAreaMunicipalityIDParam}
 *
 * @throws MissingTransferAreaMunicipalityIDValue {@see ExceptionMessages::MissingTransferAreaMunicipalityIDValue}
 * <br>{@see ExceptionCodes::MissingTransferAreaMunicipalityIDValue}
 *  
 * @throws InvalidTransferAreaMunicipalityIDArray {@see ExceptionMessages::InvalidTransferAreaMunicipalityIDArray}
 * <br>{@see ExceptionCodes::InvalidTransferAreaMunicipalityIDArray}
 *
 * @throws InvalidTransferAreaMunicipalityIDΤype {@see ExceptionMessages::InvalidTransferAreaMunicipalityIDΤype}
 * <br>{@see ExceptionCodes::InvalidTransferAreaMunicipalityIDΤype}
 *
 * @throws NotFoundDelTransferAreaMunicipalityValue {@see ExceptionMessages::NotFoundDelTransferAreaMunicipalityValue}
 * <br>{@see ExceptionCodes::NotFoundDelTransferAreaMunicipalityValue}
 * 
 * @throws DuplicateDelTransferAreaMunicipalityValue {@see ExceptionMessages::DuplicateDelTransferAreaMunicipalityValue}
 * <br>{@see ExceptionCodes::DuplicateDelTransferAreaMunicipalityValue}
 *
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteTransferAreaMunicipalities($transfer_area_municipality_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$transfer_area_municipality_id======================================== 
        $fTransferAreaMunicipalityID = CRUDUtils::checkIDParam('transfer_area_municipality_id', $params, $transfer_area_municipality_id, 'TransferAreaMunicipalityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('TransferAreaMunicipalities')->findBy(array( 'transferAreaMunicipalityId' => $fTransferAreaMunicipalityID ));
        $count= count($check);
 
        if ($count == 1)
            $TransferAreaMunicipalities = $entityManager->find('TransferAreaMunicipalities', $fTransferAreaMunicipalityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelTransferAreaMunicipalityValue." : ".$fTransferAreaMunicipalityID, ExceptionCodes::NotFoundDelTransferAreaMunicipalityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelTransferAreaMunicipalityValue." : ".$fTransferAreaMunicipalityID, ExceptionCodes::DuplicateDelTransferAreaMunicipalityValue);
                
//delete from db================================================================
        $entityManager->remove($TransferAreaMunicipalities);
        $entityManager->flush($TransferAreaMunicipalities);
           
//result_messages===============================================================
        $result["transfer_area_municipality_id"] = $fTransferAreaMunicipalityID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>