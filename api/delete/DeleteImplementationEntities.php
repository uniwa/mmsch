<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Φορέα Υλοποίησης**
 *
 * Η συνάρτηση διαγράφει Φορέα Υλοποίησης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **implementation_entities** : 
 * <br>https://mm.sch.gr/api/implementation_entities
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
 * "controller": "DeleteImplementationEntities",
 * "function": "implementation_entities",
 * "method": "DELETE",
 * "parameters": { "implementation_entity_id": `` },
 * "implementation_entity_id": ``,
 * "status": 200,
 * "message": "[DELETE][implementation_entity_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $implementation_entity_id ID Φορέα Υλοποίησης
 * <br>
 * <br>Ο Κωδικός ID του Φορέα Υλοποίησης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Φορέα Υλοποίησης : {@see GetImplementationEntities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Φορέα Υλοποίησης
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
 * <br>integer : <b>implementation_entity_id</b> : Ο Κωδικός ID του Φορέα Υλοποίησης που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingImplementationEntityIDParam {@see ExceptionMessages::MissingImplementationEntityIDParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityIDParam}
 *
 * @throws MissingImplementationEntityIDValue {@see ExceptionMessages::MissingImplementationEntityIDValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityIDValue}
 *  
 * @throws InvalidImplementationEntityIDArray {@see ExceptionMessages::InvalidImplementationEntityIDArray}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityIDArray}
 *
 * @throws InvalidImplementationEntityIDType {@see ExceptionMessages::InvalidImplementationEntityIDType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityIDType}
 *
 * @throws NotFoundDelImplementationEntityValue {@see ExceptionMessages::NotFoundDelImplementationEntityValue}
 * <br>{@see ExceptionCodes::NotFoundDelImplementationEntityValue}
 * 
 * @throws DuplicateDelImplementationEntityValue {@see ExceptionMessages::DuplicateDelImplementationEntityValue}
 * <br>{@see ExceptionCodes::DuplicateDelImplementationEntityValue}
 * 
 * @throws ReferencesImplementationEntityUnits {@see ExceptionMessages::ReferencesImplementationEntityUnits}
 * <br>{@see ExceptionCodes::ReferencesImplementationEntityUnits}
 * 
 * @throws ReferencesImplementationEntityEduAdmins {@see ExceptionMessages::ReferencesImplementationEntityEduAdmins}
 * <br>{@see ExceptionCodes::ReferencesImplementationEntityEduAdmins}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteImplementationEntities($implementation_entity_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$implementation_entity_id============================================= 
        $fImplementationEntityID = CRUDUtils::checkIDParam('implementation_entity_id', $params, $implementation_entity_id, 'ImplementationEntityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('ImplementationEntities')->findBy(array( 'implementationEntityId' => $fImplementationEntityID ));
        $count= count($check);
 
        if ($count == 1)
            $ImplementationEntities = $entityManager->find('ImplementationEntities', $fImplementationEntityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelImplementationEntityValue." : ".$fImplementationEntityID, ExceptionCodes::NotFoundDelImplementationEntityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelImplementationEntityValue." : ".$fImplementationEntityID, ExceptionCodes::DuplicateDelImplementationEntityValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'implementationEntity'  => $fImplementationEntityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesImplementationEntityUnits, ExceptionCodes::ReferencesImplementationEntityUnits);  
        
        $checkReference = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'implementationEntity'  => $fImplementationEntityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesImplementationEntityEduAdmins, ExceptionCodes::ReferencesImplementationEntityEduAdmins);  
        
//delete from db================================================================
        $entityManager->remove($ImplementationEntities);
        $entityManager->flush($ImplementationEntities);
           
//result_messages===============================================================
        $result["implementation_entity_id"] = $fImplementationEntityID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>