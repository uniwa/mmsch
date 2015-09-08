<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Δήμου ΟΤΑ**
 *
 * Η συνάρτηση ενημερώνει Δήμο ΟΤΑ σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **municipalities** :
 * <br>https://mm.sch.gr/api/municipalities
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **municipality_id**
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
 * "controller": "PutMunicipalities",
 * "function": "municipalities",
 * "method": "PUT",
 * "parameters": { "municipality_id": ``,"name": ``,"prefecture": `` },
 * "municipality_id": ``,
 * "status": 200,
 * "message": "[PUT][municipalities]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $municipality_id ID Δήμου ΟΤΑ
 * <br>
 * <br>Ο Κωδικός ID του Δήμου ΟΤΑ
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Δήμου ΟΤΑ : {@see GetMunicipalities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Δήμου ΟΤΑ
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
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
 * <br>integer : <b>municipality_id</b> : Ο Κωδικός ID του Δήμου ΟΤΑ που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingMunicipalityIDParam {@see ExceptionMessages::MissingMunicipalityIDParam}
 * <br>{@see ExceptionCodes::MissingMunicipalityIDParam}
 *
 * @throws MissingMunicipalityIDValue {@see ExceptionMessages::MissingMunicipalityIDValue}
 * <br>{@see ExceptionCodes::MissingMunicipalityIDValue}
 *  
 * @throws InvalidMunicipalityIDArray {@see ExceptionMessages::InvalidMunicipalityIDArray}
 * <br>{@see ExceptionCodes::InvalidMunicipalityIDArray}
 *
 * @throws InvalidMunicipalityIDType {@see ExceptionMessages::InvalidMunicipalityIDType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityIDType}
 *
 * @throws InvalidMunicipalityValue {@see ExceptionMessages::InvalidMunicipalityValue}
 * <br>{@see ExceptionCodes::InvalidMunicipalityValue}
 *
 * @throws DuplicatedMunicipalityUniqueValue {@see ExceptionMessages::DuplicatedMunicipalityUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedMunicipalityUniqueValue}
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

function PutMunicipalities( $municipality_id, $name, $prefecture ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$municipality_id====================================================== 
        $fMunicipalityID = CRUDUtils::checkIDParam('municipality_id', $params, $municipality_id, 'MunicipalityID');

        //init entity for update row============================================
        $Municipality = CRUDUtils::findIDParam($fMunicipalityID, 'Municipalities', 'Municipality');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($Municipality, $name, 'MunicipalityName', 'name', $params);
        } else if ( Validator::IsNull($Municipality->getName()) ){
            throw new Exception(ExceptionMessages::MissingMunicipalityNameValue, ExceptionCodes::MissingMunicipalityNameValue);
        } 
        
        //$prefecture===========================================================
        if ( Validator::IsExists('prefecture') ){
            CRUDUtils::entitySetAssociation($Municipality, $prefecture, 'Prefectures', 'prefecture', 'Prefecture', $params, 'prefecture');
        } else if ( Validator::IsNull($Municipality->getPrefecture()) ){
            throw new Exception(ExceptionMessages::MissingPrefectureValue, ExceptionCodes::MissingPrefectureValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(m.municipalityId) AS fresult')
                            ->from('Municipalities', 'm')
                            ->where("m.name = :name AND m.municipalityId != :municipalityId")
                            ->setParameter('name', $Municipality->getName())
                            ->setParameter('municipalityId', $Municipality->getMunicipalityId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedMunicipalityValue,ExceptionCodes::DuplicatedMunicipalityValue);
        }
        
//update to db================================================================== 
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