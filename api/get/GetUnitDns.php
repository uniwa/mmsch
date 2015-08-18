<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **DNS Μονάδων**
 * 
 * Η συνάρτηση αυτή επιστρέφει DNS Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **unit_dns** :
 * <br>https://mm.sch.gr/api/unit_dns
 *
 * 
 * ***Ορισμός Τύπου και Πεδίου Ταξινόμησης Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>) μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης.
 * * Προκαθορισμένη τιμή πεδίου ταξινόμησης είναι η αύξουσα σειρά **ASC**.
 * * Προκαθορισμένη τιμή τύπου ταξινόμησης είναι το **Όνομα**.  
 * 
 * ***Ορισμός Αριθμού Σελίδας και Εγγραφών/Σελίδα της Επιστροφής Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Αριθμός Σελίδας (<a href="#$page">$page</a>) και Αριθμός Εγγραφών/Σελίδα (<a href="#$pagesize">$pagesize</a>) μπορεί να καθοριστεί ο αριθμός Σελίδας και Εγγραφών/Σελίδα της επιστροφής αποτελεσμάτων.
 * * Ο προκαθορισμένος αριθμός Εγγραφών/Σελίδα που επιστρέφονται ανά κλήση είναι **200**. 
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
 *  "controller": "GetUnitDns",
 *  "function": "unit_dns",
 *  "method": "GET",
 *  "total": ``,
 *  "count": ``,
 *  "pagination": { "page": ``, "maxPage": ``, "pagesize": 200},
 *  "status": 200,
 *  "message": "[GET][unit_dns]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"data": [{
 *              "unit_dns_id": ``,
 *              "unit_dns": "",
 *              "unit_ext_dns": "",
 *              "mm_id": ``,
 *              "unit_name": "",
 *              "special_unit_name": "",
 *              "registry_no": ""
 *          }]
 * }
 * </code>
 * 
 *
 * @param mixed $unit_dns DNS Μονάδας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του DNS της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του DNS της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του DNS της Μονάδας
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 *
 * @param string $unit_dns_extra DNS Μονάδας
 * <br>
 * <br>Το Όνομα του DNS της Μονάδας
 * <br>Συνδυάζεται με την παράμετρο searchtype
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του DNS της Μονάδας
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $unit_ext_dns ExtDNS Μονάδας
 * <br>
 * <br>Το Όνομα του ExtDNS της Μονάδας
 * <br>Συνδυάζεται με την παράμετρο searchtype
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του ExtDNS της Μονάδας
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $unit Μονάδα
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ΜΜ της Μονάδας
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Μονάδας
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
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
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το **Όνομα του DNS Μονάδας**
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
 * <ul><li>DNS Μονάδας (<a href="#$unit_dns">$unit_dns</a>)</li><li>ExtDNS Μονάδας (<a href="#$unit_ext_dns">$unit_ext_dns</a>)</li></ul>
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
 *    <li>integer : <b>unit_dns_id</b> : Ο Κωδικός ID του DNS Μονάδας</li>
 *    <li>string : <b>unit_dns</b> : Το Όνομα του DNS Μονάδας</li>
 *    <li>string : <b>unit_ext_dns</b> : Το Όνομα του ExtDNS Μονάδας</li>
 *    <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας (Μονάδες : {@see GetUnits})</li>
 *    <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας</li>
 *    <li>string : <b>special_unit_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *    <li>string : <b>registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
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
 * @throws InvalidUnitDnsIDType {@see ExceptionMessages::InvalidUnitDnsIDType}
 * <br>{@see ExceptionCodes::InvalidUnitDnsIDType}
 *
 * @throws InvalidUnitDnsType {@see ExceptionMessages::InvalidUnitDnsType}
 * <br>{@see ExceptionCodes::InvalidUnitDnsType}
 * 
 * @throws InvalidUnitExtDnsType {@see ExceptionMessages::InvalidUnitExtDnsType}
 * <br>{@see ExceptionCodes::InvalidUnitExtDnsType}
 *
 * @throws InvalidUnitType {@see ExceptionMessages::InvalidUnitType}
 * <br>{@see ExceptionCodes::InvalidUnitType}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 */

function GetUnitDns( $unit_dns, $unit_dns_extra, $unit_ext_dns, $unit, 
                     $pagesize, $page, $orderby, $ordertype, $searchtype) {
    
    global $entityManager, $app, $db;

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
       $pagesize = Pagination::getPagesize($pagesize, $params);     
       $searchtype = Filters::getSearchType($searchtype, $params);
       $ordertype =  Filters::getOrderType($ordertype, $params);

//$orderby======================================================================
       $columns = array(
                        "ud.unitDnsId"   => "unit_dns_id",
                        "ud.unitDns"     => "unit_dns",
                        "ud.unitExtDns"  => "unit_ext_dns" ,
                        "u.mmId"         => "mm_id",
                        "u.name"         => "unit_name",
                        "u.specialName"  => "special_unit_name",
                        "u.registryNo"   => "registry_no"
                        );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "unit_dns";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }   
      
//$unit_dns=====================================================================
        if (Validator::Exists('unit_dns', $params)){
                CRUDUtils::setFilter($qb, $unit_dns, "ud", "unitDnsId", "unitDns", "null,id,value", ExceptionMessages::InvalidUnitDnsIDType, ExceptionCodes::InvalidUnitDnsIDType);
        }
        
//$unit_dns_extra===============================================================
   if (Validator::Exists('unit_dns_extra', $params)){
       CRUDUtils::setSearchFilter($qb, $unit_dns_extra, "ud", "unitDns", $searchtype, ExceptionMessages::InvalidUnitDnsType, ExceptionCodes::InvalidUnitDnsType);    
   }
   
//$unit_ext_dns=================================================================
   if (Validator::Exists('unit_ext_dns', $params)){
       CRUDUtils::setSearchFilter($qb, $unit_ext_dns, "ud", "unitExtDns", $searchtype, ExceptionMessages::InvalidUnitExtDnsType, ExceptionCodes::InvalidUnitExtDnsType);    
   }

//$unit=========================================================================
        if (Validator::Exists('unit', $params)){
                CRUDUtils::setFilter($qb, $unit, "u", "mmId", "name", "null,id,value", ExceptionMessages::InvalidUnitType, ExceptionCodes::InvalidUnitType);
        }

//execution=====================================================================
        $qb->select('ud');
        $qb->from('UnitDns','ud');
        $qb->leftjoin('ud.mm','u');
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
                                        "unit_dns_id"          => $row->getUnitDnsId(),
                                        "unit_dns"             => $row->getUnitDns(),
                                        "unit_ext_dns"         => $row->getUnitExtDns(),
                                        "mm_id"                => (int)$row->getMm()->getMmId(),
                                        "unit_name"            => $row->getMm()->getName(),
                                        "special_unit_name"    => $row->getMm()->getSpecialName(),
                                        "registry_no"          => $row->getMm()->getRegistryNo()
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