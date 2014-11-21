<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Λεξικό : Περιοχές Μετάθεσης</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλα τις Περιοχές Μετάθεσης σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/transfer_areas
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Όνομα της Περιοχής Μετάθεσης
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
 *    curl -X GET https://mm.sch.gr/api/transfer_areas \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"region_edu_admin": "ΑΤΤΙΚΗΣ"}' 
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "region_edu_admin": "ΑΤΤΙΚΗΣ" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/transfer_areas");
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
 * $params = array("region_edu_admin" => "ΑΤΤΙΚΗΣ");
 * 
 * $curl = curl_init("https://mm.sch.gr/api/transfer_areas");
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
 * 
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'GET',
 *        url: 'https://mm.sch.gr/api/transfer_areas',
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
 * <br><a id="data"></a>Παρακάτω εμφανίζεται το λεξικό σε μορφή JSON :
 * <code>
 * {data":[
 * 	{
 *  		"transfer_area_id": 6,
 *  		"transfer_area": "Α ΑΘΗΝΑΣ",
 *  		"edu_admin_id": 8,
 *  		"edu_admin": "ΔΙΕΥΘΥΝΣΗ Α ΑΘΗΝΑΣ",
 *  		"region_edu_admin_id": 3,
 *  		"region_edu_admin": "ΑΤΤΙΚΗΣ"
 *  	},
 *  	{
 *  		"transfer_area_id": 8,
 *  		"transfer_area": "Α ΑΝΑΤ. ΑΤΤΙΚΗΣ",
 *  		"edu_admin_id": 9,
 *  		"edu_admin": "ΔΙΕΥΘΥΝΣΗ ΑΝΑΤΟΛΙΚΗΣ ΑΤΤΙΚΗΣ",
 *  		"region_edu_admin_id": 3,
 *  		"region_edu_admin": "ΑΤΤΙΚΗΣ"
 *  	},
 *  	{
 *  		"transfer_area_id": 9,
 *  		"transfer_area": "Α ΔΩΔΕΚΑΝΗΣΟΥ",
 *  		"edu_admin_id": 12,
 *  		"edu_admin": "ΔΙΕΥΘΥΝΣΗ ΔΩΔΕΚΑΝΗΣΟΥ",
 *  		"region_edu_admin_id": 4,
 *  		"region_edu_admin": "ΝΟΤΙΟΥ ΑΙΓΑΙΟΥ"
 *  	},
 *  	{
 *  		"transfer_area_id": 14,
 *  		"transfer_area": "Α ΕΥΒΟΙΑΣ",
 *  		"edu_admin_id": 14,
 *  		"edu_admin": "ΔΙΕΥΘΥΝΣΗ ΕΥΒΟΙΑΣ",
 *  		"region_edu_admin_id": 5,
 *  		"region_edu_admin": "ΣΤΕΡΕΑΣ ΕΛΛΑΔΑΣ"
 *  	},
 *  	{
 *  		"transfer_area_id": 17,
 *  		"transfer_area": "Α ΘΕΣΣΑΛΟΝΙΚΗΣ",
 *  		"edu_admin_id": 18,
 *  		"edu_admin": "ΔΙΕΥΘΥΝΣΗ Α ΘΕΣΣΑΛΟΝΙΚΗΣ",
 *  		"region_edu_admin_id": 6,
 *  		"region_edu_admin": "ΚΕΝΤΡΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ"
 *  	}
 * ]}
 * </code>
 * <br>
 *  
 * 
 * 
 * 
 * @param mixed $transfer_area Περιοχή Μετάθεσης
 * <br>Το Όνομα ή ο Κωδικός της Περιοχής Μετάθεσης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Περιοχής Μετάθεσης
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Περιοχής Μετάθεσης
 *          <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *          θα αναζητηθεί η τιμή της παραμέτρου στο Όνομα της Περιοχής Μετάθεσης
 *          <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα της Περιοχής Μετάθεσης γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $edu_admin Διεύθυνση Επκαίδευσης
 * <br>Το Όνομα ή ο Κωδικός της Διευθύνσης Επκαίδευσης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Λεξικό : {@see GetEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Διευθύνσης Επκαίδευσης
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Διευθύνσης Επκαίδευσης
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
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
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Όνομα της Περιοχής Μετάθεσης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *    <ul>
 *       <li>string
 *          <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι οποιοδήποτε πεδίο επιστρέφει η συνάρτηση στον πίνακα data
 *       </li>
 *    </ul>
 *
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
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Όνομα (<a href="#$transfer_area">$transfer_area</a>) της Περιοχής Μετάθεσης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Αν το Όνομα έχει Αριθμητική Τιμή τότε η αναζήτηση γίνεται με τον Κωδικό της Περιοχής Μετάθεσης με Τύπο {@see SearchEnumTypes::Exact}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}
 *    </li>
 * </ul>
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
 *      <li>integer : <b>transfer_area_id</b> : Ο Κωδικός της Περιοχής Μετάθεσης</li>
 *      <li>string : <b>transfer_area</b> : Το Όνομα της Περιοχής Μετάθεσης</li>
 *      <li>integer : <b>edu_admin_id</b> : Ο Κωδικός της Διευθύνσης Επκαίδευσης</li>
 *      <li>string : <b>edu_admin</b> : Το Όνομα της Διευθύνσης Επκαίδευσης (Λεξικό : {@see GetEduAdmins})</li>
 *      <li>string : <b>region_edu_admin</b> : Ο Κωδικός της Περιφέρειας </li>
 *      <li>string : <b>region_edu_admin</b> : Το Όνομα της Περιφέρειας (Λεξικό : {@see GetRegionEduAdmins})</li>
 *  </ul>
 *
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
 * @throws InvalidTransferAreaType {@see ExceptionMessages::InvalidTransferAreaType}
 * <br>{@see ExceptionCodes::InvalidTransferAreaType}
 * <br>Η Περιοχή Μετάθεσης πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * <br>{@see ExceptionCodes::InvalidEduAdminType}
 * <br>Η Διεύθυνση Εκπαίδευσης πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminType}
 * <br>Η Περιφέρεια πρέπει να είναι αριθμητική ή αλφαριθμητική
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


function GetTransferAreas(
    $transfer_area, $edu_admin, $region_edu_admin,
    $pagesize, $page, $orderby, $ordertype, $searchtype
)
{
    global $db;

    $filter = array();
    $result = array();

    $result["data"] = array();

    $result["method"] = __FUNCTION__;

    $params = loadParameters();

    try
    {
//======================================================================================================================
//= Paging
//======================================================================================================================

        if ( Validator::Missing('searchtype', $params) )
            $searchtype = SearchEnumTypes::ContainAll ;
        else if ( SearchEnumTypes::isValidValue( $searchtype ) || SearchEnumTypes::isValidName( $searchtype ) )
            $searchtype = SearchEnumTypes::getValue($searchtype);
        else
            throw new Exception(ExceptionMessages::InvalidSearchType." : ".$searchtype, ExceptionCodes::InvalidSearchType);

       $page = Pagination::getPage($page, $params);
       $pagesize = Pagination::getPagesize($pagesize, $params, true);   

//======================================================================================================================
//= $edu_admin
//======================================================================================================================

        if ( Validator::Exists('transfer_area', $params) )
        {
            $table_name = "transfer_areas";
            $table_column_id = "transfer_area_id";
            $table_column_name = "name";

            $param = Validator::toArray($transfer_area);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                {
                    if ( $searchtype == SearchEnumTypes::Exact )
                        $paramWordsFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                    else if ( $searchtype == SearchEnumTypes::Contain )
                        $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($values).'%' );
                    else
                    {
                        $words = Validator::toArray($values, " ");

                        foreach ($words as $word)
                        {
                            switch ($searchtype)
                            {
                                case SearchEnumTypes::ContainAll :
                                case SearchEnumTypes::ContainAny :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($word).'%' );
                                    break;
                                case SearchEnumTypes::StartWith :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( Validator::toValue($word).'%' );
                                    break;
                                case SearchEnumTypes::EndWith :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($word) );
                                    break;
                            }
                        }
                    }
                }
                else
                    throw new Exception(ExceptionMessages::InvalidTransferAreaType." : ".$values, ExceptionCodes::InvalidTransferAreaType);

                switch ($searchtype)
                {
                    case SearchEnumTypes::ContainAny :
                        $paramFilters[] = "(" . implode(" OR ", $paramWordsFilters) . ")";
                        break;
                    default :
                        $paramFilters[] = "(" . implode(" AND ", $paramWordsFilters) . ")";
                        break;
                }

            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $edu_admin
//======================================================================================================================

        if ( Validator::Exists('edu_admin', $params) )
        {
            $table_name = "edu_admins";
            $table_column_id = "edu_admin_id";
            $table_column_name = "name";

            $param = Validator::toArray($edu_admin);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidRegionEduAdminType." : ".$values, ExceptionCodes::InvalidRegionEduAdminType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $region_edu_admin
//======================================================================================================================

        if ( Validator::Exists('region_edu_admin', $params) )
        {
            $table_name = "region_edu_admins";
            $table_column_id = "region_edu_admin_id";
            $table_column_name = "name";

            $param = Validator::toArray($region_edu_admin);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidRegionEduAdminType." : ".$values, ExceptionCodes::InvalidRegionEduAdminType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $ordertype
//======================================================================================================================

        if ( Validator::Missing('ordertype', $params) )
            $ordertype = OrderEnumTypes::ASC ;
        else if ( OrderEnumTypes::isValidValue( $ordertype ) || OrderEnumTypes::isValidName( $ordertype ) )
            $ordertype = OrderEnumTypes::getValue($ordertype);
        else
            throw new Exception(ExceptionMessages::InvalidOrderType." : ".$ordertype, ExceptionCodes::InvalidOrderType);

//======================================================================================================================
//= $orderby
//======================================================================================================================

        if ( Validator::Exists('orderby', $params) )
        {
            $columns = array(
                "transfer_area_id",
                "transfer_area",
                "edu_admin_id",
                "edu_admin",
                "region_edu_admin_id",
                "region_edu_admin"
            );

            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }
        else
            $orderby = "edu_admin";

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        $sqlSelect = "SELECT
                        transfer_areas.transfer_area_id,
                        transfer_areas.name as transfer_area,
                        edu_admins.edu_admin_id,
                        edu_admins.name as edu_admin,
                        region_edu_admins.region_edu_admin_id,
                        region_edu_admins.name as region_edu_admin
                     ";

        $sqlFrom   = "FROM transfer_areas
                      LEFT JOIN edu_admins ON transfer_areas.edu_admin_id = edu_admins.edu_admin_id
                      LEFT JOIN region_edu_admins ON edu_admins.region_edu_admin_id = region_edu_admins.region_edu_admin_id";


        $sqlWhere = (count($filter) > 0 ? " WHERE " . implode(" AND ", $filter) : "" );
        $sqlOrder = " ORDER BY ". $orderby ." ". $ordertype;
        $sqlLimit = ($page && $pagesize) ? " LIMIT ".(($page - 1) * $pagesize).", ".$pagesize : "";


        $sql = "SELECT count(*) as total " . $sqlFrom . $sqlWhere;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        $result["total"] = $rows["total"];


        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder . $sqlLimit;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result["count"] = $stmt->rowCount();

        foreach ($rows as $row)
        {
            $result["data"][] = array(
                "transfer_area_id"    => (int)$row["transfer_area_id"],
                "transfer_area"       => $row["transfer_area"],
                "edu_admin_id"        => $row["edu_admin_id"]? (int)$row["edu_admin_id"] : null,
                "edu_admin"           => $row["edu_admin"],
                "region_edu_admin_id" => $row["region_edu_admin_id"]? (int)$row["region_edu_admin_id"] : null,
                "region_edu_admin"    => $row["region_edu_admin"]
            );
        }

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