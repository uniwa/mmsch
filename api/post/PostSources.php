<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Πρωτογενής Πηγής Μονάδων**
 *
 * Η συνάρτηση καταχωρεί Πρωτογενής Πηγή Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **sources** :
 * <br>https://mm.sch.gr/api/sources
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **name**
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
 * "controller": "PostSources",
 * "function": "sources",
 * "method": "POST",
 * "parameters": { "name": ``,"visible": `` },
 * "source_id": ``,
 * "status": 200,
 * "message": "[POST][sources]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Πρωτογενής Πηγής Μονάδων
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param boolean $visible Όνομα
 * <br>
 * <br>H Εμφάνιση του Όνοματος της Πρωτογενής Πηγής Μονάδων
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : true|false
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>source_id</b> : Ο Κωδικός ID της Πρωτογενής Πηγής Μονάδων που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws MissingSourceNameParam {@see ExceptionMessages::MissingSourceNameParam}
 * <br>{@see ExceptionCodes::MissingSourceNameParam}
 *
 * @throws MissingSourceNameValue {@see ExceptionMessages::MissingSourceNameValue}
 * <br>{@see ExceptionCodes::MissingSourceNameValue}
 *
 * @throws InvalidSourceNameType {@see ExceptionMessages::InvalidSourceNameType}
 * <br>{@see ExceptionCodes::InvalidSourceNameType}
 * 
 * @throws MissingSourceVisibleParam {@see ExceptionMessages::MissingSourceVisibleParam}
 * <br>{@see ExceptionCodes::MissingSourceVisibleParam}
 *
 * @throws MissingSourceVisibleValue {@see ExceptionMessages::MissingSourceVisibleValue}
 * <br>{@see ExceptionCodes::MissingSourceVisibleValue}
 *
 * @throws InvalidSourceVisibleType {@see ExceptionMessages::InvalidSourceVisibleType}
 * <br>{@see ExceptionCodes::InvalidSourceVisibleType}
 * 
 * @throws DuplicatedSourceValue {@see ExceptionMessages::DuplicatedSourceValue}
 * <br>{@see ExceptionCodes::DuplicatedSourceValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostSources( $name, $visible ) {
    
    global $app, $entityManager;

    $Source = new Sources();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($Source, $name, 'SourceName', 'name', $params);
    
    //$visible==================================================================
    if ($visible == 'true' || $visible == 'false')
        CRUDUtils::EntitySetParam($Source, $visible, 'SourceVisible', 'visible', $params);
    else
        throw new Exception(ExceptionMessages::InvalidSourceVisibleType,ExceptionCodes::InvalidSourceVisibleType);  
    
//controls======================================================================

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('Sources')->findOneBy(array( 'name'  => $Source->getName() ));
        
        if ((count($checkDuplicate) != 0))
            throw new Exception(ExceptionMessages::DuplicatedSourceValue,ExceptionCodes::DuplicatedSourceValue);  
        
//insert to db================================================================== 
        $entityManager->persist($Source);
        $entityManager->flush($Source);

//result_messages===============================================================
        $result["source_id"] = $Source->getSourceId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>