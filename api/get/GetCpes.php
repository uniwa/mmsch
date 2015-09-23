<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Αναζήτηση CPES**
 *
 * Η συνάρτηση αυτή επιστρέφει CPES Μονάδων , μέσω web-service από το Κτηματολόγιο, σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **cpes** :
 * <br>https://mm.sch.gr/api/cpes
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
 *  "controller": "GetCpes",
 *  "function": "cpes",
 *  "method": "GET",
 *  "total": ``,
 *  "count": ``,
 *  "status": 200,
 *  "message": "[GET][cpes]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"data": [{
 *              "cpe_id":``. 
 *              "cpe": ``,
 *              "mm_id": ``,
 *              "unit_name": ``,
 *              "registry_no": ``,
 *              "item_name": ``,
 *              "manufacturer": ``,
 *              "location": ``,
 *              "serial_number": ``
 *          }]
 * }
 * </code>
 * 
 *
 * @param integer $unit Μονάδα
 * <br>Ο Κωδικός MM της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας,
 *          <br>Μπορεί να δωθέι μέρος ή ολοκληρος ο Κωδικός ΜΜ.
 *          <br>Η αναζήτηση στο Κτηματολόγιο γίνεται στις εγγραφές που περιέχουν την τιμή του $unit.
 *          <br>Η πρόσβαση στο σύνολο των δεδομένων, μπορεί να γίνει από τον παρακάτω σύνδεσμο:
 *              http://inventory.sch.gr/creports/pub/results.html?id=14&gsn_registry_code=&
 *          <br>Υπάρχει η δυνατότητα έκδοσης αποτελεσμάτων σε csv και json, αλλάζοντας την κατάληξη html, όπως παρακάτω:
 *              http://inventory.sch.gr/creports/pub/results.csv?id=14&gsn_registry_code=&  
 *              http://inventory.sch.gr/creports/pub/results.json?id=14&gsn_registry_code=&
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
 */

function GetCpes( $unit ) {
    
    //temporary close connection with inventory-devel.sch.gr
    //return;
    
    global  $app;
    $result = array();

    
    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();

    try {

        //$unit=================================================================
        $fMMID = CRUDUtils::checkIDParam('unit', $params, $unit, 'UnitMMID');
        
        //execution=============================================================
        $curl = curl_init('http://inventory.sch.gr/creports/pub/results.json?id=14&gsn_registry_code='.$fMMID.'&');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 3); 
	$data = curl_exec($curl);
        $data = json_decode( $data, true );
        $rows = $data["flat_results"];
        $result["total"] = count($rows);
        $result["count"] = count($rows);

        foreach ($rows as $row)
        {
            $result["data"][] = array(
                "cpe_id"            => (int)$row["id"],
                "cpe"               => $row["item_template.description"],
                "mm_id"             => (int)$row["location.department.code_mm"],
                "unit_name"         => $row["location.department.name"],
                "registry_no"       => $row["location.department.code"],
                "item_name"         => $row["item_template.description"],
                "manufacturer"      => $row["item_template.manufacturer.name"],
                "location"          => $row["location.name"],
                "serial_number"     => $row["serial_number"],
            );
        }

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