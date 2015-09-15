<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Καταχώρηση Διεύθυνσης Εκπαίδευσης**
 *
 * Η συνάρτηση καταχωρεί Διεύθυνση Εκπαίδευσης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **edu_admins** :
 * <br>https://mm.sch.gr/api/edu_admins
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **name**
 * * **registry_no**
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
 * "controller": "PostEduAdmins",
 * "function": "edu_admins",
 * "method": "POST",
 * "parameters": { "name": ``,"registry_no": ``,"region_edu_admin": ``,
 *                 "implementation_entity": ``,"parent_rdn": ``,"third_level_dns": `` },
 * "edu_admin_id": ``,
 * "status": 200,
 * "message": "[POST][edu_admins]:success"
 * }
 * </code>
 * 
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Διεύθυνσης Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $registry_no Κωδικός ΥΠΕΠΘ
 * <br>
 * <br>Το Όνομα της Κωδικού ΥΠΕΠΘ της Διεύθυνσης Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param integer|string $region_edu_admin Όνομα ή ID Περιφέρειας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιφέρειας
 * <br>Όνομα ή ID Περιφέρειας : {@see GetRegionEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιφέρειας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιφέρειας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $implementation_entity Όνομα ή ID Φορέα Υλοποίησης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Φορέα Υλοποίησης
 * <br>Όνομα ή ID Φορέα Υλοποίησης : {@see GetImplementationEntities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Φορέα Υλοποίησης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιφέρειας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $parent_rdn Parent RDN
 * <br>
 * <br>Το Parent RDN της Διεύθυνσης Εκπαίδευσης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $third_level_dns Third Level Dns
 * <br>
 * <br>Το Third Level Dns της Διεύθυνσης Εκπαίδευσης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>edu_admin_id</b> : Ο Κωδικός ID της Διεύθυνσης Εκπαίδευσης που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws MissingEduAdminNameParam {@see ExceptionMessages::MissingEduAdminNameParam}
 * <br>{@see ExceptionCodes::MissingEduAdminNameParam}
 *
 * @throws MissingEduAdminNameValue {@see ExceptionMessages::MissingEduAdminNameValue}
 * <br>{@see ExceptionCodes::MissingEduAdminNameValue}
 *
 * @throws InvalidEduAdminNameType {@see ExceptionMessages::InvalidEduAdminNameType}
 * <br>{@see ExceptionCodes::InvalidEduAdminNameType} 
 *
 * @throws MissingEduAdminCodeParam {@see ExceptionMessages::MissingEduAdminCodeParam}
 * <br>{@see ExceptionCodes::MissingEduAdminCodeParam}
 *
 * @throws MissingEduAdminCodeValue {@see ExceptionMessages::MissingEduAdminCodeValue}
 * <br>{@see ExceptionCodes::MissingEduAdminCodeValue}
 *
 * @throws InvalidEduAdminCodeType {@see ExceptionMessages::InvalidEduAdminCodeType}
 * <br>{@see ExceptionCodes::InvalidEduAdminCodeType}
 * 
 * @throws MissingRegionEduAdminParam {@see ExceptionMessages::MissingRegionEduAdminParam}
 * <br>{@see ExceptionCodes::MissingRegionEduAdminParam}
 *
 * @throws MissingRegionEduAdminValue {@see ExceptionMessages::MissingRegionEduAdminValue}
 * <br>{@see ExceptionCodes::MissingRegionEduAdminValue}
 *  
 * @throws InvalidRegionEduAdminArray {@see ExceptionMessages::InvalidRegionEduAdminArray}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminArray}
 *
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminType}
 * 
 * @throws DuplicatedRegionEduAdminUniqueValue {@see ExceptionMessages::DuplicatedRegionEduAdminUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedRegionEduAdminUniqueValue}
 * 
 * @throws MissingImplementationEntityParam {@see ExceptionMessages::MissingImplementationEntityParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityParam}
 *
 * @throws MissingImplementationEntityValue {@see ExceptionMessages::MissingImplementationEntityValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityValue}
 *  
 * @throws InvalidImplementationEntityArray {@see ExceptionMessages::InvalidImplementationEntityArray}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityArray}
 *
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityType}
 * 
 * @throws DuplicatedImplementationEntityUniqueValue {@see ExceptionMessages::DuplicatedImplementationEntityUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedImplementationEntityUniqueValue}
 * 
 * @throws MissingEduAdminParentRdnParam {@see ExceptionMessages::MissingEduAdminParentRdnParam}
 * <br>{@see ExceptionCodes::MissingEduAdminParentRdnParam}
 *
 * @throws MissingEduAdminParentRdnValue {@see ExceptionMessages::MissingEduAdminParentRdnValue}
 * <br>{@see ExceptionCodes::MissingEduAdminParentRdnValue}
 *
 * @throws InvalidEduAdminParentRdnType {@see ExceptionMessages::InvalidEduAdminParentRdnType}
 * <br>{@see ExceptionCodes::InvalidEduAdminParentRdnType}
 * 
 * @throws MissingEduAdminThirdLevelDnsParam {@see ExceptionMessages::MissingEduAdminThirdLevelDnsParam}
 * <br>{@see ExceptionCodes::MissingEduAdminThirdLevelDnsParam}
 *
 * @throws MissingEduAdminThirdLevelDnsValue {@see ExceptionMessages::MissingEduAdminThirdLevelDnsValue}
 * <br>{@see ExceptionCodes::MissingEduAdminThirdLevelDnsValue}
 *
 * @throws InvalidEduAdminThirdLevelDnsType {@see ExceptionMessages::InvalidEduAdminThirdLevelDnsType}
 * <br>{@see ExceptionCodes::InvalidEduAdminThirdLevelDnsType}
 * 
 * @throws DuplicatedEduAdminValue {@see ExceptionMessages::DuplicatedEduAdminValue}
 * <br>{@see ExceptionCodes::DuplicatedEduAdminValue}
 * 
 * @throws DuplicatedEduAdminCodeValue {@see ExceptionMessages::DuplicatedEduAdminCodeValue}
 * <br>{@see ExceptionCodes::DuplicatedEduAdminCodeValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PostEduAdmins( $name, $registry_no, $region_edu_admin, $implementation_entity, $parent_rdn, $third_level_dns ) {
    
    global $app,$entityManager;

    $EduAdmin = new EduAdmins();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {

    //$name=====================================================================
    CRUDUtils::entitySetParam($EduAdmin, $name, 'EduAdminName', 'name' , $params);

    //$registry_no==============================================================
    CRUDUtils::entitySetParam($EduAdmin, $registry_no, 'EduAdminCode', 'registry_no' , $params);
    
    //$region_edu_admin=========================================================      
    CRUDUtils::entitySetAssociation($EduAdmin, $region_edu_admin, 'RegionEduAdmins', 'regionEduAdmin', 'RegionEduAdmin', $params, 'region_edu_admin', false, true);
    
    //$implementation_entity====================================================
    CRUDUtils::entitySetAssociation($EduAdmin, $implementation_entity, 'ImplementationEntities', 'implementationEntity', 'ImplementationEntity', $params, 'implementation_entity', false, true);
    
    //$parent_rdn===============================================================
    CRUDUtils::entitySetParam($EduAdmin, $parent_rdn, 'EduAdminParentRdn', 'parent_rdn' , $params, false ,true);
        
    //$third_level_dns==========================================================
    CRUDUtils::entitySetParam($EduAdmin, $third_level_dns, 'EduAdminThirdLevelDns', 'third_level_dns' , $params, false ,true);
             
//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicateName = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'name'  => $EduAdmin->getName() ));
        
        if ((count($checkDuplicateName) != 0))
            throw new Exception(ExceptionMessages::DuplicatedEduAdminValue,ExceptionCodes::DuplicatedEduAdminValue);  
        
        $checkDuplicateRegistryNo = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'registryNo'  => $EduAdmin->getRegistryNo() ));
        
        if ((count($checkDuplicateRegistryNo) != 0))
            throw new Exception(ExceptionMessages::DuplicatedEduAdminCodeValue,ExceptionCodes::DuplicatedEduAdminCodeValue);  
        
//insert to db================================================================== 
        $entityManager->persist($EduAdmin);
        $entityManager->flush($EduAdmin);
           
//result_messages===============================================================
        $result["edu_admin_id"] = $EduAdmin->getEduAdminId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
        
    return $result;
}

?>