<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DELETE
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Διαγραφή Τύπου IP Δικτυακών Στοιχείων</b>
 *
 *
 * Η συνάρτηση αυτή διαγράφει Τύπους IP Δικτυακών Στοιχείων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο DELETE :
 * <br> http://mm.sch.gr/api/unit_network_subnet_types
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
 *    curl -X DELETE http://mm.sch.gr/api/unit_network_subnet_types \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d { "unit_network_subnet_type_id" : "" }'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"unit_network_subnet_type_id" : ""});
 *
 *    var http = new XMLHttpRequest();
 *    http.open("DELETE", "http://mm.sch.gr/api/unit_network_subnet_types");
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
 * $params = array("unit_network_subnet_type_id" => "");
 *
 * $curl = curl_init("http://mm.sch.gr/api/unit_network_subnet_types");
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
 *        type: 'PUT',
 *        url: 'http://mm.sch.gr/api/unit_network_subnet_types',
 *        dataType: "json",
 *        data: {
 *           "unit_network_subnet_type_id" : 
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
 *   "method": "DeleteUnitNetworkSubnetTypes",
 *   "unit_network_subnet_type_id": ,
 *   "status": 200,
 *   "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 *
 * @param integer unit_network_subnet_type_id Τύπος IP Δικτυακού Στοιχείου
 * <br>Ο Κωδικός του Τύπου IP Δικτυακού Στοιχείου
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Τύποι IP Δικτυακών Στοιχείων : {@see GetUnitNetworkSubnetTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Τύπου IP Δικτυακού Στοιχείου
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
 * <br>integer : <b>unit_network_subnet_type_id</b> : Ο Κωδικός του Τύπου IP Δικτυακού Στοιχείου που διαγραφηκε
 *
 *
 *
 *
 * @throws Unauthorized {@see ExceptionMessages::Unauthorized}
 * <br>{@see ExceptionCodes::Unauthorized}
 * <br>Έλεγχος αν ο χρήστης υπάρχει και έχει δικαιώματα να χρησιμοποιείσει τη μέθοδο
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
 * <brΟ Τύπος του IP δικτυακού στοιχείου δεν υπάρχει στο λεξικό
 *
 * @throws InvalidUnitNetworkSubnetTypeIDType {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeIDType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetTypeIDType}
 * <br>Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου πρέπει να είναι αριθμητικός
 *
 * @throws MissingUnitNetworkSubnetTypeIDParam {@see ExceptionMessages::MissingUnitNetworkSubnetTypeIDParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetTypeIDParam}
 * <br>Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου είναι υποχρεωτικό πεδίο
 *
 * @throws UsedUnitNetworkSubnetTypeByUnitNetworkSubnets {@see ExceptionMessages::UsedUnitNetworkSubnetTypeByUnitNetworkSubnets}
 * <br>{@see ExceptionCodes::UsedUnitNetworkSubnetTypeByUnitNetworkSubnets}
 * <br>Ο Τύπος του IP δικτυακού στοιχείου χρησιμοποιείται από Υποδίκτυα Μονάδων
 *
 *
 */


function DeleteUnitNetworkSubnetTypes(
    $unit_network_subnet_type_id
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
//= Check if $unit_network_subnet_type_id record exists
//======================================================================================================================

        $param = $unit_network_subnet_type_id;
        $table_column_name = 'unit_network_subnet_type_id';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetTypeIDValue." : ".$param, ExceptionCodes::MissingUnitNetworkSubnetTypeIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeIDArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetTypeIDArray);
            }
            elseif ( Validator::isID($param) )
            {
                $unit_network_subnet_type_id = Validator::toID($param);

                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $unit_network_subnet_type_id );

                $sql = "SELECT
                    unit_network_subnet_type_id,
                    subnet_type
                FROM unit_network_subnet_types WHERE ".$filters["unit_network_subnet_type_id"];

                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeValue." : ".$unit_network_subnet_type_id, ExceptionCodes::InvalidUnitNetworkSubnetTypeValue);
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

//==============================================================================================================
//= Check if used
//==============================================================================================================

        $sql = "SELECT
                    unit_network_subnet_type_id
                FROM unit_network_subnets WHERE ".$filters["unit_network_subnet_type_id"];

        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        $stmt = $db->query( $sql );
        $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() > 0 )
        {
            throw new Exception(ExceptionMessages::UsedUnitNetworkSubnetTypeByUnitNetworkSubnets, ExceptionCodes::UsedUnitNetworkSubnetTypeByUnitNetworkSubnets);
        }

//==============================================================================================================
//= DELETE
//==============================================================================================================

        $sql = "DELETE FROM unit_network_subnet_types WHERE " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["unit_network_subnet_type_id"] = $unit_network_subnet_type_id;
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