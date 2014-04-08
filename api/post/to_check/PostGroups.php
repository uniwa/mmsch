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
 * <br> http://mmsch.teiath.gr/api/groups <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X POST http://mmsch.teiath.gr/api/groups \
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
 *    http.open("POST", "http://mmsch.teiath.gr/api/groups");
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
 * $curl = curl_init("http://mmsch.teiath.gr/api/groups");
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
 *        url: 'http://mmsch.teiath.gr/api/groups',
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


function PostGroups( $mm_id, $level, $name, $students_count )
{
    global $db;
    global $Options;

    $result = array();  

    $result["method"] = __FUNCTION__;

    try
    {
//==============================================================================

        $oUnit = new UnitsExt($db);

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
            $oUnit = $oUnit->findByFilter($db, $filter, true);
        }

        if ( $mm_id && (count($oUnit) < 1))
            throw new Exception(ExceptionMessages::InvalidMMIdValue." : ".$mm_id, ExceptionCodes::InvalidMMIdValue);
        else if ($mm_id)
            $fMMId = $oUnit[0]->getMmId ();
        else
            $fMMId = NULL;    

//==============================================================================

        $oLevel = new LevelsExt($db);

        if (! $level)
        {
            throw new Exception(ExceptionMessages::MissingLevelValue, ExceptionCodes::MissingLevelValue);
        }
        else if (is_numeric($level))
        {
            $filter = array(
                new DFC(LevelsExt::FIELD_MM_ID, $fMMId, DFC::EXACT),
                new DFC(LevelsExt::FIELD_LEVEL_ID, $level, DFC::EXACT)
            );
                
            $oLevel = $oLevel->findByFilter($db, $filter, true);  
        }
        else if ($level)
        {
            $filter = array(
                new DFC(LevelsExt::FIELD_MM_ID, $fMMId, DFC::EXACT),
                new DFC(LevelsExt::FIELD_NAME, $level, DFC::EXACT)
            );

            $oLevel = $oLevel->findByFilter($db, $filter, true);
        }

        if ( $level && (count($oLevel) < 1))
            throw new Exception(ExceptionMessages::InvalidLevelValue." : ".$source, ExceptionCodes::InvalidLevelValue);
        else if ($level)
            $fLevel = $oLevel[0]->getLevelId ();
        else 
            $fLevel = NULL;
        
//==============================================================================
        
        if (trim($name) == "")
	        throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);
        else
            $fName = $name;

//==============================================================================

        $oGroup = new GroupsExt($db);
        
        $filter = array(
            new DFC(GroupsExt::FIELD_MM_ID, $fMMId, DFC::EXACT),
            new DFC(GroupsExt::FIELD_LEVEL_ID, $fLevel, DFC::EXACT),
            new DFC(GroupsExt::FIELD_NAME, $fName, DFC::EXACT),
        );
        
        $arrayGroups = $oGroup->findByFilter($db, $filter, true);
        
        if (count($arrayGroups) > 0)
        {
            throw new Exception(ExceptionMessages::DuplicatedGroupValue." : ".$fMMId.":".$fLevel.":".$fName, ExceptionCodes::DuplicatedGroupValue);
        }
        else
        {        
//==============================================================================
        
            $oGroup->setMmId( $fMMId );
            $oGroup->setLevelId( $fLevel );
            $oGroup->setName( $fName );
            $oGroup->setStudentsCount( $students_count );

            $oGroup->insertIntoDatabase ($db);

            $result["group_id"] = $oGroup->getGroupId();
                    
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