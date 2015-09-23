<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **Αναζήτηση Ldap Attributes**
 *
 * Η συνάρτηση αυτή επιστρέφει Ldap Attributes , μέσω web-service από το Ldap Server, σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **ldaps** :
 * <br>https://mm.sch.gr/api/ldaps
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
 * {  "data": {
 *     "accountstatus": [``],
 *     "description": [``],
 *     "dn": ``,
 *     "gsnregistrycode": [``],
 *     "gsnunitcode": [``],
 *     "ou": [``]
 *    }
 * }
 * </code>
 * 
 *
 * @param integer $mm_id Μονάδα
 * <br>
 * <br>Ο Κωδικός MM της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας.
 *          <br>Σε περίπτωση που δεν βρεθεί μονάδα με το κωδικό $mm_id που δώθηκε από τον χρήστη επιστρέφεται 
 *              { "data": {
 *                          not_foundby_ldap": [``]
 *                        }
 *              }
 *       </li>
 *    </ul>
 * 
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>data</b> : Ο Πίνακας με τα δεδομένα
 *  <ul>
 *    <li>string : <b>accountstatus</b> : Η λειτουργική Κατάσταση της Μονάδας</li>
 *    <li>string : <b>description</b> : Το όνομα της Μονάδας</li>
 *    <li>string : <b>dn</b> : Το ldap dn της Μονάδας</li>
 *    <li>string : <b>gsnregistrycode</b> : Ο Κωδικός MM της Μονάδας</li>
 *    <li>string : <b>gsnunitcode</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *    <li>string : <b>ou</b> : Το ldap ou της Μονάδας</li>
 *  </ul>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>total_by_user</b> : Το πλήθος των Μονάδων που καταχώρησε ο χρήστης προς αναζήτηση
 * <br>integer : <b>total_by_ldap</b> : Το πλήθος των Μονάδων που βρέθηκαν στον Ldap Server
 * <br>integer : <b>not_foundby_ldap</b> : Οι Μονάδες που δεν βρέθηκαν στον Ldap Server
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
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function GetLdaps( $mm_id ) {
    
    global  $app, $syncLdapOptions;
    $result = array();
    $found_dn = array();
    
    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
   
    try {

        //$mm_id================================================================
        $mm_ids = Validator::toArray($mm_id);
        $result["total_by_user"] = count($mm_ids);
        
        if  ($result["total_by_user"] > Parameters::MaxLdapPageSize)
            throw new Exception(ExceptionMessages:: InvalidMaxLdapPageNumber, ExceptionCodes::InvalidMaxLdapPageNumber);
            
        foreach ($mm_ids as $mm_id) {
            $fMMID = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');
            $filter .= '(gsnRegistryCode='.$fMMID.')';
        }
        
        // ldap queries=========================================================
        $filter = '(|'.$filter.')' ;
        $ldap = new \Zend\Ldap\Ldap($syncLdapOptions);
        
        $lresult = $ldap->search($filter, 'dc=sch,dc=gr', \Zend\Ldap\Ldap::SEARCH_SCOPE_SUB);
        $rows = iterator_to_array($lresult);

        foreach ($rows as $row)
        {
            $result["data"][] = array(      
            'accountstatus' => $row['accountstatus'],
//            'accountstatus;lang-en' => $row['accountstatus;lang-en'],
//            'businesscategory' => $row['businesscategory'],
//            'businesscategory;lang-en' => $row['businesscategory;lang-en'],
//            'cn' => $row['cn'],
            'description' => $row['description'],
//            'description;lang-en' => $row['description;lang-en'],
            'dn' => $row['dn'],
//            'facsimiletelephonenumber' => $row['facsimiletelephonenumber'],
            'gsnregistrycode' => $row['gsnregistrycode'],
            'gsnunitcode' => $row['gsnunitcode'],
//            'l' => $row['l'],
//            'l;lang-en' => $row['l;lang-en'],
//            'labeleduri' => $row['labeleduri'],
//            'memberurl' => $row['memberurl'],
//            'objectclass' => $row['objectclass'],
            'ou' => $row['ou'],
//            'ou;lang-en' => $row['ou;lang-en'],
//            'postaladdress' => $row['postaladdress'],
//            'postaladdress;lang-en' => $row['postaladdress;lang-en'],
//            'postalcode' => $row['postalcode'],
//            'telephonenumber' => $row['telephonenumber'],
//            'title' => $row['title'],
//            'title;lang-en' => $row['title;lang-en'],
//            'umdobject' => $row['umdobject']
            );
            array_push($found_dn, $row["gsnregistrycode"][0]) ;
        }
             
        $ldap_count =  $lresult->count();
        $result["total_by_ldap"] = $ldap_count;
        $result_diff = array_diff($mm_ids, $found_dn);
        $result["not_foundby_ldap"] = $result_diff;
        
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