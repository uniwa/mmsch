<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DEPRECATED
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Τάξεις</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλες τις Τάξεις των Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/levels
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Όνομα της Τάξης
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
 *    curl -X GET https://mm.sch.gr/api/levels \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"unit": "1002553"}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "unit": "1002553" });
 * 
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/levels");
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
 *    $params = array("unit" => "1002553");
 * 
 *    $curl = curl_init("https://mm.sch.gr/api/levels");
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
 *        url: 'https://mm.sch.gr/api/levels',
 *        dataType: "json",
 *        data:{"unit": "1002553"},
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
 *    {
 *      "level_id": 3061,
 *      "level": "Α",
 *      "groups_count": 2,
 *      "students_count": 38,
 *      "unit": {
 *        "mm_id": 1002553,
 *        "registry_no": "9050097",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *        "special_unit_name": null
 *      },
 *      "groups": [
 *        {
 *          "group_id": 6773,
 *          "group": "Α1",
 *          "students_count": 20
 *        },
 *        {
 *          "group_id": 6774,
 *          "group": "Α2",
 *          "students_count": 18
 *        }
 *      ]
 *    },
 *    {
 *      "level_id": 3062,
 *      "level": "Β",
 *      "groups_count": 2,
 *      "students_count": 29,
 *      "unit": {
 *        "mm_id": 1002553,
 *        "registry_no": "9050097",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *        "special_unit_name": null
 *      },
 *      "groups": [
 *        {
 *          "group_id": 6775,
 *          "group": "Β1",
 *          "students_count": 14
 *        },
 *        {
 *          "group_id": 6776,
 *          "group": "Β2",
 *          "students_count": 15
 *        }
 *      ]
 *    },
 *    {
 *      "level_id": 3063,
 *      "level": "Γ",
 *      "groups_count": 1,
 *      "students_count": 24,
 *      "unit": {
 *        "mm_id": 1002553,
 *        "registry_no": "9050097",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *        "special_unit_name": null
 *      },
 *      "groups": [
 *        {
 *          "group_id": 6777,
 *          "group": "Γ1",
 *          "students_count": 24
 *        }
 *      ]
 *    },
 *    {
 *      "level_id": 3064,
 *      "level": "Δ",
 *      "groups_count": 1,
 *      "students_count": 16,
 *      "unit": {
 *        "mm_id": 1002553,
 *        "registry_no": "9050097",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *        "special_unit_name": null
 *      },
 *      "groups": [
 *        {
 *          "group_id": 6778,
 *          "group": "Δ1",
 *          "students_count": 16
 *        }
 *      ]
 *    },
 *    {
 *      "level_id": 3065,
 *      "level": "Ε",
 *      "groups_count": 2,
 *      "students_count": 32,
 *      "unit": {
 *        "mm_id": 1002553,
 *        "registry_no": "9050097",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *        "special_unit_name": null
 *      },
 *      "groups": [
 *        {
 *          "group_id": 6779,
 *          "group": "Ε1",
 *          "students_count": 16
 *        },
 *        {
 *          "group_id": 6780,
 *          "group": "Ε2",
 *          "students_count": 16
 *        }
 *      ]
 *    },
 *    {
 *      "level_id": 3066,
 *      "level": "ΣΤ",
 *      "groups_count": 2,
 *      "students_count": 32,
 *      "unit": {
 *        "mm_id": 1002553,
 *        "registry_no": "9050097",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *        "special_unit_name": null
 *      },
 *      "groups": [
 *        {
 *          "group_id": 6781,
 *          "group": "ΣΤ1",
 *          "students_count": 16
 *        },
 *        {
 *          "group_id": 6782,
 *          "group": "ΣΤ2",
 *          "students_count": 16
 *        }
 *      ]
 *    }
 * ]}
 * </code>
 * <br>
 * 
 *  
 * 
 * @param mixed $level Τάξη
 * <br>Το Όνομα ή ο Κωδικός της Τάξης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι :mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Τάξης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Τάξης
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου, ενώ
 *       <br>Αν η παράμετρος Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) δεν έχει τιμή τότε η αναζήτηση
 *       στο Όνομα της Τάξης γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
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
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Όνομα της Τάξης
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
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Όνομα (<a href="#$level">$level</a>) της Τάξης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
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
 *    <li>integer : <b>level_id</b> : Ο Κωδικός της Τάξης</li>
 *    <li>string : <b>level</b> : Το όνομα της Τάξης</li>
 *    <li>integer : <b>groups_count</b> : Το Πλήθος των Τμημάτων της Τάξης</li>
 *    <li>integer : <b>students_count</b> : Το Πλήθος των Μαθητών της Τάξης</li>
 *
 *    <li>array : <b>unit</b> : Μονάδα
 *       <ul>
 *          <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας (Μονάδες : {@see GetUnits})</li>
 *          <li>string : <b>registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *          <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας</li>
 *          <li>string : <b>special_unit_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *       </ul>
 *   </li>
 *
 *    <li>array : <b>groups</b> : Τμήματα
 *       <ul>
 *          <li>integer : <b>group_id</b> : Ο Κωδικός του Τμήματος</li>
 *          <li>string : <b>group</b> : Το όνομα του Τμήματος (Τμήματα : {@see GetGroups})</li>
 *          <li>integer : <b>students_count</b> : Το Πλήθος των Μαθητών του Τμήματος</li>
 *       </ul>
 *   </li>
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
 * @throws InvalidLevelType {@see ExceptionMessages::InvalidLevelType}
 * <br>{@see ExceptionCodes::InvalidLevelType}
 * <br>Η Τάξη πρέπει να είναι αριθμητική ή αλφαριθμητική
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

function GetLevels( $level, $unit,
                    $pagesize, $page, $orderby, $ordertype, $searchtype) {
    
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
                        "l.levelId"        => "level_id",
                        "l.name"           => "level",
                        "l.groupsCount"    => "groups_count",
                        "l.studentsCount"  => "students_count",
                        "u.mmId"           => "mm_id",
                        "u.registryNo"     => "registry_no",
                        "u.name"           => "unit_name",
                        "u.specialName"    => "special_unit_name"      
                       );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "level";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        } 

//$level========================================================================
        if (Validator::Exists('level', $params)){
                CRUDUtils::setFilter($qb, $level, "l", "levelId", "name", "id,value", ExceptionMessages::InvalidLevelType, ExceptionCodes::InvalidLevelType);
        }

//$unit=========================================================================
        if (Validator::Exists('unit', $params)){
                CRUDUtils::setFilter($qb, $unit, "u", "mmId", "name", "id,value", ExceptionMessages::InvalidUnitType, ExceptionCodes::InvalidUnitType);
        }
  
//execution=====================================================================
        $qb->select('l,u,g');
        $qb->from('Levels','l');
        $qb->leftjoin('l.mm','u');
        $qb->leftjoin('l.groups','g');
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

            $data = array(
                            "level_id"        => $row->getLevelId(),
                            "level"           => $row->getName(),
                            "groups_count"    => $row->getGroupsCount(), 
                            "students_count"  => $row->getStudentsCount()  
                          );
            
            //UNITS results=====================================================
            $data["unit"] = array();
            $data["unit"] = array(  "mm_id"             => (int)$row->getMm()->getMmId(),
                                    "registry_no"       => $row->getMm()->getRegistryNo(),
                                    "unit_name"         => $row->getMm()->getName(),
                                    "special_unit_name" => $row->getMm()->getSpecialName()
                                 );
            
                $data["groups"] = array();
                foreach ($row->getGroups() as $rowGroup)
                {
                //LEVELS results================================================            
                $data["groups"][] = array(  "group_id"       => $rowGroup->getGroupId(),
                                           "group"          => $rowGroup->getName(),
                                           "students_count" => $rowGroup->getStudentsCount()
                                       );
                }

            $count++;
            $result["data"][] = $data;
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