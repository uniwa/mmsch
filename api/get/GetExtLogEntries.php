<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Log Συγχρονισμού</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλα τα Log Συγχρονισμού σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/ext_log_entries
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς τον Κωδικό του Log Συγχρονισμού
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
 *    curl -X GET https://mm.sch.gr/api/ext_log_entries \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"object_id": "1000002"}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "object_id": "1000002" });
 * 
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/ext_log_entries");
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
 *    $params = array("object_id" => "1000002");
 * 
 *    $curl = curl_init("https://mm.sch.gr/api/ext_log_entries");
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
 *        url: 'https://mm.sch.gr/api/ext_log_entries',
 *        dataType: "json",
 *        data:{'object_id': '1000002'},
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
 *              "id": 91305,
 *              "action": "update",
 *              "logged_at": "2014-07-01 12:06:30",
 *              "object_id": "1000002",
 *              "object_class": "Units",
 *              "version": 1,
 *              "data": "a:6:{s:4:"name";s:74:"eschool-Νηπιαγωγείο - 2ο ΝΗΠΙΑΓΩΓΕΙΟ ΚΑΤΟΧΗΣ";s:13:"studentsCount";s:1:"0";
 *                       s:11:"groupsCount";s:1:"0";s:11:"levelsCount";s:1:"0";s:10:"lastUpdate";
 *                       O:8:"DateTime":3:{s:4:"date";s:19:"2013-11-25 14:50:29";s:13:"timezone_type";
 *                       i:3;s:8:"timezone";s:13:"Europe/Athens";}s:6:"source";a:1:{s:8:"sourceId";i:5;}}",
 *              "username": "admin",
 *              "ip": null
 *           },
 *           {
 *               "id": 111032,
 *               "action": "update",
 *               "logged_at": "2014-07-01 15:20:34",
 *               "object_id": "1000002",
 *               "object_class": "Units",
 *               "version": 2,
 *               "data": "a:4:{s:13:"studentsCount";s:1:"0";s:11:"groupsCount";s:1:"0";s:11:"levelsCount";
 *                        s:1:"0";s:10:"lastUpdate";O:8:"DateTime":3:{s:4:"date";s:19:"2013-11-25 14:50:29";
 *                        s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Athens";}}",
 *               "username": "admin",
 *               "ip": null
 *         },
 *           {
 *               "id": 117200,
 *               "action": "update",
 *               "logged_at": "2014-07-01 16:09:45",
 *               "object_id": "1000002",
 *               "object_class": "Units",
 *               "version": 3,
 *               "data": "a:4:{s:13:"studentsCount";s:1:"0";s:11:"groupsCount";s:1:"0";s:11:"levelsCount";
 *                             s:1:"0";s:10:"lastUpdate";O:8:"DateTime":3:{s:4:"date";s:19:"2013-11-25 14:50:29";
 *                             s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Athens";}}",
 *               "username": "admin",
 *               "ip": null
 *            },
 *           {
 *               "id": 138565,
 *               "action": "update",
 *               "logged_at": "2014-07-01 19:17:18",
 *               "object_id": "1000002",
 *               "object_class": "Units",
 *               "version": 4,
 *               "data": "a:4:{s:13:"studentsCount";s:1:"0";s:11:"groupsCount";s:1:"0";s:11:"levelsCount";
 *                             s:1:"0";s:10:"lastUpdate";O:8:"DateTime":3:{s:4:"date";s:19:"2013-11-25 14:50:29";
 *                             s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Athens";}}",
 *               "username": "admin",
 *               "ip": null
 *         }
 * ]}
 * </code>
 * <br>
 * 
 * @param integer $id Κωδικός Log Συγχρονισμού
 * <br>Ο Κωδικός του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $action Ενέργεια Συγχρονισμού
 * <br>Η Ενέργεια του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το λεκτικό ενέργειας(update|create|delete))</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 *
 * @param string $logged_at Ημερομηνία Log Συγχρονισμου
 * <br>Η Ημερομηνία του Log Συγχρονισμου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την ημερομηνία)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param integer $object_id Κωδικός Μονάδας
 * <br>Ο Κωδικός Μονάδας του Log Συγχρονισμου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|array[integer]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό μονάδας)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $object_class Όνομα Πίνακα
 * <br>Το Όνομα Πίνακα του Log Συγχρονισμου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα πίνακα που συγχρονίζεται)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param integer $version Έκδοση
 * <br>Η Έκδοση του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|array[integer]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον αριθμό έκδοσης συγχρονισμού)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $username Όνομα Χρήστη
 * <br>Το Όνομα του Χρήστη του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα χρήστη)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $ip IP Xρήστη
 * <br>Η IP του Xρήστη του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την IP του χρήστη που έκανε ενέργεια συγχρονισμού)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
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
 * @param string $datesearchtype Τύπος Αναζήτησης Ημερομηνίας
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στην Ημερομηνία (<a href="#$logged_at">$logged_at</a>) του Log Συγχρονισμού
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους update | create | delete
 *    </li>
 * </ul>
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
 *    <li>integer : <b>id</b> : Ο Κωδικός του Log Συγχρονισμού </li>
 *    <li>string : <b>action</b> : Η Ενέργεια του Log Συγχρονισμού</li>
 *    <li>boolean : <b>logged_at</b> : Η Ημερομηνία του Log Συγχρονισμού</li>
 *    <li>string : <b>object_id</b> : Ο Κωδικός Μονάδας του Log Συγχρονισμού</li>
 *    <li>string : <b>object_class</b> : Το Όνομα Πίνακα του Log Συγχρονισμού</li>
 *    <li>integer : <b>version</b> : Η Έκδοση του Log Συγχρονισμού</li>
 *    <li>string : <b>data</b> : Τα Δεδομένα του Log Συγχρονισμού</li>
 *    <li>string : <b>username</b> : Το Όνομα του Χρήστη του Log Συγχρονισμού</li>
 *    <li>string : <b>ip</b> : Η IP του Xρήστη του Log Συγχρονισμού</li>
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
 * @throws InvalidExtLogEntryIDType {@see ExceptionMessages::InvalidExtLogEntryIDType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryIDType}
 * <br>Ο Κωδικός του Log Συγχρονισμού πρέπει να είναι αριθμητικός
 *
 * @throws InvalidExtLogEntryActionType {@see ExceptionMessages::InvalidExtLogEntryActionType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryActionType}
 * <br>Η Ενέργεια του Log Συγχρονισμού πρέπει να είναι update,insert,create,delete
 *
 * @throws InvalidExtLogEntryLoggedAtType {@see ExceptionMessages::InvalidExtLogEntryLoggedAtType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryLoggedAtType}
 * <br>Η Ημερομηνία του Log Συγχρονισμού πρέπει να είναι Ημερομηνία (dd/mm/yyyy)
 *
 * @throws InvalidExtLogEntryObjectIdType {@see ExceptionMessages::InvalidExtLogEntryObjectIdType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryObjectIdType}
 * <br>Ο Κωδικός Μονάδας του Log Συγχρονισμού πρέπει να είναι αριθμητικός
 *
 * @throws InvalidExtLogEntryObjectClassType {@see ExceptionMessages::InvalidExtLogEntryObjectClassType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryObjectClassType}
 * <br>Το Όνομα Πίνακα του Log Συγχρονισμού πρέπει να είναι αλφαριθμητικός
 *
 * @throws InvalidExtLogEntryVersionType {@see ExceptionMessages::InvalidExtLogEntryVersionType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryVersionType}
 * <br>Η Έκδοση του Log Συγχρονισμού πρέπει να αριθμητική
 * 
 * @throws InvalidExtLogEntryUsernameType {@see ExceptionMessages::InvalidExtLogEntryUsernameType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryUsernameType}
 * <br>Το Όνομα του Χρήστη του Log Συγχρονισμού πρέπει να είναι αλφαριθμητικά
 * 
 * @throws InvalidExtLogEntryIpType {@see ExceptionMessages::InvalidExtLogEntryIpType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryIpType}
 * <br>Η IP του Xρήστη του Log Συγχρονισμού πρέπει να είναι αλφαριθμητικά
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

function GetExtLogEntries(
    $id, $action, $logged_at, $object_id, $object_class, $version, $username, $ip,
    $pagesize, $page, $orderby, $ordertype, $searchtype, $datesearchtype
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

       $page = Pagination::getPage($page, $params);
       $pagesize = Pagination::getPagesize($pagesize, $params); 

//======================================================================================================================
//= $id
//======================================================================================================================

        if ( Validator::Exists('id', $params) )
        {
            $param = Validator::toArray($id);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("el.id"));
                else if ( Validator::isID($values) )
                    $orx->add($qb->expr()->eq("el.id", $db->quote(Validator::toID($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryIDType." : ".$values, ExceptionCodes::InvalidExtLogEntryIDType);
            }
            $qb->andWhere($orx);
        }

//======================================================================================================================
//= $action
//======================================================================================================================

        if ( Validator::Exists('action', $params) )
        {
            $param = Validator::toArray($action);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("el.action"));
                else if ( Validator::isValue($values) )
                    $orx->add($qb->expr()->eq("el.action", $db->quote(Validator::toValue($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryActionType." : ".$values, ExceptionCodes::InvalidExtLogEntryActionType);
            }
            $qb->andWhere($orx);
        }

//======================================================================================================================
//= $logged_at
//======================================================================================================================

        if ( Validator::Exists('logged_at', $params) )
        {
            $param = Validator::toArray($logged_at);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) ) {
                    $qb->andWhere('el.loggedAt IS NULL');
                } else if ( Validator::IsDate($values,'Y-m-d') )
                {
                                        
                    if ( $datesearchtype == 'contain' )
                        $orx->add($qb->expr()->like("el.loggedAt", $db->quote('%'.Validator::ToDate($values,'Y-m-d').'%')));
                    else if ( $datesearchtype == 'greater' )
                        $orx->add($qb->expr()->gte("el.loggedAt", $db->quote(Validator::ToDate($values,'Y-m-d'))));
                    else if ( $datesearchtype == 'lower' )
                        $orx->add($qb->expr()->lte("el.loggedAt", $db->quote(Validator::ToDate($values,'Y-m-d'))));
                    else   
                        $orx->add($qb->expr()->eq("el.loggedAt", $db->quote(Validator::toValue($values))));
                }
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryLoggedAtType." : ".$values, ExceptionCodes::InvalidExtLogEntryLoggedAtType);
            }
            $qb->andWhere($orx);
        }

//======================================================================================================================
//= $object_id
//======================================================================================================================

        if ( Validator::Exists('object_id', $params) )
        {
            $param = Validator::toArray($object_id);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("el.objectId"));
                else if ( Validator::isID($values) )
                    $orx->add($qb->expr()->eq("el.objectId", $db->quote(Validator::toID($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryObjectIdType." : ".$values, ExceptionCodes::InvalidExtLogEntryObjectIdType);
            }
            $qb->andWhere($orx);
        }
//======================================================================================================================
//= $object_class
//======================================================================================================================

        if ( Validator::Exists('object_class', $params) )
        {
            $param = Validator::toArray($object_class);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("el.objectClass"));
                else if ( Validator::isValue($values) )
                    $orx->add($qb->expr()->eq("el.objectClass", $db->quote(Validator::toValue($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryObjectClassType." : ".$values, ExceptionCodes::InvalidExtLogEntryIDType);
            }
            $qb->andWhere($orx);
        }
//======================================================================================================================
//= $version
//======================================================================================================================

        if ( Validator::Exists('version', $params) )
        {
            $param = Validator::toArray($version);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("el.version"));
                else if ( Validator::isID($values) )
                    $orx->add($qb->expr()->eq("el.version", $db->quote(Validator::toID($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryVersionType." : ".$values, ExceptionCodes::InvalidExtLogEntryVersionType);
            }
            $qb->andWhere($orx);
        }
//======================================================================================================================
//= $username
//======================================================================================================================

        if ( Validator::Exists('username', $params) )
        {
            $param = Validator::toArray($username);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("el.username"));
                else if ( Validator::isValue($values) )
                    $orx->add($qb->expr()->eq("el.username", $db->quote(Validator::toValue($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryUsernameType." : ".$values, ExceptionCodes::InvalidExtLogEntryUsernameType);
            }
            $qb->andWhere($orx);
        }
//======================================================================================================================
//= $ip
//======================================================================================================================

        if ( Validator::Exists('ip', $params) )
        {
            $param = Validator::toArray($ip);
            $orx = $qb->expr()->orX();
            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $orx->add($qb->expr()->isNull("el.ip"));
                else if ( Validator::isValue($values) )
                    $orx->add($qb->expr()->eq("el.ip", $db->quote(Validator::toID($values))));
                else
                    throw new Exception(ExceptionMessages::InvalidExtLogEntryIpType." : ".$values, ExceptionCodes::InvalidExtLogEntryIpType);
            }
            $qb->andWhere($orx);
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
            "el.id" => "id",
            "el.action" => "action",
            "el.loggedAt" => "logged_at" ,
            "el.objectId" => "object_id",
            "el.objectClass" => "object_class",
            "el.version" => "version",
            "el.username" => "username",
            "el.ip" => "ip"
        );
        if ( Validator::Missing('orderby', $params) )
            $orderby = "id";
        else
        {
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        $qb->select('el');
        $qb->from('ExtLogEntries', 'el');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);

        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $results->getQuery()->setMaxResults($pagesize);
        $result["total"] = count($results);

        $count = 0;
        foreach ($results as $extlog)
        {
            $result["data"][] = array(
                "id"            => $extlog->getId(),
                "action"        => $extlog->getAction(),
                "logged_at"     => $extlog->getLoggedAt() instanceof \DateTime ? $extlog->getLoggedAt()->format('Y-m-d H:i:s') : null,
                "object_id"     => $extlog->getObjectId(),
                "object_class"  => $extlog->getObjectClass(),
                "version"       => $extlog->getVersion(),
                "data"          => unserialize($extlog->getData()),
                "username"      => $extlog->getUsername(),
                "ip"            => $extlog->getIp()
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