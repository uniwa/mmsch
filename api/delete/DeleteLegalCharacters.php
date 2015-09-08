<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Νομικού Χαρακτήρα Μονάδων**
 *
 * Η συνάρτηση διαγράφει Νομικό Χαρακτήρα Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **legal_characters** : 
 * <br>https://mm.sch.gr/api/legal_characters
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
 * "controller": "DeleteLegalCharacters",
 * "function": "legal_characters",
 * "method": "DELETE",
 * "parameters": { "legal_character_id": `` },
 * "legal_character_id": ``,
 * "status": 200,
 * "message": "[DELETE][legal_character_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $legal_character_id ID Νομικού Χαρακτήρα Μονάδων
 * <br>
 * <br>Ο Κωδικός ID του Νομικού Χαρακτήρα Μονάδων
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Νομικού Χαρακτήρα Μονάδων : {@see GetLegalCharacters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Νομικού Χαρακτήρα Μονάδων
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
 * <br>integer : <b>legal_character_id</b> : Ο Κωδικός ID του Νομικού Χαρακτήρα Μονάδων που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingLegalCharacterIDParam {@see ExceptionMessages::MissingLegalCharacterIDParam}
 * <br>{@see ExceptionCodes::MissingLegalCharacterIDParam}
 *
 * @throws MissingLegalCharacterIDValue {@see ExceptionMessages::MissingLegalCharacterIDValue}
 * <br>{@see ExceptionCodes::MissingLegalCharacterIDValue}
 *  
 * @throws InvalidLegalCharacterIDArray {@see ExceptionMessages::InvalidLegalCharacterIDArray}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterIDArray}
 *
 * @throws InvalidLegalCharacterIDType {@see ExceptionMessages::InvalidLegalCharacterIDType}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterIDType}
 *
 * @throws NotFoundDelLegalCharacterValue {@see ExceptionMessages::NotFoundDelLegalCharacterValue}
 * <br>{@see ExceptionCodes::NotFoundDelLegalCharacterValue}
 * 
 * @throws DuplicateDelLegalCharacterValue {@see ExceptionMessages::DuplicateDelLegalCharacterValue}
 * <br>{@see ExceptionCodes::DuplicateDelLegalCharacterValue}
 * 
 * @throws ReferencesLegalCharacterUnits {@see ExceptionMessages::ReferencesLegalCharacterUnits}
 * <br>{@see ExceptionCodes::ReferencesLegalCharacterUnits}
 * 
 * @throws ReferencesLegalCharacterSyncTypes {@see ExceptionMessages::ReferencesLegalCharacterSyncTypes}
 * <br>{@see ExceptionCodes::ReferencesLegalCharacterSyncTypes}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteLegalCharacters($legal_character_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$legal_character_id=================================================== 
        $fLegalCharacterID = CRUDUtils::checkIDParam('legal_character_id', $params, $legal_character_id, 'LegalCharacterID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('LegalCharacters')->findBy(array( 'legalCharacterId' => $fLegalCharacterID ));
        $count= count($check);
 
        if ($count == 1)
            $LegalCharacters = $entityManager->find('LegalCharacters', $fLegalCharacterID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelLegalCharacterValue." : ".$fLegalCharacterID, ExceptionCodes::NotFoundDelLegalCharacterValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelLegalCharacterValue." : ".$fLegalCharacterID, ExceptionCodes::DuplicateDelLegalCharacterValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'legalCharacter'  => $fLegalCharacterID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesLegalCharacterUnits, ExceptionCodes::ReferencesLegalCharacterUnits);  
        
        $checkReference = $entityManager->getRepository('SyncTypes')->findOneBy(array( 'legalCharacter'  => $fLegalCharacterID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesLegalCharacterSyncTypes, ExceptionCodes::ReferencesLegalCharacterSyncTypes);  
        
//delete from db================================================================
        $entityManager->remove($LegalCharacters);
        $entityManager->flush($LegalCharacters);
           
//result_messages===============================================================      
        $result["legal_character_id"] = $fLegalCharacterID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>