<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Δημοτικής Ενότητας**
 *
 * Η συνάρτηση καταχωρεί Δημοτική Ενότητα σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **municipality_communities** :
 * <br>https://mm.sch.gr/api/municipality_communities
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **name**
 * * **myschoolMunicipalityCommunityId**
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
 * "controller": "PostMunicipalityCommunities",
 * "function": "municipality_communities",
 * "method": "POST",
 * "parameters": { "name": ``,"municipality": ``,"myschoolMunicipalityCommunityId": `` },
 * "municipality_community_id": ``,
 * "status": 200,
 * "message": "[POST][municipality_communities]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Δημοτικής Ενότητας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
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
 * @param string $myschoolMunicipalityCommunityId ID Δημοτικής Ενότητας MySchool
 * <br>
 * <br>Το ID Δημοτικής Ενότητας MySchool
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * 
 *  
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>municipality_community_id</b> : Ο Κωδικός ID της Δημοτικής Ενότητας που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws MissingMunicipalityCommunityNameParam {@see ExceptionMessages::MissingMunicipalityCommunityNameParam}
 * <br>{@see ExceptionCodes::MissingMunicipalityCommunityNameParam}
 *
 * @throws MissingMunicipalityCommunityNameValue {@see ExceptionMessages::MissingMunicipalityCommunityNameValue}
 * <br>{@see ExceptionCodes::MissingMunicipalityCommunityNameValue}
 *
 * @throws InvalidMunicipalityCommunityNameType {@see ExceptionMessages::InvalidMunicipalityCommunityNameType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityCommunityNameType}
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
 * @throws MissingMySchoolIDMunicipalityCommunityParam {@see ExceptionMessages::MissingMySchoolIDMunicipalityCommunityParam}
 * <br>{@see ExceptionCodes::MissingMySchoolIDMunicipalityCommunityParam}
 *
 * @throws MissingMySchoolIDMunicipalityCommunityValue {@see ExceptionMessages::MissingMySchoolIDMunicipalityCommunityValue}
 * <br>{@see ExceptionCodes::MissingMySchoolIDMunicipalityCommunityValue}
 *
 * @throws InvalidMySchoolIDMunicipalityCommunityType {@see ExceptionMessages::InvalidMySchoolIDMunicipalityCommunityType}
 * <br>{@see ExceptionCodes::InvalidMySchoolIDMunicipalityCommunityType}
 * 
 * @throws DuplicatedMunicipalityCommunityValue {@see ExceptionMessages::DuplicatedMunicipalityCommunityValue}
 * <br>{@see ExceptionCodes::DuplicatedMunicipalityCommunityValue}
 * 
 * @throws DuplicatedMySchoolIDMunicipalityCommunityValue {@see ExceptionMessages::DuplicatedMySchoolIDMunicipalityCommunityValue}
 * <br>{@see ExceptionCodes::DuplicatedMySchoolIDMunicipalityCommunityValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostMunicipalityCommunities($name, $municipality, $myschoolMunicipalityCommunityId) {
    
    global $app, $entityManager;

    $MunicipalityCommunity = new MunicipalityCommunities();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$name=====================================================================
    CRUDUtils::EntitySetParam($MunicipalityCommunity, $name, 'MunicipalityCommunityName', 'name', $params);
     
    //$municipality=============================================================      
    CRUDUtils::entitySetAssociation($MunicipalityCommunity, $municipality, 'Municipalities', 'municipality', 'Municipality', $params, 'municipality');

    //$myschoolMunicipalityCommunityId==========================================
    CRUDUtils::EntitySetParam($MunicipalityCommunity, $myschoolMunicipalityCommunityId, 'MySchoolIDMunicipalityCommunity', 'myschoolMunicipalityCommunityId', $params, true, false, true);
    
//controls======================================================================

        //check for name duplicate =============================================   
        $checkDuplicateName = $entityManager->getRepository('MunicipalityCommunities')->findOneBy(array( 'name'  => $MunicipalityCommunity->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedMunicipalityCommunityValue,ExceptionCodes::DuplicatedMunicipalityCommunityValue);
        
        //check for myschoolMunicipalityCommunityId duplicate ==================
        $checkDuplicateMySchoolId = $entityManager->getRepository('MunicipalityCommunities')->findOneBy(array( 'myschoolMunicipalityCommunityId'  => $MunicipalityCommunity->getMyschoolMunicipalityCommunityId() ));
        
        if ((count($checkDuplicateMySchoolId) != 0))
            throw new Exception(ExceptionMessages::DuplicatedMySchoolIDMunicipalityCommunityValue,ExceptionCodes::DuplicatedMySchoolIDMunicipalityCommunityValue);
        
//insert to db================================================================== 
        $entityManager->persist($MunicipalityCommunity);
        $entityManager->flush($MunicipalityCommunity);

//result_messages===============================================================
        $result["municipality_community_id"] = $MunicipalityCommunity->getMunicipalityCommunityId(); 
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>