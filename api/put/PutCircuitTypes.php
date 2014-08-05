<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Ενημέρωση Τύπου Τηλεπικοινωνιακών Κυκλωμάτων</b>
 * 
 * 
 * Η συνάρτηση αυτή ενημερώνει Τύπους Τηλεπικοινωνιακών Κυκλωμάτων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> http://mm.sch.gr/api/circuit_types <br><br>
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
 *
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X PUT http://mm.sch.gr/api/circuit_types \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"circuit_type_id" : 4, "circuit_type" : "ADSL"}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"circuit_type_id" : 4, "circuit_type" : "ADSL"});
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "http://mm.sch.gr/api/circuit_types");
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
 * <a id="PHP"></a>Παράδειγμα κλήσης της συνάρτησης με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $params = array("circuit_type_id" => 4, "circuit_type" => "ADSL");
 * 
 * $curl = curl_init("http://mm.sch.gr/api/circuit_types");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
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
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'PUT',
 *        url: 'http://mm.sch.gr/api/circuit_types',
 *        dataType: "json",
 *        data: {
 *           "circuit_type_id" : 4,
 *           "circuit_type" : "ADSL"
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
 * <br><b>Πίνακας Δεδομένων</b>
 * <br><a id="data"></a>Παρακάτω εμφανίζεται πίνακας σε μορφή JSON :
 * <code>
 * {
 *    "method": "PostCircuitTypes",
 *    "circuit_type_id": "4",
 *    "status": 200,
 *    "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 * @param integer $circuit_type_id Κωδικός
 * <br>Ο Κωδικός του Τύπου Τηλεπικοινωνιακών Κυκλωμάτων
 * <br>Το πεδίο είναι υποχρεωτικό
 *
 * @param string $circuit_type Όνομα
 * <br>Το Όνομα του Τύπου Τηλεπικοινωνιακών Κυκλωμάτων
 * <br>Το πεδίο είναι υποχρεωτικό
 *
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής του αποτελέσματος της κλήσης</li>
 *  <li>integer : <b>circuit_type_id</b> : Ο Κωδικός του Τύπου Τηλεπικοινωνιακών Κυκλωμάτων που δημιουργήθηκε</li>
 * </ul>
 * 
 * 
 * 
 * @throws MissingNameValue {@see ExceptionMessages::MissingNameValue}
 * @throws MissingConnectivityTypeIDValue {@see ExceptionMessages::MissingConnectivityTypeIDValue}
 * @throws InvalidConnectivityTypeIDType {@see ExceptionMessages::InvalidConnectivityTypeIDType}
 * @throws InvalidConnectivityTypeValue {@see ExceptionMessages::InvalidConnectivityTypeValue}
 * 
 * 
 * 
 */

function PutCircuitTypes(
    $circuit_type_id, $circuit_type
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
//= Check if $circuit_type_id record exists
//======================================================================================================================

        $param = $circuit_type_id;
        $table_column_name = 'circuit_type_id';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingCircuitTypeIDValue." : ".$param, ExceptionCodes::MissingCircuitTypeIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCircuitTypeIDArray." : ".$param, ExceptionCodes::InvalidCircuitTypeIDArray);
            }
            elseif ( Validator::isID($param) )
            {
                $circuit_type_id = Validator::toID($param);

                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $circuit_type_id );

                $sql = "SELECT
                            circuit_type_id,
                            name
                        FROM circuit_types WHERE ".$filters["circuit_type_id"];
                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidCircuitTypeValue." : ".$circuit_type_id, ExceptionCodes::InvalidCircuitTypeValue);
                }

            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitTypeIDType." : ".$param, ExceptionCodes::InvalidCircuitTypeIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingCircuitIDParam, ExceptionCodes::MissingCircuitIDParam);
        }

//======================================================================================================================
//= Check $circuit_type
//======================================================================================================================

        $param = $circuit_type;
        $table_column_name = 'circuit_type';
        $table_column_alias = 'name';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingCircuitTypeValue, ExceptionCodes::MissingCircuitTypeValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCircuitTypeArray." : ".$param, ExceptionCodes::InvalidCircuitTypeArray);
            }
            elseif ( Validator::isValue($param) )
            {
                $circuit_type = Validator::toValue( $param );

                $filters[ $table_column_name ] = "$table_column_alias = " . $db->quote( $circuit_type );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitTypeType." : ".$param, ExceptionCodes::InvalidCircuitTypeType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingCircuitTypeParam, ExceptionCodes::MissingCircuitTypeParam);
        }

//======================================================================================================================
//= Check for duplicates
//======================================================================================================================

        $sql = "SELECT
                    circuit_type_id,
                    name
                FROM circuit_types WHERE name like ". $db->quote( $circuit_type ) ." AND NOT ".$filters["circuit_type_id"];

        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        $stmt = $db->query( $sql );
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() > 0 )
        {
            throw new Exception(ExceptionMessages::DuplicatedCircuitValue." : ".$rows[0]["circuit_type_id"], ExceptionCodes::DuplicatedCircuitValue);
        }

//======================================================================================================================
//= UPDATE
//======================================================================================================================

        $sqlWhere = " WHERE ". $filters["circuit_type_id"];

        unset($filters["circuit_type_id"]);

        $sql = "UPDATE circuit_types SET " . implode(", ", $filters) .$sqlWhere;
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["circuit_type_id"] = $circuit_type_id;
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