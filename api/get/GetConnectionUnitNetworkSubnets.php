<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DEPRECATED
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Συσχετίσεις Διασύνδεσης και Υποδικτύου Μονάδας</b>
 * 
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλες τις Συσχετίσεις Διασύνδεσης και Υποδικτύου Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/connection_unit_network_subnets
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς τον Κωδικό της Διασύνδεσης του Υποδικτύου της Μονάδας
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
 *    curl -X GET https://mm.sch.gr/api/connection_unit_network_subnets \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"connection": "3554"}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "connection": "3554" });
 * 
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/connection_unit_network_subnets");
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
 *    $params = array("connection" => "3554");
 * 
 *    $curl = curl_init("https://mm.sch.gr/api/connection_unit_network_subnets");
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
 *        url: 'https://mm.sch.gr/api/connection_unit_network_subnets',
 *        dataType: "json",
 *        data:{"connection": "3554"},
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
 *      "connection_unit_network_id": 4,
 *      "connection": {
 *        "connection_id": 3554,
 *        "connection_mm_id": "1000019"
 *      },
 *      "unit_network_subnet": {
 *        "unit_network_subnet_id": 3552,
 *        "unit_network_subnet_mm_id": "1000019"
 *      }
 *    },
 *    {
 *      "connection_unit_network_id": 5,
 *      "connection": {
 *        "connection_id": 3554,
 *        "connection_mm_id": "1000019"
 *      },
 *      "unit_network_subnet": {
 *        "unit_network_subnet_id": 19937,
 *        "unit_network_subnet_mm_id": "1000019"
 *      }
 *    }
 * ]}
 * </code>
 * <br>
 * 
 *  
 * 
 * @param integer $connection_unit_network_subnet Διασύνδεση Υποδίκτυου Μονάδας
 * <br>Ο Κωδικός της Διασύνδεσης του Υποδικτύου Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Διασύνδεσης του Υποδικτύου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό της Διασύνδεσης του Υποδικτύου Μονάδας γίνεται με τον Tύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[integer]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 *
 * @param integer $connection Διασύνδεση
 * <br>Ο Κωδικός της Διασύνδεσης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Διασυνδέσεις : {@see GetConnections}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικός της Διασύνδεσης
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 * @param mixed $unit_network_subnet Υποδίκτυο Μονάδας
 * <br>Ο Κωδικός και το Όνομα του Υποδικτύου Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Υποδίκτυα Μονάδας : {@see GetUnitNetworkSubnets}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Υποδικτύου Μονάδας
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Υποδικτύου Μονάδας
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
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Κωδικός της Διασύνδεσης του Υποδικτύου Μονάδας
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
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στον Κωδικό (<a href="#$connection_unit_network_subnet">$connection_unit_network_subnet</a>) της Διασύνδεσης του Υποδικτύου Μονάδας
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
 *    <li>integer : <b>connection_unit_network_subnet_id</b> : Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας</li>
 *
 *    <li>array : <b>connection</b> : Μονάδα
 *       <ul>
 *          <li>integer : <b>connection_id</b> : Ο Κωδικός της Διασύνδεσης (Διασυνδέσεις : {@see GetConnections})</li>
 *          <li>integer : <b>connection_mm_id</b> : Ο Κωδικός της Σχολικής Μονάδας της Διασύνδεσης (Σχολικές Μονάδες : {@see GetUnits})</li>
 *       </ul>
 *   </li>
 *
 *    <li>array : <b>unit_network_subnet</b> : Υποδίκτυο Μονάδας
 *       <ul>
 *          <li>integer : <b>unit_network_subnet_id</b> : Ο Κωδικός του Υποδικτύου Μονάδας (Υποδίκτυα Μονάδας : {@see GetUnitNetworkSubnets})</li>
 *          <li>integer : <b>unit_network_subnet_mm_id</b> : Ο Κωδικός της Σχολικής Μονάδας του Υποδικτύου (Σχολικές Μονάδες : {@see GetUnits})</li>
 *       </ul>
 *   </li>
 * </ul>
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
 * @throws InvalidConnectionUnitNetworkOSubnetIDType {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDType}
 * <br>{@see ExceptionCodes::InvalidConnectionUnitNetworkOSubnetIDType}
 * <br>Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας πρέπει να είναι αριθμητικός
 *
 * @throws InvalidUnitNetworkSubnetType {@see ExceptionMessages::InvalidUnitNetworkSubnetType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetType}
 * <br>Το Υποδικτύο της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό
 *
 * @throws InvalidConnectionType {@see ExceptionMessages::InvalidConnectionType}
 * <br>{@see ExceptionCodes::InvalidConnectionType}
 * <br>H Διασύνδεση πρέπει να είναι αριθμητική
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

function GetConnectionUnitNetworkSubnets(
    $connection_unit_network_subnet, $unit_network_subnet, $connection,
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
//= $connection_unit_network_subnet
//======================================================================================================================

        if ( Validator::Exists('connection_unit_network_subnet', $params) )
        {
            $table_name = "connection_unit_network_subnets";
            $table_column_id = "connection_unit_network_subnet_id";
            $table_column_name = "connection_unit_network_subnet_id";

            $param = Validator::toArray($connection_unit_network_subnet);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDType." : ".$values, ExceptionCodes::InvalidConnectionUnitNetworkOSubnetIDType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $unit_network_subnet
//======================================================================================================================

        if ( Validator::Exists('unit_network_subnet', $params) )
        {
            $table_name = "unit_network_subnets";
            $table_column_id = "unit_network_subnet_id";
            $table_column_name = "subnet_name";

            $param = Validator::toArray($unit_network_subnet);

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
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetType." : ".$values, ExceptionCodes::InvalidUnitNetworkSubnetType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $connection
//======================================================================================================================

        if ( Validator::Exists('connection', $params) )
        {
            $table_name = "connections";
            $table_column_id = "connection_id";
            $table_column_name = "connection_id";

            $param = Validator::toArray($connection);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidConnectionType." : ".$values, ExceptionCodes::InvalidConnectionType);
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
                "connection_unit_network_subnet_id",
                "unit_network_subnet_id",
                "unit_network_subnet_mm_id",
                "connection_id",
                "connection_mm_id"
            );

            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }
        else
            $orderby = "group";

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        $sqlSelect = "SELECT
                        connection_unit_network_subnets.connection_unit_network_subnet_id,
                        connection_unit_network_subnets.unit_network_subnet_id,
                        connection_unit_network_subnets.connection_id,
                        connections.mm_id as connection_mm_id,
                        unit_network_subnets.mm_id as unit_network_subnet_mm_id                     
                     ";

        $sqlFrom   = "FROM connection_unit_network_subnets
                        LEFT JOIN connections on connection_unit_network_subnets.connection_id = connections.connection_id
                        LEFT JOIN unit_network_subnets on connection_unit_network_subnets.unit_network_subnet_id = unit_network_subnets.unit_network_subnet_id";

        $sqlWhere = (count($filter) > 0 ? " WHERE " . implode(" AND ", $filter) : "" );
        $sqlOrder = " ORDER BY ". (strtolower($orderby) == "group" ? "'group'" : $orderby )  ." ". $ordertype;
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
                "connection_unit_network_subnet_id"  => $row["connection_unit_network_subnet_id"] ? (int)$row["connection_unit_network_subnet_id"] : null,

                "connection" => array(
                    "connection_id"     => $row["connection_id"] ? (int)$row["connection_id"] : null,
                    "connection_mm_id"  => $row["connection_mm_id"] ? (int)$row["connection_mm_id"] : null,
                ),

                "unit_network_subnet" => array(
                    "unit_network_subnet_id"      => $row["unit_network_subnet_id"] ? (int)$row["unit_network_subnet_id"] : null,
                    "unit_network_subnet_mm_id"   => $row["unit_network_subnet_mm_id"] ? (int)$row["unit_network_subnet_mm_id"] : null
                )
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

    return $result;
}

?>