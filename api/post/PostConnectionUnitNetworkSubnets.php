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
 * <b>Καταχώρηση Συσχέτισης Διασύνδεσης και Υποδικτύου Μονάδας</b>
 * 
 *
 * Η συνάρτηση αυτή καταχωρεί την Συσχέτιση Διασύνδεσης και Υποδικτύου Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> http://mmsch.teiath.gr/api/connection_unit_network_subnets <br><br>
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
 *  <li><b>connection_id και unit_network_subnet_id</b><br>GetConnectionUnitNetworkSubnets με search_type=EXACT & connection_id="value" & unit_network_subnet_id = "value" </li>
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
 * curl -X POST http://mmsch.teiath.gr/api/connection_unit_network_subnets \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"connection_id" : "3554", \
 *        "unit_network_subnet_id" : "19937" }'
 * </code>
 * <br>
 *
 *
 *  
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "connection_id" : "3554",
 *        "unit_network_subnet_id" : "19937"
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "http://mmsch.teiath.gr/api/connection_unit_network_subnets");
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
 *        "connection_id" => "3554",
 *        "unit_network_subnet_id" => "19937"
 * );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/connection_unit_network_subnets");
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
 *        url: 'http://mmsch.teiath.gr/api/connection_unit_network_subnets',
 *        dataType: "json",
 *        data: {
 *           "connection_id" : "3554",
 *           "unit_network_subnet_id" : "19937"
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
 *    "method": "PostConnectionUnitNetworkSubnets",
 *    "connection_unit_network_subnet_id": "",
 *    "status": 200,
 *    "message": "success"
 * }
 * </code>
 * <br>
 * 
 * @param integer $connection_id Κωδικός Διασύνδεσης
 * <br>Ο Κωδικός της Διασύνδεσης
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Μονάδες : {@see GetConnections}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Διασύνδεσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $unit_network_subnet_id Κωδικός Υποδικτύου
 * <br>Ο Κωδικός του Υποδικτύου
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Υποδίκτυα : {@see GetUnitNetworkSubnets}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Υποδικτύου
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 *  
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>connection_unit_network_subnet_id</b> : Ο Κωδικός της Διασύνδεσης του Υποδικτύου Μονάδας</li>
 * </ul>
 * 
 *
 *
 * @throws MissingConnectionIDValue {@see ExceptionMessages::MissingConnectionIDValue}
 * <br>{@see ExceptionCodes::MissingConnectionIDValue}
 * <br>Ο Κωδικός της Διασύνδεσης πρέπει να έχει τιμή
 *
 * @throws InvalidConnectionIDArray {@see ExceptionMessages::InvalidConnectionIDArray}
 * <br>{@see ExceptionCodes::InvalidConnectionIDArray}
 * <br>Ο Κωδικός της Διασύνδεσης δεν μπορεί να έχει πολλαπλές τιμέςς
 *
 * @throws InvalidConnectionValue {@see ExceptionMessages::InvalidConnectionValue}
 * <br>{@see ExceptionCodes::InvalidConnectionValue}
 * <br>H Διασύνδεση δεν βρέθηκε
 *
 * @throws InvalidConnectionIDType {@see ExceptionMessages::InvalidConnectionIDType}
 * <br>{@see ExceptionCodes::InvalidConnectionIDType}
 * <br>Ο Κωδικός της Διασύνδεσης πρέπει να είναι αριθμητικός
 *
 * @throws MissingConnectionIDParam {@see ExceptionMessages::MissingConnectionIDParam}
 * <br>{@see ExceptionCodes::MissingConnectionIDParam}
 * <br>Ο Κωδικός της Διασύνδεσης είναι υποχρεωτικό πεδίο
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
 * @throws DifferenceConnectionUnitNetworkOSubnetMMIdValue {@see ExceptionMessages::DifferenceConnectionUnitNetworkOSubnetMMIdValue}
 * <br>{@see ExceptionCodes::DifferenceConnectionUnitNetworkOSubnetMMIdValue}
 * <br>Δεν είναι δυνατή η εισαγωγή Διασύνδεσης και Υποδικτύου Μονάδας με διαφορετικό Κωδικό Σχολικής Μονάδας
 *
 * @throws DuplicatedConnectionUnitNetworkOSubnetValue {@see ExceptionMessages::DuplicatedConnectionUnitNetworkOSubnetValue}
 * <br>{@see ExceptionCodes::DuplicatedConnectionUnitNetworkOSubnetValue}
 * <br>Η Διασύνδεση του Υποδικτύου της Μονάδας υπάρχει ήδη
 *
 */

function PostConnectionUnitNetworkSubnets(
    $connection_id, $unit_network_subnet_id
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
//= Check if $connection_id record exists
//======================================================================================================================

        $param = $connection_id;
        $table_column_name = "connection_id";
        $table_name = "connections";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingConnectionIDValue, ExceptionCodes::MissingConnectionIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidConnectionIDArray." : ".$param, ExceptionCodes::InvalidConnectionIDArray);
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
                    throw new Exception(ExceptionMessages::InvalidConnectionValue." : ".$param, ExceptionCodes::InvalidConnectionValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidConnectionIDType." : ".$param, ExceptionCodes::InvalidConnectionIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingConnectionIDParam, ExceptionCodes::MissingConnectionIDParam);
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
//= Check connection_unit_network_subnet has  connections.mm_id  == unit_network_subnet_mm_id   
//======================================================================================================================
        //connections.mm_id 
        $sql = "SELECT 
                connections.mm_id as connection_mm_id
                FROM connections
                WHERE " . $filters["connection_id"] ;
        
        //echo "<br><br>".$sql."<br><br>";
         $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

         $stmt = $db->query( $sql );
         $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);    
         $connection_mm_id = $rows[0]["connection_mm_id"];
         
        //unit_network_subnet_mm_id     
        $sql = "SELECT 
                unit_network_subnets.mm_id as unit_network_subnet_mm_id
                FROM unit_network_subnets
                WHERE " . $filters["unit_network_subnet_id"] ;
        
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        $stmt = $db->query( $sql );
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $unit_network_subnet_mm_id = $rows[0]["unit_network_subnet_mm_id"];    
            
        
        if ( $connection_mm_id <> $unit_network_subnet_mm_id ) {
            throw new Exception(ExceptionMessages::DifferenceConnectionUnitNetworkOSubnetMMIdValue, ExceptionCodes::DifferenceConnectionUnitNetworkOSubnetMMIdValue);  
        } 
        
        
//======================================================================================================================
//= Check connection_unit_network_subnet for duplicates
//======================================================================================================================

            $sql = "SELECT
                    connection_unit_network_subnet_id,
                    connection_id,
                    unit_network_subnet_id
                    FROM connection_unit_network_subnets 
                    WHERE " .$filters["unit_network_subnet_id"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedConnectionUnitNetworkOSubnetValue." : ".$rows[0]["mask"], ExceptionCodes::DuplicatedConnectionUnitNetworkOSubnetValue);
            }
              

//======================================================================================================================
//= INSERT
//======================================================================================================================

        $sql = "INSERT INTO connection_unit_network_subnets SET " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["connection_unit_network_subnet_id"] = $db->lastInsertId();
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