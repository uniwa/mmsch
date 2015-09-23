<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **Εύρεση Κενών Τιμών σε Μονάδες**
 * 
 * Η συνάρτηση αυτή επιστρέφει τις Μονάδες με κενές τιμές σε "υποχρεωτικά" πεδία των στοιχείων τους, σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **check_required_values** :
 * <br>https://mm.sch.gr/api/check_required_values 
 * 
 * 
 * ***Πίνακας Παραμέτρων***
 * * Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους μπορεί να γίνει η κλήση της συνάρτησης.
 * * Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί.
 * * Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά.
 * * Οι παράμετροι οι οποίοι έχουν το χαρακτηριστικό (Συνδυάζεται με την παράμετρο searchtype) σημαίνει ότι η συγκεκριμένη παράμετρος συνδυάζεται με την παράμετρο searchtype.
 * * Οι παράμετροι μπορούν να πάρουν τιμή "NULL" για να αναζητήσουν τις κενές εγγραφές στα αντίστοιχα πεδία
 *
 * ***Πίνακας Αποτελεσμάτων***
 * * Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση.
 * * Όλες οι μεταβλητές επιστρέφονται σε <a href="#model">JSON objects</a>.
 * * Η μεταβλητή <a href="#data">data</a> είναι ο πίνακας με τα δεδομένα.
 * * Η μεταβλητή status καθορίζει αν η εκτέλεση της συνάρτησης ήταν επιτυχής (κωδικός 200) ή προέκυψε κάποιο σφάλμα.
 * 
 * ***Πίνακας Σφαλμάτων***
 * * Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που μπορεί να προκύψουν κατά την κλήση της συνάρτησης.
 * * Οι περιγραφές των Σφαλμάτων καθώς και οι Κωδικοί τους είναι διαθέσιμες μέσω του πίνακα Μηνύματα Σφαλμάτων ({@see ExceptionMessages}) και Κωδικοί Σφαλμάτων ({@see ExceptionCodes}) αντίστοιχα.
 * 
 * ***Παραδείγματα Κλήσης***
 * * Υπάρχουν διαθέσιμα παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους ({@see ApiRequestExamples}).
 * 
 * ***Μηνύματα Authentication/Authorization***
 * * Υπάρχουν αναλυτικές πληροφορίες για τα μηνύματα Authentication/Authorization ({@see AuthMessages}).
 * 
 * ***Δεδομένα Επιστροφής***
 * <br><a id="model"></a>Παρακάτω εμφανίζονται τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {
 *  "results": [{}],
 *  "controller": "CheckRequiredValues",
 *  "function": "check_required_values",
 *  "method": "GET",
 *  "total": ``,
 *  "status": 200,
 *  "message": "[GET][check_required_values]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"data": [{
 *  "mm_id":``,
 *  "registry_no":``,
 *  "name":``
 *  }]
 * }
 * </code> 
 * 
 * 
 *   ***INFOS : Δέχεται τις παρακάτω παραμέτρους:***
 *
 *   **1) Επιλογή διαδικασίας (Η οποία μπορεί να δεχτεί αριθμητικές τιμές από το 1-10 και κάθε μία αντιστοιχεί σε συγκεκριμένο ερώτημα στην β.δ.)**
 *   <br>"selection" -><br>1 : null region_edu_admin (χωρίς περιφέρεια)
 *                   <br>2 : null edu_admin (χωρίς διεύθυνση εκπαίδευσης)
 *                   <br>3 : null transfer_area (χωρίς περιοχή μετάθεσης)
 *                   <br>4 : null prefecture (χωρίς νομό)
 *                   <br>5 : null municipality (χωρίς δήμο)
 *                   <br>6 : null operation_shift (χωρίς ωράριο λειτουργίας)
 *                   <br>7 : null legal_character (χωρίς νομικό χαρακτήρα)
 *                   <br>8 : null implementation_entity (χωρίς φορέα υλοποίησης)
 *                   <br>9 : null unit_type (χωρίς τύπο μονάδας)
 *                   <br>10 : null category (χωρίς κατηγορία)
 *
 *   **2) Φίλτρα αναζήτησης (μπορούν προστεθούν επιπλέον φίλτρα αναζήτησης σε κάθε επιλογή διαδικασίας για πιο αναλυτικά αποτελέσματα)**
 *   <br>"category" -> Κατηγορία Μονάδων
 *   <br>"unit_type" ->  Τύποι Μονάδων
 *   <br>"state" -> Λειτουργική Κατάσταση Μονάδων
 *   <br>"source" -> Πρωτογενής Πηγή Μονάδων
 * 
 *   **3) Τύπος εξαγωγής δεδομένων**
 *   <br>"export" -> Υποστηρίζεται η εξαγωγή δεδομένων σε format JSON και PHP_ARRAY,  με χρήση της αντίστοιχης τιμής.
 * 
 *   **4) Επιστροφή περισσότερων αποτελεσμάτων**
 *   <br>"all_data" -> Επιστρέφει εκτός από τον συνολικό αριθμό μονάδων και όνομα μονάδας, κωδικο ΥΠΑΙΠΘ, κωδικό MM
 * 
 * 
 * @param integer $selection Επιλογή Διαδικασίας
 * <br>
 * <br>Επιλογή διαδικασίας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική :Η Επιλογή Διαδικασίας μπορεί να είναι αριθμητική μεταξύ των 1-10
 *    </li>
 * </ul>
 * 
 * @param boolean $all_data Περισσοότερα Αποτελέσματα
 * <br>
 * <br>Επιλογή για επιστροφή περισσότερων αποτελεσμάτων
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : boolean(true)
 * <ul>
 *    <li>boolean
 *       <br>Boolean : Είναι αποδεκτή μόνο η τιμή true για επιστροφή αποτελεσμάτων
 *    </li>
 * </ul>
 * 
 * @param mixed $category Κατηγορία
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Κατηγορίας της Μονάδας 
 * <br>Λεξικό : {@see GetCategories}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Κατηγορίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Κατηγορίας
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>array[integer|string|null]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $unit_type Τύπος Μονάδας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Τύπου Μονάδας 
 * <br>Λεξικό : {@see GetUnitTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Τύπου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Τύπου Μονάδας
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>array[integer|string|null]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $state Λειτουργική Καταστάση
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Λειτουργικής Καταστάσης της Μονάδας 
 * <br>Λεξικό : {@see GetStates}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Λειτουργικής Καταστάσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Λειτουργικής Καταστάσης
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>array[integer|string|null]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $source Πρωτογενής Πηγή
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Πρωτογενής Πηγής της Μονάδας
 * <br>Λεξικό : {@see GetSources}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Πρωτογενής Πηγής
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Πρωτογενής Πηγής
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>null
 *       <br>Null : Η αναζήτηση γίνεται με την επιλογή κενή τιμής
 *    </li>
 *    <li>array[integer|string|null]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές ή Null τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $export Τύπος Εξαγωγής Δεδομένων
 * <br>
 * <br>Ο Τύπος Εξαγωγής Δεδομένων με τον οποίο θα γίνει η εξαγωγή σε συγκεκριμένη μορφή τών δεδομένων
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η εξαγωγή δεδομένων γίνεται με τον Τύπο {@see ExportDataEnumTypes::JSON}
 * <br>Λίστα Τύπων Εξαγωγής Δεδομένων : {@see ExportDataEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see ExportDataEnumTypes}</li></ul>
 * 
 *
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>data</b> : Ο Πίνακας με τα αποτελέσματα
 *  <ul>
 *    <li>string : <b>mm_id</b> : Ο Κωδικός ΜΜ</li>
 *    <li>string : <b>registry_no</b> : Ο κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *    <li>integer : <b>name</b> : Το Όνομα της Μονάδας</li>
 *  </ul>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * <br>{@see ExceptionCodes::InvalidCategoryType}
 * 
 * @throws InvalidUnitTypeType {@see ExceptionMessages::InvalidUnitTypeType}
 * <br>{@see ExceptionCodes::InvalidUnitTypeType}
 * 
 * @throws InvalidStateType {@see ExceptionMessages::InvalidStateType}
 * <br>{@see ExceptionCodes::InvalidStateType}
 * 
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * <br>{@see ExceptionCodes::InvalidSourceType}
 * 
 * @throws MissingSelectionCheckRequiredParam {@see ExceptionMessages::MissingSelectionCheckRequiredParam}
 * <br>{@see ExceptionCodes::MissingSelectionCheckRequiredParam}
 * 
 * @throws MissingSelectionCheckRequiredValue {@see ExceptionMessages::MissingSelectionCheckRequiredValue}
 * <br>{@see ExceptionCodes::MissingSelectionCheckRequiredValue}
 * 
 * @throws InvalidSelectionCheckRequiredArray {@see ExceptionMessages::InvalidSelectionCheckRequiredArray}
 * <br>{@see ExceptionCodes::InvalidSelectionCheckRequiredArray}
 * 
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminType}
 * 
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * <br>{@see ExceptionCodes::InvalidEduAdminType}
 * 
 * @throws InvalidTransferAreaType {@see ExceptionMessages::InvalidTransferAreaType}
 * <br>{@see ExceptionCodes::InvalidTransferAreaType}
 * 
 * @throws InvalidPrefectureType {@see ExceptionMessages::InvalidPrefectureType}
 * <br>{@see ExceptionCodes::InvalidPrefectureType}
 * 
 * @throws InvalidMunicipalityType {@see ExceptionMessages::InvalidMunicipalityType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityType}
 * 
 * @throws InvalidOperationShiftType {@see ExceptionMessages::InvalidOperationShiftType}
 * <br>{@see ExceptionCodes::InvalidOperationShiftType}
 * 
  * @throws InvalidLegalCharacterType {@see ExceptionMessages::InvalidLegalCharacterType}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterType}
 * 
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityType}
 * 
 * @throws InvalidUnitType {@see ExceptionMessages::InvalidUnitType}
 * <br>{@see ExceptionCodes::InvalidUnitType}
 * 
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * <br>{@see ExceptionCodes::InvalidCategoryType}
 * 
 * @throws InvalidSelectionCheckRequiredValue {@see ExceptionMessages::InvalidSelectionCheckRequiredValue}
 * <br>{@see ExceptionCodes::InvalidSelectionCheckRequiredValue}
 * 
 * @throws InvalidSelectionCheckRequiredType {@see ExceptionMessages::InvalidSelectionCheckRequiredType}
 * <br>{@see ExceptionCodes::InvalidSelectionCheckRequiredType}
 * 
 * @throws InvalidAllDataSelectionCheckRequiredValue {@see ExceptionMessages::InvalidAllDataSelectionCheckRequiredValue}
 * <br>{@see ExceptionCodes::InvalidAllDataSelectionCheckRequiredValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 */

function CheckRequiredValues( $selection, $all_data, $category, $unit_type, $state, $source, 
                              $export ) {
    
    global $entityManager, $app;

    $qb = $entityManager->createQueryBuilder();
    $result = array();  

    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();

    try {

//$export=======================================================================       
        if ( Validator::Missing('export', $params) )
            $export = ExportDataEnumTypes::JSON;
        else if ( ExportDataEnumTypes::isValidValue( $export ) || ExportDataEnumTypes::isValidName( $export ) ) {
            $export = ExportDataEnumTypes::getValue($export);
        } else
            throw new Exception(ExceptionMessages::InvalidExportType." : ".$export, ExceptionCodes::InvalidExportType);
 
//$category=====================================================================
        if (Validator::Exists('category', $params)){
            CRUDUtils::setFilter($qb, $category, "c", "categoryId", "name", "null,id,value", ExceptionMessages::InvalidCategoryType, ExceptionCodes::InvalidCategoryType);       
        }
        
//$unit_type====================================================================
        if (Validator::Exists('unit_type', $params)){
            CRUDUtils::setFilter($qb, $unit_type, "ut", "unitTypeId", "name", "null,id,value", ExceptionMessages::InvalidUnitTypeType, ExceptionCodes::InvalidUnitTypeType);     
        }

//$state========================================================================
        if (Validator::Exists('state', $params)){
            CRUDUtils::setFilter($qb, $state, "s", "stateId", "name", "null,id,value", ExceptionMessages::InvalidStateType, ExceptionCodes::InvalidStateType);   
        }

//$source=======================================================================
        if (Validator::Exists('source', $params)){
            CRUDUtils::setFilter($qb, $source, "sr", "sourceId", "name", "null,id,value", ExceptionMessages::InvalidSourceType, ExceptionCodes::InvalidSourceType);
        } 
        
//make db query=================================================================  
            function nullForeignKeys ($qb, $foreignKeyId, $foreignReferenceTable){
                
                //execution=====================================================
                $qb->select('u.mmId, u.registryNo, u.name, fk.'.$foreignKeyId);
                $qb->from('Units','u');
                $qb->leftjoin('u.'.$foreignReferenceTable, 'fk');
                $qb->leftjoin('u.category', 'c');
                $qb->leftjoin('u.unitType', 'ut');
                $qb->leftjoin('u.state', 's');
                $qb->leftjoin('u.source', 'sr');

                $query = $qb->getQuery();       
                return $results = $query->getResult(); 
            }  
        
//$selection==================================================================== 
            if ( Validator::Missing('selection', $params) ) 
                throw new Exception(ExceptionMessages::MissingSelectionCheckRequiredParam." : ".$selection, ExceptionCodes::MissingSelectionCheckRequiredParam);      
            else if ( Validator::isNull($selection)) 
                throw new Exception(ExceptionMessages::MissingSelectionCheckRequiredValue." : ".$selection, ExceptionCodes::MissingSelectionCheckRequiredValue);      
            else if ( Validator::isArray($selection)) 
                throw new Exception(ExceptionMessages::InvalidSelectionCheckRequiredArray." : ".$selection, ExceptionCodes::InvalidSelectionCheckRequiredArray);      
            else if ( Validator::isID($selection) ) {

                switch ((int)$selection) {
                    case 1:
                        CRUDUtils::setFilter($qb, null, "fk", "regionEduAdminId", "regionEduAdminId", "null", ExceptionMessages::InvalidRegionEduAdminType, ExceptionCodes::InvalidRegionEduAdminType);
                        $fResults = nullForeignKeys($qb, 'regionEduAdminId', 'regionEduAdmin');
                        break;
                    case 2:
                        CRUDUtils::setFilter($qb, null, "fk", "eduAdminId", "eduAdminId", "null", ExceptionMessages::InvalidEduAdminType, ExceptionCodes::InvalidEduAdminType);
                        $fResults = nullForeignKeys($qb, 'eduAdminId', 'eduAdmin');
                        break;
                    case 3:
                        CRUDUtils::setFilter($qb, null, "fk", "transferAreaId", "transferAreaId", "null", ExceptionMessages::InvalidTransferAreaType, ExceptionCodes::InvalidTransferAreaType);
                        $fResults = nullForeignKeys($qb, 'transferAreaId', 'transferArea');
                        break;
                    case 4:
                        CRUDUtils::setFilter($qb, null, "fk", "prefectureId", "prefectureId", "null", ExceptionMessages::InvalidPrefectureType, ExceptionCodes::InvalidPrefectureType);
                        $fResults = nullForeignKeys($qb, 'prefectureId', 'prefecture');
                        break;
                    case 5:
                        CRUDUtils::setFilter($qb, null, "fk", "municipalityId", "municipalityId", "null", ExceptionMessages::InvalidMunicipalityType, ExceptionCodes::InvalidMunicipalityType);
                        $fResults = nullForeignKeys($qb, 'municipalityId', 'municipality');
                        break;
                    case 6:
                        CRUDUtils::setFilter($qb, null, "fk", "operationShiftId", "operationShiftId", "null", ExceptionMessages::InvalidOperationShiftType, ExceptionCodes::InvalidOperationShiftType);
                        $fResults = nullForeignKeys($qb, 'operationShiftId', 'operationShift');
                        break;
                    case 7:
                        CRUDUtils::setFilter($qb, null, "fk", "legalCharacterId", "legalCharacterId", "null", ExceptionMessages::InvalidLegalCharacterType, ExceptionCodes::InvalidLegalCharacterType);
                        $fResults = nullForeignKeys($qb, 'legalCharacterId', 'legalCharacter');
                        break;
                    case 8:
                        CRUDUtils::setFilter($qb, null, "fk", "implementationEntityId", "implementationEntityId", "null", ExceptionMessages::InvalidImplementationEntityType, ExceptionCodes::InvalidImplementationEntityType);
                        $fResults = nullForeignKeys($qb, 'implementationEntityId', 'implementationEntity');
                        break;
                    case 9:
                        CRUDUtils::setFilter($qb, null, "fk", "unitTypeId", "unitTypeId", "null", ExceptionMessages::InvalidUnitType, ExceptionCodes::InvalidUnitType);
                        $fResults = nullForeignKeys($qb, 'unitTypeId', 'unitType');
                        break;
                    case 10:
                        CRUDUtils::setFilter($qb, null, "fk", "categoryId", "categoryId", "null", ExceptionMessages::InvalidCategoryType, ExceptionCodes::InvalidCategoryType);
                        $fResults = nullForeignKeys($qb, 'categoryId', 'category');
                        break;
                    default:
                         throw new Exception(ExceptionMessages::InvalidSelectionCheckRequiredValue." : ".$selection, ExceptionCodes::InvalidSelectionCheckRequiredValue); 
                }

            } else 
               throw new Exception(ExceptionMessages::InvalidSelectionCheckRequiredType, ExceptionCodes::InvalidSelectionCheckRequiredType); 

//show more analytics infos about results======================================= 
        if ( Validator::Exists('all_data', $params) ) {   
            if (Validator::isTrue($all_data)) {
                $count =0;
               
                //data results==================================================
                foreach ($fResults as $fResult) {
                     $Results[] = array( 'mm_id'       => $fResult['mmId'],
                                         'registry_no' => $fResult['registryNo'],
                                         'name'        => $fResult['name']                              
                                      );
                     $count++;
                 }

                $result["data"] = $Results;   
                $result["count"] = $count;
            } else
                throw new Exception(ExceptionMessages::InvalidAllDataSelectionCheckRequiredValue, ExceptionCodes::InvalidAllDataSelectionCheckRequiredValue); 
 
        }
        $result["total"] = count($fResults);
        
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 

//debug=========================================================================
   if ( Validator::IsTrue( $params["debug"]  ) )
   {
        $result["DQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getDQL()));
        $result["SQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getQuery()->getSQL()));
   }

//export selection==============================================================
    if ($export == 'JSON'){
        return $result;
    } else if ($export == 'PHP_ARRAY'){
       return print_r($result);
    } else {     
       return $result;
    }
    
}

?>