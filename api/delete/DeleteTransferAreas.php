<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Περιοχής Μετάθεσης**
 *
 * Η συνάρτηση διαγράφει Περιοχή Μετάθεσης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **transfer_areas** : 
 * <br>https://mm.sch.gr/api/transfer_areas
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
 * "controller": "DeleteTransferAreas",
 * "function": "transfer_areas",
 * "method": "DELETE",
 * "parameters": { "transfer_area_id": `` },
 * "transfer_area_id": ``,
 * "status": 200,
 * "message": "[DELETE][transfer_area_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $transfer_area_id ID Περιοχής Μετάθεσης
 * <br>
 * <br>Ο Κωδικός ID της Περιοχής Μετάθεσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Περιοχής Μετάθεσης : {@see GetTransferAreas}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιοχής Μετάθεσης
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
 * <br>integer : <b>transfer_area_id</b> : Ο Κωδικός ID της Περιοχής Μετάθεσης που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingTransferAreaIDParam {@see ExceptionMessages::MissingTransferAreaIDParam}
 * <br>{@see ExceptionCodes::MissingTransferAreaIDParam}
 *
 * @throws MissingTransferAreaIDValue {@see ExceptionMessages::MissingTransferAreaIDValue}
 * <br>{@see ExceptionCodes::MissingTransferAreaIDValue}
 *  
 * @throws InvalidTransferAreaIDArray {@see ExceptionMessages::InvalidTransferAreaIDArray}
 * <br>{@see ExceptionCodes::InvalidTransferAreaIDArray}
 *
 * @throws InvalidTransferAreaIDΤype {@see ExceptionMessages::InvalidTransferAreaIDΤype}
 * <br>{@see ExceptionCodes::InvalidTransferAreaIDΤype}
 *
 * @throws NotFoundDelTransferAreaValue {@see ExceptionMessages::NotFoundDelTransferAreaValue}
 * <br>{@see ExceptionCodes::NotFoundDelTransferAreaValue}
 * 
 * @throws DuplicateDelTransferAreaValue {@see ExceptionMessages::DuplicateDelTransferAreaValue}
 * <br>{@see ExceptionCodes::DuplicateDelTransferAreaValue}
 *
 * @throws ReferencesTransferAreaUnits {@see ExceptionMessages::ReferencesTransferAreaUnits}
 * <br>{@see ExceptionCodes::ReferencesTransferAreaUnits}
 * 
 * @throws ReferencesTransferAreaTransferAreaMunicipalities {@see ExceptionMessages::ReferencesTransferAreaTransferAreaMunicipalities}
 * <br>{@see ExceptionCodes::ReferencesTransferAreaTransferAreaMunicipalities}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteTransferAreas($transfer_area_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$transfer_area_id===================================================== 
        $fTransferAreaID = CRUDUtils::checkIDParam('transfer_area_id', $params, $transfer_area_id, 'TransferAreaID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('TransferAreas')->findBy(array( 'transferAreaId' => $fTransferAreaID ));
        $count= count($check);
 
        if ($count == 1)
            $TransferAreas = $entityManager->find('TransferAreas', $fTransferAreaID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelTransferAreaValue." : ".$fTransferAreaID, ExceptionCodes::NotFoundDelTransferAreaValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelTransferAreaValue." : ".$fTransferAreaID, ExceptionCodes::DuplicateDelTransferAreaValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'transferArea'  => $fTransferAreaID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesTransferAreaUnits, ExceptionCodes::ReferencesTransferAreaUnits);
        
        $checkReference = $entityManager->getRepository('TransferAreaMunicipalities')->findOneBy(array( 'transferArea'  => $fTransferAreaID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesTransferAreaTransferAreaMunicipalities, ExceptionCodes::ReferencesTransferAreaTransferAreaMunicipalities);
                
//delete from db================================================================
        $entityManager->remove($TransferAreas);
        $entityManager->flush($TransferAreas);
           
//result_messages===============================================================
        $result["transfer_area_id"] = $fTransferAreaID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>