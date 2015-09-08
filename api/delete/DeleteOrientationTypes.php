<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE 
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Προσανατολισμού**
 *
 * Η συνάρτηση διαγράφει Προσανατολισμό σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **orientation_types** : 
 * <br>https://mm.sch.gr/api/orientation_types
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
 * "controller": "DeleteOrientationTypes",
 * "function": "orientation_types",
 * "method": "DELETE",
 * "parameters": { "orientation_type_id": `` },
 * "orientation_type_id": ``,
 * "status": 200,
 * "message": "[DELETE][orientation_type_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $orientation_type_id ID Προσανατολισμού
 * <br>
 * <br>Ο Κωδικός ID του Προσανατολισμού
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Προσανατολισμού : {@see GetOrientationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Προσανατολισμού
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
 * <br>integer : <b>orientation_type_id</b> : Ο Κωδικός ID του Προσανατολισμού που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingOrientationTypeIDParam {@see ExceptionMessages::MissingOrientationTypeIDParam}
 * <br>{@see ExceptionCodes::MissingOrientationTypeIDParam}
 *
 * @throws MissingOrientationTypeIDValue {@see ExceptionMessages::MissingOrientationTypeIDValue}
 * <br>{@see ExceptionCodes::MissingOrientationTypeIDValue}
 *  
 * @throws InvalidOrientationTypeIDArray {@see ExceptionMessages::InvalidOrientationTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeIDArray}
 *
 * @throws InvalidOrientationTypeIDΤype {@see ExceptionMessages::InvalidOrientationTypeIDΤype}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeIDΤype}
 *
 * @throws NotFoundDelOrientationTypeValue {@see ExceptionMessages::NotFoundDelOrientationTypeValue}
 * <br>{@see ExceptionCodes::NotFoundDelOrientationTypeValue}
 * 
 * @throws DuplicateDelOrientationTypeValue {@see ExceptionMessages::DuplicateDelOrientationTypeValue}
 * <br>{@see ExceptionCodes::DuplicateDelOrientationTypeValue}
 *
 * @throws ReferencesOrientationTypeUnits {@see ExceptionMessages::ReferencesOrientationTypeUnits}
 * <br>{@see ExceptionCodes::ReferencesOrientationTypeUnits}
 * 
 * @throws ReferencesOrientationTypeSyncTypes {@see ExceptionMessages::ReferencesOrientationTypeSyncTypes}
 * <br>{@see ExceptionCodes::ReferencesOrientationTypeSyncTypes}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteOrientationTypes($orientation_type_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$orientation_type_id================================================== 
        $fOrientationTypeID = CRUDUtils::checkIDParam('orientation_type_id', $params, $orientation_type_id, 'OrientationTypeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('OrientationTypes')->findBy(array( 'orientationTypeId' => $fOrientationTypeID ));
        $count= count($check);
 
        if ($count == 1)
            $OrientationTypes = $entityManager->find('OrientationTypes', $fOrientationTypeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelOrientationTypeValue." : ".$fOrientationTypeID, ExceptionCodes::NotFoundDelOrientationTypeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelOrientationTypeValue." : ".$fOrientationTypeID, ExceptionCodes::DuplicateDelOrientationTypeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'orientationType'  => $fOrientationTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOrientationTypeUnits, ExceptionCodes::ReferencesOrientationTypeUnits);
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'orientationType'  => $fOrientationTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesOrientationTypeSyncTypes, ExceptionCodes::ReferencesOrientationTypeSyncTypes);  
         
//delete from db================================================================
        $entityManager->remove($OrientationTypes);
        $entityManager->flush($OrientationTypes);
           
//result_messages===============================================================
        $result["orientation_type_id"] = $fOrientationTypeID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>