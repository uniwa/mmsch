<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Συσχετίσεις Μονάδων</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλα τις Συσχετίσεις Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/relations
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Όνομα της Host Μονάδας
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
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X GET https://mm.sch.gr/api/relations \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"relation_type": "ΕΞΥΠΗΡΕΤΕΙ"}' 
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "relation_type": "ΕΞΥΠΗΡΕΤΕΙ" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/relations");
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
 * $params = array("relation_type" => "ΕΞΥΠΗΡΕΤΕΙ");
 * 
 * $curl = curl_init("https://mm.sch.gr/api/relations");
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
 *        url: 'https://mm.sch.gr/api/relations',
 *        dataType: "json",
 *        data:{'relation_type': 'ΕΞΥΠΗΡΕΤΕΙ'},
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
 *
 * ]}
 * </code>
 * <br>
 * 
 * 
 *
 * @param mixed $host_unit Μονάδα
 * <br>Το Όνομα ή ο Κωδικός MM της Host Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Host Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Host Μονάδας
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 *
 *
 * @param mixed $guest_unit Μονάδα
 * <br>Το Όνομα ή ο Κωδικός MM της Guest Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Guest Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Guest Μονάδας
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 *
 *
 * @param mixed $relation_type Τύπος Συσχέτισης
 * <br>Το Όνομα ή ο Κωδικός του Τύπου Συσχέτισης των Μονάδων
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Λεξικό : {@see GetRelationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Τύπου Συσχέτιση
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Τύπου Συσχέτιση
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
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
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Όνομα της Host Μονάδας
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
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Όνομα της Host Μονάδας (<a href="#$host_unit">$host_unit</a>)
 * καθώς και στο Όνομα της Guest Μονάδας (<a href="#$guest_unit">$guest_unit</a>)
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Αν οι παράμετροι Host Μονάδα (<a href="#$host_unit">$host_unit</a>) και Guest Μονάδα (<a href="#$guest_unit">$guest_unit</a>)
 * έχουν Αριθμητική Τιμή τότε η αναζήτηση γίνεται με τον Κωδικό ΜΜ με Τύπο {@see SearchEnumTypes::Exact}
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
 *    <li>integer : <b>relation_id</b> : Ο Κωδικός της Συσχέτισης</li>
 *    <li>boolean : <b>relation_state</b> : Καθορίζει αν η Συσχέτιση είναι Ενεργή</li>
 *    <li>date : <b>true_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ενεργή</li>
 *    <li>string : <b>true_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ενεργή</li>
 *    <li>date : <b>false_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ανενεργή</li>
 *    <li>string : <b>false_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ανενεργή</li>
 *    <li>integer : <b>relation_type_id</b> : Ο Κωδικός του Τύπου Συσχέτισης των Μονάδων</li>
 *    <li>string : <b>relation_type</b> : Ο Τύπος Συσχέτισης των Μονάδων (Λεξικό : {@see GetRelationTypes})</li>
 *    <li>array : <b>host_unit</b> : Host Μονάδα
 *       <ul>
 *          <li>integer : <b>host_mm_id</b> : Ο Κωδικός ΜΜ της Host Μονάδας (Μονάδες : {@see GetUnits})</li>
 *          <li>string : <b>host_registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Host Μονάδας</li>
 *          <li>string : <b>host_name</b> : Το Όνομα της Host Μονάδας</li>
 *          <li>string : <b>host_special_name</b> : Το Προσωνύμιο της Host Μονάδας</li>
 *       </ul>
 *    </li>
 *    <li>array : <b>guest_unit</b> : Guest Μονάδα
 *       <ul>
 *          <li>integer : <b>guest_mm_id</b> : Ο Κωδικός ΜΜ της Guest Μονάδας (Μονάδες : {@see GetUnits})</li>
 *          <li>string : <b>guest_registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Guest Μονάδας</li>
 *          <li>string : <b>guest_name</b> : Το Όνομα της Guest Μονάδας</li>
 *          <li>string : <b>guest_special_name</b> : Το Προσωνύμιο της Guest Μονάδας</li>
 *       </ul>
 *    </li>
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
 * @throws InvalidHostUnitType {@see ExceptionMessages::InvalidHostUnitType}
 * <br>{@see ExceptionCodes::InvalidHostUnitType}
 * <br>Η Host Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidGuestUnitType {@see ExceptionMessages::InvalidGuestUnitType}
 * <br>{@see ExceptionCodes::InvalidGuestUnitType}
 * <br>Η Guest Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidRelationTypeType {@see ExceptionMessages::InvalidRelationTypeType}
 * <br>{@see ExceptionCodes::InvalidRelationTypeType}
 * <br>Ο Τύπος Συσχέτισης πρέπει να είναι αριθμητικός ή αλφαριθμητικός
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

function GetRelations( $host_mm_id, $guest_mm_id, $relation_type,
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
       $pagesize = Pagination::getPagesize($pagesize, $params);     
       $searchtype = Filters::getSearchType($searchtype, $params);
       $ordertype =  Filters::getOrderType($ordertype, $params);

//$orderby======================================================================
       $columns = array(
                        "r.relationId"       => "relation_id",
                        "r.relationState"    => "relation_state",
                        "r.trueDate"         => "true_date",
                        "r.trueFek"          => "true_fek",
                        "r.falseDate"        => "false_date",
                        "r.falseFek"         => "false_fek",
                        "hu.mmId"            => "host_mm_id",
                        "hu.registryNo"      => "host_registry_no",
                        "hu.name"            => "host_unit_name",
                        "hu.specialName"     => "host_special_unit_name",
                        "gu.mmId"            => "guest_mm_id",
                        "gu.registryNo"      => "guest_registry_no",
                        "gu.name"            => "guest_unit_name",
                        "gu.specialName"     => "guest_special_unit_name",
                        "rt.relationTypeId"  => "relation_type_id",
                        "rt.name"            => "relation_type_name"
                       );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "host_unit_name";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        } 
        
//$host_mm_id===================================================================
        if (Validator::Exists('host_mm_id', $params)){
                CRUDUtils::setFilter($qb, $host_mm_id, "hu", "mmId", "mmId", "null,id", ExceptionMessages::InvalidRelationHostUnitMMIDType, ExceptionCodes::InvalidRelationHostUnitMMIDType);
        }

//$guest_mm_id==================================================================
        if (Validator::Exists('guest_mm_id', $params)){
                CRUDUtils::setFilter($qb, $guest_mm_id, "gu", "mmId", "mmId", "null,id", ExceptionMessages::InvalidRelationGuestUnitMMIDType, ExceptionCodes::InvalidRelationGuestUnitMMIDType);
        }

//$relation_type================================================================
        if (Validator::Exists('relation_type', $params)){
             CRUDUtils::setFilter($qb, $relation_type, "rt", "relationTypeId", "name", "null,id,value", ExceptionMessages::InvalidRelationTypeType, ExceptionCodes::InvalidRelationTypeType);
        } 

//execution=====================================================================
        $qb->select('r');
        $qb->from('Relations','r');
        $qb->leftjoin('r.relationType','rt');
        $qb->leftjoin('r.guestMm','gu');
        $qb->leftjoin('r.hostMm','hu');
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

            $result["data"][]  = array(
                                        "relation_id"             => $row->getRelationId(),
                                        "relation_state"          => $row->getRelationState(),
                                        "true_date"               => ($row->getTrueDate() instanceof \DateTime)? $row->getTrueDate()->format('Y-m-d H:i:s') : null,
                                        "true_fek"                => $row->getTrueFek(),
                                        "false_date"              => ($row->getFalseDate() instanceof \DateTime)? $row->getFalseDate()->format('Y-m-d H:i:s') : null,
                                        "false_fek"               => $row->getFalseFek(),
                                        "relation_type_id"        => $row->getRelationType()->getRelationTypeId(),
                                        "relation_type_name"      => $row->getRelationType()->getName(),
                                        "host_mm_id"              => (int)$row->getHostMm()->getMmId(),
                                        "host_registry_no"        => $row->getHostMm()->getRegistryNo(),
                                        "host_unit_name"          => $row->getHostMm()->getName(),
                                        "host_special_unit_name"  => $row->getHostMm()->getSpecialName(),
                                        "guest_mm_id"             => (int)$row->getGuestMm()->getMmId(),
                                        "guest_registry_no"       => $row->getGuestMm()->getRegistryNo(),
                                        "guest_unit_name"         => $row->getGuestMm()->getName(),
                                        "guest_special_unit_name" => $row->getGuestMm()->getSpecialName()
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