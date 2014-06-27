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
 *        "worker_specialization" : "value", \
 *        "source" : "value" }'
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
 *                                  "tax_number" : "value",
 *                                  "worker_specialization" : "value",
 *                                  "source" : "value" });
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
 *      "worker_specialization" => "value",
 *      "source" : "value" );
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
 *            "source" : "value"
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
 * @param integer $worker_id Κωδικός Εργαζόμενου
 * <br>Ο Κωδικός του Εργαζόμενου
 * 
 * @param string $worker_registry_no Αριθμός Μητρώου
 * <br>Ο Αριθμός Μητρώου του Εργαζόμενου
 * 
 * @param string $lastname Επώνυμο
 * <br>Το Επώνυμο του Εργαζόμενου
 * 
 * @param string $firstname Όνομα
 * <br>Το Όνομα του Εργαζόμενου
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
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Λεξικό : Ειδικότητες Εργαζομένων {@see GetWorkerSpecializations})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $source Πρωτογενής Πηγή
 * <br>Η Πρωτογενής Πηγή του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Λεξικό : Πρωτογενείς Πηγές Εργαζομενων {@see GetSources})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
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
 * @throws InvalidSourceValue {@see ExceptionMessages::InvalidSourceValue}
 * 
 * 
 */


    
function PutWorkers( 
    $worker_id, $registry_no, $lastname, $firstname, $fathername, $sex, $tax_number, $worker_specialization , $source
)
{
  global $entityManager;
    
    $result = array();

    $result["method"] = __FUNCTION__;

    try
    {

        if ( $$worker_id === _MISSED_ )
            throw new Exception(ExceptionMessages::MissingWorkerIDParam, ExceptionCodes::MissingWorkerIDParam);
        else if ( Validator::IsNull($worker_id) )
            throw new Exception(ExceptionMessages::MissingWorkerIDValue, ExceptionCodes::MissingWorkerIDValue);
        else if ( Validator::IsID($worker_id) )
            $worker_id = Validator::ToID($worker_id);
        else
            throw new Exception(ExceptionMessages::InvalidWorkerIDType." : ".$worker_id, ExceptionCodes::InvalidWorkerIDType);

        $Worker = $entityManager->find('Workers', $worker_id);
        if(!isset($worker_id))
            throw new Exception(ExceptionMessages::InvalidWorkerValue." : ".$mm_id, ExceptionCodes::InvalidWorkerValue);
        
    //==============================================================================
    CRUDUtils::entitySetParam($Worker, $registry_no, ExceptionCodes::InvalidWorkerRegistryNoType, 'registryNo');
  
    //==============================================================================
    CRUDUtils::entitySetParam($Worker, $lastname, ExceptionCodes::InvalidWorkerLastnameType, 'lastname');

    //==============================================================================
    CRUDUtils::entitySetParam($Worker, $firstname, ExceptionCodes::InvalidWorkerFirstnameType, 'firstname');
    
    //==============================================================================
    CRUDUtils::entitySetParam($Worker, $fathername, ExceptionCodes::InvalidWorkerFathernameType, 'fathername');
  
    //==============================================================================
    CRUDUtils::entitySetParam($Worker, $sex, ExceptionCodes::InvalidWorkerSexType, 'sex');

    //==============================================================================
    CRUDUtils::entitySetParam($Worker, $tax_number, ExceptionCodes::InvalidWorkerTaxNumberType, 'taxNumber');

    //==============================================================================
    CRUDUtils::entitySetParam($Worker, $worker_specialization, ExceptionCodes::InvalidWorkerSpecializationType, 'workerSpecialization');
  
    //==============================================================================
    CRUDUtils::entitySetAssociation($Worker, $source, 'Sources', 'source', 'Source');

//==============================================================================

           $entityManager->persist($Worker);
           $entityManager->flush($Worker);
       
            $result["status"] = ExceptionCodes::NoErrors;;
            $result["message"] = ExceptionMessages::NoErrors;
            $result["worker_id"] = $Worker->getWorkerId();
            
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]: ".$e->getMessage();
    } 
    
    return $result;
}

?>