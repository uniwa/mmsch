<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Επίπεδου Εκπαίδευσης**
 *
 * Η συνάρτηση διαγράφει το Επίπεδο Εκπαίδευσης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **education_levels** : 
 * <br>https://mm.sch.gr/api/education_levels
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
 * "controller": "DeleteEducationLevels",
 * "function": "education_levels",
 * "method": "DELETE",
 * "parameters": { "education_level_id": `` },
 * "education_level_id": ``,
 * "status": 200,
 * "message": "[DELETE][education_level_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $education_level_id ID Επίπεδου Εκπαίδευσης
 * <br>
 * <br>Ο Κωδικός ID του Επίπεδου Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Επίπεδου Εκπαίδευσης : {@see GetEducationLevels}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Επίπεδου Εκπαίδευσης
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
 * <br>integer : <b>education_level_id</b> : Ο Κωδικός ID Επίπεδου Εκπαίδευσης που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingEducationLevelIDParam {@see ExceptionMessages::MissingEducationLevelIDParam}
 * <br>{@see ExceptionCodes::MissingEducationLevelIDParam}
 *
 * @throws MissingEducationLevelIDValue {@see ExceptionMessages::MissingEducationLevelIDValue}
 * <br>{@see ExceptionCodes::MissingEducationLevelIDValue}
 *  
 * @throws InvalidEducationLevelIDArray {@see ExceptionMessages::InvalidEducationLevelIDArray}
 * <br>{@see ExceptionCodes::InvalidEducationLevelIDArray}
 *
 * @throws InvalidEducationLevelIDType {@see ExceptionMessages::InvalidEducationLevelIDType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelIDType}
 *
 * @throws NotFoundDelEducationLevelValue {@see ExceptionMessages::NotFoundDelEducationLevelValue}
 * <br>{@see ExceptionCodes::NotFoundDelEducationLevelValue}
 * 
 * @throws DuplicateDelEducationLevelValue {@see ExceptionMessages::DuplicateDelEducationLevelValue}
 * <br>{@see ExceptionCodes::DuplicateDelEducationLevelValue}
 * 
 * @throws ReferencesEducationLevelUnits {@see ExceptionMessages::ReferencesEducationLevelUnits}
 * <br>{@see ExceptionCodes::ReferencesEducationLevelUnits}
 * 
 * @throws ReferencesEducationLevelSchoolCommittees {@see ExceptionMessages::ReferencesEducationLevelSchoolCommittees}
 * <br>{@see ExceptionCodes::ReferencesEducationLevelSchoolCommittees}
 * 
 * @throws ReferencesEducationLevelUnitTypes {@see ExceptionMessages::ReferencesEducationLevelUnitTypes}
 * <br>{@see ExceptionCodes::ReferencesEducationLevelUnitTypes}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteEducationLevels($education_level_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$education_level_id=================================================== 
        $fEducationLevelID = CRUDUtils::checkIDParam('education_level_id', $params, $education_level_id, 'EducationLevelID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('EducationLevels')->findBy(array( 'educationLevelId' => $fEducationLevelID ));
        $count= count($check);
 
        if ($count == 1)
            $EducationLevels = $entityManager->find('EducationLevels', $fEducationLevelID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelEducationLevelValue." : ".$fEducationLevelID, ExceptionCodes::NotFoundDelEducationLevelValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelEducationLevelValue." : ".$fEducationLevelID, ExceptionCodes::DuplicateDelEducationLevelValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'educationLevel'  => $fEducationLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEducationLevelUnits, ExceptionCodes::ReferencesEducationLevelUnits);  
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'educationLevel'  => $fEducationLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEducationLevelSchoolCommittees, ExceptionCodes::ReferencesEducationLevelSchoolCommittees);  

        $checkReference = $entityManager->getRepository('UnitTypes')->findOneBy(array( 'educationLevel'  => $fEducationLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesEducationLevelUnitTypes, ExceptionCodes::ReferencesEducationLevelUnitTypes);  
                
//delete from db================================================================
        $entityManager->remove($EducationLevels);
        $entityManager->flush($EducationLevels);
           
//result_messages===============================================================
        $result["education_level_id"] = $fEducationLevelID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>