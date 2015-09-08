<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DEPRECATED
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Τμήματος**
 *
 * Η συνάρτηση διαγράφει Τμήμα σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **groups** : 
 * <br>https://mm.sch.gr/api/groups
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
 * "controller": "DeleteGroups",
 * "function": "groups",
 * "method": "DELETE",
 * "parameters": { "group_id": `` },
 * "group_id": ``,
 * "status": 200,
 * "message": "[DELETE][group_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $group_id ID Τμήματος
 * <br>
 * <br>Ο Κωδικός ID του Τμήματος
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Τμήματος : {@see GetGroups}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Τμήματος
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
 * <br>integer : <b>group_id</b> : Ο Κωδικός ID του Τμήματος που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingGroupIDParam {@see ExceptionMessages::MissingGroupIDParam}
 * <br>{@see ExceptionCodes::MissingGroupIDParam}
 *
 * @throws MissingGroupIDValue {@see ExceptionMessages::MissingGroupIDValue}
 * <br>{@see ExceptionCodes::MissingGroupIDValue}
 *  
 * @throws InvalidGroupIDArray {@see ExceptionMessages::InvalidGroupIDArray}
 * <br>{@see ExceptionCodes::InvalidGroupIDArray}
 *
 * @throws InvalidGroupIDType {@see ExceptionMessages::InvalidGroupIDType}
 * <br>{@see ExceptionCodes::InvalidGroupIDType}
 *
 * @throws NotFoundDelGroupValue {@see ExceptionMessages::NotFoundDelGroupValue}
 * <br>{@see ExceptionCodes::NotFoundDelGroupValue}
 * 
 * @throws DuplicateDelGroupValue {@see ExceptionMessages::DuplicateDelGroupValue}
 * <br>{@see ExceptionCodes::DuplicateDelGroupValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteGroups($group_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$group_id============================================================= 
        $fGroupID = CRUDUtils::checkIDParam('group_id', $params, $group_id, 'GroupID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Groups')->findBy(array( 'groupId' => $fGroupID ));
        $count= count($check);
 
        if ($count == 1)
            $Groups = $entityManager->find('Groups', $fGroupID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelGroupValue." : ".$fGroupID, ExceptionCodes::NotFoundDelGroupValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelGroupValue." : ".$fGroupID, ExceptionCodes::DuplicateDelGroupValue);
                        
//delete from db================================================================
        $entityManager->remove($Groups);
        $entityManager->flush($Groups);
           
//result_messages===============================================================
        $result["group_id"] = $fGroupID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>