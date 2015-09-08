<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Ειδικού Τύπου Μονάδων**
 *
 * Η συνάρτηση διαγράφει Ειδικό Τύπο Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **special_types** : 
 * <br>https://mm.sch.gr/api/special_types
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
 * "controller": "DeleteSpecialTypes",
 * "function": "special_types",
 * "method": "DELETE",
 * "parameters": { "special_type_id": `` },
 * "special_type_id": ``,
 * "status": 200,
 * "message": "[DELETE][special_type_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $special_type_id ID Ειδικού Τύπου Μονάδων
 * <br>
 * <br>Ο Κωδικός ID του Ειδικού Τύπου Μονάδων
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Ειδικού Τύπου Μονάδων : {@see GetSpecialTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Ειδικού Τύπου Μονάδων
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
 * <br>integer : <b>special_type_id</b> : Ο Κωδικός ID του Ειδικού Τύπου Μονάδων που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingSpecialTypeIDParam {@see ExceptionMessages::MissingSpecialTypeIDParam}
 * <br>{@see ExceptionCodes::MissingSpecialTypeIDParam}
 *
 * @throws MissingSpecialTypeIDValue {@see ExceptionMessages::MissingSpecialTypeIDValue}
 * <br>{@see ExceptionCodes::MissingSpecialTypeIDValue}
 *  
 * @throws InvalidSpecialTypeIDArray {@see ExceptionMessages::InvalidSpecialTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeIDArray}
 *
 * @throws InvalidSpecialTypeIDΤype {@see ExceptionMessages::InvalidSpecialTypeIDΤype}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeIDΤype}
 *
 * @throws NotFoundDelSpecialTypeValue {@see ExceptionMessages::NotFoundDelSpecialTypeValue}
 * <br>{@see ExceptionCodes::NotFoundDelSpecialTypeValue}
 * 
 * @throws DuplicateDelSpecialTypeValue {@see ExceptionMessages::DuplicateDelSpecialTypeValue}
 * <br>{@see ExceptionCodes::DuplicateDelSpecialTypeValue}
 *
 * @throws ReferencesSpecialTypeUnits {@see ExceptionMessages::ReferencesSpecialTypeUnits}
 * <br>{@see ExceptionCodes::ReferencesSpecialTypeUnits}
 * 
 * @throws ReferencesSpecialTypeSyncTypes {@see ExceptionMessages::ReferencesSpecialTypeSyncTypes}
 * <br>{@see ExceptionCodes::ReferencesSpecialTypeSyncTypes}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteSpecialTypes($special_type_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$special_type_id====================================================== 
        $fSpecialTypeID = CRUDUtils::checkIDParam('special_type_id', $params, $special_type_id, 'SpecialTypeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('SpecialTypes')->findBy(array( 'specialTypeId' => $fSpecialTypeID ));
        $count= count($check);
 
        if ($count == 1)
            $SpecialTypes = $entityManager->find('SpecialTypes', $fSpecialTypeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelSpecialTypeValue." : ".$fSpecialTypeID, ExceptionCodes::NotFoundDelSpecialTypeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelSpecialTypeValue." : ".$fSpecialTypeID, ExceptionCodes::DuplicateDelSpecialTypeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'specialType'  => $fSpecialTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSpecialTypeUnits, ExceptionCodes::ReferencesSpecialTypeUnits);
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'specialType'  => $fSpecialTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesSpecialTypeSyncTypes, ExceptionCodes::ReferencesSpecialTypeSyncTypes);
                
//delete from db================================================================
        $entityManager->remove($SpecialTypes);
        $entityManager->flush($SpecialTypes);
           
//result_messages===============================================================
        $result["special_type_id"] = $fSpecialTypeID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>