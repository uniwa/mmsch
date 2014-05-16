<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Καταχώρηση Διασύνδεσης</b>
 *
 *
 * Η συνάρτηση αυτή καταχωρεί τις Διασυνδέσεις σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> http://mmsch.teiath.gr/api/connections
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
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X POST http://mmsch.teiath.gr/api/connections \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"mm_id" : "1016657", "circuit_id" : "345"}'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "mm_id" : "1016657", "circuit_id" : "345"
 *    });
 *
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "http://mmsch.teiath.gr/api/connections");
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
 *    $params = array(
 *       "mm_id" => "1016657", "circuit_id" => "345"
 *    );
 *
 *    $curl = curl_init("http://mmsch.teiath.gr/api/connections");
 *
 *    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 *    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 *    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
 *    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
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
 *        type: 'POST',
 *        url: 'http://mmsch.teiath.gr/api/connections',
 *        dataType: "json",
 *        data: {
 *          "mm_id" : "1016657", "circuit_id" : "345"
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
 *   "method": "PostConnections",
 *   "connection_id": 100,
 *   "status": 200,
 *   "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
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
 * @param integer $cpe_id Κωδικός CPE
 * <br>Ο Κωδικός του CPE
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>CPEs : {@see GetCpes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του CPE
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $ldap_id Κωδικός Ldap
 * <br>Ο Κωδικός του Ldap
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Ldaps : {@see GetLdaps}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Ldap
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $circuit_id Κωδικός Κυκλώματος
 * <br>Ο Κωδικός του Κυκλώματος
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Κυκλώματα : {@see GetCircuits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Κυκλώματος
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 *
 *
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>connection_id</b> : Ο Κωδικός της Διασύνδεσης
 *
 *
 *
 *
 * @throws Unauthorized {@see ExceptionMessages::Unauthorized}
 * <br>{@see ExceptionCodes::Unauthorized}
 * <br>Έλεγχος αν ο χρήστης υπάρχει και έχει δικαιώματα να χρησιμοποιείσει τη μέθοδο
 *
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 * <br>Ο Κωδικός ΜΜ δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 * <br>Ο Κωδικός ΜΜ πρέπει να έχει τιμή
 *
 * @throws InvalidUnitValue {@see ExceptionMessages::InvalidUnitValue}
 * <br>{@see ExceptionCodes::InvalidUnitValue}
 * <br>Η Μονάδα δεν δεν βρέθηκε
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * <br>Ο Κωδικός ΜΜ πρέπει να είναι αριθμητικό
 *
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 * <br>Ο Κωδικός ΜΜ είναι υποχρεωτικό πεδίο
 *
 * @throws InvalidCpeIDArray {@see ExceptionMessages::InvalidCpeIDArray}
 * <br>{@see ExceptionCodes::InvalidCpeIDArray}
 * <br>Ο Κωδικός του Cpe δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidCpeValue {@see ExceptionMessages::InvalidCpeValue}
 * <br>{@see ExceptionCodes::InvalidCpeValue}
 * <br>Το Cpe δεν υπάρχει στο λεξικό
 *
 * @throws InvalidCpeIDType {@see ExceptionMessages::InvalidCpeIDType}
 * <br>{@see ExceptionCodes::InvalidCpeIDType}
 * <br>Ο Κωδικός του Cpe πρέπει να είναι αριθμητικό
 *
 * @throws InvalidLdapIDArray {@see ExceptionMessages::InvalidLdapIDArray}
 * <br>{@see ExceptionCodes::InvalidLdapIDArray}
 * <br>Ο Κωδικός του Ldap Λογαριασμού δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidLdapValue {@see ExceptionMessages::InvalidLdapValue}
 * <br>{@see ExceptionCodes::InvalidLdapValue}
 * <br>Ο Ldap Λογαριασμός δεν υπάρχει στο λεξικό
 *
 * @throws InvalidLdapIDType {@see ExceptionMessages::InvalidLdapIDType}
 * <br>{@see ExceptionCodes::InvalidLdapIDType}
 * <br>Ο Κωδικός του Ldap Λογαριασμού πρέπει να είναι αριθμητικός
 *
 * @throws InvalidCircuitIDArray {@see ExceptionMessages::InvalidCircuitIDArray}
 * <br>{@see ExceptionCodes::InvalidCircuitIDArray}
 * <br>Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidCircuitValue {@see ExceptionMessages::InvalidCircuitValue}
 * <br>{@see ExceptionCodes::InvalidCircuitValue}
 * <br>Το Τηλεπικοινωνιακό Κύκλωμα δεν υπάρχει στο λεξικό
 *
 * @throws InvalidCircuitIDType {@see ExceptionMessages::InvalidCircuitIDType}
 * <br>{@see ExceptionCodes::InvalidCircuitIDType}
 * <br>Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός
 *
 */


function PostConnections(
    $mm_id, $cpe_id, $ldap_id, $circuit_id
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
//= Check if $circuit_id record exists
//======================================================================================================================

        $param = $circuit_id;
        $table_column_name = "circuit_id";
        $table_name = "circuits";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingCircuitIDValue, ExceptionCodes::MissingCircuitIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCircuitIDArray." : ".$param, ExceptionCodes::InvalidCircuitIDArray);
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
                    throw new Exception(ExceptionMessages::InvalidCircuitValue." : ".$param, ExceptionCodes::InvalidCircuitValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitIDType." : ".$param, ExceptionCodes::InvalidCircuitIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingCircuitIDParam, ExceptionCodes::MissingCircuitIDParam);
        }

//======================================================================================================================
//= Check for duplicates
//======================================================================================================================

        if ( $filters["circuit_id"] )
        {
            $sql = "SELECT
                    connection_id,
                    circuit_id
                    FROM connections WHERE ".$filters["circuit_id"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedConnectionValue." : ".$rows[0]["circuit_id"], ExceptionCodes::DuplicatedConnectionValue);
            }
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
//= Check if $cpe_id record exists
//======================================================================================================================

        $param = $cpe_id;
        $table_column_name = "cpe_id";
        $table_name = "cpes";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCpeIDArray." : ".$param, ExceptionCodes::InvalidCpeIDArray);
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
                    throw new Exception(ExceptionMessages::InvalidCpeValue." : ".$param, ExceptionCodes::InvalidCpeValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCpeIDType." : ".$param, ExceptionCodes::InvalidCpeIDType);
            }
        }

//======================================================================================================================
//= Check if $ldap_id record exists
//======================================================================================================================

        $param = $ldap_id;
        $table_column_name = "ldap_id";
        $table_name = "ldaps";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidLdapIDArray." : ".$param, ExceptionCodes::InvalidLdapIDArray);
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
                    throw new Exception(ExceptionMessages::InvalidLdapValue." : ".$param, ExceptionCodes::InvalidLdapValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidLdapIDType." : ".$param, ExceptionCodes::InvalidLdapIDType);
            }
        }

//======================================================================================================================
//= INSERT
//======================================================================================================================

        $sql = "INSERT INTO connections SET " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["connection_id"] = $db->lastInsertId();
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