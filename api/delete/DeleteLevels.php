<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DEPRECATED
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Τάξης**
 *
 * Η συνάρτηση διαγράφει Τάξη σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **levels** : 
 * <br>https://mm.sch.gr/api/levels
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
 * "controller": "DeleteLevels",
 * "function": "levels",
 * "method": "DELETE",
 * "parameters": { "level_id": `` },
 * "level_id": ``,
 * "status": 200,
 * "message": "[DELETE][level_id]:success"
 * }
 * </code>
 *
 * 
 * @param integer $level_id ID Τάξης
 * <br>
 * <br>Ο Κωδικός ID της Τάξης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Τάξης : {@see GetLevels}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Τάξης
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
 * <br>integer : <b>level_id</b> : Ο Κωδικός ID της Τάξης που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingLevelIDParam {@see ExceptionMessages::MissingLevelIDParam}
 * <br>{@see ExceptionCodes::MissingLevelIDParam}
 *
 * @throws MissingLevelIDValue {@see ExceptionMessages::MissingLevelIDValue}
 * <br>{@see ExceptionCodes::MissingLevelIDValue}
 *  
 * @throws InvalidLevelIDArray {@see ExceptionMessages::InvalidLevelIDArray}
 * <br>{@see ExceptionCodes::InvalidLevelIDArray}
 *
 * @throws InvalidLevelIDType {@see ExceptionMessages::InvalidLevelIDType}
 * <br>{@see ExceptionCodes::InvalidLevelIDType}
 *
 * @throws NotFoundDelLevelsValue {@see ExceptionMessages::NotFoundDelLevelsValue}
 * <br>{@see ExceptionCodes::NotFoundDelLevelsValue}
 * 
 * @throws DuplicateDelLevelsValue {@see ExceptionMessages::DuplicateDelLevelsValue}
 * <br>{@see ExceptionCodes::DuplicateDelLevelsValue}
 * 
 * @throws ReferencesLevelsGroups {@see ExceptionMessages::ReferencesLevelsGroups}
 * <br>{@see ExceptionCodes::ReferencesLevelsGroups}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteLevels($level_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$level_id============================================================= 
        $fLevelID = CRUDUtils::checkIDParam('level_id', $params, $level_id, 'LevelID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Levels')->findBy(array( 'levelId' => $fLevelID ));
        $count= count($check);
 
        if ($count == 1)
            $Levels = $entityManager->find('Levels', $fLevelID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelLevelsValue." : ".$fLevelID, ExceptionCodes::NotFoundDelLevelsValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelLevelsValue." : ".$fLevelID, ExceptionCodes::DuplicateDelLevelsValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Groups')->findOneBy(array( 'level'  => $fLevelID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesLevelsGroups, ExceptionCodes::ReferencesLevelsGroups);  
        
//delete from db================================================================
        $result["level_id"] = $fLevelID;
        $entityManager->remove($Levels);
        $entityManager->flush($Levels);
           
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>