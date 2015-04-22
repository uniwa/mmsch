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
 * @param mixed $municipality_community Δημοτική Ενότητα
 * <br>Η Δημοτική Ενότητα της Μονάδας (Λεξικό : {@see GetMunicipalityCommunities})
 * <br>Η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
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
 * @param string $creation_fek Φ.Ε.Κ.
 * <br>Το Φ.Ε.Κ. (Δημιουργίας) της Μονάδας
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
 * @throws MissingUnitNameValue {@see ExceptionMessages::MissingUnitNameValue}
 * @throws MissingCategoryValue {@see ExceptionMessages::MissingCategoryValue}
 * @throws InvalidCategoryValue {@see ExceptionMessages::InvalidCategoryValue}
 * @throws MissingStateValue {@see ExceptionMessages::MissingStateValue}
 * @throws InvalidStateValue {@see ExceptionMessages::InvalidStateValue}
 * @throws MissingSourceValue {@see ExceptionMessages::MissingSourceValue}
 * @throws InvalidSourceValue {@see ExceptionMessages::InvalidSourceValue}
 * @throws MissingUnitTypeValue {@see ExceptionMessages::MissingUnitTypeValue}
 * @throws InvalidUnitTypeValue {@see ExceptionMessages::InvalidUnitTypeValue}
 * @throws MissingUnitRegistryNoValue {@see ExceptionMessages::MissingUnitRegistryNoValue}
 * @throws MissingEducationLevelValue {@see ExceptionMessages::MissingEducationLevelValue}
 * @throws InvalidEducationLevelValue {@see ExceptionMessages::InvalidEducationLevelValue}
 * @throws InvalidRegionEduAdminValue {@see ExceptionMessages::InvalidRegionEduAdminValue}
 * @throws InvalidEduAdminValue {@see ExceptionMessages::InvalidEduAdminValue}
 * @throws InvalidImplementationEntityValue {@see ExceptionMessages::InvalidImplementationEntityValue}
 * @throws InvalidTransferAreaValue {@see ExceptionMessages::InvalidTransferAreaValue}
 * @throws InvalidMunicipalityValue {@see ExceptionMessages::InvalidMunicipalityValue}
 * @throws InvalidMunicipalityCommunityValue {@see ExceptionMessages::InvalidMunicipalityCommunityValue}
 * @throws InvalidPrefectureValue {@see ExceptionMessages::InvalidPrefectureValue}
 * @throws InvalidOperationShiftValue {@see ExceptionMessages::InvalidOperationShiftValue}
 * @throws InvalidLegalCharacterValue {@see ExceptionMessages::InvalidLegalCharacterValue}
 * @throws InvalidOrientationTypeValue {@see ExceptionMessages::InvalidOrientationTypeValue}
 * @throws InvalidSpecialTypeValue {@see ExceptionMessages::InvalidSpecialTypeValue}
 * @throws InvalidTaxOfficeValue {@see ExceptionMessages::InvalidTaxOfficeValue}
 * @throws InvalidUnitCreationFekType {@see ExceptionMessages::InvalidUnitCreationFekType}
 * 
 */

function PutUnits(  $mm_id, $registry_no, $source, $name, $special_name, $state, $region_edu_admin, 
                    $edu_admin, $implementation_entity, $transfer_area, $prefecture, $municipality, $municipality_community,
                    $education_level, $phone_number, $email, $fax_number, $street_address, $postal_code, 
                    $tax_number, $tax_office, $area_team_number, $category, $unit_type, $operation_shift, 
                    $legal_character, $orientation_type, $special_type, $levels_count, $groups_count, 
                    $students_count, $latitude, $longitude, $positioning, $creation_fek, $last_update, $last_sync, 
                    $comments ) {
    
    global $app, $entityManager, $db;
    $result = array();  
    
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;
    
    try {

        //$mm_id================================================================
        $fUnitMMId = CRUDUtils::checkIDParam('mm_id', $params, $mm_id, 'UnitMMID');

        //init entity for update row============================================
        $unit = CRUDUtils::findIDParam($fUnitMMId, 'Units', 'Unit');

    //$category=================================================================
    if ( Validator::IsExists('category') ){
        CRUDUtils::entitySetAssociation($unit, $category, 'Categories', 'category', 'Category', $params, 'category');
    } else if ( Validator::IsNull($unit->getCategory()) ){
        throw new Exception(ExceptionMessages::MissingCategoryValue, ExceptionCodes::MissingCategoryValue);
    } 

    //$source===================================================================
    if ( Validator::IsExists('source') ){
        CRUDUtils::entitySetAssociation($unit, $source, 'Sources', 'source', 'Source', $params, 'source');
    } else if ( Validator::IsNull($unit->getSource()) ){
        throw new Exception(ExceptionMessages::MissingSourceValue, ExceptionCodes::MissingSourceValue);
    } 

    //$unit_type================================================================
    if ( Validator::IsExists('unit_type') ){
        CRUDUtils::entitySetAssociation($unit, $unit_type, 'UnitTypes', 'unitType', 'UnitType', $params, 'unit_type');
    } else if ( Validator::IsNull($unit->getUnitType()) ){
        throw new Exception(ExceptionMessages::MissingUnitTypeValue, ExceptionCodes::MissingUnitTypeValue);
    } 

    //$state====================================================================
    if ( Validator::IsExists('state') ){
        CRUDUtils::entitySetAssociation($unit, $state, 'States', 'state', 'State', $params, 'state');
    } else if ( Validator::IsNull($unit->getState()) ){
        throw new Exception(ExceptionMessages::MissingStateValue, ExceptionCodes::MissingStateValue);
    } 

    //$education_level==========================================================
    if ( Validator::IsExists('education_level') ){
        CRUDUtils::entitySetAssociation($unit, $education_level, 'EducationLevels', 'educationLevel', 'EducationLevel', $params, 'education_level');
    } else if ( Validator::IsNull($unit->getEducationLevel()) ){
        throw new Exception(ExceptionMessages::MissingEducationLevelValue , ExceptionCodes::MissingEducationLevelValue);
    } 
    
    //$name=====================================================================
    if ( Validator::IsExists('name') ){
        CRUDUtils::EntitySetParam($unit, $name, 'UnitName', 'name', $params);
    } else if ( Validator::IsNull($unit->getName()) ){
        throw new Exception(ExceptionMessages::MissingUnitNameValue, ExceptionCodes::MissingUnitNameValue);
    } 
        
    //$registry_no==============================================================
    CRUDUtils::entitySetParam($unit, $registry_no, 'UnitRegistryNo', 'registry_no' , $params, false, true );
            
    //$region_edu_admin=========================================================      
    CRUDUtils::entitySetAssociation($unit, $region_edu_admin, 'RegionEduAdmins', 'regionEduAdmin', 'RegionEduAdmin', $params, 'region_edu_admin', false, true);

    //$edu_admin================================================================
    CRUDUtils::entitySetAssociation($unit, $edu_admin, 'EduAdmins', 'eduAdmin', 'EduAdmin', $params, 'edu_admin', false, true);

    //$transfer_area============================================================
    CRUDUtils::entitySetAssociation($unit, $transfer_area, 'TransferAreas', 'transferArea', 'TransferArea', $params, 'transfer_area', false, true);

    //$implementation_entity====================================================
    CRUDUtils::entitySetAssociation($unit, $implementation_entity, 'ImplementationEntities', 'implementationEntity', 'ImplementationEntity', $params, 'implementation_entity', false, true);
            
    //$prefecture===============================================================      
    CRUDUtils::entitySetAssociation($unit, $prefecture, 'Prefectures', 'prefecture', 'Prefecture', $params, 'prefecture', false, true);

    //$municipality=============================================================
    CRUDUtils::entitySetAssociation($unit, $municipality, 'Municipalities', 'municipality', 'Municipality', $params, 'municipality', false, true);
        
    //$municipality_communities=================================================
    CRUDUtils::entitySetAssociation($unit, $municipality_community, 'MunicipalityCommunities', 'municipalityCommunity', 'MunicipalityCommunity', $params, 'municipality_community', false, true);

    //$tax_office===============================================================
    CRUDUtils::entitySetAssociation($unit, $tax_office, 'TaxOffices', 'taxOffice', 'TaxOffice', $params, 'tax_office', false, true);
            
    //$operation_shift==========================================================
    CRUDUtils::entitySetAssociation($unit, $operation_shift, 'OperationShifts', 'operationShift', 'OperationShift', $params, 'operation_shift', false, true);

    //$legal_character==========================================================
    CRUDUtils::entitySetAssociation($unit, $legal_character, 'LegalCharacters', 'legalCharacter', 'LegalCharacter', $params, 'legal_character', false, true);

    //$orientation_type=========================================================
    CRUDUtils::entitySetAssociation($unit, $orientation_type, 'OrientationTypes', 'orientationType', 'OrientationType', $params, 'orientation_type', false, true);

    //$special_type=============================================================
    CRUDUtils::entitySetAssociation($unit, $special_type, 'SpecialTypes', 'specialType', 'SpecialType', $params, 'special_type', false, true);

    //$special_name=============================================================
    CRUDUtils::entitySetParam($unit, $special_name, 'UnitSpecialName', 'special_name' , $params, false, true );

    //$phoneNumber==============================================================
    CRUDUtils::entitySetParam($unit, $phone_number, 'UnitPhoneNumber', 'phoneNumber' , $params, false, true );

    //$email====================================================================
    CRUDUtils::entitySetParam($unit, $email, 'UnitEmail', 'email' , $params, false, true );

    //$fax_number===============================================================
    CRUDUtils::entitySetParam($unit, $fax_number, 'UnitFaxNumber', 'fax_number' , $params, false, true );

    //$street_address===========================================================
    CRUDUtils::entitySetParam($unit, $street_address, 'UnitStreetAddress', 'street_address' , $params, false, true );

    //$postal_code==============================================================
    CRUDUtils::entitySetParam($unit, $postal_code, 'UnitPostalCode', 'postal_code' , $params, false, true );

    //$tax_number===============================================================
    CRUDUtils::entitySetParam($unit, $tax_number, 'UnitTaxNumber', 'tax_number' , $params, false, true );

    //$area_team_number=========================================================
    CRUDUtils::entitySetParam($unit, $area_team_number, 'UnitAreaTeamNumber', 'area_team_number' , $params, false, true );

    //$levels_count=============================================================
    CRUDUtils::entitySetParam($unit, $levels_count, 'UnitLevelsCount', 'levels_count' , $params, false, true, true );

    //$groups_count=============================================================
    CRUDUtils::entitySetParam($unit, $groups_count, 'UnitGroupsCount', 'groups_count' , $params, false, true, true );

    //$students_count===========================================================
    CRUDUtils::entitySetParam($unit, $students_count, 'UnitStudentsCount', 'students_count' , $params, false, true, true );

    //$latitude=================================================================
    CRUDUtils::entitySetParam($unit, $latitude, 'UnitLatitude', 'latitude' , $params, false, true );

    //$longitude================================================================
    CRUDUtils::entitySetParam($unit, $longitude, 'UnitLongitude', 'longitude' , $params, false, true );

    //$positioning==============================================================
    CRUDUtils::entitySetParam($unit, $positioning, 'UnitPositioning', 'positioning' , $params, false, true );

    //$creation_fek=============================================================
    CRUDUtils::entitySetParam($unit, $creation_fek, 'UnitCreationFek', 'creation_fek' , $params, false, true ); 
        
    //$last_update==============================================================
    CRUDUtils::entitySetParam($unit, $last_update, 'UnitLastUpdate', 'last_update' , $params, false, true ); 

    //$last_sync================================================================
    CRUDUtils::entitySetParam($unit, $last_sync, 'UnitLastSync', 'last_sync' , $params, false, true ); 

    //$comments=================================================================
    CRUDUtils::entitySetParam($unit, $comments, 'UnitComments', 'comments' , $params, false, true );

//update to db==================================================================

        $entityManager->persist($unit);
        if ( $entityManager->flush($unit) )
        {

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

        $result["mm_id"] = $unit->getMmId();
                 
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrorsUpdateUnit;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}
?>