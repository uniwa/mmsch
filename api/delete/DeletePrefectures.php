<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Περιφερειακής Ενότητας**
 *
 * Η συνάρτηση διαγράφει Περιφερειακή Ενότητα σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **prefectures** : 
 * <br>https://mm.sch.gr/api/prefectures
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
 * "controller": "DeletePrefectures",
 * "function": "prefectures",
 * "method": "DELETE",
 * "parameters": { "prefecture_id": `` },
 * "prefecture_id": ``,
 * "status": 200,
 * "message": "[DELETE][prefecture_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $prefecture_id ID Περιφερειακής Ενότητας
 * <br>
 * <br>Ο Κωδικός ID της Περιφερειακής Ενότητας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Περιφερειακής Ενότητας : {@see GetPrefectures}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιφερειακής Ενότητας
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
 * <br>integer : <b>prefecture_id</b> : Ο Κωδικός ID της Περιφερειακής Ενότητας που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingPrefectureIDParam {@see ExceptionMessages::MissingPrefectureIDParam}
 * <br>{@see ExceptionCodes::MissingPrefectureIDParam}
 *
 * @throws MissingPrefectureIDValue {@see ExceptionMessages::MissingPrefectureIDValue}
 * <br>{@see ExceptionCodes::MissingPrefectureIDValue}
 *  
 * @throws InvalidPrefectureIDArray {@see ExceptionMessages::InvalidPrefectureIDArray}
 * <br>{@see ExceptionCodes::InvalidPrefectureIDArray}
 *
 * @throws InvalidPrefectureIDΤype {@see ExceptionMessages::InvalidPrefectureIDΤype}
 * <br>{@see ExceptionCodes::InvalidPrefectureIDΤype}
 *
 * @throws NotFoundDelPrefectureValue {@see ExceptionMessages::NotFoundDelPrefectureValue}
 * <br>{@see ExceptionCodes::NotFoundDelPrefectureValue}
 * 
 * @throws DuplicateDelPrefectureValue {@see ExceptionMessages::DuplicateDelPrefectureValue}
 * <br>{@see ExceptionCodes::DuplicateDelPrefectureValue}
 *
 * @throws ReferencesPrefectureUnits {@see ExceptionMessages::ReferencesPrefectureUnits}
 * <br>{@see ExceptionCodes::ReferencesPrefectureUnits}
 * 
 * @throws ReferencesPrefectureMunicipalities {@see ExceptionMessages::ReferencesPrefectureMunicipalities}
 * <br>{@see ExceptionCodes::ReferencesPrefectureMunicipalities}
 * 
 * @throws ReferencesPrefectureSchoolCommittees {@see ExceptionMessages::ReferencesPrefectureSchoolCommittees}
 * <br>{@see ExceptionCodes::ReferencesPrefectureSchoolCommittees}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeletePrefectures($prefecture_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$prefecture_id======================================================== 
        $fPrefectureID = CRUDUtils::checkIDParam('prefecture_id', $params, $prefecture_id, 'PrefectureID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Prefectures')->findBy(array( 'prefectureId' => $fPrefectureID ));
        $count= count($check);
 
        if ($count == 1)
            $Prefectures = $entityManager->find('Prefectures', $fPrefectureID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelPrefectureValue." : ".$fPrefectureID, ExceptionCodes::NotFoundDelPrefectureValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelPrefectureValue." : ".$fPrefectureID, ExceptionCodes::DuplicateDelPrefectureValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'prefecture'  => $fPrefectureID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesPrefectureUnits, ExceptionCodes::ReferencesPrefectureUnits);
        
        $checkReference = $entityManager->getRepository('Municipalities')->findOneBy(array( 'prefecture'  => $fPrefectureID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesPrefectureMunicipalities, ExceptionCodes::ReferencesPrefectureMunicipalities); 
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'prefecture'  => $fPrefectureID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesPrefectureSchoolCommittees, ExceptionCodes::ReferencesPrefectureSchoolCommittees);  
         
//delete from db================================================================
        $entityManager->remove($Prefectures);
        $entityManager->flush($Prefectures);
           
//result_messages===============================================================
        $result["prefecture_id"] = $fPrefectureID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>