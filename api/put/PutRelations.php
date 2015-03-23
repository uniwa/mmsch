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
    
    global $app,$entityManager;

    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
        //$relation_id========================================================== 
        $fRelationId = CRUDUtils::checkIDParam('relation_id', $params, $relation_id, 'RelationID');

        //init entity for update row============================================
        $Relation = CRUDUtils::findIDParam($fRelationId, 'Relations', 'Relation');

    //$host_mm_id===============================================================
    if ( Validator::IsExists('host_mm_id') ){
        CRUDUtils::entitySetAssociation($Relation, $host_mm_id, 'Units', 'hostMm', 'RelationHostUnitMMID', $params, 'host_mm_id', true, false, true);
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationHostUnitMMIDValue, ExceptionCodes::MissingRelationHostUnitMMIDValue);
    } 
    
    //$guest_mm_id==============================================================
    if ( Validator::IsExists('guest_mm_id') ){
        CRUDUtils::entitySetAssociation($Relation, $guest_mm_id, 'Units', 'guestMm', 'RelationGuestUnitMMID', $params, 'guest_mm_id', true, false, true);
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationGuestUnitMMIDValue, ExceptionCodes::MissingRelationGuestUnitMMIDValue);
    } 
    
    //$relation_state===========================================================
    if ( Validator::IsExists('relation_state') ){    
        if ($relation_state  == 0 || $relation_state  == 1 )
            CRUDUtils::entitySetParam($Relation, $relation_state, 'RelationState', 'relation_state' , $params , true, false, true);
        else
            throw new Exception(ExceptionMessages::InvalidRelationStateType, ExceptionCodes::InvalidRelationStateType);
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationStateValue, ExceptionCodes::MissingRelationStateValue);
    } 
    
    //$true_date================================================================  
    if ( Validator::IsExists('true_date') ){
        CRUDUtils::entitySetDate($Relation, $true_date, 'RelationTrueDate', 'true_date' , $params);
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationTrueDateValue, ExceptionCodes::MissingRelationTrueDateValue);
    } 
    
    //$true_fek=================================================================
    if ( Validator::IsExists('true_fek') ){
        CRUDUtils::entitySetParam($Relation, $true_fek, 'RelationTrueFek', 'true_fek' , $params);
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationTrueFekValue, ExceptionCodes::MissingRelationTrueFekValue);
    } 
    
    //$false_fek================================================================
    if ( Validator::IsExists('false_fek') ){
        CRUDUtils::entitySetParam($Relation, $false_fek, 'RelationFalseFek', 'false_fek' , $params);
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationFalseFekValue, ExceptionCodes::MissingRelationFalseFekValue);
    } 
    
    //$false_date===============================================================
    if ( Validator::IsExists('false_date') ){
        CRUDUtils::entitySetDate($Relation, $false_date, 'RelationFalseDate', 'false_date' , $params);
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationFalseDateValue, ExceptionCodes::MissingRelationFalseDateValue);
    } 
    
    //$relation_type============================================================
    if ( Validator::IsExists('relation_type') ){
        CRUDUtils::entitySetAssociation($Relation, $relation_type, 'RelationTypes', 'relationType', 'RelationType', $params, 'relation_type');
    } else if ( Validator::IsNull($Relation->getMm()) ){
        throw new Exception(ExceptionMessages::MissingRelationTypeValue, ExceptionCodes::MissingRelationTypeValue);
    } 

//controls======================================================================   

        //check name duplicate==================================================        
        $qb = $entityManager->createQueryBuilder()
                            ->select('COUNT(r.relationId) AS fresult')
                            ->from('Relations', 'r')
                            ->where("r.hostMm = :hostMm AND r.guestMm = :guestMm AND r.relationType = :relationType AND r.relationId != :relationId")
                            ->setParameter('hostMm', $Relation->getHostMm())
                            ->setParameter('guestMm', $Relation->getGuestMm())
                            ->setParameter('relationType', $Relation->getRelationType())
                            ->setParameter('relationId', $Relation->getRelationId())    
                            ->getQuery()
                            ->getSingleResult();
      
        if ( $qb["fresult"] != 0 ) {
             throw new Exception(ExceptionMessages::DuplicatedRelationValue ,ExceptionCodes::DuplicatedRelationValue);
        }
        
//update to db================================================================== 
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