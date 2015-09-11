<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
* **ΛΕΞΙΚΟ : Τύποι Μονάδων**
 * 
 * Η συνάρτηση αυτή επιστρέφει Τύπους Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **unit_types** :
 * <br>https://mm.sch.gr/api/unit_types
 *
 *
 * ***Ορισμός Τύπου και Πεδίου Ταξινόμησης Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>) μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης.
 * * Προκαθορισμένη τιμή πεδίου ταξινόμησης είναι η αύξουσα σειρά **ASC**.
 * * Προκαθορισμένη τιμή τύπου ταξινόμησης είναι το **Όνομα**.  
 *
 * ***Ορισμός Αριθμού Σελίδας και Εγγραφών/Σελίδα της Επιστροφής Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Αριθμός Σελίδας (<a href="#$page">$page</a>) και Αριθμός Εγγραφών/Σελίδα (<a href="#$pagesize">$pagesize</a>) μπορεί να καθοριστεί ο αριθμός Σελίδας και Εγγραφών/Σελίδα της επιστροφής αποτελεσμάτων.
 * * Ο προκαθορισμένος αριθμός Εγγραφών/Σελίδα που επιστρέφονται ανά κλήση είναι **0**. 
 * * Ο προκαθορισμένος αριθμός Σελίδας που επιστρέφεται ανά κλήση είναι **1**. 
 * 
 * ***Ορισμός Τύπου Αναζήτησης Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Τύπου Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί μπορεί να καθοριστεί ο τρόπος με τον οποίο θα αναζητηθεί η τιμή της παραμέτρου στο DNS της Μονάδας.
 * * Ισχύει για όσες παραμέτρους το υποστηρίζουν το συνδυασμό με την παράμετρο searchtype.
 * * Προκαθορισμένη τιμή τύπου αναζήτησης είναι **CONTAINALL**.
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
 * ***Μηνύματα Προκαθορισμένων Παραμέτρων***
 * * Υπάρχουν αναλυτικές πληροφορίες για τα μηνύματα Προκαθορισμένων Παραμέτρων ({@see StandarParamsMessages}).
 * 
 * ***Δεδομένα Επιστροφής***
 * <br><a id="model"></a>Παρακάτω εμφανίζονται τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {
 *  "data": [{}],
 *  "controller": "GetUnitTypes",
 *  "function": "unit_types",
 *  "method": "GET",
 *  "total": ``,
 *  "count": ``,
 *  "pagination": { "page": 1, "maxPage": 1, "pagesize": 0},
 *  "status": 200,
 *  "message": "[GET][unit_types]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"data": [{
 *              "unit_type_id": ``,
 *		"unit_type": ``,
 *		"initials": ``,
 *		"category_id": ``,
 *		"category": ``,
 *		"education_level_id": ``,
 *		"education_level": ``
 *          }]
 * }
 * </code>
 * 
 * 
 * @param mixed $unit_type Τύπος Μονάδας 
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Τύπου Μονάδας 
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Τύπου Μονάδας 
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Τύπου Μονάδας
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $category Κατηγορία
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Κατηγορίας
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
 * @param mixed $education_level Βαθμίδα Εκπαίδευσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Βαθμίδας Εκπαίδευσης
 * <br>Λεξικό : {@see GetEducationLevels}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Βαθμίδας Εκπαίδευσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Βαθμίδας Εκπαίδευσης
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
 * 
 * @param integer $pagesize Αριθμός Εγγραφών/Σελίδα
 * <br>
 * <br>Ο αριθμός των εγγραφών που θα επιστρέψουν ανα σελίδα
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφούν όλες οι προκαθορισμένες εγγραφές ({@see Parameters::DefaultPageSize})
 * <br>Λίστα Παραμέτρων Σελιδοποίησης : {@see Parameters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul><li>integer<br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0</li></ul>
 *
 * @param integer $page Αριθμός Σελίδας
 * <br>
 * <br>Ο αριθμός της σελίδας με τις <a href="#$pagesize">$pagesize</a> εγγραφές που βρέθηκαν σύμφωμα με τις παραμέτρους
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφεί η πρώτη σελίδα
 * <br>Λίστα Παραμέτρων Σελίδας : {@see Parameters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul><li>integer<br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0</li></ul>
 *
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το **Όνομα**
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι οποιοδήποτε όνομα πεδίου επιστρέφεται στον πίνακα data</li></ul>
 *
 * @param string $ordertype Τύπος Ταξινόμησης
 * <br>
 * <br>Ο τύπος ταξινόμησης με τον οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με Αύξουσα Σειρά ({@see OrderEnumTypes::ASC})
 * <br>Λίστα Τύπων Ταξινόμησης : {@see OrderEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see OrderEnumTypes}</li></ul>
 *
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στα πεδία 
 * <ul></ul>
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}</li></ul>
 *
 *
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>data</b> : Ο Πίνακας με τα δεδομένα
 *  <ul>
 *    <li>integer : <b>unit_type_id</b> : Ο Κωδικός του Τύπου Μονάδας</li>
 *    <li>string : <b>unit_type</b> : Το Όνομα Τύπου Μονάδας</li>
 *    <li>string : <b>initials</b> : Τα αρχικά του Ονόματος του Τύπου Μονάδας</li>
 *    <li>integer : <b>category_id</b> : Ο Κωδικός της Κατηγορίας του Τύπου Μονάδας</li>
 *    <li>string : <b>category</b> : Η Κατηγορία του Τύπου Μονάδας</li>
 *    <li>integer : <b>education_level_id</b> : Ο Κωδικός του Επιπέδου Εκπαίδευσης</li>
 *    <li>string : <b>education_level</b> : Το Όνομα του Επιπέδου Εκπαίδευσης</li>
 *  </ul>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>array : <b>pagination</b> : Οι παράμετροι σελιδοποίησης των εγγραφών της κλήσης
 *  <ul>
 *      <li>integer : <b>page</b> : Ο αριθμός της σελίδας των αποτελεσμάτων</li>
 *      <li>integer : <b>maxPage</b> : Ο μέγιστος αριθμός της σελίδας των αποτελεσμάτων</li>
 *      <li>integer : <b>pagesize</b> :  Ο αριθμός των εγγραφών προς επιστροφή</li>
 *  </ul>
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws InvalidUnitTypeType {@see ExceptionMessages::InvalidUnitTypeType}
 * <br>{@see ExceptionCodes::InvalidUnitTypeType}
 * 
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * <br>{@see ExceptionCodes::InvalidCategoryType}
 *
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelType} 
 *
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 *
 */

function GetUnitTypes( $unit_type, $category, $education_level,
                       $pagesize, $page, $orderby, $ordertype, $searchtype) {
    
    global $entityManager, $app;

    $qb = $entityManager->createQueryBuilder();
    $result = array();  

    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();

    try {

//$page - $pagesize - $searchtype - $ordertype =================================
       $page = Pagination::getPage($page, $params);
       $pagesize = Pagination::getPagesize($pagesize, $params, true);     
       $searchtype = Filters::getSearchType($searchtype, $params);
       $ordertype =  Filters::getOrderType($ordertype, $params);

//$orderby======================================================================
       $columns = array(
                        "ut.stateId"            => "unit_type_id",
                        "ut.name"               => "unit_type",
                        "c.categoryId"          => "category_id",
                        "c.name"                => "category",
                        "el.educationLevelId"   => "education_level_id",
                        "el.name"               => "education_level"
                        );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "unit_type";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }
        
//$unit_type====================================================================
        if (Validator::Exists('unit_type', $params)){
            CRUDUtils::setFilter($qb, $unit_type, "ut", "unitTypeId", "name", "id,value", ExceptionMessages::InvalidUnitTypeType, ExceptionCodes::InvalidUnitTypeType);
        }
 
//$category=====================================================================
        if (Validator::Exists('category', $params)){
            CRUDUtils::setFilter($qb, $category, "c", "categoryId", "name", "null,id,value", ExceptionMessages::InvalidCategoryType, ExceptionCodes::InvalidCategoryType);
        }
        
//$education_level==============================================================
        if (Validator::Exists('education_level', $params)){
            CRUDUtils::setFilter($qb, $education_level, "el", "educationLevelId", "name", "null,id,value", ExceptionMessages::InvalidEducationLevelType, ExceptionCodes::InvalidEducationLevelType);
        }

//execution=====================================================================
        $qb->select('ut');
        $qb->from('UnitTypes','ut');
        $qb->leftjoin('ut.category','c');
        $qb->leftjoin('ut.educationLevel','el');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);

//pagination and results========================================================      
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $pagesize!==Parameters::AllPageSize ? $results->getQuery()->setMaxResults($pagesize) : null;

//data results==================================================================       
        $count = 0;
        foreach ($results as $row)
        {

            $result["data"][] = array(
                                        "unit_type_id"        => $row->getUnitTypeId(),
                                        "unit_type"           => $row->getName(),
                                        "initials"            => $row->getInitials(),
                                        "category_id"         => Validator::IsNull($row->getCategory()) ? Validator::ToNull() : $row->getCategory()->getCategoryId(),
                                        "category"            => Validator::IsNull($row->getCategory()) ? Validator::ToNull() : $row->getCategory()->getName(),
                                        "education_level_id"  => Validator::IsNull($row->getEducationLevel()) ? Validator::ToNull() : $row->getEducationLevel()->getEducationLevelId(),
                                        "education_level"     => Validator::IsNull($row->getEducationLevel()) ? Validator::ToNull() : $row->getEducationLevel()->getName()
                                     );
            $count++;
        }
        $result["count"] = $count;
   
//pagination results============================================================     
        $maxPage = Pagination::getMaxPage($result["total"],$page,$pagesize);
        $pagination = array( "page" => $page,   
                             "maxPage" => $maxPage, 
                             "pagesize" => $pagesize 
                            );    
        $result["pagination"]=$pagination;
        
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
    
    return $result;
    
}

?>