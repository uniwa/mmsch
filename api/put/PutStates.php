<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **ΛΕΞΙΚΟ : Ενημέρωση Λειτουργικής Κατάστασης**
 *
 * Η συνάρτηση ενημερώνει Λειτουργική Κατάσταση σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **states** :
 * <br>https://mm.sch.gr/api/states
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **state_id**
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
 * "controller": "PutStates",
 * "function": "states",
 * "method": "PUT",
 * "parameters": { "state_id": ``,"name": `` },
 * "state_id": ``,
 * "status": 200,
 * "message": "[PUT][states]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $state_id ID Λειτουργικής Κατάστασης
 * <br>
 * <br>Ο Κωδικός ID της Λειτουργικής Κατάστασης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>ID Λειτουργικής Κατάστασης : {@see GetStates}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Λειτουργικής Κατάστασης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Όνομα
 * <br>
 * <br>Το Όνομα της Λειτουργικής Κατάστασης
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
 * <br>integer : <b>state_id</b> : Ο Κωδικός ID της Λειτουργικής Κατάστασης που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 *
 * @throws MissingStateIDParam {@see ExceptionMessages::MissingStateIDParam}
 * <br>{@see ExceptionCodes::MissingStateIDParam}
 *
 * @throws MissingStateIDValue {@see ExceptionMessages::MissingStateIDValue}
 * <br>{@see ExceptionCodes::MissingStateIDValue}
 *  
 * @throws InvalidStateIDArray {@see ExceptionMessages::InvalidStateIDArray}
 * <br>{@see ExceptionCodes::InvalidStateIDArray}
 *
 * @throws InvalidStateIDType {@see ExceptionMessages::InvalidStateIDType}
 * <br>{@see ExceptionCodes::InvalidStateIDType}
 *
 * @throws InvalidStateValue {@see ExceptionMessages::InvalidStateValue}
 * <br>{@see ExceptionCodes::InvalidStateValue}
 *
 * @throws DuplicatedStateUniqueValue {@see ExceptionMessages::DuplicatedStateUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedStateUniqueValue}
 * 
 * @throws MissingStateNameParam {@see ExceptionMessages::MissingStateNameParam}
 * <br>{@see ExceptionCodes::MissingStateNameParam}
 *
 * @throws MissingStateNameValue {@see ExceptionMessages::MissingStateNameValue}
 * <br>{@see ExceptionCodes::MissingStateNameValue}
 *
 * @throws InvalidStateNameType {@see ExceptionMessages::InvalidStateNameType}
 * <br>{@see ExceptionCodes::InvalidStateNameType}
 * 
 * @throws DuplicatedStateValue {@see ExceptionMessages::DuplicatedStateValue}
 * <br>{@see ExceptionCodes::DuplicatedStateValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function PutStates( $state_id, $name ) {
    
    global $app, $entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$state_id============================================================= 
        $fStateID = CRUDUtils::checkIDParam('state_id', $params, $state_id, 'StateID');

        //init entity for update row============================================
        $State = CRUDUtils::findIDParam($fStateID, 'States', 'State');
        
        //$name=================================================================
        if ( Validator::IsExists('name') ){
            CRUDUtils::EntitySetParam($State, $name, 'StateName', 'name', $params);
        } else if ( Validator::IsNull($State->getName()) ){
            throw new Exception(ExceptionMessages::MissingStateNameValue, ExceptionCodes::MissingStateNameValue);
        } 
 
//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(s.stateId) AS fresult')
                            ->from('States', 's')
                            ->where("s.name = :name AND s.stateId != :stateId")
                            ->setParameter('name', $State->getName())
                            ->setParameter('stateId', $State->getStateId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedStateValue,ExceptionCodes::DuplicatedStateValue);
        }
        
//update to db================================================================== 
        $entityManager->persist($State);
        $entityManager->flush($State);

//result_messages===============================================================
        $result["state_id"] = $State->getStateId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>