<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * Συνάρτηση εύρεσης κενών τιμών σε "υποχρεωτικά" πεδία μονάδων.
 *
 *   Η συνάρτηση καλείται με την GET /api/check_required_values
 *   Δέχεται τις παρακάτω παραμέτρους:
 *
 *   1) Επιλογή διαδικασίας (Η οποία μπορεί να δεχτεί αριθμητικές τιμές από το 1-10 και κάθε μία αντιστοιχεί σε συγκεκριμένο ερώτημα στην β.δ.)
 *   "selection" ->  <br>1 : null region_edu_admin (χωρίς περιφέρεια)
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
 *
 *   2) Φίλτρα αναζήτησης (μπορούν προστεθούν επιπλέον φίλτρα αναζήτησης σε κάθε επιλογή διαδικασίας για πιο αναλυτικά αποτελέσματα)
 *   <br>"category" -> Κατηγορία Μονάδων
 *   <br>"unit_type" ->  Τύποι Μονάδων
 *   <br>"state" -> Λειτουργική Κατάσταση Μονάδων
 *   <br>"source" -> Πρωτογενής Πηγή Μονάδων
 *
 * 
 *   3) Τύπος εξαγωγής δεδομένων
 *   "export" -> Υποστηρίζεται η εξαγωγή δεδομένων σε format JSON και PHP_ARRAY,  με χρήση της αντίστοιχης τιμής.
 *
 * 
 *   4) Επιστροφή περισσότερων αποτελεσμάτων  
 *   "all_data" -> Επιστρέφει εκτός από τον συνολικό αριθμό μονάδων και όνομα μονάδας, κωδικο ΥΠΑΙΠΘ, κωδικό MM
 * 
 * 
 *  Επιστροφή αποτελεσμάτων
 *  <br>[total] : το σύνολο το αποτελεσμάτων
 *  <br>[data] : επιστρέφεται στην περίπτωση της επιλογής παραμέτρου $all_data και περιέχει arrays με name,mm_id,registry_no
 *  <br>[count] : επιστρέφεται στην περίπτωση της επιλογής παραμέτρου $all_data και αποτελεί το σύνολο το αποτελεσμάτων (πρέπει να έιναι ίδιο με την τιμή του [total]) 
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