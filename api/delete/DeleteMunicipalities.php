<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Διαγραφή Δήμου ΟΤΑ**
 *
 * Η συνάρτηση διαγράφει Δήμο ΟΤΑ σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **DELETE** και route_api_name = **municipalities** : 
 * <br>https://mm.sch.gr/api/municipalities
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
 * "controller": "DeleteMunicipalities",
 * "function": "municipalities",
 * "method": "DELETE",
 * "parameters": { "municipality_id": `` },
 * "municipality_id": ``,
 * "status": 200,
 * "message": "[DELETE][municipality_id]:success"
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
 *
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>municipality_id</b> : Ο Κωδικός ID του Δήμου ΟΤΑ που διαγράφηκε
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
 * @throws NotFoundDelMunicipalityValue {@see ExceptionMessages::NotFoundDelMunicipalityValue}
 * <br>{@see ExceptionCodes::NotFoundDelMunicipalityValue}
 * 
 * @throws DuplicateDelMunicipalityValue {@see ExceptionMessages::DuplicateDelMunicipalityValue}
 * <br>{@see ExceptionCodes::DuplicateDelMunicipalityValue}
 * 
 * @throws ReferencesMunicipalityUnits {@see ExceptionMessages::ReferencesMunicipalityUnits}
 * <br>{@see ExceptionCodes::ReferencesMunicipalityUnits}
 *
 * @throws ReferencesMunicipalityTransferAreaMunicipalities {@see ExceptionMessages::ReferencesMunicipalityTransferAreaMunicipalities}
 * <br>{@see ExceptionCodes::ReferencesMunicipalityTransferAreaMunicipalities}
 * 
 * @throws ReferencesMunicipalitySchoolCommittees {@see ExceptionMessages::ReferencesMunicipalitySchoolCommittees}
 * <br>{@see ExceptionCodes::ReferencesMunicipalitySchoolCommittees}
 * 
 * @throws ReferencesMunicipalityCommunities {@see ExceptionMessages::ReferencesMunicipalityCommunities}
 * <br>{@see ExceptionCodes::ReferencesMunicipalityCommunities}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function DeleteMunicipalities($municipality_id) {

    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$municipality_id====================================================== 
        $fMunicipalityID = CRUDUtils::checkIDParam('municipality_id', $params, $municipality_id, 'MunicipalityID');
 
//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('Municipalities')->findBy(array( 'municipalityId' => $fMunicipalityID ));
        $count= count($check);
 
        if ($count == 1)
            $Municipalities = $entityManager->find('Municipalities', $fMunicipalityID);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelMunicipalityValue." : ".$fMunicipalityID, ExceptionCodes::NotFoundDelMunicipalityValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelMunicipalityValue." : ".$fMunicipalityID, ExceptionCodes::DuplicateDelMunicipalityValue);
        
        //check for references =================================================   
        $checkReference = $entityManager->getRepository('Units')->findOneBy(array( 'municipality'  => $fMunicipalityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesMunicipalityUnits, ExceptionCodes::ReferencesMunicipalityUnits);
        
        $checkReference = $entityManager->getRepository('TransferAreaMunicipalities')->findOneBy(array( 'municipality'  => $fMunicipalityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesMunicipalityTransferAreaMunicipalities, ExceptionCodes::ReferencesMunicipalityTransferAreaMunicipalities);  
        
        $checkReference = $entityManager->getRepository('SchoolCommittees')->findOneBy(array( 'municipality'  => $fMunicipalityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesMunicipalitySchoolCommittees, ExceptionCodes::ReferencesMunicipalitySchoolCommittees);
        
        $checkReference = $entityManager->getRepository('MunicipalityCommunities')->findOneBy(array( 'municipality'  => $fMunicipalityID ));
        if (count($checkReference) != 0) throw new Exception(ExceptionMessages::ReferencesMunicipalityCommunities, ExceptionCodes::ReferencesMunicipalityCommunities); 
        
//delete from db================================================================
        $entityManager->remove($Municipalities);
        $entityManager->flush($Municipalities);
           
//result_messages===============================================================
        $result["municipality_id"] = $fMunicipalityID;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>