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
 * Ενημέρωση : Τάξεις
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> http://mmsch.teiath.gr/api/levels <br><br>
 *
 *
 *  
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT http://mmsch.teiath.gr/api/levels \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"level_id" : "value", \
 *        "mm_id" : "value",
 *        "name" : "value",
 *        "groups_count" : "value",
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
 *        "level_id" : "value",
 *        "mm_id" : "value",
 *        "name" : "value",
 *        "groups_count" : "value",
 *        "students_count" : "value"
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "http://mmsch.teiath.gr/api/levels");
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
 *        "level_id" : "value",
 *        "mm_id" : "value",
 *        "name" : "value",
 *        "groups_count" : "value",
 *        "students_count" : "value"
 * );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/levels");
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
 *        url: 'http://mmsch.teiath.gr/api/levels',
 *        dataType: "json",
 *        data: {
 *            "level_id" : "value",
 *            "mm_id" : "value",
 *            "name" : "value",
 *            "groups_count" : "value",
 *            "students_count" : "value"
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
 * @param integer $level_id <b><i>Κωδικός Τάξης</i></b>
 * <br>Ο Κωδικός της Τάξης
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param integer $mm_id <b><i>Κωδικός ΜΜ</i></b>
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Αναζήτηση Μονάδων {@see GetUnits}
 * 
 * @param string $name <b><i>Όνομα Τάξης</i></b>
 * <br>Το όνομα της Τάξης
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param integer $groups_count Πλήθος Τμημάτων 
 * <br>Το Πλήθος των Τμημάτων της Τάξης
 * 
 * @param integer $students_count Πλήθος Μαθητών
 * <br>Το Πλήθος των Μαθητών της Τάξης
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>level_id</b> : Ο Κωδικός της Τάξης</li>
 * </ul>
 * 
 *
 * 
 * @throws MissingLevelIDValue {@see ExceptionMessages::MissingLevelIDValue}
 * @throws InvalidLevelIDType {@see ExceptionMessages::InvalidLevelIDType}
 * @throws InvalidLevelValue {@see ExceptionMessages::InvalidLevelValue}
 * @throws MissingMMIdValue {@see ExceptionMessages::MissingMMIdValue}
 * @throws InvalidMMIdType {@see ExceptionMessages::InvalidMMIdType}
 * @throws InvalidMMIdValue {@see ExceptionMessages::InvalidMMIdValue}
 * @throws MissingNameValue {@see ExceptionMessages::MissingNameValue}
 * 
 * 
 */

function PutLevels( $level_id, $mm_id, $name, $groups_count, $students_count )
{
    global $db;
    global $Options;

    $filter = array();
    $result = array();  

    $result["method"] = __FUNCTION__;

    try
    {
//==============================================================================
  
        if (! trim($level_id) )
            throw new Exception(ExceptionMessages::MissingLevelIDValue, ExceptionCodes::MissingLevelIDValue);
        else if (!is_numeric($level_id))
            throw new Exception(ExceptionMessages::InvalidLevelIDType, ExceptionCodes::InvalidLevelIDType);
        else
            $fLevelId = $level_id;        
        
        $oLevel = new LevelsExt($db);
        
        $filter = new DFC(LevelsExt::FIELD_LEVEL_ID, $fLevelId, DFC::EXACT);
        
        $arrayLevels = $oLevel->findByFilter($db, $filter, true);
        
        if (count($arrayLevels) == 0)
        {
            throw new Exception(ExceptionMessages::InvalidLevelValue." : ".$fLevelId, ExceptionCodes::InvalidLevelValue);
        }
        else
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
        
            if (trim($name) == "")
                throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);
            else
                $fName = $name;

//==============================================================================
        
            $oLevel->setLevelId( $fLevelId );
            $oLevel->setMmId( $fMMId );
            $oLevel->setName( $fName );
            $oLevel->setGroupsCount( $groups_count );
            $oLevel->setStudentsCount( $students_count );

            $oLevel->updateToDatabase($db);

            $result["level_id"] = $oLevel->getLevelId();

            $result["status"] = ExceptionCodes::NoErrors;;
            $result["message"] = ExceptionMessages::NoErrors;
        }
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."] ".$e->getMessage();
    } 
    
    return $result;
}

?>