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
 * <b>Καταχώρηση Τηλεπικοινωνιακών Κυκλωμάτων</b>
 * 
 *
 * Η συνάρτηση αυτή καταχωρεί Τηλεπικοινωνιακά Κυκλώματα σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> http://mmsch.teiath.gr/api/circuits <br><br>
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
 * curl -X POST http://mmsch.teiath.gr/api/circuits \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"circuit_type_id" : "2", \
 *        "phone_number" : "value", \
 *        "status" : "TRUE", \
 *        "activated_date" : "2003-06-01 16:08:00", \
 *        "mm_id" : "1013390", \
 *        "paid_by_psd" : "TRUE", \
 *        "updated_date" : "2013-12-18 16:08:00", \
 *        "deactivated_date" : "null", \
 *        "bandwidth" : "24576/1024Kbps", \
 *        "readspeed" : "null" }'
 * </code>
 * <br>
 *
 *
 *  
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "circuit_type_id" : "2",
 *        "phone_number" : "value",
 *        "status" : "TRUE",
 *        "activated_date" : "2003-06-01 16:08:00",
 *        "mm_id" : "1013390",
 *        "paid_by_psd" : "TRUE",
 *        "updated_date" : "2013-12-18 16:08:00",
 *        "deactivated_date" : "null",
 *        "bandwidth" : "24576/1024Kbps",
 *        "readspeed" : "null"
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "http://mmsch.teiath.gr/api/circuits");
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
 *        "circuit_type_id" => "2",
 *        "phone_number" => "value",
 *        "status" => "TRUE",
 *        "activated_date" => "2003-06-01 16:08:00",
 *        "mm_id" => "1013390",
 *        "paid_by_psd" => "TRUE",
 *        "updated_date" => "2013-12-18 16:08:00",
 *        "deactivated_date" => "null",
 *        "bandwidth" => "24576/1024Kbps",
 *        "readspeed" => "null"
 * );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/circuits");
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
 *        url: 'http://mmsch.teiath.gr/api/circuits',
 *        dataType: "json",
 *        data: {
 *           "circuit_type_id" : "2",
 *           "phone_number" : "value",
 *           "status" : "TRUE",
 *           "activated_date" : "2003-06-01 16:08:00",
 *           "mm_id" : "1013390",
 *           "paid_by_psd" : "TRUE",
 *           "updated_date" : "2013-12-18 16:08:00",
 *           "deactivated_date" : "null",
 *           "bandwidth" : "24576/1024Kbps",
 *           "readspeed" : "null"
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
 *    "method": "PostCircuits",
 *    "circuit_id": "10650",
 *    "status": 200,
 *    "message": "success"
 * }
 * </code>
 * <br>
 *
 *
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
 * @param integer $circuit_type_id Κωδικός Τύπου Κυκλώματος
 * <br>Ο Κωδικός του Τύπου του Τηλεπικοινωνιακού Κυκλώματος
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Τύποι Τηλεπικοινωνιακών Κυκλωμάτων : {@see GetCircuitTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Τηλεπικοινωνιακού Κυκλώματος
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param string $phone_number Τηλεφωνικός Αριθμός
 * <br>Ο Τηλεφωνικός Αριθμός του Τηλεπικοινωνιακού Κυκλώματος
 *
 * @param boolean $status Ενεργό/Ανενεργό
 * <br>Η Κατάσταση του Τηλεπικοινωνιακού Κυκλώματος
 *
 * @param datetime $activated_date Ημερομηνία Ενεργοποίησης
 * <br>Η Ημερομηνία Ενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος
 *
 * @param datetime $updated_date Ημερομηνία Ενημέρωσης
 * <br>Η Ημερομηνία Ενημέρωσης του Τηλεπικοινωνιακού Κυκλώματος
 *
 * @param datetime $deactivated_date Ημερομηνία Απενεργοποίησης
 * <br>Η Ημερομηνία Απενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος
 *
 * @param string $bandwidth Εύρως Ζώνης
 * <br>Το Εύρως Ζώνης του Τηλεπικοινωνιακού Κυκλώματος
 *
 * @param string $readspeed Ταχύτητα
 * <br>Η Ταχύτητα του Τηλεπικοινωνιακού Κυκλώματος
 *
 * @param boolean $paid_by_psd Χρηματοδοτείται από το ΠΣΔ
 * <br>Το Τηλεπικοινωνιακό Κύκλωμα Χρηματοδοτείται από το ΠΣΔ
 *
 * 
 * 
 *   
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>circuit_id</b> : Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος</li>
 * </ul>
 * 
 *
 *
 * @throws MissingCircuitPhoneNumberValue {@see ExceptionMessages::MissingCircuitPhoneNumberValue}
 * <br>{@see ExceptionCodes::MissingCircuitPhoneNumberValue}
 * <br>Ο Αριθμός του Κυκλώματος πρέπει να έχει τιμή
 *
 * @throws InvalidCircuitPhoneNumberArray {@see ExceptionMessages::InvalidCircuitPhoneNumberArray}
 * <br>{@see ExceptionCodes::InvalidCircuitPhoneNumberArray}
 * <br>Ο Αριθμός του Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidCircuitPhoneNumberType {@see ExceptionMessages::InvalidCircuitPhoneNumberType}
 * <br>{@see ExceptionCodes::InvalidCircuitPhoneNumberType}
 * <br>Ο Αριθμός του Κυκλώματος πρέπει να είναι αριθμητικός ή αλφαριθμητικός
 *
 * @throws MissingCircuitPhoneNumberParam {@see ExceptionMessages::MissingCircuitPhoneNumberParam}
 * <br>{@see ExceptionCodes::MissingCircuitPhoneNumberParam}
 * <br>Ο Αριθμός του Κυκλώματος είναι υποχρεωτικό πεδίο
 *
 * @throws DuplicatedCircuitValue {@see ExceptionMessages::DuplicatedCircuitValue}
 * <br>{@see ExceptionCodes::DuplicatedCircuitValue}
 * <br>Το Τηλεπικοινωνιακό Κύκλωμα υπάρχει ήδη
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
 * @throws MissingCircuitTypeIDValue {@see ExceptionMessages::MissingCircuitTypeIDValue}
 * <br>{@see ExceptionCodes::MissingCircuitTypeIDValue}
 * <br>Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να έχει τιμή
 *
 * @throws InvalidCircuitTypeIDArray {@see ExceptionMessages::InvalidCircuitTypeIDArray}
 * <br>{@see ExceptionCodes::InvalidCircuitTypeIDArray}
 * <br>Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidCircuitTypeValue {@see ExceptionMessages::InvalidCircuitTypeValue}
 * <br>{@see ExceptionCodes::InvalidCircuitTypeValue}
 * <br>Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος δεν υπάρχει στο λεξικό
 *
 * @throws InvalidCircuitTypeIDType {@see ExceptionMessages::InvalidCircuitTypeIDType}
 * <br>{@see ExceptionCodes::InvalidCircuitTypeIDType}
 * <br>Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός
 *
 * @throws MissingCircuitTypeIDParam {@see ExceptionMessages::MissingCircuitTypeIDParam}
 * <br>{@see ExceptionCodes::MissingCircuitTypeIDParam}
 * <br>Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος είναι υποχρεωτικό πεδίο
 *
 * @throws InvalidCircuitStateType {@see ExceptionMessages::InvalidCircuitStateType}
 * <br>{@see ExceptionCodes::InvalidCircuitStateType}
 * <br>Η Κατάσταση του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ενεργή ή Ανανεργή
 *
 * @throws InvalidCircuitActivatedDateType {@see ExceptionMessages::InvalidCircuitActivatedDateType}
 * <br>{@see ExceptionCodes::InvalidCircuitActivatedDateType}
 * <br>Η Ημερομηνία Ενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ημερομηνία (dd/mm/yyyy)
 *
 * @throws InvalidCircuitUpdatedDateType {@see ExceptionMessages::InvalidCircuitUpdatedDateType}
 * <br>{@see ExceptionCodes::InvalidCircuitUpdatedDateType}
 * <br>Η Ημερομηνία Ενημέρωσης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ημερομηνία (dd/mm/yyyy)
 *
 * @throws InvalidCircuitDeactivatedDateType {@see ExceptionMessages::InvalidCircuitDeactivatedDateType}
 * <br>{@see ExceptionCodes::InvalidCircuitDeactivatedDateType}
 * <br>Η Ημερομηνία Απενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ημερομηνία (dd/mm/yyyy)
 *
 * @throws InvalidCircuitBandwidthType {@see ExceptionMessages::InvalidCircuitBandwidthType}
 * <br>{@see ExceptionCodes::InvalidCircuitBandwidthType}
 * <br>Το Εύρως Ζώνης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να αλφαριθμητικό
 *
 * @throws InvalidCircuitReadspeedhType {@see ExceptionMessages::InvalidCircuitReadspeedhType}
 * <br>{@see ExceptionCodes::InvalidCircuitReadspeedhType}
 * <br>Η Ταχύτητα του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναιαλφαριθμητική
 *
 * @throws InvalidCircuitPaidByPsdType {@see ExceptionMessages::InvalidCircuitPaidByPsdType}
 * <br>{@see ExceptionCodes::InvalidCircuitPaidByPsdType}
 * <br>Η Χρηματοδήτηση του Τηλεπικοινωνιακού Κυκλώματος από το ΠΣΔ πρέπει να είναι Ενεργή ή Ανανεργή
 *
 *
 */



function PostCircuits(
    $mm_id, $circuit_type_id, $phone_number, $status, $activated_date, $updated_date, $deactivated_date,
    $bandwidth, $readspeed, $paid_by_psd
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
//= Check $phone_number
//======================================================================================================================

        $param = $phone_number;
        $table_column_name = 'phone_number';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingCircuitPhoneNumberValue, ExceptionCodes::MissingCircuitPhoneNumberValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCircuitPhoneNumberArray." : ".$param, ExceptionCodes::InvalidCircuitPhoneNumberArray);
            }
            elseif ( Validator::isValue($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitPhoneNumberType." : ".$param, ExceptionCodes::InvalidCircuitPhoneNumberType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingCircuitPhoneNumberParam, ExceptionCodes::MissingCircuitPhoneNumberParam);
        }

//======================================================================================================================
//= Check for duplicates
//======================================================================================================================

        if ( $filters["phone_number"] )
        {
            $sql = "SELECT
                    circuit_id,
                    phone_number
                    FROM circuits WHERE ".$filters["phone_number"];

            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            $stmt = $db->query( $sql );
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ( $stmt->rowCount() > 0 )
            {
                throw new Exception(ExceptionMessages::DuplicatedCircuitValue." : ".$rows[0]["circuit_id"], ExceptionCodes::DuplicatedCircuitValue);
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
//= Check if $circuit_type_id record exists
//======================================================================================================================

        $param = $circuit_type_id;
        $table_column_name = "circuit_type_id";
        $table_name = "circuit_types";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingCircuitTypeIDValue, ExceptionCodes::MissingCircuitTypeIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCircuitTypeIDArray." : ".$param, ExceptionCodes::InvalidCircuitTypeIDArray);
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
                    throw new Exception(ExceptionMessages::InvalidCircuitTypeValue." : ".$param, ExceptionCodes::InvalidCircuitTypeValue);
                }
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitTypeIDType." : ".$param, ExceptionCodes::InvalidCircuitTypeIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingCircuitTypeIDParam, ExceptionCodes::MissingCircuitTypeIDParam);
        }

//======================================================================================================================
//= Check $status
//======================================================================================================================

        $param = $status;
        $table_column_name = 'status';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = NULL";
            }
            elseif ( Validator::isBoolean($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = ". $db->quote( ( Validator::toBoolean($param) ? 1 : 0) );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitStateType." : ".$param, ExceptionCodes::InvalidCircuitStateType);
            }
        }

//======================================================================================================================
//= Check $activated_date
//======================================================================================================================

        $param = $activated_date;
        $table_column_name = 'activated_date';

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
                throw new Exception(ExceptionMessages::InvalidCircuitActivatedDateType." : ".$param, ExceptionCodes::InvalidCircuitActivatedDateType);
            }
        }

//======================================================================================================================
//= Check $updated_date
//======================================================================================================================

        $param = $updated_date;
        $table_column_name = 'updated_date';

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
                throw new Exception(ExceptionMessages::InvalidCircuitUpdatedDateType." : ".$param, ExceptionCodes::InvalidCircuitUpdatedDateType);
            }
        }

//======================================================================================================================
//= Check $deactivated_date
//======================================================================================================================

        $param = $deactivated_date;
        $table_column_name = 'deactivated_date';

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
                throw new Exception(ExceptionMessages::InvalidCircuitDeactivatedDateType." : ".$param, ExceptionCodes::InvalidCircuitDeactivatedDateType);
            }
        }

//======================================================================================================================
//= Check $bandwidth
//======================================================================================================================

        $param = $bandwidth;
        $table_column_name = 'bandwidth';

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
                throw new Exception(ExceptionMessages::InvalidCircuitBandwidthType." : ".$param, ExceptionCodes::InvalidCircuitBandwidthType);
            }
        }

//======================================================================================================================
//= Check $readspeed
//======================================================================================================================

        $param = $readspeed;
        $table_column_name = 'readspeed';

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
                throw new Exception(ExceptionMessages::InvalidCircuitReadspeedhType." : ".$param, ExceptionCodes::InvalidCircuitReadspeedhType);
            }
        }

//======================================================================================================================
//= Check $paid_by_psd
//======================================================================================================================

        $param = $paid_by_psd;
        $table_column_name = 'paid_by_psd';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = NULL";
            }
            elseif ( Validator::isBoolean($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = ". $db->quote( Validator::toBoolean($param) );
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitPaidByPsdType." : ".$param, ExceptionCodes::InvalidCircuitPaidByPsdType);
            }
        }

//======================================================================================================================
//= INSERT
//======================================================================================================================

        $sql = "INSERT INTO circuits SET " . implode(", ", $filters);
        //echo "<br><br>".$sql."<br><br>";
        $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

        if ( $db->query( $sql ) )
        {
            $result["circuit_id"] = $db->lastInsertId();
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