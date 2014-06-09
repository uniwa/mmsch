<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * Ενημέρωση : Εργαζόμενοι
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> http://mmsch.teiath.gr/api/workers <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT http://mmsch.teiath.gr/api/workers \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"worker_id" : "value", \
 *        "worker_registry_no" : "value", \
 *        "lastname" : "value", \
 *        "firstname" : "value", \
 *        "fathername" : "value", \
 *        "sex" : "value", \
 *        "tax_number" : "value", \
 *        "worker_specialization" : "value" }'
 * </code>
 * <br>
 * 
 * 
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "worker_id" : "value",
 *                                  "worker_registry_no" : "value",
 *                                  "lastname" : "value",
 *                                  "firstname" : "value",
 *                                  "fathername" : "value", 
 *                                  "sex" : "value",
 *                                  "tax_number" : "value"
 *                                  "worker_specialization" : "value" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "http://mmsch.teiath.gr/api/workers");
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
 * Παράδειγμα κλήσης της μεθόδου με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $params = array(
 *      "worker_id" => "value", 
 *      "worker_registry_no" => "value", 
 *      "lastname" => "value", 
 *      "firstname" => "value", 
 *      "fathername" => "value", 
 *      "sex" => "value", 
 *      "tax_number" => "value",
 *      "worker_specialization" => "value" );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/workers");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
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
 * Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'PUT',
 *        url: 'http://mmsch.teiath.gr/api/workers',
 *        dataType: "json",
 *        data: {
 *            "worker_id" : "value",
 *            "worker_registry_no" : "value",
 *            "lastname" : "value",
 *            "firstname" : "value",
 *            "fathername" : "value",
 *            "sex" : "value",
 *            "tax_number" : "value",
 *            "worker_specialization" : "value"
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
 * @param integer $worker_id <b><i>Κωδικός Εργαζόμενου</b></i>
 * <br>Ο Κωδικός του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $worker_registry_no <b><i>Αριθμός Μητρώου</b></i>
 * <br>Ο Αριθμός Μητρώου του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string <b><i>$lastname Επώνυμο</b></i>
 * <br>Το Επώνυμο του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string <b><i>$firstname Όνομα</b></i>
 * <br>Το Όνομα του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $fathername Πατρώνυμο
 * <br>Το Πατρώνυμο του Εργαζόμενου
 * 
 * @param string $sex Φύλο
 * <br>Το Φύλο του Εργαζόμενου
 * 
 * @param string $tax_number Αριθμός Φορολογικού Μητρώου
 * <br>Ο Αριθμός Φορολογικού Μητρώου του Εργαζόμενου
 * 
 * @param mixed $worker_specialization Ειδικότητα
 * <br>Η Ειδικότητα του Εργαζομένου 
 * <br>Λεξικό : Ειδικότητες Εργαζομένων {@see GetWorkerSpecializations})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>worker_id</b> : Ο Κωδικός του Εργαζόμενου</li>
 * </ul>
 * 
 *
 * 
 * @throws MissingWorkerValue {@see ExceptionMessages::MissingWorkerValue}
 * @throws InvalidWorkerType {@see ExceptionMessages::InvalidWorkerType}
 * @throws InvalidWorkerValue {@see ExceptionMessages::InvalidWorkerValue}
 * @throws MissingWorkerRegistryNoValue {@see ExceptionMessages::MissingWorkerRegistryNoValue}
 * @throws MissingWorkerLastnameValue {@see ExceptionMessages::MissingWorkerLastnameValue}
 * @throws MissingWorkerFirstnameValue {@see ExceptionMessages::MissingWorkerFirstnameValue}
 * @throws InvalidWorkerSpecializationValue {@see ExceptionMessages::InvalidWorkerSpecializationValue}
 * 
 * 
 */


    
function PutWorkers( 
    $worker_id, $registry_no, $lastname, $firstname, $fathername, $sex, $tax_number, $worker_specialization 
)
{
    global $db;
    global $Options;

    $result = array();  

    $result["method"] = __FUNCTION__;

    try
    {
        //var_dump($worker_id);
        if ( $worker_id === _MISSED_ )
        {
            throw new Exception(ExceptionMessages::MissingWorkerIDParam, ExceptionCodes::MissingWorkerIDParam);
        }
        else if ( Validator::IsNull($worker_id) )
        {
            throw new Exception(ExceptionMessages::MissingWorkerIDValue, ExceptionCodes::MissingWorkerIDValue);
        }
        else if ( Validator::IsID($worker_id) )
        {
            $worker_id = Validator::ToID($worker_id);
        }
        else
        {
            throw new Exception(ExceptionMessages::InvalidWorkerIDType." : ".$worker_id, ExceptionCodes::InvalidWorkerIDType);
        }
        
        $sql = "SELECT worker_id, registry_no FROM workers WHERE worker_id = ".$worker_id;
        
        //echo "<br><br>".$sql."<br><br>";
        
        $stmt = $db->query( $sql );        
        $db_row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ( !$db_row["worker_id"] )
        {
            throw new Exception(ExceptionMessages::InvalidWorkerValue." : ".$worker_id, ExceptionCodes::InvalidWorkerValue);
        }
        else 
        {

//==============================================================================
            
            if ( $registry_no === _MISSED_ )
            {
                if (!$db_row["registry_no"])
                {
                    throw new Exception(ExceptionMessages::MissingWorkerRegistryNoParam, ExceptionCodes::MissingWorkerRegistryNoParam);
                }
                else
                {
                    $registry_no = $db_row["registry_no"];
                    $sqlWhere = null;
                }
            }
            else if ( Validator::IsNull($registry_no) )
            {    
                throw new Exception(ExceptionMessages::MissingWorkerRegistryNoValue, ExceptionCodes::MissingWorkerRegistryNoValue);
            }
            else if ( Validator::IsValue($registry_no) )
            {
                $sqlWhere = "registry_no = '". mysql_escape_string( Validator::ToValue($registry_no) ) ."'";
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidWorkerRegistryNoType." : ".$registry_no, ExceptionCodes::InvalidWorkerRegistryNoType);
            }

            if ($sqlWhere)
            {
                $sql = "SELECT worker_id FROM workers WHERE ".$sqlWhere." AND worker_id <> ".$worker_id;
                
                $stmt = $db->query( $sql );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() > 0 )
                {
                    throw new Exception(ExceptionMessages::DuplicatedWorkerRegistryNoValue." : ".$registry_no, ExceptionCodes::DuplicatedWorkerRegistryNoValue);
                }
                else 
                {
                    $filters[] = "registry_no = '".$registry_no."'";
                }
            }

//==============================================================================

            if ( $lastname === _MISSED_ )
            { 
                //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            }
            else if ( Validator::IsNull($lastname) )
            {
                $lastname = null;
                $filters[] = "lastname = null";
            }
            else if ( Validator::IsValue($lastname) )
            {
                $lastname = Validator::ToValue($lastname);
                $filters[] = "lastname = '". mysql_escape_string( $lastname ) ."'";
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidWorkerLastnameType." : ".$lastname, ExceptionCodes::InvalidWorkerLastnameType);
            }

//==============================================================================
        
            if ( $firstname === _MISSED_ )
            {
                //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            }
            else if ( Validator::IsNull($firstname) )
            {
                $firstname = null;
                $filters[] = "firstname = null";
            }
            else if ( Validator::IsValue($firstname) )
            {
                $firstname = Validator::ToValue($firstname);
                $filters[] = "firstname = '". mysql_escape_string( $firstname ) ."'";
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidWorkerFirstnameType." : ".$firstname, ExceptionCodes::InvalidWorkerFirstnameType);
            }

//==============================================================================

            if ( $fathername === _MISSED_ )
            { 
                //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            }
            else if ( Validator::IsNull($fathername) )
            {
                $fathername = null;
                $filters[] = "fathername = null";
            }
            else if ( Validator::IsValue($fathername) )
            {
                $fathername = Validator::ToValue($fathername);
                $filters[] = "fathername = '". mysql_escape_string( $fathername ) ."'";
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidWorkerFathernameType." : ".$fathername, ExceptionCodes::InvalidWorkerFathernameType);
            }

//==============================================================================

            if ( $sex === _MISSED_ )
            { 
                //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            }
            else if ( Validator::IsNull($sex) )
            {
                $sex = null;
                $filters[] = "sex = null";
            }
            else if ( Validator::IsSex($sex) )
            {
                $sex = Validator::ToSex($sex);
                $filters[] = "sex = '". mysql_escape_string( $sex ) ."'";
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidWorkerSexType." : ".$sex, ExceptionCodes::InvalidWorkerSexType);
            }

//==============================================================================

            if ( $tax_number === _MISSED_ )
            { 
                //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            }
            else if ( Validator::IsNull($tax_number) )
            {
                $tax_number = null;
                $filters[] = "tax_number = null";
            }
            else if ( Validator::IsValue($tax_number) )
            {
                $tax_number = Validator::ToValue($tax_number);
                $filters[] = "tax_number = '". mysql_escape_string( $tax_number ) ."'";
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidWorkerTaxNumberType." : ".$tax_number, ExceptionCodes::InvalidWorkerTaxNumberType);
            }

//==============================================================================

            if ( $worker_specialization === _MISSED_ )
            {
                //throw new Exception(ExceptionMessages::MissingRegionEduAdminParam, ExceptionCodes::MissingRegionEduAdminParam);
                $sqlWhere = null;
            }
            else if ( Validator::IsNull($worker_specialization) )
            {
                $sqlWhere = null;
                $worker_specialization = null;
                $filters[] = "worker_specialization_id = null";
            }
            else if ( Validator::IsID($worker_specialization) )
            {
                $sqlWhere = "worker_specialization_id = ". Validator::ToID($worker_specialization);
            }
            else if ( Validator::IsValue($worker_specialization) )
            {
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($worker_specialization) ) ."'";
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidWorkerSpecializationType." : ".$worker_specialization, InvalidWorkerSpecializationType::InvalidRegionEduAdminType);
            }

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT worker_specialization_id FROM worker_specializations WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidWorkerSpecializationValue." : ".$worker_specialization, ExceptionCodes::InvalidWorkerSpecializationValue);
                }
                else 
                {
                    $worker_specialization = $rows["worker_specialization_id"];
                    $filters[] = "worker_specialization_id = ".$worker_specialization;
                }
            }
            
//==============================================================================
            
            
            $sqlUpdate = "UPDATE workers SET ";
            $sqlFields = implode(", ", $filters)." ";
            $sqlWhere  = "WHERE worker_id = " . $worker_id;
            
            $sql = $sqlUpdate . $sqlFields . $sqlWhere;

            //echo "<br><br>".$sql."<br><br>";
            
            if ( $db->query( $sql ) )
            {
                $result["worker_id"] = $worker_id;
                //Events
            }
            
            $result["status"] = ExceptionCodes::NoErrors;;
            $result["message"] = ExceptionMessages::NoErrors;

        }
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]: ".$e->getMessage();
    } 
    
    return $result;
}

?>