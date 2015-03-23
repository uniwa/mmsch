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
 * <br> https://mm.sch.gr/api/unit_workers <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT https://mm.sch.gr/api/unit_workers \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"worker_id" : "value", \
 *        "mm_id" : "value", \
 *        "worker" : "value", \
 *        "worker_position" : "value" }'
 * </code>
 * <br>
 * 
 * 
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "worker_id" : "value",
 *                                  "mm_id" : "value",
 *                                  "worker" : "value",
 *                                  "worker_position" : "value" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "https://mm.sch.gr/api/unit_workers");
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
 *      "mm_id" => "value", 
 *      "worker" => "value", 
 *      "worker_position" => "value" );
 * 
 * $curl = curl_init("https://mm.sch.gr/api/unit_workers");
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
 *        url: 'https://mm.sch.gr/api/unit_workers',
 *        dataType: "json",
 *        data: {
 *            "worker_id" : "value",
 *            "mm_id" : "value",
 *            "worker" : "value",
 *            "worker_position" : "value"
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
 * @param integer $worker Κωδικός Εργαζόμενου
 * <br>Ο Κωδικός του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $mm_id Αριθμός Μητρώου
 * <br>Ο Αριθμός Μητρώου του Εργαζόμενου
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $worker_position Θεση Εργασίας
 * <br>Η Θεση Εργασίας του Εργαζομένου (Λεξικό : {@see GetWorkerPositions})
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

        if ( $unit_worker_id === _MISSED_ )
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
    CRUDUtils::entitySetAssociationOld($unitWorker, $mm_id, 'Units', 'mm', 'Unit');
  
//==============================================================================
    CRUDUtils::entitySetAssociationOld($unitWorker, $worker, 'Workers', 'worker', 'Worker');

//==============================================================================
    CRUDUtils::entitySetAssociationOld($unitWorker, $worker_position, 'WorkerPositions', 'workerPosition', 'WorkerPosition');

//==============================================================================

       $checkDuplicate = $entityManager->getRepository('UnitWorkers')->findOneBy(array( 'mm' => Validator::toID($mm_id),
                                                                                        'worker' => Validator::toID($worker),
                                                                                        'workerPosition' => Validator::toID($worker_position),
                                                                                       ));
            
       if (!Validator::isNull($checkDuplicate)){
           throw new Exception(ExceptionMessages::DuplicatedUnitWorkerValue ,ExceptionCodes::DuplicatedUnitWorkerValue);
       }

       $distinctSpecialties = array( // Only one worker of this specialty is allowed per unit
           'ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ'
       );

       if(in_array($worker_position, $distinctSpecialties)) {
            $checkDistinct = $entityManager->getRepository('UnitWorkers')->findBy(array( 'mm' => Validator::toID($mm_id),
                                                                                        'workerPosition' => $unitWorker->getWorkerPosition(),
                                                                                       ));
            $toFlush = array();
            foreach($checkDistinct as $curDistinctWorker) {
                if($curDistinctWorker->getUnitWorkerId() == $unit_worker_id) { continue; }
                $entityManager->remove($curDistinctWorker);
                $toFlush[] = $curDistinctWorker;
            }
            $entityManager->flush($toFlush);
       }

           $entityManager->persist($unitWorker);
           $entityManager->flush($unitWorker);
       
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