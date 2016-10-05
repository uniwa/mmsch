<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * **Συσχετίσεις Μονάδων**
 * 
 * Η συνάρτηση αυτή επιστρέφει Συσχετίσεις Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **relations** :
 * <br>https://mm.sch.gr/api/relations
 *
 *
 * ***Ορισμός Τύπου και Πεδίου Ταξινόμησης Αποτελεσμάτων***
 * * Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>) μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης.
 * * Προκαθορισμένη τιμή πεδίου ταξινόμησης είναι η αύξουσα σειρά **ASC**.
 * * Προκαθορισμένη τιμή τύπου ταξινόμησης είναι το **Όνομα Host Μονάδας**.  
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
 *  "controller": "GetRelations",
 *  "function": "relations",
 *  "method": "GET",
 *  "total": ``,
 *  "count": ``,
 *  "pagination": { "page": 1, "maxPage": 1, "pagesize": 200},
 *  "status": 200,
 *  "message": "[GET][relations]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα data με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"data": [{
 *              "relation_id": ``,
 *              "relation_state": ``,
 *              "true_date": ``,
 *              "true_fek": ``,
 *              "false_date": ``,
 *              "false_fek": ``,
 *              "relation_type_id": ``,
 *              "relation_type_name": ``,
 *              "host_mm_id": ``,
 *              "host_registry_no": ``,
 *              "host_unit_name": ``,
 *              "host_special_unit_name": ``,
 *              "guest_mm_id": ``,
 *              "guest_registry_no": ``,
 *              "guest_unit_name": ``,
 *              "guest_special_unit_name": ``
 *          }]
 * }
 * </code>
 * 
 * 
 * @param mixed $host_unit Host Μονάδα
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ΜΜ της Host Μονάδας
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Host Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $guest_unit Guest Μονάδα
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ΜΜ της Guest Μονάδας
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Guest Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param mixed $relation_type Τύπος Συσχέτισης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Τύπου Συσχέτισης
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Τύπου Συσχέτισης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Τύπου Συσχέτισης
 *       <br>Η αναζήτηση στον Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές ή Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
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
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το **Όνομα Host Μονάδας**
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
 *    <li>integer : <b>relation_id</b> : Ο Κωδικός ID της Συσχέτισης</li>
 *    <li>boolean : <b>relation_state</b> : Καθορίζει αν η Συσχέτιση είναι Ενεργή</li>
 *    <li>date : <b>true_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ενεργή</li>
 *    <li>string : <b>true_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ενεργή</li>
 *    <li>date : <b>false_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ανενεργή</li>
 *    <li>string : <b>false_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ανενεργή</li>
 *    <li>integer : <b>relation_type_id</b> : Ο Κωδικός ID του Τύπου Συσχέτισης των Μονάδων</li>
 *    <li>string : <b>relation_type_name</b> : Το Όνομα του Τύπου Συσχέτισης των Μονάδων</li>
 *    <li>integer : <b>host_mm_id</b> : Ο Κωδικός ΜΜ της Host Μονάδας
 *    <li>string : <b>host_registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Host Μονάδας</li>
 *    <li>string : <b>host_name</b> : Το Όνομα της Host Μονάδας</li>
 *    <li>string : <b>host_special_name</b> : Το Προσωνύμιο της Host Μονάδας</li>
 *    <li>integer : <b>guest_mm_id</b> : Ο Κωδικός ΜΜ της Guest Μονάδας</li>
 *    <li>string : <b>guest_registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Guest Μονάδας</li>
 *    <li>string : <b>guest_name</b> : Το Όνομα της Guest Μονάδας</li>
 *    <li>string : <b>guest_special_name</b> : Το Προσωνύμιο της Guest Μονάδας</li>
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
 * @throws InvalidRelationHostUnitMMIDType {@see ExceptionMessages::InvalidRelationHostUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidRelationHostUnitMMIDType}
 *
 * @throws InvalidRelationGuestUnitMMIDType {@see ExceptionMessages::InvalidRelationGuestUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidRelationGuestUnitMMIDType}
 * 
 * @throws InvalidRelationTypeType {@see ExceptionMessages::InvalidRelationTypeType}
 * <br>{@see ExceptionCodes::InvalidRelationTypeType}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 * 
 */

function GetRelations( $host_mm_id, $guest_mm_id, $relation_type,
                       $pagesize, $page, $orderby, $ordertype, $searchtype ) {
     
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
       $pagesize = Pagination::getPagesize($pagesize, $params);     
       $searchtype = Filters::getSearchType($searchtype, $params);
       $ordertype =  Filters::getOrderType($ordertype, $params);

//$orderby======================================================================
       $columns = array(
                        "r.relationId"       => "relation_id",
                        "r.relationState"    => "relation_state",
                        "r.trueDate"         => "true_date",
                        "r.trueFek"          => "true_fek",
                        "r.falseDate"        => "false_date",
                        "r.falseFek"         => "false_fek",
                        "hu.mmId"            => "host_mm_id",
                        "hu.registryNo"      => "host_registry_no",
                        "hu.name"            => "host_unit_name",
                        "hu.specialName"     => "host_special_unit_name",
                        "gu.mmId"            => "guest_mm_id",
                        "gu.registryNo"      => "guest_registry_no",
                        "gu.name"            => "guest_unit_name",
                        "gu.specialName"     => "guest_special_unit_name",
                        "rt.relationTypeId"  => "relation_type_id",
                        "rt.name"            => "relation_type_name"
                       );
       
       if ( Validator::Missing('orderby', $params) )
            $orderby = "host_unit_name";
        else
        {   
            $orderby = Validator::ToLower($orderby);
            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        } 
        
//$host_mm_id===================================================================
        if (Validator::Exists('host_mm_id', $params)){
                CRUDUtils::setFilter($qb, $host_mm_id, "hu", "mmId", "mmId", "id", ExceptionMessages::InvalidRelationHostUnitMMIDType, ExceptionCodes::InvalidRelationHostUnitMMIDType);
        }

//$guest_mm_id==================================================================
        if (Validator::Exists('guest_mm_id', $params)){
                CRUDUtils::setFilter($qb, $guest_mm_id, "gu", "mmId", "mmId", "id", ExceptionMessages::InvalidRelationGuestUnitMMIDType, ExceptionCodes::InvalidRelationGuestUnitMMIDType);
        }

//$relation_type================================================================
        if (Validator::Exists('relation_type', $params)){
             CRUDUtils::setFilter($qb, $relation_type, "rt", "relationTypeId", "name", "id,value", ExceptionMessages::InvalidRelationTypeType, ExceptionCodes::InvalidRelationTypeType);
        } 

//execution=====================================================================
        $qb->select('r');
        $qb->from('Relations','r');
        $qb->leftjoin('r.relationType','rt');
        $qb->leftjoin('r.guestMm','gu');
        $qb->leftjoin('r.hostMm','hu');
        $qb->orderBy(array_search($orderby, $columns), $ordertype);

//pagination and results========================================================      
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $pagesize!==Parameters::AllPageSize ? $results->getQuery()->setMaxResults($pagesize) : null;
        

//data results==================================================================       
        $count = 0;
        foreach ($results->getQuery()->getResult() as $row)
        {

            $result["data"][]  = array(
                                        "relation_id"             => $row->getRelationId(),
                                        "relation_state"          => $row->getRelationState(),
                                        "true_date"               => ($row->getTrueDate() instanceof \DateTime)? $row->getTrueDate()->format('Y-m-d H:i:s') : null,
                                        "true_fek"                => $row->getTrueFek(),
                                        "false_date"              => ($row->getFalseDate() instanceof \DateTime)? $row->getFalseDate()->format('Y-m-d H:i:s') : null,
                                        "false_fek"               => $row->getFalseFek(),
                                        "relation_type_id"        => $row->getRelationType()->getRelationTypeId(),
                                        "relation_type_name"      => $row->getRelationType()->getName(),
                                        "host_mm_id"              => (int)$row->getHostMm()->getMmId(),
                                        "host_registry_no"        => $row->getHostMm()->getRegistryNo(),
                                        "host_unit_name"          => $row->getHostMm()->getName(),
                                        "host_special_unit_name"  => $row->getHostMm()->getSpecialName(),
                                        "guest_mm_id"             => (int)$row->getGuestMm()->getMmId(),
                                        "guest_registry_no"       => $row->getGuestMm()->getRegistryNo(),
                                        "guest_unit_name"         => $row->getGuestMm()->getName(),
                                        "guest_special_unit_name" => $row->getGuestMm()->getSpecialName()
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
//        $result["SQL"] =  trim(preg_replace('/\s\s+/', ' ', $qb->getQuery()->getSQL()));
   }
    
    return $result;
}

?>