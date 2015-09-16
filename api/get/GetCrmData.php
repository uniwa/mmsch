<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");


/** 
 * **Αναζήτηση CRM DATA**
 *
 * Η συνάρτηση αυτή επιστρέφει CRM DATA , μέσω web-service από το CRM, σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **crm_data** :
 * <br>https://mm.sch.gr/api/crm_data
 *
 *
 * ***Πίνακας Παραμέτρων***
 * * Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους μπορεί να γίνει η κλήση της συνάρτησης.
 * * Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί.
 * * Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά.
 * * Οι παράμετροι οι οποίοι έχουν το χαρακτηριστικό (Συνδυάζεται με την παράμετρο searchtype) σημαίνει ότι η συγκεκριμένη παράμετρος συνδυάζεται με την παράμετρο searchtype.
 * * Οι παράμετροι μπορούν να πάρουν τιμή "NULL" για να αναζητήσουν τις κενές εγγραφές στα αντίστοιχα πεδία
 *
 * ***Πίνακας Αποτελεσμάτων***
 * * Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση.
 * * Όλες οι μεταβλητές επιστρέφονται σε <a href="#model">JSON objects</a>.
 * * Η μεταβλητή <a href="#data">data</a> είναι ο πίνακας με τα δεδομένα.
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
 *  "data": [{}],
 *  "controller": "GetCrmData",
 *  "function": "crm_data",
 *  "method": "GET",
 *  "total": ``,
 *  "count": ``,
 *  "status": 200,
 *  "message": "[GET][crm_data]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {  "data": {
 *   "mmId": ``,
 *   "circuits": [{
 *                   "id": ``,
 *                   "linenumber": ``,
 *                   "type": ``,
 *                   "owner": ``,
 *                   "services": [{
 *                                   "id": ``,
 *                                   "type": ``,
 *                                   "owner": ``,
 *                                   "bandwidth": ``
 *                               }]
 *               }],
 *   "subnets": [ {"id": ``,
 *                 "type": "LAN",
 *                 "network": ``},
 *                {"id": ``,
 *                 "type": "ROUTER",
 *                 "network": ``},
 *                {"id": ``,
 *                 "type": "NAT",
 *                 "network": ``}
 *              ],
 *   "connections": [{
 *                       "id": ``,
 *                       "name": ``,
 *                       "subnets": [``,``,``],
 *                       "circuits": [``],
 *                       "devices": [],
 *                       "ldapEntries": []
 *                   }]
 * }
 * </code>
 * 
 *
 * @param integer $mm_id Μονάδα
 * <br>Ο Κωδικός MM της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας,
 *          <br>Μπορεί να δωθέι oλοκληρος ο Κωδικός ΜΜ.
 *          <br>Η αναζήτηση στο CRM γίνεται στις εγγραφές που περιέχουν ακριβώς την τιμή του $unit.
 *          <br>Σε περίπτωση που δεν βρεθεί μονάδα με το κωδικό $mm_id που δώθηκα επό τον χρήστη επιστρέφεται 
 *              <code>
 *              { "data": {
 *                          "message": "Page not found."
 *                        }
 *              }
 *              </code>
 *       </li>
 *    </ul>
 * 
 *
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>data</b> : Ο Πίνακας με τα δεδομένα
 *  <ul>
 *    <li>integer : <b>cpe_id</b> : Ο Κωδικός ID Κτηματολογίου του CPE</li>
 *    <li>string : <b>cpe</b> : Το Όνομα του CPE</li>
 *    <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ</li>
 *    <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας του CPE</li>
 *    <li>string : <b>registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας του CPE</li>
 *    <li>string : <b>item_name</b> : Το Όνομα του CPE</li>
 *    <li>string : <b>manufacturer</b> : Το Κατασκευαστής του CPE</li>
 *    <li>string : <b>location</b> : Η Τοποθεσία του CPE</li>
 *    <li>string : <b>serial_number</b> : Ο Σειριακός Κωδικός του CPE</li>
 *  </ul>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 * 
 * 
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 *  
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 *
 */

function GetCrmData( $mm_id ) {
    
    //temporary close connection with crm.sch.gr
    //return;
    
    global $app,$crmOptions;
    $result = array();
    
    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();

    try {

    //$mm_id====================================================================
    $fMMID = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');

    //execution crm api web service=============================================
        $curl = curl_init( $crmOptions['crmHOST'].$fMMID);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, $crmOptions['crmUSER'] . ":" . $crmOptions['crmPASS']);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3); 
	$data = curl_exec($curl);
        $data = json_decode( $data, true );
        $result["data"] = $data;
        
    //result_messages===========================================================   
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 
    return $result;
}

?>