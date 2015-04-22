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
 * Καταχώρηση : Συσχετίσεις μεταξύ Μονάδων 
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> https://mm.sch.gr/api/relations <br><br>
 *
 * 
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X POST https://mm.sch.gr/api/relations \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"host_mm_id" : "value", \
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
 *    http.open("POST", "https://mm.sch.gr/api/relations");
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
 * Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'POST',
 *        url: 'https://mm.sch.gr/api/relations',
 *        dataType: "json",
 *        data: {
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
 *  <li>integer : <b>relation_id</b> : Ο Κωδικός του Συσχέτισης</li>
 * </ul>
 * 
 *
 * 
 * @throws MissingRelationHostUnitMMIDValue {@see ExceptionMessages::MissingRelationHostUnitMMIDValue}
 * @throws InvalidRelationHostUnitMMIDType {@see ExceptionMessages::InvalidRelationHostUnitMMIDType}
 * @throws InvalidRelationHostUnitMMIDValue {@see ExceptionMessages::InvalidRelationHostUnitMMIDValue}
 * @throws MissingRelationGuestUnitMMIDValue {@see ExceptionMessages::MissingRelationGuestUnitMMIDValue}
 * @throws InvalidRelationGuestUnitMMIDType {@see ExceptionMessages::InvalidRelationGuestUnitMMIDType}
 * @throws InvalidRelationGuestUnitMMIDValue {@see ExceptionMessages::InvalidRelationGuestUnitMMIDValue}
 * @throws MissingRelationTypeValue {@see ExceptionMessages::MissingRelationTypeValue}
 * @throws InvalidRelationTypeValue {@see ExceptionMessages::InvalidRelationTypeValue}
 * @throws DuplicatedRelationValue {@see ExceptionMessages::DuplicatedRelationValue}
 * 
 * 
 */

function PostRelations( $host_mm_id, $guest_mm_id, $relation_state, $true_date, $true_fek, $false_date, $false_fek, $relation_type )
{
    
    global $app,$entityManager;

    $Relation = new Relations();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
    
    //$host_mm_id===============================================================
    CRUDUtils::entitySetAssociation($Relation, $host_mm_id, 'Units', 'hostMm', 'RelationHostUnitMMID', $params, 'host_mm_id', true, false, true);

    //$guest_mm_id==============================================================
    CRUDUtils::entitySetAssociation($Relation, $guest_mm_id, 'Units', 'guestMm', 'RelationGuestUnitMMID', $params, 'guest_mm_id', true, false, true);
    
    //$relation_state===========================================================
    if ($relation_state  == 0 || $relation_state  == 1 )
        CRUDUtils::entitySetParam($Relation, $relation_state, 'RelationState', 'relation_state' , $params , true, false, true);
    else
        throw new Exception(ExceptionMessages::InvalidRelationStateType, ExceptionCodes::InvalidRelationStateType);

    //$true_date================================================================  
    CRUDUtils::entitySetDate($Relation, $true_date, 'RelationTrueDate', 'true_date' , $params);
        
    //$true_fek=================================================================
    CRUDUtils::entitySetParam($Relation, $true_fek, 'RelationTrueFek', 'true_fek' , $params);
    
    //$false_fek================================================================
    CRUDUtils::entitySetParam($Relation, $false_fek, 'RelationFalseFek', 'false_fek' , $params);
    
    //$false_date===============================================================
    CRUDUtils::entitySetDate($Relation, $false_date, 'RelationFalseDate', 'false_date' , $params);
    
    //$relation_type============================================================      
    CRUDUtils::entitySetAssociation($Relation, $relation_type, 'RelationTypes', 'relationType', 'RelationType', $params, 'relation_type');
    
//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('Relations')->findOneBy(array( 'hostMm'    => $Relation->getHostMm()->getMmId(),
                                                                                       'guestMm'   => $Relation->getGuestMm()->getMmId(),
                                                                                       'relationType' => $Relation->getRelationType(),
                                                                                      ));

        if (count($checkDuplicate) != 0)
            throw new Exception(ExceptionMessages::DuplicatedRelationValue,ExceptionCodes::DuplicatedRelationValue);      

//insert to db================================================================== 
        $entityManager->persist($Relation);
        $entityManager->flush($Relation);

        $result["relation_id"] = $Relation->getRelationId();
           
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
        
    return $result;
}

?>