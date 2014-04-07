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
 * Καταχώρηση : Συσχετίσεις Εργαζομένων και Μονάδων
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
 * @throws MissingMMIdValue {@see ExceptionMessages::MissingMMIdValue}
 * @throws InvalidMMIdType {@see ExceptionMessages::InvalidMMIdType}
 * @throws InvalidMMIdValue {@see ExceptionMessages::InvalidMMIdValue} 
 * @throws MissingWorkerRegistryNoValue {@see ExceptionMessages::MissingWorkerRegistryNoValue}
 * @throws InvalidWorkerValue {@see ExceptionMessages::InvalidWorkerValue}
 * @throws MissingWorkerPositionValue {@see ExceptionMessages::MissingWorkerPositionValue}
 * @throws InvalidWorkerPositionValue {@see ExceptionMessages::InvalidWorkerPositionValue}
 * @throws DuplicatedUnitWorkerValue {@see ExceptionMessages::DuplicatedUnitWorkerValue}
 * 
 * 
 */


function PostUnitWorkers( $mm_id, $worker_registry_no, $worker_position )
{
    global $db;
    global $Options;

    $result = array();  

    $result["method"] = __FUNCTION__;

    try
    {

//==============================================================================
     
        $oUnits = new UnitsExt($db);

        if (! trim($mm_id))
        {
            throw new Exception(ExceptionMessages::MissingMMIdValue, ExceptionCodes::MissingMMIdValue);
        }
        else if (!is_numeric($mm_id))
        {
            throw new Exception(ExceptionMessages::InvalidMMIdType, ExceptionCodes::InvalidMMIdType);
        }
        else if ($mm_id)
        {
            $filter = new DFC(UnitsExt::FIELD_MM_ID, $mm_id, DFC::EXACT);
            $oUnits = $oUnits->findByFilter($db, $filter, true);
        }

        if ( $mm_id && (count($oUnits) < 1))
            throw new Exception(ExceptionMessages::InvalidMMIdValue." : ".$mm_id, ExceptionCodes::InvalidMMIdValue);
        else if ($mm_id)
            $fMMId = $oUnits[0]->getMmId ();
        else
            $fMMId = NULL;            
            
//==============================================================================

        $oWorkers = new WorkersExt($db);

        if (! trim($worker_registry_no))
        {
            throw new Exception(ExceptionMessages::MissingWorkerRegistryNoValue, ExceptionCodes::MissingWorkerRegistryNoValue);
        }
        else if ($worker_registry_no)
        {
            $filter = new DFC(WorkersExt::FIELD_REGISTRY_NO, $worker_registry_no, DFC::EXACT);
            $oWorkers = $oWorkers->findByFilter($db, $filter, true);
        }

        if ( $worker_registry_no && (count($oWorkers) < 1))
            throw new Exception(ExceptionMessages::InvalidWorkerValue." : ".$worker_registry_no, ExceptionCodes::InvalidWorkerValue);
        else if ($worker_registry_no)
            $fWorker = $oWorkers[0]->getWorkerId ();
        else
            $fWorker = NULL;

//==============================================================================

        $oWorkerPosition = new WorkerPositionsExt($db);

        if (! trim($worker_position))
        {
            throw new Exception(ExceptionMessages::MissingWorkerPositionValue, ExceptionCodes::MissingWorkerPositionValue);
        }
        else if (is_numeric($worker_position))
        {
            $filter = new DFC(WorkerPositionsExt::FIELD_WORKER_POSITION_ID, $worker_position, DFC::EXACT);
            $oWorkerPosition = $oWorkerPosition->findByFilter($db, $filter, true);  
        }
        else if ($worker_position)
        {
            $filter = new DFC(WorkerPositionsExt::FIELD_NAME, $worker_position, DFC::EXACT);
            $oWorkerPosition = $oWorkerPosition->findByFilter($db, $filter, true);
        }

        if ( $worker_position && (count($oWorkerPosition) < 1))
            throw new Exception(ExceptionMessages::InvalidWorkerPositionValue." : ".$worker_specialization, ExceptionCodes::InvalidWorkerPositionValue);
        else if ($worker_position)
            $fWorkerPosition = $oWorkerPosition[0]->getWorkerPositionId ();
        else
            $fWorkerPosition = NULL;

//==============================================================================
        $oUnitWorker = new UnitWorkersExt($db);
        $filter = array(
            new DFC(UnitWorkersExt::FIELD_MM_ID, $fMMId, DFC::EXACT),
            new DFC(UnitWorkersExt::FIELD_WORKER_ID, $fWorker, DFC::EXACT),
            new DFC(UnitWorkersExt::FIELD_WORKER_POSITION_ID, $fWorkerPosition, DFC::EXACT)
        );
        $arrayUnitWorkers = $oUnitWorker->findByFilter($db, $filter, true);  

        if (count( $arrayUnitWorkers ) > 0)
        {
            throw new Exception(ExceptionMessages::DuplicatedUnitWorkerValue." : ".$fUnitWorkerId, ExceptionCodes::DuplicatedUnitWorkerValue);
        }
        else
        {
            $oUnitWorker->setMmId($fMMId);
            $oUnitWorker->setWorkerId($fWorker);
            $oUnitWorker->setWorkerPositionId($fWorkerPosition);
        
            $oUnitWorker->insertIntoDatabase ($db);

            $result["unit_worker_id"] = $oUnitWorker->getUnitWorkerId();

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