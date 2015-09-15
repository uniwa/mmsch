<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Φορέα Υλοποίησης**
 *
 * Η συνάρτηση καταχωρεί Φορέα Υλοποίησης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **implementation_entities** :
 * <br>https://mm.sch.gr/api/implementation_entities
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **name**
 * * **initials**
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
 * "controller": "PostImplementationEntities",
 * "function": "implementation_entities",
 * "method": "POST",
 * "parameters": { "name": ``,"initials": ``,"street_address": ``,"postal_code": ``,
 *                 "email": ``,"phone_number": ``,"domain": ``,"url": `` },
 * "implementation_entity_id": ``,
 * "status": 200,
 * "message": "[POST][implementation_entities]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Φορέα Υλοποίησης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $initials Αρχικά Ονόματος
 * <br>
 * <br>Τα Αρχικά Ονόματος του Φορέα Υλοποίησης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $street_address Διεύθυνση
 * <br>
 * <br>H Διεύθυνση του Φορέα Υλοποίησης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param integer $postal_code Ταχυδρομικός Κώδικας
 * <br>
 * <br>O Ταχυδρομικός Κώδικας του Φορέα Υλοποίησης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * 
 * @param string $email Ηλεκτρονικό Ταχυδρομείο
 * <br>
 * <br>Το Ηλεκτρονικό Ταχυδρομείο του Φορέα Υλοποίησης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param integer $phone_number Τηλεφωνικός Αριθμός
 * <br>
 * <br>O Τηλεφωνικός Αριθμός του Φορέα Υλοποίησης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * 
 * @param string $domain Domain
 * <br>
 * <br>Το Domain του Φορέα Υλοποίησης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $url Διεύθυνση Url
 * <br>
 * <br>Η Διεύθυνση Url του Φορέα Υλοποίησης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>implementation_entity_id</b> : Ο Κωδικός ID του Φορέα Υλοποίησης που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingImplementationEntityNameParam {@see ExceptionMessages::MissingImplementationEntityNameParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityNameParam}
 *
 * @throws MissingImplementationEntityNameValue {@see ExceptionMessages::MissingImplementationEntityNameValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityNameValue}
 *
 * @throws InvalidImplementationEntityNameType {@see ExceptionMessages::InvalidImplementationEntityNameType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityNameType} 
 *
 * @throws MissingImplementationEntityInitialParam {@see ExceptionMessages::MissingImplementationEntityInitialParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityInitialParam}
 *
 * @throws MissingImplementationEntityInitialValue {@see ExceptionMessages::MissingImplementationEntityInitialValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityInitialValue}
 *
 * @throws InvalidImplementationEntityInitialType {@see ExceptionMessages::InvalidImplementationEntityInitialType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityInitialType}
 * 
 * @throws MissingImplementationEntityStreetAddressParam {@see ExceptionMessages::MissingImplementationEntityStreetAddressParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityStreetAddressParam}
 *
 * @throws MissingImplementationEntityStreetAddressValue {@see ExceptionMessages::MissingImplementationEntityStreetAddressValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityStreetAddressValue}
 *
 * @throws InvalidImplementationEntityStreetAddressType {@see ExceptionMessages::InvalidImplementationEntityStreetAddressType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityStreetAddressType}
 * 
 * @throws MissingImplementationEntityPostalCodeParam {@see ExceptionMessages::MissingImplementationEntityPostalCodeParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityPostalCodeParam}
 *
 * @throws MissingImplementationEntityPostalCodeValue {@see ExceptionMessages::MissingImplementationEntityPostalCodeValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityPostalCodeValue}
 *
 * @throws InvalidImplementationEntityPostalCodeType {@see ExceptionMessages::InvalidImplementationEntityPostalCodeType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityPostalCodeType}
 *
 * @throws MissingImplementationEntityEmailParam {@see ExceptionMessages::MissingImplementationEntityEmailParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityEmailParam}
 *
 * @throws MissingImplementationEntityEmailValue {@see ExceptionMessages::MissingImplementationEntityEmailValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityEmailValue}
 *
 * @throws InvalidImplementationEntityEmailType {@see ExceptionMessages::InvalidImplementationEntityEmailType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityEmailType}
 * 
 * @throws MissingImplementationEntityPhoneNumberParam {@see ExceptionMessages::MissingImplementationEntityPhoneNumberParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityPhoneNumberParam}
 *
 * @throws MissingImplementationEntityPhoneNumberValue {@see ExceptionMessages::MissingImplementationEntityPhoneNumberValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityPhoneNumberValue}
 *
 * @throws InvalidImplementationEntityPhoneNumberType {@see ExceptionMessages::InvalidImplementationEntityPhoneNumberType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityPhoneNumberType}
 *
 * @throws MissingImplementationEntityDomainParam {@see ExceptionMessages::MissingImplementationEntityDomainParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityDomainParam}
 *
 * @throws MissingImplementationEntityDomainValue {@see ExceptionMessages::MissingImplementationEntityDomainValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityDomainValue}
 *
 * @throws InvalidImplementationEntityDomainType {@see ExceptionMessages::InvalidImplementationEntityDomainType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityDomainType}
 * 
 * @throws MissingImplementationEntityUrlParam {@see ExceptionMessages::MissingImplementationEntityUrlParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityUrlParam}
 *
 * @throws MissingImplementationEntityUrlValue {@see ExceptionMessages::MissingImplementationEntityUrlValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityUrlValue}
 *
 * @throws InvalidImplementationEntityUrlType {@see ExceptionMessages::InvalidImplementationEntityUrlType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityUrlType}
 * 
 * @throws DuplicatedImplementationEntityValue {@see ExceptionMessages::DuplicatedImplementationEntityValue}
 * <br>{@see ExceptionCodes::DuplicatedImplementationEntityValue}
 * 
 * @throws DuplicatedImplementationEntityInitialsValue {@see ExceptionMessages::DuplicatedImplementationEntityInitialsValue}
 * <br>{@see ExceptionCodes::DuplicatedImplementationEntityInitialsValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostImplementationEntities ( $name, $initials, $street_address, $postal_code, $email, $phone_number, $domain, $url  ) {
    
    global $app, $entityManager;

    $ImplementationEntity = new ImplementationEntities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $name, 'ImplementationEntityName', 'name', $params);
     
    //$initials=================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $initials, 'ImplementationEntityInitial', 'initials', $params);
    
    //$street_address===========================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $street_address, 'ImplementationEntityStreetAddress', 'street_address', $params, false, true);
    
    //$postal_code==============================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $postal_code, 'ImplementationEntityPostalCode', 'postal_code', $params, false, true);
    
    //$email====================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $email, 'ImplementationEntityEmail', 'email', $params, false, true);
    
    //$phone_number=============================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $phone_number, 'ImplementationEntityPhoneNumber', 'phone_number', $params, false, true);
    
    //$domain===================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $domain, 'ImplementationEntityDomain', 'domain', $params, false, true);
    
    //$url======================================================================
    CRUDUtils::EntitySetParam($ImplementationEntity, $url, 'ImplementationEntityUrl', 'url', $params, false, true);
    
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('ImplementationEntities')->findOneBy(array( 'name'  => $ImplementationEntity->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedImplementationEntityValue,ExceptionCodes::DuplicatedImplementationEntityValue);  
        
        //check for initials duplicate =============================================   
        $checkDuplicateInitials = $entityManager->getRepository('ImplementationEntities')->findOneBy(array( 'initials'  => $ImplementationEntity->getInitials() ));
        
        if ((count($checkDuplicateInitials) != 0))
            throw new Exception(ExceptionMessages::DuplicatedImplementationEntityInitialsValue,ExceptionCodes::DuplicatedImplementationEntityInitialsValue);  
        
//insert to db================================================================== 
        $entityManager->persist($ImplementationEntity);
        $entityManager->flush($ImplementationEntity);

//result_messages===============================================================
        $result["implementation_entity_id"] = $ImplementationEntity->getImplementationEntityId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>