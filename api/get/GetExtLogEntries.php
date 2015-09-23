<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Αναζήτηση Log Συγχρονισμού**
 * 
 * Η συνάρτηση αυτή επιστρέφει Log Συγχρονισμού σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **ext_log_entries** :
 * <br>https://mm.sch.gr/api/ext_log_entries
 *
 *
 * ***Ορισμός Τύπου και Πεδίου Ταξινόμησης Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>) μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης.
 * * Προκαθορισμένη τιμή πεδίου ταξινόμησης είναι η αύξουσα σειρά **ASC**.
 * * Προκαθορισμένη τιμή τύπου ταξινόμησης είναι το **ID του Log Συγχρονισμού**.  
 *
 * ***Ορισμός Αριθμού Σελίδας και Εγγραφών/Σελίδα της Επιστροφής Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Αριθμός Σελίδας (<a href="#$page">$page</a>) και Αριθμός Εγγραφών/Σελίδα (<a href="#$pagesize">$pagesize</a>) μπορεί να καθοριστεί ο αριθμός Σελίδας και Εγγραφών/Σελίδα της επιστροφής αποτελεσμάτων.
 * * Ο προκαθορισμένος αριθμός Εγγραφών/Σελίδα που επιστρέφονται ανά κλήση είναι **0**. 
 * * Ο προκαθορισμένος αριθμός Σελίδας που επιστρέφεται ανά κλήση είναι **1**. 
 * 
 * ***Ορισμός Τύπου Αναζήτησης Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Τύπου Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί μπορεί να καθοριστεί ο τρόπος με τον οποίο θα αναζητηθεί η τιμή της παραμέτρου στο DNS της Μονάδας.
 * * Ισχύει για όσες παραμέτρους το υποστηρίζουν το συνδυασμό με την παράμετρο searchtype.
 * * Προκαθορισμένη τιμή τύπου αναζήτησης είναι **CONTAINALL**.
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
 * ***Μηνύματα Προκαθορισμένων Παραμέτρων***
 * * Υπάρχουν αναλυτικές πληροφορίες για τα μηνύματα Προκαθορισμένων Παραμέτρων ({@see StandarParamsMessages}).
 * 
 * ***Δεδομένα Επιστροφής***
 * <br><a id="model"></a>Παρακάτω εμφανίζονται τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {
 *  "data": [{}],
 *  "controller": "GetExtLogEntries",
 *  "function": "ext_log_entries",
 *  "method": "GET",
 *  "total": ``,
 *  "count": ``,
 *  "pagination": { "page": 1, "maxPage": 1, "pagesize": 200},
 *  "status": 200,
 *  "message": "[GET][ext_log_entries]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"data": [{
 *              "id": ``,
 *              "action": ``,
 *              "logged_at": ``,
 *              "object_id": ``,
 *              "object_class": ``,
 *              "version": ``,
 *              "data": ``,
 *              "username": ``,
 *              "ip": ``
 *          }]
 * }
 * </code>
 * 
 *  
 * @param integer $id ID Log Συγχρονισμού
 * <br>
 * <br>Ο Κωδικός ID Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με ID Log Συγχρονισμού
 *    </li>
 *    <li>array[integer]
 *       <br>Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $action Ενέργεια Συγχρονισμού
 * <br>
 * <br>Η Ενέργεια του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το λεκτικό Ενέργειας του Log Συγχρονισμού (update|create|delete))
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $logged_at Ημερομηνία Log Συγχρονισμου
 * <br>
 * <br>Η Ημερομηνία του Log Συγχρονισμου
 * <br>Συνδυάζεται με την παράμετρο datesearchtype
 * <br>Λίστα Τύπων Αναζήτησης Ημερομηνίας : (<a href="#$datesearchtype">$datesearchtype</a>)
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|null|array[string|null]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με την Ημερομηνία του Log Συγχρονισμου
 *       <br>Αν η παράμετρος Τύπος Αναζήτησης Ημερομηνίας δεν έχει τιμή τότε η αναζήτηση στην Ημερομηνία Log Συγχρονισμου γίνεται με τον Tύπο {exact}
 *    </li>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>array[string|null]
 *       <br>Σύνολο από Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param integer $object_id Κωδικός ΜΜ
 * <br>
 * <br>Ο Κωδικός ΜΜ του Log Συγχρονισμου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ του Log Συγχρονισμου
 *    </li>
 *    <li>array[integer]
 *       <br>Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $object_class Όνομα Πίνακα
 * <br>
 * <br>Το Όνομα Πίνακα του Log Συγχρονισμου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Πίνακα του Log Συγχρονισμου
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param integer $version Έκδοση
 * <br>
 * <br>Η Έκδοση του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον αριθμό Έκδοσης του Log Συγχρονισμού
 *    </li>
 *    <li>array[integer]
 *       <br>Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $username Όνομα Χρήστη
 * <br>
 * <br>Το Όνομα του Χρήστη του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|null|array[string|null]}
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Χρήστη του Log Συγχρονισμού
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>array[integer|string|null]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul> 
 * 
 * @param mixed $ip IP Xρήστη
 * <br>
 * <br>Η IP του Xρήστη του Log Συγχρονισμού
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|null|array[string|null]}
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με την IP του Xρήστη του Log Συγχρονισμού
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>array[integer|string|null]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul> 
 * 
 * 
 * @param integer $pagesize Αριθμός Εγγραφών/Σελίδα
 * <br>
 * <br>Ο αριθμός των εγγραφών που θα επιστρέψουν ανα σελίδα
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφούν όλες οι προκαθορισμένες εγγραφές ({@see Parameters::DefaultPageSize})
 * <br>Λίστα Παραμέτρων Σελιδοποίησης : {@see Parameters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul><li>integer<br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0</li></ul>
 *
 * @param integer $page Αριθμός Σελίδας
 * <br>
 * <br>Ο αριθμός της σελίδας με τις <a href="#$pagesize">$pagesize</a> εγγραφές που βρέθηκαν σύμφωμα με τις παραμέτρους
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφεί η πρώτη σελίδα
 * <br>Λίστα Παραμέτρων Σελίδας : {@see Parameters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul><li>integer<br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0</li></ul>
 *
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το **ID του Log Συγχρονισμού**
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι οποιοδήποτε όνομα πεδίου επιστρέφεται στον πίνακα data</li></ul>
 *
 * @param string $ordertype Τύπος Ταξινόμησης
 * <br>
 * <br>Ο τύπος ταξινόμησης με τον οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με Αύξουσα Σειρά ({@see OrderEnumTypes::ASC})
 * <br>Λίστα Τύπων Ταξινόμησης : {@see OrderEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see OrderEnumTypes}</li></ul>
 *
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στα πεδία 
 * <ul></ul>
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}</li></ul>
 * 
 * @param string $datesearchtype Τύπος Αναζήτησης Ημερομηνίας
 * <br>
 * <br>Ο Τύπος Αναζήτησης Ημερομηνίας με τον οποίο γίνεται η αναζήτηση στα πεδία 
 * <ul><li>Ημερομηνία Log Συγχρονισμου(<a href="#$logged_at">$logged_at</a>)</li></ul>
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {exact}
 * <br>Λίστα Τύπων Αναζήτησης : {contain|greater|lower}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {contain|greater|lower}</li></ul> 
 * 
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>data</b> : Ο Πίνακας με τα δεδομένα
 *  <ul>
 *    <li>integer : <b>id</b> : Ο Κωδικός ID του Log Συγχρονισμού </li>
 *    <li>string : <b>action</b> : Η Ενέργεια του Log Συγχρονισμού</li>
 *    <li>datetime : <b>logged_at</b> : Η Ημερομηνία του Log Συγχρονισμού</li>
 *    <li>integer : <b>object_id</b> : Ο Κωδικός ΜΜ του Log Συγχρονισμού</li>
 *    <li>string : <b>object_class</b> : Το Όνομα Πίνακα του Log Συγχρονισμού</li>
 *    <li>integer : <b>version</b> : Η Έκδοση του Log Συγχρονισμού</li>
 *    <li>string : <b>data</b> : Τα Δεδομένα του Log Συγχρονισμού</li>
 *    <li>string : <b>username</b> : Το Όνομα του Χρήστη του Log Συγχρονισμού</li>
 *    <li>string : <b>ip</b> : Η IP του Xρήστη του Log Συγχρονισμού</li>
 *  </ul>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>array : <b>pagination</b> : Οι παράμετροι σελιδοποίησης των εγγραφών της κλήσης
 *  <ul>
 *      <li>integer : <b>page</b> : Ο αριθμός της σελίδας των αποτελεσμάτων</li>
 *      <li>integer : <b>maxPage</b> : Ο μέγιστος αριθμός της σελίδας των αποτελεσμάτων</li>
 *      <li>integer : <b>pagesize</b> :  Ο αριθμός των εγγραφών προς επιστροφή</li>
 *  </ul>
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws InvalidExtLogEntryIDType {@see ExceptionMessages::InvalidExtLogEntryIDType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryIDType}
 *
 * @throws InvalidExtLogEntryActionType {@see ExceptionMessages::InvalidExtLogEntryActionType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryActionType}
 *  
 * @throws InvalidExtLogEntryLoggedAtType {@see ExceptionMessages::InvalidExtLogEntryLoggedAtType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryLoggedAtType}
 *
 * @throws InvalidExtLogEntryObjectIdType {@see ExceptionMessages::InvalidExtLogEntryObjectIdType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryObjectIdType}
 * 
 * @throws InvalidExtLogEntryObjectClassType {@see ExceptionMessages::InvalidExtLogEntryObjectClassType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryObjectClassType}
 *
 * @throws InvalidExtLogEntryVersionType {@see ExceptionMessages::InvalidExtLogEntryVersionType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryVersionType}
 *  
 * @throws InvalidExtLogEntryUsernameType {@see ExceptionMessages::InvalidExtLogEntryUsernameType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryUsernameType}
 *
 * @throws InvalidExtLogEntryIpType {@see ExceptionMessages::InvalidExtLogEntryIpType}
 * <br>{@see ExceptionCodes::InvalidExtLogEntryIpType}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function GetExtLogEntries( $id, $action, $logged_at, $object_id, $object_class, $version, $username, $ip,
                           $pagesize, $page, $orderby, $ordertype, $searchtype, $datesearchtype) {
    
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
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }   
       
//$id===========================================================================
        if (Validator::Exists('id', $params)){
                CRUDUtils::setFilter($qb, $id, "el", "id", "id", "id", ExceptionMessages::InvalidExtLogEntryIDType, ExceptionCodes::InvalidExtLogEntryIDType);
        }

//$action=======================================================================
        if (Validator::Exists('action', $params)){
                CRUDUtils::setFilter($qb, $action, "el", "action", "action", "value", ExceptionMessages::InvalidExtLogEntryActionType, ExceptionCodes::InvalidExtLogEntryActionType);
        }
        
//$logged_at====================================================================
        
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

//$object_id====================================================================
        if (Validator::Exists('object_id', $params)){
                CRUDUtils::setFilter($qb, $object_id, "el", "objectId", "objectId", "id", ExceptionMessages::InvalidExtLogEntryObjectIdType, ExceptionCodes::InvalidExtLogEntryObjectIdType);
        }

//$object_class=================================================================
        if (Validator::Exists('object_class', $params)){
                CRUDUtils::setFilter($qb, $object_class, "el", "objectClass", "objectClass", "value", ExceptionMessages::InvalidExtLogEntryObjectClassType, ExceptionCodes::InvalidExtLogEntryObjectClassType);
        }

//$version======================================================================
        if (Validator::Exists('version', $params)){
                CRUDUtils::setFilter($qb, $version, "el", "version", "version", "id", ExceptionMessages::InvalidExtLogEntryVersionType, ExceptionCodes::InvalidExtLogEntryVersionType);
        }
        
//$username===========================================================================
        if (Validator::Exists('username', $params)){
                CRUDUtils::setFilter($qb, $username, "el", "username", "username", "null,value", ExceptionMessages::InvalidExtLogEntryUsernameType, ExceptionCodes::InvalidExtLogEntryUsernameType);
        }
        
//$ip===========================================================================
        if (Validator::Exists('ip', $params)){
                CRUDUtils::setFilter($qb, $ip, "el", "ip", "ip", "null,value", ExceptionMessages::InvalidExtLogEntryIpType, ExceptionCodes::InvalidExtLogEntryIpType);
        }

//execution=====================================================================
        $qb->select('el');
        $qb->from('ExtLogEntries','el');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);


//pagination and results========================================================      
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $pagesize!==Parameters::AllPageSize ? $results->getQuery()->setMaxResults($pagesize) : null;

//data results==================================================================
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