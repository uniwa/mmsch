<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Διεύθυνσης Εκπαίδευσης**
 *
 * Η συνάρτηση διαγράφει την Διεύθυνση Εκπαίδευσης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **edu_admins** : 
 * <br>https://mm.sch.gr/api/edu_admins
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
 * "controller": "DeleteEduAdmins",
 * "function": "edu_admins",
 * "method": "DELETE",
 * "parameters": { "edu_admin_id": `` },
 * "edu_admin_id": ``,
 * "status": 200,
 * "message": "[DELETE][edu_admin_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $edu_admin_id ID Διεύθυνση Εκπαίδευσης
 * <br>
 * <br>Ο Κωδικός ID της Διεύθυνσης Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Διεύθυνση Εκπαίδευσης : {@see GetEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Διεύθυνση Εκπαίδευσης
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
 * <br>integer : <b>edu_admin_id</b> : Ο Κωδικός ID της Διεύθυνσης Εκπαίδευσης που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingEduAdminIDParam {@see ExceptionMessages::MissingEduAdminIDParam}
 * <br>{@see ExceptionCodes::MissingEduAdminIDParam}
 *
 * @throws MissingEduAdminIDValue {@see ExceptionMessages::MissingEduAdminIDValue}
 * <br>{@see ExceptionCodes::MissingEduAdminIDValue}
 *  
 * @throws InvalidEduAdminIDArray {@see ExceptionMessages::InvalidEduAdminIDArray}
 * <br>{@see ExceptionCodes::InvalidEduAdminIDArray}
 *
 * @throws InvalidEduAdminIDType {@see ExceptionMessages::InvalidEduAdminIDType}
 * <br>{@see ExceptionCodes::InvalidEduAdminIDType}
 *
 * @throws NotFoundDelEduAdminValue {@see ExceptionMessages::NotFoundDelEduAdminValue}
 * <br>{@see ExceptionCodes::NotFoundDelEduAdminValue}
 * 
 * @throws DuplicateDelEduAdminValue {@see ExceptionMessages::DuplicateDelEduAdminValue}
 * <br>{@see ExceptionCodes::DuplicateDelEduAdminValue}
 * 
 * @throws ReferencesEduAdminUnits {@see ExceptionMessages::ReferencesEduAdminUnits}
 * <br>{@see ExceptionCodes::ReferencesEduAdminUnits}
 * 
 * @throws ReferencesEduAdminSchoolCommittees {@see ExceptionMessages::ReferencesEduAdminSchoolCommittees}
 * <br>{@see ExceptionCodes::ReferencesEduAdminSchoolCommittees}
 * 
 * @throws ReferencesEduAdminTransferAreas {@see ExceptionMessages::ReferencesEduAdminTransferAreas}
 * <br>{@see ExceptionCodes::ReferencesEduAdminTransferAreas}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteEduAdmins($edu_admin_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$edu_admin_id========================================================= 
        $fEduAdminID = CRUDUtils::checkIDParam('edu_admin_id', $params, $edu_admin_id, 'EduAdminID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('EduAdmins')->findBy(array( 'eduAdminId' => $fEduAdminID ));
        $count= count($check);
 
        if ($count == 1)
            $EduAdmins = $entityManager->find('EduAdmins', $fEduAdminID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelEduAdminValue." : ".$fEduAdminID, ExceptionCodes::NotFoundDelEduAdminValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelEduAdminValue." : ".$fEduAdminID, ExceptionCodes::DuplicateDelEduAdminValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'eduAdmin'  => $fEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEduAdminUnits, ExceptionCodes::ReferencesEduAdminUnits);  
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'eduAdmin'  => $fEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEduAdminSchoolCommittees, ExceptionCodes::ReferencesEduAdminSchoolCommittees);  

        $checkReference = $entityManager->getRepository('TransferAreas')->findOneBy(array( 'eduAdmin'  => $fEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEduAdminTransferAreas, ExceptionCodes::ReferencesEduAdminTransferAreas);  
                
//delete from db================================================================
        $entityManager->remove($EduAdmins);
        $entityManager->flush($EduAdmins);
           
//result_messages===============================================================
        $result["edu_admin_id"] = $fEduAdminID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>