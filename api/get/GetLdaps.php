<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Ldap Attributes</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει Ldap attributes μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/ldaps
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
 *    curl -X GET https://mm.sch.gr/api/ldaps \
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
 *    http.open("GET", "https://mm.sch.gr/api/ldaps");
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
 *    $curl = curl_init("https://mm.sch.gr/api/ldaps");
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
 *        url: 'https://mm.sch.gr/api/ldaps',
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
 * "data": [
 *   {
 *     "accountstatus": [
 *       "ΕΝΕΡΓΗ"
 *     ],
 *     "description": [
 *       "10ο ΓΥΜΝΑΣΙΟ ΙΛΙΟΥ"
 *     ],
 *     "dn": "ou=10gym-iliou,ou=att-g,ou=units,dc=sch,dc=gr",
 *     "gsnregistrycode": [
 *       "1000169"
 *     ],
 *     "gsnunitcode": [
 *       "0501659"
 *     ],
 *     "ou": [
 *       "10gym-iliou"
 *     ]
 *   },
 *   {
 *     "accountstatus": [
 *       "ΕΝΕΡΓΗ"
 *     ],
 *     "description": [
 *       "10ο ΓΥΜΝΑΣΙΟ ΠΕΡΙΣΤΕΡΙΟΥ"
 *     ],
 *     "dn": "ou=10gym-perist,ou=att-g,ou=units,dc=sch,dc=gr",
 *     "gsnregistrycode": [
 *       "1011718"
 *     ],
 *     "gsnunitcode": [
 *       "0501727"
 *     ],
 *     "ou": [
 *       "10gym-perist"
 *     ]
 *   }
 * ],
 * "controller": "GetLdaps",
 * "function": "ldaps",
 * "method": "GET",
 * "total_by_user": 2,
 * "total_by_ldap": 2,
 * "not_foundby_ldap": [],
 * "status": 200,
 * "message": "success"
 * </code>
 * <br>
 * 
 *  
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα</li>
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
 * <br>integer : <b>total_by_user</b> : Το πλήθος των μονάδων που καταχώρησε ο χρήστης
 * <br>integer : <b>total_by_ldap</b> : Το πλήθος των μονάδων που βρέθηκαν στον ldap
 * <br>array : <b>not_foundby_ldap</b> : Οι κωδικοί ΜΜ των Μονάδων που δεν βρέθηκαν στον ldap
 * <br>array : <b>data</b> : Ο Πίνακας με τα αποτελέσματα
 * <ul>
 *    <li>string : <b>accountstatus</b> : Η λειτουργική Κατάσταση της Μονάδας</li>
 *    <li>string : <b>description</b> : Το όνομα της Μονάδας</li>
 *    <li>string : <b>dn</b> : Το ldap dn της Μονάδας</li>
 *    <li>string : <b>gsnregistrycode</b> : Ο Κωδικός MM της Μονάδας</li>
 *    <li>string : <b>gsnunitcode</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *    <li>string : <b>ou</b> : Το ldap ou της Μονάδας</li>
 * </ul>
 * 
 * 
 * @throws InvalidMaxLdapPageNumber {@see ExceptionMessages::InvalidMaxLdapPageNumber}
 * <br>{@see ExceptionCodes::InvalidMaxLdapPageNumber}
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
        
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = ExceptionMessages::NoErrors;
    }
    catch (Exception $e)
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    }

    return $result;
}

?>