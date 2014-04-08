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
 * <b>Καταχώρηση Δικτυακών Αντικειμένων Μονάδας</b>
 * 
 *
 * Η συνάρτηση αυτή καταχωρεί Δικτυακά Αντικείμενα Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> http://mmsch.teiath.gr/api/unit_network_objects <br><br>
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
 *  <li><b>ip</b>GetUnitNetworkObjects με search_type=EXACT & ip="value" </li>
 *  <li><b>object_dns_name</b><br>GetUnitNetworkObjects με search_type=EXACT & object_dns_name="value" </li>
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
 * curl -X POST http://mmsch.teiath.gr/api/unit_network_objects \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"ip": "", \
 *  	  "object_dns_name": "", \
 *  	  "description": "", \
 *  	  "unit_network_subnet_id": }'
 * </code>
 * <br>
 *
 *
 *  
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *  	"ip": "",
 *  	"object_dns_name": "",
 *  	"description": "",
 *  	"unit_network_subnet_id":
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "http://mmsch.teiath.gr/api/unit_network_objects");
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
 *  	"ip"=> "",
 *  	"object_dns_name"=> "",
 *  	"description"=> "",
 *  	"unit_network_subnet_id"=>
 * );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/unit_network_objects");
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
 *        url: 'http://mmsch.teiath.gr/api/unit_network_objects',
 *        dataType: "json",
 *        data: {
 *  		"ip": "",
 *  		"object_dns_name": "",
 *  		"description": "",
 *  		"unit_network_subnet_id":
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
 *    "method": "PostUnitNetworkObjects",
 *    "unit_network_object_id": "",
 *    "status": 200,
 *    "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 * @param integer $unit_network_subnet_id Υποδίκτυο Μονάδας
 * <br>Ο Κωδικός του Υποδικτύου Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Υποδίκτυα Μονάδας : {@see GetUnitNetworkSubnets}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Υποδικτύου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param string $ip Όνομα Υποδικτύου Μονάδας
 * <br>Η Διεύθυνση IP του Δικτυακού Αντικειμένου
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * @param string $object_dns_name Όνομα Υποδικτύου Μονάδας
 * <br>Το DNS Όνομα του Δικτυακού Αντικειμένου
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $description Όνομα Υποδικτύου Μονάδας
 * <br>H Περιγραφή του Δικτυακού Αντικειμένου
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * 
 *   
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>unit_network_object_id</b> : Ο Κωδικός του Δικτυακού Αντικειμένου Μονάδας</li>
 * </ul>
 * 
 *
 * @throws MissingUnitNetworkObjectIpValue {@see ExceptionMessages::MissingUnitNetworkObjectIpValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkObjectIpValue}
 * <br>Η IP των Δικτυακών Αντικειμένων της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkObjectIpArray {@see ExceptionMessages::InvalidUnitNetworkObjectIpArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkObjectIpArray}
 * <br>Η IP των Δικτυακών Αντικειμένων της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkObjectIpType {@see ExceptionMessages::InvalidUnitNetworkObjectIpType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkObjectIpType}
 * <br>Η IP των Δικτυακών Αντικειμένων της Μονάδας πρέπει να έχει αριθμητική μορφή IP
 *
 * @throws MissingUnitNetworkObjectIpParam {@see ExceptionMessages::MissingUnitNetworkObjectIpParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkObjectIpParam}
 * <br>Η IP των Δικτυακών Αντικειμένων της Μονάδας είναι υποχρεωτικό πεδίο
 *
 * @throws DuplicatedUnitNetworkObjectIpValue {@see ExceptionMessages::DuplicatedUnitNetworkObjectIpValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitNetworkObjectIpValue}
 * <br>Η διεύθυνση IP του Δικτυακού Αντικειμένου της Μονάδας υπάρχει ήδη
 * 
 * @throws MissingUnitNetworkObjectDnsNameValue {@see ExceptionMessages::MissingUnitNetworkObjectDnsNameValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkObjectDnsNameValue}
 * <br>Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkObjectDnsNameArray {@see ExceptionMessages::InvalidUnitNetworkObjectDnsNameArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkObjectDnsNameArray}
 * <br>Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkObjectDnsNameType {@see ExceptionMessages::InvalidUnitNetworkObjectDnsNameType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkObjectDnsNameType}
 * <br>Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας πρέπει να είναι αλφαριθμητικό
 *
 * @throws MissingUnitNetworkObjectDnsNameParam {@see ExceptionMessages::MissingUnitNetworkObjectDnsNameParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkObjectDnsNameParam}
 * <br>Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας είναι υποχρεωτικό πεδίο
 *
 * @throws DuplicatedUnitNetworkObjectDnsNameValue {@see ExceptionMessages::DuplicatedUnitNetworkObjectDnsNameValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitNetworkObjectDnsNameValue}
 * <br>Το DNS όνομα του Δικτυακού Αντικειμένου της Μονάδας υπάρχει ήδη
 *
 * @throws InvalidUnitNetworkObjectDescriptionType {@see ExceptionMessages::InvalidUnitNetworkObjectDescriptionType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkObjectDescriptionType}
 * <br>Η Περιγραφή των Δικτυακών Αντικειμένων της Μονάδας πρέπει να είναι αλφαριθμητική
 *
 * @throws MissingUnitNetworkSubnetIDValue {@see ExceptionMessages::MissingUnitNetworkSubnetIDValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetIDValue}
 * <br>Ο Κωδικός του Υποδικτύου της Μονάδας της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkSubnetIDArray {@see ExceptionMessages::InvalidUnitNetworkSubnetIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetIDArray}
 * <br>Ο Κωδικός του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkSubnetValue {@see ExceptionMessages::InvalidUnitNetworkSubnetValue}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetValue}
 * <br>Το Υποδικτύο της Μονάδας δεν βρέθηκε
 *
 * @throws InvalidUnitNetworkSubnetIDType {@see ExceptionMessages::InvalidUnitNetworkSubnetIDType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetIDType}
 * <br>Ο Κωδικός του Υποδικτύου της Μονάδας πρέπει να είναι αριθμητικός
 *
 * @throws MissingUnitNetworkSubnetIDParam {@see ExceptionMessages::MissingUnitNetworkSubnetIDParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetIDParam}
 * <br>Ο Κωδικός του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο
 *
 */

function PostUnitNetworkObjects(
    $ip, $object_dns_name, $description, 
    $unit_network_subnet_id
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
//= Check $ip
//======================================================================================================================

        $param = $ip;
        $table_column_name = 'ip';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkObjectIpValue, ExceptionCodes::MissingUnitNetworkObjectIpValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkObjectIpArray." : ".$param, ExceptionCodes::InvalidUnitNetworkObjectIpArray);
            }
            elseif ( Validator::IsIp($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkObjectIpType." : ".$param, ExceptionCodes::InvalidUnitNetworkObjectIpType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkObjectIpParam, ExceptionCodes::MissingUnitNetworkObjectIpParam);
        }
//======================================================================================================================
//= Check for ip uniques
//======================================================================================================================

        if ( $filters["ip"] )
        {
            $sql = "SELECT
                    unit_network_object_id,
                    ip
                    FROM unit_network_objects WHERE ".$filters["ip"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedUnitNetworkObjectIpValue." : ".$rows[0]["ip"], ExceptionCodes::DuplicatedUnitNetworkObjectIpValue);
            }
        }
        
//======================================================================================================================
//= Check $object_dns_name
//======================================================================================================================

        $param = $object_dns_name;
        $table_column_name = 'object_dns_name';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkObjectDnsNameValue, ExceptionCodes::MissingUnitNetworkObjectDnsNameValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkObjectDnsNameArray." : ".$param, ExceptionCodes::InvalidUnitNetworkObjectDnsNameArray);
            }
            elseif ( Validator::isValue($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkObjectDnsNameType." : ".$param, ExceptionCodes::InvalidUnitNetworkObjectDnsNameType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkObjectDnsNameParam, ExceptionCodes::MissingUnitNetworkObjectDnsNameParam);
        }
//======================================================================================================================
//= Check for object_dns_name uniques
//======================================================================================================================

        if ( $filters["object_dns_name"] )
        {
            $sql = "SELECT
                    unit_network_object_id,
                    object_dns_name
                    FROM unit_network_objects WHERE ".$filters["object_dns_name"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedUnitNetworkObjectDnsNameValue." : ".$rows[0]["object_dns_name"], ExceptionCodes::DuplicatedUnitNetworkObjectDnsNameValue);
            }
        }
        
//======================================================================================================================
//= Check $description
//======================================================================================================================

        $param = $description;
        $table_column_name = 'description';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = NULL";
            }
            elseif ( Validator::isValue($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = ". $db->quote( Validator::toValue($param) );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkObjectDescriptionType." : ".$param, ExceptionCodes::InvalidUnitNetworkObjectDescriptionType);
            }
        }

//======================================================================================================================
//= Check if $unit_network_subnet_id record exists
//======================================================================================================================

        $param = $unit_network_subnet_id;
        $table_column_name = "unit_network_subnet_id";
        $table_name = "unit_network_subnets";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetIDValue, ExceptionCodes::MissingUnitNetworkSubnetIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetIDArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetIDArray);
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
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetValue." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetIDType." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetIDParam, ExceptionCodes::MissingUnitNetworkSubnetIDParam);
        }

//======================================================================================================================
//= INSERT
//======================================================================================================================

        $sql = "INSERT INTO unit_network_objects SET " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["unit_network_object_id"] = $db->lastInsertId();
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