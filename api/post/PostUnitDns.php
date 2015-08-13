<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Καταχώρηση DNS Μονάδων</b>
 * 
 *
 * Η συνάρτηση αυτή καταχωρεί DNS Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> https://mm.sch.gr/api/unit_dns <br><br>
 *
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 *
 * <br><b>Ορισμός Μοναδικών Τιμών Παραμέτρων</b>
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος:
 * <ul>
 *  <li><b>unit_ext_dns</b><br>GetUnitDns με search_type=EXACT & unit_ext_dns="value" </li>
 * </ul>
 * <br>
 * 
 * <br><b>Πίνακας Αποτελεσμάτων</b>
 * <br>Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση
 * <br>Όλες οι μεταβλητές επιστρέφονται σε ένα πίνακα σε JSON μορφή
 * <br>Η μεταβλητή data είναι ο πίνακας με το λεξικό
 * <br>Η μεταβλητή status καθορίζει αν η εκτέλεση της συνάρτησης ήταν επιτυχής (κωδικός 200) ή προέκυψε κάποιο σφάλμα
 *
 *
 * <br><b>Πίνακας Σφαλμάτων</b>
 * <br>Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που
 * μπορεί να προκύψουν κατά την κλήση της συνάρτησης
 * <br>Οι περιγραφές των Σφαλμάτων καθώς και οι Κωδικοί τους είναι διαθέσιμες μέσω του πίνακα
 * Μηνύματα Σφαλμάτων ({@see ExceptionMessages}) και Κωδικοί Σφαλμάτων ({@see ExceptionCodes}) αντίστοιχα
 *
 *
 * <br><b>Παραδείγματα Κλήσης</b>
 * <br>Παρακάτω εμφανίζεται μια σειρά από παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους :
 * <br><a href="#cURL">cURL</a> | <a href="#JavaScript">JavaScript</a> | <a href="#PHP">PHP</a> | <a href="#Ajax">Ajax</a>
 *
 * <br>
 *
 *
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 * curl -X POST https://mm.sch.gr/api/unit_dns \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"unit_dns" : "", \
 *        "unit_ext_dns" : "", \
 *        "mm_id" :  }' 
 * </code>
 * <br>
 *
 *
 *  
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "unit_dns" : "",
 *        "unit_ext_dns" : "",
 *        "mm_id" : 
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "https://mm.sch.gr/api/unit_dns");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    
 *    http.onreadystatechange = function() {
 *        if(http.readyState == 4 && http.status == 200) {
 *            alert(http.responseText);
 *        }
 *    }
 *    
 *    http.send(params);
 * </script>
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="PHP"></a>Παράδειγμα κλήσης της συνάρτησης με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $params = array(
 *        "unit_dns" => "",
 *        "unit_ext_dns" => "",
 *        "mm_id" => 
 * );
 * 
 * $curl = curl_init("https://mm.sch.gr/api/unit_dns");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
 * curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 * curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 * 
 * $data = json_decode( curl_exec($curl) );
 * echo "<pre>"; var_dump( $data ); echo "</pre>";
 * ?>
 * </code>
 * <br>
 * 
 * 
 *
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'POST',
 *        url: 'https://mm.sch.gr/api/unit_dns',
 *        dataType: "json",
 *        data: {
 *        "unit_dns" : "",
 *        "unit_ext_dns" : "",
 *        "mm_id" : 
 *        },
 *        beforeSend: function(req) {
 *            req.setRequestHeader('Authorization', btoa('username' + ":" + 'password'));
 *        },
 *        success: function(data){
 *            console.log(data);
 *        }
 *    });
 * </script>
 * </code>
 * <br>
 * 
 * 
 *
 * <br><b>Πίνακας Δεδομένων</b>
 * <br><a id="data"></a>Παρακάτω εμφανίζεται πίνακας σε μορφή JSON :
 * <code>
 * {
 *    "method": "PostUnitDns",
 *    "unit_dns_id": "",
 *    "status": 200,
 *    "message": "success"
 * }
 * </code>
 * <br>
 *
 * 
 * 
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 * @param string $unit_dns DNS Μονάδας
 * <br>Το Όνομα του DNS της Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $unit_ext_dns ExtDNS Μονάδας
 * <br>Το ExtDNS της Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>unit_dns_id</b> : Ο Κωδικός του DNS Μονάδας που δημιουργήθηκε</li>
 * </ul>
 * 
 *
 *
 * @throws MissingUnitDnsValue {@see ExceptionMessages::MissingUnitDnsValue}
 * <br>{@see ExceptionCodes::MissingUnitDnsValue}
 * <br>Το DNS της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitDnsArray {@see ExceptionMessages::InvalidUnitDnsArray}
 * <br>{@see ExceptionCodes::InvalidUnitDnsArray}
 * <br>Το DNS της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitDnsType {@see ExceptionMessages::InvalidUnitDnsType}
 * <br>{@see ExceptionCodes::InvalidUnitDnsType}
 * <br>Το DNS της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό
 *
 * @throws MissingUnitDnsParam {@see ExceptionMessages::MissingUnitDnsParam}
 * <br>{@see ExceptionCodes::MissingUnitDnsParam}
 * <br>Το DNS της Μονάδας είναι υποχρεωτικό πεδίο
 *
 * @throws MissingUnitExtDnsValue {@see ExceptionMessages::MissingUnitExtDnsValue}
 * <br>{@see ExceptionCodes::MissingUnitExtDnsValue}
 * <br>Το πλήρης DNS της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitExtDnsArray {@see ExceptionMessages::InvalidUnitExtDnsArray}
 * <br>{@see ExceptionCodes::InvalidUnitExtDnsArray}
 * <br>Το πλήρης DNS της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitExtDnsType {@see ExceptionMessages::InvalidUnitExtDnsType}
 * <br>{@see ExceptionCodes::InvalidUnitExtDnsType}
 * <br>Το πλήρης DNS της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό
 *
 * @throws MissingUnitExtDnsParam {@see ExceptionMessages::MissingUnitExtDnsParam}
 * <br>{@see ExceptionCodes::MissingUnitExtDnsParam}
 * <br>Το πλήρης DNS της Μονάδας είναι υποχρεωτικό πεδίο
 *
 * @throws DuplicatedUnitExtDnsValue {@see ExceptionMessages::DuplicatedUnitExtDnsValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitExtDnsValue}
 * <br>Το πλήρης DNS της Μονάδας υπάρχει ήδη
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 * <br>Ο Κωδικός ΜΜ πρέπει να έχει τιμή
 *
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 * <br>Ο Κωδικός ΜΜ δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitValue {@see ExceptionMessages::InvalidUnitValue}
 * <br>{@see ExceptionCodes::InvalidUnitValue}
 * <br>Η Μονάδα δεν βρέθηκε
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * <br>Ο Κωδικός ΜΜ πρέπει να είναι αριθμητικός
 *
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 * <br>Ο Κωδικός ΜΜ είναι υποχρεωτικό πεδίο
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