<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Διαγραφή DNS Μονάδων</b>
 *
 *
 * Η συνάρτηση αυτή διαγράφει DNS Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο DELETE :
 * <br> https://mm.sch.gr/api/unit_dns
 *
 *
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 *
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
 * <a id="cURL"></a>Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 *    curl -X DELETE https://mm.sch.gr/api/unit_dns \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d { "unit_dns_id" : "" }'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"unit_dns_id" : ""});
 *
 *    var http = new XMLHttpRequest();
 *    http.open("DELETE", "https://mm.sch.gr/api/unit_dns");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    http.setRequestHeader("Authorization", "Basic " + btoa('username' + ':' + 'password') );
 *
 *    http.onreadystatechange = function()
 *    {
 *        if(http.readyState == 4 && http.status == 200)
 *        {
 *            var result = JSON.parse(http.responseText);
 *            document.write(result.status + " : " + result.message);
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
 * <a id="PHP"></a>Παράδειγμα κλήσης της μεθόδου με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 *
 * $params = array("unit_dns_id" => "");
 *
 * $curl = curl_init("https://mm.sch.gr/api/unit_dns");
 *
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
 * curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 * curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 *
 * $data = curl_exec($curl);
 * $data = json_decode($data);
 * echo "<pre>"; var_dump( $data ); echo "</pre>";
 * ?>
 * </code>
 * <br>
 *
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'PUT',
 *        url: 'https://mm.sch.gr/api/unit_dns',
 *        dataType: "json",
 *        data: {
 *        "unit_dns_id" :
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
 * <br><b>Πίνακας Δεδομένων</b>
 * <br><a id="data"></a>Παρακάτω εμφανίζεται πίνακας σε μορφή JSON :
 * <code>
 * {
 *   "method": "DeleteUnitDns",
 *   "unit_dns_id": ,
 *   "status": 200,
 *   "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 * @param integer unit_dns_id <b><i>DNS Μονάδας</i></b>
 * <br>Ο Κωδικός του DNS Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>DNS Μονάδας : {@see GetUnitDns}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του DNS Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>unit_dns_id</b> : Ο Κωδικός του DNS Μονάδας που διαγράφηκε
 *
 *
 *
 *
 * @throws Unauthorized {@see ExceptionMessages::Unauthorized}
 * <br>{@see ExceptionCodes::Unauthorized}
 * <br>Έλεγχος αν ο χρήστης υπάρχει και έχει δικαιώματα να χρησιμοποιείσει τη μέθοδο
 *
 * @throws MissingUnitDnsIDValue {@see ExceptionMessages::MissingUnitDnsIDValue}
 * <br>{@see ExceptionCodes::MissingUnitDnsIDValue}
 * <br>Ο Κωδικός του DNS της Μονάδας της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitDnsIDArray {@see ExceptionMessages::InvalidUnitDnsIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitDnsIDArray}
 * <br>Ο Κωδικός του DNS της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitDnsValue {@see ExceptionMessages::InvalidUnitDnsValue}
 * <br>{@see ExceptionCodes::InvalidUnitDnsValue}
 * <br>Το DNS της Μονάδας δεν υπάρχει στο λεξικό
 *
 * @throws InvalidUnitDnsIDType {@see ExceptionMessages::InvalidUnitDnsIDType}
 * <br>{@see ExceptionCodes::InvalidUnitDnsIDType}
 * <br>Ο Κωδικός του DNS της Μονάδας πρέπει να είναι αριθμητικός
 *
 * @throws MissingUnitDnsIDParam {@see ExceptionMessages::MissingUnitDnsIDParam}
 * <br>{@see ExceptionCodes::MissingUnitDnsIDParam}
 * <br>Ο Κωδικός του DNS της Μονάδας είναι υποχρεωτικό πεδίο
 *
 *
 */

function DeleteUnitDns( $unit_dns_id ) {
    
    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"] = $params;
    
    try {
           
        //$unit_type_id========================================================= 
        $fUnitDnsId = CRUDUtils::checkIDParam('unit_dns_id', $params, $unit_dns_id, 'UnitDnsID');

//controls======================================================================          
        
        //check duplicates and unique row=======================================        
        $check = $entityManager->getRepository('UnitDns')->findBy(array( 'unitDnsId' => $fUnitDnsId ));
        $count= count($check);
 
        if ($count == 1)
            $UnitDns = $entityManager->find('UnitDns', $fUnitDnsId);
        else if ($count == 0)
            throw new Exception(ExceptionMessages::NotFoundDelUnitDnsValue." : ".$fUnitDnsId, ExceptionCodes::NotFoundDelUnitDnsValue);
        else 
            throw new Exception(ExceptionMessages::DuplicateDelUnitDnsValue." : ".$fUnitDnsId, ExceptionCodes::DuplicateDelUnitDnsValue);        

//delete from db================================================================
        $entityManager->remove($UnitDns);
        $entityManager->flush($UnitDns);
           
//result_messages=============================================================== 
        $result["unit_dns_id"] = $fUnitDnsId;
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
    
    return $result;
} 

?>