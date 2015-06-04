<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Ldap Entries</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει τα Ldap entries μιας μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/ldap_entries
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
 *
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X GET https://mm.sch.gr/api/ldap_entries \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/ldap_entries");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Authorization", "Basic " + btoa('username' + ':' + 'password') );
 *     
 *    http.onreadystatechange = function() 
 *    {
 *        if(http.readyState == 4 && http.status == 200) 
 *        {
 *            var result = JSON.parse(http.responseText);
 *            document.write(result.status + " : " + result.message + " : " + result.data);
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
 *    header("Content-Type: text/html; charset=utf-8");
 * 
 *    $curl = curl_init("https://mm.sch.gr/api/ldap_entries");
 * 
 *    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 *    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 *    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
 *    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 * 
 *    $data = curl_exec($curl);
 *    $data = json_decode($data);
 *    echo "<pre>"; var_dump( $data ); echo "</pre>";
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
 *        type: 'GET',
 *        url: 'https://mm.sch.gr/api/ldap_entries',
 *        dataType: "json",
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
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα του λεξικού σε μορφή JSON :
 * <code>
 *{
 *  "data": [
 *    {
 *      "ldap_entry_cn": "ΕΠΙΣΗΜΟΣ ΛΟΓΑΡΙΑΣΜΟΣ",
 *      "ldap_entry_uid": "10gymili"
 *    },
 *    {
 *      "ldap_entry_cn": "Dialup ",
 *      "ldap_entry_uid": "r-10gym-iliou"
 *    }
 *  ],
 *  "controller": "GetLdapEntries",
 *  "function": "ldap_entries",
 *  "method": "GET",
 *  "status": 200,
 *  "message": "[GET][ldap_entries]:success"
 *}
 * </code>
 * <br>
 * 
 *  
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *    </ul>
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>controller</b> : O controller της συνάρτησης
 * <br>string : <b>function</b> : H ονομασία κλήσης της συνάρτησης
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>array : <b>data</b> : Ο Πίνακας με τα αποτελέσματα
 * <ul>
 *    <li>string : <b>ldap_entry_cn</b> : LDAP Τύπος</li>
 *    <li>string : <b>ldap_entry_uid</b> : LDAP Λογαριασμός</li>
 * </ul>
 * 
 * 
 * @throws NotFoundLdapEntryMMIDValue {@see ExceptionMessages::NotFoundLdapEntryMMIDValue}
 * <br>{@see ExceptionCodes::NotFoundLdapEntryMMIDValue}
 *
 * @throws DuplicateLdapEntryMMIDValue {@see ExceptionMessages::DuplicateLdapEntryMMIDValue}
 * <br>{@see ExceptionCodes::DuplicateLdapEntryMMIDValue}
 * 
 * @throws NotFoundLdapEntryDnAttributeValue {@see ExceptionMessages::NotFoundLdapEntryDnAttributeValue}
 * <br>{@see ExceptionCodes::NotFoundLdapEntryDnAttributeValue}
 * 
 */

function GetLdapEntries( $mm_id ) {
    
    global  $app, $syncLdapOptions;
    $result = array();  
    
    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
   
    try {

        //$mm_id================================================================
        $fMMID = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');

        //ldap query found unit=================================================
        $ldap = new \Zend\Ldap\Ldap($syncLdapOptions);
        $lresult = $ldap->search('(gsnRegistryCode='.$fMMID.')', 'dc=sch,dc=gr', \Zend\Ldap\Ldap::SEARCH_SCOPE_SUB);

        if ($lresult->count() == 1){
            $ldap_gsnRegistryCode_found = true;
        }else if ($lresult->count() == 0) 
            throw new Exception(ExceptionMessages::NotFoundLdapEntryMMIDValue, ExceptionCodes::NotFoundLdapEntryMMIDValue); 
        else 
            throw new Exception(ExceptionMessages::DuplicateLdapEntryMMIDValue, ExceptionCodes::DuplicateLdapEntryMMIDValue);
        
        //check if unit has l attribute
        $rows = iterator_to_array($lresult);
        if (Validator::IsNull($rows[0]["dn"])) {
           throw new Exception(ExceptionMessages::NotFoundLdapEntryDnAttributeValue, ExceptionCodes::NotFoundLdapEntryDnAttributeValue);
        } else {
           $dn = $rows[0]["dn"];
        }
        
//        $result["data"][] = array ( "description" => $rows[0]["description"][0],
//                                    "gsnRegistryCode" => $rows[0]["gsnregistrycode"][0],
//                                    "dn" => $dn );
                
        //ldap query found entries==============================================
        $filter = '(&(l='.$dn.')(|(physicalDeliveryOfficeName=ΕΠΙΣΗΜΟΣ ΛΟΓΑΡΙΑΣΜΟΣ)(physicalDeliveryOfficeName;lang-en=EPISIMOS LOGARIASMOS)(UMDOBJECT=Router)(UMDOBJECT=ADSLaccount)))';
        $lresult = $ldap->search($filter, 'dc=sch,dc=gr', \Zend\Ldap\Ldap::SEARCH_SCOPE_SUB);
        $rows = iterator_to_array($lresult);

            $rows = array_map(function($prow) {
                                                $row = array();
                                                $row['cn'] = (($prow['physicaldeliveryofficename'][0] == 'ΕΠΙΣΗΜΟΣ ΛΟΓΑΡΙΑΣΜΟΣ') || ($prow['physicaldeliveryofficename;lang-en'][0] == 'EPISIMOS LOGARIASMOS' ))  ? 'ΕΠΙΣΗΜΟΣ ΛΟΓΑΡΙΑΣΜΟΣ' : $prow['cn'][0];
                                                $row['uid'] = $prow['uid'][0];
                                                return $row;
                                              }, $rows);

        foreach ($rows as $row)
        {
            $result["data"][] = array(
                    "ldap_entry_cn"           => $row["cn"],
                    "ldap_entry_uid"          => $row["uid"]
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