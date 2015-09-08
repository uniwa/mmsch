<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Περιφέρειας**
 *
 * Η συνάρτηση διαγράφει Περιφέρεια σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **region_edu_admins** : 
 * <br>https://mm.sch.gr/api/region_edu_admins
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
 * "controller": "DeleteRegionEduAdmins",
 * "function": "region_edu_admins",
 * "method": "DELETE",
 * "parameters": { "region_edu_admin_id": `` },
 * "region_edu_admin_id": ``,
 * "status": 200,
 * "message": "[DELETE][region_edu_admin_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $region_edu_admin_id ID Περιφέρειας
 * <br>
 * <br>Ο Κωδικός ID της Περιφέρειας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Περιφέρειας : {@see GetRegionEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιφέρειας
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
 * <br>integer : <b>region_edu_admin_id</b> : Ο Κωδικός ID της Περιφέρειας που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingRegionEduAdminIDParam {@see ExceptionMessages::MissingRegionEduAdminIDParam}
 * <br>{@see ExceptionCodes::MissingRegionEduAdminIDParam}
 *
 * @throws MissingRegionEduAdminIDValue {@see ExceptionMessages::MissingRegionEduAdminIDValue}
 * <br>{@see ExceptionCodes::MissingRegionEduAdminIDValue}
 *  
 * @throws InvalidRegionEduAdminIDArray {@see ExceptionMessages::InvalidRegionEduAdminIDArray}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminIDArray}
 *
 * @throws InvalidRegionEduAdminIDΤype {@see ExceptionMessages::InvalidRegionEduAdminIDΤype}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminIDΤype}
 *
 * @throws NotFoundDelRegionEduAdminValue {@see ExceptionMessages::NotFoundDelRegionEduAdminValue}
 * <br>{@see ExceptionCodes::NotFoundDelRegionEduAdminValue}
 * 
 * @throws DuplicateDelRegionEduAdminValue {@see ExceptionMessages::DuplicateDelRegionEduAdminValue}
 * <br>{@see ExceptionCodes::DuplicateDelRegionEduAdminValue}
 *
 * @throws ReferencesRegionEduAdminUnits {@see ExceptionMessages::ReferencesRegionEduAdminUnits}
 * <br>{@see ExceptionCodes::ReferencesRegionEduAdminUnits}
 * 
 * @throws ReferencesRegionEduAdminEduAdmins {@see ExceptionMessages::ReferencesRegionEduAdminEduAdmins}
 * <br>{@see ExceptionCodes::ReferencesRegionEduAdminEduAdmins}
 * 
 * @throws ReferencesRegionEduAdminSchoolCommittees {@see ExceptionMessages::ReferencesRegionEduAdminSchoolCommittees}
 * <br>{@see ExceptionCodes::ReferencesRegionEduAdminSchoolCommittees}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteRegionEduAdmins($region_edu_admin_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$region_edu_admin_id================================================== 
        $fRegionEduAdminID = CRUDUtils::checkIDParam('region_edu_admin_id', $params, $region_edu_admin_id, 'RegionEduAdminID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('RegionEduAdmins')->findBy(array( 'regionEduAdminId' => $fRegionEduAdminID ));
        $count= count($check);
 
        if ($count == 1)
            $RegionEduAdmins = $entityManager->find('RegionEduAdmins', $fRegionEduAdminID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelRegionEduAdminValue." : ".$fRegionEduAdminID, ExceptionCodes::NotFoundDelRegionEduAdminValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelRegionEduAdminValue." : ".$fRegionEduAdminID, ExceptionCodes::DuplicateDelRegionEduAdminValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'regionEduAdmin'  => $fRegionEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesRegionEduAdminUnits, ExceptionCodes::ReferencesRegionEduAdminUnits);
        
        $checkReference = $entityManager->getRepository('EduAdmins')->findOneBy(array( 'regionEduAdmin'  => $fRegionEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesRegionEduAdminEduAdmins, ExceptionCodes::ReferencesRegionEduAdminEduAdmins); 
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'regionEduAdmin'  => $fRegionEduAdminID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesRegionEduAdminSchoolCommittees, ExceptionCodes::ReferencesRegionEduAdminSchoolCommittees);  
         
//delete from db================================================================
        $entityManager->remove($RegionEduAdmins);
        $entityManager->flush($RegionEduAdmins);
           
//result_messages===============================================================
        $result["region_edu_admin_id"] = $fRegionEduAdminID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>