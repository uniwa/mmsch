<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */

header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Μονάδες</b>
 * 
 * 
 *
 * Η συνάρτηση αυτή επιστρέφει όλες τις Μονάδες σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/units
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Όνομα της Μονάδας
 * <br>Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>)
 * μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης
 *
 * Τα αποτελέσματα μπορούν να επιστραφούν με διαφορετικού Τύπους Εξαγωγής Δεδομένων.
 * <br>Μέσω των παραμέτρων Τύπος Εξαγωγής Δεδομένων (<a href="#$export">$export</a>) μπορεί να καθοριστεί ο τύπος εξαγωγής δεδομένων.
 * <br>Ο προκαθορισμένος Τύπος Εξαγωγής Δεδομένων είναι JSON
 * <br>Όταν ο Τύπος Επιστροφής Εξαγωγής έχει τιμή XLSX ή CSV τότε η τιμή του pagesize αυτόματα από το σύστημα είναι 1000 και δεν μπορεί να αλλάξει.
 * <br>Σε κάθε περιπτωση που η τιμή του count είναι 1000 για την επιστροφή όλων δεδομένων, πρέπει να υλοποιηθεί κληση του ιδίου api request με 
 * αυξημένη κατα 1 την τιμή του page καθε φορά. Επίσης είναι διακριτό το μέγεθος της σελιδοποίησης από τις τιμές του pagination.
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
 * <br>Η μεταβλητή data είναι ο πίνακας με το λεξικό
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
 * curl -X GET https://mm.sch.gr/api/units \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"state": "ΕΝΕΡΓΗ", "prefecture": "ΑΤΤΙΚΗΣ"}' 
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "state": "ΕΝΕΡΓΗ", "prefecture": "ΑΤΤΙΚΗΣ" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/units");
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
 * $params = array("state" => "ΕΝΕΡΓΗ", "prefecture" => "ΑΤΤΙΚΗΣ");
 * 
 * $curl = curl_init("https://mm.sch.gr/api/units");
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
 *        url: 'https://mm.sch.gr/api/units',
 *        dataType: "json",
 *        data: {
 *          "state": "ΕΝΕΡΓΗ", 
 *          "prefecture": "ΑΤΤΙΚΗΣ"
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
 * <a id="data"></a>Παρακάτω εμφανίζεται το λεξικό σε μορφή JSON :
 * <code>
 * {"data":[
 *  {
 *    "mm_id": 1002553,
 *    "registry_no": "9050097",
 *    "name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *    "special_name": null,
 *    "source_id": 1,
 *    "source": "SURVEY",
 *    "category_id": 1,
 *    "category": "ΣΧΟΛΙΚΕΣ ΜΟΝΑΔΕΣ",
 *    "state_id": 1,
 *    "state": "ΕΝΕΡΓΗ",
 *    "area_team_number": 1,
 *    "street_address": "ΠΥΡΡΑΣ 15",
 *    "postal_code": "11745",
 *    "fax_number": "2109335509",
 *    "phone_number": "2109335509",
 *    "email": "mail@100dim-athin.att.sch.gr",
 *    "students_count": 166,
 *    "groups_count": 9,
 *    "levels_count": 6,
 *    "tax_number": "090291213",
 *    "region_edu_admin_id": 3,
 *    "region_edu_admin": "ΑΤΤΙΚΗΣ",
 *    "edu_admin_id": 28,
 *    "edu_admin": "ΔΙΕΥΘΥΝΣΗ Π.Ε. Α΄ ΑΘΗΝΑΣ",
 *    "transfer_area_id": 27,
 *    "transfer_area": "Α΄ Αθηνών (Π.Ε.)",
 *    "prefecture_id": 3,
 *    "prefecture": "ΑΤΤΙΚΗΣ",
 *    "municipality_id": 5,
 *    "municipality": "ΑΘΗΝΑΙΩΝ",
 *    "municipality_community_id": 61,
 *    "municipality_community": "ΑΘΗΝΑΙΩΝ",
 *    "education_level_id": 1,
 *    "education_level": "ΠΡΩΤΟΒΑΘΜΙΑ",
 *    "unit_type_id": 2,
 *    "unit_type": "ΔΗΜΟΤΙΚΟ",
 *    "orientation_type_id": null,
 *    "orientation_type": null,
 *    "operation_shift_id": 3,
 *    "operation_shift": "ΟΛΟΗΜΕΡΟ",
 *    "legal_character_id": 1,
 *    "legal_character": "ΔΗΜΟΣΙΟ",
 *    "implementation_entity_id": 3,
 *    "implementation_entity": "ΕΘΝΙΚΟ & ΚΑΠΟΔΙΣΤΡΙΑΚΟ ΠΑΝ\/ΜΙΟ ΑΘΗΝΩΝ",
 *    "implementation_entity_initials": "Ε.Κ.Π.Α.",
 *    "tax_office_id": 4,
 *    "tax_office": "ΑΘΗΝΩΝ ΙΗ",
 *    "special_type_id": null,
 *    "special_type": null,
 *    "latitude": null,
 *    "longitude": null,
 *    "positioning": null,
 *    "creation_fek": null,
 *    "last_sync": "2013-11-11 22:37:52",
 *    "last_update": "2013-10-02 09:51:58",
 *    "comments": null,
 *    "version": 20,
 *    "levels": [
 *      {
 *        "level_id": 3061,
 *        "name": "Α",
 *        "groups_count": 2,
 *        "students_count": 38,
 *        "groups": [
 *          {
 *            "group_id": 6773,
 *            "name": "Α1",
 *            "students_count": 20
 *          },
 *          {
 *            "group_id": 6774,
 *            "name": "Α2",
 *            "students_count": 18
 *          }
 *        ]
 *      },
 *      {
 *        "level_id": 3062,
 *        "name": "Β",
 *        "groups_count": 2,
 *        "students_count": 29,
 *        "groups": [
 *          {
 *            "group_id": 6775,
 *            "name": "Β1",
 *            "students_count": 14
 *          },
 *          {
 *            "group_id": 6776,
 *            "name": "Β2",
 *            "students_count": 15
 *          }
 *        ]
 *      },
 *      {
 *        "level_id": 3063,
 *        "name": "Γ",
 *        "groups_count": 1,
 *        "students_count": 24,
 *        "groups": [
 *          {
 *            "group_id": 6777,
 *            "name": "Γ1",
 *            "students_count": 24
 *          }
 *        ]
 *      },
 *      {
 *        "level_id": 3064,
 *        "name": "Δ",
 *        "groups_count": 1,
 *        "students_count": 16,
 *        "groups": [
 *          {
 *            "group_id": 6778,
 *            "name": "Δ1",
 *            "students_count": 16
 *          }
 *        ]
 *      },
 *      {
 *        "level_id": 3065,
 *        "name": "Ε",
 *        "groups_count": 2,
 *        "students_count": 32,
 *        "groups": [
 *          {
 *            "group_id": 6779,
 *            "name": "Ε1",
 *            "students_count": 16
 *          },
 *          {
 *            "group_id": 6780,
 *            "name": "Ε2",
 *            "students_count": 16
 *          }
 *        ]
 *      },
 *      {
 *        "level_id": 3066,
 *        "name": "ΣΤ",
 *        "groups_count": 2,
 *        "students_count": 32,
 *        "groups": [
 *          {
 *            "group_id": 6781,
 *            "name": "ΣΤ1",
 *            "students_count": 16
 *          },
 *          {
 *            "group_id": 6782,
 *            "name": "ΣΤ2",
 *            "students_count": 16
 *          }
 *        ]
 *      }
 *    ],
 *    "host_relations": [],
 *    "guest_relations": [],
 *    "workers": [
 *      {
 *        "unit_worker_id": 973,
 *        "worker_id": 946,
 *        "registry_no": "538069",
 *        "tax_number": "018831123",
 *        "lastname": "ΣΑΡΔΕΛΗ",
 *        "firstname": "ΛΑΜΠΡΙΝΗ",
 *        "fathername": "ΒΑΣΙΛΕΙΟΣ",
 *        "fullname": "ΣΑΡΔΕΛΗ ΛΑΜΠΡΙΝΗ",
 *        "sex": "Γ",
 *        "worker_specialization_id": null,
 *        "worker_specialization": null,
 *        "worker_position_id": 1,
 *        "worker_position": "ΥΠΕΥΘΥΝΟΣ ΜΟΝΑΔΑΣ",
 *        "worker_source_id" : "0",
 *        "worker_source" : "null"
 *      }
 *    ],
 *    "unit_dns": [
 *      {
 *        "unit_dns_id": 7140,
 *        "unit_dns": "100dim-athin",
 *        "ext_dns": null
 *      }
 *    ],
 * }
 * ]}
 * </code>
 * <br>
 * 
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
 * @param mixed $municipality_community Δημοτική Ενότητα
 * <br>Η Δημοτική Ενότητα της Μονάδας (Λεξικό : {@see GetMunicipalityCommunities})
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
 * @param string $phone_number Τηλέφωνο Επικοινωνίας
 * <br>Το Τηλέφωνο Επικοινωνίας της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το τηλέφωνο επικοινωνίας)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $email Ηλεκτρονική Αλληλογραφία
 * <br>Η Ηλεκτρονική Αλληλογραφία της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την ηλεκτρονική αλληλογραφία)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $fax_number Αριθμός FAX 
 * <br>Ο Αριθμός Τηλεομοιοτυπίας (φαξ) της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με τον αριθμός FAX)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $street_address Οδός, Αριθμός  
 * <br>Η Διεύθυνση (Οδός και Αριθμός) της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την διεύθυνση)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param integer $postal_code Ταχυδρομικός Κώδικας
 * <br>Ο Ταχυδρομικός Κώδικας της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με τον ταχυδρομικό κώδικα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $tax_number Αριθμός Φορολογικού Μητρώου
 * <br>Ο Αριθμός Φορολογικού Μητρώου της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με τον αριθμός φορολογικού μητρώου)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $tax_office Δ.Ο.Υ.
 * <br>Η Δ.Ο.Υ. της Μονάδας (Λεξικό : {@see GetTaxOffices})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[integer|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $area_team_number Ομάδα Σχολείων
 * <br>Η Ομάδα Σχολείων της Μονάδας (1η έως 40η)
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με την ομάδα σχολείων)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την ομάδα σχολείων)</li>
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
 * @param integer $levels_count Πλήθος Τάξεων
 * <br>Το Πλήθος των Τάξεων της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|array[integer]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με το πλήθος τάξεων)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 *
 * @param integer $groups_count Πλήθος Τμημάτων
 * <br>Το Πλήθος των Τμημάτων της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|array[integer]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με το πλήθος τμημάτων)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param integer $students_count Πλήθος Μαθητών
 * <br>Το Πλήθος των Μαθητών της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με το πλήθος μαθητών)</li>
 *       <li>array[integer] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $latitude Γεωγραφικό Πλάτος
 * <br>Το Γεωγραφικό Πλάτος της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το γεωγραφικό πλάτος)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $longitude Γεωγραφικό Μήκος
 * <br>Το Γεωγραφικό Μήκος της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το γεωγραφικό μήκος)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $positioning Κτηριακή Θέση 
 * <br>Η Κτηριακή Θέση της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την κτηριακή θέση )</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $creation_fek Φ.Ε.Κ. (Δημιουργίας) 
 * <br>Το Φ.Ε.Κ. (Δημιουργίας) της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα Φ.Ε.Κ. Δημιουργίας )</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param midex $last_update Ημερομηνία Τελευταίας Ενημέρωσης
 * <br>Η Ημερομηνία Τελευταίας Ενημέρωσης της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{datetime|string|array[datetime|string]}
 *    <ul>
 *       <li>datetime : Ημερομηνία (Η αναζήτηση γίνεται με την ημερομηνία τελευταίας ενημέρωσης)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την ημερομηνία τελευταίας ενημέρωσης)</li>
 *       <li>array[datetime|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param midex $last_sync Ημερομηνία Τελευταίου Συγχρονισμού
 * <br>Η Ημερομηνία Τελευταίου Συγχρονισμού της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{datetime|string|array[datetime|string]}
 *    <ul>
 *       <li>datetime : Ημερομηνία (Η αναζήτηση γίνεται με την ημερομηνία τελευταίου συγχρονισμού)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με την ημερομηνία τελευταίου συγχρονισμού)</li>
 *       <li>array[datetime|string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param string $comments Παρατηρήσεις - Σχόλια
 * <br>Παρατηρήσεις - Σχόλια της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{string|array[string]}
 *    <ul>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param integer $pagesize Αριθμός Εγγραφών/Σελίδα
 * <br>Ο αριθμός των εγγραφών που θα επιστρέψουν ανα σελίδα
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφούν όλες οι εγγραφές ({@see Parameters::AllPageSize})
 * <br>Λίστα Παραμέτρων Σελιδοποίησης : {@see Parameters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *    </li>
 * </ul>
 *
 * @param integer $page Αριθμός Σελίδας
 * <br>Ο αριθμός της σελίδας με τις <a href="#$pagesize">$pagesize</a> εγγραφές που βρέθηκαν σύμφωμα με τις παραμέτρους
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφεί η πρώτη σελίδα
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *    </li>
 * </ul>
 * 
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Όνομα της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι οποιοδήποτε πεδίο επιστρέφει η συνάρτηση στον πίνακα data
 *    </li>
 * </ul>
 * 
 * @param string $ordertype Τύπος Ταξινόμησης
 * <br>Ο Τύπος Ταξινόμησης με τον οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με Αύξουσα Σειρά ({@see OrderEnumTypes::ASC})
 * <br>Λίστα Τύπων Ταξινόμησης : {@see OrderEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see OrderEnumTypes}
 *    </li>
 * </ul>
 * 
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στον όνομα (<a href="#$name">$name</a>) της Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στα πεδία αυτά γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}
 *    </li>
 * </ul>
 * 
 * @param string $export Τύπος Εξαγωγής Δεδομένων
 * <br>Ο Τύπος Εξαγωγής Δεδομένων με τον οποίο θα γίνει η εξαγωγή σε συγκεκριμένη μορφή τών δεδομένων
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η εξαγωγή δεδομένων γίνεται με τον Τύπο {@see ExportDataEnumTypes::JSON}
 * <br>Λίστα Τύπων Εξαγωγής Δεδομένων : {@see ExportDataEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see ExportDataEnumTypes}
 *    </li>
 * </ul>
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>string : <b>controller</b> : Ο controller που χρησιμοποιείται</li>
 *  <li>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα</li>
 *  <li>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης</li>
 *  <li>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης</li>
 *  <li>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης</li>
 *  <li>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης</li>
 *  <li>array : <b>pagination</b> : Οι παράμετροι σελιδοποίησης των εγγραφών της κλήσης
 *      <ul>
 *          <li>integer : <b>page</b> : Ο αριθμός της σελίδας των αποτελεσμάτων</li>
 *          <li>integer : <b>maxPage</b> : Ο μέγιστος αριθμός της σελίδας των αποτελεσμάτων</li>
 *          <li>integer : <b>pagesize</b> : Ο αριθμός των εγγραφών προς επιστροφή</li>
 *      </ul>
 * </li>
 *  <li>array : <b>data</b> : Ο Πίνακας με το λεξικό
 *    <ul>
 *      <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *      <li>string : <b>registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *      <li>integer : <b>source_id</b> : Ο Κωδικός της Πρωτογενής Πηγή της Μονάδας (Λεξικό : {@see GetSources})</li>
 *      <li>string : <b>source</b> : Η Πρωτογενής Πηγή της Μονάδας (Λεξικό : {@see GetSources})</li>
 *      <li>string : <b>name</b> : Το Όνομα της Μονάδας</li>
 *      <li>string : <b>special_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *      <li>integer : <b>state_id</b> : Ο Κωδικός της Κατάστασης της Μονάδας (Λεξικό : {@see GetStates})</li>
 *      <li>string : <b>state</b> : Η Κατάσταση της Μονάδας (Λεξικό : {@see GetStates})</li>
 *      <li>integer : <b>region_edu_admin_id</b> : Ο Κωδικός της Περιφέρειας της Μονάδας (Λεξικό : {@see GetRegionEduAdmins})</li>
 *      <li>string : <b>region_edu_admin</b> : Η Περιφέρεια της Μονάδας (Λεξικό : {@see GetRegionEduAdmins})</li>
 *      <li>integer : <b>edu_admin_id</b> : Ο Κωδικός της Διεύθυνσης Εκπαίδευσης της Μονάδας (Λεξικό : {@see GetEduAdmins})</li>
 *      <li>string : <b>edu_admin</b> : Η Διεύθυνση Εκπαίδευσης της Μονάδας (Λεξικό : {@see GetEduAdmins})</li>
 *      <li>integer : <b>implementation_entity_id</b> : Ο Κωδικός της Φορεάς Υλοποίησης της μονάδας (Λεξικό : {@see GetImplementationEntities})</li>
 *      <li>string : <b>implementation_entity</b> : Ο Φοράς Υλοποίησης της μονάδας (Λεξικό : {@see GetImplementationEntities})</li>
 *      <li>string : <b>implementation_entity_initials</b> : Τα αρχικά του Φοράς Υλοποίησης της μονάδας (Λεξικό : {@see GetImplementationEntities})</li>
 *      <li>integer : <b>transfer_area_id</b> : Ο Κωδικός της Περιοχής Μετάθεσης της Μονάδας (Λεξικό : {@see GetTransferAreas})</li>
 *      <li>string : <b>transfer_area</b> : Η Περιοχή Μετάθεσης της Μονάδας (Λεξικό : {@see GetTransferAreas})</li>
 *      <li>integer : <b>prefecture_id</b> : Ο Κωδικός του Νομού της Μονάδας (Λεξικό : {@see GetPrefectures})</li>
 *      <li>string : <b>prefecture</b> : Ο Νομός της Μονάδας (Λεξικό : {@see GetPrefectures})</li>
 *      <li>integer : <b>municipality_id</b> : Ο Κωδικός του Δήμου ΟΤΑ της Μονάδας (Λεξικό : {@see GetMunicipalities})</li>
 *      <li>string : <b>municipality</b> : Ο Δήμος ΟΤΑ της Μονάδας (Λεξικό : {@see GetMunicipalities})</li>
 *      <li>integer : <b>municipality_community_id</b> : Η Δημοτική Ενότητα της Μονάδας (Λεξικό : {@see GetMunicipalityCommunities})</li>
 *      <li>string : <b>municipality_community</b> : Η Δημοτική Ενότητα της Μονάδας (Λεξικό : {@see GetMunicipalityCommunities})</li>
 *      <li>integer : <b>education_level_id</b> : Ο Κωδικός του Επιπέδου Εκπαίδευσης της μονάδας (Λεξικό : {@see GetEducationLevels})</li>
 *      <li>string : <b>education_level</b> : Το Επίπεδο Εκπαίδευσης της μονάδας (Λεξικό : {@see GetEducationLevels})</li>
 *      <li>string : <b>phone_number</b> : Το Τηλέφωνο Επικοινωνίας της Μονάδας</li>
 *      <li>string : <b>email</b> : Η Ηλεκτρονική Αλληλογραφία της Μονάδας</li>
 *      <li>string : <b>fax_number</b> : Ο Αριθμός Τηλεομοιοτυπίας (φαξ) της Μονάδας</li>
 *      <li>string : <b>street_address</b> : Η Διεύθυνση (Οδός και Αριθμός) της Μονάδας</li>
 *      <li>string : <b>postal_code</b> : Ο Ταχυδρομικός Κώδικας της Μονάδας</li>
 *      <li>string : <b>tax_number</b> : Ο Αριθμός Φορολογικού Μητρώου της Μονάδας</li>
 *      <li>integer : <b>tax_office_id</b> : Ο Κωδικός της Δ.Ο.Υ. της Μονάδας (Λεξικό : {@see GetTaxOffices})</li>
 *      <li>string : <b>tax_office</b> : Η Δ.Ο.Υ. της Μονάδας (Λεξικό : {@see GetTaxOffices})</li>
 *      <li>integer : <b>area_team_number</b> : Η Ομάδα Σχολείων της Μονάδας (1η έως 40η)</li>
 *      <li>integer : <b>category_id</b> : Ο Κωδικός της Κατηγορίας της Μονάδας (Λεξικό : Κατηγορίες {@see GetCategories})</li>
 *      <li>string : <b>category</b> : Η Κατηγορία της Μονάδας (Λεξικό : Κατηγορίες {@see GetCategories})</li>
 *      <li>integer : <b>unit_type_id</b> : Ο Κωδικός του Τύπου της Μονάδας (Λεξικό : Τύποι Μονάδων {@see GetUnitTypes})</li>
 *      <li>string : <b>unit_type</b> : Ο Τύπος της Μονάδας (Λεξικό : Τύποι Μονάδων {@see GetUnitTypes})</li>
 *      <li>integer : <b>operation_shift_id</b> : Ο Κωδικός του Ωραρίου Λειτουργίας της Μονάδας (Λεξικό : {@see GetOperationShifts})</li>
 *      <li>string : <b>operation_shift</b> : Το Ωράριο Λειτουργίας της Μονάδας (Λεξικό : {@see GetOperationShifts})</li>
 *      <li>integer : <b>legal_character_id</b> : Ο Κωδικός του Νομικου Χαρακτήρα της Μονάδας (Λεξικό : {@see GetLegalCharacters})</li>
 *      <li>string : <b>legal_character</b> : Ο Νομικός Χαρακτήρας της Μονάδας (Λεξικό : {@see GetLegalCharacters})</li>
 *      <li>integer : <b>orientation_type_id</b> : Ο Κωδικός του Προσανατολισμού της Μονάδας (Λεξικό : {@see GetOrientationTypes})</li>
 *      <li>string : <b>orientation_type</b> : Ο Προσανατολισμός της Μονάδας (Λεξικό : {@see GetOrientationTypes})</li>
 *      <li>integer : <b>special_type_id</b> : Ο Κωδικός του Ειδικού Χαρακτηρισμού της Μονάδας (Λεξικό : {@see GetSpecialTypes})</li>
 *      <li>string : <b>special_type</b> : Ο Ειδικός Χαρακτηρισμός της Μονάδας (Λεξικό : {@see GetSpecialTypes})</li>
 *      <li>integer : <b>levels_count</b> : Το Πλήθος των Τάξεων της Μονάδας</li>
 *      <li>integer : <b>groups_count</b> : Το Πλήθος των Τμημάτων της Μονάδας</li>
 *      <li>integer : <b>students_count</b> : Το Πλήθος των Μαθητών της Μονάδας</li>
 *      <li>string : <b>latitude</b> : Το Γεωγραφικό Πλάτος της Μονάδας</li>
 *      <li>string : <b>longitude</b> : Το Γεωγραφικό Μήκος της Μονάδας</li>
 *      <li>string : <b>positioning</b> : Η Κτηριακή Θέση της Μονάδας</li>
 *      <li>string : <b>creation_fek</b> : Το Φ.Ε.Κ. (Δημιουργίας) της Μονάδας</li>
 *      <li>datetime : <b>last_update</b> : Η Ημερομηνία Τελευταίας Ενημέρωσης της Μονάδας</li>
 *      <li>datetime : <b>last_sync</b> : Η Ημερομηνία Τελευταίου Συγχρονισμού της Μονάδας</li>
 *      <li>string : <b>comments</b> : Παρατηρήσεις - Σχόλια της Μονάδας<br><br></li>
 *      <li>string : <b>version</b> : H version συγχρονισμού των δεδομένων της Μονάδας<br><br></li>
 * 
 *      <li>array : <b>levels</b> : Πίνακας Τάξεων (Λεξικό : {@see GetLevels})
 *          <ul>
 *              <li>integer : <b>level_id</b> : Ο Κωδικός της Τάξης</li>
 *              <li>string : <b>name</b> : Το όνομα της Τάξης</li>
 *              <li>integer : <b>groups_count</b> : Το Πλήθος των Τμημάτων της Τάξης</li>
 *              <li>integer : <b>studens_count</b> : Το Πλήθος των Μαθητών της Τάξης</li>
 * 
 *              <li>array : <b>groups</b> : Πίνακας Τμημάτων (Λεξικό : {@see GetGroups})
 *                  <ul>
 *                      <li>integer : <b>group_id</b> : Ο Κωδικός του Τμήματος</li>
 *                      <li>string : <b>name</b> : Το όνομα του Τμήματος</li>
 *                      <li>integer : <b>studens_count</b> : Το Πλήθος των Μαθητών του Τμήματος</li>
 *                  </ul>
 *              </li>
 *          </ul>
 *          <br>
 *      </li>
 * 
 *      <li>array : <b>host_relations</b> : Πίνακας Host Συσχετίσεων Μονάδων (Λεξικό : {@see GetRelations})
 *          <ul>
 *              <li>integer : <b>relation_id</b> : Ο Κωδικός της Συσχέτισης</li>
 *              <li>integer : <b>host_mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *              <li>integer : <b>guest_mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *              <li>boolean : <b>relation_state</b> : Καθορίζει αν η Συσχέτιση είναι Ενεργή</li>
 *              <li>date : <b>true_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ενεργή</li>
 *              <li>string : <b>true_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ενεργή</li>
 *              <li>date : <b>false_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ανενεργή</li>
 *              <li>string : <b>false_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ανενεργή</li>
 *              <li>string : <b>relation_type</b> : Ο Τύπος Συσχέτισης των Μονάδων (Λεξικό : {@see GetRelationTypes})</li>
 *          </ul>
 *          <br>
 *      </li>
 * 
 *      <li>array : <b>guest_relations</b> : Πίνακας Guest Συσχετίσεων Μονάδων (Λεξικό : {@see GetRelations})
 *          <ul>
 *              <li>integer : <b>relation_id</b> : Ο Κωδικός της Συσχέτισης</li>
 *              <li>integer : <b>host_mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *              <li>integer : <b>guest_mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *              <li>boolean : <b>relation_state</b> : Καθορίζει αν η Συσχέτιση είναι Ενεργή</li>
 *              <li>date : <b>true_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ενεργή</li>
 *              <li>string : <b>true_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ενεργή</li>
 *              <li>date : <b>false_date</b> : Η Ημερομηνία που η Συσχέτιση έγινε Ανενεργή</li>
 *              <li>string : <b>false_fek</b> : Το ΦΕΚ όταν η Συσχέτιση έγινε Ανενεργή</li>
 *              <li>string : <b>relation_type</b> : Ο Τύπος Συσχέτισης των Μονάδων (Λεξικό : {@see GetRelationTypes})</li>
 *          </ul>
 *          <br>
 *      </li>
 * 
 *      <li>array : <b>workers</b> : Πίνακας Εργαζομένων (Λεξικό : {@see GetUnitWorkers})
 *          <ul>
 *              <li>integer : <b>unit_worker_id</b> : Το πρωτεύον κλειδί του πίνακα αντιστοίχησης Εργαζομένων-Θέση Ευθύνης</li>
 *              <li>integer : <b>worker_id</b> : Ο Κωδικός του Εργαζόμενου</li>
 *              <li>string : <b>registry_no</b> : Ο Αριθμός Μητρώου του Εργαζόμενου</li>
 *              <li>string : <b>tax_number</b> : Ο Αριθμός Φορολογικού Μητρώου του Εργαζόμενου</li>
 *              <li>string : <b>lastname</b> : Το Επώνυμο του Εργαζόμενου</li>
 *              <li>string : <b>firstname</b> : Το Όνομα του Εργαζόμενου</li>
 *              <li>string : <b>fathername</b> : Το Πατρώνυμο του Εργαζόμενου</li>
 *              <li>string : <b>fullname</b> : Το Ονοματεπώνυμο του Εργαζόμενου</li>
 *              <li>string : <b>sex</b> : Το Φύλο του Εργαζόμενου</li>
 *              <li>string : <b>worker_specialization_id</b> : Ο Κωδικός της Ειδικότητα του Εργαζομένου</li> 
 *              <li>string : <b>worker_specialization</b> : Η Ειδικότητα του Εργαζομένου (Λεξικό : {@see GetWorkerSpecializations})</li>
 *              <li>string : <b>worker_position_id</b> : Ο Κωδικός της Θέση Εργασίας του Εργαζομένου</li>
 *              <li>string : <b>worker_position</b> : Η Θέση Εργασίας του Εργαζομένου (Λεξικό : {@see GetWorkerPositions})</li>
 *              <li>integer : <b>worker_source_id</b> : Ο Κωδικός της Πρωτογενής Πηγής του Εργαζομένου</li>
 *              <li>string : <b>worker_source</b> : Η Πρωτογενής Πηγή του Εργαζομένου (Λεξικό : {@see GetSources})</li>
 *          </ul>
 *          <br>
 *      </li>
 * 
 *      <li>array : <b>unit_dns</b> : Πίνακας DNS Στοιχείων Μονάδας (Λεξικό : {@see GetUnitDns})
 *          <ul>GetUnitDns
 *              <li>integer : <b>unit_dns_id</b> : Ο Κωδικός του DNS Μονάδας</li>
 *              <li>string : <b>unit_dns</b> : Το Όνομα του DNS Μονάδας</li>
 *              <li>string : <b>unit_ext_dns</b> : Το Όνομα του ExtDNS Μονάδας</li>
 *          </ul>
 *          <br>
 *      </li>
 * 
 *    </ul>
 *   </li>
 * </ul>
 *
 * 
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * @throws InvalidUnitRegistryNoType {@see ExceptionMessages::InvalidUnitRegistryNoType}
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * @throws InvalidUnitNameType {@see ExceptionMessages::InvalidUnitNameType}
 * @throws InvalidUnitSpecialNameType {@see ExceptionMessages::InvalidUnitSpecialNameType}
 * @throws InvalidStateType {@see ExceptionMessages::InvalidStateType}
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * @throws InvalidTransferAreaType {@see ExceptionMessages::InvalidTransferAreaType}
 * @throws InvalidPrefectureType {@see ExceptionMessages::InvalidPrefectureType}
 * @throws InvalidMunicipalityType {@see ExceptionMessages::InvalidMunicipalityType}
 * @throws InvalidMunicipalityCommunityType {@see ExceptionMessages::InvalidMunicipalityCommunityType}
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * @throws InvalidUnitPhoneNumberType {@see ExceptionMessages::InvalidUnitPhoneNumberType}
 * @throws InvalidUnitEmailType {@see ExceptionMessages::InvalidUnitEmailType}
 * @throws InvalidUnitFaxNumberType {@see ExceptionMessages::InvalidUnitFaxNumberType}
 * @throws InvalidUnitStreetAddressType {@see ExceptionMessages::InvalidUnitStreetAddressType}
 * @throws InvalidUnitPostalCodeType {@see ExceptionMessages::InvalidUnitPostalCodeType}
 * @throws InvalidUnitTaxNumberType {@see ExceptionMessages::InvalidUnitTaxNumberType}
 * @throws InvalidTaxOfficeType {@see ExceptionMessages::InvalidTaxOfficeType}
 * @throws InvalidUnitAreaTeamNumberType {@see ExceptionMessages::InvalidUnitAreaTeamNumberType}
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * @throws InvalidUnitTypeType {@see ExceptionMessages::InvalidUnitTypeType}
 * @throws InvalidOperationShiftType {@see ExceptionMessages::InvalidOperationShiftType}
 * @throws InvalidLegalCharacterType {@see ExceptionMessages::InvalidLegalCharacterType}
 * @throws InvalidOrientationTypeType {@see ExceptionMessages::InvalidOrientationTypeType}
 * @throws InvalidSpecialTypeType {@see ExceptionMessages::InvalidSpecialTypeType}
 * @throws InvalidUnitLevelsCountType {@see ExceptionMessages::InvalidUnitLevelsCountType}
 * @throws InvalidUnitGroupsCountType {@see ExceptionMessages::InvalidUnitGroupsCountType}
 * @throws InvalidUnitStudentsCountType {@see ExceptionMessages::InvalidUnitStudentsCountType}
 * @throws InvalidUnitLatitudeType {@see ExceptionMessages::InvalidUnitLatitudeType}
 * @throws InvalidUnitLongitudeType {@see ExceptionMessages::InvalidUnitLongitudeType}
 * @throws InvalidUnitPositioningType {@see ExceptionMessages::InvalidUnitPositioningType}
 * @throws InvalidUnitFekType {@see ExceptionMessages::InvalidUnitFekType}
 * @throws InvalidUnitLastUpdateType {@see ExceptionMessages::InvalidUnitLastUpdateType}
 * @throws InvalidUnitLastSyncType {@see ExceptionMessages::InvalidUnitLastSyncType}
 * @throws InvalidUnitCommentsType {@see ExceptionMessages::InvalidUnitCommentsType}
 * @throws MissingPageValue {@see ExceptionMessages::MissingPageValue}
 * @throws InvalidPageArray {@see ExceptionMessages::InvalidPageArray}
 * @throws InvalidPageNumber {@see ExceptionMessages::InvalidPageNumber}
 * @throws InvalidPageType {@see ExceptionMessages::InvalidPageType}
 * @throws MissingPageSizeValue {@see ExceptionMessages::MissingPageSizeValue}
 * @throws InvalidPageSizeArray {@see ExceptionMessages::InvalidPageSizeArray}
 * @throws InvalidPageSizeNumber {@see ExceptionMessages::InvalidPageSizeNumber}
 * @throws InvalidPageSizeType {@see ExceptionMessages::InvalidPageSizeType}
 * @throws InvalidOrderBy {@see ExceptionMessages::InvalidOrderBy}
 * @throws InvalidOrderType {@see ExceptionMessages::InvalidOrderType}
 * @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}
 * @throws InvalidExportType {@see ExceptionMessages::InvalidExportType}
 * 
 * 
 */

function GetUnits(   $mm_id, $registry_no, $source, $name, $special_name, $state, $region_edu_admin, $edu_admin, $implementation_entity,
                        $transfer_area, $prefecture, $municipality, $municipality_community, $education_level, $phone_number, $email, $fax_number, $street_address, $postal_code,
                        $tax_number, $tax_office, $area_team_number, $category, $unit_type, $operation_shift, $legal_character, $orientation_type,
                        $special_type, $levels_count, $groups_count, $students_count, $latitude, $longitude, $positioning, $creation_fek, $last_update, $last_sync, $comments,
                        $pagesize, $page, $orderby, $ordertype, $searchtype, $export ) 
{
  
    global $entityManager, $app , $Options;

    $qb = $entityManager->createQueryBuilder();
    $result = array();  

    $result["data"] = array();
    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    
    try {
         
        // Set results parameters===============================================
        $export = Filters::getExportType($export, $params); 
        $page = Pagination::getPage($page, $params);
        $pagesize = (($export == 'XLSX') || ($export == 'CSV') ) ? Parameters::ExportPageSize :Pagination::getPagesize($pagesize, $params) ;   
        $searchtype = Filters::getSearchType($searchtype, $params);
        $ordertype =  Filters::getOrderType($ordertype, $params);
        $orderby = UnitsExt::getOrderBy($params, $orderby);
    
        $qb->select('u');
        $qb->from('Units', 'u');
        
//mm_id=========================================================================
        if (Validator::Exists('mm_id', $params)){
            CRUDUtils::setFilter($qb, $mm_id, "u", "mmId", "mmId", "id", ExceptionMessages::InvalidUnitMMIDType, ExceptionCodes::InvalidUnitMMIDType);
        }
        
//registry_no===================================================================
        if (Validator::Exists('registry_no', $params)){
            CRUDUtils::setFilter($qb, $registry_no, "u", "registryNo", "registryNo", "null,value", ExceptionMessages::InvalidUnitRegistryNoType, ExceptionCodes::InvalidUnitRegistryNoType);
        } 
        
//name==========================================================================
        if (Validator::Exists('name', $params)){
            CRUDUtils::setSearchFilter($qb, $name, "u", "name", $searchtype, ExceptionMessages::InvalidUnitNameType, ExceptionCodes::InvalidUnitNameType);    
        }
        
//special_name==================================================================
        if (Validator::Exists('special_name', $params)){
            CRUDUtils::setSearchFilter($qb, $special_name, "u", "specialName", $searchtype, ExceptionMessages::InvalidUnitSpecialNameType, ExceptionCodes::InvalidUnitSpecialNameType);    
        }
      
//phone_number==================================================================
        if (Validator::Exists('phone_number', $params)){
            CRUDUtils::setSearchFilter($qb, $phone_number, "u", "phoneNumber", $searchtype, ExceptionMessages::InvalidUnitPhoneNumberType, ExceptionCodes::InvalidUnitPhoneNumberType);    
        }
        
//email=========================================================================
        if (Validator::Exists('email', $params)){
            CRUDUtils::setFilter($qb, $email, "u", "email", "email", "null,value", ExceptionMessages::InvalidUnitEmailType, ExceptionCodes::InvalidUnitEmailType);
        }
        
//fax_number====================================================================
        if (Validator::Exists('fax_number', $params)){
            CRUDUtils::setFilter($qb, $fax_number, "u", "faxNumber", "faxNumber", "null,value", ExceptionMessages::InvalidUnitFaxNumberType, ExceptionCodes::InvalidUnitFaxNumberType);
        }

//street_address================================================================
        if (Validator::Exists('street_address', $params)){
            CRUDUtils::setSearchFilter($qb, $street_address, "u", "streetAddress", $searchtype, ExceptionMessages::InvalidUnitStreetAddressType, ExceptionCodes::InvalidUnitStreetAddressType);    
        }

//postal_code===================================================================
        if (Validator::Exists('postal_code', $params)){
            CRUDUtils::setFilter($qb, $postal_code, "u", "postalCode", "postalCode", "null,value", ExceptionMessages::InvalidUnitPostalCodeType, ExceptionCodes::InvalidUnitPostalCodeType);
        }
        
//tax_number====================================================================
        if (Validator::Exists('tax_number', $params)){
            CRUDUtils::setFilter($qb, $tax_number, "u", "taxNumber", "taxNumber", "null,value", ExceptionMessages::InvalidUnitTaxNumberType, ExceptionCodes::InvalidUnitTaxNumberType);
        }
        
//area_team_number==============================================================
        if (Validator::Exists('area_team_number', $params)){
            CRUDUtils::setFilter($qb, $area_team_number, "u", "areaTeamNumber", "areaTeamNumber", "null,value", ExceptionMessages::InvalidUnitAreaTeamNumberType, ExceptionCodes::InvalidUnitAreaTeamNumberType);
        }

//levels_count==============================================================
        if (Validator::Exists('levels_count', $params)){
            CRUDUtils::setFilter($qb, $levels_count, "u", "levelsCount", "levelsCount", "null,value", ExceptionMessages::InvalidUnitLevelsCountType, ExceptionCodes::InvalidUnitLevelsCountType);
        }
        
//groups_count==============================================================
        if (Validator::Exists('groups_count', $params)){
            CRUDUtils::setFilter($qb, $groups_count, "u", "groupsCount", "groupsCount", "null,value", ExceptionMessages::InvalidUnitGroupsCountType, ExceptionCodes::InvalidUnitGroupsCountType);
        }
        
//students_count==============================================================
        if (Validator::Exists('students_count', $params)){
            CRUDUtils::setFilter($qb, $students_count, "u", "studentsCount", "studentsCount", "null,value", ExceptionMessages::InvalidUnitStudentsCountType, ExceptionCodes::InvalidUnitStudentsCountType);
        }
        
//latitude==============================================================
        if (Validator::Exists('latitude', $params)){
            CRUDUtils::setFilter($qb, $latitude, "u", "latitude", "latitude", "null,value", ExceptionMessages::InvalidUnitLatitudeType, ExceptionCodes::InvalidUnitLatitudeType);
        }
        
//longitude==============================================================
        if (Validator::Exists('longitude', $params)){
            CRUDUtils::setFilter($qb, $longitude, "u", "longitude", "longitude", "null,value", ExceptionMessages::InvalidUnitLongitudeType, ExceptionCodes::InvalidUnitLongitudeType);
        }
        
//positioning==============================================================
        if (Validator::Exists('positioning', $params)){
            CRUDUtils::setFilter($qb, $positioning, "u", "positioning", "positioning", "null,value", ExceptionMessages::InvalidUnitPositioningType, ExceptionCodes::InvalidUnitPositioningType);
        }
        
//creation_fek================================================================
   if (Validator::Exists('creation_fek', $params)){
       CRUDUtils::setSearchFilter($qb, $creation_fek, "u", "creationFek", $searchtype, ExceptionMessages::InvalidUnitCreationFekType, ExceptionCodes::InvalidUnitCreationFekType);    
   }
   
//last_update================================================================
   if (Validator::Exists('last_update', $params)){
       CRUDUtils::setSearchFilter($qb, $last_update, "u", "lastUpdate", $searchtype, ExceptionMessages::InvalidUnitLastUpdateType, ExceptionCodes::InvalidUnitLastUpdateType);    
   }
   
//last_sync================================================================
   if (Validator::Exists('last_sync', $params)){
       CRUDUtils::setSearchFilter($qb, $last_sync, "u", "lastSync", $searchtype, ExceptionMessages::InvalidUnitLastSyncType, ExceptionCodes::InvalidUnitLastSyncType);    
   }
             
//comments================================================================
        if (Validator::Exists('comments', $params)){
            CRUDUtils::setSearchFilter($qb, $comments, "u", "comments", $searchtype, ExceptionMessages::InvalidUnitCommentsType, ExceptionCodes::InvalidUnitCommentsType);    
        }

//source========================================================================
        if (Validator::Exists('source', $params)){
            $qb->leftjoin('u.source', 'sr');
            CRUDUtils::setFilter($qb, $source, "sr", "sourceId", "name", "null,id,value", ExceptionMessages::InvalidSourceType, ExceptionCodes::InvalidSourceType);
        }
        
//state=========================================================================
        if (Validator::Exists('state', $params)){
            $qb->leftjoin('u.state', 'st');
            CRUDUtils::setFilter($qb, $state, "st", "stateId", "name", "null,id,value", ExceptionMessages::InvalidStateType, ExceptionCodes::InvalidStateType);
        }
        
//region_edu_admin==============================================================
        if (Validator::Exists('region_edu_admin', $params)){
            $qb->leftjoin('u.regionEduAdmin', 'rea');
            CRUDUtils::setFilter($qb, $region_edu_admin, "rea", "regionEduAdminId", "name", "null,id,value", ExceptionMessages::InvalidRegionEduAdminType, ExceptionCodes::InvalidRegionEduAdminType);
        }
        
//edu_admin=====================================================================
        if (Validator::Exists('edu_admin', $params)){
            $qb->leftjoin('u.eduAdmin', 'ea');
            CRUDUtils::setFilter($qb, $edu_admin, "ea", "eduAdminId", "name", "null,id,value", ExceptionMessages::InvalidEduAdminType, ExceptionCodes::InvalidEduAdminType);
        }
        
//implementation_entity=========================================================
        if (Validator::Exists('implementation_entity', $params)){
            $qb->leftjoin('u.implementationEntity', 'ie');
            CRUDUtils::setFilter($qb, $implementation_entity, "ie", "implementationEntityId", "name", "null,id,value", ExceptionMessages::InvalidImplementationEntityType, ExceptionCodes::InvalidImplementationEntityType);
        }
        
//transfer_area=================================================================
        if (Validator::Exists('transfer_area', $params)){
            $qb->leftjoin('u.transferArea', 'ta');
            CRUDUtils::setFilter($qb, $transfer_area, "ta", "transferAreaId", "name", "null,id,value", ExceptionMessages::InvalidTransferAreaType, ExceptionCodes::InvalidTransferAreaType);
        }
        
//prefecture====================================================================
        if (Validator::Exists('prefecture', $params)){
            $qb->leftjoin('u.prefecture', 'p');
            CRUDUtils::setFilter($qb, $prefecture, "p", "prefectureId", "name", "null,id,value", ExceptionMessages::InvalidPrefectureType, ExceptionCodes::InvalidPrefectureType);
        }
        
//municipality==================================================================
        if (Validator::Exists('municipality', $params)){
            $qb->leftjoin('u.municipality', 'm');
            CRUDUtils::setFilter($qb, $municipality, "m", "municipalityId", "name", "null,id,value", ExceptionMessages::InvalidMunicipalityType, ExceptionCodes::InvalidMunicipalityType);
        }
        
//municipality_community========================================================
        if (Validator::Exists('municipality_community', $params)){
            $qb->leftjoin('u.municipalityCommunity', 'mc');
            CRUDUtils::setFilter($qb, $municipality_community, "mc", "municipalityCommunityId", "name", "null,id,value", ExceptionMessages::InvalidMunicipalityCommunityType, ExceptionCodes::InvalidMunicipalityCommunityType);
        }
      
//education_level===============================================================
        if (Validator::Exists('education_level', $params)){
            $qb->leftjoin('u.educationLevel', 'el');
            CRUDUtils::setFilter($qb, $education_level, "el", "educationLevelId", "name", "null,id,value", ExceptionMessages::InvalidEducationLevelType, ExceptionCodes::InvalidEducationLevelType);
        }
        
//tax_office====================================================================
        if (Validator::Exists('tax_office', $params)){
            $qb->leftjoin('u.taxOffice', 'to');
            CRUDUtils::setFilter($qb, $tax_office, "to", "taxOfficeId", "name", "null,id,value", ExceptionMessages::InvalidTaxOfficeType, ExceptionCodes::InvalidTaxOfficeType);
        }
          
 //category=====================================================================
        if (Validator::Exists('category', $params)){
            $qb->leftjoin('u.category', 'c');
            CRUDUtils::setFilter($qb, $category, "c", "categoryId", "name", "null,id,value", ExceptionMessages::InvalidCategoryType, ExceptionCodes::InvalidCategoryType);
        }
        
 //unit_type====================================================================
        if (Validator::Exists('unit_type', $params)){
            $qb->leftjoin('u.unitType', 'ut');
            CRUDUtils::setFilter($qb, $unit_type, "ut", "unitTypeId", "name", "null,id,value", ExceptionMessages::InvalidUnitTypeType, ExceptionCodes::InvalidUnitTypeType);
        }

 //operation_shift==============================================================
        if (Validator::Exists('operation_shift', $params)){
            $qb->leftjoin('u.operationShift', 'os');
            CRUDUtils::setFilter($qb, $operation_shift, "os", "operationShiftId", "name", "null,id,value", ExceptionMessages::InvalidOperationShiftType, ExceptionCodes::InvalidOperationShiftType);
        }
        
 //legal_character==============================================================
        if (Validator::Exists('legal_character', $params)){
            $qb->leftjoin('u.legalCharacter', 'lc');
            CRUDUtils::setFilter($qb, $legal_character, "lc", "legalCharacterId", "name", "null,id,value", ExceptionMessages::InvalidLegalCharacterType, ExceptionCodes::InvalidLegalCharacterType);
        } 
        
 //orientation_type=============================================================
        if (Validator::Exists('orientation_type', $params)){
            $qb->leftjoin('u.orientationType', 'ot');
            CRUDUtils::setFilter($qb, $orientation_type, "ot", "orientationTypeId", "name", "null,id,value", ExceptionMessages::InvalidOrientationTypeType, ExceptionCodes::InvalidOrientationTypeType);
        }
        
 //special_type=================================================================
        if (Validator::Exists('special_type', $params)){
            $qb->leftjoin('u.specialType', 'st');
            CRUDUtils::setFilter($qb, $special_type, "st", "specialTypeId", "name", "null,id,value", ExceptionMessages::InvalidSpecialTypeType, ExceptionCodes::InvalidSpecialTypeType);
        }
        
//joins=========================================================================
        
//            $qb->leftjoin('u.hostRelations', 'hr');
//            $qb->leftjoin('hr.relationType', 'rt');
//            $qb->leftjoin('u.unitDns', 'ud');
//            $qb->leftjoin('u.levels', 'l');
//            $qb->leftjoin('l.groups', 'g');
//            $qb->leftjoin('u.unitWorkers', 'uw');
//            $qb->leftjoin('uw.worker', 'w');
//            $qb->leftjoin('uw.workerPosition', 'wp');
//            $qb->leftjoin('w.workerSpecialization', 'ws');
//            $qb->leftjoin('w.source', 's');

//pagination and results========================================================
        $qb->orderBy(array_search($orderby, UnitsExt::getColumns() ), $ordertype);
        //        echo  $qb->getQuery()->getSQL();;
        //        die();
        
        $results = new Doctrine\ORM\Tools\Pagination\Paginator($qb->getQuery());
        $result["total"] = count($results);
        $results->getQuery()->setFirstResult($pagesize * ($page-1));
        $pagesize!==Parameters::AllPageSize ? $results->getQuery()->setMaxResults($pagesize) : null;
        
        //UNITS results=========================================================
        $count = 0;
        foreach ($results as $unit)
        {
            
            $doctrineUnit = $entityManager->getRepository('Units')->find($unit->getMmId());
            $logEntries = $entityManager->getRepository('Gedmo\Loggable\Entity\LogEntry')->getLogEntries($doctrineUnit);

            $data = array(
                            "mm_id"                 => (int)$unit->getMmId(),
                            "registry_no"           => $unit->getRegistryNo(),
                            "name"                  => $unit->getName(),
                            "special_name"          => $unit->getSpecialName(),
                            "source_id"                 => Validator::IsNull($unit->getSource()) ? Validator::ToNull() : $unit->getSource()->getSourceId(),
                            "source"                    => Validator::IsNull($unit->getSource()) ? Validator::ToNull() : $unit->getSource()->getName(),
                            "category_id"               => Validator::IsNull($unit->getCategory()) ? Validator::ToNull() : $unit->getCategory()->getCategoryId(),
                            "category"                  => Validator::IsNull($unit->getCategory()) ? Validator::ToNull() : $unit->getCategory()->getName(),
                            "state_id"                  => Validator::IsNull($unit->getState()) ? Validator::ToNull() : $unit->getState()->getStateId(),
                            "state"                     => Validator::IsNull($unit->getState()) ? Validator::ToNull() : $unit->getState()->getName(),
                            //"area_team_number"      => $unit->getAreaTeamNumber(),
                            "street_address"        => $unit->getStreetAddress(),
                            "postal_code"           => $unit->getPostalCode(),
                            "fax_number"            => $unit->getFaxNumber(),
                            "phone_number"          => $unit->getPhoneNumber(),
                            "email"                 => $unit->getEmail(),
                            //"students_count"        => $unit->getStudentsCount(),
                            //"groups_count"          => $unit->getGroupsCount(),
                            //"levels_count"          => $unit->getLevelsCount(),
                            "tax_number"            => $unit->getTaxNumber(),
                            "region_edu_admin_id"       => Validator::IsNull($unit->getRegionEduAdmin()) ? Validator::ToNull() : $unit->getRegionEduAdmin()->getRegionEduAdminId(),
                            "region_edu_admin"          => Validator::IsNull($unit->getRegionEduAdmin()) ? Validator::ToNull() : $unit->getRegionEduAdmin()->getName(),
                            "edu_admin_id"              => Validator::IsNull($unit->getEduAdmin()) ? Validator::ToNull() : $unit->getEduAdmin()->getEduAdminId(),
                            "edu_admin"                 => Validator::IsNull($unit->getEduAdmin()) ? Validator::ToNull() : $unit->getEduAdmin()->getName(),
                            "transfer_area_id"         => Validator::IsNull($unit->getTransferArea()) ? Validator::ToNull() : $unit->getTransferArea()->getTransferAreaId(),
                            "transfer_area"            => Validator::IsNull($unit->getTransferArea()) ? Validator::ToNull() : $unit->getTransferArea()->getName(),
                            "prefecture_id"            => Validator::IsNull($unit->getPrefecture()) ? Validator::ToNull() : $unit->getPrefecture()->getPrefectureId(),
                            "prefecture"               => Validator::IsNull($unit->getPrefecture()) ? Validator::ToNull() : $unit->getPrefecture()->getName(),
                            "municipality_id"          => Validator::IsNull($unit->getMunicipality()) ? Validator::ToNull() : $unit->getMunicipality()->getMunicipalityId(),
                            "municipality"             => Validator::IsNull($unit->getMunicipality()) ? Validator::ToNull() : $unit->getMunicipality()->getName(),
                            "municipality_community_id"          => Validator::IsNull($unit->getMunicipalityCommunity()) ? Validator::ToNull() : $unit->getMunicipalityCommunity()->getMunicipalityCommunityId(),
                            "municipality_community"             => Validator::IsNull($unit->getMunicipalityCommunity()) ? Validator::ToNull() : $unit->getMunicipalityCommunity()->getName(),
                            "education_level_id"       => Validator::IsNull($unit->getEducationLevel()) ? Validator::ToNull() : $unit->getEducationLevel()->getEducationLevelId(),
                            "education_level"          => Validator::IsNull($unit->getEducationLevel()) ? Validator::ToNull() : $unit->getEducationLevel()->getName(),
                            "unit_type_id"             => Validator::IsNull($unit->getUnitType()) ? Validator::ToNull() : $unit->getUnitType()->getUnitTypeId(),
                            "unit_type"                => Validator::IsNull($unit->getUnitType()) ? Validator::ToNull() : $unit->getUnitType()->getName(),
                            "orientation_type_id"      => Validator::IsNull($unit->getOrientationType()) ? Validator::ToNull() : $unit->getOrientationType()->getOrientationTypeId(),
                            "orientation_type"         => Validator::IsNull($unit->getOrientationType()) ? Validator::ToNull() : $unit->getOrientationType()->getName(),
                            "operation_shift_id"       => Validator::IsNull($unit->getOperationShift()) ? Validator::ToNull() : $unit->getOperationShift()->getOperationShiftId(),
                            "operation_shift"          => Validator::IsNull($unit->getOperationShift()) ? Validator::ToNull() : $unit->getOperationShift()->getName(),
                            "legal_character_id"       => Validator::IsNull($unit->getLegalCharacter()) ? Validator::ToNull() : $unit->getLegalCharacter()->getLegalCharacterId(),
                            "legal_character"          => Validator::IsNull($unit->getLegalCharacter()) ? Validator::ToNull() : $unit->getLegalCharacter()->getName(),
                            "implementation_entity_id" => Validator::IsNull($unit->getImplementationEntity()) ? Validator::ToNull() : $unit->getImplementationEntity()->getImplementationEntityId(),
                            "implementation_entity"    => Validator::IsNull($unit->getImplementationEntity()) ? Validator::ToNull() : $unit->getImplementationEntity()->getName(),
                            "implementation_entity_initials" => Validator::IsNull($unit->getImplementationEntity()) ? Validator::ToNull() : $unit->getImplementationEntity()->getInitials(),
                            "tax_office_id"            => Validator::IsNull($unit->getTaxOffice()) ? Validator::ToNull() : $unit->getTaxOffice()->getTaxOfficeId(),
                            "tax_office"               => Validator::IsNull($unit->getTaxOffice()) ? Validator::ToNull() : $unit->getTaxOffice()->getName(),
                            "special_type_id"          => Validator::IsNull($unit->getSpecialType()) ? Validator::ToNull() : $unit->getSpecialType()->getSpecialTypeId(),
                            "special_type"             => Validator::IsNull($unit->getSpecialType()) ? Validator::ToNull() : $unit->getSpecialType()->getName(),
                            "latitude"          => $unit->getLatitude(),
                            "longitude"         => $unit->getLongitude(),
                            "positioning"       => $unit->getPositioning(),
                            "creation_fek"      => $unit->getCreationFek(),
                            "last_sync"         => ($unit->getLastSync() instanceof \DateTime)? $unit->getLastSync()->format('Y-m-d H:i:s') : null,
                            "last_update"       => ($unit->getLastUpdate() instanceof \DateTime)? $unit->getLastUpdate()->format('Y-m-d H:i:s') : null,
                            "comments"          => $unit->getComments(),
                            "version"                  => count($logEntries)
                        );
            
            if($app->request->userRoles != 'GUEST') {
                //LEVELS results================================================
//                $data["levels"] = array();
//                foreach ($unit->getLevels() as $level) {
//                    $levels = array(    "level_id"       => $level->getLevelId(),
//                                        "name"           => $level->getName(),
//                                        "groups_count"   => $level->getGroupsCount(),
//                                        "students_count" => $level->getStudentsCount()
//                                    );
//
//                    //LEVELS-GROUPS results=====================================
//                    $levels["groups"] = array();
//                    foreach ($level->getGroups() as $group) {
//                        $levels["groups"][] = array(
//                                                        "group_id"       => $group->getGroupId(),
//                                                        "name"           => $group->getName(),
//                                                        "students_count" => $group->getStudentsCount()
//                                                    );
//
//                    }    
//
//                $data["levels"][] = $levels;
//                }

                //HOST_RELATIONS results========================================
                $data["host_relations"] = array();
                foreach ($unit->getHostRelations() as $host_relation) {
                    $data["host_relations"][] = array(  "relation_id"        => $host_relation->getRelationId(),
                                                        "guest_mm_id"        => Validator::IsNull($host_relation->getGuestMm()) ? Validator::ToNull() : $host_relation->getGuestMm()->getMmId(),
                                                        "guest_registry_no"  => Validator::IsNull($host_relation->getGuestMm()) ? Validator::ToNull() : $host_relation->getGuestMm()->getRegistryNo(),
                                                        "guest_name"         => Validator::IsNull($host_relation->getGuestMm()) ? Validator::ToNull() : $host_relation->getGuestMm()->getName(),
                                                        "guest_special_name" => Validator::IsNull($host_relation->getGuestMm()) ? Validator::ToNull() : $host_relation->getGuestMm()->getSpecialName(),
                                                        "relation_state"     => $host_relation->getRelationState(),
                                                        "true_date"          => $host_relation->getTrueDate(),
                                                        "true_fek"           => $host_relation->getTrueFek(),
                                                        "false_date"         => $host_relation->getFalseDate(),
                                                        "false_fek"          => $host_relation->getFalseFek(),
                                                        "relation_type_id"   => Validator::IsNull($host_relation->getRelationType()) ? Validator::ToNull() : $host_relation->getRelationType()->getRelationTypeId(),
                                                        "relation_type"      => Validator::IsNull($host_relation->getRelationType()) ? Validator::ToNull() : $host_relation->getRelationType()->getName()
                                                    );
                }

                //GUEST_RELATIONS results=======================================
                $data["guest_relations"] = array();
                foreach ($unit->getGuestRelations() as $guest_relation) {
                    $data["guest_relations"][] = array( "relation_id"        => $guest_relation->getRelationId(),
                                                        "host_mm_id"         => Validator::IsNull($guest_relation->getHostMm()) ? Validator::ToNull() : $guest_relation->getHostMm()->getMmId(),
                                                        "host_registry_no"   => Validator::IsNull($guest_relation->getHostMm()) ? Validator::ToNull() : $guest_relation->getHostMm()->getRegistryNo(),
                                                        "host_name"          => Validator::IsNull($guest_relation->getHostMm()) ? Validator::ToNull() : $guest_relation->getHostMm()->getName(),
                                                        "host_special_name"  => Validator::IsNull($guest_relation->getHostMm()) ? Validator::ToNull() : $guest_relation->getHostMm()->getSpecialName(),
                                                        "relation_state"     => $guest_relation->getRelationState(),
                                                        "true_date"          => $guest_relation->getTrueDate(),
                                                        "true_fek"           => $guest_relation->getTrueFek(),
                                                        "false_date"         => $guest_relation->getFalseDate(),
                                                        "false_fek"          => $guest_relation->getFalseFek(),
                                                        "relation_type_id"   => Validator::IsNull($guest_relation->getRelationType()) ? Validator::ToNull() : $guest_relation->getRelationType()->getRelationTypeId(),
                                                        "relation_type"      => Validator::IsNull($guest_relation->getRelationType()) ? Validator::ToNull() : $guest_relation->getRelationType()->getName()
                                                    );
                }

                //UNIT_WORKERS results==========================================
                $data["workers"] = array();
                foreach ($unit->getUnitWorkers() as $unit_worker) {
                    $data["workers"][] = array( "unit_worker_id"   => $unit_worker->getUnitWorkerId(),
                                                "worker_id"        => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getWorkerId(),
                                                "registry_no"      => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getRegistryNo(),
                                                "tax_number"               => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getTaxNumber(),
                                                "lastname"                 => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getLastname(),
                                                "firstname"                => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getFirstname(),
                                                "fathername"               => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getFathername(),
                                                "fullname"                 => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getLastname().' '.$unit_worker->getWorker()->getFirstname(),
                                                "sex"                      => Validator::IsNull($unit_worker->getWorker()) ? Validator::ToNull() : $unit_worker->getWorker()->getSex(),
                                                "worker_specialization_id" => Validator::IsNull($unit_worker->getWorker()->getWorkerSpecialization()) ? Validator::ToNull() : $unit_worker->getWorker()->getWorkerSpecialization()->getWorkerSpecializationId(),
                                                "worker_specialization"    => Validator::IsNull($unit_worker->getWorker()->getWorkerSpecialization()) ? Validator::ToNull() : $unit_worker->getWorker()->getWorkerSpecialization()->getName(),
                                                "worker_position_id"       => Validator::IsNull($unit_worker->getWorkerPosition()) ? Validator::ToNull() : $unit_worker->getWorkerPosition()->getWorkerPositionId(),
                                                "worker_position"          => Validator::IsNull($unit_worker->getWorkerPosition()) ? Validator::ToNull() : $unit_worker->getWorkerPosition()->getName(),
                                                "worker_source_id"         => Validator::IsNull($unit_worker->getWorker()->getSource()) ? Validator::ToNull() : $unit_worker->getWorker()->getSource()->getSourceId(),
                                                "worker_source"            => Validator::IsNull($unit_worker->getWorker()->getSource()) ? Validator::ToNull() : $unit_worker->getWorker()->getSource()->getName()
                                               );
                }
                
                //UNIT_DNS results==============================================
                $data["unit_dns"] = array();
                foreach ($unit->getUnitDns() as $unit_dns) {
                    $data["unit_dns"][] = array(  "unit_dns_id"     => $unit_dns->getUnitDnsId(),
                                                  "unit_dns"        => $unit_dns->getUnitDns(),
                                                  "unit_ext_dns"    => $unit_dns->getUnitExtDns()
                                                );
                }
                
            }
            
            //==================================================================
            $count++;
            $result["data"][] = $data;
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
      
   return UnitsExt::exportResults($export, $result);
    
}

?>