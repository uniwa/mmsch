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
 * Ενημέρωση : Συσχετίσεις μεταξύ Μονάδων 
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> https://mm.sch.gr/api/relations <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT https://mm.sch.gr/api/relations \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"relation_id" : "value", \
 *        "host_mm_id" : "value", \
 *        "guest_mm_id" : "value", \
 *        "relation_state" : "value", \
 *        "true_date" : "value", \
 *        "true_fek" : "value", \
 *        "false_date" : "value", \
 *        "false_fek" : "value", \
 *        "relation_type" : "value"}'
 * </code>
 * <br>
 * 
 *
 *  
 * Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "relation_id" : "value", 
 *        "worker_registry_no" : "value",
 *        "lastname" : "value",
 *        "firstname" : "value",
 *        "fathername" : "value",
 *        "sex" : "value",
 *        "tax_number" : "value",
 *        "worker_specialization" : "value" 
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "https://mm.sch.gr/api/relations");
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
 *        "relation_id" => "value", 
 *        "host_mm_id" : "value",
 *        "guest_mm_id" : "value", 
 *        "relation_state" : "value",
 *        "true_date" : "value",
 *        "true_fek" : "value",
 *        "false_date" : "value",
 *        "false_fek" : "value",
 *        "relation_type" : "value"
 * );
 * 
 * $curl = curl_init("https://mm.sch.gr/api/relations");
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
 *        url: 'https://mm.sch.gr/api/relations',
 *        dataType: "json",
 *        data: {
 *            "relation_id" => "value", 
 *            "host_mm_id" => "value", 
 *            "guest_mm_id" => "value", 
 *            "relation_state" => "value", 
 *            "true_date" => "value", 
 *            "true_fek" => "value", 
 *            "false_date" => "value", 
 *            "false_fek" => "value", 
 *            "relation_type" => "value"
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
 * @param integer $relation_id <b><i>Κωδικός Συσχέτισης</i></b>
 * <br>Ο Κωδικός της Συσχέτισης Μονάδων
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param integer $host_mm_id <b><i>Κωδικός ΜΜ Host Μονάδας</i></b>
 * <br>Ο Κωδικός ΜΜ της Host Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Αναζήτηση Μονάδων {@see GetUnits}
 * 
 * @param integer $guest_mm_id <b><i>Κωδικός ΜΜ Guest Μονάδας</i></b>
 * <br>Ο Κωδικός ΜΜ της Guest Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Αναζήτηση Μονάδων {@see GetUnits}
 * 
 * @param boolean $relation_state Ενεργή/Ανενεργή
 * <br>Καθορίζει αν η Συσχέτιση είναι Ενεργή
 * 
 * @param integer $true_date Ημερομηνία Ενεργοποίησης
 * <br>Η Ημερομηνία που η Συσχέτιση έγινε Ενεργή
 * 
 * @param integer $true_fek ΦΕΚ Ενεργοποίησης
 * <br>Το ΦΕΚ όταν η Συσχέτιση έγινε Ενεργή
 * 
 * @param integer $false_date Ημερομηνία Απενεργοποίησης
 * <br>Η Ημερομηνία που η Συσχέτιση έγινε Ανενεργή
 * 
 * @param integer $false_fek ΦΕΚ Απενεργοποίησης
 * <br>Το ΦΕΚ όταν η Συσχέτιση έγινε Ανενεργή
 * 
 * @param mixed $relation_type <b><i>Τύπος Συσχέτισης</b></i>
 * <br>Ο Τύπος Συσχέτισης των Μονάδων
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Λεξικό : Συσχετίσεις Μονάδων {@see GetRelationTypes}
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>relation_id</b> : Ο Κωδικός της Συσχέτισης</li>
 * </ul>
 * 
 *
 * 
 * @throws MissingRelationIDValue {@see ExceptionMessages::MissingRelationIDValue}
 * @throws InvalidRelationIDType {@see ExceptionMessages::InvalidRelationIDType}
 * @throws InvalidRelationValue {@see ExceptionMessages::InvalidRelationValue}
 * @throws MissingHostMMIdValue {@see ExceptionMessages::MissingHostMMIdValue}
 * @throws InvalidHostMMIdType {@see ExceptionMessages::InvalidHostMMIdType}
 * @throws InvalidHostMMIdValue {@see ExceptionMessages::InvalidHostMMIdValue}
 * @throws MissingGuestMMIdValue {@see ExceptionMessages::MissingGuestMMIdValue}
 * @throws InvalidGuestMMIdType {@see ExceptionMessages::InvalidGuestMMIdType}
 * @throws InvalidGuestMMIdValue {@see ExceptionMessages::InvalidGuestMMIdValue}
 * @throws MissingRelationTypeValue {@see ExceptionMessages::MissingRelationTypeValue}
 * @throws InvalidRelationTypeValue {@see ExceptionMessages::InvalidRelationTypeValue}
 * 
 * 
 */


function PutRelations( $relation_id, $host_mm_id, $guest_mm_id, $relation_state, $true_date, $true_fek, $false_date, $false_fek, $relation_type )
{
    global $db;
    global $Options;

    $result = array();  

    $result["method"] = __FUNCTION__;

    try
    {
//==============================================================================
        
        if (! trim($relation_id) )
            throw new Exception(ExceptionMessages::MissingRelationIDValue, ExceptionCodes::MissingRelationIDValue);
        else if (!is_numeric($relation_id))
            throw new Exception(ExceptionMessages::InvalidRelationIDType, ExceptionCodes::InvalidRelationIDType);
        else
            $fRelationId = $relation_id;
        
        
        $oRelation = new RelationsExt($db);
        
        $filter = new DFC(RelationsExt::FIELD_RELATION_ID, $fRelationId, DFC::EXACT);
        
        $arrayRelations = $oRelation->findByFilter($db, $filter, true);

        if (count($arrayRelations) == 0)
        {
            throw new Exception(ExceptionMessages::InvalidRelationValue." : ".$fRelationId, ExceptionCodes::InvalidRelationValue);
        }
        else
        {
//==============================================================================

            $oUnits = new UnitsExt($db);

            if (! trim($host_mm_id))
            {
                throw new Exception(ExceptionMessages::MissingHostMMIdValue, ExceptionCodes::MissingHostMMIdValue);
            }
            else if (!is_numeric($host_mm_id))
            {
                throw new Exception(ExceptionMessages::InvalidHostMMIdType, ExceptionCodes::InvalidHostMMIdType);
            }
            else if ($host_mm_id)
            {
                $filter = new DFC(UnitsExt::FIELD_MM_ID, $host_mm_id, DFC::EXACT);
                $oUnits = $oUnits->findByFilter($db, $filter, true);
            }

            if ( $host_mm_id && (count($oUnits) < 1))
                throw new Exception(ExceptionMessages::InvalidHostMMIdValue." : ".$host_mm_id, ExceptionCodes::InvalidHostMMIdValue);
            else if ($host_mm_id)
                $fHostMMId = $oUnits[0]->getMmId ();
            else
                $fHostMMId = NULL;            
            
//==============================================================================
        
            $oUnits = new UnitsExt($db);

            if (! trim($guest_mm_id))
            {
                throw new Exception(ExceptionMessages::MissingGuestMMIdValue, ExceptionCodes::MissingGuestMMIdValue);
            }
            else if (!is_numeric($guest_mm_id))
            {
                throw new Exception(ExceptionMessages::InvalidGuestMMIdType, ExceptionCodes::InvalidGuestMMIdType);
            }
            else if ($guest_mm_id)
            {
                $filter = new DFC(UnitsExt::FIELD_MM_ID, $guest_mm_id, DFC::EXACT);
                $oUnits = $oUnits->findByFilter($db, $filter, true);
            }

            if ( $guest_mm_id && (count($oUnits) < 1))
                throw new Exception(ExceptionMessages::InvalidGuestMMIdValue." : ".$guest_mm_id, ExceptionCodes::InvalidGuestMMIdValue);
            else if ($guest_mm_id)
                $fGuestMMId = $oUnits[0]->getMmId ();
            else
                $fGuestMMId = NULL;            
            
//==============================================================================
        
            $oRelationTypes = new RelationTypesExt($db);
            if (! $relation_type)
            {
                throw new Exception(ExceptionMessages::MissingRelationTypeValue, ExceptionCodes::MissingRelationTypeValue);
            }
            else if (is_numeric($relation_type))
            {
                $filter = array( new DFC(RelationTypesExt::FIELD_RELATION_TYPE_ID, $relation_type, DFC::EXACT) );
                $oRelationTypes = $oRelationTypes->findByFilter($db, $filter, true);  
            }
            else if ($relation_type)
            {
                $filter = array( new DFC(RelationTypesExt::FIELD_NAME, $relation_type, DFC::EXACT) );
                $oRelationTypes = $oRelationTypes->findByFilter($db, $filter, true);
            }

            if ( $relation_type && (count($oRelationTypes) < 1))
                throw new Exception(ExceptionMessages::InvalidRelationTypeValue." : ".$relation_type, ExceptionCodes::InvalidRelationTypeValue);
            else if ($relation_type)
                $fRelationType = $oRelationTypes[0]->getRelationTypeId ();
            else
                $fRelationType = NULL;
        
//==============================================================================

            $oRelation->setRelationId($fRelationId);
            $oRelation->setHostMmId($fHostMMId);
            $oRelation->setGuestMmId($fGuestMMId);
            $oRelation->setRelationTypeId($fRelationType);
            $oRelation->setRelationState($relation_state);
            $oRelation->setTrueDate($true_date);
            $oRelation->setTrueFek($true_fek);
            $oRelation->setFalseDate($false_date);
            $oRelation->setFalseFek($false_fek);

            $oRelation->updateToDatabase($db);

            $result["relation_id"] = $oRelation->getRelationId();
            
            $result["status"] = ExceptionCodes::NoErrors;;
            $result["message"] = ExceptionMessages::NoErrors;
        }
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]:".$e->getMessage();
    } 
    
    return $result;
}

?>