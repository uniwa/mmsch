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
 * Καταχώρηση : Τάξεις
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> http://mm.sch.gr/api/levels <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X POST http://mm.sch.gr/api/levels \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"mm_id" : "value", \
 *        "name" : "value", \
 *        "groups_count" : "value", \
 *        "students_count" : "value" }'
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
 *        "name" : "value",
 *        "groups_count" : "value",
 *        "students_count" : "value"
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "http://mm.sch.gr/api/levels");
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
 *        "mm_id" => "value",
 *        "name" => "value",
 *        "groups_count" => "value",
 *        "students_count" => "value"
 * );
 * 
 * $curl = curl_init("http://mm.sch.gr/api/levels");
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
 *        url: 'http://mm.sch.gr/api/levels',
 *        dataType: "json",
 *        data: {
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
 * @throws MissingNameValue {@see ExceptionMessages::MissingNameValue}
 * @throws MissingMMIdValue {@see ExceptionMessages::MissingMMIdValue}
 * @throws InvalidMMIdType {@see ExceptionMessages::InvalidMMIdType}
 * @throws InvalidMMIdValue {@see ExceptionMessages::InvalidMMIdValue}
 * @throws DuplicatedLevelValue {@see ExceptionMessages::DuplicatedLevelValue}
 * 
 * 
 */


function PostLevels( $mm_id, $name, $groups_count, $students_count )
{
    global $db;
    global $Options;

    $filter = array();
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

        if (trim($name) == "")
	        throw new Exception(ExceptionMessages::MissingNameValue." : '".$name."'", ExceptionCodes::MissingNameValue);
        else
            $fName = $name;

//==============================================================================
        
        $oLevel = new LevelsExt($db);
        
        $filter = array(
            new DFC(LevelsExt::FIELD_MM_ID, $fMMId, DFC::EXACT),
            new DFC(LevelsExt::FIELD_NAME, $fName, DFC::EXACT),
        );
        
        $arrayLevels = $oLevel->findByFilter($db, $filter, true);
        
        if (count($arrayLevels) > 0)
        {
            throw new Exception(ExceptionMessages::DuplicatedLevelValue." : ".$fMMId.":".$fName, ExceptionCodes::DuplicatedLevelValue);
        }
        else
        {        
//==============================================================================

            $oLevel->setMmId( $fMMId );
            $oLevel->setName( $fName );
            $oLevel->setGroupsCount( $groups_count );
            $oLevel->setStudentsCount( $students_count );

            $oLevel->insertIntoDatabase ($db);

            $result["level_id"] = $oLevel->getLevelId();

            $result["status"] = ExceptionCodes::NoErrors;
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