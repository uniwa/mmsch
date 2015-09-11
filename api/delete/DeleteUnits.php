<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **Διαγραφή Μονάδας**
 *
 * Η συνάρτηση διαγράφει Μονάδα σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **units** : 
 * <br>https://mm.sch.gr/api/units
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
 * "controller": "DeleteUnits",
 * "function": "units",
 * "method": "DELETE",
 * "parameters": { "mm_id": `` },
 * "mm_id": ``,
 * "status": 200,
 * "message": "[DELETE][units]:success"
 * }
 * </code>
 *
 * 
 * @param integer $mm_id Κωδικός ΜΜ
 * <br>
 * <br>Ο Κωδικός ΜΜ
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Κωδικός ΜΜ : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ΜΜ
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
 * <br>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 *  
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 *
 * @throws NotFoundDelUnitValue {@see ExceptionMessages::NotFoundDelUnitValue}
 * <br>{@see ExceptionCodes::NotFoundDelUnitValue}
 * 
 * @throws DuplicateDelUnitValue {@see ExceptionMessages::DuplicateDelUnitValue}
 * <br>{@see ExceptionCodes::DuplicateDelUnitValue}
 * 
 * @throws ReferencesUnitUnitWorkers {@see ExceptionMessages::ReferencesUnitUnitWorkers}
 * <br>{@see ExceptionCodes::ReferencesUnitUnitWorkers}
 * 
 * @throws ReferencesUnitGuestRelations {@see ExceptionMessages::ReferencesUnitGuestRelations}
 * <br>{@see ExceptionCodes::ReferencesUnitGuestRelations}
 * 
 * @throws ReferencesUnitHostRelations {@see ExceptionMessages::ReferencesUnitHostRelations}
 * <br>{@see ExceptionCodes::ReferencesUnitHostRelations}
 * 
 * @throws ReferencesUnitLevels {@see ExceptionMessages::ReferencesUnitLevels}
 * <br>{@see ExceptionCodes::ReferencesUnitLevels}
 * 
 * @throws ReferencesUnitGroups {@see ExceptionMessages::ReferencesUnitGroups}
 * <br>{@see ExceptionCodes::ReferencesUnitGroups}
 * 
 * @throws ReferencesUnitUnitDns {@see ExceptionMessages::ReferencesUnitUnitDns}
 * <br>{@see ExceptionCodes::ReferencesUnitUnitDns}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteUnits($mm_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
                   
        //$mm_id================================================================
        $fUnitMMId = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Units')->findBy(array( 'mmId' => $fUnitMMId ));
        $count= count($check);
 
        if ($count == 1)
            $Units = $entityManager->find('Units', $fUnitMMId);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelUnitValue." : ".$fUnitMMId, ExceptionCodes::NotFoundDelUnitValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelUnitValue." : ".$fUnitMMId, ExceptionCodes::DuplicateDelUnitValue);
        
        //check for references =================================================
        $checkReference = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitUnitWorkers, ExceptionCodes::ReferencesUnitUnitWorkers);
        
        $checkReference = $entityManager->getRepository('Relations')->findOneBy(array( 'guestMm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitGuestRelations, ExceptionCodes::ReferencesUnitGuestRelations);  
        
        $checkReference = $entityManager->getRepository('Relations')->findOneBy(array( 'hostMm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitHostRelations, ExceptionCodes::ReferencesUnitHostRelations);  
        
        $checkReference = $entityManager->getRepository('Levels')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitLevels, ExceptionCodes::ReferencesUnitLevels);  
        
        $checkReference = $entityManager->getRepository('Groups')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitGroups, ExceptionCodes::ReferencesUnitGroups);  
    
        $checkReference = $entityManager->getRepository('UnitDns')->findOneBy(array( 'mm'  => $fUnitMMId ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesUnitUnitDns, ExceptionCodes::ReferencesUnitUnitDns);  
        
//delete from db================================================================
        $entityManager->remove($Units);
        $entityManager->flush($Units);
           
//result_messages===============================================================      
        $result["mm_id"] = $fUnitMMId;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>