<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Καταχώρηση Τύπου IP Δικτυακών Στοιχείων</b>
 * 
 * 
 * Η συνάρτηση αυτή καταχωρεί Τύπους IP Δικτυακών Στοιχείων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> http://mmsch.teiath.gr/api/unit_network_subnet_types <br><br>
 * 
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
 *  <li><b>subnet_type</b><br>GetUnitNetworkSubnetType με search_type=EXACT & subnet_type="value" </li>
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
 *    curl -X POST http://mmsch.teiath.gr/api/unit_network_subnet_types \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"subnet_type" : ""}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"subnet_type" : ""});
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "http://mmsch.teiath.gr/api/unit_network_subnet_types");
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
 * <a id="PHP"></a>Παράδειγμα κλήσης της συνάρτησης με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $params = array("subnet_type" => "");
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/unit_network_subnet_types");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
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
 *        type: 'POST',
 *        url: 'http://mmsch.teiath.gr/api/unit_network_subnet_types',
 *        dataType: "json",
 *        data: {
 *           "subnet_type" : ""
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
 *    "method": "PostUnitNetworkSubnetTypes",
 *    "unit_network_subnet_type_id": "",
 *    "status": 200,
 *    "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 * @param string $subnet_type Όνομα Τύπου IP Δικτυακού Στοιχείου
 * <br>Το Όνομα Τύπου IP Δικτυακού Στοιχείου
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής του αποτελέσματος της κλήσης</li>
 *  <li>integer : <b>unit_network_subnet_type_id</b> : Ο Κωδικός του Τύπου IP Δικτυακού Στοιχείου που δημιουργήθηκε</li>
 * </ul>
 * 
 * 
 * @throws MissingUnitNetworkSubnetTypeValue {@see ExceptionMessages::MissingUnitNetworkSubnetTypeValue}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetTypeValue}
 * <br>Ο Τύπος του IP δικτυακού στοιχείου πρέπει να έχει τιμή
 *
 * @throws InvalidUnitNetworkSubnetTypeArray {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeArray}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetTypeArray}
 * <br>Ο Τύπος του IP δικτυακού στοιχείου δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidUnitNetworkSubnetTypeType {@see ExceptionMessages::InvalidUnitNetworkSubnetTypeType}
 * <br>{@see ExceptionCodes::InvalidUnitNetworkSubnetTypeType}
 * <br>Ο Τύπος του IP δικτυακού στοιχείου πρέπει να είναι αριθμητικός ή αλφαριθμητικός
 *
 * @throws MissingUnitNetworkSubnetTypeParam {@see ExceptionMessages::MissingUnitNetworkSubnetTypeParam}
 * <br>{@see ExceptionCodes::MissingUnitNetworkSubnetTypeParam}
 * <br>Ο Τύπος του IP δικτυακού στοιχείου είναι υποχρεωτικό πεδίοο
 *
 * @throws DuplicatedUnitNetworkSubnetTypeValue {@see ExceptionMessages::DuplicatedUnitNetworkSubnetTypeValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitNetworkSubnetTypeValue}
 * <br>Ο Τύπος του IP δικτυακού στοιχείου υπάρχει ήδη
 * 
 */

function PostUnitNetworkSubnetTypes(
    $subnet_type
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
//= Check $subnet_type
//======================================================================================================================

        $param = $subnet_type;
        $table_column_name = 'subnet_type';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetTypeValue, ExceptionCodes::MissingUnitNetworkSubnetTypeValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeArray." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetTypeArray);
            }
            elseif ( Validator::isValue($param) )
            {
                $subnet_type = Validator::toValue( $param );

                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $subnet_type );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidUnitNetworkSubnetTypeType." : ".$param, ExceptionCodes::InvalidUnitNetworkSubnetTypeType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingUnitNetworkSubnetTypeParam, ExceptionCodes::MissingUnitNetworkSubnetTypeParam);
        }

//======================================================================================================================
//= Check for duplicates
//======================================================================================================================

        $sql = "SELECT
                    unit_network_subnet_type_id,
                    subnet_type
                FROM unit_network_subnet_types WHERE subnet_type like " . $db->quote( $subnet_type );

        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        $stmt = $db->query( $sql );
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() > 0 )
        {
            throw new Exception(ExceptionMessages::DuplicatedUnitNetworkSubnetTypeValue." : ".$rows[0]["unit_network_subnet_type_id"], ExceptionCodes::DuplicatedUnitNetworkSubnetTypeValue);
        }

//======================================================================================================================
//= INSERT
//======================================================================================================================

        $sql = "INSERT INTO unit_network_subnet_types SET " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["unit_network_subnet_type_id"] = $db->lastInsertId();
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