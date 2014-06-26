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
 * Ενημέρωση : Συσχετίσεις Εργαζομένων και Μονάδων
 * 
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> http://mmsch.teiath.gr/api/unit_workers <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT http://mmsch.teiath.gr/api/unit_workers \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"worker_id" : "value", \
 *        "registry_no" : "value", \
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
 *                                  "registry_no" : "value",
 *                                  "lastname" : "value",
 *                                  "firstname" : "value",
 *                                  "fathername" : "value", 
 *                                  "sex" : "value",
 *                                  "tax_number" : "value"
 *                                  "worker_specialization" : "value" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "http://mmsch.teiath.gr/api/unit_workers");
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
 *      "registry_no" => "value", 
 *      "lastname" => "value", 
 *      "firstname" => "value", 
 *      "fathername" => "value", 
 *      "sex" => "value", 
 *      "tax_number" => "value",
 *      "worker_specialization" => "value" );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/unit_workers");
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
 *        url: 'http://mmsch.teiath.gr/api/unit_workers',
 *        dataType: "json",
 *        data: {
 *            "worker_id" : "value",
 *            "registry_no" : "value",
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
 * @param integer $worker_id Κωδικός Εργαζόμενου
 * <br>Ο Κωδικός του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $worker_registry_no Αριθμός Μητρώου
 * <br>Ο Αριθμός Μητρώου του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $lastname Επώνυμο
 * <br>Το Επώνυμο του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $firstname Όνομα
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
 * <br>Η Ειδικότητα του Εργαζομένου (Λεξικό : {@see GetWorkerSpecializations})
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
 * @throws MissingUnitWorkerIDValue {@see ExceptionMessages::MissingUnitWorkerIDValue}
 * @throws InvalidUnitWorkerIDType {@see ExceptionMessages::InvalidUnitWorkerIDType}
 * @throws InvalidUnitWorkerValue {@see ExceptionMessages::InvalidUnitWorkerValue}
 * @throws MissingMMIdValue {@see ExceptionMessages::MissingMMIdValue}
 * @throws InvalidMMIdType {@see ExceptionMessages::InvalidMMIdType}
 * @throws InvalidMMIdValue {@see ExceptionMessages::InvalidMMIdValue} 
 * @throws MissingWorkerRegistryNoValue {@see ExceptionMessages::MissingWorkerRegistryNoValue}
 * @throws InvalidWorkerValue {@see ExceptionMessages::InvalidWorkerValue}
 * @throws MissingWorkerPositionValue {@see ExceptionMessages::MissingWorkerPositionValue}
 * @throws InvalidWorkerPositionValue {@see ExceptionMessages::InvalidWorkerPositionValue}
 * 
 * 
 */


function PutUnitWorkers( $unit_worker_id, $mm_id, $worker, $worker_position )
{
    global $entityManager;
    
    $result = array();

    $result["method"] = __FUNCTION__;

    try
    {

        if ( $$unit_worker_id === _MISSED_ )
            throw new Exception(ExceptionMessages::MissingUnitWorkerIDParam, ExceptionCodes::MissingUnitWorkerIDParam);
        else if ( Validator::IsNull($unit_worker_id) )
            throw new Exception(ExceptionMessages::MissingUnitWorkerIDValue, ExceptionCodes::MissingUnitWorkerIDValue);
        else if ( Validator::IsID($unit_worker_id) )
            $unit_worker_id = Validator::ToID($unit_worker_id);
        else
            throw new Exception(ExceptionMessages::InvalidUnitWorkerIDType." : ".$unit_worker_id, ExceptionCodes::InvalidUnitWorkerIDType);

        $unitWorker = $entityManager->find('UnitWorkers', $unit_worker_id);
        if(!isset($unit_worker_id))
            throw new Exception(ExceptionMessages::InvalidUnitWorkerValue." : ".$mm_id, ExceptionCodes::InvalidUnitWorkerValue);
        
//==============================================================================
    CRUDUtils::entitySetAssociation($unitWorker, $mm_id, 'Units', 'mm', 'Unit');
  
//==============================================================================
    CRUDUtils::entitySetAssociation($unitWorker, $worker, 'Workers', 'worker', 'Worker');

//==============================================================================
    CRUDUtils::entitySetAssociation($unitWorker, $worker_position, 'WorkerPositions', 'workerPosition', 'WorkerPosition');

//==============================================================================

       $checkDuplicate = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'mm' => Validator::toID($mm_id),
                                                                                        'worker' => Validator::toID($worker),
                                                                                        'workerPosition' => Validator::toID($worker_position),
                                                                                       ));
            
       if (Validator::isNull($checkDuplicate)){
           $entityManager->persist($unitWorker);
           $entityManager->flush($unitWorker);
       } else {
           throw new Exception(ExceptionMessages::DuplicatedUnitWorkerValue ,ExceptionCodes::DuplicatedUnitWorkerValue);
       }
       
            $result["status"] = ExceptionCodes::NoErrors;;
            $result["message"] = ExceptionMessages::NoErrors;
            $result["unit_worker_id"] = $unitWorker->getUnitWorkerId();
            
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]: ".$e->getMessage();
    } 
    
    return $result;
}

?>