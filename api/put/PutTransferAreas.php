<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Περιοχής Μετάθεσης**
 *
 * Η συνάρτηση ενημερώνει Περιοχή Μετάθεσης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **transfer_areas** :
 * <br>https://mm.sch.gr/api/transfer_areas
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **transfer_area_id**
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
 * "controller": "PutTransferAreas",
 * "function": "transfer_areas",
 * "method": "PUT",
 * "parameters": { "transfer_area_id": ``,"name": ``,"edu_admin": `` },
 * "transfer_area_id": ``,
 * "status": 200,
 * "message": "[PUT][transfer_areas]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $transfer_area_id ID Περιοχής Μετάθεσης
 * <br>
 * <br>Ο Κωδικός ID της Περιοχής Μετάθεσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Περιοχής Μετάθεσης : {@see GetTransferAreas}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιοχής Μετάθεσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
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
 * @throws MissingTransferAreaIDParam {@see ExceptionMessages::MissingTransferAreaIDParam}
 * <br>{@see ExceptionCodes::MissingTransferAreaIDParam}
 *
 * @throws MissingTransferAreaIDValue {@see ExceptionMessages::MissingTransferAreaIDValue}
 * <br>{@see ExceptionCodes::MissingTransferAreaIDValue}
 *  
 * @throws InvalidTransferAreaIDArray {@see ExceptionMessages::InvalidTransferAreaIDArray}
 * <br>{@see ExceptionCodes::InvalidTransferAreaIDArray}
 *
 * @throws InvalidTransferAreaIDType {@see ExceptionMessages::InvalidTransferAreaIDType}
 * <br>{@see ExceptionCodes::InvalidTransferAreaIDType}
 *
 * @throws InvalidTransferAreaValue {@see ExceptionMessages::InvalidTransferAreaValue}
 * <br>{@see ExceptionCodes::InvalidTransferAreaValue}
 *
 * @throws DuplicatedTransferAreaUniqueValue {@see ExceptionMessages::DuplicatedTransferAreaUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedTransferAreaUniqueValue}
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

function PutTransferAreas( $transfer_area_id, $name, $edu_admin ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$transfer_area_id===================================================== 
        $fTransferAreaID = CRUDUtils::checkIDParam('transfer_area_id', $params, $transfer_area_id, 'TransferAreaID');

        //init entity for update row============================================
        $TransferArea = CRUDUtils::findIDParam($fTransferAreaID, 'TransferAreas', 'TransferArea');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($TransferArea, $name, 'TransferAreaName', 'name', $params);
        } else if ( Validator::IsNull($TransferArea->getName()) ){
            throw new Exception(ExceptionMessages::MissingTransferAreaNameValue, ExceptionCodes::MissingTransferAreaNameValue);
        } 
        
        //$edu_admin============================================================
        if ( Validator::IsExists('edu_admin') ){
            CRUDUtils::entitySetAssociation($TransferArea, $edu_admin, 'EduAdmins', 'eduAdmin', 'EduAdmin', $params, 'edu_admin');
        } else if ( Validator::IsNull($TransferArea->getEduAdmin()) ){
            throw new Exception(ExceptionMessages::MissingEduAdminValue, ExceptionCodes::MissingEduAdminValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(ta.transferAreaId) AS fresult')
                            ->from('TransferAreas', 'ta')
                            ->where("ta.name = :name AND ta.transferAreaId != :transferAreaId")
                            ->setParameter('name', $TransferArea->getName())
                            ->setParameter('transferAreaId', $TransferArea->getTransferAreaId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedTransferAreaValue,ExceptionCodes::DuplicatedTransferAreaValue);
        }
        
//update to db================================================================== 
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