<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Ειδικού Τύπου Μονάδων**
 *
 * Η συνάρτηση ενημερώνει Ειδικό Τύπο Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **special_types** :
 * <br>https://mm.sch.gr/api/special_types
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **special_type_id**
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
 * "controller": "PutSpecialTypes",
 * "function": "special_types",
 * "method": "PUT",
 * "parameters": { "special_type_id": ``,"name": ``,"category": `` },
 * "special_type_id": ``,
 * "status": 200,
 * "message": "[PUT][special_types]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $special_type_id ID Ειδικού Τύπου Μονάδων
 * <br>
 * <br>Ο Κωδικός ID του Ειδικού Τύπου Μονάδων
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Ειδικού Τύπου Μονάδων : {@see GetSpecialTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Ειδικού Τύπου Μονάδων
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Ειδικού Τύπου Μονάδων
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
 * <br>integer : <b>special_type_id</b> : Ο Κωδικός ID του Ειδικού Τύπου Μονάδων που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingSpecialTypeIDParam {@see ExceptionMessages::MissingSpecialTypeIDParam}
 * <br>{@see ExceptionCodes::MissingSpecialTypeIDParam}
 *
 * @throws MissingSpecialTypeIDValue {@see ExceptionMessages::MissingSpecialTypeIDValue}
 * <br>{@see ExceptionCodes::MissingSpecialTypeIDValue}
 *  
 * @throws InvalidSpecialTypeIDArray {@see ExceptionMessages::InvalidSpecialTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeIDArray}
 *
 * @throws InvalidSpecialTypeIDType {@see ExceptionMessages::InvalidSpecialTypeIDType}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeIDType}
 *
 * @throws InvalidSpecialTypeValue {@see ExceptionMessages::InvalidSpecialTypeValue}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeValue}
 *
 * @throws DuplicatedSpecialTypeUniqueValue {@see ExceptionMessages::DuplicatedSpecialTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedSpecialTypeUniqueValue}
 * 
 * @throws MissingSpecialTypeNameParam {@see ExceptionMessages::MissingSpecialTypeNameParam}
 * <br>{@see ExceptionCodes::MissingSpecialTypeNameParam}
 *
 * @throws MissingSpecialTypeNameValue {@see ExceptionMessages::MissingSpecialTypeNameValue}
 * <br>{@see ExceptionCodes::MissingSpecialTypeNameValue}
 *
 * @throws InvalidSpecialTypeNameType {@see ExceptionMessages::InvalidSpecialTypeNameType}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeNameType}
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
 * @throws DuplicatedSpecialTypeValue {@see ExceptionMessages::DuplicatedSpecialTypeValue}
 * <br>{@see ExceptionCodes::DuplicatedSpecialTypeValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutSpecialTypes( $special_type_id, $name, $category ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$special_type_id====================================================== 
        $fSpecialTypeID = CRUDUtils::checkIDParam('special_type_id', $params, $special_type_id, 'SpecialTypeID');

        //init entity for update row============================================
        $SpecialType = CRUDUtils::findIDParam($fSpecialTypeID, 'SpecialTypes', 'SpecialType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($SpecialType, $name, 'SpecialTypeName', 'name', $params);
        } else if ( Validator::IsNull($SpecialType->getName()) ){
            throw new Exception(ExceptionMessages::MissingSpecialTypeNameValue, ExceptionCodes::MissingSpecialTypeNameValue);
        } 

        //$category=============================================================
        if ( Validator::IsExists('category') ){
            CRUDUtils::entitySetAssociation($SpecialType, $category, 'Categories', 'category', 'Category', $params, 'category');
        } else if ( Validator::IsNull($SpecialType->getCategory()) ){
            throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
        } 
        
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(st.specialTypeId) AS fresult')
                            ->from('SpecialTypes', 'st')
                            ->where("st.name = :name AND st.specialTypeId != :specialTypeId")
                            ->setParameter('name', $SpecialType->getName())
                            ->setParameter('specialTypeId', $SpecialType->getSpecialTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedSpecialTypeValue,ExceptionCodes::DuplicatedSpecialTypeValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($SpecialType);
        $entityManager->flush($SpecialType);

//result_messages===============================================================      
        $result["special_type_id"] = $SpecialType->getSpecialTypeId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>