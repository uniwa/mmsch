<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Τύπου Μονάδας**
 *
 * Η συνάρτηση διαγράφει Τύπο Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **unit_types** : 
 * <br>https://mm.sch.gr/api/unit_types
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
 * "controller": "DeleteUnitTypes",
 * "function": "unit_types",
 * "method": "DELETE",
 * "parameters": { "unit_type_id": `` },
 * "unit_type_id": ``,
 * "status": 200,
 * "message": "[DELETE][unit_types]:success"
 * }
 * </code>
 *
 * 
 * @param integer $unit_type_id ID Τύπου Μονάδας
 * <br>
 * <br>Ο Κωδικός ID του Τύπου Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Τύπου Μονάδας : {@see GetUnitTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Τύπου Μονάδας
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
 * <br>integer : <b>unit_type_id</b> : Ο Κωδικός ID του Τύπου Μονάδας που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingUnitTypeIDParam {@see ExceptionMessages::MissingUnitTypeIDParam}
 * <br>{@see ExceptionCodes::MissingUnitTypeIDParam}
 *
 * @throws MissingUnitTypeIDValue {@see ExceptionMessages::MissingUnitTypeIDValue}
 * <br>{@see ExceptionCodes::MissingUnitTypeIDValue}
 *  
 * @throws InvalidUnitTypeIDArray {@see ExceptionMessages::InvalidUnitTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitTypeIDArray}
 *
 * @throws InvalidUnitTypeIDΤype {@see ExceptionMessages::InvalidUnitTypeIDΤype}
 * <br>{@see ExceptionCodes::InvalidUnitTypeIDΤype}
 *
 * @throws NotFoundDelUnitTypeValue {@see ExceptionMessages::NotFoundDelUnitTypeValue}
 * <br>{@see ExceptionCodes::NotFoundDelUnitTypeValue}
 * 
 * @throws DuplicateDelUnitTypeValue {@see ExceptionMessages::DuplicateDelUnitTypeValue}
 * <br>{@see ExceptionCodes::DuplicateDelUnitTypeValue}
 *
 * @throws ReferencesUnitTypeUnits {@see ExceptionMessages::ReferencesUnitTypeUnits}
 * <br>{@see ExceptionCodes::ReferencesUnitTypeUnits}
 * 
 * @throws ReferencesUnitTypeSyncTypes {@see ExceptionMessages::ReferencesUnitTypeSyncTypes}
 * <br>{@see ExceptionCodes::ReferencesUnitTypeSyncTypes}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteUnitTypes($unit_type_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$unit_type_id========================================================= 
        $fUnitTypeID = CRUDUtils::checkIDParam('unit_type_id', $params, $unit_type_id, 'UnitTypeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('UnitTypes')->findBy(array( 'unitTypeId' => $fUnitTypeID ));
        $count= count($check);
 
        if ($count == 1)
            $UnitTypes = $entityManager->find('UnitTypes', $fUnitTypeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelUnitTypeValue." : ".$fUnitTypeID, ExceptionCodes::NotFoundDelUnitTypeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelUnitTypeValue." : ".$fUnitTypeID, ExceptionCodes::DuplicateDelUnitTypeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'unitType'  => $fUnitTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitTypeUnits, ExceptionCodes::ReferencesUnitTypeUnits);  
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'unitType'  => $fUnitTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitTypeSyncTypes, ExceptionCodes::ReferencesUnitTypeSyncTypes);  
        
//delete from db================================================================
        $entityManager->remove($UnitTypes);
        $entityManager->flush($UnitTypes);
           
//result_messages===============================================================
        $result["unit_type_id"] = $fUnitTypeID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>