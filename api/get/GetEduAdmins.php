<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Λεξικό : Διευθύνσεις Εκπαίδευσης</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλες τις Διευθύνσεις Εκπαίδευσης σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/edu_admins
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Όνομα της Διεύθυνσης Εκπαίδευσης
 * <br>Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>)
 * μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης
 *
 *
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 * <br>Οι παράμετροι μπορούν να πάρουν τιμή "NULL" για να αναζητήσουν τις κενές εγγραφές στα αντίστοιχα πεδία
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
 * <br>Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που μπορεί
 * να προκύψουν κατά την κλήση της συνάρτησης
 * <br>Οι περιγραφές των Σφαλμάτων καθώς και οι Κωδικοί τους είναι διαθέσιμες μέσω του πίνακα
 * Μηνύματα Σφαλμάτων ({@see ExceptionMessages}) και Κωδικοί Σφαλμάτων ({@see ExceptionCodes}) αντίστοιχα
 *
 *
 * <br><b>Παραδείγματα Κλήσης</b>
 * <br>Παρακάτω εμφανίζεται μια σειρά από παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους :
 * <br><a href="#cURL">cURL</a> | <a href="#JavaScript">JavaScript</a> | <a href="#PHP">PHP</a> | <a href="#Ajax">Ajax</a>
 *
 *
 * <br>
 * 
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X GET https://mm.sch.gr/api/edu_admins \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"region_edu_admin": "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΑΝΑΤΟΛΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ ΚΑΙ ΘΡΑΚΗΣ"}' 
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "region_edu_admin": "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΑΝΑΤΟΛΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ ΚΑΙ ΘΡΑΚΗΣ" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/edu_admins");
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
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $params = array("region_edu_admin" => "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΑΝΑΤΟΛΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ ΚΑΙ ΘΡΑΚΗΣ");
 * 
 * $curl = curl_init("https://mm.sch.gr/api/edu_admins");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
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
 * 
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'GET',
 *        url: 'https://mm.sch.gr/api/edu_admins',
 *        dataType: "json",
 *        data:{'region_edu_admin': 'ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΑΝΑΤΟΛΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ ΚΑΙ ΘΡΑΚΗΣ'},
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
 * {"data":[
 *          {
 *           "edu_admin_id": 38,
 *           "name": "ΔΙΕΥΘΥΝΣΗ Π.Ε. ΔΡΑΜΑΣ",
 *           "parent_rdn": "dra",
 *           "third_level_dns": "dra",
 *           "region_edu_admin_id": 12,
 *           "region_edu_admin_name": "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΑΝΑΤΟΛΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ ΚΑΙ ΘΡΑΚΗΣ",
 *           "implementation_entity_id": 2,
 *           "implementation_entity": "ΔΗΜΟΚΡΙΤΕΙΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΘΡΑΚΗΣ",
 *           "implementation_entity_initials": "Δ.Π.Θ."
 *          },
 *          {
 *           "edu_admin_id": 44,
 *           "name": "ΔΙΕΥΘΥΝΣΗ Π.Ε. ΚΑΒΑΛΑΣ",
 *           "parent_rdn": "kav",
 *           "third_level_dns": "kav",
 *           "region_edu_admin_id": 12,
 *           "region_edu_admin_name": "ΠΕΡΙΦΕΡΕΙΑΚΗ ΔΙΕΥΘΥΝΣΗ ΑΝΑΤΟΛΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ ΚΑΙ ΘΡΑΚΗΣ",
 *           "implementation_entity_id": 2,
 *           "implementation_entity": "ΔΗΜΟΚΡΙΤΕΙΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΘΡΑΚΗΣ",
 *           "implementation_entity_initials": "Δ.Π.Θ."
 *         }
 * ]}
 * </code>
 * <br>
 * 
 * 
 * 
 * @param mixed $edu_admin Διεύθυνση Εκπαίδευσης
 * <br>Το Όνομα ή ο Κωδικός της Διευθύνσης Εκπαίδευσης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Διευθύνσης Εκπαίδευσης
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Διευθύνσης Εκπαίδευσης
 *          <br>Η αναζήτηση στο Όνομα της Διευθύνσης Εκπαίδευσης γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 * 
 * @param mixed $region_edu_admin Περιφέρεια
 * <br>Το Όνομα ή ο Κωδικός της Περιφέρειας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Λεξικό : {@see GetRegionEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Περιφέρειας
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Περιφέρειας
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $implementation_entity Φορέας Υλοποίησης
 * <br>Το Όνομα ή ο Κωδικός του Φορέα Υλοποίησης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Λεξικό : {@see GetImplementationEntities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Φορέα Υλοποίησης
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Φορέα Υλοποίησης
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 * @param string $parent_rdn Parent RDN
 * <br>Το Parent RDN της Διευθύνσης Εκπαίδευσης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το parent rdn)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $third_level_dns Third Level Dns
 * <br>Το Third Level Dns της Διευθύνσης Εκπαίδευσης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το third level dns</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 *
 * @param integer $pagesize Αριθμός Εγγραφών/Σελίδα
 * <br>Ο αριθμός των εγγραφών που θα επιστρέψουν ανα σελίδα
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφούν όλες οι εγγραφές ({@see Parameters::AllPageSize})
 * <br>Λίστα Παραμέτρων Σελιδοποίησης : {@see Parameters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *       </li>
 *    </ul>
 *
 *
 * @param integer $page Αριθμός Σελίδας
 * <br>Ο αριθμός της σελίδας με τις <a href="#$pagesize">$pagesize</a> εγγραφές που βρέθηκαν σύμφωμα με τις παραμέτρους
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφεί η πρώτη σελίδα
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *       </li>
 *    </ul>
 *
 *
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Όνομα (<a href="#$edu_admin">$edu_admin</a>) της Διευθύνσης Εκπαίδευσης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Αν το Όνομα έχει Αριθμητική Τιμή τότε η αναζήτηση γίνεται με τον Κωδικό της Διευθύνσης Εκπαίδευσης με Τύπο {@see SearchEnumTypes::Exact}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}
 *    </li>
 * </ul>
 * 
 * @param string $ordertype Τύπος Ταξινόμησης
 * <br>Ο Τύπος Ταξινόμησης με τον οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με Αύξουσα Σειρά ({@see OrderEnumTypes::ASC})
 * <br>Λίστα Τύπων Ταξινόμησης : {@see OrderEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *    <ul>
 *       <li>string
 *          <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see OrderEnumTypes}
 *       </li>
 *    </ul>
 *
 *
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Όνομα Διευθύνσης Εκπαίδευσης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *    <ul>
 *       <li>string
 *          <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι οποιοδήποτε πεδίο επιστρέφει η συνάρτηση στον πίνακα data
 *       </li>
 *    </ul>
 *
 *
 * 
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>array : <b>data</b> : Ο Πίνακας με το λεξικό
 * <ul>
 *      <li>integer : <b>edu_admin_id</b> : Ο Κωδικός της Διευθύνσης Εκπαίδευσης</li>
 *      <li>string : <b>edu_admin</b> : Το Όνομα της Διευθύνσης Εκπαίδευσης</li>
 *      <li>string : <b>parent_rdn</b> : Το Parent Rdn της Διευθύνσης Εκπαίδευσης</li>
 *      <li>string : <b>third_level_dns</b> : Το Third Level Dns της Διευθύνσης Εκπαίδευσης</li>
 *      <li>string : <b>region_edu_admin</b> : Ο Κωδικός της Περιφέρειας της Διεύθυνση Εκπαίδευσης</li>
 *      <li>string : <b>region_edu_admin</b> : Η Περιφέρεια της Διεύθυνση Εκπαίδευσης (Λεξικό : {@see GetRegionEduAdmins})</li>
 *      <li>string : <b>implementation_entity_id</b> : Ο Κωδικός του Φορέα Υλοποίησης που είναι υπεύθυνος για την Διευθύνση Εκπαίδευσης</li>
 *      <li>string : <b>implementation_entity</b> : Ο Φορέας Υλοποίησης που είναι υπεύθυνος για την Διευθύνση Εκπαίδευσης (Λεξικό : {@see GetImplementationEntities})</li>
 *      <li>string : <b>implementation_entity_initials</b> : Τα Αρχικά του Ονόματος του Φορέα Υλοποίησης</li>
 *  </ul>
 * 
 * 
 * 
 * @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}s
 * <br>{@see ExceptionCodes::InvalidSearchType}
 * <br>Ο Τύπος Αναζήτησης είναι λάθος
 *
 * @throws MissingPageValue {@see ExceptionMessages::MissingPageValue}
 * <br>{@see ExceptionCodes::MissingPageValue}
 * <br>Ο Αριθμός Σελίδας πρέπει να έχει τιμή
 *
 * @throws InvalidPageArray {@see ExceptionMessages::InvalidPageArray}
 * <br>{@see ExceptionCodes::InvalidPageArray}
 * <br>Ο Αριθμός Σελίδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidPageNumber {@see ExceptionMessages::InvalidPageNumber}
 * <br>{@see ExceptionCodes::InvalidPageNumber}
 * <br>Ο Αριθμός Σελίδας πρέπει να είναι μεγαλύτερος από 0
 *
 * @throws InvalidPageType {@see ExceptionMessages::InvalidPageType}
 * <br>{@see ExceptionCodes::InvalidPageType}
 * <br>Ο Αριθμός Σελίδας πρέπει να είναι αριθμητικός
 *
 * @throws MissingPageSizeValue {@see ExceptionMessages::MissingPageSizeValue}
 * <br>{@see ExceptionCodes::MissingPageSizeValue}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να έχει τιμή
 *
 * @throws InvalidPageSizeArray {@see ExceptionMessages::InvalidPageSizeArray}
 * <br>{@see ExceptionCodes::InvalidPageSizeArray}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidPageSizeNumber {@see ExceptionMessages::InvalidPageSizeNumber}
 * <br>{@see ExceptionCodes::InvalidPageSizeNumber}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι από 0 έως 500
 *
 * @throws InvalidPageSizeType {@see ExceptionMessages::InvalidPageSizeType}
 * <br>{@see ExceptionCodes::InvalidPageSizeType}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι αριθμητικός
 *
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * <br>{@see ExceptionCodes::InvalidEduAdminType}
 * <br>Η Διεύθυνση Εκπαίδευσης πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidEduAdminParentRdnType {@see ExceptionMessages::InvalidEduAdminParentRdnType}
 * <br>{@see ExceptionCodes::InvalidEduAdminParentRdnType}
 * <br>Το ParentRdn της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό
 * 
 * @throws InvalidEduAdminThirdLevelDnsType {@see ExceptionMessages::InvalidEduAdminThirdLevelDnsType}
 * <br>{@see ExceptionCodes::InvalidEduAdminThirdLevelDnsType}
 * <br>'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό
 * 
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminType}
 * <br>Η Περιφέρεια πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityType}
 * <br>Ο Φορέας Υλοποίησης πρέπει να είναι αριθμητικός ή αλφαριθμητικός
 *
 * @throws InvalidOrderType {@see ExceptionMessages::InvalidOrderType}
 * <br>{@see ExceptionCodes::InvalidOrderType}
 * <br>Ο Τύπος Ταξινόμησης πρέπει να είναι ASC ή DESC
 *
 * @throws InvalidOrderBy {@see ExceptionMessages::InvalidOrderBy}
 * <br>{@see ExceptionCodes::InvalidOrderBy}
 * <br>Το Πεδίο Ταξινόμησης πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση
 *
 *
 */

function GetEduAdmins( $edu_admin, $region_edu_admin, $implementation_entity, $parent_rdn, $third_level_dns,
                       $pagesize, $page, $searchtype, $ordertype, $orderby ) {
 
    global $entityManager, $app;

    $qb = $entityManager->createQueryBuilder();
    $result = array();  

    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    
    try {
        
//$page - $pagesize - $searchtype - $ordertype =================================
       $page = Pagination::getPage($page, $params);
       $pagesize = Pagination::getPagesize($pagesize, $params, true);     
       $searchtype = Filters::getSearchType($searchtype, $params);
       $ordertype =  Filters::getOrderType($ordertype, $params);
    
 //$orderby=====================================================================
       $columns = array(
                            "ea.eduAdminId"         => "edu_admin_id",
                            "ea.name"               => "name",
                            "ea.parentRdn"          => "parent_rdn",
                            "ea.thirdLevelDns"      => "third_level_dns",
                            "rea.regionEduAdminId"  => "region_edu_admin_id" ,
                            "rea.name"              => "region_edu_admin_name",
                            "ie.implementationEntityId"  => "implementation_entity_id" ,
                            "ie.name"                    => "implementation_entity_name"
                        );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "edu_admin_id";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        } 
        
//$edu_admin=================================================================
        if (Validator::Exists('edu_admin', $params)){
             CRUDUtils::setFilter($qb, $edu_admin, "ea", "eduAdminId", "name", "id,value", ExceptionMessages::InvalidEduAdminType, ExceptionCodes::InvalidEduAdminType);
        } 

//$parent_rdn===============================================================
        if (Validator::Exists('parent_rdn', $params)){
            CRUDUtils::setFilter($qb, $parent_rdn, "ea", "parentRdn", "parentRdn", "null,value", ExceptionMessages::InvalidEduAdminParentRdnType, ExceptionCodes::InvalidEduAdminParentRdnType);
        } 
        
 //$third_level_dns===============================================================
        if (Validator::Exists('third_level_dns', $params)){
            CRUDUtils::setFilter($qb, $third_level_dns, "ea", "thirdLevelDns", "thirdLevelDns", "null,value", ExceptionMessages::InvalidEduAdminThirdLevelDnsType, ExceptionCodes::InvalidEduAdminThirdLevelDnsType);
        }  
        
//$region_edu_admin=============================================================
        if (Validator::Exists('region_edu_admin', $params)){
            CRUDUtils::setFilter($qb, $region_edu_admin, "rea", "regionEduAdminId", "name", "id,value", ExceptionMessages::InvalidRegionEduAdminType, ExceptionCodes::InvalidRegionEduAdminType);
        }    
        
//$implementation_entity=============================================================
        if (Validator::Exists('implementation_entity', $params)){
            CRUDUtils::setFilter($qb, $implementation_entity, "ie", "implementationEntityId", "name", "null,id,value", ExceptionMessages::InvalidImplementationEntityType, ExceptionCodes::InvalidImplementationEntityType);
        }   
        
//execution=====================================================================
        $qb->select('ea');
        $qb->from('EduAdmins', 'ea');
        $qb->leftjoin('ea.regionEduAdmin', 'rea');
        $qb->leftjoin('ea.implementationEntity', 'ie');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);

//pagination and results========================================================      
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $pagesize!==Parameters::AllPageSize ? $results->getQuery()->setMaxResults($pagesize) : null;

//data results==================================================================       
        $count = 0;
        foreach ($results as $eduadmin)
        {

            $result["data"][] = array(
                                            "edu_admin_id"           => $eduadmin->getEduAdminId(),
                                            "edu_admin"              => $eduadmin->getName(),
                                            "parent_rdn"             => $eduadmin->getParentRdn(),
                                            "third_level_dns"        => $eduadmin->getThirdLevelDns(), 
                                            "region_edu_admin_id"    => Validator::IsNull($eduadmin->getRegionEduAdmin()) ? Validator::ToNull() : $eduadmin->getRegionEduAdmin()->getRegionEduAdminId(),
                                            "region_edu_admin_name"  => Validator::IsNull($eduadmin->getRegionEduAdmin()) ? Validator::ToNull() : $eduadmin->getRegionEduAdmin()->getName(),
                                            "implementation_entity_id"       => Validator::IsNull($eduadmin->getImplementationEntity()) ? Validator::ToNull() : $eduadmin->getImplementationEntity()->getImplementationEntityId(),
                                            "implementation_entity"          => Validator::IsNull($eduadmin->getImplementationEntity()) ? Validator::ToNull() : $eduadmin->getImplementationEntity()->getName(),
                                            "implementation_entity_initials" => Validator::IsNull($eduadmin->getImplementationEntity()) ? Validator::ToNull() : $eduadmin->getImplementationEntity()->getInitials()
                                     );
            $count++;
        }
        $result["count"] = $count;
   
//pagination results============================================================     
        $maxPage = Pagination::getMaxPage($result["total"],$page,$pagesize);
        $pagination = array( "page" => $page,   
                             "maxPage" => $maxPage, 
                             "pagesize" => $pagesize 
                            );    
        $result["pagination"]=$pagination;
        
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 
    
//debug=========================================================================
   if ( Validator::IsTrue( $params["debug"]  ) )
   {
        $result["DQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getDQL()));
        $result["SQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getQuery()->getSQL()));
   }
    
    return $result;
    
}

?>