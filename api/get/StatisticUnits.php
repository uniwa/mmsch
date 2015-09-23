<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Στατιστικά Μονάδων**
 *
 * Η συνάρτηση αυτή επιστρέφει Στατιστικά Μονάδων, σύμφωνα με τις παραμέτρους που έγινε η κλήση
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **GET** και route_api_name = **statistic_units** :
 * <br>https://mm.sch.gr/api/statistic_units
 *
 * ***Πίνακας Axis***
 * * Στον Πίνακα Axis περιέχονται τα ονόματα των παραμέτρων με τα οποία ο χρήστης μπορεί δημιουργήσει
 * δισδιαστατο πίνακα αποτελεσματων με άξονες x,y για την προβολή στατιστικων αποτελεσμάτων.
 * * Αποδεκτές τιμές
 * <ul>
 * <li> "source" </li>
 * <li> "category" </li>
 * <li> "state" </li>        
 * <li> "region_edu_admin" </li>
 * <li> "edu_admin" </li>
 * <li> "transfer_area" </li>
 * <li> "prefecture" </li>
 * <li> "municipality" </li>
 * <li> "education_level" </li>    
 * <li> "unit_type" </li>          
 * <li> "orientation_type" </li>          
 * <li> "operation_shift" </li>       
 * <li> "legal_character" </li>           
 * <li> "implementation_entity" </li>   
 * <li> "special_type" </li>
 * </ul>
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
 * ***Δεδομένα Επιστροφής***
 * <br><a id="model"></a>Παρακάτω εμφανίζονται τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {
 *  "results": [{}],
 *  "controller": "StatisticUnits",
 *  "function": "statistic_units",
 *  "method": "GET",
 *  "filters": ``,
 *  "status": 200,
 *  "message": "[GET][statistic_units]:success"
 * }
 * </code>
 *
 * ***Πίνακας Δεδομένων***
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα από τον πίνακα results με τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {"results": [{
 *  "x_axis_name":``,
 *  "y_axis_name":``,
 *  "total_units":``
 *  }]
 * }
 * </code>
 * 
 *
 * @param string $x_axis Άξονας x του πίνακα
 * <br>
 * <br>Η παράμετρος μπορεί να είναι οποιαδήποτε τιμή από τον πίνακα Axis <a href="#axis">Axis</a>
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το όνομα της παραμέτρου
 *    </li>
 * </ul>
 *
 * @param string $y_axis Άξονας y του πίνακα
 * <br>
 * <br>Η παράμετρος μπορεί να είναι οποιαδήποτε τιμή από τον πίνακα Axis <a href="#axis">Axis</a>
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το όνομα της παραμέτρου
 *    </li>
 * </ul>
 * 
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 * @param mixed $registry_no Κωδικός ΥΠΕΠΘ
 * <br>
 * <br>O Κωδικός ΥΠΕΠΘ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|null|array[string|null]}
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Κωδικό ΥΠΕΠΘ της Μονάδας
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
 * @param string $name Ονομασία
 * <br>
 * <br>Η Ονομασία της Μονάδας
 * <br>Συνδυάζεται με την παράμετρο searchtype
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με την Ονομασία της Μονάδας
 *       <br>Αν η παράμετρος Τύπος Αναζήτησης δεν έχει τιμή τότε η αναζήτηση στον Όνομα γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 * 
 * @param string $special_name Προσωνύμιο
 * <br>
 * <br>Το Προσωνύμιο της Μονάδας
 * <br>Συνδυάζεται με την παράμετρο searchtype
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string|array[string]
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Προσωνύμιο της Μονάδας
 *       <br>Αν η παράμετρος Τύπος Αναζήτησης δεν έχει τιμή τότε η αναζήτηση στον Προσωνύμιο γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[string]
 *       <br>Σύνολο από Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
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
 * @param mixed $region_edu_admin Περιφέρεια
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιφέρειας της Μονάδας 
 * <br>Λεξικό : {@see GetRegionEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Περιφέρειας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Περιφέρειας
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
 * @param mixed $edu_admin Διεύθυνση Εκπαίδευσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Διευθύνσης Εκπαίδευσης της Μονάδας 
 * <br>Λεξικό : {@see GetEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Διευθύνσης Εκπαίδευσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Διευθύνσης Εκπαίδευσης
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
 * @param mixed $implementation_entity Φορέας Υλοποίησης 
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Φορέα Υλοποίησης της Μονάδας 
 * <br>Λεξικό : {@see GetImplementationEntities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Φορέα Υλοποίησης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Φορέα Υλοποίησης
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
  * @param mixed $transfer_area Περιοχή Μετάθεσης 
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιοχής Μετάθεσης της Μονάδας 
 * <br>Λεξικό : {@see GetTransferAreas}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Περιοχής Μετάθεσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Περιοχής Μετάθεσης
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
 * @param mixed $prefecture Περιφερειακή Ενότητα
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιφερειακή Ενότητα της Μονάδας 
 * <br>Λεξικό : {@see GetPrefectures}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID της Περιφερειακής Ενότητα
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Περιφερειακής Ενότητα
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
 * @param mixed $municipality Δήμος ΟΤΑ 
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Δήμου ΟΤΑ της Μονάδας 
 * <br>Λεξικό : {@see GetMunicipalities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Δήμου ΟΤΑ
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Δήμου ΟΤΑ
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
 * <br>Το Όνομα ή ο Κωδικός ID της Βαθμίδας Εκπαίδευσης της Μονάδας 
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
 * @param mixed $operation_shift Ωράριο Λειτουργίας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Ωράριου Λειτουργίας της Μονάδας 
 * <br>Λεξικό : {@see GetOperationShifts}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Ωράριου Λειτουργίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Ωράριου Λειτουργίας
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
  * @param mixed $legal_character Νομικός Χαρακτήρας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Νομικού Χαρακτήρα της Μονάδας 
 * <br>Λεξικό : {@see GetLegalCharacters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Νομικού Χαρακτήρα
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Νομικού Χαρακτήρα
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
 * @param mixed $orientation_type Προσανατολισμός
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Προσανατολισμού της Μονάδας 
 * <br>Λεξικό : {@see GetOrientationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Προσανατολισμού
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Προσανατολισμού
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
 * @param mixed $special_type Ειδικός Χαρακτηρισμός
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Ειδικού Χαρακτηρισμού της Μονάδας 
 * <br>Λεξικό : {@see GetSpecialTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|null|array[integer|string|null]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ID του Ειδικού Χαρακτηρισμού
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Ειδικού Χαρακτηρισμού
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
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στα πεδία 
 * <ul><li>Όνομα Μονάδας (<a href="#$name">$name</a>)</li><li>Προσωνύμιο Μονάδας (<a href="#$special_name">$special_name</a>)</li></ul>
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul><li>string<br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}</li></ul>
 * 
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>array : <b>results</b> : Ο Πίνακας με τα αποτελέσματα
 *  <ul>
 *    <li>string : <b>'x_axis'_name</b> : Το Όνομα του x άξονα</li>
 *    <li>string : <b>'y_axis'_name</b> : Το Όνομα του y άξονα</li>
 *    <li>integer : <b>total_units</b> : Το πλήθος του συνδιασμού x,y</li>
 *  </ul>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>string : <b>filters</b> : Τα φίλτρα που καταχώρησε ο χρήστης
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws InvalidXAxisArray {@see ExceptionMessages::InvalidXAxisArray}
 * <br>{@see ExceptionCodes::InvalidXAxisArray}
 * 
 * @throws MissingXAxisValue {@see ExceptionMessages::MissingXAxisValue}
 * <br>{@see ExceptionCodes::MissingXAxisValue}
 * 
 * @throws InvalidXAxis {@see ExceptionMessages::InvalidXAxis}
 * <br>{@see ExceptionCodes::InvalidXAxis}
 * 
 * @throws InvalidXAxisType {@see ExceptionMessages::InvalidXAxisType}
 * <br>{@see ExceptionCodes::InvalidXAxisType}
 * 
 * @throws MissingXAxisParam {@see ExceptionMessages::MissingXAxisParam}
 * <br>{@see ExceptionCodes::MissingXAxisParam}
 *  
 * @throws InvalidYAxisArray {@see ExceptionMessages::InvalidYAxisArray}
 * <br>{@see ExceptionCodes::InvalidYAxisArray}
 * 
 * @throws MissingYAxisValue {@see ExceptionMessages::MissingYAxisValue}
 * <br>{@see ExceptionCodes::MissingYAxisValue}
 * 
 * @throws InvalidYAxis {@see ExceptionMessages::InvalidYAxis}
 * <br>{@see ExceptionCodes::InvalidYAxis}
 * 
 * @throws InvalidYAxisType {@see ExceptionMessages::InvalidYAxisType}
 * <br>{@see ExceptionCodes::InvalidYAxisType}
 * 
 * @throws MissingYAxisParam {@see ExceptionMessages::MissingYAxisParam}
 * <br>{@see ExceptionCodes::MissingYAxisParam}
 * 
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * 
 * @throws InvalidUnitRegistryNoType {@see ExceptionMessages::InvalidUnitRegistryNoType}
 * <br>{@see ExceptionCodes::InvalidUnitRegistryNoType}
 * 
 * @throws InvalidUnitNameType {@see ExceptionMessages::InvalidUnitNameType}
 * <br>{@see ExceptionCodes::InvalidUnitNameType}
 * 
 * @throws InvalidUnitSpecialNameType {@see ExceptionMessages::InvalidUnitSpecialNameType}
 * <br>{@see ExceptionCodes::InvalidUnitSpecialNameType}
 * 
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * <br>{@see ExceptionCodes::InvalidSourceType}
 * 
 * @throws InvalidStateType {@see ExceptionMessages::InvalidStateType}
 * <br>{@see ExceptionCodes::MissingYAxisParam}
 * 
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminType}
 * 
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * <br>{@see ExceptionCodes::InvalidEduAdminType}
 * 
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityType}
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
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelType}
 * 
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * <br>{@see ExceptionCodes::InvalidCategoryType}
 * 
 * @throws InvalidUnitTypeType {@see ExceptionMessages::InvalidUnitTypeType}
 * <br>{@see ExceptionCodes::InvalidUnitTypeType}
 * 
 * @throws InvalidOperationShiftType {@see ExceptionMessages::InvalidOperationShiftType}
 * <br>{@see ExceptionCodes::InvalidOperationShiftType}
 * 
 * @throws InvalidLegalCharacterType {@see ExceptionMessages::InvalidLegalCharacterType}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterType}
 * 
 * @throws InvalidOrientationTypeType {@see ExceptionMessages::InvalidOrientationTypeType}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeType}
 * 
 * @throws InvalidSpecialTypeType {@see ExceptionMessages::InvalidSpecialTypeType}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeType} 
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 */

function StatisticUnits(
    $x_axis, $y_axis,
    $mm_id, $registry_no, $source, $name, $special_name, $state, $region_edu_admin, $edu_admin, $implementation_entity,
    $transfer_area, $prefecture, $municipality, $education_level, $category, $unit_type, $operation_shift, $legal_character, 
    $orientation_type, $special_type, $searchtype )
{
    global $db,$app;
    
    $filter = array();
    $result = array();
    $join_filter = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    
    $axis = array(
                    "source" => "sources" ,
                    "category" => "categories",
                    "state"=> "states",         
                    "region_edu_admin"=> "region_edu_admins",
                    "edu_admin"=> "edu_admins",
                    "transfer_area"=> "transfer_areas",
                    "prefecture"=> "prefectures",
                    "municipality"=> "municipalities",
                    "education_level"=> "education_levels",      
                    "unit_type"=> "unit_types",           
                    "orientation_type"=> "orientation_types",          
                    "operation_shift"=> "operation_shifts",       
                    "legal_character"=> "legal_characters",           
                    "implementation_entity"=> "implementation_entities",   
                    "special_type"=> "special_types"
);

    try
    {
//======================================================================================================================
//= Search_type
//======================================================================================================================

        if ( Validator::Missing('searchtype', $params) )
            $searchtype = SearchEnumTypes::Contain;
        else if ( SearchEnumTypes::isValidValue( $searchtype ) || SearchEnumTypes::isValidName( $searchtype ) )
            $searchtype = SearchEnumTypes::getValue($searchtype);
        else
            throw new Exception(ExceptionMessages::InvalidSearchType." : ".$searchtype, ExceptionCodes::InvalidSearchType);

//======================================================================================================================
//= $x_axis
//======================================================================================================================

        if ( !Validator::Missing('x_axis', $params) ) {
                
            if (Validator::isArray($x_axis))
                throw new Exception(ExceptionMessages::InvalidXAxisArray." : ".$x_axis, ExceptionCodes::InvalidXAxisArray);
            else if (Validator::isNull($x_axis))
                throw new Exception(ExceptionMessages::MissingXAxisValue." : ".$x_axis, ExceptionCodes::MissingYAxisValue);
            else if (Validator::isValue($x_axis)){              
                if (!array_key_exists(Validator::toValue($x_axis), $axis))
                    throw new Exception(ExceptionMessages::InvalidXAxis." : ".$x_axis, ExceptionCodes::InvalidXAxis);
                else
                    $name_x_axis = $x_axis.'_name';
                    $field_x_axis = $axis[Validator::toValue($x_axis)].'.name';
                    $join_filter[] = ' JOIN ' . $axis[Validator::toValue($x_axis)] . ' ON units.' . $x_axis.'_id = ' . $axis[Validator::toValue($x_axis)] . '.' .$x_axis.'_id';
            } 
            else 
                throw new Exception(ExceptionMessages::InvalidXAxisType." : ".$x_axis, ExceptionCodes::InvalidXAxisType); 
            
        } else { 
           throw new Exception(ExceptionMessages::MissingXAxisParam." : ".$x_axis, ExceptionCodes::MissingXAxisParam);  
        }
        
//======================================================================================================================
//= $y_axis
//======================================================================================================================

        if ( !Validator::Missing('y_axis', $params) ) {
                
            if (Validator::isArray($y_axis))
                throw new Exception(ExceptionMessages::InvalidYAxisArray." : ".$y_axis, ExceptionCodes::InvalidYAxisArray);
            else if (Validator::isNull($y_axis))
                throw new Exception(ExceptionMessages::MissingYAxisValue." : ".$y_axis, ExceptionCodes::MissingYAxisValue);
            else if (Validator::isValue($y_axis)){              
                if (!array_key_exists(Validator::toValue($y_axis), $axis))
                    throw new Exception(ExceptionMessages::InvalidYAxis." : ".$y_axis, ExceptionCodes::InvalidYAxis);
                else
                    $name_y_axis = $y_axis.'_name';
                    $field_y_axis = $axis[Validator::toValue($y_axis)].'.name';
                    $join_filter[] = ' JOIN ' . $axis[Validator::toValue($y_axis)] . ' ON units.' . $y_axis.'_id = ' . $axis[Validator::toValue($y_axis)] . '.' .$y_axis.'_id';
            } 
            else 
                throw new Exception(ExceptionMessages::InvalidYAxisType." : ".$y_axis, ExceptionCodes::InvalidYAxisType); 
            
        } else { 
           throw new Exception(ExceptionMessages::MissingYAxisParam." : ".$y_axis, ExceptionCodes::MissingYAxisParam);  
        }
        
//======================================================================================================================
//= $mm_id
//======================================================================================================================

        if ( Validator::Exists('mm_id', $params) )
        {
            $table_name = "units";
            $table_column_id = "mm_id";
            $table_column_name = "mm_id";

            $param = Validator::toArray($mm_id);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidUnitMMIDType." : ".$values, ExceptionCodes::InvalidUnitMMIDType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $registry_no
//======================================================================================================================

        if ( Validator::Exists('registry_no', $params) )
        {
            $table_name = "units";
            $table_column_id = "registry_no";
            $table_column_name = "registry_no";

            $param = Validator::toArray($registry_no);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidUnitRegistryNoType." : ".$values, ExceptionCodes::InvalidUnitRegistryNoType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $name
//======================================================================================================================

        if ( Validator::Exists('name', $params) )
        {
            $table_name = "units";
            $table_column_id = "name";
            $table_column_name = "name";

            $param = Validator::toArray($name);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                {
                    if ( $searchtype == SearchEnumTypes::Exact )
                        $paramWordsFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                    else if ( $searchtype == SearchEnumTypes::Contain )
                        $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($values).'%' );
                    else
                    {
                        $words = Validator::toArray($values, " ");

                        foreach ($words as $word)
                        {
                            switch ($searchtype)
                            {
                                case SearchEnumTypes::ContainAll :
                                case SearchEnumTypes::ContainAny :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($word).'%' );
                                    break;
                                case SearchEnumTypes::StartWith :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( Validator::toValue($word).'%' );
                                    break;
                                case SearchEnumTypes::EndWith :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($word) );
                                    break;
                            }
                        }
                    }
                }
                else
                    throw new Exception(ExceptionMessages::InvalidUnitNameType." : ".$values, ExceptionCodes::InvalidUnitNameType);

                switch ($searchtype)
                {
                    case SearchEnumTypes::ContainAny :
                        $paramFilters[] = "(" . implode(" OR ", $paramWordsFilters) . ")";
                        break;
                    default :
                        $paramFilters[] = "(" . implode(" AND ", $paramWordsFilters) . ")";
                        break;
                }

            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $special_name
//======================================================================================================================

        if ( Validator::Exists('special_name', $params) )
        {
            $table_name = "units";
            $table_column_id = "special_name";
            $table_column_name = "special_name";

            $param = Validator::toArray($special_name);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidUnitSpecialNameType." : ".$values, ExceptionCodes::InvalidUnitSpecialNameType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $source
//======================================================================================================================

        if ( Validator::Exists('source', $params) )
        {
            $table_name = "sources";
            $table_column_id = "source_id";
            $table_column_name = "name";

            $param = Validator::toArray($source);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidSourceType." : ".$values, ExceptionCodes::InvalidSourceType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";

        }

//======================================================================================================================
//= $state
//======================================================================================================================

        if ( Validator::Exists('state', $params) )
        {
            $table_name = "states";
            $table_column_id = "state_id";
            $table_column_name = "name";

            $param = Validator::toArray($state);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidStateType." : ".$values, ExceptionCodes::InvalidStateType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $region_edu_admin
//======================================================================================================================

        if ( Validator::Exists('region_edu_admin', $params) )
        {
            $table_name = "region_edu_admins";
            $table_column_id = "region_edu_admin_id";
            $table_column_name = "name";

            $param = Validator::toArray($region_edu_admin);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidRegionEduAdminType." : ".$values, ExceptionCodes::InvalidRegionEduAdminType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $edu_admin
//======================================================================================================================

        if ( Validator::Exists('edu_admin', $params) )
        {
            $table_name = "edu_admins";
            $table_column_id = "edu_admin_id";
            $table_column_name = "name";

            $param = Validator::toArray($edu_admin);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidEduAdminType." : ".$values, ExceptionCodes::InvalidEduAdminType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $implementation_entity
//======================================================================================================================

        if ( Validator::Exists('implementation_entity', $params) )
        {
            $table_name = "implementation_entities";
            $table_column_id = "implementation_entity_id";
            $table_column_name = "name";

            $param = Validator::toArray($implementation_entity);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidImplementationEntityType." : ".$values, ExceptionCodes::InvalidImplementationEntityType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $transfer_area
//======================================================================================================================

        if ( Validator::Exists('transfer_area', $params) )
        {
            $table_name = "transfer_areas";
            $table_column_id = "transfer_area_id";
            $table_column_name = "name";

            $param = Validator::toArray($transfer_area);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidTransferAreaType." : ".$values, ExceptionCodes::InvalidTransferAreaType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $prefecture
//======================================================================================================================

        if ( Validator::Exists('prefecture', $params) )
        {
            $table_name = "prefectures";
            $table_column_id = "prefecture_id";
            $table_column_name = "name";

            $param = Validator::toArray($prefecture);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidPrefectureType." : ".$values, ExceptionCodes::InvalidPrefectureType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $municipality
//======================================================================================================================

        if ( Validator::Exists('municipality', $params) )
        {
            $table_name = "municipalities";
            $table_column_id = "municipality_id";
            $table_column_name = "name";

            $param = Validator::toArray($municipality);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidMunicipalityType." : ".$values, ExceptionCodes::InvalidMunicipalityType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $education_level
//======================================================================================================================

        if ( Validator::Exists('education_level', $params) )
        {
            $table_name = "education_levels";
            $table_column_id = "education_level_id";
            $table_column_name = "name";

            $param = Validator::toArray($education_level);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidEducationLevelType." : ".$values, ExceptionCodes::InvalidEducationLevelType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $category
//======================================================================================================================

        if ( Validator::Exists('category', $params) )
        {
            $table_name = "categories";
            $table_column_id = "category_id";
            $table_column_name = "name";

            $param = Validator::toArray($category);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidCategoryType." : ".$values, ExceptionCodes::InvalidCategoryType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $unit_type
//======================================================================================================================

        if ( Validator::Exists('unit_type', $params) )
        {
            $table_name = "unit_types";
            $table_column_id = "unit_type_id";
            $table_column_name = "name";

            $param = Validator::toArray($unit_type);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidUnitTypeType." : ".$values, ExceptionCodes::InvalidUnitTypeType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $operation_shift
//======================================================================================================================

        if ( Validator::Exists('operation_shift', $params) )
        {
            $table_name = "operation_shifts";
            $table_column_id = "operation_shift_id";
            $table_column_name = "name";

            $param = Validator::toArray($operation_shift);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidOperationShiftType." : ".$values, ExceptionCodes::InvalidOperationShiftType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $legal_character
//======================================================================================================================

        if ( Validator::Exists('legal_character', $params) )
        {
            $table_name = "legal_characters";
            $table_column_id = "legal_character_id";
            $table_column_name = "name";

            $param = Validator::toArray($legal_character);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidLegalCharacterType." : ".$values, ExceptionCodes::InvalidLegalCharacterType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $orientation_type
//======================================================================================================================

        if ( Validator::Exists('orientation_type', $params) )
        {
            $table_name = "orientation_types";
            $table_column_id = "orientation_type_id";
            $table_column_name = "name";

            $param = Validator::toArray($orientation_type);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidOrientationTypeType." : ".$values, ExceptionCodes::InvalidOrientationTypeType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= $special_type
//======================================================================================================================

        if ( Validator::Exists('special_type', $params) )
        {
            $table_name = "special_types";
            $table_column_id = "special_type_id";
            $table_column_name = "name";

            $param = Validator::toArray($special_type);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidSpecialTypeType." : ".$values, ExceptionCodes::InvalidSpecialTypeType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
            $join_filter[]  = " JOIN $table_name ON units.$table_column_id = $table_name.$table_column_id";
            
        }

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        
        $join_filter = array_unique($join_filter);
        //var_dump($join_filter);die();
        
        $sqlSelect = "SELECT  $field_x_axis as $name_x_axis, $field_y_axis as $name_y_axis, count(mm_id) as total_units ";
           
        $sqlFrom = "FROM units";
        $sqlFilter = (count($join_filter) > 0 ? implode("", $join_filter) : "" );
        $sqlWhere = (count($filter) > 0 ? " WHERE " . implode(" AND ", $filter) : "" );
        $sqlGroupBy = " GROUP BY $field_x_axis , $field_y_axis";
       
        $result["filters"] = $filter ? $filter : null;

        $sql =  $sqlSelect . $sqlFrom . $sqlFilter . $sqlWhere . $sqlGroupBy;
        //echo "<br><br>".$sql."<br><br>";
        
        $stmt = $db->query( $sql );
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $result["results"] = $rows;
        
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    } 
    
    if ( Validator::isTrue( $params["debug"] ) )
    {
        $result["sql"] =  trim(preg_replace('/\s\s+/', ' ', $sql));
    }
    
    return $result;
}

?>