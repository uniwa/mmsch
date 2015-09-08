<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Τύπου Συσχέτισης**
 *
 * Η συνάρτηση ενημερώνει Τύπο Συσχέτισης σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **relation_types** :
 * <br>https://mm.sch.gr/api/relation_types
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **relation_type_id**
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
 * "controller": "PutRelationTypes",
 * "function": "relation_types",
 * "method": "PUT",
 * "parameters": { "relation_type_id": ``,"name": `` },
 * "relation_type_id": ``,
 * "status": 200,
 * "message": "[PUT][relation_types]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $relation_type_id ID Τύπου Συσχέτισης
 * <br>
 * <br>Ο Κωδικός ID του Τύπου Συσχέτισης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Τύπου Συσχέτισης : {@see GetRelationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Τύπου Συσχέτισης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα του Τύπου Συσχέτισης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>relation_type_id</b> : Ο Κωδικός ID του Τύπου Συσχέτισης που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingRelationTypeIDParam {@see ExceptionMessages::MissingRelationTypeIDParam}
 * <br>{@see ExceptionCodes::MissingRelationTypeIDParam}
 *
 * @throws MissingRelationTypeIDValue {@see ExceptionMessages::MissingRelationTypeIDValue}
 * <br>{@see ExceptionCodes::MissingRelationTypeIDValue}
 *  
 * @throws InvalidRelationTypeIDArray {@see ExceptionMessages::InvalidRelationTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidRelationTypeIDArray}
 *
 * @throws InvalidRelationTypeIDType {@see ExceptionMessages::InvalidRelationTypeIDType}
 * <br>{@see ExceptionCodes::InvalidRelationTypeIDType}
 *
 * @throws InvalidRelationTypeValue {@see ExceptionMessages::InvalidRelationTypeValue}
 * <br>{@see ExceptionCodes::InvalidRelationTypeValue}
 *
 * @throws DuplicatedRelationTypeUniqueValue {@see ExceptionMessages::DuplicatedRelationTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedRelationTypeUniqueValue}
 * 
 * @throws MissingRelationTypeNameParam {@see ExceptionMessages::MissingRelationTypeNameParam}
 * <br>{@see ExceptionCodes::MissingRelationTypeNameParam}
 *
 * @throws MissingRelationTypeNameValue {@see ExceptionMessages::MissingRelationTypeNameValue}
 * <br>{@see ExceptionCodes::MissingRelationTypeNameValue}
 *
 * @throws InvalidRelationTypeNameType {@see ExceptionMessages::InvalidRelationTypeNameType}
 * <br>{@see ExceptionCodes::InvalidRelationTypeNameType}
 * 
 * @throws DuplicatedRelationTypeValue {@see ExceptionMessages::DuplicatedRelationTypeValue}
 * <br>{@see ExceptionCodes::DuplicatedRelationTypeValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutRelationTypes( $relation_type_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$relation_type_id===================================================== 
        $fRelationTypeId = CRUDUtils::checkIDParam('relation_type_id', $params, $relation_type_id, 'RelationTypeID');

        //init entity for update row============================================
        $RelationType = CRUDUtils::findIDParam($fRelationTypeId, 'RelationTypes', 'RelationType');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($RelationType, $name, 'RelationTypeName', 'name', $params);
        } else if ( Validator::IsNull($RelationType->getName()) ){
            throw new Exception(ExceptionMessages::MissingRelationTypeNameValue, ExceptionCodes::MissingRelationTypeNameValue);
        } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(rt.relationTypeId) AS fresult')
                            ->from('RelationTypes', 'rt')
                            ->where("rt.name = :name AND rt.relationTypeId != :relationTypeId")
                            ->setParameter('name', $RelationType->getName())
                            ->setParameter('relationTypeId', $RelationType->getRelationTypeId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedRelationTypeValue ,ExceptionCodes::DuplicatedRelationTypeValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($RelationType);
        $entityManager->flush($RelationType);

//result_messages===============================================================
        $result["relation_type_id"] = $RelationType->getRelationTypeId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>