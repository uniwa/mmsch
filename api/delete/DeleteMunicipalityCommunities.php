<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Δημοτικής Ενότητας**
 *
 * Η συνάρτηση διαγράφει Δημοτική Ενότητα σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **municipality_communities** : 
 * <br>https://mm.sch.gr/api/municipality_communities
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
 * "controller": "DeleteMunicipalityCommunities",
 * "function": "municipality_communities",
 * "method": "DELETE",
 * "parameters": { "municipality_community_id": `` },
 * "municipality_community_id": ``,
 * "status": 200,
 * "message": "[DELETE][municipality_communities]:success"
 * }
 * </code>
 *
 * 
 * @param integer $municipality_community_id ID Δημοτικής Ενότητας
 * <br>
 * <br>Ο Κωδικός ID της Δημοτικής Ενότητας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Δημοτικής Ενότητας : {@see GetMunicipalityCommunities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Δημοτικής Ενότητας
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
 * <br>integer : <b>municipality_community_id</b> : Ο Κωδικός ID της Δημοτικής Ενότητας που διαγράφηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingMunicipalityCommunityIDParam {@see ExceptionMessages::MissingMunicipalityCommunityIDParam}
 * <br>{@see ExceptionCodes::MissingMunicipalityCommunityIDParam}
 *
 * @throws MissingMunicipalityCommunityIDValue {@see ExceptionMessages::MissingMunicipalityCommunityIDValue}
 * <br>{@see ExceptionCodes::MissingMunicipalityCommunityIDValue}
 *  
 * @throws InvalidMunicipalityCommunityIDArray {@see ExceptionMessages::InvalidMunicipalityCommunityIDArray}
 * <br>{@see ExceptionCodes::InvalidMunicipalityCommunityIDArray}
 *
 * @throws InvalidMunicipalityCommunityIDType {@see ExceptionMessages::InvalidMunicipalityCommunityIDType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityCommunityIDType}
 *
 * @throws NotFoundDelMunicipalityCommunityValue {@see ExceptionMessages::NotFoundDelMunicipalityCommunityValue}
 * <br>{@see ExceptionCodes::NotFoundDelMunicipalityCommunityValue}
 * 
 * @throws DuplicateDelMunicipalityCommunityValue {@see ExceptionMessages::DuplicateDelMunicipalityCommunityValue}
 * <br>{@see ExceptionCodes::DuplicateDelMunicipalityCommunityValue}
 *
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteMunicipalityCommunities($municipality_community_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$municipality_community_id============================================ 
        $fMunicipalityCommunityID = CRUDUtils::checkIDParam('municipality_community_id', $params, $municipality_community_id, 'MunicipalityCommunityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('MunicipalityCommunities')->findBy(array( 'municipalityCommunityId' => $fMunicipalityCommunityID ));
        $count= count($check);
 
        if ($count == 1)
            $MunicipalityCommunities = $entityManager->find('MunicipalityCommunities', $fMunicipalityCommunityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelMunicipalityCommunityValue." : ".$fMunicipalityCommunityID, ExceptionCodes::NotFoundDelMunicipalityCommunityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelMunicipalityCommunityValue." : ".$fMunicipalityCommunityID, ExceptionCodes::DuplicateDelMunicipalityCommunityValue);
        
//delete from db================================================================
        $entityManager->remove($MunicipalityCommunities);
        $entityManager->flush($MunicipalityCommunities);
           
//result_messages===============================================================
        $result["municipality_community_id"] = $fMunicipalityCommunityID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>