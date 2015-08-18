<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Καταχώρηση DNS Μονάδας**
 * 
 * Η συνάρτηση καταχωρεί DNS Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **POST** και route_api_name = **unit_dns** :
 * <br>https://mm.sch.gr/api/unit_dns
 *
 * 
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **unit_ext_dns**
 * * **mm_id**
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
 * "controller": "PostUnitDns",
 * "function": "unit_dns",
 * "method": "POST",
 * "parameters": { "unit_dns": "","unit_ext_dns": "","mm_id": `` },
 * "unit_dns_id": ``,
 * "status": 200,
 * "message": "[POST][unit_dns]:success"
 * }
 * </code>
 *
 * 
 * @param string $unit_dns DNS Μονάδας
 * <br>
 * <br>Το Όνομα του DNS της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $unit_ext_dns ExtDNS Μονάδας
 * <br>
 * <br>Το ExtDNS της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param integer $mm_id Κωδικός ΜΜ
 * <br>
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>DNS Μονάδας : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
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
 * <br>integer : <b>unit_dns_id</b> : Ο Κωδικός ID του DNS Μονάδας που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 * 
 *
 * @throws MissingUnitDnsParam {@see ExceptionMessages::MissingUnitDnsParam}
 * <br>{@see ExceptionCodes::MissingUnitDnsParam}
 * 
 * @throws MissingUnitDnsValue {@see ExceptionMessages::MissingUnitDnsValue}
 * <br>{@see ExceptionCodes::MissingUnitDnsValue}
 *
 * @throws InvalidUnitDnsType {@see ExceptionMessages::InvalidUnitDnsType}
 * <br>{@see ExceptionCodes::InvalidUnitDnsType}
 * 
 * @throws MissingUnitExtDnsParam {@see ExceptionMessages::MissingUnitExtDnsParam}
 * <br>{@see ExceptionCodes::MissingUnitExtDnsParam}
 * 
 * @throws MissingUnitExtDnsValue {@see ExceptionMessages::MissingUnitExtDnsValue}
 * <br>{@see ExceptionCodes::MissingUnitExtDnsValue}
 * 
 * @throws InvalidUnitExtDnsType {@see ExceptionMessages::InvalidUnitExtDnsType}
 * <br>{@see ExceptionCodes::InvalidUnitExtDnsType}
 *
 * @throws DuplicatedUnitExtDnsValue {@see ExceptionMessages::DuplicatedUnitExtDnsValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitExtDnsValue}
 * 
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 * 
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 * 
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * 
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 * 
 * @throws DuplicatedUnitMMIDUniqueValue {@see ExceptionMessages::DuplicatedUnitMMIDUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitMMIDUniqueValue}
 * 
 * @throws DuplicatedUnitDnsValue {@see ExceptionMessages::DuplicatedUnitDnsValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitDnsValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 */

function PostUnitDns( $unit_dns, $unit_ext_dns, $mm_id ) {

    global $app,$entityManager;

    $UnitDns = new UnitDns();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$unit_dns=================================================================
     CRUDUtils::EntitySetParam($UnitDns, $unit_dns, 'UnitDns', 'unit_dns', $params);

    //$unit_ext_dns=============================================================
     CRUDUtils::EntitySetParam($UnitDns, $unit_ext_dns, 'UnitExtDns', 'unit_ext_dns', $params);
       
        //Check for unit_ext_dns uniques =======================================   
        $checkDuplicateUnitExtDns = $entityManager->getRepository('UnitDns')->findOneBy(array( 'unitExtDns'  => $UnitDns->getUnitExtDns() ));
  
        if ((count($checkDuplicateUnitExtDns) != 0))
            throw new Exception(ExceptionMessages::DuplicatedUnitExtDnsValue,ExceptionCodes::DuplicatedUnitExtDnsValue);
   
    //$mm_id====================================================================
    CRUDUtils::entitySetAssociation($UnitDns, $mm_id, 'Units', 'mm', 'UnitMMID', $params, 'mm_id', true, false, true); 
    
        //Check for mm_id uniques ==============================================   
        $checkDuplicateMmId = $entityManager->getRepository('UnitDns')->findOneBy(array( 'mm'  => $UnitDns->getMm()->getMmId() ));
  
        if ((count($checkDuplicateMmId) != 0))
            throw new Exception(ExceptionMessages::DuplicatedUnitDnsValue,ExceptionCodes::DuplicatedUnitDnsValue);

//insert to db================================================================== 
        $entityManager->persist($UnitDns);
        $entityManager->flush($UnitDns);

        $result["unit_dns_id"] = $UnitDns->getUnitDnsId();
           
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