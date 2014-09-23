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
 * <br> https://mm.sch.gr/api/units <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT https://mm.sch.gr/api/units \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"mm_id" : "value", \
 *        "registry_no" : "value", \
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
 *                                  "source" : "value",
 *                                  "name" : "value", 
 *                                  "category" : "value",
 *                                  "state" : "value", ...... });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "https://mm.sch.gr/api/units");
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
 *      "source" => "value", 
 *      "name" => "value", 
 *      "category" => "value", 
 *      "state" => "value", ...... );
 * 
 * $curl = curl_init("https://mm.sch.gr/api/units");
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
 *        url: 'https://mm.sch.gr/api/units',
 *        dataType: "json",
 *        data: {
 *            "mm_id" : "value",
 *            "registry_no" : "value",
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
    $mm_id, $registry_no, $source, $name, $special_name, $state, $region_edu_admin, 
    $edu_admin, $implementation_entity, $transfer_area, $prefecture, $municipality, 
    $education_level, $phone_number, $email, $fax_number, $street_address, $postal_code, 
    $tax_number, $tax_office, $area_team_number, $category, $unit_type, $operation_shift, 
    $legal_character, $orientation_type, $special_type, $levels_count, $groups_count, 
    $students_count, $latitude, $longitude, $positioning, $last_update, $last_sync, 
    $comments, $fek 
)
{
    global $db, $entityManager;

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

        $unit = $entityManager->find('Units', $mm_id);
        if(!isset($unit))
            throw new Exception(ExceptionMessages::InvalidMMIdValue." : ".$mm_id, ExceptionCodes::InvalidMMIdValue);

        $transition = new Transitions();
        $transition->setFromState($unit->getState());

//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $category, 'Categories', 'category', 'Category');

//==============================================================================
            
        CRUDUtils::entitySetAssociation($unit, $source, 'Sources', 'source', 'Source');
            
//==============================================================================            

        CRUDUtils::entitySetAssociation($unit, $unit_type, 'UnitTypes', 'unitType', 'UnitType');
            
//==============================================================================

        CRUDUtils::entitySetParam($unit, $name, ExceptionMessages::InvalidNameType, 'name');
        
//==============================================================================
        
        CRUDUtils::entitySetParam($unit, $registry_no, ExceptionCodes::InvalidRegistryNoType, 'registryNo');
            
//==============================================================================
            
        CRUDUtils::entitySetAssociation($unit, $state, 'States', 'state', 'State');
        CRUDUtils::entitySetAssociation($transition, $state, 'States', 'toState', 'State');
            
//==============================================================================
            
        CRUDUtils::entitySetAssociation($unit, $education_level, 'EducationLevels', 'educationLevel', 'EducationLevel', false);

//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $region_edu_admin, 'RegionEduAdmins', 'regionEduAdmin', 'RegionEduAdmin', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $edu_admin, 'EduAdmins', 'eduAdmin', 'EduAdmin', false);
                
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $transfer_area, 'TransferAreas', 'transferArea', 'TransferArea', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $implementation_entity, 'ImplementationEntities', 'implementationEntity', 'ImplementationEntity', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $prefecture, 'Prefectures', 'prefecture', 'Prefecture', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $municipality, 'Municipalities', 'municipality', 'Municipality', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $tax_office, 'TaxOffices', 'taxOffice', 'TaxOffice', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $operation_shift, 'OperationShifts', 'operationShift', 'OperationShift', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $legal_character, 'LegalCharacters', 'legalCharacter', 'LegalCharacter', false);
            
//==============================================================================

        CRUDUtils::entitySetAssociation($unit, $orientation_type, 'OrientationTypes', 'orientationType', 'OrientationType', false);
            
//==============================================================================
                
        CRUDUtils::entitySetAssociation($unit, $special_type, 'SpecialTypes', 'specialType', 'SpecialType', false);

//==============================================================================

        CRUDUtils::entitySetParam($unit, $special_name, ExceptionCodes::InvalidSpecialNameType, 'specialName');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $phone_number, ExceptionCodes::InvalidPhoneNumberType, 'phoneNumber');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $email, ExceptionCodes::InvalidEmailType, 'email');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $fax_number, ExceptionCodes::InvalidFaxNumberType, 'fax_number');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $street_address, ExceptionCodes::InvalidStreetAddressType, 'street_address');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $postal_code, ExceptionCodes::InvalidPostalCodeType, 'postal_code');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $tax_number, ExceptionCodes::InvalidTaxNumberType, 'tax_number');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $area_team_number, ExceptionCodes::InvalidAreaTeamNumberType, 'area_team_number');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $levels_count, ExceptionCodes::InvalidLevelsCountType, 'levels_count');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $groups_count, ExceptionCodes::InvalidGroupsCountType, 'groups_count');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $students_count, ExceptionCodes::InvalidStudentsCountType, 'students_count');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $latitude, ExceptionCodes::InvalidLatitudeType, 'latitude');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $longitude, ExceptionCodes::InvalidLongitudeType, 'longitude');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $positioning, ExceptionCodes::InvalidPositioningType, 'positioning');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $last_update, ExceptionCodes::InvalidLastUpdateType, 'last_update');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $last_sync, ExceptionCodes::InvalidLastSyncType, 'last_sync');

//==============================================================================

        CRUDUtils::entitySetParam($unit, $comments, 'Invalid comments', 'comments');

//==============================================================================

        CRUDUtils::entitySetParam($transition, $fek, ExceptionCodes::InvalidFekType, 'fek');

//==============================================================================

        $entityManager->persist($unit);
        if ( $entityManager->flush($unit) )
        {
            $transition->setMm($unit);
            $entityManager->persist($transition);
            $entityManager->flush($transition);

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
                    "<pre></pre>"
                );
            }
        }
//==============================================================================
            
            $result["status"] = ExceptionCodes::NoErrors;;
            $result["message"] = ExceptionMessages::NoErrors;
            $result["mm_id"] = $unit->getMmId();
        }
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]: ".$e->getMessage();
    } 
   
    return $result;
}

?>