<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Διαγραφή Συσχέτισης Διασύνδεσης και Υποδικτύου Μονάδας</b>
 *
 *
 * Η συνάρτηση αυτή διαγράφει την Συσχέτιση Διασύνδεσης και Υποδικτύου Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο DELETE :
 * <br> http://mm.sch.gr/api/connection_unit_network_subnets
 *
 *
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
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
 * <a id="cURL"></a>Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 *    curl -X DELETE http://mm.sch.gr/api/connection_unit_network_subnets \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d { "connection_unit_network_subnet_id" : "1" }'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"connection_unit_network_subnet_id" : "1"});
 *
 *    var http = new XMLHttpRequest();
 *    http.open("DELETE", "http://mm.sch.gr/api/connection_unit_network_subnets");
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
 *            document.write(result.status + " : " + result.message);
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
 * <a id="PHP"></a>Παράδειγμα κλήσης της μεθόδου με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 *
 * $params = array("connection_unit_network_subnet_id" => "1");
 *
 * $curl = curl_init("http://mm.sch.gr/api/connection_unit_network_subnets");
 *
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
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
 *<a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'DELETE',
 *        url: 'http://mm.sch.gr/api/connection_unit_network_subnets',
 *        dataType: "json",
 *        data: {
 *           "connection_unit_network_subnet_id" : "1"
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
 * <br><b>Πίνακας Δεδομένων</b>
 * <br><a id="data"></a>Παρακάτω εμφανίζεται πίνακας σε μορφή JSON :
 * <code>
 * {
 *   "method": "DeleteConnectionUnitNetworkSubnets",
 *   "connection_unit_network_subnet_id": 1,
 *   "status": 200,
 *   "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 *
 * @param integer $connection_unit_network_subnet_id <b><i>Κωδικός Διασύνδεσης του Υποδικτύου Μονάδας</i></b>
 * <br>Ο Κωδικός της Διασύνδεσης του Υποδικτύου Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Συσχετίσεις Διασύνδεσης και Υποδικτύου Μονάδας : {@see GetUnitNetworkSubnets}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικός της Διασύνδεσης του Υποδικτύου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>connection_unit_network_subnet_id</b> : Ο Κωδικός της Διασύνδεσης του Υποδικτύου Μονάδας
 *
 *
 *
 * @throws Unauthorized {@see ExceptionMessages::Unauthorized}
 * <br>{@see ExceptionCodes::Unauthorized}
 * <br>Έλεγχος αν ο χρήστης υπάρχει και έχει δικαιώματα να χρησιμοποιείσει τη μέθοδο
 *
 * @throws MissingConnectionUnitNetworkOSubnetIDValue {@see ExceptionMessages::MissingConnectionUnitNetworkOSubnetIDValue}
 * <br>{@see ExceptionCodes::MissingConnectionUnitNetworkOSubnetIDValue}
 * <br>Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας πρέπει να έχει τιμή
 *
 * @throws InvalidConnectionUnitNetworkOSubnetIDArray {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDArray}
 * <br>{@see ExceptionCodes::InvalidConnectionUnitNetworkOSubnetIDArray}
 * <br>Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidConnectionUnitNetworkOSubnetValue {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetValue}
 * <br>{@see ExceptionCodes::InvalidConnectionUnitNetworkOSubnetValue}
 * <br>Η Διασύνδεση του Υποδικτύου της Μονάδας δεν βρέθηκε
 *
 * @throws InvalidConnectionUnitNetworkOSubnetIDType {@see ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDType}
 * <br>{@see ExceptionCodes::InvalidConnectionUnitNetworkOSubnetIDType}
 * <brΟ Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας πρέπει να είναι αριθμητικός
 *
 * @throws MissingConnectionUnitNetworkOSubnetIDParam {@see ExceptionMessages::MissingConnectionUnitNetworkOSubnetIDParam}
 * <br>{@see ExceptionCodes::MissingConnectionUnitNetworkOSubnetIDParam}
 * <br>Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο
 *
 *
 *
 */


function DeleteConnectionUnitNetworkSubnets(
    $connection_unit_network_subnet_id
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
//= Check if $connection_unit_network_subnet_id record exists
//======================================================================================================================

        $param = $connection_unit_network_subnet_id;
        $table_column_name = 'connection_unit_network_subnet_id';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingConnectionUnitNetworkOSubnetIDValue." : ".$param, ExceptionCodes::MissingConnectionUnitNetworkOSubnetIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDArray." : ".$param, ExceptionCodes::InvalidConnectionUnitNetworkOSubnetIDArray);
            }
            elseif ( Validator::isID($param) )
            {
                $connection_unit_network_subnet_id = Validator::toID($param);

                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $connection_unit_network_subnet_id );

                $sql = "SELECT
                        connection_unit_network_subnet_id,
                        connection_id,
                        unit_network_subnet_id
                FROM connection_unit_network_subnets WHERE ".$filters["connection_unit_network_subnet_id"];

                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidConnectionUnitNetworkOSubnetValue." : ".$connection_unit_network_subnet_id, ExceptionCodes::InvalidConnectionUnitNetworkOSubnetValue);
                }

            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidConnectionUnitNetworkOSubnetIDType." : ".$param, ExceptionCodes::InvalidConnectionUnitNetworkOSubnetIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingConnectionUnitNetworkOSubnetIDParam, ExceptionCodes::MissingConnectionUnitNetworkOSubnetIDParam);
        }
               
//==============================================================================================================
//= DELETE
//==============================================================================================================

        //= DELETE
        $sql = "DELETE FROM connection_unit_network_subnets WHERE " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["connection_unit_network_subnet_id"] = $connection_unit_network_subnet_id;
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