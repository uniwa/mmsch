<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DEPRECATED
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Υποδίκτυα Μονάδας</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλα τα Υποδίκτυα Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/unit_network_subnets
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
 *    curl -X GET https://mm.sch.gr/api/unit_network_subnets \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{subnet_type": ""}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "subnet_type": "" });
 * 
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/unit_network_subnets");
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
 *    $params = array("subnet_type" => "");
 * 
 *    $curl = curl_init("https://mm.sch.gr/api/unit_network_subnets");
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
 *        url: 'https://mm.sch.gr/api/unit_network_subnets',
 *        dataType: "json",
 *        data:{'subnet_type': ''},
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
 *  		"unit_network_subnet_id": ,
 *  		"subnet_name":"" ,
 *  		"subnet_ip": "" ,
 *  		"mask": "",
 *  		"subnet_default_router": "",
 *  		"mm_id": ,
 *              "registry_no": "",
 *              "unit_name": "",
 *              "special_unit_name": "",
 *              "unit_network_subnet_type_id": ,
 *              "unit_network_subnet_type": "" 
 *  	}
 * ]}
 * </code>
 * <br>
 * 
 *
 * @param integer $unit_network_subnet Υποδίκτυο Μονάδας
 * <br>Ο Κωδικός του Υποδικτύου Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Υποδικτύου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό του Υποδικτύου Μονάδας γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[integer]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $subnet_name Όνομα Υποδικτύου Μονάδας
 * <br>Το Όνομα του Υποδικτύου Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με to Όνομα του Υποδικτύου Μονάδας
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου στο Όνομα Υποδικτύου Μονάδας
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στον Όνομα του Υποδικτύου Μονάδας γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $subnet_ip IP Υποδικτύου Μονάδας
 * <br>Η IP Διευθυνση του Υποδικτύου Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με την IP Διευθυνση του Υποδικτύου Μονάδας
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου στην IP Διευθυνση του Υποδικτύου Μονάδας
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στην IP Διευθυνση του Υποδικτύου Μονάδας γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $mask Μάσκα Υποδικτύου Μονάδας
 * <br>Η Μάσκα του Υποδικτύου Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με την Μάσκα του Υποδικτύου Μονάδας.
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου στην Μάσκα του Υποδικτύου Μονάδας.
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στην Μάσκα του Υποδικτύου Μονάδας γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $subnet_default_router Gateway Υποδικτύου Μονάδας
 * <br>Η Default Gateway του Υποδικτύου Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με την Default Gateway του Υποδικτύου Μονάδας.
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου στην Default Gateway του Υποδικτύου Μονάδας
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στην Default Gateway του Υποδικτύου Μονάδας γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $subnet_type Τύπος Υποδικτύου
 * <br>Ο Κωδικός και το Όνομα του Τύπου Υποδικτύου
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Τύπου Υποδικτύου
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Τύπου Υποδικτύου
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
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
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση 
 * <ul>
 *      <li> στο Όνομα (<a href="#$subnet_name">$subnet_name</a>) του Υποδικτύου Μονάδας</li>
 *      <li> στην IP Διευθυνση (<a href="#$subnet_ip">$subnet_ip</a>) του Υποδικτύου Μονάδας</li>
 *      <li> στον Μάσκα (<a href="#$mask">$mask</a>) του Υποδικτύου Μονάδας</li>
 *      <li> στην Default Gateway (<a href="#$subnet_default_router">$subnet_default_router</a>) του Υποδικτύου Μονάδας</li>
 * 
 * </ul>
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
 *    <li>integer : <b>unit_network_subnet_id</b> : Ο Κωδικός του Υποδικτύου Μονάδας</li>
 *    <li>string : <b>subnet_name</b> : Το Όνομα του Υποδικτύου Μονάδας</li>
 *    <li>string : <b>subnet_ip</b> : Η IP Διευθυνση του Υποδικτύου Μονάδας</li>
 *    <li>string : <b>mask</b> : Η Μάσκα του Υποδικτύου Μονάδας.</li>
 *    <li>string : <b>subnet_default_router</b> : Η Default Gateway του Υποδικτύου Μονάδας</li>
 *    <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας (Μονάδες : {@see GetUnits})</li>
 *    <li>string : <b>registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *    <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας</li>
 *    <li>string : <b>special_unit_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *    <li>integer : <b>unit_network_subnet_type_id</b> : Ο Κωδικός του Τύπου Υποδικτύου</li>
 *    <li>string : <b>unit_network_subnet_type</b> : Ο Τύπος του Τύπου Υποδικτύου (Λεξικό : {@see GetUnitNetworkSubnetTypes})</li>
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
 * @throws InvalidUnitNetworkSubnetIDType {@see ExceptionMessages::InvalidUnitNetworkSubnetIDType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetIDType}
 * <br>Ο Κωδικός του Υποδικτύου της Μονάδας πρέπει να είναι αριθμητικός
 *
 * @throws InvalidUnitNetworkSubnetNameType {@see ExceptionMessages::InvalidUnitNetworkSubnetNameType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetNameType}
 * <br>Το Όνομα του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητικό
 *
 * @throws InvalidUnitNetworkSubnetIpType {@see ExceptionMessages::InvalidUnitNetworkSubnetIpType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetIpType}
 * <br>H IP του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική
 *
 * @throws InvalidUnitNetworkSubnetDefaultRouterType {@see ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetDefaultRouterType}
 * <br>H Default Gateway του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική
 * 
 * @throws InvalidUnitNetworkSubnetMaskType {@see ExceptionMessages::InvalidUnitNetworkSubnetMaskType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetMaskType}
 * <br>H Μάσκα του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική
 * 
 * @throws InvalidUnitType {@see ExceptionMessages::InvalidUnitType}
 * <br>{@see ExceptionCodes::InvalidUnitType}
 * <br>Η Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidUnitNetworkSubnetTypeType {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetTypeType}
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

function GetUnitNetworkSubnets(
    $unit_network_subnet, $subnet_name, $subnet_ip, $subnet_default_router, $mask, $unit, $unit_network_subnet_type,
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
       $pagesize = Pagination::getPagesize($pagesize, $params);

//======================================================================================================================
//= $unit_network_subnet
//======================================================================================================================

        if ( Validator::Exists('unit_network_subnet', $params) )
        {
            $table_name = "unit_network_subnets";
            $table_column_id = "unit_network_subnet_id";
            $table_column_name = "unit_network_subnet_id";

            $param = Validator::toArray($unit_network_subnet);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetIDType." : ".$values, ExceptionCodes::InvalidUnitNetworkSubnetIDType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $subnet_name
//======================================================================================================================

        if ( Validator::Exists('subnet_name', $params) )
        {
            $table_name = "unit_network_subnets";
            $table_column_id = "subnet_name";
            $table_column_name = "subnet_name";

            $param = Validator::toArray($subnet_name);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
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
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetNameType." : ".$values, ExceptionCodes::InvalidUnitNetworkSubnetNameType);

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
//=  $subnet_ip
//======================================================================================================================

        if ( Validator::Exists('subnet_ip', $params) )
        {
            $table_name = "unit_network_subnets";
            $table_column_id = "subnet_ip";
            $table_column_name = "subnet_ip";

            $param = Validator::toArray($subnet_ip);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
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
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetIpType." : ".$values, ExceptionCodes::InvalidUnitNetworkSubnetIpType);

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
//= $subnet_default_router
//======================================================================================================================

        if ( Validator::Exists('subnet_default_router', $params) )
        {
            $table_name = "unit_network_subnets";
            $table_column_id = "subnet_default_router";
            $table_column_name = "subnet_default_router";

            $param = Validator::toArray($subnet_default_router);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
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
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterType." : ".$values, ExceptionCodes::InvalidUnitNetworkSubnetDefaultRouterType);

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
//= $mask
//======================================================================================================================

        if ( Validator::Exists('mask', $params) )
        {
            $table_name = "unit_network_subnets";
            $table_column_id = "mask";
            $table_column_name = "mask";

            $param = Validator::toArray($mask);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
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
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetMaskType." : ".$values, ExceptionCodes::InvalidUnitNetworkSubnetMaskType);

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
//= $unit
//======================================================================================================================

        if ( Validator::Exists('unit', $params) )
        {
            $table_name = "units";
            $table_column_id = "mm_id";
            $table_column_name = "name";

            $param = Validator::toArray($unit);

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
                    throw new Exception(ExceptionMessages::InvalidUnitType." : ".$values, ExceptionCodes::InvalidUnitType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $unit_network_subnet_type,
//======================================================================================================================

        if ( Validator::Exists('unit_network_subnet_type', $params) )
        {
            $table_name = "unit_network_subnet_types";
            $table_column_id = "unit_network_subnet_type_id";
            $table_column_name = "subnet_type";

            $param = Validator::toArray($unit_network_subnet_type);

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
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeType." : ".$values, ExceptionCodes::InvalidUnitNetworkSubnetTypeType);
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

        if ( Validator::Missing('orderby', $params) )
            $orderby = "mm_id";
        else
        {
            $columns = array(
                "unit_network_subnet_id",
                "subnet_name",
                "subnet_ip",
                "subnet_default_router",
                "mask",
                "mm_id",
                "unit_network_subnet_type_id",
            );

            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        $sqlSelect = "SELECT
                        unit_network_subnets.unit_network_subnet_id,
                        unit_network_subnets.subnet_name,
                        unit_network_subnets.subnet_ip,
                        unit_network_subnets.subnet_default_router,
                        unit_network_subnets.mask,
                        units.mm_id,
                        units.registry_no,
                        units.name as unit_name,
                        units.special_name as special_unit_name,
                        unit_network_subnet_types.unit_network_subnet_type_id,
                        unit_network_subnet_types.subnet_type as unit_network_subnet_type
                     ";

        $sqlFrom   = "FROM unit_network_subnets
                      LEFT JOIN unit_network_subnet_types ON unit_network_subnets.unit_network_subnet_type_id = unit_network_subnet_types.unit_network_subnet_type_id
                      LEFT JOIN units ON unit_network_subnets.mm_id = units.mm_id";

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
                "unit_network_subnet_id"        => Validator::toIntVal($row["unit_network_subnet_id"]),
                "subnet_name"                   => $row["subnet_name"],
                "subnet_ip"                     => $row["subnet_ip"],
                "subnet_default_router"         => $row["subnet_default_router"],
                "mask"                          => $row["mask"],
                "mm_id"                         => Validator::toIntVal($row["mm_id"]),
                "registry_no"                   => $row["registry_no"],
                "unit_name"                     => $row["unit_name"],
                "special_unit_name"             => $row["special_unit_name"],
                "unit_network_subnet_type_id"   => Validator::toIntVal($row["unit_network_subnet_type_id"]),
                "unit_network_subnet_type"      => $row["unit_network_subnet_type"],
            );
        }

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
        $result["sql"] =  trim(preg_replace('/\s\s+/', ' ', $sql));
    }

    return $result;
}

?>