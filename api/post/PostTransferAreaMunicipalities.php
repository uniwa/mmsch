<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Συσχέτισης Περιοχής Μετάθεσης με Δήμο**
 *
 * Η συνάρτηση καταχωρεί Συσχέτιση Περιοχής Μετάθεσης με Δήμο σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **transfer_area_municipalities** :
 * <br>https://mm.sch.gr/api/transfer_area_municipalities
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
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
 * "controller": "PostTransferAreaMunicipalities",
 * "function": "transfer_area_municipalities",
 * "method": "POST",
 * "parameters": { "transfer_area": ``,"municipality": `` },
 * "transfer_area_municipality_id": ``,
 * "status": 200,
 * "message": "[POST][transfer_area_municipalities]:success"
 * }
 * </code>
 * 
 *
 * @param integer|string $transfer_area Όνομα ή ID Περιοχής Μετάθεσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιοχής Μετάθεσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Περιοχής Μετάθεσης : {@see GetTransferAreas}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιοχής Μετάθεσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιοχής Μετάθεσης
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $municipality Όνομα ή ID Δήμου ΟΤΑ
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Δήμου ΟΤΑ
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Δήμου ΟΤΑ : {@see GetMunicipalities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Δήμου ΟΤΑ
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Δήμου ΟΤΑ
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
 * <br>integer : <b>transfer_area_municipality_id</b> : Ο Κωδικός ID της Συσχέτισης Περιοχής Μετάθεσης με Δήμο που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingTransferAreaParam {@see ExceptionMessages::MissingTransferAreaParam}
 * <br>{@see ExceptionCodes::MissingTransferAreaParam}
 *
 * @throws MissingTransferAreaValue {@see ExceptionMessages::MissingTransferAreaValue}
 * <br>{@see ExceptionCodes::MissingTransferAreaValue}
 *  
 * @throws InvalidTransferAreaArray {@see ExceptionMessages::InvalidTransferAreaArray}
 * <br>{@see ExceptionCodes::InvalidTransferAreaArray}
 *
 * @throws InvalidTransferAreaType {@see ExceptionMessages::InvalidTransferAreaType}
 * <br>{@see ExceptionCodes::InvalidTransferAreaType}
 * 
 * @throws DuplicatedTransferAreaUniqueValue {@see ExceptionMessages::DuplicatedTransferAreaUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedTransferAreaUniqueValue}
 * 
 * @throws MissingMunicipalityParam {@see ExceptionMessages::MissingMunicipalityParam}
 * <br>{@see ExceptionCodes::MissingMunicipalityParam}
 *
 * @throws MissingMunicipalityValue {@see ExceptionMessages::MissingMunicipalityValue}
 * <br>{@see ExceptionCodes::MissingMunicipalityValue}
 *  
 * @throws InvalidMunicipalityArray {@see ExceptionMessages::InvalidMunicipalityArray}
 * <br>{@see ExceptionCodes::InvalidMunicipalityArray}
 *
 * @throws InvalidMunicipalityType {@see ExceptionMessages::InvalidMunicipalityType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityType}
 * 
 * @throws DuplicatedMunicipalityUniqueValue {@see ExceptionMessages::DuplicatedMunicipalityUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedMunicipalityUniqueValue}
 *
 * @throws DuplicatedTransferAreaMunicipalityValue {@see ExceptionMessages::DuplicatedTransferAreaMunicipalityValue}
 * <br>{@see ExceptionCodes::DuplicatedTransferAreaMunicipalityValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostTransferAreaMunicipalities ( $transfer_area, $municipality ) {
    
    global $app, $entityManager;

    $TransferAreaMunicipality = new TransferAreaMunicipalities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$transfer_area============================================================      
    CRUDUtils::entitySetAssociation($TransferAreaMunicipality, $transfer_area, 'TransferAreas', 'transferArea', 'TransferArea', $params, 'transfer_area');
     
    //$municipality=============================================================    
    CRUDUtils::entitySetAssociation($TransferAreaMunicipality, $municipality, 'Municipalities', 'municipality', 'Municipality', $params, 'municipality');
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('TransferAreaMunicipalities')->findOneBy(array( 'municipality' => $TransferAreaMunicipality->getMunicipality(),
                                                                                                            'transferArea' => $TransferAreaMunicipality->getTransferArea()
                                                                                                           ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedTransferAreaMunicipalityValue,ExceptionCodes::DuplicatedTransferAreaMunicipalityValue);  
        
//insert to db================================================================== 
        $entityManager->persist($TransferAreaMunicipality);
        $entityManager->flush($TransferAreaMunicipality);

//result_messages===============================================================
        $result["transfer_area_municipality_id"] = $TransferAreaMunicipality->getTransferAreaMunicipalityId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>