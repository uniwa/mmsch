<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Νομικού Χαρακτήρα Μονάδας**
 *
 * Η συνάρτηση ενημερώνει Νομικό Χαρακτήρα Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **legal_characters** :
 * <br>https://mm.sch.gr/api/legal_characters
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **legal_character_id**
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
 * "controller": "PutLegalCharacters",
 * "function": "legal_characters",
 * "method": "PUT",
 * "parameters": { "legal_character_id": ``,"name": ``,"category": `` },
 * "legal_character_id": ``,
 * "status": 200,
 * "message": "[PUT][legal_characters]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $legal_character_id ID Νομικού Χαρακτήρα Μονάδων
 * <br>
 * <br>Ο Κωδικός ID του Νομικού Χαρακτήρα Μονάδων
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Νομικού Χαρακτήρα Μονάδων : {@see GetLegalCharacters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Νομικού Χαρακτήρα Μονάδων
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Νομικού Χαρακτήρα Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param integer|string $category Όνομα ή ID Κατηγορίας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Κατηγορίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Κατηγορίας : {@see GetCategories}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Κατηγορίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Κατηγορίας
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
 * <br>integer : <b>legal_character_id</b> : Ο Κωδικός ID του Νομικού Χαρακτήρα Μονάδας που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingLegalCharacterIDParam {@see ExceptionMessages::MissingLegalCharacterIDParam}
 * <br>{@see ExceptionCodes::MissingLegalCharacterIDParam}
 *
 * @throws MissingLegalCharacterIDValue {@see ExceptionMessages::MissingLegalCharacterIDValue}
 * <br>{@see ExceptionCodes::MissingLegalCharacterIDValue}
 *  
 * @throws InvalidLegalCharacterIDArray {@see ExceptionMessages::InvalidLegalCharacterIDArray}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterIDArray}
 *
 * @throws InvalidLegalCharacterIDType {@see ExceptionMessages::InvalidLegalCharacterIDType}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterIDType}
 *
 * @throws InvalidLegalCharacterValue {@see ExceptionMessages::InvalidLegalCharacterValue}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterValue}
 *
 * @throws DuplicatedLegalCharacterUniqueValue {@see ExceptionMessages::DuplicatedLegalCharacterUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedLegalCharacterUniqueValue}
 * 
 * @throws MissingLegalCharacterNameParam {@see ExceptionMessages::MissingLegalCharacterNameParam}
 * <br>{@see ExceptionCodes::MissingLegalCharacterNameParam}
 *
 * @throws MissingLegalCharacterNameValue {@see ExceptionMessages::MissingLegalCharacterNameValue}
 * <br>{@see ExceptionCodes::MissingLegalCharacterNameValue}
 *
 * @throws InvalidLegalCharacterNameType {@see ExceptionMessages::InvalidLegalCharacterNameType}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterNameType}
 * 
 * @throws MissingCategoryParam {@see ExceptionMessages::MissingCategoryParam}
 * <br>{@see ExceptionCodes::MissingCategoryParam}
 *
 * @throws MissingCategoryValue {@see ExceptionMessages::MissingCategoryValue}
 * <br>{@see ExceptionCodes::MissingCategoryValue}
 *  
 * @throws InvalidCategoryArray {@see ExceptionMessages::InvalidCategoryArray}
 * <br>{@see ExceptionCodes::InvalidCategoryArray}
 *
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * <br>{@see ExceptionCodes::InvalidCategoryType}
 * 
 * @throws DuplicatedCategoryUniqueValue {@see ExceptionMessages::DuplicatedCategoryUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedCategoryUniqueValue}
 * 
 * @throws DuplicatedLegalCharacterValue {@see ExceptionMessages::DuplicatedLegalCharacterValue}
 * <br>{@see ExceptionCodes::DuplicatedLegalCharacterValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutLegalCharacters( $legal_character_id, $name, $category ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$legal_character_id=================================================== 
        $fLegalCharacterID = CRUDUtils::checkIDParam('legal_character_id', $params, $legal_character_id, 'LegalCharacterID');

        //init entity for update row============================================
        $LegalCharacter = CRUDUtils::findIDParam($fLegalCharacterID, 'LegalCharacters', 'LegalCharacter');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($LegalCharacter, $name, 'LegalCharacterName', 'name', $params);
        } else if ( Validator::IsNull($LegalCharacter->getName()) ){
            throw new Exception(ExceptionMessages::MissingLegalCharacterNameValue, ExceptionCodes::MissingLegalCharacterNameValue);
        } 

        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($LegalCharacter, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($LegalCharacter->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(lc.legalCharacterId) AS fresult')
                            ->from('LegalCharacters', 'lc')
                            ->where("lc.name = :name AND lc.legalCharacterId != :legalCharacterId")
                            ->setParameter('name', $LegalCharacter->getName())
                            ->setParameter('legalCharacterId', $LegalCharacter->getLegalCharacterId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedLegalCharacterValue ,ExceptionCodes::DuplicatedLegalCharacterValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($LegalCharacter);
        $entityManager->flush($LegalCharacter);

//result_messages===============================================================\
        $result["legal_character_id"] = $LegalCharacter->getLegalCharacterId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}
?>