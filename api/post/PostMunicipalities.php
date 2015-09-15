<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Δήμου ΟΤΑ**
 *
 * Η συνάρτηση καταχωρεί Δήμο ΟΤΑ σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **municipalities** :
 * <br>https://mm.sch.gr/api/municipalities
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
 * "controller": "PostMunicipalities",
 * "function": "municipalities",
 * "method": "POST",
 * "parameters": { "name": ``,"prefecture": `` },
 * "municipality_id": ``,
 * "status": 200,
 * "message": "[POST][municipalities]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Δήμου ΟΤΑ
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param integer|string $prefecture Όνομα ή ID Περιφερειακής Ενότητας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιφερειακής Ενότητας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Περιφερειακής Ενότητας : {@see GetPrefectures}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιφερειακής Ενότητας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιφερειακής Ενότητας
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
 * <br>integer : <b>municipality_id</b> : Ο Κωδικός ID του Δήμου ΟΤΑ που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingMunicipalityNameParam {@see ExceptionMessages::MissingMunicipalityNameParam}
 * <br>{@see ExceptionCodes::MissingMunicipalityNameParam}
 *
 * @throws MissingMunicipalityNameValue {@see ExceptionMessages::MissingMunicipalityNameValue}
 * <br>{@see ExceptionCodes::MissingMunicipalityNameValue}
 *
 * @throws InvalidMunicipalityNameType {@see ExceptionMessages::InvalidMunicipalityNameType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityNameType}
 * 
 * @throws MissingPrefectureParam {@see ExceptionMessages::MissingPrefectureParam}
 * <br>{@see ExceptionCodes::MissingPrefectureParam}
 *
 * @throws MissingPrefectureValue {@see ExceptionMessages::MissingPrefectureValue}
 * <br>{@see ExceptionCodes::MissingPrefectureValue}
 *  
 * @throws InvalidPrefectureArray {@see ExceptionMessages::InvalidPrefectureArray}
 * <br>{@see ExceptionCodes::InvalidPrefectureArray}
 *
 * @throws InvalidPrefectureType {@see ExceptionMessages::InvalidPrefectureType}
 * <br>{@see ExceptionCodes::InvalidPrefectureType}
 * 
 * @throws DuplicatedPrefectureUniqueValue {@see ExceptionMessages::DuplicatedPrefectureUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedPrefectureUniqueValue}
 * 
 * @throws DuplicatedMunicipalityValue {@see ExceptionMessages::DuplicatedMunicipalityValue}
 * <br>{@see ExceptionCodes::DuplicatedMunicipalityValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostMunicipalities ( $name, $prefecture ) {
    
    global $app, $entityManager;

    $Municipality = new Municipalities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($Municipality, $name, 'MunicipalityName', 'name', $params);
     
    //$prefecture===============================================================      
    CRUDUtils::entitySetAssociation($Municipality, $prefecture, 'Prefectures', 'prefecture', 'Prefecture', $params, 'prefecture');
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('Municipalities')->findOneBy(array( 'name'  => $Municipality->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedMunicipalityValue,ExceptionCodes::DuplicatedMunicipalityValue);  
        
//insert to db================================================================== 
        $entityManager->persist($Municipality);
        $entityManager->flush($Municipality);

//result_messages===============================================================
        $result["municipality_id"] = $Municipality->getMunicipalityId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>