<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Διαγραφή Υποδικτύων Μονάδας</b>
 *
 *
 * Η συνάρτηση αυτή διαγράφει Υποδίκτυα Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο DELETE :
 * <br> https://mm.sch.gr/api/unit_network_subnets
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
 *    curl -X DELETE https://mm.sch.gr/api/unit_network_subnets \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d { "unit_network_subnet_id" : "" }'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"unit_network_subnet_id" : ""});
 *
 *    var http = new XMLHttpRequest();
 *    http.open("DELETE", "https://mm.sch.gr/api/unit_network_subnets");
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
 * $params = array("unit_network_subnet_id" => "");
 *
 * $curl = curl_init("https://mm.sch.gr/api/unit_network_subnets");
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
 *        url: 'https://mm.sch.gr/api/unit_network_subnets',
 *        dataType: "json",
 *        data: {
 *           "unit_network_subnet_id" : ""
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
 *   "method": "DeleteUnitNetworkSubnets",
 *   "unit_network_subnet_id": ,
 *   "status": 200,
 *   "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 *
 * @param integer $unit_network_subnet_id <b><i>Κωδικός Υποδικτύου Μονάδας</i></b>
 * <br>Ο Κωδικός του Υποδικτύου Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Υποδίκτυα Μονάδας : {@see GetUnitNetworkSubnets}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικός του Υποδικτύου Μονάδας
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
 * <br>integer : <b>unit_network_subnet_id</b> : Ο Κωδικός του Υποδικτύου Μονάδας
 *
 *
 *
 *
 * @throws Unauthorized {@see ExceptionMessages::Unauthorized}
 * <br>{@see ExceptionCodes::Unauthorized}
 * <br>Έλεγχος αν ο χρήστης υπάρχει και έχει δικαιώματα να χρησιμοποιείσει τη μέθοδο
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
 * @throws UsedUnitNetworkSubnetByUnitNetworkObjects {@see ExceptionMessages::UsedUnitNetworkSubnetByUnitNetworkObjects}
 * <br>{@see ExceptionCodes::UsedUnitNetworkSubnetByUnitNetworkObjects}
 * <br>Το Υποδικτύο της Μονάδας χρησιμοποιείται από Δικτυακά Αντικείμενα Μονάδας
 *
 * @throws UsedUnitNetworkSubnetByConnections {@see ExceptionMessages::UsedUnitNetworkSubnetByConnections}
 * <br>{@see ExceptionCodes::UsedUnitNetworkSubnetByConnections}
 * <br>Το Υποδικτύο της Μονάδας Συσχετίζεται με Διασύνδεση
 * 
 */


function DeleteUnitNetworkSubnets(
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
//= Check if $unit_network_subnet_id record exists
//======================================================================================================================

        $param = $unit_network_subnet_id;
        $table_column_name = 'unit_network_subnet_id';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetIDValue." : ".$param, ExceptionCodes::MissingUnitNetworkSubnetIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetIDArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetIDArray);
            }
            elseif ( Validator::isID($param) )
            {
                $unit_network_subnet_id = Validator::toID($param);

                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $unit_network_subnet_id );

                $sql = "SELECT
                        unit_network_subnet_id,
                        subnet_name,
                        subnet_ip,
                        subnet_default_router,
                        mask,
                        mm_id,
                        unit_network_subnet_type_id
                FROM unit_network_subnets WHERE ".$filters["unit_network_subnet_id"];

                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetValue." : ".$unit_network_subnet_id, ExceptionCodes::InvalidUnitNetworkSubnetValue);
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
        
//==============================================================================================================
//= Check if used by unit_network_objects
//==============================================================================================================

        $sql = "SELECT
                    unit_network_subnet_id
                FROM unit_network_objects WHERE ".$filters["unit_network_subnet_id"];

        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        $stmt = $db->query( $sql );
        $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() > 0 )
        {
            throw new Exception(ExceptionMessages::UsedUnitNetworkSubnetByUnitNetworkObjects, ExceptionCodes::UsedUnitNetworkSubnetByUnitNetworkObjects);
        }
        
//==============================================================================================================
//= Check if used by connection_unit_network_subnets
//==============================================================================================================

        $sql = "SELECT
                    unit_network_subnet_id
                FROM connection_unit_network_subnets WHERE ".$filters["unit_network_subnet_id"];

        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        $stmt = $db->query( $sql );
        $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() > 0 )
        {
            throw new Exception(ExceptionMessages::UsedUnitNetworkSubnetByConnections, ExceptionCodes::UsedUnitNetworkSubnetByConnections);
        }        
        
//==============================================================================================================
//= DELETE
//==============================================================================================================

        //= DELETE
        $sql = "DELETE FROM unit_network_subnets WHERE " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["unit_network_subnet_id"] = $unit_network_subnet_id;
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