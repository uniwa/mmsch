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
 * Ενημέρωση : Μονάδας
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> http://mmsch.teiath.gr/api/units <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT http://mmsch.teiath.gr/api/units \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"mm_id" : "value", \
 *        "registry_no" : "value", \
 *        "gluc" : "value", \
 *        "source" : "value", \
 *        "name" : "value", \
 *        "category" : "value", \
 *        "state" : "value", ...... }'
 * </code>
 * <br>
 * 
 * 
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "mm_id" : "value",
 *                                  "registry_no" : "value",
 *                                  "gluc" : "value",
 *                                  "source" : "value",
 *                                  "name" : "value", 
 *                                  "category" : "value",
 *                                  "state" : "value", ...... });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "http://mmsch.teiath.gr/api/units");
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
 *      "mm_id" => "value", 
 *      "registry_no" => "value", 
 *      "gluc" => "value", 
 *      "source" => "value", 
 *      "name" => "value", 
 *      "category" => "value", 
 *      "state" => "value", ...... );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/units");
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
 *        url: 'http://mmsch.teiath.gr/api/units',
 *        dataType: "json",
 *        data: {
 *            "mm_id" : "value",
 *            "registry_no" : "value",
 *            "gluc" : "value",
 *            "source" : "value",
 *            "name" : "value",
 *            "category" : "value",
 *            "state" : "value", ...... 
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
 * @param integer $mm_id Κωδικός ΜΜ
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $registry_no Κωδικός ΥΠΕΠΘ
 * <br>Ο Κωδικός ΥΠΕΠΘ της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $gluc Κωδικός Gluc
 * <br>Ο Κωδικός Gluc της Μονάδας
 * 
 * @param mixed $source Πρωτογενής Πηγή
 * <br>Η Πρωτογενής Πηγή της Μονάδας (Λεξικό : {@see GetSources})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $name Ονομασία
 * <br>Το Όνομα της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $category Κατηγορία
 * <br>Η Κατηγορία της Μονάδας (Λεξικό : {@see GetCategories})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $state Κατάσταση
 * <br>Η Κατάσταση της Μονάδας (Λεξικό : {@see GetStates})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $education_level Βαθμίδα
 * <br>Το Επίπεδο Εκπαίδευσης της μονάδας (Λεξικό : {@see GetEducationLevels})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $special_name Ειδική Ονομασία 
 * <br>Το Προσωνύμιο της Μονάδας 
 * 
 * @param boolean $active Ενεργή/Ανενεργή
 * <br>Καθορίζει αν η Μονάδα είναι Ενεργή ή Ανενεργή
 * <br>Το πεδίο αυτό συνδυάζεται μαζί με το πεδίο <b>$suspended</b>
 * 
 * @param boolean $suspended Αναστολή
 * <br>Καθορίζει αν η Μονάδα είναι σε Αναστολή
 * <br>Το πεδίο αυτό συνδυάζεται μαζί με το πεδίο <b>$active</b>
 * 
 * @param mixed $region_edu_admin Περιφέρεια
 * <br>Η Περιφέρεια της Μονάδας (Λεξικό : {@see GetRegionEduAdmins})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $edu_admin Διεύθυνση Εκπαίδευσης
 * <br>Η Διεύθυνση Εκπαίδευσης της Μονάδας (Λεξικό : {@see GetEduAdmins})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $implementation_entity Φοράς Υλοποίησης
 * <br>Ο Φοράς Υλοποίησης της μονάδας (Λεξικό : {@see GetImplementationEntities})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $transfer_area Περιοχή Μετάθεσης
 * <br>Η Περιοχή Μετάθεσης της Μονάδας (Λεξικό : {@see GetTransferAreas})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $municipality Δήμος ΟΤΑ
 * <br>Ο Δήμος ΟΤΑ της Μονάδας (Λεξικό : {@see GetMunicipalities})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $prefecture Νομός
 * <br>Ο Νομός της Μονάδας (Λεξικό : {@see GetPrefectures})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $unit_type Τύπος Μονάδας
 * <br>Ο Τύπος της Μονάδας (Λεξικό : {@see GetUnitTypes})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $operation_shift Ωράριο Λειτουργίας 
 * <br>Το Ωράριο Λειτουργίας της Μονάδας (Λεξικό : {@see GetOperationShifts})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $legal_character Νομικός Χαρακτήρας
 * <br>Ο Νομικός Χαρακτήρας της Μονάδας (Λεξικό : {@see GetLegalCharacters})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $orientation_type Προσανατολισμός
 * <br>Ο Σχολικός Προσανατολισμός  της Μονάδας (Λεξικό : {@see GetOrientationTypes})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $special_type Ειδικός Χαρακτηρισμός
 * <br>Καθορίζει αν η Μονάδα έχει Ειδικό Χαρακτηρισμό (Λεξικό : {@see GetSpecialTypes})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param integer $postal_code Ταχυδρομικός Κώδικας
 * <br>Ο Ταχυδρομικός Κώδικας της Μονάδας
 * 
 * @param integer $area_team_number Ομάδα Σχολείων
 * <br>Η Ομάδα Σχολείων της Μονάδας (1η έως 40η)
 * 
 * @param string $email Ηλεκτρονική Αλληλογραφία
 * <br>Η Ηλεκτρονική Αλληλογραφία της Μονάδας
 * 
 * @param string $fax_number Αριθμός FAX 
 * <br>Ο Αριθμός Τηλεομοιοτυπίας (φαξ) της Μονάδας
 * 
 * @param integer $levels_count Πλήθος Τάξεων
 * <br>Το Πλήθος  των Τάξεων της Μονάδας
 *
 * @param string $street_address Οδός, Αριθμός  
 * <br>Η Διεύθυνση (Οδός και Αριθμός) της Μονάδας
 * 
 * @param string $phone_number Τηλέφωνο Επικοινωνίας
 * <br>Το Τηλέφωνο Επικοινωνίας της Μονάδας
 * 
 * @param integer $students_sum Πλήθος Μαθητών
 * <br>Το Πλήθος των Μαθητών της Μονάδας
 * 
 * @param integer $groups_count Πλήθος Τμημάτων
 * <br>Το Πλήθος των Τμημάτων της Μονάδας
 * 
 * @param datetime $last_update Ημερομηνία Τελευταίας Ενημέρωσης
 * <br>Η Ημερομηνία Τελευταίας Ενημέρωσης την Μονάδας
 * 
 * @param string $tax_number Αριθμός Φορολογικού Μητρώου
 * <br>Ο Αριθμός Φορολογικού Μητρώου της Μονάδας
 * 
 * @param mixed $tax_office Δ.Ο.Υ.
 * <br>Η Δ.Ο.Υ. της Μονάδας
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param string $comments Παρατηρήσεις / Σχόλια
 * <br>Παρατηρήσεις / Σχόλια σχετικά με τη Μονάδα
 * 
 * @param string $latitude Γεωγραφικό Πλάτος
 * <br>Το Γεωγραφικό Πλάτος της Μονάδας
 * 
 * @param string $longitude Γεωγραφικό Μήκος
 * <br>Το Γεωγραφικό Μήκος της Μονάδας
 * 
 * @param string $positioning Κτηριακή Θέση 
 * <br>Η Κτηριακή Θέση της Μονάδας
 * 
 * @param string $fek Φ.Ε.Κ.
 * <br>Το Φ.Ε.Κ. (Αλλαγής Κατάστασης) της Μονάδας
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της μονάδας</li>
 * </ul>
 * 
 * 
 * 
 * @throws MissingMMIdValue {@see ExceptionMessages::MissingMMIdValue}
 * @throws InvalidMMIdType {@see ExceptionMessages::InvalidMMIdType}
 * @throws InvalidMMIdValue {@see ExceptionMessages::InvalidMMIdValue}
 * @throws MissingNameValue {@see ExceptionMessages::MissingNameValue}
 * @throws MissingCategoryValue {@see ExceptionMessages::MissingCategoryValue}
 * @throws InvalidCategoryValue {@see ExceptionMessages::InvalidCategoryValue}
 * @throws MissingStateValue {@see ExceptionMessages::MissingStateValue}
 * @throws InvalidStateValue {@see ExceptionMessages::InvalidStateValue}
 * @throws MissingSourceValue {@see ExceptionMessages::MissingSourceValue}
 * @throws InvalidSourceValue {@see ExceptionMessages::InvalidSourceValue}
 * @throws MissingUnitTypeValue {@see ExceptionMessages::MissingUnitTypeValue}
 * @throws InvalidUnitTypeValue {@see ExceptionMessages::InvalidUnitTypeValue}
 * @throws MissingRegistryNoValue {@see ExceptionMessages::MissingRegistryNoValue}
 * @throws MissingEducationLevelValue {@see ExceptionMessages::MissingEducationLevelValue}
 * @throws InvalidEducationLevelValue {@see ExceptionMessages::InvalidEducationLevelValue}
 * @throws InvalidRegionEduAdminValue {@see ExceptionMessages::InvalidRegionEduAdminValue}
 * @throws InvalidEduAdminValue {@see ExceptionMessages::InvalidEduAdminValue}
 * @throws InvalidImplementationEntityValue {@see ExceptionMessages::InvalidImplementationEntityValue}
 * @throws InvalidTransferAreaValue {@see ExceptionMessages::InvalidTransferAreaValue}
 * @throws InvalidMunicipalityValue {@see ExceptionMessages::InvalidMunicipalityValue}
 * @throws InvalidPrefectureValue {@see ExceptionMessages::InvalidPrefectureValue}
 * @throws InvalidOperationShiftValue {@see ExceptionMessages::InvalidOperationShiftValue}
 * @throws InvalidLegalCharacterValue {@see ExceptionMessages::InvalidLegalCharacterValue}
 * @throws InvalidOrientationTypeValue {@see ExceptionMessages::InvalidOrientationTypeValue}
 * @throws InvalidSpecialTypeValue {@see ExceptionMessages::InvalidSpecialTypeValue}
 * @throws InvalidTaxOfficeValue {@see ExceptionMessages::InvalidTaxOfficeValue}
 * 
 */

function PutUnits( 
    $mm_id, $registry_no, $gluc, $source, $name, $special_name, $state, $region_edu_admin, 
    $edu_admin, $implementation_entity, $transfer_area, $prefecture, $municipality, 
    $education_level, $phone_number, $email, $fax_number, $street_address, $postal_code, 
    $tax_number, $tax_office, $area_team_number, $category, $unit_type, $operation_shift, 
    $legal_character, $orientation_type, $special_type, $levels_count, $groups_count, 
    $students_count, $latitude, $longitude, $positioning, $last_update, $last_sync, 
    $comments, $fek 
)
{
    global $db;
    global $Options;

    $result = array();  

    $result["method"] = __FUNCTION__;
    
    try
    {

//==============================================================================

        if ( $mm_id === _MISSED_ )
            throw new Exception(ExceptionMessages::MissingMMIdParam, ExceptionCodes::MissingMMIdParam);
        else if ( Validator::IsNull($mm_id) )
            throw new Exception(ExceptionMessages::MissingMMIdValue, ExceptionCodes::MissingMMIdValue);
        else if ( Validator::IsID($mm_id) )
            $mm_id = Validator::ToID($mm_id);
        else
            throw new Exception(ExceptionMessages::InvalidMMIdType." : ".$mm_id, ExceptionCodes::InvalidMMIdType);

        
        $sql = "SELECT "
             . "mm_id, registry_no, name, category_id, source_id, unit_type_id, state_id "
             . "FROM units WHERE mm_id = ".$mm_id;
        
        //echo "<br><br>".$sql."<br><br>";
        
        $stmt = $db->query( $sql );        
        $db_row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ( !$db_row["mm_id"] )
        {
            throw new Exception(ExceptionMessages::InvalidMMIdValue." : ".$mm_id, ExceptionCodes::InvalidMMIdValue);
        }
        else 
        {

//==============================================================================

            if ( $category === _MISSED_ )
            {
                if (!$db_row["category_id"])
                    throw new Exception(ExceptionMessages::MissingCategoryParam, ExceptionCodes::MissingCategoryParam);
                else
                {
                    $category = $db_row["category_id"];
                    $sqlWhere = null;
                }
            }
            else if ( Validator::IsNull($category) )
                throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
            else if ( Validator::IsID($category) )
                $sqlWhere = "category_id = ". Validator::ToID($category);
            else if ( Validator::IsValue($category) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($category) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidCategoryType." : ".$category, ExceptionCodes::InvalidCategoryType);

            if ($sqlWhere)
            {
                $sql = "SELECT category_id FROM categories WHERE ".$sqlWhere;
                
                $stmt = $db->query( $sql );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidCategoryValue." : ".$category, ExceptionCodes::InvalidCategoryValue);
                else 
                {
                    $category = $rows["category_id"];
                    $filters[] = "category_id = ".$category;
                }
            }

//==============================================================================
            
            if ( $source === _MISSED_ ) 
            {
                if ( !$db_row["source_id"] )
                    throw new Exception(ExceptionMessages::MissingSourceParam, ExceptionCodes::MissingSourceParam);
                else
                {
                    $source = $db_row["source_id"];
                    $sqlWhere = null;
                }
            }
            else if ( Validator::IsNull($source) )
                throw new Exception(ExceptionMessages::MissingSourceValue, ExceptionCodes::MissingSourceValue);
            else if ( Validator::IsID($source) )
                $sqlWhere = "source_id = ". Validator::ToID($source);
            else if ( Validator::IsValue($source) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($source) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidSourceType." : ".$source, ExceptionCodes::InvalidSourceType);

            if ($sqlWhere)
            {
                $sql = "SELECT source_id FROM sources WHERE ".$sqlWhere;
                
                $stmt = $db->query( $sql );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidSourceValue." : ".$source, ExceptionCodes::InvalidSourceValue);
                else 
                {
                    $source = $rows["source_id"];
                    $filters[] = "source_id = ".$source;
                }
            }
            
//==============================================================================            

            if ( $unit_type === _MISSED_ )
            {
                if ( !$db_row["unit_type_id"] )
                    throw new Exception(ExceptionMessages::MissingUnitTypeParam, ExceptionCodes::MissingUnitTypeParam);
                else
                {
                    $unit_type = $db_row["unit_type_id"];
                    $sqlWhere = null;
                }
            }
            else if ( Validator::IsNull($unit_type) )
                throw new Exception(ExceptionMessages::MissingUnitTypeValue, ExceptionCodes::MissingUnitTypeValue);
            else if ( Validator::IsID($unit_type) )
                $sqlWhere = "unit_type_id = ". Validator::ToID($unit_type);
            else if ( Validator::IsValue($unit_type) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($unit_type) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidUnitTypeType." : ".$unit_type, ExceptionCodes::InvalidUnitTypeType);

            if ($sqlWhere)
            {
                $sql = "SELECT unit_type_id FROM unit_types WHERE ".$sqlWhere;
                
                $stmt = $db->query( $sql );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidUnitTypeValue." : ".$unit_type, ExceptionCodes::InvalidUnitTypeValue);
                else 
                {
                    $unit_type = $rows["unit_type_id"];
                    $filters[] = "unit_type_id = ".$unit_type;
                }
            }
            
//==============================================================================

            if ( $name === _MISSED_ )
            {
                if ( !$db_row["name"] )
                    throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
                else
                {
                    $name = $db_row["name"];
                    $sqlWhere = null;
                }
            }
            else if ( Validator::IsNull($name) )
                throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);
            else if ( Validator::IsValue($name) )
            {
                $name = Validator::ToValue($name);
                $filters[] = "name = '". mysql_escape_string( $name ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidNameType." : ".$name, ExceptionCodes::InvalidNameType);
        
//==============================================================================
        
            if ( ($category == 3) && ($source == 1) && in_array($unit_type, array(12, 13)) )
            {
                $registry_no = null;
                $filters[] = "registry_no = null";
            }
            else
            {
                if ( $registry_no === _MISSED_ )
                {
                    if ( !$db_row["registry_no"] )
                        throw new Exception(ExceptionMessages::MissingRegistryNoParam, ExceptionCodes::MissingRegistryNoParam);
                    else
                        $registry_no = $db_row["registry_no"];
                }
                else if ( Validator::IsNull($registry_no) )
                        throw new Exception(ExceptionMessages::MissingRegistryNoValue, ExceptionCodes::MissingRegistryNoValue);
                else if ( Validator::IsValue($registry_no) )
                {
                    $registry_no = Validator::ToValue($registry_no);
                    $filters[] = "registry_no = '". mysql_escape_string( $registry_no ) ."'";
                }
                else
                    throw new Exception(ExceptionMessages::InvalidRegistryNoType." : ".$registry_no, ExceptionCodes::InvalidRegistryNoType);
            }
            
//==============================================================================
            
            if ( $state === _MISSED_ )
            {
                if ( !$db_row["state_id"] )
                    throw new Exception(ExceptionMessages::MissingStateParam, ExceptionCodes::MissingStateParam);
                else
                {
                    $state = $db_row["state_id"];
                    $sqlWhere = null;
                }                
            }
            else if ( Validator::IsNull($state) )
                throw new Exception(ExceptionMessages::MissingStateValue, ExceptionCodes::MissingStateValue);
            else if ( Validator::IsID($state) )
                $sqlWhere = "state_id = ". Validator::ToID($state);
            else if ( Validator::IsValue($state) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($state) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidStateType." : ".$state, ExceptionCodes::InvalidStateType);

            if ($sqlWhere)
            {
                $sql = "SELECT state_id FROM states WHERE ".$sqlWhere;
                
                $stmt = $db->query( $sql );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidStateValue." : ".$state, ExceptionCodes::InvalidStateValue);
                else 
                {
                    $state = $rows["state_id"];
                    $filters[] = "state_id = ".$state;
                    $transitions_filters[] = "to_state_id = ".$state;
                }
            }
            
//==============================================================================
            
            if ( $education_level === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingEducationLevelParam, ExceptionCodes::MissingEducationLevelParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($education_level) )
                //throw new Exception(ExceptionMessages::MissingEducationLevelValue, ExceptionCodes::MissingEducationLevelValue);
                $sqlWhere = null;
            else if ( Validator::IsID($education_level) )
                $sqlWhere = "education_level_id = ". Validator::ToID($education_level);
            else if ( Validator::IsValue($education_level) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($education_level) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidEducationLevelType." : ".$education_level, ExceptionCodes::InvalidEducationLevelType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT education_level_id FROM education_levels WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidEducationLevelValue." : ".$education_level, ExceptionCodes::InvalidEducationLevelValue);
                else 
                {
                    $education_level = $rows["education_level_id"];
                    $filters[] = "education_level_id = ".$education_level;
                }
            }


//==============================================================================

            if ( $region_edu_admin === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingRegionEduAdminParam, ExceptionCodes::MissingRegionEduAdminParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($region_edu_admin) )
                //throw new Exception(ExceptionMessages::MissingRegionEduAdminValue, ExceptionCodes::MissingRegionEduAdminValue);
                $sqlWhere = null;
            else if ( Validator::IsID($region_edu_admin) )
                $sqlWhere = "region_edu_admin_id = ". Validator::ToID($region_edu_admin);
            else if ( Validator::IsValue($region_edu_admin) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($region_edu_admin) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidRegionEduAdminType." : ".$region_edu_admin, ExceptionCodes::InvalidRegionEduAdminType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT region_edu_admin_id FROM region_edu_admins WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidRegionEduAdminValue." : ".$region_edu_admin, ExceptionCodes::InvalidRegionEduAdminValue);
                else 
                {
                    $region_edu_admin = $rows["region_edu_admin_id"];
                    $filters[] = "region_edu_admin_id = ".$region_edu_admin;
                }
            }
            
//==============================================================================

            if ( $edu_admin === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingEduAdminParam, ExceptionCodes::MissingEduAdminParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($edu_admin) )
                //throw new Exception(ExceptionMessages::MissingEduAdminValue, ExceptionCodes::MissingEduAdminValue);
                $sqlWhere = null;
            else if ( Validator::IsID($edu_admin) )
                $sqlWhere = "edu_admin_id = ". Validator::ToID($edu_admin);
            else if ( Validator::IsValue($edu_admin) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($edu_admin) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidEduAdminType." : ".$edu_admin, ExceptionCodes::InvalidEduAdminType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT edu_admin_id FROM edu_admins WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidEduAdminValue." : ".$edu_admin, ExceptionCodes::InvalidEduAdminValue);
                else 
                {
                    $edu_admin = $rows["edu_admin_id"];
                    $filters[] = "edu_admin_id = ".$edu_admin;
                }            
            }
                
//==============================================================================

            if ( $transfer_area === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingTransferAreaParam, ExceptionCodes::MissingTransferAreaParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($transfer_area) )
                //throw new Exception(ExceptionMessages::MissingTransferAreaValue, ExceptionCodes::MissingTransferAreaValue);
                $sqlWhere = null;
            else if ( Validator::IsID($transfer_area) )
                $sqlWhere = "edu_admin_id = ". Validator::ToID($transfer_area);
            else if ( Validator::IsValue($transfer_area) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($transfer_area) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidTransferAreaType." : ".$transfer_area, ExceptionCodes::InvalidTransferAreaType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT transfer_area_id FROM transfer_areas WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidTransferAreaValue." : ".$transfer_area, ExceptionCodes::InvalidTransferAreaValue);
                else 
                {
                    $transfer_area = $rows["transfer_area_id"];
                    $filters[] = "transfer_area_id = ".$transfer_area;
                }            
            }
            
//==============================================================================

            if ( $implementation_entity === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingTransferAreaParam, ExceptionCodes::MissingTransferAreaParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($implementation_entity) )
                //throw new Exception(ExceptionMessages::MissingTransferAreaValue, ExceptionCodes::MissingTransferAreaValue);
                $sqlWhere = null;
            else if ( Validator::IsID($implementation_entity) )
                $sqlWhere = "implementation_entity_id = ". Validator::ToID($implementation_entity);
            else if ( Validator::IsValue($implementation_entity) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($implementation_entity) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidImplementationEntityType." : ".$implementation_entity, ExceptionCodes::InvalidImplementationEntityType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT implementation_entity_id FROM implementation_entities WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidImplementationEntityValue." : ".$implementation_entity, ExceptionCodes::InvalidImplementationEntityValue);
                else 
                {
                    $implementation_entity = $rows["implementation_entity_id"];
                    $filters[] = "implementation_entity_id = ".$implementation_entity;
                }            
            }
            
//==============================================================================

            if ( $prefecture === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingPrefectureParam, ExceptionCodes::MissingPrefectureParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($prefecture) )
                //throw new Exception(ExceptionMessages::MissingPrefectureValue, ExceptionCodes::MissingPrefectureValue);
                $sqlWhere = null;
            else if ( Validator::IsID($prefecture) )
                $sqlWhere = "prefecture_id = ". Validator::ToID($prefecture);
            else if ( Validator::IsValue($prefecture) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($prefecture) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidPrefectureType." : ".$prefecture, ExceptionCodes::InvalidPrefectureType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT prefecture_id FROM prefectures WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidPrefectureValue." : ".$prefecture, ExceptionCodes::InvalidPrefectureValue);
                else 
                {
                    $prefecture = $rows["prefecture_id"];
                    $filters[] = "prefecture_id = ".$prefecture;
                }            
            }
            
//==============================================================================

            if ( $municipality === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingMunicipalityParam, ExceptionCodes::MissingMunicipalityParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($municipality) )
                //throw new Exception(ExceptionMessages::MissingMunicipalityValue, ExceptionCodes::MissingMunicipalityValue);
                $sqlWhere = null;
            else if ( Validator::IsID($municipality) )
                $sqlWhere = "municipality_id = ". Validator::ToID($municipality);
            else if ( Validator::IsValue($municipality) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($municipality) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidMunicipalityType." : ".$municipality, ExceptionCodes::InvalidMunicipalityType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT municipality_id FROM municipalities WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidMunicipalityValue." : ".$municipality, ExceptionCodes::InvalidMunicipalityValue);
                else 
                {
                    $municipality = $rows["municipality_id"];
                    $filters[] = "municipality_id = ".$municipality;
                }            
            }
            
//==============================================================================

            if ( $tax_office === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingTaxOfficeParam, ExceptionCodes::MissingTaxOfficeParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($tax_office) )
                //throw new Exception(ExceptionMessages::MissingTaxOfficeValue, ExceptionCodes::MissingTaxOfficeValue);
                $sqlWhere = null;
            else if ( Validator::IsID($tax_office) )
                $sqlWhere = "tax_office_id = ". Validator::ToID($tax_office);
            else if ( Validator::IsValue($tax_office) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($tax_office) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidTaxOfficeType." : ".$tax_office, ExceptionCodes::InvalidTaxOfficeType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT tax_office_id FROM tax_offices WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidTaxOfficeValue." : ".$tax_office, ExceptionCodes::InvalidTaxOfficeValue);
                else 
                {
                    $tax_office = $rows["tax_office_id"];
                    $filters[] = "tax_office_id = ".$tax_office;
                }
            }
            
//==============================================================================

            if ( $operation_shift === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingOperationShiftParam, ExceptionCodes::MissingOperationShiftParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($operation_shift) )
                //throw new Exception(ExceptionMessages::MissingOperationShiftValue, ExceptionCodes::MissingOperationShiftValue);
                $sqlWhere = null;
            else if ( Validator::IsID($operation_shift) )
                $sqlWhere = "operation_shift_id = ". Validator::ToID($operation_shift);
            else if ( Validator::IsValue($operation_shift) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($operation_shift) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidOperationShiftType." : ".$operation_shift, ExceptionCodes::InvalidOperationShiftType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT operation_shift_id FROM operation_shifts WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidOperationShiftValue." : ".$operation_shift, ExceptionCodes::InvalidOperationShiftValue);
                else 
                {
                    $operation_shift = $rows["operation_shift_id"];
                    $filters[] = "operation_shift_id = ".$operation_shift;
                }            
            }
            
//==============================================================================

            if ( $legal_character === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingLegalCharacterParam, ExceptionCodes::MissingLegalCharacterParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($legal_character) )
                //throw new Exception(ExceptionMessages::MissingLegalCharacterValue, ExceptionCodes::MissingLegalCharacterValue);
                $sqlWhere = null;
            else if ( Validator::IsID($legal_character) )
                $sqlWhere = "legal_character_id = ". Validator::ToID($legal_character);
            else if ( Validator::IsValue($legal_character) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($legal_character) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidLegalCharacterType." : ".$legal_character, ExceptionCodes::InvalidLegalCharacterType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT legal_character_id FROM legal_characters WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidLegalCharacterValue." : ".$legal_character, ExceptionCodes::InvalidLegalCharacterValue);
                else 
                {
                    $legal_character = $rows["legal_character_id"];
                    $filters[] = "legal_character_id = ".$legal_character;
                }            
            }
            
//==============================================================================

            if ( $orientation_type === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingOrientationTypeParam, ExceptionCodes::MissingOrientationTypeParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($orientation_type) )
                //throw new Exception(ExceptionMessages::MissingOrientationTypeValue, ExceptionCodes::MissingOrientationTypeValue);
                $sqlWhere = null;
            else if ( Validator::IsID($orientation_type) )
                $sqlWhere = "orientation_type_id = ". Validator::ToID($orientation_type);
            else if ( Validator::IsValue($orientation_type) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($orientation_type) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidOrientationTypeType." : ".$orientation_type, ExceptionCodes::InvalidOrientationTypeType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT orientation_type_id FROM orientation_types WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidOrientationTypeValue." : ".$orientation_type, ExceptionCodes::InvalidOrientationTypeValue);
                else 
                {
                    $orientation_type = $rows["orientation_type_id"];
                    $filters[] = "orientation_type_id = ".$orientation_type;
                }            
            }
            
//==============================================================================
                
            if ( $special_type === _MISSED_ )
                //throw new Exception(ExceptionMessages::MissingSpecialTypeParam, ExceptionCodes::MissingSpecialTypeParam);
                $sqlWhere = null;
            else if ( Validator::IsNull($special_type) )
                //throw new Exception(ExceptionMessages::MissingSpecialTypeValue, ExceptionCodes::MissingSpecialTypeValue);
                $sqlWhere = null;
            else if ( Validator::IsID($special_type) )
                $sqlWhere = "special_type_id = ". Validator::ToID($special_type);
            else if ( Validator::IsValue($special_type) )
                $sqlWhere = "name = '". mysql_escape_string( Validator::ToValue($special_type) ) ."'";
            else
                throw new Exception(ExceptionMessages::InvalidSpecialTypeType." : ".$special_type, ExceptionCodes::InvalidSpecialTypeType);

            if ($sqlWhere)
            {
                $stmt = $db->query( "SELECT special_type_id FROM special_types WHERE ".$sqlWhere );
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                    throw new Exception(ExceptionMessages::InvalidSpecialTypeValue." : ".$special_type, ExceptionCodes::InvalidSpecialTypeValue);
                else 
                {
                    $special_type = $rows["special_type_id"];
                    $filters[] = "special_type_id = ".$special_type;
                }            
            }    
                
//==============================================================================

            if ( $gluc === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($gluc) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($gluc) )
            {
                $gluc = Validator::ToValue($gluc);
                $filters[] = "gluc = '". mysql_escape_string( $gluc ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidGlucType." : ".$gluc, ExceptionCodes::InvalidGlucType);

//==============================================================================

            if ( $special_name === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($special_name) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($special_name) )
            {
                $special_name = Validator::ToValue($special_name);
                $filters[] = "special_name = '". mysql_escape_string( $special_name ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidSpecialNameType." : ".$special_name, ExceptionCodes::InvalidSpecialNameType);

//==============================================================================

            if ( $phone_number === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($phone_number) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($phone_number) )
            {
                $phone_number = Validator::ToValue($phone_number);
                $filters[] = "phone_number = '". mysql_escape_string( $phone_number ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidPhoneNumberType." : ".$phone_number, ExceptionCodes::InvalidPhoneNumberType);

//==============================================================================

            if ( $email === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($email) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($email) )
            {
                $email = Validator::ToValue($email);
                $filters[] = "email = '". mysql_escape_string( $email ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidEmailType." : ".$email, ExceptionCodes::InvalidEmailType);

//==============================================================================

            if ( $fax_number === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($fax_number) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($fax_number) )
            {
                $fax_number = Validator::ToValue($fax_number);
                $filters[] = "fax_number = '". mysql_escape_string( $fax_number ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidFaxNumberType." : ".$fax_number, ExceptionCodes::InvalidFaxNumberType);

//==============================================================================

            if ( $street_address === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($street_address) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($street_address) )
            {
                $street_address = Validator::ToValue($street_address);
                $filters[] = "street_address = '". mysql_escape_string( $street_address ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidStreetAddressType." : ".$street_address, ExceptionCodes::InvalidStreetAddressType);

//==============================================================================

            if ( $postal_code === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($postal_code) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($postal_code) )
            {
                $postal_code = Validator::ToValue($postal_code);
                $filters[] = "postal_code = '". mysql_escape_string( $postal_code ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidPostalCodeType." : ".$postal_code, ExceptionCodes::InvalidPostalCodeType);

//==============================================================================

            if ( $tax_number === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($tax_number) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($tax_number) )
            {
                $tax_number = Validator::ToValue($tax_number);
                $filters[] = "tax_number = '". mysql_escape_string( $tax_number ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidTaxNumberType." : ".$tax_number, ExceptionCodes::InvalidTaxNumberType);

//==============================================================================

            if ( $area_team_number === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($area_team_number) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsNumeric($area_team_number) )
            {
                $area_team_number = Validator::ToNumeric($area_team_number);
                $filters[] = "area_team_number = '". mysql_escape_string( $area_team_number ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidAreaTeamNumberType." : ".$area_team_number, ExceptionCodes::InvalidAreaTeamNumberType);

//==============================================================================

            if ( $levels_count === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($levels_count) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsNumeric($levels_count) )
            {
                $levels_count = Validator::ToNumeric($levels_count);
                $filters[] = "levels_count = '". mysql_escape_string( $levels_count ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidLevelsCountType." : ".$levels_count, ExceptionCodes::InvalidLevelsCountType);

//==============================================================================

            if ( $groups_count === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($groups_count) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsNumeric($groups_count) )
            {
                $groups_count = Validator::ToNumeric($groups_count);
                $filters[] = "groups_count = '". mysql_escape_string( $groups_count ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidGroupsCountType." : ".$groups_count, ExceptionCodes::InvalidGroupsCountType);

//==============================================================================

            if ( $students_count === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($students_count) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsNumeric($students_count) )
            {
                $students_count = Validator::ToNumeric($students_count);
                $filters[] = "students_count = '". mysql_escape_string( $students_count ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidStudentsSumType." : ".$students_count, ExceptionCodes::InvalidStudentsSumType);

//==============================================================================

            if ( $latitude === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($latitude) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($latitude) )
            {
                $latitude = Validator::ToValue($latitude);
                $filters[] = "latitude = '". mysql_escape_string( $latitude ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidLatitudeType." : ".$latitude, ExceptionCodes::InvalidLatitudeType);

//==============================================================================

            if ( $longitude === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($longitude) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($longitude) )
            {
                $longitude = Validator::ToValue($longitude);
                $filters[] = "longitude = '". mysql_escape_string( $longitude ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidLongitudeType." : ".$longitude, ExceptionCodes::InvalidLongitudeType);

//==============================================================================

            if ( $positioning === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($positioning) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($positioning) )
            {
                $positioning = Validator::ToValue($positioning);
                $filters[] = "positioning = '". mysql_escape_string( $positioning ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidPositioningType." : ".$positioning, ExceptionCodes::InvalidPositioningType);

//==============================================================================

            if ( $last_update === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($last_update) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($last_update) )
            {
                $last_update = Validator::ToValue($last_update);
                $filters[] = "last_update = '". mysql_escape_string( $last_update ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidLastUpdateType." : ".$last_update, ExceptionCodes::InvalidLastUpdateType);

//==============================================================================

            if ( $last_sync === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($last_sync) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($last_sync) )
            {
                $last_sync = Validator::ToValue($last_sync);
                $filters[] = "last_sync = '". mysql_escape_string( $last_sync ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidLastSyncType." : ".$last_sync, ExceptionCodes::InvalidLastSyncType);

//==============================================================================

            if ( $comments === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($comments) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else
            {
                $filters[] = "comments = '". mysql_escape_string( $comments ) ."'";
            }

//==============================================================================

            if ( $fek === _MISSED_ )
            { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
            else if ( Validator::IsNull($fek) )
            { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
            else if ( Validator::IsValue($fek) )
            {
                $fek = Validator::ToValue($fek);
                $transitions_filters[] = "fek = '". mysql_escape_string( $fek ) ."'";
            }
            else
                throw new Exception(ExceptionMessages::InvalidFekType." : ".$fek, ExceptionCodes::InvalidFekType);

//==============================================================================
                        
            $sqlUpdate = "UPDATE units SET ";
            $sqlFields = implode(", ", $filters)." ";
            $sqlWhere  = "WHERE mm_id = " . $mm_id;
            
            $sql = $sqlUpdate . $sqlFields . $sqlWhere;
            $unitSQL = $sql;

            //echo "<br><br>".$sql."<br><br>";
            
            if ( $db->query( $sql ) )
            {
                
                $result["mm_id"] = $mm_id;
                
//= Insert Transmition =========================================================
                
                if ($state <> $db_row["state_id"] )
                {
                    $transitions_filters[] = "mm_id = '". mysql_escape_string( $mm_id ) ."'";
                    
                    if ($db_row["state_id"])
                        $transitions_filters[] = "from_state_id = ".$db_row["state_id"];

                    $sqlUpdate = "INSERT INTO transitions SET ";
                    $sqlFields = implode(", ", $transitions_filters)." ";

                    $sql = $sqlUpdate . $sqlFields;

                    //echo "<br><br>".$sql."<br><br>";
                    $db->query( $sql );
                } 
                
//==============================================================================
                
                $mailSubject = "Ενημέρωση Μονάδας";

                $sql = "SELECT system_mail_rule_id, title, mailto, mailcc, mailfrom, subject "
                    . "FROM system_mail_rules WHERE title = '".mysql_escape_string($mailSubject)."'";
                $stmt = $db->query( $sql );  
                $rows = $stmt->fetch(PDO::FETCH_ASSOC);

                if ( ( $stmt->rowCount() > 0 ) && $rows["mailto"] )
                {
                    SendMail(
                        $rows["mailto"], 
                        $rows["mailcc"], 
                        $rows["mailfrom"], 
                        $rows["subject"]." με κωδικό ΜΜ : ".$mm_id, 
                        "<pre>".$unitSQL."</pre>"
                    );
                }
                
                SendMail('khitas@teiath.gr', 'Ενημέρωση Μονάδας', 'Ενημέρωση Μονάδας με κωδικό ΜΜ : '.$mm_id);
            }
            
            $result["status"] = ExceptionCodes::NoErrors;;
            $result["message"] = ExceptionMessages::NoErrors;
        }
    } 
    catch (PDOException $e)
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]: ".$e->getMessage().", SQL:".$sql;
    }
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]: ".$e->getMessage();
    } 
   
    return $result;
}

?>