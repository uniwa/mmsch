<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Συσχετίσεις Μονάδων με Εργαζόμενους**
 * 
 * Η συνάρτηση αυτή επιστρέφει Συσχετίσεις Μονάδων με Εργαζόμενους σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **unit_workers** :
 * <br>https://mm.sch.gr/api/unit_workers
 *
 *
 * ***Ορισμός Τύπου και Πεδίου Ταξινόμησης Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>) μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης.
 * * Προκαθορισμένη τιμή πεδίου ταξινόμησης είναι η αύξουσα σειρά **ASC**.
 * * Προκαθορισμένη τιμή τύπου ταξινόμησης είναι το **Επίθετο-Όνομα Εργαζόμενου**.  
 *
 * ***Ορισμός Αριθμού Σελίδας και Εγγραφών/Σελίδα της Επιστροφής Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Αριθμός Σελίδας (<a href="#$page">$page</a>) και Αριθμός Εγγραφών/Σελίδα (<a href="#$pagesize">$pagesize</a>) μπορεί να καθοριστεί ο αριθμός Σελίδας και Εγγραφών/Σελίδα της επιστροφής αποτελεσμάτων.
 * * Ο προκαθορισμένος αριθμός Εγγραφών/Σελίδα που επιστρέφονται ανά κλήση είναι **200**. 
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
 *  "controller": "GetUnitWorkers",
 *  "function": "unit_workers",
 *  "method": "GET",
 *  "total": ``,
 *  "count": ``,
 *  "pagination": { "page": 1, "maxPage": 1, "pagesize": 200},
 *  "status": 200,
 *  "message": "[GET][unit_workers]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"data": [{
 *              "unit_worker_id": ``,
 *              "mm_id": ``,
 *              "unit_registry_no": ``,
 *              "unit_name": ``,
 *              "unit_special_name": ``,
 *              "worker_id": ``,
 *              "worker_registry_no": ``,
 *              "lastname": ``,
 *              "firstname": ``,
 *              "fullname": ``,
 *              "fathername": ``,
 *              "sex": ``,
 *              "tax_number": ``,
 *              "worker_specialization_id": ``,
 *              "worker_specialization": ``,
 *              "worker_position_id": ``,
 *              "worker_position": ``,
 *              "source_id": ``,
 *              "source": ``
 *          }]
 * }
 * </code> 
 * 
 *
 * @param mixed $unit Μονάδα
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ΜΜ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Μονάδας
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
 * @param mixed $worker Εργαζόμενος
 * <br>
 * <br>Το Ονοματεπώνυμο ή ο Κωδικός ID του Εργαζομένου
 * <br>Συνδυάζεται με την παράμετρο searchtype
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *     θα αναζητηθεί η τιμή της παραμέτρου στο Ονοματεπώνυμο του Εργαζομένου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Εργαζομένου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Ονοματεπώνυμο του Εργαζομένου
 *       <br>Αν η παράμετρος Τύπος Αναζήτησης δεν έχει τιμή τότε η αναζήτηση στον Όνομα γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[integer|string|null]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul> 
 * 
 * @param mixed $worker_registry_no Αριθμός Μητρώου
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Αριθμού Μητρώου του Εργαζομένου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Αριθμού Μητρώου του Εργαζομένου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Αριθμού Μητρώου του Εργαζομένου
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
 * @param mixed $worker_position Θέση Εργασίας Εργαζομένου
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Θέσης Εργασίας του Εργαζομένου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Θέσης Εργασίας του Εργαζομένου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Θέσης Εργασίας του Εργαζομένου
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
 * @param mixed $worker_specialization Ειδικότητα Εργαζομένου
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Ειδικότητας του Εργαζομένου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Ειδικότητας του Εργαζομένου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Ειδικότητας του Εργαζομένου
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
 * @param mixed $source Πρωτογενής Πηγή
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Πρωτογενής Πηγής του Εργαζομένου
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Πρωτογενής Πηγής του Εργαζομένου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Πρωτογενής Πηγής του Εργαζομένου
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
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το **Επίθετο-Όνομα Εργαζόμενου**
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
 * <ul><li>Ονοματεπώνυμο Εργαζόμενου (<a href="#$worker">$worker</a>)</li></ul>
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}</li></ul>
 *
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>data</b> : Ο Πίνακας με τα δεδομένα
 *  <ul>
 *   <li>integer : <b>unit_worker_id</b> : Ο Κωδικός ID της Συσχέτισης της Μονάδα με τον Εργαζόμενο </li>
 *   <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *   <li>string : <b>unit_registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *   <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας</li>
 *   <li>string : <b>special_unit_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *   <li>integer : <b>worker_id</b> : Ο Κωδικός ID του Εργαζόμενου</li>
 *   <li>string : <b>worker_registry_no</b> : Ο Αριθμός Μητρώου του Εργαζόμενου</li>
 *   <li>string : <b>lastname</b> : Το Επώνυμο του Εργαζόμενου</li>
 *   <li>string : <b>firstname</b> : Το Όνομα του Εργαζόμενου</li>
 *   <li>string : <b>fathername</b> : Το Πατρώνυμο του Εργαζόμενου</li>
 *   <li>string : <b>fullname</b> : Το Ονοματεπώνυμο του Εργαζόμενου</li>
 *   <li>string : <b>sex</b> : Το Φύλο του Εργαζόμενου</li>
 *   <li>string : <b>tax_number</b> : Ο Αριθμός Φορολογικού Μητρώου του Εργαζόμενου</li>
 *   <li>integer : <b>worker_position_id</b> : Ο Κωδικός ID της Θέσης Εργασίας του Εργαζομένου</li>
 *   <li>string : <b>worker_position</b> : Η Θέση Εργασίας του Εργαζομένου</li>
 *   <li>integer : <b>worker_specialization_id</b> : Ο Κωδικός ID της Ειδικότητας του Εργαζομένου</li>
 *   <li>string : <b>worker_specialization</b> : Η Ειδικότητα του Εργαζομένου</li>
 *   <li>integer : <b>source_id</b> : Ο Κωδικός ID της Πρωτογενής Πηγής του Εργαζομένου</li>
 *   <li>string : <b>source</b> : Η Πρωτογενής Πηγή του Εργαζομένου</li>
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
 * 
 * @throws InvalidUnitType {@see ExceptionMessages::InvalidUnitType}
 * <br>{@see ExceptionCodes::InvalidUnitType}
 * 
 * @throws InvalidWorkerRegistryNoType {@see ExceptionMessages::InvalidWorkerRegistryNoType}
 * <br>{@see ExceptionCodes::InvalidWorkerRegistryNoType}
 *
 * @throws InvalidWorkerPositionType {@see ExceptionMessages::InvalidWorkerPositionType}
 * <br>{@see ExceptionCodes::InvalidWorkerPositionType}
 * 
 * @throws InvalidWorkerSpecializationType {@see ExceptionMessages::InvalidWorkerSpecializationType}
 * <br>{@see ExceptionCodes::InvalidWorkerSpecializationType}
 * 
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * <br>{@see ExceptionCodes::InvalidSourceType}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
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
             CRUDUtils::setFilter($qb, $source, "s", "sourceId", "name", "null,id,value", ExceptionMessages::InvalidSourceType, ExceptionCodes::InvalidSourceType);
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
        foreach ($results->getQuery()->getResult() as $row)
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
//        $result["SQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getQuery()->getSQL()));
   }
    
    return $result;
}

?>