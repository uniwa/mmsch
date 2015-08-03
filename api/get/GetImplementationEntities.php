<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Λεξικό : Φορείς Υλοποίησης</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλους τους Φορείς Υλοποίησης σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/ip_masks
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Όνομα του Φορίς Υλοποίησης
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
 * Η συνάρτηση αυτή επιστρέφει  σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * <br>Τα αποτελέσματα είναι ταξινομημένα ως προς το όνομα
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/implementation_entities
 *
 * Στον πίνακα <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους μπορεί να γίνει η κλήση
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 *
 * Στον πίνακα <a href="#returns">Return value summary</a> εμφανίζετε οι μεταβλητές που επιστρέφει η συνάρτηση
 * <br>Όλες οι μεταβλητές επιστρέφονται σε ένα πίνακα σε JSON μορφή
 * <br>Η μεταβλητή data είναι ο πίνακας με το λεξικό
 *
 * Στον πίνακα <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που μπορεί να προκύψουν κατά την κλήση της συνάρτησης
 * <br>Η περιγραφή των σφαλμάτων αυτών είναι διαθέσιμη μέσω του πίνακα Μηνύματα Σφαλμάτων {@see ExceptionMessages}
 *
 * Παρακάτω εμφανίζεται μια σειρά από παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους :
 * <br><a href="#cURL">cURL</a> | <a href="#JavaScript">JavaScript</a> | <a href="#PHP">PHP</a> | <a href="#Ajax">Ajax</a>
 *
 * <br>
 * 
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X GET https://mm.sch.gr/api/implementation_entities \
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
 *    http.open("GET", "https://mm.sch.gr/api/implementation_entities");
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
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $curl = curl_init("https://mm.sch.gr/api/implementation_entities");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
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
 *        url: 'https://mm.sch.gr/api/implementation_entities',
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
 * {data":[
 *		{
 *			"implementation_entity_id": 1,
 *			"implementation_entity": "ΑΡΙΣΤΟΤΕΛΕΙΟ ΠΑΝ/ΜΙΟ ΘΕΣΣΑΛΟΝΙΚΗΣ",
 *			"implementation_entity_initials": "Α.Π.Θ.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 2,
 *			"implementation_entity": "ΔΗΜΟΚΡΙΤΕΙΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΘΡΑΚΗΣ",
 *			"implementation_entity_initials": "Δ.Π.Θ.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 3,
 *			"implementation_entity": "ΕΘΝΙΚΟ & ΚΑΠΟΔΙΣΤΡΙΑΚΟ ΠΑΝ/ΜΙΟ ΑΘΗΝΩΝ",
 *			"implementation_entity_initials": "Ε.Κ.Π.Α.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 4,
 *			"implementation_entity": "ΕΘΝΙΚΟ ΜΕΤΣΟΒΙΟ ΠΟΛΥΤΕΧΝΕΙΟ",
 *			"implementation_entity_initials": "Ε.Μ.Π.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 5,
 *			"implementation_entity": "ΙΝΣΤΙΤΟΥΤΟ ΤΕΧΝΟΛΟΓΙΑΣ ΥΠΟΛΟΓΙΣΤΩΝ",
 *			"implementation_entity_initials": "Ι.Τ.Υ.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 6,
 *			"implementation_entity": "ΠΑΝ/ΜΙΟ ΑΙΓΑΙΟΥ",
 *			"implementation_entity_initials": "ΑΙΓΑΙΟ",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 7,
 *			"implementation_entity": "ΠΑΝ/ΜΙΟ ΘΕΣΣΑΛΙΑΣ",
 *			"implementation_entity_initials": "Π.Θ.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 8,
 *			"implementation_entity": "ΠΑΝ/ΜΙΟ ΙΩΑΝΝΙΝΩΝ",
 *			"implementation_entity_initials": "Π.Ι.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 9,
 *			"implementation_entity": "ΠΑΝ/ΜΙΟ ΚΡΗΤΗΣ",
 *			"implementation_entity_initials": "Π.Κ.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 10,
 *			"implementation_entity": "ΠΑΝ/ΜΙΟ ΜΑΚΕΔΟΝΙΑΣ",
 *			"implementation_entity_initials": "Π.Μ.",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 11,
 *			"implementation_entity": "ΤΕΙ ΑΘΗΝΑΣ",
 *			"implementation_entity_initials": "ΤΕΙΑΘ",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 12,
 *			"implementation_entity": "ΤΕΙ ΘΕΣΣΑΛΟΝΙΚΗΣ",
 *			"implementation_entity_initials": "ΤΕΙΘΕΣ",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		},
 *		{
 *			"implementation_entity_id": 13,
 *			"implementation_entity": "ΤΕΙ ΛΑΡΙΣΑΣ",
 *			"implementation_entity_initials": "ΤΕΙΛΑΡ",
 *			"street_address": null,
 *			"postal_code": null,
 *			"email": null,
 *			"phone_number": null,
 *			"domain": null,
 *			"url": null
 *		}
 * ]}
 * </code>
 * <br>
 * 
 *  
 * 
 * @param mixed $implementation_entity Φορέας Υλοποίησης
 * <br>Το Όνομα ή ο Κωδικός του Φορέα Υλοποίησης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον κωδικό του Φορέα Υλοποίησης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Φορέα Υλοποίησης
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου στο Όνομα του Φορέα Υλοποίησης
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα του Φορέα Υλοποίησης γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
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
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Όνομα του Φορέα Υλοποίησης
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
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Όνομα (<a href="#$implementation_entity">$implementation_entity</a>) του Φορέα Υλοποίησης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Αν το Όνομα έχει Αριθμητική Τιμή τότε η αναζήτηση γίνεται με τον Κωδικό του Φορέα Υλοποίησης με Τύπο {@see SearchEnumTypes::Exact}
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
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>array : <b>data</b> : Ο Πίνακας με το λεξικό
 * <ul>
 *   <li>integer : <b>implementation_entity_id</b> : Ο Κωδικός του Φορέα Υλοποίησης</li>
 *   <li>string : <b>implementation_entity</b> : Το Όνομα του Φορέα Υλοποίησης</li>
 *   <li>string : <b>implementation_entity_initials</b> : Τα Αρχικά του Ονόματος του Φορέα Υλοποίησης</li>
 *   <li>string : <b>street_address</b> : Η Διεύθυνση (Οδός και Αριθμός) του Φορέα Υλοποίησης</li>
 *   <li>string : <b>postal_code</b> : Ο Ταχυδρομικός Κώδικας του Φορέα Υλοποίησης</li>
 *   <li>string : <b>email</b> : Η Ηλεκτρονική Αλληλογραφία του Φορέα Υλοποίησης</li>
 *   <li>string : <b>phone_number</b> : Ο Τηλεφωνικός Αριθμός του Φορέα Υλοποίησης</li>
 *   <li>string : <b>domain</b> : Το Domain του Φορέα Υλοποίησης</li>
 *   <li>string : <b>url</b> : Η Διεύθυνση URL του Φορέα Υλοποίησης</li>
 * </ul>
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
 */


function GetImplementationEntities( $implementation_entity,
                                    $pagesize, $page, $orderby, $ordertype, $searchtype ) {
    
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

//$orderby======================================================================
       $columns = array(
                        "ie.implementationEntityId"  => "implementation_entity_id",
                        "ie.name"                    => "implementation_entity",
                        "ie.initials"                 => "implementation_entity_initials",
                        "ie.streetAddress"            => "street_address",
                        "ie.postalCode"               => "postal_code",
                        "ie.email"                    => "email",
                        "ie.phoneNumber"              => "phone_number",
                        "ie.domain"                   => "domain",
                        "ie.url"                      => "url"
                        );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "implementation_entity";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        } 

//$implementation_entity========================================================
        if (Validator::Exists('implementation_entity', $params)){
                CRUDUtils::setFilter($qb, $implementation_entity, "ie", "implementationEntityId", "name", "id,value", ExceptionMessages::InvalidImplementationEntityType, ExceptionCodes::InvalidImplementationEntityType);
        }
        

//execution=====================================================================
        $qb->select('ie');
        $qb->from('ImplementationEntities','ie');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);

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
                                        "implementation_entity_id"        => $row->getImplementationEntityId(),
                                        "implementation_entity"           => $row->getName(),
                                        "implementation_entity_initials"  => $row->getInitials(),
                                        "street_address"                  => $row->getStreetAddress(),
                                        "postal_code"                     => $row->getPostalCode(),
                                        "email"                           => $row->getEmail(),
                                        "phone_number"                    => $row->getPhoneNumber(),
                                        "domain"                          => $row->getDomain(),
                                        "url"                             => $row->getUrl()
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