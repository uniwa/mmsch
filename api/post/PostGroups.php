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
 * Καταχώρηση : Τμήματα Τάξεων
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> https://mm.sch.gr/api/groups <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X POST https://mm.sch.gr/api/groups \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"mm_id" : "value", \
 *        "level" : "value", \
 *        "name" : "value", \
 *        "students_count" : "value"}'
 * </code>
 * <br>
 * 
 *
 *  
 * Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "mm_id" : "value",
 *        "level" : "value",
 *        "name" : "value",
 *        "students_count" : "value" 
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "https://mm.sch.gr/api/groups");
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
 *        "mm_id" : "value",
 *        "level" : "value",
 *        "name" : "value",
 *        "students_count" : "value"
 * );
 * 
 * $curl = curl_init("https://mm.sch.gr/api/groups");
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
 *        url: 'https://mm.sch.gr/api/groups',
 *        dataType: "json",
 *        data: {
 *           "mm_id" : "value",
 *           "level" : "value",
 *           "name" : "value",
 *           "students_count" : "value"
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
 * @param integer $mm_id <b><i>Κωδικός ΜΜ</i></b>
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Αναζήτηση Μονάδων {@see GetUnits}
 * 
 * @param mixed $level <b><i>Τάξη</b></i>
 * <br>Ο Τάξη της Μονάδας που ανήκει το Τμήμα
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Λεξικό : Τάξεις {@see GetLevels}
 * 
 * @param string $name <b><i>Όνομα Τμήματος</i></b>
 * <br>Το όνομα του Τμήματος
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param integer $students_count Πλήθος Μαθητών
 * <br>Το Πλήθος των Μαθητών του Τμήματος
 *  
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>level_id</b> : Ο Κωδικός του Τμήματος</li>
 * </ul>
 * 
 *
 * 
 * @throws MissingMMIdValue {@see ExceptionMessages::MissingMMIdValue}
 * @throws InvalidMMIdType {@see ExceptionMessages::InvalidMMIdType}
 * @throws InvalidMMIdValue {@see ExceptionMessages::InvalidMMIdValue}
 * @throws MissingLevelValue {@see ExceptionMessages::MissingLevelValue}
 * @throws InvalidLevelValue {@see ExceptionMessages::InvalidLevelValue}
 * @throws MissingNameValue {@see ExceptionMessages::MissingNameValue}
 * @throws DuplicatedGroupValue {@see ExceptionMessages::DuplicatedGroupValue}
 * 
 * 
 */

function PostGroups( $mm_id, $level_id, $name, $students_count ) {
    
    global $app,$entityManager;

    $Group = new Groups();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
        
    //$mm_id====================================================================      
    CRUDUtils::entitySetAssociation($Group, $mm_id, 'Units', 'mm', 'UnitMMID', $params, 'mm_id', true, false, true);

    //$level_id=================================================================
    CRUDUtils::entitySetAssociation($Group, $level_id, 'Levels', 'level', 'LevelID', $params, 'level_id', true, false, true);
     
    //$name=====================================================================
    CRUDUtils::entitySetParam($Group, $name, 'GroupName', 'name' , $params);
    
    //$students_count===========================================================
    CRUDUtils::entitySetParam($Group, $students_count, 'GroupStudentsCount', 'students_count' , $params, true, false, true);
        
//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('Groups')->findOneBy(array( 'mm'     => $Group->getMm()->getMmId(),
                                                                                    'level'  => $Group->getLevel()->getLevelId(),
                                                                                    'name'   => $Group->getName(),
                                                                                   ));

        if (count($checkDuplicate) != 0)
            throw new Exception(ExceptionMessages::DuplicatedGroupValue,ExceptionCodes::DuplicatedGroupValue);  
        
//insert to db================================================================== 
        $entityManager->persist($Group);
        $entityManager->flush($Group);

        $result["group_id"] = $Group->getGroupId();
           
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