<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Συσχετίσεις Μονάδων με Εργαζόμενους</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλές τις Συσχέτισεις των Μονάδων με του Εργαζόμενους σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/unit_workers
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Ονοματεπώνυμο του Εργαζομένου
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
 *    curl -X GET https://mm.sch.gr/api/unit_workers \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"unit": "1000002"}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "unit": "1000002" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/unit_workers");
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
 * $params = array("unit" => "1000002");
 * 
 * $curl = curl_init("https://mm.sch.gr/api/unit_workers");
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
 *        url: 'https://mm.sch.gr/api/unit_workers',
 *        dataType: "json",
 *        data: {'unit': '1000002'},
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
 * <a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα του λεξικού σε μορφή JSON :
 * <code>
 * {"data":[
 *  	{
 *  		"unit_worker_id": 1,
 *  		"mm_id": 1000017,
 *  		"unit_registry_no": "0500946",
 *  		"unit_name": "1ο ΕΣΠΕΡΙΝΟ ΓΥΜΝΑΣΙΟ ΚΟΡΥΔΑΛΛΟΥ",
 *  		"unit_special_name": "",
 *  		"worker_id": 1,
 *  		"worker_registry_no": "147027",
 *  		"tax_number": "023863096",
 *  		"lastname": "ΓΑΒΑΛΑΣ",
 *  		"firstname": "ΗΛΙΑΣ",
 *  		"fathername": "ΔΗΜΟΣ",
 *  		"sex": "Α",
 *  		"worker_specialization_id": null,
 *  		"worker_specialization": null,
 *  		"worker_position_id": 1,
 *  		"worker_position": "ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ",
 *              "source_id" : "0",
 *              "source" : "null"
 *  	},
 *  	{
 *  		"unit_worker_id": 2,
 *  		"mm_id": 1000019,
 *  		"unit_registry_no": "0501002",
 *  		"unit_name": "ΠΡΟΤΥΠΟ ΠΕΙΡΑΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ ΨΥΧΙΚΟ",
 *  		"unit_special_name": "ΒΑΡΒΑΚΕΙΟ ΠΡΟΤΥΠΟ ΠΕΙΡΑΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ",
 *  		"worker_id": 2,
 *  		"worker_registry_no": "154460",
 *  		"tax_number": "037432781",
 *  		"lastname": "ΜΩΡΑΙΤΗ",
 *  		"firstname": "ΜΑΡΙΑ",
 *  		"fathername": "ΑΝΕΣΤΗΣ",
 *  		"sex": "Γ",
 *  		"worker_specialization_id": null,
 *  		"worker_specialization": null,
 *  		"worker_position_id": 1,
 *  		"worker_position": "ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ",
 *              "source_id" : "0",
 *              "source" : "null"
 *  	},
 *  	{
 *  		"unit_worker_id": 3,
 *  		"mm_id": 1000021,
 *  		"unit_registry_no": "0501003",
 *  		"unit_name": "ΠΡΟΤΥΠΟ ΠΕΙΡΑΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ ΑΜΑΡΟΥΣΙΟ",
 *  		"unit_special_name": "ΑΝΑΒΡΥΤΩΝ",
 *  		"worker_id": 3,
 *  		"worker_registry_no": "138905",
 *  		"tax_number": "022235579",
 *  		"lastname": "ΓΕΛΑΔΑΚΗ",
 *  		"firstname": "ΣΟΦΙΑ",
 *  		"fathername": "ΙΩΑΝΝΗΣ",
 *  		"sex": "Γ",
 *  		"worker_specialization_id": null,
 *  		"worker_specialization": null,
 *  		"worker_position_id": 1,
 *  		"worker_position": "ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ",
 *              "source_id" : "0",
 *              "source" : "null"
 *  	},
 *  	{
 *  		"unit_worker_id": 4,
 *  		"mm_id": 1000023,
 *  		"unit_registry_no": "0501004",
 *  		"unit_name": "ΠΡΟΤΥΠΟ ΠΕΙΡΑΜΑΤΙΚΟ ΓΥΜΝΑΣΙΟ ΝΕΑ ΣΜΥΡΝΗ",
 *  		"unit_special_name": "ΕΥΑΓΓΕΛΙΚΗ ΣΧΟΛΗ ΣΜΥΡΝΗΣ",
 *  		"worker_id": 4,
 *  		"worker_registry_no": "189364",
 *  		"tax_number": "052195484",
 *  		"lastname": "ΛΙΝΑΡΔΟΣ",
 *  		"firstname": "ΝΙΚΟΛΑΟΣ",
 *  		"fathername": "ΒΑΣΙΛΕΙΟ",
 *  		"sex": "Α",
 *  		"worker_specialization_id": null,
 *  		"worker_specialization": null,
 *  		"worker_position_id": 1,
 *  		"worker_position": "ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ",
 *              "source_id" : "0",
 *              "source" : "null"
 *  	}
 * ]}
 * </code>
 * <br>
 *
 *
 *
 * @param mixed $unit Μονάδα
 * <br>Το Όνομα ή ο Κωδικός MM της Μονάδας
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
 *          <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *          θα αναζητηθεί η τιμή της παραμέτρου στο Όνομα της Μονάδας
 *          <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα της Μονάδας γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $worker Εργαζόμενος
 * <br>Το Ονοματεπώνυμο ή ο Κωδικός του Εργαζομένου
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Εργαζόμενοι : {@see GetWorkers}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Εργαζομένου
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Ονοματεπώνυμο του Εργαζομένου
 *          <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *          θα αναζητηθεί η τιμή της παραμέτρου στο Ονοματεπώνυμο του Εργαζομένου
 *          <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Ονοματεπώνυμο του Εργαζομένου γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $registry_no Αριθμός Μητρώου
 * <br>Ο Αριθμός Μητρώου του Εργαζομένου
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Αριθμός Μητρώου του Εργαζομένου
 *          <br>Η αναζήτηση στον Αριθμός Μητρώου γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με τον Αριθμός Μητρώου του Εργαζομένου
 *          <br>Η αναζήτηση στο Αριθμός Μητρώου γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $worker_position Θέση Εργασίας Εργαζομένου
 * <br>Το Όνομα ή ο Κωδικός της Θέσης Εργασίας του Εργαζομένου
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Λεξικό : {@see GetWorkerPositions}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Θέσης Εργασίας του Εργαζομένου
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Θέσης Εργασίας του Εργαζομένου
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $worker_specialization Ειδικότητα Εργαζομένου
 * <br>Το Όνομα ή ο Κωδικός της Ειδικότητας του Εργαζομένου
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Λεξικό : {@see GetWorkerSpecializations}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Ειδικότητας του Εργαζομένου
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Ειδικότητας του Εργαζομένου
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 * 
 * @param mixed $source Πρωτογενής Πηγή
 * <br>Το Όνομα ή ο Κωδικός της Πρωτογενής Πηγής του Εργαζομένου
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Λεξικό : Πρωτογενείς Πηγές Εργαζομενων {@see GetSources})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Πρωτογενής Πηγής του Εργαζομένου
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Πρωτογενής Πηγής του Εργαζομένου
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
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
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Ονοματεπώνυμο του Εργαζομένου
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
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Ονοματεπώνυμο (<a href="#$worker">$worker</a>) του Εργαζομένου
 * καθώς και Όνομα (<a href="#$unit">$unit</a>) της Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Ονοματεπώνυμο του Εργαζομένου και στο Όνομα της Μονάδας
 * γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Αν οι παράμετροι έχουν Αριθμητική Τιμή τότε η αναζήτηση γίνεται με τον Κωδικό με Τύπο {@see SearchEnumTypes::Exact}
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
 *   <li>integer : <b>unit_worker_id</b> : Ο Κωδικός της Συσχέτισης της Μονάδα με τον Εργαζόμενο </li>
 *   <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας (Μονάδες : {@see GetUnits})</li>
 *   <li>string : <b>unit_registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *   <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας</li>
 *   <li>string : <b>special_unit_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *   <li>integer : <b>worker_id</b> : Ο Κωδικός του Εργαζόμενου</li>
 *   <li>string : <b>worker_registry_no</b> : Ο Αριθμός Μητρώου του Εργαζόμενου</li>
 *   <li>string : <b>lastname</b> : Το Επώνυμο του Εργαζόμενου</li>
 *   <li>string : <b>firstname</b> : Το Όνομα του Εργαζόμενου</li>
 *   <li>string : <b>fathername</b> : Το Πατρώνυμο του Εργαζόμενου</li>
 *   <li>string : <b>fullname</b> : Το Ονοματεπώνυμο του Εργαζόμενου</li>
 *   <li>string : <b>sex</b> : Το Φύλο του Εργαζόμενου</li>
 *   <li>string : <b>tax_number</b> : Ο Αριθμός Φορολογικού Μητρώου του Εργαζόμενου</li>
 *   <li>integer : <b>worker_position_id</b> : Ο Κωδικός της Θέσης Εργασίας του Εργαζομένου</li>
 *   <li>string : <b>worker_position</b> : Η Θέση Εργασίας του Εργαζομένου (Λεξικό : {@see GetWorkerPositions})</li>
 *   <li>integer : <b>worker_specialization_id</b> : Ο Κωδικός της Ειδικότητας του Εργαζομένου</li>
 *   <li>string : <b>worker_specialization</b> : Η Ειδικότητα του Εργαζομένου (Λεξικό : {@see GetWorkerSpecializations})</li>
 *   <li>integer : <b>source_id</b> : Ο Κωδικός της Πρωτογενής Πηγής του Εργαζομένου</li>
 *   <li>string : <b>source</b> : Η Πρωτογενής Πηγή του Εργαζομένου (Λεξικό : {@see GetSources})</li>
 *  </ul>
 *
 *
 * 
 *  
 * @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}
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
 * @throws InvalidUnitType {@see ExceptionMessages::InvalidUnitType}
 * <br>{@see ExceptionCodes::InvalidUnitType}
 * <br>Η Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidWorkerType {@see ExceptionMessages::InvalidWorkerType}
 * <br>{@see ExceptionCodes::InvalidWorkerType}
 * <br>Ο Εργαζόμενος πρέπει να είναι αριθμητικός ή αλφαριθμητικός
 *
 * @throws InvalidWorkerRegistryNoType {@see ExceptionMessages::InvalidWorkerRegistryNoType}
 * <br>{@see ExceptionCodes::InvalidWorkerRegistryNoType}
 * <br>Ο Αριθμός Μητρώου του Εργαζομένου πρέπει να είναι αριθμητικός ή αλφαριθμητικός
 *
 * @throws InvalidWorkerPositionType {@see ExceptionMessages::InvalidWorkerPositionType}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionType}
 * <br>Η Θέση Εργασίας πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidWorkerSpecializationType {@see ExceptionMessages::InvalidWorkerSpecializationType}
 * <br>{@see ExceptionCodes::InvalidWorkerSpecializationType}
 * <br>Η Ειδικότητα Εργαζομένου πρέπει να είναι αριθμητική ή αλφαριθμητική
 * 
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * <br>{@see ExceptionCodes::InvalidSourceType}
 * <br>Η Πρωτογενής Πηγή του Εργαζομένου πρέπει να είναι αριθμητική ή αλφαριθμητική
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

function GetUnitWorkers( $unit, $worker, $worker_registry_no, $worker_position, $worker_specialization, $source,
                         $pagesize, $page, $orderby, $ordertype, $searchtype) {
     
    global $entityManager, $app, $db;

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
       $pagesize = Pagination::getPagesize($pagesize, $params);     
       $searchtype = Filters::getSearchType($searchtype, $params);
       $ordertype =  Filters::getOrderType($ordertype, $params);

//$orderby======================================================================
       $fullname =  $qb->addOrderBy('w.lastname', $ordertype)->addOrderBy('w.firstname', $ordertype);

       $columns = array(
                        "uw.workerId"                => "unit_worker_id",
                        "u.mmId"                     => "mm_id",
                        "u.registryNo"               => "registry_no",
                        "u.name"                     => "unit_name",
                        "u.specialName"              => "special_unit_name",
                        "w.workerId"                 => "worker_id",
                        "w.registryNo"               => "worker_registry_no",
                        "w.lastname"                 => "lastname",
                        "w.firstname"                => "firstname",
                        "w.fathername"               => "fathername",
                        "w.sex"                      => "sex",
                        "w.taxNumber"                => "tax_number",
                        "ws.workerSpecializationId"  => "worker_specialization_id",
                        "ws.name"                    => "worker_specialization",
                        "wp.workerPositionId"        => "worker_position_id",
                        "wp.name"                    => "worker_position",
                        "s.sourceId"                 => "source_id",
                        "s.name"                     => "source"
                       );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "fullname";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        } 
       
//$unit=========================================================================
        if (Validator::Exists('unit', $params)){
                CRUDUtils::setFilter($qb, $unit, "u", "mmId", "name", "null,id,value", ExceptionMessages::InvalidUnitType, ExceptionCodes::InvalidUnitType);
        }
   
//$worker=======================================================================
        if (Validator::Exists('worker', $params)){
            $param = Validator::toArray($worker);

            foreach ($param as $values)
            {
              $orx = $qb->expr()->orX();
              $andx = $qb->expr()->andX();

                if ( Validator::isNull($values) )
                     $andx->add($qb->expr()->isNull("w.workerId"));
                else if ( Validator::isID($values) )
                     $orx->add($qb->expr()->eq("w.workerId", $db->quote(Validator::toID($values))));
                else if ( Validator::IsValue($values) )
                {
                    if ( $searchtype == SearchEnumTypes::Exact )
                        $orx->add($qb->expr()->eq( $qb->expr()->concat('w.lastname', $qb->expr()->concat($qb->expr()->literal(' '), 'w.firstname')), $db->quote(Validator::toValue($values) )));         
                    else if ( $searchtype == SearchEnumTypes::Contain )
                        $orx->add($qb->expr()->like( $qb->expr()->concat('w.lastname', $qb->expr()->concat($qb->expr()->literal(' '), 'w.firstname')), $db->quote('%'.Validator::toValue($values).'%')));
                    else
                    {
                        $words = Validator::toArray($values, " ");

                        foreach ($words as $word)
                        {
                            switch ($searchtype)
                            {
                                case SearchEnumTypes::ContainAll :
                                    $andx->add($qb->expr()->like( $qb->expr()->concat('w.lastname', $qb->expr()->concat($qb->expr()->literal(' '), 'w.firstname')), $db->quote('%'.Validator::toValue($word).'%')));
                                    break;
                                case SearchEnumTypes::ContainAny :
                                    $orx->add($qb->expr()->like( $qb->expr()->concat('w.lastname', $qb->expr()->concat($qb->expr()->literal(' '), 'w.firstname')), $db->quote('%'.Validator::toValue($word).'%')));                                
                                    break;
                                case SearchEnumTypes::StartWith :
                                    $orx->add($qb->expr()->like( $qb->expr()->concat('w.lastname', $qb->expr()->concat($qb->expr()->literal(' '), 'w.firstname')), $db->quote(Validator::toValue($word).'%')));                                
                                    break;
                                case SearchEnumTypes::EndWith :
                                    $orx->add($qb->expr()->like( $qb->expr()->concat('w.lastname', $qb->expr()->concat($qb->expr()->literal(' '), 'w.firstname')), $db->quote('%'.Validator::toValue($word))));  
                                    break;
                            }
                        }
                    }
                }
                else
                    throw new Exception(InvalidWorkerType . " : " . $values, InvalidWorkerType);

                switch ($searchtype)
                {
                    case Validator::isID($values) :
                        $qb->orWhere($orx);
                        break;
                    case SearchEnumTypes::ContainAll :
                        $qb->andWhere($andx);
                        break;
                    default :
                        $qb->andWhere($orx);
                        break;
                }

            }
        }
  
//$worker_registry_no===========================================================
        if (Validator::Exists('worker_registry_no', $params)){
                CRUDUtils::setFilter($qb, $worker_registry_no, "w", "registryNo", "registryNo", "null,id,value", ExceptionMessages::InvalidWorkerRegistryNoType, ExceptionCodes::InvalidWorkerRegistryNoType);
        }
        
//$worker_position==============================================================
        if (Validator::Exists('worker_position', $params)){
             CRUDUtils::setFilter($qb, $worker_position, "wp", "workerPositionId", "name", "null,id,value", ExceptionMessages::InvalidWorkerPositionType, ExceptionCodes::InvalidWorkerPositionType);
        } 

//$worker_specialization========================================================
        if (Validator::Exists('worker_specialization', $params)){
             CRUDUtils::setFilter($qb, $worker_specialization, "ws", "workerSpecializationId", "name", "null,id,value", ExceptionMessages::InvalidWorkerSpecializationType, ExceptionCodes::InvalidWorkerSpecializationType);
        } 
        
//$source=======================================================================
        if (Validator::Exists('source', $params)){
             CRUDUtils::setFilter($qb, $source, "s", "sourceId", "name", "null,id,value", ExceptionMessages::InvalidUnitType, ExceptionCodes::InvalidUnitType);
        }

//execution=====================================================================
        $qb->select('uw');
        $qb->from('UnitWorkers','uw');
        $qb->leftjoin('uw.mm','u');
        $qb->leftjoin('uw.worker','w');
        $qb->leftjoin('uw.workerPosition','wp');
        $qb->leftjoin('w.workerSpecialization','ws');
        $qb->leftjoin('w.source','s');
        $orderby == 'fullname' ? $fullname : $qb->orderBy(array_search($orderby, $columns), $ordertype);

//pagination and results========================================================      
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $pagesize!==Parameters::AllPageSize ? $results->getQuery()->setMaxResults($pagesize) : null;
        
//data results==================================================================       
        $count = 0;
        foreach ($results as $row)
        {

            $result["data"][] = array(
                                        "unit_worker_id"            => $row->getUnitWorkerId(),
                                        "mm_id"                     => (int)$row->getMm()->getMmId(),
                                        "registry_no"               => $row->getMm()->getRegistryNo(),
                                        "unit_name"                 => $row->getMm()->getName(),
                                        "special_unit_name"         => $row->getMm()->getSpecialName(),
                                        "worker_id"                 => $row->getWorker()->getWorkerId(),
                                        "worker_registry_no"        => $row->getWorker()->getRegistryNo(),
                                        "lastname"                  => $row->getWorker()->getLastname(),
                                        "firstname"                 => $row->getWorker()->getFirstname(),
                                        "fullname"                  => $row->getWorker()->getLastname().' '.$row->getWorker()->getFirstname(),
                                        "fathername"                => $row->getWorker()->getFathername(),
                                        "sex"                       => $row->getWorker()->getSex(),
                                        "tax_number"                => $row->getWorker()->getTaxNumber(),
                                        "worker_position_id"        => Validator::IsNull($row->getWorkerPosition()) ? Validator::ToNull() : $row->getWorkerPosition()->getWorkerPositionId(),
                                        "worker_position"           => Validator::IsNull($row->getWorkerPosition()) ? Validator::ToNull() : $row->getWorkerPosition()->getName(),
                                        "worker_specialization_id"  => Validator::IsNull($row->getWorker()->getWorkerSpecialization()) ? Validator::ToNull() : $row->getWorker()->getWorkerSpecialization()->getWorkerSpecializationId(),
                                        "worker_specialization"     => Validator::IsNull($row->getWorker()->getWorkerSpecialization()) ? Validator::ToNull() : $row->getWorker()->getWorkerSpecialization()->getName(),
                                        "source_id"                 => Validator::IsNull($row->getWorker()->getSource()) ? Validator::ToNull() : $row->getWorker()->getSource()->getSourceId(),
                                        "source"                    => Validator::IsNull($row->getWorker()->getSource()) ? Validator::ToNull() : $row->getWorker()->getSource()->getName()
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