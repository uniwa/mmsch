<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Τύπου Συσχέτισης**
 *
 * Η συνάρτηση διαγράφει Τύπο Συσχέτισης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **relation_types** : 
 * <br>https://mm.sch.gr/api/relation_types
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
 * "controller": "DeleteRelationTypes",
 * "function": "relation_types",
 * "method": "DELETE",
 * "parameters": { "relation_type_id": `` },
 * "relation_type_id": ``,
 * "status": 200,
 * "message": "[DELETE][relation_types]:success"
 * }
 * </code>
 *
 * 
 * @param integer $relation_type_id ID Τύπου Συσχέτισης
 * <br>
 * <br>Ο Κωδικός ID του Τύπου Συσχέτισης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Τύπου Συσχέτισης : {@see GetRelationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Τύπου Συσχέτισης
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
 * <br>integer : <b>relation_type_id</b> : Ο Κωδικός ID του Τύπο Συσχέτισης που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingRelationTypeIDParam {@see ExceptionMessages::MissingRelationTypeIDParam}
 * <br>{@see ExceptionCodes::MissingRelationTypeIDParam}
 *
 * @throws MissingRelationTypeIDValue {@see ExceptionMessages::MissingRelationTypeIDValue}
 * <br>{@see ExceptionCodes::MissingRelationTypeIDValue}
 *  
 * @throws InvalidRelationTypeIDArray {@see ExceptionMessages::InvalidRelationTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidRelationTypeIDArray}
 *
 * @throws InvalidRelationTypeIDΤype {@see ExceptionMessages::InvalidRelationTypeIDΤype}
 * <br>{@see ExceptionCodes::InvalidRelationTypeIDΤype}
 *
 * @throws NotFoundDelRelationTypeValue {@see ExceptionMessages::NotFoundDelRelationTypeValue}
 * <br>{@see ExceptionCodes::NotFoundDelRelationTypeValue}
 * 
 * @throws DuplicateDelRelationTypeValue {@see ExceptionMessages::DuplicateDelRelationTypeValue}
 * <br>{@see ExceptionCodes::DuplicateDelRelationTypeValue}
 *
 * @throws ReferencesRelationTypeRelations {@see ExceptionMessages::ReferencesRelationTypeRelations}
 * <br>{@see ExceptionCodes::ReferencesRelationTypeRelations}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteRelationTypes($relation_type_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$relation_type_id===================================================== 
        $fRelationTypeID = CRUDUtils::checkIDParam('relation_type_id', $params, $relation_type_id, 'RelationTypeID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('RelationTypes')->findBy(array( 'relationTypeId' => $fRelationTypeID ));
        $count= count($check);
 
        if ($count == 1)
            $RelationTypes = $entityManager->find('RelationTypes', $fRelationTypeID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelRelationTypeValue." : ".$fRelationTypeID, ExceptionCodes::NotFoundDelRelationTypeValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelRelationTypeValue." : ".$fRelationTypeID, ExceptionCodes::DuplicateDelRelationTypeValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Relations')->findOneBy(array( 'relationType'  => $fRelationTypeID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesRelationTypeRelations, ExceptionCodes::ReferencesRelationTypeRelations);
                
//delete from db================================================================
        $entityManager->remove($RelationTypes);
        $entityManager->flush($RelationTypes);
           
//result_messages===============================================================
        $result["relation_type_id"] = $fRelationTypeID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>