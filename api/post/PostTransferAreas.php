<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Περιοχής Μετάθεσης**
 *
 * Η συνάρτηση καταχωρεί Περιοχή Μετάθεσης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **transfer_areas** :
 * <br>https://mm.sch.gr/api/transfer_areas
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
 * "controller": "PostTransferAreas",
 * "function": "transfer_areas",
 * "method": "POST",
 * "parameters": { "name": ``,"edu_admin": `` },
 * "transfer_area_id": ``,
 * "status": 200,
 * "message": "[POST][transfer_areas]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Περιοχής Μετάθεσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param integer|string $edu_admin Όνομα ή ID Διεύθυνσης Εκπαίδευσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Διεύθυνσης Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Διεύθυνσης Εκπαίδευσης : {@see GetEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Διεύθυνσης Εκπαίδευσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Διεύθυνσης Εκπαίδευσης
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
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
 * <br>integer : <b>transfer_area_id</b> : Ο Κωδικός ID της Περιοχής Μετάθεσης που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingTransferAreaNameParam {@see ExceptionMessages::MissingTransferAreaNameParam}
 * <br>{@see ExceptionCodes::MissingTransferAreaNameParam}
 *
 * @throws MissingTransferAreaNameValue {@see ExceptionMessages::MissingTransferAreaNameValue}
 * <br>{@see ExceptionCodes::MissingTransferAreaNameValue}
 *
 * @throws InvalidTransferAreaNameType {@see ExceptionMessages::InvalidTransferAreaNameType}
 * <br>{@see ExceptionCodes::InvalidTransferAreaNameType} 
 *
 * @throws MissingEduAdminParam {@see ExceptionMessages::MissingEduAdminParam}
 * <br>{@see ExceptionCodes::MissingEduAdminParam}
 *
 * @throws MissingEduAdminValue {@see ExceptionMessages::MissingEduAdminValue}
 * <br>{@see ExceptionCodes::MissingEduAdminValue}
 *  
 * @throws InvalidEduAdminArray {@see ExceptionMessages::InvalidEduAdminArray}
 * <br>{@see ExceptionCodes::InvalidEduAdminArray}
 *
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * <br>{@see ExceptionCodes::InvalidEduAdminType}
 * 
 * @throws DuplicatedEduAdminUniqueValue {@see ExceptionMessages::DuplicatedEduAdminUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedEduAdminUniqueValue}
 * 
 * @throws DuplicatedTransferAreaValue {@see ExceptionMessages::DuplicatedTransferAreaValue}
 * <br>{@see ExceptionCodes::DuplicatedTransferAreaValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostTransferAreas ( $name, $edu_admin ) {
    
    global $app, $entityManager;

    $TransferArea = new TransferAreas();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($TransferArea, $name, 'TransferAreaName', 'name', $params);
     
    //$edu_admin================================================================      
    CRUDUtils::entitySetAssociation($TransferArea, $edu_admin, 'EduAdmins', 'eduAdmin', 'EduAdmin', $params, 'edu_admin');
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('TransferAreas')->findOneBy(array( 'name'  => $TransferArea->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedTransferAreaValue,ExceptionCodes::DuplicatedTransferAreaValue);  
        
//insert to db================================================================== 
        $entityManager->persist($TransferArea);
        $entityManager->flush($TransferArea);
        
//result_messages===============================================================
        $result["transfer_area_id"] = $TransferArea->getTransferAreaId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>