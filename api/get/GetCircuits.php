<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Τηλεπικοινωνιακά Κυκλώματα</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλα τα Τηλεπικοινωνιακά Κυκλώματα σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> http://mmsch.teiath.gr/api/circuits
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς τον Κωδικό ΜΜ της Μονάδας
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
 * <br>
 *
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X GET http://mmsch.teiath.gr/api/circuits \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"circuit_type": "ISDN ADSL"}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "circuit_type": "ISDN ADSL" });
 * 
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "http://mmsch.teiath.gr/api/circuits");
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
 *    $params = array("circuit_type" => "ISDN ADSL");
 * 
 *    $curl = curl_init("http://mmsch.teiath.gr/api/circuits");
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
 *        url: 'http://mmsch.teiath.gr/api/circuits',
 *        dataType: "json",
 *        data:{'circuit_type': 'ISDN ADSL'},
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
 *  	{
 *  		"circuit_id": 10382,
 *  		"phone_number": "2109373724",
 *  		"status": 1,
 *  		"paid_by_psd": 1,
 *  		"activated_date": "2000-03-09 16:07:00",
 *  		"updated_date": "2013-12-18 16:07:00",
 *  		"deactivated_date": null,
 *  		"bandwidth": "24576/1024Kbps",
 *  		"readspeed": null,
 *  		"mm_id": 1000023,
 *  		"registry_no": "0501004",
 *  		"unit_name": "ΠΡΟΤΥΠΟ ΠΕΙΡΑΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ ΝΕΑ ΣΜΥΡΝΗ",
 *  		"special_unit_name": "ΕΥΑΓΓΕΛΙΚΗ ΣΧΟΛΗ ΣΜΥΡΝΗΣ",
 *  		"circuit_type_id": 2,
 *  		"circuit_type": "aDSLoISDN"
 *  	},
 *  	{
 *  		"circuit_id": 8008,
 *  		"phone_number": "2102693119",
 *  		"status": 1,
 *  		"paid_by_psd": 1,
 *  		"activated_date": null,
 *  		"updated_date": "2013-12-13 20:06:00",
 *  		"deactivated_date": null,
 *  		"bandwidth": "24576/1024Kbps",
 *  		"readspeed": null,
 *  		"mm_id": 1000025,
 *  		"registry_no": "0501005",
 *  		"unit_name": "ΠΡΟΤΥΠΟ ΠΕΙΡΑΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ ΑΓ. ΑΝΑΡΓΥΡΩΝ",
 *  		"special_unit_name": null,
 *  		"circuit_type_id": 2,
 *  		"circuit_type": "aDSLoISDN"
 *  	},
 *  	{
 *  		"circuit_id": 6609,
 *  		"phone_number": "2103257309",
 *  		"status": 1,
 *  		"paid_by_psd": 1,
 *  		"activated_date": null,
 *  		"updated_date": "2013-12-13 19:49:00",
 *  		"deactivated_date": null,
 *  		"bandwidth": "24576/1024Kbps",
 *  		"readspeed": null,
 *  		"mm_id": 1000027,
 *  		"registry_no": "0501040",
 *  		"unit_name": "1ο ΠΡΟΤΥΠΟ ΠΕΙΡΑΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ ΑΘΗΝΑΣ",
 *  		"special_unit_name": null,
 *  		"circuit_type_id": 2,
 *  		"circuit_type": "aDSLoISDN"
 *  	},
 *  	{
 *  		"circuit_id": 7671,
 *  		"phone_number": "2105202994",
 *  		"status": 1,
 *  		"paid_by_psd": 1,
 *  		"activated_date": null,
 *  		"updated_date": "2013-12-13 20:02:00",
 *  		"deactivated_date": null,
 *  		"bandwidth": "24576/1024Kbps",
 *  		"readspeed": null,
 *  		"mm_id": 1000028,
 *  		"registry_no": "0501050",
 *  		"unit_name": "2ο ΔΙΑΠΟΛΙΤΙΣΜΙΚΟ ΓΥΜΝΑΣΙΟ ΑΘΗΝΩΝ",
 *  		"special_unit_name": "ΓΥΜΝΑΣΙΟ ΔΙΑΠΟΛΙΤΙΣΜΙΚΗΣ ΕΚΠΑΙΔΕΥΣΗΣ Α ΑΘΗΝΑΣ",
 *  		"circuit_type_id": 2,
 *  		"circuit_type": "aDSLoISDN"
 *  	},
 *  	{
 *  		"circuit_id": 8002,
 *  		"phone_number": "2105786127",
 *  		"status": 1,
 *  		"paid_by_psd": 1,
 *  		"activated_date": null,
 *  		"updated_date": "2013-12-13 20:06:00",
 *  		"deactivated_date": null,
 *  		"bandwidth": "24576/1024Kbps",
 *  		"readspeed": null,
 *  		"mm_id": 1000032,
 *  		"registry_no": "0501067",
 *  		"unit_name": "8ο ΗΜΕΡΗΣΙΟ ΓΥΜΝΑΣΙΟ ΙΛΙΟΥ",
 *  		"special_unit_name": null,
 *  		"circuit_type_id": 2,
 *  		"circuit_type": "aDSLoISDN"
 *  	}
 * ]}
 * </code>
 * <br>
 * 
 *  
 * 
 * @param mixed $circuit Τηλεπικοινωνιακό Κύκλωμα
 * <br>Ο Κωδικός και το Όνομα του Τηλεπικοινωνιακού Κυκλώματος
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|array[integer]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Τηλεπικοινωνιακού Κυκλώματος
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[integer]
 *       <br>Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 *
 *
 * @param mixed $circuit_type Τύπος Τηλεπικοινωνιακού Κυκλώματος
 * <br>Ο Κωδικός και το Όνομα του Τύπου Τηλεπικοινωνιακού Κυκλώματος
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Τύπου Τηλεπικοινωνιακού Κυκλώματος
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Τύπου Τηλεπικοινωνιακού Κυκλώματος
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $phone_number Αριθμός Τηλεπικοινωνιακού Κυκλώματος
 * <br>Ο Αριθμός του Τηλεπικοινωνιακού Κυκλώματος
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με τον Αριθμό του Τηλεπικοινωνιακού Κυκλώματος
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου στον Αριθμό του Τηλεπικοινωνιακού Κυκλώματος
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στον Αριθμό του Τηλεπικοινωνιακού Κυκλώματοςς γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 *
 *
 * @param mixed $unit Μονάδα
 * <br>Ο Κωδικός MM και το Όνομα της Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Μονάδας
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
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *    </li>
 * </ul>
 *
 *
 * @param integer $page Αριθμός Σελίδας
 * <br>Ο αριθμός της σελίδας με τις <a href="#$pagesize">$pagesize</a> εγγραφές που βρέθηκαν σύμφωμα με τις παραμέτρους
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφεί η πρώτη σελίδα
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *    </li>
 * </ul>
 *
 *
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι οποιοδήποτε πεδίο επιστρέφει η συνάρτηση στον πίνακα data
 *    </li>
 * </ul>
 *
 *
 * @param string $ordertype Τύπος Ταξινόμησης
 * <br>Ο Τύπος Ταξινόμησης με τον οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με Αύξουσα Σειρά ({@see OrderEnumTypes::ASC})
 * <br>Λίστα Τύπων Ταξινόμησης : {@see OrderEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see OrderEnumTypes}
 *    </li>
 * </ul>
 *
 *
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στον Αριθμό (<a href="#$phone_number">$phone_number</a>) του Τηλεπικοινωνιακού Κυκλώματος
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
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
@return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>array : <b>data</b> : Ο Πίνακας με το λεξικό
 * <ul>
 *    <li>integer : <b>circuit_id</b> : Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>string : <b>phone_number</b> : Ο Τηλεφωνικός Αριθμός του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>boolean : <b>status</b> : Ενεργό/Ανενεργό Τηλεπικοινωνιακό Κύκλωμα</li>
 *    <li>boolean : <b>paid_by_psd</b> : Χρηματοδοτείται από το Π.Σ.Δ.</li>
 *    <li>date : <b>activated_date</b> : Η Ημερομηνία Εγκατάστασης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>date : <b>updated_date</b> : Η Ημερομηνία Ενημέωσης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>date : <b>deactivated_date</b> : Η Ημερομηνία Απενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>string : <b>bandwidth</b> : Το Εύρως Ζώνης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>string : <b>readspeed</b> : Η Ταχύτητα του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας (Μονάδες : {@see GetUnits})</li>
 *    <li>string : <b>registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *    <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας</li>
 *    <li>string : <b>special_unit_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *    <li>integer : <b>circuit_type_id</b> : Ο Κωδικός του Τύπου του Τηλεπικοινωνιακού Κυκλώματος</li>
 *    <li>string : <b>circuit_type</b> : Ο Τύπος του Τηλεπικοινωνιακού Κυκλώματος (Λεξικό : {@see GetCircuitTypes})</li>
 * </ul>
 *
 * 
 * 
 *  @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}
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
 * @throws InvalidCircuitIDType {@see ExceptionMessages::InvalidCircuitIDType}
 * <br>{@see ExceptionCodes::InvalidCircuitIDType}
 * <br>Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός
 *
 * @throws InvalidCircuitTypeType {@see ExceptionMessages::InvalidCircuitTypeType}
 * <br>{@see ExceptionCodes::InvalidCircuitTypeType}
 * <br>Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός ή αλφαριθμητικός
 *
 * @throws InvalidCircuitPhoneNumberType {@see ExceptionMessages::InvalidCircuitPhoneNumberType}
 * <br>{@see ExceptionCodes::InvalidCircuitPhoneNumberType}
 * <br>Ο Αριθμός του Κυκλώματος πρέπει να είναι αριθμητικός ή αλφαριθμητικός
 *
 * @throws InvalidUnitType {@see ExceptionMessages::InvalidUnitType}
 * <br>{@see ExceptionCodes::InvalidUnitType}
 * <br>Η Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidOrderType {@see ExceptionMessages::InvalidOrderType}
 * <br>{@see ExceptionCodes::InvalidOrderType}
 * <br>Ο Τύπος Ταξινόμησης πρέπει να είναι ASC ή DESC
 *
 * @throws InvalidOrderBy {@see ExceptionMessages::InvalidOrderBy}
 * <br>{@see ExceptionCodes::InvalidOrderBy}
 * <br>Το Πεδίο Ταξινόμησης πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση
 *
 */

function GetCircuits(
    $circuit, $circuit_type, $phone_number, $unit,
    $pagesize, $page, $orderby, $ordertype, $searchtype
)
{
    global $db, $entityManager;

    $qb = $entityManager->createQueryBuilder();
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

        $page = getPage($page, $params);
        $pagesize = getPageSize($pagesize, $params);

//======================================================================================================================
//= $circuit
//======================================================================================================================

        if ( Validator::Exists('circuit', $params) )
        {
            $param = Validator::toArray($circuit);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("c.circuitId"));
                else if ( Validator::isID($values) )
                    $orx->add($qb->expr()->eq("c.circuitId", $db->quote(Validator::toID($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidCircuitIDType." : ".$values, ExceptionCodes::InvalidCircuitIDType);
            }
            $qb->andWhere($orx);
        }

//======================================================================================================================
//= $circuit_type
//======================================================================================================================

        if ( Validator::Exists('circuit_type', $params) )
        {
            $param = Validator::toArray($circuit_type);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($circuit_type) )
                    $orx->add($qb->expr()->isNull("c.circuitTypeId"));
                else if ( Validator::isID($circuit_type) )
                    $orx->add($qb->expr()->eq("ct.circuitTypeId", $db->quote(Validator::toID($circuit_type))));
                else if ( Validator::isValue($circuit_type) )
                    $orx->add($qb->expr()->eq("ct.name", $db->quote(Validator::toValue($circuit_type))));
                else
                    throw new Exception(ExceptionMessages::InvalidCircuitTypeType." : ".$circuit_type, ExceptionCodes::InvalidCircuitTypeType);
            }
            $qb->andWhere($orx);
        }

//======================================================================================================================
//= $phone_number
//======================================================================================================================

        if ( Validator::Exists('phone_number', $params) )
        {
            $param = Validator::toArray($phone_number);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) ) {
                    $qb->andWhere('c.phoneNumber IS NULL');
                } else if ( Validator::isValue($values) )
                {
                    if ( $searchtype == SearchEnumTypes::Contain )
                        $orx->add($qb->expr()->like("c.phoneNumber", $db->quote('%'.Validator::toValue($values).'%')));
                    else
                        $orx->add($qb->expr()->eq("c.phoneNumber", $db->quote(Validator::toValue($values))));
                }
                else
                    throw new Exception(ExceptionMessages::InvalidOrientationTypeType." : ".$values, ExceptionCodes::InvalidOrientationTypeType);
            }
            $qb->andWhere($orx);
        }

//======================================================================================================================
//= $unit
//======================================================================================================================

        if ( Validator::Exists('unit', $params) )
        {
            if ( Validator::isNull($unit) )
                $qb->andWhere('u.name IS NULL');
            else if ( Validator::isID($unit) ) {
                $qb->andWhere('u.mmId = :unit');
                $qb->setParameter('unit', Validator::toID($unit));
            } else if ( Validator::isValue($unit) ) {
                $qb->andWhere('u.name = :unit');
                $qb->setParameter('unit', Validator::toValue($unit));
            } else
                throw new Exception(ExceptionMessages::InvalidUnitType." : ".$unit, ExceptionCodes::InvalidUnitType);
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

        $columns = array(
            "c.circuitId" => "circuit_id",
            "c.phoneNumber" => "phone_number",
            "c.status" => "status" ,
            "c.activatedDate" => "activated_date",
            "c.updatedDate" => "updated_date",
            "c.deactivatedDate" => "deactivated_date",
            "c.paidByPsd" => "paid_by_psd",
            "c.bandwidth" => "bandwidth",
            "c.readspeed" => "readspeed",
            "u.mmId" => "mm_id",
            "u.registryId" => "registry_no",
            "u.name" => "unit_name",
            "u.specialName" => "special_unit_name",
            "ct.circuitTypeId" => "connectivity_type_id",
            "ct.name" => "connectivity_type",
        );
        if ( Validator::Missing('orderby', $params) )
            $orderby = "mm_id";
        else
        {
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        $qb->select('c');
        $qb->from('Circuits', 'c');
        $qb->join('c.mm', 'u'); // Unit
        $qb->join('c.circuitType', 'ct');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);

        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $results->getQuery()->setMaxResults($pagesize);
        $result["total"] = count($results);

        $count = 0;
        foreach ($results as $circuit)
        {
            $result["data"][] = array(
                "circuit_id"        => $circuit->getCircuitId(),
                "phone_number"      => $circuit->getPhoneNumber(),
                "status"            => $circuit->getStatus(),
                "paid_by_psd"       => $circuit->getPaidByPsd(),
                "updated_date"      => $circuit->getUpdatedDate()->format('Y-m-d H:i:s'),
                "deactivated_date"  => $circuit->getDeactivatedDate() instanceof \DateTime ? $circuit->getDeactivatedDate()->format('Y-m-d H:i:s') : null,
                "bandwidth"         => $circuit->getBandwidth(),
                "readspeed"         => $circuit->getReadspeed(),
                "mm_id"             => $circuit->getMm()->getMmId(),
                "registry_no"       => $circuit->getMm()->getRegistryNo(),
                "unit_name"         => $circuit->getMm()->getName(),
                "special_unit_name" => $circuit->getMm()->getSpecialName(),
                "circuit_type_id"   => $circuit->getCircuitType()->getCircuitTypeId(),
                "circuit_type"      => $circuit->getCircuitType()->getName(),
            );
            $count++;
        }
        $result["count"] = $count;

        $result["status"] = ExceptionCodes::NoErrors;;
        $result["message"] = ExceptionMessages::NoErrors;
    }
    catch (Exception $e)
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    }

    if ( Validator::isBoolean( $params["debug"] ) )
    {
        $result["sql"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getDQL()));
    }

    return $result;
}

?>