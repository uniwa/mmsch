<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Αναζήτηση Ldap Entries**
 *
 * Η συνάρτηση αυτή επιστρέφει Ldap Entries , μέσω web-service από το Ldap Server, σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **ldap_entries** :
 * <br>https://mm.sch.gr/api/ldap_entries
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
 *  "controller": "GetLdaps",
 *  "function": "ldap",
 *  "method": "GET",
 *  "total_by_user": ``,
 *  "total_by_ldap": ``,
 *  "not_foundby_ldap":``,
 *  "status": 200,
 *  "message": "[GET][ldap]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {  "data": {[
 *     "ldap_entry_cn": [``],
 *     "ldap_entry_uid": [``]
 *    ]}
 * }
 * </code>
 * 
 *
 * @param integer $mm_id Μονάδα
 * <br>
 * <br>Ο Κωδικός MM της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       </li>
 *    </ul>
 * 
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>data</b> : Ο Πίνακας με τα δεδομένα
 *  <ul>
 *    <li>string : <b>ldap_entry_cn</b> : LDAP Τύπος</li>
 *    <li>string : <b>ldap_entry_uid</b> : LDAP Λογαριασμός</li>
 *  </ul>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
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
 * @throws InvalidMaxLdapPageNumber {@see ExceptionMessages::InvalidMaxLdapPageNumber}
 * <br>{@see ExceptionCodes::InvalidMaxLdapPageNumber}
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
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
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