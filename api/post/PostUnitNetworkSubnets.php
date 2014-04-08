<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Καταχώρηση Υποδικτύων Μονάδας</b>
 * 
 *
 * Η συνάρτηση αυτή καταχωρεί Υποδίκτυα Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> http://mmsch.teiath.gr/api/unit_network_subnets <br><br>
 *
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 *
 * <br><b>Ορισμός Μοναδικών Τιμών Παραμέτρων</b>
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος:
 * <ul>
 *  <li><b>subnet_name</b><br>GetUnitNetworkSubnets με search_type=EXACT & subnet_name="value" </li>
 *  <li><b>subnet_ip</b><br>GetUnitNetworkSubnets με search_type=EXACT & subnet_ip="value" </li>
 *  <li><b>mask</b><br>GetUnitNetworkSubnets με search_type=EXACT & mask="value" </li>
 * </ul>
 * <br>
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
 *
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 * curl -X POST http://mmsch.teiath.gr/api/unit_network_subnets \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"subnet_name" : "", \
 *        "subnet_ip" : "", \
 *        "mask" : "", \
 *        "subnet_default_router" : "", \
 *        "mm_id" : "", \
 *        "unit_network_subnet_type_id" : "" }'
 * </code>
 * <br>
 *
 *
 *  
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "subnet_name" : "",
 *        "subnet_ip" : "",
 *        "mask" : "",
 *        "subnet_default_router" : "",
 *        "mm_id" : "",
 *        "unit_network_subnet_type_id" : ""
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "http://mmsch.teiath.gr/api/unit_network_subnets");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    
 *    http.onreadystatechange = function() {
 *        if(http.readyState == 4 && http.status == 200) {
 *            alert(http.responseText);
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
 * $params = array(
 *        "subnet_name" => "",
 *        "subnet_ip" => "",
 *        "mask" => "",
 *        "subnet_default_router" => "",
 *        "mm_id" => "",
 *        "unit_network_subnet_type_id" => ""
 * );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/unit_network_subnets");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
 * curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 * curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 * 
 * $data = json_decode( curl_exec($curl) );
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
 *        type: 'POST',
 *        url: 'http://mmsch.teiath.gr/api/unit_network_subnets',
 *        dataType: "json",
 *        data: {
 *           "subnet_name" : "",
 *           "subnet_ip" : "",
 *           "mask" : "",
 *           "subnet_default_router" : "",
 *           "mm_id" : "",
 *           "unit_network_subnet_type_id" : ""
 *        },
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
 * <br><a id="data"></a>Παρακάτω εμφανίζεται πίνακας σε μορφή JSON :
 * <code>
 * {
 *    "method": "PostUnitNetworkSubnets",
 *    "unit_network_subnet_id": "",
 *    "status": 200,
 *    "message": "success"
 * }
 * </code>
 * <br>
 * 
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $unit_network_subnet_type_id Τύπος Υποδικτύου
 * <br>Ο Κωδικός του Τύπου Υποδικτύου
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Τύποι Υποδικτύου : {@see GetUnitNetworkSubnetTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Τύπου Υποδικτύου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 * @param string $subnet_name Όνομα Υποδικτύου Μονάδας
 * <br>Το Όνομα του Υποδικτύου Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * 
 * @param string $subnet_ip IP Υποδικτύου Μονάδας
 * <br>Η IP Διευθυνση του Υποδικτύου Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $mask Μάσκα Υποδικτύου Μονάδας
 * <br>Η Μάσκα του Υποδικτύου Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $subnet_default_router Gateway Υποδικτύου Μονάδας
 * <br>Η Default Gateway του Υποδικτύου Μονάδας
 * <br>Η παράμετροςείναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 *  
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>unit_network_subnet_id</b> : Ο Κωδικός του Υποδικτύου Μονάδας</li>
 * </ul>
 * 
 *
 *
 * @throws MissingUnitNetworkSubnetNameValue {@see ExceptionMessages::MissingUnitNetworkSubnetNameValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetNameValue}
 * <br>Το Όνομα του Υποδικτύου της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkSubnetNameArray {@see ExceptionMessages::InvalidUnitNetworkSubnetNameArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetNameArray}
 * <br>Το Όνομα του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkSubnetNameType {@see ExceptionMessages::InvalidUnitNetworkSubnetNameType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetNameType}
 * <br>Το Όνομα του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητικό
 *
 * @throws MissingUnitNetworkSubnetNameParam {@see ExceptionMessages::MissingUnitNetworkSubnetNameParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetNameParam}
 * <br>Το Όνομα του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο
 *
 * @throws DuplicatedUnitNetworkSubnetValue {@see ExceptionMessages::DuplicatedUnitNetworkSubnetValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitNetworkSubnetValue}
 * <br>Το Όνομα του Υποδικτύο της Μονάδας υπάρχει ήδη
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 * <br>Ο Κωδικός ΜΜ πρέπει να έχει τιμή
 *
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 * <br>Ο Κωδικός ΜΜ δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitValue {@see ExceptionMessages::InvalidUnitValue}
 * <br>{@see ExceptionCodes::InvalidUnitValue}
 * <br>Η Μονάδα δεν βρέθηκε
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * <br>Ο Κωδικός ΜΜ πρέπει να είναι αριθμητικός
 *
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 * <br>Ο Κωδικός ΜΜ είναι υποχρεωτικό πεδίο
 *
 * @throws MissingUnitNetworkSubnetTypeIDValue {@see ExceptionMessages::MissingUnitNetworkSubnetTypeIDValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetTypeIDValue}
 * <br>Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkSubnetTypeIDArray {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetTypeIDArray}
 * <br>Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkSubnetTypeValue {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeValue}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetTypeValue}
 * <br>Ο Τύπος του IP δικτυακού στοιχείου δεν υπάρχει στο λεξικό
 *
 * @throws InvalidUnitNetworkSubnetTypeIDType {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeIDType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetTypeIDType}
 * <br>Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου πρέπει να είναι αριθμητικός
 *
 * @throws MissingUnitNetworkSubnetTypeIDParam {@see ExceptionMessages::MissingUnitNetworkSubnetTypeIDParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetTypeIDParam}
 * <br>Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου είναι υποχρεωτικό πεδίο
 *
 * @throws MissingUnitNetworkSubnetIpValue {@see ExceptionMessages::MissingUnitNetworkSubnetIpValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetIpValue}
 * <br>H IP του Υποδικτύου της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkSubnetIpArray {@see ExceptionMessages::InvalidUnitNetworkSubnetIpArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetIpArray}
 * <br>H IP του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkSubnetIpType {@see ExceptionMessages::InvalidUnitNetworkSubnetIpType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetIpType}
 * <br>H IP του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική
 *
 * @throws MissingUnitNetworkSubnetΙpParam {@see ExceptionMessages::MissingUnitNetworkSubnetΙpParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetΙpParam}
 * <br>H IP του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο
 *
 * @throws DuplicatedUnitNetworkSubnetIpValue {@see ExceptionMessages::DuplicatedUnitNetworkSubnetIpValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitNetworkSubnetIpValue}
 * <br>Η διεύθυνση IP του Υποδικτύο της Μονάδας υπάρχει ήδη
 * 
 * @throws MissingUnitNetworkSubnetDefaultRouterValue {@see ExceptionMessages::MissingUnitNetworkSubnetDefaultRouterValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetDefaultRouterValue}
 * <br>H Default Gateway του Υποδικτύου της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkSubnetDefaultRouterArray {@see ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetDefaultRouterArray}
 * <br>H Default Gateway του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkSubnetDefaultRouterType {@see ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetDefaultRouterType}
 * <br>H Default Gateway του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική
 *
 * @throws MissingUnitNetworkSubnetDefaultRouterParam {@see ExceptionMessages::MissingUnitNetworkSubnetDefaultRouterParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetDefaultRouterParam}
 * <br>H Default Gateway του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο
 * 
 * @throws MissingUnitNetworkSubnetMaskValue {@see ExceptionMessages::MissingUnitNetworkSubnetMaskValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetMaskValue}
 * <br>H Μάσκα του Υποδικτύου της Μονάδας πρέπει να έχει τιμή
 * 
 * @throws InvalidUnitNetworkSubnetMaskArray {@see ExceptionMessages::InvalidUnitNetworkSubnetMaskArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetMaskArray}
 * <br>H Μάσκα του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 * 
 * @throws InvalidUnitNetworkSubnetMaskType {@see ExceptionMessages::InvalidUnitNetworkSubnetMaskType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetMaskType}
 * <br>H Μάσκα του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική
 * 
 * @throws MissingUnitNetworkSubnetMaskParam {@see ExceptionMessages::MissingUnitNetworkSubnetMaskParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetMaskParam}
 * <br>H Μάσκα του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο
 *
 * @throws DuplicatedUnitNetworkSubnetMaskValue {@see ExceptionMessages::DuplicatedUnitNetworkSubnetMaskValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitNetworkSubnetMaskValue}
 * <br>Η Μάσκα του Υποδικτύο της Μονάδας υπάρχει ήδη
 * 
 */

function PostUnitNetworkSubnets(
    $subnet_name, $subnet_ip, $subnet_default_router, $mask,
    $mm_id, $unit_network_subnet_type_id
)
{
    global $db;

    $array_sql = array();
    $filters = array();
    $result = array();

    $result["method"] = __FUNCTION__;

    $params = loadParameters();

    try
    {

//======================================================================================================================
//= Check $subnet_name
//======================================================================================================================

        $param = $subnet_name;
        $table_column_name = 'subnet_name';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetNameValue, ExceptionCodes::MissingUnitNetworkSubnetNameValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetNameArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetNameArray);
            }
            elseif ( Validator::isValue($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetNameType." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetNameType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetNameParam, ExceptionCodes::MissingUnitNetworkSubnetNameParam);
        }

//======================================================================================================================
//= Check for subnet_name uniques
//======================================================================================================================

        if ( $filters["subnet_name"] )
        {
            $sql = "SELECT
                    unit_network_subnet_id,
                    subnet_name
                    FROM unit_network_subnets WHERE ".$filters["subnet_name"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedUnitNetworkSubnetNameValue." : ".$rows[0]["subnet_name"], ExceptionCodes::DuplicatedUnitNetworkSubnetNameValue);
            }
        }
        
//======================================================================================================================
//= Check $subnet_ip
//======================================================================================================================

        $param = $subnet_ip;
        $table_column_name = 'subnet_ip';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetIpValue, ExceptionCodes::MissingUnitNetworkSubnetIpValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetIpArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetIpArray);
            }
            elseif ( Validator::IsIp($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetIpType." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetIpType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetΙpParam, ExceptionCodes::MissingUnitNetworkSubnetΙpParam);
        }
 
//======================================================================================================================
//= Check for subnet_ip uniques
//======================================================================================================================

        if ( $filters["subnet_ip"] )
        {
            $sql = "SELECT
                    unit_network_subnet_id,
                    subnet_ip
                    FROM unit_network_subnets WHERE ".$filters["subnet_ip"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedUnitNetworkSubnetIpValue." : ".$rows[0]["subnet_ip"], ExceptionCodes::DuplicatedUnitNetworkSubnetIpValue);
            }
        }
        
//======================================================================================================================
//= Check $mask
//======================================================================================================================

        $param = $mask;
        $table_column_name = 'mask';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetMaskValue, ExceptionCodes::MissingUnitNetworkSubnetMaskValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetMaskArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetMaskArray);
            }
            elseif ( Validator::isValue($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetMaskType." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetMaskType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetMaskParam, ExceptionCodes::MissingUnitNetworkSubnetMaskParam);
        }
        
//======================================================================================================================
//= Check for mask uniques
//======================================================================================================================

        if ( $filters["mask"] )
        {
            $sql = "SELECT
                    unit_network_subnet_id,
                    mask
                    FROM unit_network_subnets WHERE ".$filters["mask"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedUnitNetworkSubnetMaskValue." : ".$rows[0]["mask"], ExceptionCodes::DuplicatedUnitNetworkSubnetMaskValue);
            }
        }
           
//======================================================================================================================
//= Check $subnet_default_router
//======================================================================================================================

        $param = $subnet_default_router;
        $table_column_name = 'subnet_default_router';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetDefaultRouterValue, ExceptionCodes::MissingUnitNetworkSubnetDefaultRouterValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetDefaultRouterArray);
            }
            elseif ( Validator::isValue($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetDefaultRouterType." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetDefaultRouterType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetDefaultRouterParam, ExceptionCodes::MissingUnitNetworkSubnetDefaultRouterParam);
        }
     
//======================================================================================================================
//= Check if $mm_id record exists
//======================================================================================================================

        $param = $mm_id;
        $table_column_name = "mm_id";
        $table_name = "units";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitMMIDValue, ExceptionCodes::MissingUnitMMIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitMMIDArray." : ".$param, ExceptionCodes::InvalidUnitMMIDArray);
            }
            elseif (Validator::isID($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );

                $sql = "SELECT $table_column_name FROM $table_name WHERE ".$filters[ $table_column_name ];
                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidUnitValue." : ".$param, ExceptionCodes::InvalidUnitValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitMMIDType." : ".$param, ExceptionCodes::InvalidUnitMMIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitMMIDParam, ExceptionCodes::MissingUnitMMIDParam);
        }

//======================================================================================================================
//= Check if $unit_network_subnet_type_id record exists
//======================================================================================================================

        $param = $unit_network_subnet_type_id;
        $table_column_name = "unit_network_subnet_type_id";
        $table_name = "unit_network_subnet_types";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetTypeIDValue, ExceptionCodes::MissingUnitNetworkSubnetTypeIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeIDArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetTypeIDArray);
            }
            elseif (Validator::isID($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );

                $sql = "SELECT $table_column_name FROM $table_name WHERE ".$filters[ $table_column_name ];
                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeValue." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetTypeValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeIDType." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetTypeIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetTypeIDParam, ExceptionCodes::MissingUnitNetworkSubnetTypeIDParam);
        }

//======================================================================================================================
//= INSERT
//======================================================================================================================

        $sql = "INSERT INTO unit_network_subnets SET " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["unit_network_subnet_id"] = $db->lastInsertId();
        }

        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = ExceptionMessages::NoErrors;
    }
    catch (Exception $e)
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    }

    if ( Validator::isTrue( $params["debug"] ) )
    {
        $result["sql"] = $array_sql;
    }

    return $result;
}
?>