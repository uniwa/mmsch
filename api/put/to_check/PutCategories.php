<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * Ενημέρωση : Κατηγορίες
 *
 *
 * Η μέθοδος αυτή χρησιμοποιείται για την Ενημέρωση του λεξικού των Κατηγοριών.
 * <br>Η κλήση της μπορεί να γίνει μέσω της μεθόδου PUT στην ηλεκτρονική διεύθυνση:
 * <br> http://mmsch.teiath.gr/api/categories <br>
 *
 * <br>
 *
 * <a href="#parameters">Παράμετροι (Πίνακας : Parameters summary)</a>
 * <br>Στον πίνακα αυτό περιγράφονται οι παράμετροι που μπορούν να χρισημοποιηθούν στη κλήση της μεθόδου
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 *
 * <br>
 *
 * <a href="#returns">Αποτελέσματα (Πίνακας : Return value summary)</a>
 * <br>Στον πίνακα αυτό περιγράφονται οι μεταβλητές που επιστρέφει η μέθοδος
 * <br>Όλες οι μεταβλητές επιστρέφονται σε ένα πίνακα σε μορφή JSON
 *
 * <br>
 *
 * <a href="#throws">Εξαιρέσεις (Πίνακας : Thrown exceptions summary)</a>
 * <br>Στον πίνακα αυτό εμφανίζεται μια σειρά από ιεραρχικούς ελέγχους που γίνονται κατά την εκτέλεση της μεθόδου οι
 * οποίοι μπορούν να προκαλέσουν την διακοπή της εκτέλεσης της επιστρέφοντας το αντίστοιχο Κωδικό και Μύνημα Σφάλματος.
 * <br>Η περιγραφή όλων των Σφαλμάτων είναι διαθέσιμη μέσω του πίνακα Μηνύματα Σφαλμάτων {@see ExceptionMessages}
 *
 * <br>
 *
 * Παρακάτω εμφανίζεται μια σειρά από παραδείγματα κλήσης της μεθόδου με διάφορους τρόπους :
 * <br><a href="#cURL">cURL</a> | <a href="#JavaScript">JavaScript</a> | <a href="#PHP">PHP</a> | <a href="#Ajax">Ajax</a>
 *
 *
 * <br>
 *
 * <a id="cURL"></a>Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 *    curl -X PUT http://mmsch.teiath.gr/api/categories \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d { "category_id" : "1", "name" : "ΣΧΟΛΙΚΕΣ ΜΟΝΑΔΕΣ" }'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"category_id" : "1", "name" : "ΣΧΟΛΙΚΕΣ ΜΟΝΑΔΕΣ"});
 *
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "http://mmsch.teiath.gr/api/categories");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    http.setRequestHeader("Authorization", "Basic " + btoa('username' + ':' + 'password') );
 *
 *    http.onreadystatechange = function()
 *    {
 *        if(http.readyState == 4 && http.status == 200)
 *        {
 *            var result = JSON.parse(http.responseText);
 *            document.write(result.status + " : " + result.message);
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
 * <a id="PHP"></a>Παράδειγμα κλήσης της μεθόδου με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 *
 * $params = array("category_id" => "1", "name" => "ΣΧΟΛΙΚΕΣ ΜΟΝΑΔΕΣ");
 *
 * $curl = curl_init("http://mmsch.teiath.gr/api/categories");
 *
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
 * curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 * curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 *
 * $data = curl_exec($curl);
 * $data = json_decode($data);
 * echo "<pre>"; var_dump( $data ); echo "</pre>";
 * ?>
 * </code>
 * <br>
 *
 *
 *
 * <a id="PHP"></a>Παράδειγμα κλήσης της μεθόδου με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'PUT',
 *        url: 'http://mmsch.teiath.gr/api/categories',
 *        dataType: "json",
 *        data: {
 *            "category_id" : "1",
 *            "name" : "ΣΧΟΛΙΚΕΣ ΜΟΝΑΔΕΣ"
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
 *
 * @param integer $category_id <b>Κωδικός</b>
 * <br>Ο Κωδικός της Κατηγορίας
 * <br>Η τιμή της παραμέτρου πρέπει να είναι integer : Αριθμητική
 * <br>Το πεδίο είναι υποχρεωτικό
 *
 *
 * @param string $name <b>Όνομα</b>
 * <br>Το Όνομα της Κατηγορίας
 * <br>Η τιμή της παραμέτρου πρέπει να είναι string : Αλφαριθμητική
 * <br>Το πεδίο είναι υποχρεωτικό
 *
 *
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <ul>
 *  <li>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής του αποτελέσματος της κλήσης</li>
 *  <li>integer : <b>category_id</b> : Ο Κωδικός της Κατηγορίας που ενημερώθηκε</li>
 * </ul>
 *
 *
 *
 * @throws Unauthorized {@see ExceptionMessages::Unauthorized}
 * <br>Έλεγχος αν ο χρήστης υπάρχει και έχει δικαιώματα να χρησιμοποιείσει τη μέθοδο
 *
 * @throws MissingCategoryIDParam {@see ExceptionMessages::MissingCategoryIDParam}
 * <br>Έλεγχος αν η παράμετρος <a href="#$category_id">$category_id</a> υπάρχει
 *
 * @throws MissingCategoryIDValue {@see ExceptionMessages::MissingCategoryIDValue}
 * <br>Έλεγχος αν η παράμετρος <a href="#$category_id">$category_id</a> έχει τιμή
 *
 * @throws InvalidCategoryIDType {@see ExceptionMessages::InvalidCategoryIDType}
 * <br>Έλεγχος αν η παράμετρος <a href="#$category_id">$category_id</a> είναι Αριθμητική
 *
 * @throws InvalidCategoryValue {@see ExceptionMessages::InvalidCategoryValue}
 * <br>Έλεγχος αν υπάρχει η αντίστοιχη Κατηγορία για να γίνει η ενημέρωση
 *
 * @throws MissingNameParam {@see ExceptionMessages::MissingNameParam}
 * <br>Έλεγχος αν η παράμετρος <a href="#$name">$name</a> υπάρχει
 *
 * @throws MissingNameValue {@see ExceptionMessages::MissingNameValue}
 * <br>Έλεγχος αν η παράμετρος <a href="#$name">$name</a> έχει τιμή
 *
 * @throws InvalidNameType {@see ExceptionMessages::InvalidNameType}
 * <br>Έλεγχος αν η παράμετρος <a href="#$name">$name</a> είναι Αλφαριθμητική
 *
 * @throws DuplicatedCategoryValue {@see ExceptionMessages::DuplicatedCategoryValue}
 * <br>Έλεγχος αν υπάρχει άλλη Κατηγορία με το Όνομα της Κατηγορίας που θα ενημερωθεί για να αποφεχθουν οι διπλοεγγραφές
 *
 */


function PutCategories($category_id, $name)
{
    global $db;

    $filters = array();
    $result = array();

    $result["method"] = __FUNCTION__;

    try
    {
        //==============================================================================================================
        //= Check if $connectivity_type_id exists
        //==============================================================================================================
        if ( $category_id === _MISSED_ )
            throw new Exception(ExceptionMessages::MissingCategoryIDParam, ExceptionCodes::MissingCategoryIDParam);
        else if ( Validator::IsNull($category_id) )
            throw new Exception(ExceptionMessages::MissingCategoryIDValue, ExceptionCodes::MissingCategoryIDValue);
        else if ( Validator::IsID($category_id) )
            $filters["category_id"] = "$category_id = " . $db->quote(Validator::ToID($category_id));
        else
            throw new Exception(ExceptionMessages::InvalidCategoryIDType." : ".$category_id, ExceptionCodes::InvalidCategoryIDType);

        $sql = "SELECT category_id, name FROM categories WHERE ".$filters["category_id"];
        echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() <> 1 )
        {
            throw new Exception(ExceptionMessages::InvalidCategoryValue." : ".$category_id, ExceptionCodes::InvalidCategoryValue);
        }

        //==============================================================================================================
        //= Check name for duplicates
        //==============================================================================================================
        if ( $name === _MISSED_ )
            throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
        else if ( Validator::IsNull($name) )
            throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);
        else if ( Validator::IsValue($name) )
        {
            $filters["name"] = "name = " . $db->quote(Validator::ToValue($name));
        }
        else
            throw new Exception(ExceptionMessages::InvalidNameType." : ".$name, ExceptionCodes::InvalidNameType);

        $sql = "SELECT category_id, name FROM categories WHERE ".$filters["name"]." AND NOT ".$filters["category_id"];
        echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ( $stmt->rowCount() > 0 )
        {
            throw new Exception(ExceptionMessages::DuplicatedCategoryValue." : ".$name, ExceptionCodes::DuplicatedCategoryValue);
        }

        //==============================================================================================================
        //= Update =====================================================================================================
        //==============================================================================================================

        $sqlWhere = " WHERE ". $filters["category_id"];

        unset($filters["category_id"]);

        $sql = "UPDATE categories SET " . implode(", ", $filters) .$sqlWhere;
        echo "<br><br>".$sql."<br><br>";

        if ( $db->query( $sql ) )
        {
            $result["category_id"] = $category_id;
        }

        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = ExceptionMessages::NoErrors;

    }
    catch (Exception $e)
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    }

    return $result;
}

/*

function PutCategories($name)
{
    global $db;
    global $app;
    global $Options;
    
    $filter = array();
    $result = array();

    $result["data"] = array();

    $controller = $app->environment();
    $controller = substr($controller["PATH_INFO"], 1);
    
    $result["function"] = $controller;
    $result["method"] = $app->request()->getMethod();

    try
    {
        if (! trim($name) )
            throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);
        else
            $filter[] = new DFC(CategoriesExt::FIELD_NAME, $name, DFC::EXACT);

        $oCategories = new CategoriesExt($db);

        $arrayCategories = $oCategories->findByFilter($db, $filter, true);

        if ( count( $arrayCategories ) > 0 ) 
        { 
            $oCategories = $arrayCategories[0];
        }
        
        $oWorkers->setRegistryNo($fRegistryNo);
        $oWorkers->setLastname($fLastname);
        $oWorkers->setFirstname($fFirstname);
        $oWorkers->setFathername($fFathername);
        $oWorkers->setSex($fSex);
        $oWorkers->setTaxNumber($fTaxNumber);
        $oWorkers->setWorkerSpecializationId($fWorkerSpecialization);

        if ($oWorkers->getWorkerId())
            $oWorkers->updateToDatabase ($db);
        else
            $oWorkers->insertIntoDatabase ($db);
        
        $result["worker_id"] = $oWorkers->getWorkerId();
                
        
        
        
        $result["count"] = count( $rows );

        foreach ($rows as $row)
        {
            $result["data"][] = array(
                "category_id" => $row->getCategoryId(), 
                "name" => $row->getName()
            );
        }

        $result["status"] = 200;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:"."success";
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 
    
    return $result;
}
*/
?>