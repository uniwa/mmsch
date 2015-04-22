<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Στατιστικά Μονάδων</b>
 * 
 * 
 *
 * Η συνάρτηση αυτή επιστρέφει Στατιστικά Μονάδων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/statistic_units
 *
 * <br><b>Πίνακας Axis</b>
 * <br>Στον Πίνακα Axis περιέχονται τα ονόματα των παραμέτρων με βαη τα οποίο ο χρήστης μπορέι δημιουργήσει
 * δισδιαστατο πίνακα αποτελεσματων με άξονες x,y γαι την προβολή στατιστικων αποτελεσμάτων.
 * <br>Αποδεκτές τιμές 
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
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 * <br>Οι παράμετροι μπορούν να πάρουν τιμή "NULL" για να αναζητήσουν τις κενές εγγραφές στα αντίστοιχα πεδία
 *
 *
 * <br><b>Πίνακας Αποτελεσμάτων</b>
 * <br>Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση
 * <br>Όλες οι μεταβλητές επιστρέφονται σε ένα πίνακα σε JSON μορφή
 * <br>Η μεταβλητή status καθορίζει αν η εκτέλεση της συνάρτησης ήταν επιτυχής (κωδικός 200) ή προέκυψε κάποιο σφάλμα
 *
 *
 * <br><b>Πίνακας Σφαλμάτων</b>
 * <br>Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που μπορεί
 * να προκύψουν κατά την κλήση της συνάρτησης
 * <br>Οι περιγραφές των Σφαλμάτων καθώς και οι Κωδικοί τους είναι διαθέσιμες μέσω του πίνακα
 * Μηνύματα Σφαλμάτων ({@see ExceptionMessages}) και Κωδικοί Σφαλμάτων ({@see ExceptionCodes}) αντίστοιχα
 *
 *
 * <br><b>Παραδείγματα Κλήσης</b>
 * <br>Παρακάτω εμφανίζεται μια σειρά από παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους :
 * <br><a href="#cURL">cURL</a> | <a href="#JavaScript">JavaScript</a> | <a href="#PHP">PHP</a> | <a href="#Ajax">Ajax</a>
 *
 * <br>
 *
 * 
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 * curl -X GET https://mm.sch.gr/api/statistic_units \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"state": "1", "municipality": "1", "x_axis":"unit_type", "y_axis":"edu_admin"}' 
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "state": "1", "municipality": "1", "x_axis":"unit_type", "y_axis":"edu_admin" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/statistic_units");
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
 * <a id="PHP"></a>Παράδειγμα κλήσης της συνάρτησης με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $params = array("state" => "1", "municipality" => "1", "x_axis" => "unit_type","y_axis" => "edu_admin" );
 * 
 * $curl = curl_init("https://mm.sch.gr/api/statistic_units");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
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
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'GET',
 *        url: 'https://mm.sch.gr/api/statistic_units',
 *        dataType: "json",
 *        data: {
 *          "state": "1", 
 *          "municipality": "1"
 *          "x_axis":"unit_type",
 *          "y_axis":"edu_admin"
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
 * <a id="data"></a>Παρακάτω εμφανίζεται το αποτέλεσμα σε μορφή JSON :
 * <code>
 *
 * {
 * "method":"StatisticUnits",
 * "filters":["(states.state_id = '1')","(municipalities.municipality_id = '1')"],
 *       {
 *           "unit_type_name": "ΓΕΝΙΚΟ ΛΥΚΕΙΟ",
 *           "edu_admin_name": "ΔΙΕΥΘΥΝΣΗ Δ.Ε. ΑΙΤΩΛ/ΝΙΑΣ",
 *           "total_units": "5"
 *       },
 *       {
 *           "unit_type_name": "ΓΥΜΝΑΣΙΟ",
 *           "edu_admin_name": "ΔΙΕΥΘΥΝΣΗ Δ.Ε. ΑΙΤΩΛ/ΝΙΑΣ",
 *           "total_units": "8"
 *       },
 *       {
 *           "unit_type_name": "ΔΗΜΟΤΙΚΟ",
 *           "edu_admin_name": "ΔΙΕΥΘΥΝΣΗ Π.Ε. ΑΙΤΩΛΟΑΚΑΡΝΑΝΙΑΣ",
 *          "total_units": "27"
 *       },
 *       {
 *           "unit_type_name": "ΕΠΑΓΓΕΛΜΑΤΙΚΗ ΣΧΟΛΗ",
 *           "edu_admin_name": "ΔΙΕΥΘΥΝΣΗ Δ.Ε. ΑΙΤΩΛ/ΝΙΑΣ",
 *           "total_units": "1"
 *       },
 *       {
 *           "unit_type_name": "ΕΠΑΓΓΕΛΜΑΤΙΚΟ ΛΥΚΕΙΟ",
 *           "edu_admin_name": "ΔΙΕΥΘΥΝΣΗ Δ.Ε. ΑΙΤΩΛ/ΝΙΑΣ",
 *           "total_units": "2"
 *       },
 *       {
 *           "unit_type_name": "ΕΡΓΑΣΤΗΡΙΑΚΟ ΚΕΝΤΡΟ",
 *           "edu_admin_name": "ΔΙΕΥΘΥΝΣΗ Δ.Ε. ΑΙΤΩΛ/ΝΙΑΣ",
 *           "total_units": "1"
 *       },
 *       {
 *           "unit_type_name": "ΝΗΠΙΑΓΩΓΕΙΟ",
 *           "edu_admin_name": "ΔΙΕΥΘΥΝΣΗ Π.Ε. ΑΙΤΩΛΟΑΚΑΡΝΑΝΙΑΣ",
 *           "total_units": "25"
 *       }
 *   ],
 *   "status": 200,
 *   "message": "success"
 * }
 * </code>
 * <br>
 * 
 * @param integer $x_axis Άξονας x του πίνακα
 * <br>Η παράμετρος μπορέι να είναι οποιαδήποτε τιμή από τον πίνακα axis 
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param integer $y_axis  Άξονας y του πίνακα
 * <br>Η παράμετρος μπορέι να είναι οποιαδήποτε τιμή από τον πίνακα axis 
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 *  
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|array[integer]
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 *
 *  
 * @param mixed $registry_no Κωδικός ΥΠΕΠΘ
 * <br>Ο Κωδικός ΥΠΕΠΘ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό ΥΠΕΠΘ)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το Κωδικό ΥΠΕΠΘ)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $source Πρωτογενής Πηγή
 * <br>Η Πρωτογενής Πηγή της Μονάδας (Λεξικό : {@see GetSources})
 * <br>Λεξικό : Πρωτογενείς Πηγές Μονάδων {@see GetSources})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $name Ονομασία
 * <br>Το Όνομα της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $special_name Ειδική Ονομασία 
 * <br>Το Προσωνύμιο της Μονάδας 
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το προσωνύμιο)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $state Κατάσταση
 * <br>Η Κατάσταση της Μονάδας (Λεξικό : {@see GetStates})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $region_edu_admin Περιφέρεια
 * <br>Η Περιφέρεια της Μονάδας (Λεξικό : {@see GetRegionEduAdmins})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $edu_admin Διεύθυνση Εκπαίδευσης
 * <br>Η Διεύθυνση Εκπαίδευσης της Μονάδας (Λεξικό : {@see GetEduAdmins})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $implementation_entity Φοράς Υλοποίησης
 * <br>Ο Φοράς Υλοποίησης της μονάδας (Λεξικό : {@see GetImplementationEntities})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $transfer_area Περιοχή Μετάθεσης
 * <br>Η Περιοχή Μετάθεσης της Μονάδας (Λεξικό : {@see GetTransferAreas})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $prefecture Νομός
 * <br>Ο Νομός της Μονάδας (Λεξικό : {@see GetPrefectures})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $municipality Δήμος ΟΤΑ
 * <br>Ο Δήμος ΟΤΑ της Μονάδας (Λεξικό : {@see GetMunicipalities})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $education_level Βαθμίδα
 * <br>Το Επίπεδο Εκπαίδευσης της μονάδας (Λεξικό : {@see GetEducationLevels})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 *  
 * @param mixed $category Κατηγορία
 * <br>Η Κατηγορία της Μονάδας (Λεξικό : {@see GetCategories})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $unit_type Τύπος Μονάδας
 * <br>Ο Τύπος της Μονάδας (Λεξικό : {@see GetUnitTypes})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $operation_shift Ωράριο Λειτουργίας 
 * <br>Το Ωράριο Λειτουργίας της Μονάδας (Λεξικό : {@see GetOperationShifts})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $legal_character Νομικός Χαρακτήρας
 * <br>Ο Νομικός Χαρακτήρας της Μονάδας (Λεξικό : {@see GetLegalCharacters})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $orientation_type Προσανατολισμός
 * <br>Ο Προσανατολισμός της Μονάδας (Λεξικό : {@see GetOrientationTypes})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $special_type Ειδικός Χαρακτηρισμός
 * <br>Καθορίζει αν η Μονάδα έχει Ειδικό Χαρακτηρισμό (Λεξικό : {@see GetSpecialTypes})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 *  <li>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης</li>
 *  <li>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης</li>
 *  <li>integer : <b>filters</b> : Το φίλτρα που έχουν προστεθεί</li>
 *  <li>array : <b>result</b> : Το αποτελέσματα των στατιστικών.</li>
 *  <ul>
 *    <li>string : <b>'x_axis'_name</b> : Το Όνομα του x άξονα</li>
 *    <li>string : <b>'y_axis'_name</b> : Το Όνομα του y άξονα</li>
 *    <li>integer : <b>total_units</b> : Το πλήθος του συνδιασμού x,y</li>
 *  </ul>
 * 
 * @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}
 * 
 * @throws InvalidXAxisArray {@see ExceptionMessages::InvalidXAxisArray}
 * @throws MissingXAxisValue {@see ExceptionMessages::MissingXAxisValue}
 * @throws InvalidXAxis {@see ExceptionMessages::InvalidXAxis}
 * @throws InvalidXAxisType {@see ExceptionMessages::InvalidXAxisType}
 * @throws MissingXAxisParam {@see ExceptionMessages::MissingXAxisParam}
 * 
 * @throws InvalidYAxisArray {@see ExceptionMessages::InvalidYAxisArray}
 * @throws MissingYAxisValue {@see ExceptionMessages::MissingYAxisValue}
 * @throws InvalidYAxis {@see ExceptionMessages::InvalidYAxis}
 * @throws InvalidYAxisType {@see ExceptionMessages::InvalidYAxisType}
 * @throws MissingYAxisParam {@see ExceptionMessages::MissingYAxisParam}
 * 
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * @throws InvalidUnitRegistryNoType {@see ExceptionMessages::InvalidUnitRegistryNoType}
 * @throws InvalidNameType {@see ExceptionMessages::InvalidNameType}
 * @throws InvalidSpecialNameType {@see ExceptionMessages::InvalidSpecialNameType}
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * @throws InvalidStateType {@see ExceptionMessages::InvalidStateType}
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * @throws InvalidTransferAreaType {@see ExceptionMessages::InvalidTransferAreaType}
 * @throws InvalidPrefectureType {@see ExceptionMessages::InvalidPrefectureType}
 * @throws InvalidMunicipalityType {@see ExceptionMessages::InvalidMunicipalityType}
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * @throws InvalidUnitTypeType {@see ExceptionMessages::InvalidUnitTypeType}
 * @throws InvalidOperationShiftType {@see ExceptionMessages::InvalidOperationShiftType}
 * @throws InvalidLegalCharacterType {@see ExceptionMessages::InvalidLegalCharacterType}
 * @throws InvalidOrientationTypeType {@see ExceptionMessages::InvalidOrientationTypeType}
 * @throws InvalidSpecialTypeType {@see ExceptionMessages::InvalidSpecialTypeType}
 * 
 * 
 * 
 */

function StatisticUnits(
    $x_axis, $y_axis,
    $mm_id, $registry_no, $source, $name, $special_name, $state, $region_edu_admin, $edu_admin, $implementation_entity,
    $transfer_area, $prefecture, $municipality, $education_level, $category, $unit_type, $operation_shift, $legal_character, 
    $orientation_type, $special_type, $searchtype )
{
    global $db;
    
    $filter = array();
    $result = array();
    $join_filter = array();

    $result["method"] = __FUNCTION__;

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
                    throw new Exception(ExceptionMessages::InvalidNameType." : ".$values, ExceptionCodes::InvalidNameType);

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
                    throw new Exception(ExceptionMessages::InvalidSpecialNameType." : ".$values, ExceptionCodes::InvalidSpecialNameType);
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
        
        $result["status"] = ExceptionCodes::NoErrors;;
        $result["message"] = ExceptionMessages::NoErrors;
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    }

    if ( Validator::isTrue( $params["debug"] ) )
    {
        $result["sql"] =  trim(preg_replace('/\s\s+/', ' ', $sql));
    }
    
    return $result;
}

?>