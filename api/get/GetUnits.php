<?php
/**
 *
 * @version 1.0.3
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
 *    "area_team_number": "1",
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
 *    "host_relations": [
 *
 *    ],
 *    "guest_relations": [
 *
 *    ],
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
 *    "cpes": [
 *
 *    ],
 *    "ldaps": [
 *
 *    ],
 *    "circuits": [
 *      {
 *        "circuit_id": 543,
 *        "phone_number": "2109335964",
 *        "status": true,
 *        "paid_by_psd": true,
 *        "updated_date": "2013-12-13 18:38:00",
 *        "deactivated_date": null,
 *        "bandwidth": "24576\/1024Kbps",
 *        "readspeed": null,
 *        "circuit_type_id": "2",
 *        "circuit_type": "aDSLoISDN",
 *        "is_connected": true
 *      }
 * ],
 * "unit_network_subnets": [
 *   {
 *       "unit_network_subnet_id": 184,
 *       "subnet_name": null,
 *       "subnet_ip": "10.79.107.0",
 *       "subnet_default_router": null,
 *       "mask": "/24",
 *       "mm_id": 1002553,
 *       "registry_no": "9050097",
 *       "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *       "special_unit_name": null,
 *       "unit_network_subnet_type_id": 1,
 *       "unit_network_subnet_type": "LAN",
 *       "is_connected": true
 *   },
 *   {
 *       "unit_network_subnet_id": 5799,
 *       "subnet_name": null,
 *       "subnet_ip": "81.186.16.244",
 *       "subnet_default_router": null,
 *       "mask": "/30",
 *       "mm_id": 1002553,
 *       "registry_no": "9050097",
 *       "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *       "special_unit_name": null,
 *       "unit_network_subnet_type_id": 2,
 *       "unit_network_subnet_type": "NAT",
 *       "is_connected": true
 *   },
 *   {
 *       "unit_network_subnet_id": 11411,
 *       "subnet_name": null,
 *       "subnet_ip": "81.186.194.195",
 *       "subnet_default_router": null,
 *       "mask": "/32",
 *       "mm_id": 1002553,
 *       "registry_no": "9050097",
 *       "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *       "special_unit_name": null,
 *       "unit_network_subnet_type_id": 3,
 *       "unit_network_subnet_type": "ROUTER_IP",
 *       "is_connected": true
 *   }
 * ],
 *    "connections": [
 *      {
 *        "connection_id": 184,
 *        "circuit": {
 *          "circuit_id": 543,
 *          "phone_number": "2109335964",
 *          "status": true,
 *          "paid_by_psd": true,
 *          "updated_date": "2013-12-13 18:38:00",
 *          "deactivated_date": null,
 *          "bandwidth": "24576\/1024Kbps",
 *          "readspeed": null,
 *          "circuit_type_id": "2",
 *          "circuit_type": "aDSLoISDN"
 *        },
 *        "cpe": {
 *          "cpe_id": null,
 *          "name": null
 *        },
 *        "ldap": {
 *          "ldap_id": null,
 *          "uid": null
 *        },
 * "unit_network_subnets": [
 *   {
 *       "connection_unit_network_subnet_id": 550,
 *       "connection_id": 184,
 *       "unit_network_subnet_id": 184,
 *       "subnet_name": null,
 *       "subnet_ip": "10.79.107.0",
 *       "subnet_default_router": null,
 *       "mask": "/24",
 *       "unit_network_subnet_type_id": 1,
 *       "unit_network_subnet_type": "LAN"
 *   },
 *  {
 *       "connection_unit_network_subnet_id": 551,
 *       "connection_id": 184,
 *       "unit_network_subnet_id": 5799,
 *       "subnet_name": null,
 *       "subnet_ip": "81.186.16.244",
 *       "subnet_default_router": null,
 *       "mask": "/30",
 *       "unit_network_subnet_type_id": 2,
 *       "unit_network_subnet_type": "NAT"
 *   },
 *   {
 *       "connection_unit_network_subnet_id": 552,
 *       "connection_id": 184,
 *       "unit_network_subnet_id": 11411,
 *       "subnet_name": null,
 *       "subnet_ip": "81.186.194.195",
 *       "subnet_default_router": null,
 *       "mask": "/32",
 *       "unit_network_subnet_type_id": 3,
 *       "unit_network_subnet_type": "ROUTER_IP"
 *          }
 *          ]
 *      }
 *    ]
 *  }
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
 * <br>Ο αριθμός των εγγραφών που θα επιστρέψουν ανα σελίδα (κλήση)
 * <br>Τιμές Παραμέτρων Σελιδοποίησης : {@see Parameters}
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφούν οι προκαθορισμενες εγγραφές
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer : Αριθμητική (Από μηδές έως την μέγιστη τιμή)</li>
 *    </ul>
 * 
 * @param string $page Αριθμός Σελίδας
 * <br>Ο αριθμός της σελίδας με τις $pagesize εγγραφές που βρέθηκαν σύμφωμα με τις παραμέτρους
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφεί η πρώτη σελίδα
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer : Αριθμητική (Μεγαλύτερη από μηδέν)</li>
 *    </ul>
 * 
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>Το όνομα του πεδίου με το οποίο θα γίνει η ταξινόμηση των εγγραφών 
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση θα γίνει με το όνομα
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *    <ul>
 *       <li>string : Αλφαριθμητική (Οποιοδήποτε πεδίο επιστρέφει ο πίνακας data)</li>
 *    </ul>
 * 
 * @param string $ordertype Τύπος Ταξινόμηση
 * <br>Ο τρόπος με τον οποίο θα γίνει η ταξινόμηση των εγγραφών  η ταξινόμηση των εγγραφών 
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση θα γίνει Αύξουσα σειρα (ASC)
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *    <ul>
 *       <li>string : Αλφαριθμητική (ASC ή DESC)</li>
 *    </ul>
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης</li>
 *  <li>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης</li>
 *  <li>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης</li>
 *  <li>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης</li>
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
 * 
 *      
 *      <li>array : <b>unit_ip_dns</b> : Πίνακας Δικτυακών Στοιχείων (Λεξικό : {@see GetUnitIpDns})
 *          <ul>
 *              <li>integer : <b>ip_dns_id</b> : Ο Κωδικός των Δικτυακών Στοιχείων</li>
 *              <li>string : <b>unit_dns</b> : Το DNS της Μονάδας</li>
 *              <li>string : <b>router_dns</b> : Το DNS του Δρομολογητή</li>
 *              <li>string : <b>ext_dns</b> : Το DNS του Δρομολογητή</li>
 *              <li>string : <b>ip_lan</b> : H IP του Τοπικού Δικτύου</li>
 *              <li>string : <b>ip_lan_mask</b> : Η Μάσκα του Τοπικού Δικτύου(Λεξικό : {@see GetIpMasks})</li>
 *              <li>string : <b>ip_router</b> : Η IP του Δρομολογητή</li>
 *              <li>string : <b>ip_nat</b> : Η IP Nat</li>
 *              <li>string : <b>ip_nat_mask</b> : Η Μάσκα του Δρομολογητή (Λεξικό : {@see GetIpMasks})</li>
 *              <li>string : <b>username</b> : To username</li>
 *              <li>string : <b>password</b> : To password</li>
 *              <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *          </ul>
 *          <br>
 *      </li>
 * 
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
 * 
 *      <li>array : <b>workers</b> : Πίνακας Εργαζομένων (Λεξικό : {@see GetUnitWorkers})
 *          <ul>
 *              <li>integer : <b>worker_id</b> : Ο Κωδικός του Εργαζόμενου</li>
 *              <li>string : <b>registry_no</b> : Ο Αριθμός Μητρώου του Εργαζόμενου</li>
 *              <li>string : <b>lastname</b> : Το Επώνυμο του Εργαζόμενου</li>
 *              <li>string : <b>firstname</b> : Το Όνομα του Εργαζόμενου</li>
 *              <li>string : <b>tax_number</b> : Ο Αριθμός Φορολογικού Μητρώου του Εργαζόμενου</li>
 *              <li>string : <b>fathername</b> : Το Πατρώνυμο του Εργαζόμενου</li>
 *              <li>string : <b>sex</b> : Το Φύλο του Εργαζόμενου</li>
 *              <li>string : <b>worker_specialization</b> : Η Ειδικότητα του Εργαζομένου (Λεξικό : {@see GetWorkerSpecializations})</li>
 *              <li>string : <b>worker_position</b> : Η Θέση Εργασίας του Εργαζομένου (Λεξικό : {@see GetWorkerPositions})</li>
 *              <li>integer : <b>worker_source_id</b> : Ο Κωδικός της Πρωτογενής Πηγής του Εργαζομένου</li>
 *               <li>string : <b>worker_source</b> : Η Πρωτογενής Πηγή του Εργαζομένου (Λεξικό : {@see GetSources})</li>
 *              <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας</li>
 *          </ul>
 *          <br>
 *      </li>
 * 
 * 
 *    </ul>
 *   </li>
 * </ul>
 *
 * 
 * @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}
 * @throws MissingPageValue {@see ExceptionMessages::MissingPageValue}
 * @throws InvalidPageArray {@see ExceptionMessages::InvalidPageArray}
 * @throws InvalidPageNumber {@see ExceptionMessages::InvalidPageNumber}
 * @throws InvalidPageType {@see ExceptionMessages::InvalidPageType}
 * @throws MissingPageSizeValue {@see ExceptionMessages::MissingPageSizeValue}
 * @throws InvalidPageSizeArray {@see ExceptionMessages::InvalidPageSizeArray}
 * @throws InvalidPageSizeNumber {@see ExceptionMessages::InvalidPageSizeNumber}
 * @throws InvalidPageSizeType {@see ExceptionMessages::InvalidPageSizeType}
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * @throws InvalidRegistryNoType {@see ExceptionMessages::InvalidRegistryNoType}
 * @throws InvalidNameType {@see ExceptionMessages::InvalidNameType}
 * @throws InvalidSpecialNameType {@see ExceptionMessages::InvalidSpecialNameType}
 * @throws InvalidPhoneNumberType {@see ExceptionMessages::InvalidPhoneNumberType}
 * @throws InvalidEmailType {@see ExceptionMessages::InvalidEmailType}
 * @throws InvalidFaxNumberType {@see ExceptionMessages::InvalidFaxNumberType}
 * @throws InvalidPostalCodeType {@see ExceptionMessages::InvalidPostalCodeType}
 * @throws InvalidStreetAddressType {@see ExceptionMessages::InvalidStreetAddressType}
 * @throws InvalidTaxNumberType {@see ExceptionMessages::InvalidTaxNumberType}
 * @throws InvalidAreaTeamNumberType {@see ExceptionMessages::InvalidAreaTeamNumberType}
 * @throws InvalidLevelsCountType {@see ExceptionMessages::InvalidLevelsCountType}
 * @throws InvalidStudentsCountType {@see ExceptionMessages::InvalidStudentsCountType}
 * @throws InvalidGroupsCountType {@see ExceptionMessages::InvalidGroupsCountType}
 * @throws InvalidLatitudeType {@see ExceptionMessages::InvalidLatitudeType}
 * @throws InvalidLongitudeType {@see ExceptionMessages::InvalidLongitudeType}
 * @throws InvalidPositioningType {@see ExceptionMessages::InvalidPositioningType}
 * @throws InvalidFekType {@see ExceptionMessages::InvalidFekType}
 * @throws InvalidLastUpdateType {@see ExceptionMessages::InvalidLastUpdateType}
 * @throws InvalidLastSyncType {@see ExceptionMessages::InvalidLastSyncType}
 * @throws InvalidCommentsType {@see ExceptionMessages::InvalidCommentsType}
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * @throws InvalidStateType {@see ExceptionMessages::InvalidStateType}
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * @throws InvalidTransferAreaType {@see ExceptionMessages::InvalidTransferAreaType}
 * @throws InvalidPrefectureType {@see ExceptionMessages::InvalidPrefectureType}
 * @throws InvalidMunicipalityType {@see ExceptionMessages::InvalidMunicipalityType}
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * @throws InvalidTaxOfficeType {@see ExceptionMessages::InvalidTaxOfficeType}
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * @throws InvalidUnitTypeType {@see ExceptionMessages::InvalidUnitTypeType}
 * @throws InvalidOperationShiftType {@see ExceptionMessages::InvalidOperationShiftType}
 * @throws InvalidLegalCharacterType {@see ExceptionMessages::InvalidLegalCharacterType}
 * @throws InvalidOrientationTypeType {@see ExceptionMessages::InvalidOrientationTypeType}
 * @throws InvalidSpecialTypeType {@see ExceptionMessages::InvalidSpecialTypeType}
 * @throws InvalidOrderType {@see ExceptionMessages::InvalidOrderType}
 * 
 * 
 * 
 * 
 */


function GetUnits(
    $mm_id, $registry_no, $source, $name, $special_name, $state, $region_edu_admin, $edu_admin, $implementation_entity,
    $transfer_area, $prefecture, $municipality, $education_level, $phone_number, $email, $fax_number, $street_address, $postal_code,
    $tax_number, $tax_office, $area_team_number, $category, $unit_type, $operation_shift, $legal_character, $orientation_type,
    $special_type, $levels_count, $groups_count, $students_count, $latitude, $longitude, $positioning, $creation_fek, $last_update, $last_sync, $comments,
    $pagesize, $page, $orderby, $ordertype, $searchtype, $export )
{
    global $db, $entityManager, $app, $Options;
    
    $filter = array();
    $result = array();

    $result["data"] = array();

    $result["method"] = __FUNCTION__;

    $params = loadParameters();

    try
    {
        
//$export=======================================================================       
        if ( Validator::Missing('export', $params) )
            $export = ExportDataEnumTypes::JSON;
        else if ( ExportDataEnumTypes::isValidValue( $export ) || ExportDataEnumTypes::isValidName( $export ) ) {
            $export = ExportDataEnumTypes::getValue($export);
        } else
            throw new Exception(ExceptionMessages::InvalidExportType." : ".$export, ExceptionCodes::InvalidExportType);
        
//======================================================================================================================
//= Paging
//======================================================================================================================

        if ( Validator::Missing('searchtype', $params) )
            $searchtype = SearchEnumTypes::Contain;
        else if ( SearchEnumTypes::isValidValue( $searchtype ) || SearchEnumTypes::isValidName( $searchtype ) )
            $searchtype = SearchEnumTypes::getValue($searchtype);
        else
            throw new Exception(ExceptionMessages::InvalidSearchType." : ".$searchtype, ExceptionCodes::InvalidSearchType);

       $page = Pagination::getPage($page, $params);
       $pagesize = Pagination::getPagesize($pagesize, $params);

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
                    throw new Exception(ExceptionMessages::InvalidRegistryNoType." : ".$values, ExceptionCodes::InvalidRegistryNoType);
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
//= $phone_number
//======================================================================================================================

        if ( Validator::Exists('phone_number', $params) )
        {
            $table_name = "units";
            $table_column_id = "phone_number";
            $table_column_name = "phone_number";

            $param = Validator::toArray($phone_number);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($values).'%' );
                else
                    throw new Exception(ExceptionMessages::InvalidPhoneNumberType." : ".$values, ExceptionCodes::InvalidPhoneNumberType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $email
//======================================================================================================================

        if ( Validator::Exists('email', $params) )
        {
            $table_name = "units";
            $table_column_id = "email";
            $table_column_name = "email";

            $param = Validator::toArray($email);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidEmailType." : ".$values, ExceptionCodes::InvalidEmailType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $fax_number
//======================================================================================================================

        if ( Validator::Exists('fax_number', $params) )
        {
            $table_name = "units";
            $table_column_id = "fax_number";
            $table_column_name = "fax_number";

            $param = Validator::toArray($fax_number);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidFaxNumberType." : ".$values, ExceptionCodes::InvalidFaxNumberType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $postal_code
//======================================================================================================================

        if ( Validator::Exists('postal_code', $params) )
        {
            $table_name = "units";
            $table_column_id = "postal_code";
            $table_column_name = "postal_code";

            $param = Validator::toArray($postal_code);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidPostalCodeType." : ".$values, ExceptionCodes::InvalidPostalCodeType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $street_address
//======================================================================================================================

        if ( Validator::Exists('street_address', $params) )
        {
            $table_name = "units";
            $table_column_id = "street_address";
            $table_column_name = "street_address";

            $param = Validator::toArray($street_address);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($values).'%' );
                else
                    throw new Exception(ExceptionMessages::InvalidStreetAddressType." : ".$values, ExceptionCodes::InvalidStreetAddressType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }
//======================================================================================================================
//= $tax_number
//======================================================================================================================

        if ( Validator::Exists('tax_number', $params) )
        {
            $table_name = "units";
            $table_column_id = "tax_number";
            $table_column_name = "tax_number";

            $param = Validator::toArray($tax_number);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidTaxNumberType." : ".$values, ExceptionCodes::InvalidTaxNumberType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $area_team_number
//======================================================================================================================

        if ( Validator::Exists('area_team_number', $params) )
        {
            $table_name = "units";
            $table_column_id = "area_team_number";
            $table_column_name = "area_team_number";

            $param = Validator::toArray($area_team_number);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidAreaTeamNumberType." : ".$values, ExceptionCodes::InvalidAreaTeamNumberType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $levels_count
//======================================================================================================================

        if ( Validator::Exists('levels_count', $params) )
        {
            $table_name = "units";
            $table_column_id = "levels_count";
            $table_column_name = "levels_count";

            $param = Validator::toArray($levels_count);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::toNumeric($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toNumeric($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidLevelsCountType." : ".$values, ExceptionCodes::InvalidLevelsCountType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $students_count
//======================================================================================================================

        if ( Validator::Exists('students_count', $params) )
        {
            $table_name = "units";
            $table_column_id = "students_count";
            $table_column_name = "students_count";

            $param = Validator::toArray($students_count);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::toNumeric($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toNumeric($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidStudentsCountType." : ".$values, ExceptionCodes::InvalidStudentsCountType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $groups_count
//======================================================================================================================

        if ( Validator::Exists('groups_count', $params) )
        {
            $table_name = "units";
            $table_column_id = "groups_count";
            $table_column_name = "groups_count";

            $param = Validator::toArray($groups_count);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::toNumeric($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toNumeric($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidGroupsCountType." : ".$values, ExceptionCodes::InvalidGroupsCountType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $latitude
//======================================================================================================================

        if ( Validator::Exists('latitude', $params) )
        {
            $table_name = "units";
            $table_column_id = "latitude";
            $table_column_name = "latitude";

            $param = Validator::toArray($latitude);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::toNumeric($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toNumeric($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidLatitudeType." : ".$values, ExceptionCodes::InvalidLatitudeType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $longitude
//======================================================================================================================

        if ( Validator::Exists('longitude', $params) )
        {
            $table_name = "units";
            $table_column_id = "longitude";
            $table_column_name = "longitude";

            $param = Validator::toArray($longitude);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::toNumeric($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toNumeric($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidLongitudeType." : ".$values, ExceptionCodes::InvalidLongitudeType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $positioning
//======================================================================================================================

        if ( Validator::Exists('positioning', $params) )
        {
            $table_name = "units";
            $table_column_id = "positioning";
            $table_column_name = "positioning";

            $param = Validator::toArray($positioning);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidPositioningType." : ".$values, ExceptionCodes::InvalidPositioningType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $creation_fek
//======================================================================================================================

        if ( Validator::Exists('creation_fek', $params) )
        {
            $table_name = "units";
            $table_column_id = "creation_fek";
            $table_column_name = "creation_fek";

            $param = Validator::toArray($creation_fek);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($values).'%' );
                else
                    throw new Exception(ExceptionMessages::InvalidFekType." : ".$values, ExceptionCodes::InvalidFekType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }
        
//======================================================================================================================
//= $last_update
//======================================================================================================================

        if ( Validator::Exists('last_update', $params) )
        {
            $table_name = "units";
            $table_column_id = "date_format(date(units.last_update), '%d-%m-%Y')";
            $table_column_name = "date_format(date(units.last_update), '%d-%m-%Y')";

            $param = Validator::toArray($last_update);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( '%'.Validator::toValue($values).'%' );
                else
                    throw new Exception(ExceptionMessages::InvalidLastUpdateType." : ".$values, ExceptionCodes::InvalidLastUpdateType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $last_sync
//======================================================================================================================

        if ( Validator::Exists('last_sync', $params) )
        {
            $table_name = "units";
            $table_column_id = "date_format(date(units.last_sync), '%d-%m-%Y')";
            $table_column_name = "date_format(date(units.last_sync), '%d-%m-%Y')";

            $param = Validator::toArray($last_sync);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( '%'.Validator::toValue($values).'%' );
                else
                    throw new Exception(ExceptionMessages::InvalidLastSyncType." : ".$values, ExceptionCodes::InvalidLastSyncType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $comments
//======================================================================================================================

        if ( Validator::Exists('positioning', $params) )
        {
            $table_name = "units";
            $table_column_id = "comments";
            $table_column_name = "comments";

            $param = Validator::toArray($comments);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($values).'%' );
                else
                    throw new Exception(ExceptionMessages::InvalidCommentsType." : ".$values, ExceptionCodes::InvalidCommentsType);
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
        }

//======================================================================================================================
//= $tax_office
//======================================================================================================================

        if ( Validator::Exists('tax_office', $params) )
        {
            $table_name = "tax_offices";
            $table_column_id = "tax_office_id";
            $table_column_name = "name";

            $param = Validator::toArray($tax_office);

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
                    throw new Exception(ExceptionMessages::InvalidTaxOfficeType." : ".$values, ExceptionCodes::InvalidTaxOfficeType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
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
        }

//======================================================================================================================
//= $ordertype
//======================================================================================================================

        if ( Validator::Missing('ordertype', $params) )
            $ordertype = OrderEnumTypes::ASC ;
        else if ( OrderEnumTypes::isValidValue( $ordertype ) || OrderEnumTypes::isValidName( $ordertype ) )
            $ordertype = OrderEnumTypes::getValue($ordertype);
        else
            throw new Exception(ExceptionMessages::InvalidOrderType." : ".$ordertype, ExceptionCodes::InvalidOrderType);

//======================================================================================================================
//= $orderby
//======================================================================================================================

        if ( Validator::Exists('orderby', $params) )
        {
            $columns = array(
                "mm_id",
                "registry_no",
                "name",
                "special_name",
                "source_id",
                "source",
                "category_id",
                "category",
                "state_id",
                "state",
                "area_team_number",
                "street_address",
                "postal_code",
                "fax_number",
                "phone_number",
                "email",
                "students_count",
                "groups_count",
                "levels_count",
                "last_update",
                "tax_number",
                "comments",
                "last_sync",
                "region_edu_admin_id",
                "region_edu_admin",
                "edu_admin_id",
                "edu_admin",
                "transfer_area_id",
                "transfer_area",
                "prefecture_id",
                "prefecture",
                "municipality_id",
                "municipality",
                "education_level_id",
                "education_level",
                "unit_type_id",
                "unit_type",
                "orientation_type_id",
                "orientation_type",
                "operation_shift_id",
                "operation_shift",
                "legal_character_id",
                "legal_character",
                "implementation_entity_id",
                "implementation_entity",
                "implementation_entity_initials",
                "tax_office_id",
                "tax_office",
                "special_type_id",
                "special_type",
                "latitude",
                "longitude",
                "positioning",
                "creation_fek"
            );

            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }
        else
            $orderby = "name";

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================


        $sqlSelect = "SELECT 
                        units.mm_id, 
                        units.registry_no, 
                        units.name, 
                        units.special_name, 
                        sources.source_id, 
                        sources.name as source, 
                        categories.category_id, 
                        categories.name as category, 
                        states.state_id, 
                        states.name as state, 
                        units.area_team_number, 
                        units.street_address, 
                        units.postal_code, 
                        units.fax_number, 
                        units.phone_number, 
                        units.email, 
                        units.students_count, 
                        units.groups_count, 
                        units.levels_count, 
                        units.last_update, 
                        units.tax_number, 
                        units.comments, 
                        units.last_sync, 
                        region_edu_admins.region_edu_admin_id, 
                        region_edu_admins.name as region_edu_admin, 
                        edu_admins.edu_admin_id, 
                        edu_admins.name as edu_admin, 
                        transfer_areas.transfer_area_id, 
                        transfer_areas.name as transfer_area, 
                        prefectures.prefecture_id, 
                        prefectures.name as prefecture, 
                        municipalities.municipality_id, 
                        municipalities.name as municipality, 
                        education_levels.education_level_id, 
                        education_levels.name as education_level, 
                        unit_types.unit_type_id, 
                        unit_types.name as unit_type,  
                        orientation_types.orientation_type_id, 
                        orientation_types.name as orientation_type, 
                        operation_shifts.operation_shift_id, 
                        operation_shifts.name as operation_shift, 
                        legal_characters.legal_character_id, 
                        legal_characters.name as legal_character, 
                        implementation_entities.implementation_entity_id, 
                        implementation_entities.name as implementation_entity, 
                        implementation_entities.initials as implementation_entity_initials, 
                        tax_offices.tax_office_id, 
                        tax_offices.name as tax_office, 
                        special_types.special_type_id, 
                        special_types.name as special_type, 
                        units.latitude, 
                        units.longitude, 
                        units.positioning,
                        units.creation_fek
                     ";

        $sqlFrom = "FROM units
                        LEFT JOIN sources ON units.source_id = sources.source_id
                        LEFT JOIN categories ON units.category_id = categories.category_id
                        LEFT JOIN states ON units.state_id = states.state_id
                        LEFT JOIN region_edu_admins ON units.region_edu_admin_id = region_edu_admins.region_edu_admin_id
                        LEFT JOIN edu_admins ON units.edu_admin_id = edu_admins.edu_admin_id
                        LEFT JOIN transfer_areas ON units.transfer_area_id = transfer_areas.transfer_area_id
                        LEFT JOIN prefectures ON units.prefecture_id = prefectures.prefecture_id
                        LEFT JOIN municipalities ON units.municipality_id = municipalities.municipality_id
                        LEFT JOIN education_levels ON units.education_level_id = education_levels.education_level_id
                        LEFT JOIN unit_types ON units.unit_type_id = unit_types.unit_type_id
                        LEFT JOIN orientation_types ON units.orientation_type_id = orientation_types.orientation_type_id
                        LEFT JOIN operation_shifts ON units.operation_shift_id = operation_shifts.operation_shift_id
                        LEFT JOIN legal_characters ON units.legal_character_id = legal_characters.legal_character_id
                        LEFT JOIN implementation_entities ON units.implementation_entity_id = implementation_entities.implementation_entity_id
                        LEFT JOIN tax_offices ON units.tax_office_id = tax_offices.tax_office_id
                        LEFT JOIN special_types ON units.special_type_id = special_types.special_type_id";

        $sqlWhere = (count($filter) > 0 ? " WHERE " . implode(" AND ", $filter) : "" );
        $sqlOrder = " ORDER BY ". $orderby ." ". $ordertype;
        $sqlLimit = ($page && $pagesize) ? " LIMIT ".(($page - 1) * $pagesize).", ".$pagesize : "";


        $sql = "SELECT count(*) as total " . $sqlFrom . $sqlWhere;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        $result["total"] = $rows["total"];


        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder . $sqlLimit;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result["count"] = $stmt->rowCount();

        count($rows) > 0 ? $ids = "" : $ids = "0";
        foreach ($rows as $row)
        {
            $ids .= ($ids ? ", " : "") . $row["mm_id"]; 
        }                       

//======================================================================================================================
//= $array_unit_dns
//======================================================================================================================

        $sqlSelect = "SELECT
                        unit_dns.unit_dns_id,
                        unit_dns.unit_dns,
                        unit_dns.unit_ext_dns,
                        unit_dns.mm_id
                     ";

        $sqlFrom = "FROM unit_dns";

        $sqlWhere = " WHERE unit_dns.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY unit_dns.mm_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_unit_dns = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_unit_dns as $unit_dns)
        {
            $unit_dnses[ $unit_dns["mm_id"] ][ $unit_dns["unit_dns_id"] ] = $unit_dns;
        }

//======================================================================================================================
//= $array_groups
//======================================================================================================================

        $sqlSelect = "SELECT
                        groups.group_id,
                        groups.name,
                        groups.students_count,
                        groups.level_id,
                        groups.mm_id
                     ";

        $sqlFrom   = "FROM groups";

        $sqlWhere = " WHERE groups.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY groups.mm_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_groups = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_groups as $group)
        {
            $groups[ $group["mm_id"] ][ $group["level_id"] ][] = $group;
        }

//======================================================================================================================
//= $array_levels
//======================================================================================================================

        $sqlSelect = "SELECT 
                        levels.level_id, 
                        levels.name, 
                        levels.groups_count, 
                        levels.students_count, 
                        levels.mm_id
                     ";

        $sqlFrom   = "FROM levels";

        $sqlWhere = " WHERE levels.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY levels.mm_id ASC";
        
        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";
        
        $stmt = $db->query( $sql );        
        $array_levels = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_levels as $level)
        {
            $levels[ $level["mm_id"] ][] = $level;
        }

//======================================================================================================================
//= $array_host_relations
//======================================================================================================================

        $sqlSelect = "SELECT 
                        relations.relation_id, 
                        relations.host_mm_id, 
                        relations.guest_mm_id, 
                        units.registry_no as guest_registry_no, 
                        units.name as guest_name, 
                        units.special_name as guest_special_name, 
                        relations.relation_state, 
                        relations.true_date, 
                        relations.true_fek, 
                        relations.false_date, 
                        relations.false_fek, 
                        relation_types.relation_type_id, 
                        relation_types.name as relation_type
                     ";

        $sqlFrom   = "FROM relations 
                      LEFT JOIN units ON relations.guest_mm_id = units.mm_id
                      LEFT JOIN relation_types ON relations.relation_type_id = relation_types.relation_type_id";

        $sqlWhere = " WHERE relations.host_mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY relations.host_mm_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );        
        $array_host_relations = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_host_relations as $host_relation)
        {
            $host_relations[ $host_relation["host_mm_id"] ][] = $host_relation;
        }

//======================================================================================================================
//= $array_guest_relations
//======================================================================================================================

        $sqlSelect = "SELECT 
                        relations.relation_id, 
                        relations.guest_mm_id, 
                        relations.host_mm_id, 
                        units.registry_no as host_registry_no, 
                        units.name as host_name, 
                        units.special_name as host_special_name, 
                        relations.relation_state, 
                        relations.true_date, 
                        relations.true_fek, 
                        relations.false_date, 
                        relations.false_fek, 
                        relation_types.relation_type_id, 
                        relation_types.name as relation_type
                     ";

        $sqlFrom   = "FROM relations 
                      LEFT JOIN units ON relations.host_mm_id = units.mm_id
                      LEFT JOIN relation_types ON relations.relation_type_id = relation_types.relation_type_id";

        $sqlWhere = " WHERE relations.guest_mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY relations.guest_mm_id ASC";
        
        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";
        
        $stmt = $db->query( $sql );        
        $array_guest_relations = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_guest_relations as $guest_relation)
        {
            $guest_relations[ $guest_relation["guest_mm_id"] ][] = $guest_relation;
        }

//======================================================================================================================
//= $array_unit_workers
//======================================================================================================================

        $sqlSelect = "SELECT 
                        unit_workers.unit_worker_id, 
                        unit_workers.mm_id, 
                        workers.worker_id, 
                        workers.registry_no, 
                        workers.tax_number, 
                        workers.lastname, 
                        workers.firstname, 
                        workers.fathername, 
                        concat(workers.lastname, ' ', workers.firstname) as fullname,
                        workers.sex,
                        worker_specializations.worker_specialization_id, 
                        worker_specializations.name as worker_specialization, 
                        worker_positions.worker_position_id, 
                        worker_positions.name as worker_position,
                        sources.source_id as worker_source_id, 
                        sources.name as worker_source
                     ";
        
        $sqlFrom   = "FROM unit_workers 
                      LEFT JOIN workers ON unit_workers.worker_id = workers.worker_id
                      LEFT JOIN worker_positions ON unit_workers.worker_position_id = worker_positions.worker_position_id
                      LEFT JOIN worker_specializations ON workers.worker_specialization_id = worker_specializations.worker_specialization_id
                      LEFT JOIN sources ON workers.source_id = sources.source_id";

        $sqlWhere = " WHERE unit_workers.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY unit_workers.mm_id ASC";
        
        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";
        
        $stmt = $db->query( $sql );        
        $array_unit_workers = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_unit_workers as $unit_worker)
        {
            $unit_workers[ $unit_worker["mm_id"] ][] = $unit_worker;
        }

//======================================================================================================================
//= $array_cpes
//======================================================================================================================

        $sqlSelect = "SELECT
                        cpes.cpe_id,
                        cpes.name,
                        cpes.mm_id,
                        connections.connection_id is not null as is_connected
                     ";

        $sqlFrom = "FROM cpes
                    LEFT JOIN connections ON connections.cpe_id = cpes.cpe_id and connections.mm_id = cpes.mm_id";

        $sqlWhere = " WHERE cpes.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY cpes.mm_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_cpes = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_cpes as $cpe)
        {
            $cpes[ $cpe["mm_id"] ][ $cpe["cpe_id"] ] = $cpe;
        }

//======================================================================================================================
//= $array_ldaps
//======================================================================================================================

        $sqlSelect = "SELECT
                        ldaps.ldap_id,
                        ldaps.uid as ldap_uid,
                        ldaps.mm_id,
                        connections.connection_id is not null as is_connected
                     ";

        $sqlFrom = "FROM ldaps
                    LEFT JOIN connections ON connections.ldap_id = ldaps.ldap_id and connections.mm_id = ldaps.mm_id";

        $sqlWhere = " WHERE ldaps.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY ldaps.mm_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_ldaps = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_ldaps as $ldap)
        {
            $ldaps[ $ldap["mm_id"] ][ $ldap["ldap_id"] ] = $ldap;
        }

//======================================================================================================================
//= $array_circuits
//======================================================================================================================

        $sqlSelect = "SELECT
                        circuits.circuit_id,
                        circuits.phone_number,
                        circuits.status,
                        circuits.paid_by_psd,
                        circuits.activated_date,
                        circuits.updated_date,
                        circuits.deactivated_date,
                        circuits.bandwidth,
                        circuits.readspeed,
                        circuits.mm_id,
                        circuit_types.circuit_type_id,
                        circuit_types.name as circuit_type,
                        connections.connection_id is not null as is_connected
                     ";

        $sqlFrom   = "FROM circuits
                      LEFT JOIN circuit_types ON circuits.circuit_type_id = circuit_types.circuit_type_id
                      LEFT JOIN connections ON connections.circuit_id = circuits.circuit_id and connections.mm_id = circuits.mm_id";

        $sqlWhere = " WHERE circuits.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY circuits.mm_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_circuits = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_circuits as $circuit)
        {
            $circuits[ $circuit["mm_id"] ][ $circuit["circuit_id"] ] = $circuit;
        }

//======================================================================================================================
//= $array_unit_network_subnets
//======================================================================================================================
        
        $sqlSelect = "SELECT
                             connection_unit_network_subnets.connection_id,
                             connection_unit_network_subnets.unit_network_subnet_id,
                             unit_network_subnets.unit_network_subnet_id,
                             unit_network_subnets.subnet_name,
                             unit_network_subnets.subnet_ip,
                             unit_network_subnets.subnet_default_router,
                             unit_network_subnets.mask,
                             unit_network_subnets.mm_id,
                             units.registry_no,
                             units.name as unit_name,
                             units.special_name as special_unit_name,
                             unit_network_subnet_types.unit_network_subnet_type_id,
                             unit_network_subnet_types.subnet_type as unit_network_subnet_type,
                             unit_network_objects.ip as object_ip,
                             unit_network_objects.object_dns_name as object_dns_name,
                             connection_unit_network_subnets.connection_unit_network_subnet_id,
                             connection_unit_network_subnets.unit_network_subnet_id is not null as is_connected
                        ";

        $sqlFrom   = "  FROM unit_network_subnets
                        LEFT JOIN units ON unit_network_subnets.mm_id = units.mm_id
                        LEFT JOIN unit_network_subnet_types ON unit_network_subnets.unit_network_subnet_type_id = unit_network_subnet_types.unit_network_subnet_type_id
                        LEFT JOIN connection_unit_network_subnets ON unit_network_subnets.unit_network_subnet_id=connection_unit_network_subnets.unit_network_subnet_id
                        LEFT JOIN unit_network_objects ON unit_network_subnets.unit_network_subnet_id = unit_network_objects.unit_network_subnet_id";
        $sqlWhere = " WHERE unit_network_subnets.mm_id in (".$ids.") ";
        $sqlOrder = " ORDER BY unit_network_subnets.mm_id ASC";
        
        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_unit_network_subnets = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_unit_network_subnets as $unit_network_subnet)
        {
            $unit_network_subnets[ $unit_network_subnet["mm_id"] ][ $unit_network_subnet["unit_network_subnet_id"] ] = $unit_network_subnet;
        }
        
        
//======================================================================================================================
//= $array_connections
//======================================================================================================================

        $sqlSelect = "SELECT
                        connections.connection_id,
                        connections.mm_id,
                        connections.cpe_id,
                        connections.ldap_id,
                        connections.circuit_id
                      ";

        $sqlFrom   = "FROM connections";

        $sqlWhere = " WHERE connections.mm_id in (".$ids.")";
        $sqlOrder = " ORDER BY connections.mm_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_connections = $stmt->fetchAll(PDO::FETCH_ASSOC);

        count($array_connections) > 0 ? $connection_ids = "" : $connection_ids = "0";
        foreach ($array_connections as $connection)
        {
            $connection_ids .= ($connection_ids ? ", " : "") . "'".$connection["connection_id"]."'";
            $connections[ $connection["mm_id"] ][] = $connection;
        }

//======================================================================================================================
//= $array_connection_unit_network_subnets
//======================================================================================================================
        $sqlSelect = "SELECT connection_unit_network_subnets.connection_unit_network_subnet_id,
                             connection_unit_network_subnets.connection_id,
                             connection_unit_network_subnets.unit_network_subnet_id,
                             unit_network_subnets.unit_network_subnet_id,
                             unit_network_subnets.subnet_name,
                             unit_network_subnets.subnet_ip,
                             unit_network_subnets.subnet_default_router,
                             unit_network_subnets.mask,
                             unit_network_subnet_types.unit_network_subnet_type_id,
                             unit_network_subnet_types.subnet_type as unit_network_subnet_type,
                             unit_network_objects.ip as object_ip,
                             unit_network_objects.object_dns_name as object_dns_name
                             ";

        $sqlFrom   = "FROM connection_unit_network_subnets
                      LEFT JOIN unit_network_subnets ON connection_unit_network_subnets.unit_network_subnet_id = unit_network_subnets.unit_network_subnet_id
                      LEFT JOIN unit_network_subnet_types ON unit_network_subnets.unit_network_subnet_type_id = unit_network_subnet_types.unit_network_subnet_type_id
                      LEFT JOIN connections ON connection_unit_network_subnets.connection_id = connections.connection_id
                      LEFT JOIN unit_network_objects ON unit_network_subnets.unit_network_subnet_id = unit_network_objects.unit_network_subnet_id
                     ";

        $sqlWhere = " WHERE connection_unit_network_subnets.connection_id in (".$connection_ids.") AND connections.mm_id=unit_network_subnets.mm_id";
        $sqlOrder = " ORDER BY connection_unit_network_subnets.connection_unit_network_subnet_id ASC, connection_unit_network_subnets.unit_network_subnet_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );
        $array_connection_unit_network_subnets = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_connection_unit_network_subnets as $connection_unit_network_subnet)
        {
            $connection_unit_network_subnets[ $connection_unit_network_subnet["connection_id"] ][ $connection_unit_network_subnet["connection_unit_network_subnet_id"] ] = $connection_unit_network_subnet;
        }
        
//======================================================================================================================
//= R E S U L T S
//======================================================================================================================
        
        foreach ($rows as $row)
        {
            $doctrineUnit = $entityManager->getRepository('Units')->find($row["mm_id"]);
            $logEntries = $entityManager->getRepository('Gedmo\Loggable\Entity\LogEntry')->getLogEntries($doctrineUnit);
            $data = array(
                "mm_id"                    => $row["mm_id"] ? (int)$row["mm_id"] : null,
                "registry_no"              => $row["registry_no"],
                "name"                     => $row["name"],
                "special_name"             => $row["special_name"],
            //    "active"                   => $row["active"] ? (bool)$row["active"] : null,
            //    "suspended"                => $row["suspended"] ? (bool)$row["suspended"] : null,
                "source_id"                => $row["source_id"] ? (int)$row["source_id"] : null,
                "source"                   => $row["source"],
                "category_id"              => $row["category_id"] ? (int)$row["category_id"] : null,
                "category"                 => $row["category"],
                "state_id"                 => $row["state_id"] ? (int)$row["state_id"] : null,
                "state"                    => $row["state"],
                "area_team_number"         => $row["area_team_number"],
                "street_address"           => $row["street_address"],
                "postal_code"              => $row["postal_code"],
                "fax_number"               => $row["fax_number"],
                "phone_number"             => $row["phone_number"],
                "email"                    => $row["email"],
                "students_count"           => $row["students_count"] ? (int)$row["students_count"] : null,
                "groups_count"             => $row["groups_count"] ? (int)$row["groups_count"] : null,
                "levels_count"             => $row["levels_count"] ? (int)$row["levels_count"] : null,
                "tax_number"               => $row["tax_number"],
                "region_edu_admin_id"      => $row["region_edu_admin_id"] ? (int)$row["region_edu_admin_id"] : null,
                "region_edu_admin"         => $row["region_edu_admin"],
                "edu_admin_id"             => $row["edu_admin_id"] ? (int)$row["edu_admin_id"] : null,
                "edu_admin"                => $row["edu_admin"],
                "transfer_area_id"         => $row["transfer_area_id"] ? (int)$row["transfer_area_id"] : null,
                "transfer_area"            => $row["transfer_area"],
                "prefecture_id"            => $row["prefecture_id"] ? (int)$row["prefecture_id"] : null,
                "prefecture"               => $row["prefecture"],
                "municipality_id"          => $row["municipality_id"] ? (int)$row["municipality_id"] : null,
                "municipality"             => $row["municipality"],
                "education_level_id"       => $row["education_level_id"] ? (int)$row["education_level_id"] : null,
                "education_level"          => $row["education_level"],
                "unit_type_id"             => $row["unit_type_id"] ? (int)$row["unit_type_id"] : null,
                "unit_type"                => $row["unit_type"],
                "orientation_type_id"      => $row["orientation_type_id"] ? (int)$row["orientation_type_id"] : null,
                "orientation_type"         => $row["orientation_type"],
                "operation_shift_id"       => $row["operation_shift_id"] ? (int)$row["operation_shift_id"] : null,
                "operation_shift"          => $row["operation_shift"],
                "legal_character_id"       => $row["legal_character_id"] ? (int)$row["legal_character_id"] : null,
                "legal_character"          => $row["legal_character"],
                "implementation_entity_id" => $row["implementation_entity_id"] ? (int)$row["implementation_entity_id"] : null,
                "implementation_entity"    => $row["implementation_entity"],
                "implementation_entity_initials" => $row["implementation_entity_initials"],
                "tax_office_id"            => $row["tax_office_id"] ? (int)$row["tax_office_id"] : null,
                "tax_office"               => $row["tax_office"],
                "special_type_id"          => $row["special_type_id"] ? (int)$row["special_type_id"] : null,
                "special_type"             => $row["special_type"],
                "latitude"                 => $row["latitude"],
                "longitude"                => $row["longitude"],
                "positioning"              => $row["positioning"],
                "creation_fek"             => $row["creation_fek"],
                "last_sync"                => $row["last_sync"],
                "last_update"              => $row["last_update"],
                "comments"                 => $row["comments"],
                "version"                  => count($logEntries),
            );

            if($app->request->userRoles != 'GUEST') {

                $data["levels"] = array();
                foreach ($levels[ $row["mm_id"] ] as $level)
                {
                    $levels = array(
                        "level_id"       => $level["level_id"] ? (int)$level["level_id"] : null,
                        "name"           => $level["name"],
                        "groups_count"   => $level["groups_count"] ? (int)$level["groups_count"] : null,
                        "students_count" => $level["students_count"] ? (int)$level["students_count"] : null,
                    );

                    $levels["groups"] = array();
                    foreach ($groups[ $row["mm_id"] ][ $level["level_id"] ] as $group)
                    {
                        $levels["groups"][] = array(
                            "group_id"       => $group["group_id"] ? (int)$group["group_id"] : null,
                            "name"           => $group["name"],
                            "students_count" => $group["students_count"] ? (int)$group["students_count"] : null,
                        );
                    }

                    $data["levels"][] = $levels;
                }


                $data["host_relations"] = array();
                foreach ($host_relations[ $row["mm_id"] ] as $host_relation)
                {
                    $data["host_relations"][] = array(
                        "relation_id"        => $host_relation["relation_id"] ? (int)$host_relation["relation_id"] : null,
                        "guest_mm_id"        => $host_relation["guest_mm_id"] ? (int)$host_relation["guest_mm_id"] : null,
                        "guest_registry_no"  => $host_relation["guest_registry_no"],
                        "guest_name"         => $host_relation["guest_name"],
                        "guest_special_name" => $host_relation["guest_special_name"],
                        "relation_state"     => $host_relation["relation_state"],
                        "true_date"          => $host_relation["true_date"],
                        "true_fek"           => $host_relation["true_fek"],
                        "false_date"         => $host_relation["false_date"],
                        "false_fek"          => $host_relation["false_fek"],
                        "relation_type_id"   => $host_relation["relation_type_id"] ? (int)$host_relation["relation_type_id"] : null,
                        "relation_type"      => $host_relation["relation_type"],
                    );
                }


                $data["guest_relations"] = array();
                foreach ($guest_relations[ $row["mm_id"] ] as $guest_relation)
                {
                    $data["guest_relations"][] = array(
                        "relation_id"       => $guest_relation["relation_id"] ? (int)$guest_relation["relation_id"] : null,
                        "host_mm_id"        => $guest_relation["host_mm_id"] ? (int)$guest_relation["host_mm_id"] : null,
                        "host_registry_no"  => $guest_relation["host_registry_no"],
                        "host_name"         => $guest_relation["host_name"],
                        "host_special_name" => $guest_relation["host_special_name"],
                        "relation_state"    => $guest_relation["relation_state"],
                        "true_date"         => $guest_relation["true_date"],
                        "true_fek"          => $guest_relation["true_fek"],
                        "false_date"        => $guest_relation["false_date"],
                        "false_fek"         => $guest_relation["false_fek"],
                        "relation_type_id"  => $guest_relation["relation_type_id"] ? (int)$guest_relation["relation_type_id"] : null,
                        "relation_type"     => $guest_relation["relation_type"],
                    );
                }


                $data["workers"] = array();
                foreach ($unit_workers[ $row["mm_id"] ] as $worker)
                {
                    $data["workers"][] = array(
                        "unit_worker_id"           => $worker["unit_worker_id"] ? (int)$worker["unit_worker_id"] : null,
                        "worker_id"                => $worker["worker_id"] ? (int)$worker["worker_id"] : null,
                        "registry_no"              => $worker["registry_no"],
                        "tax_number"               => $worker["tax_number"],
                        "lastname"                 => $worker["lastname"],
                        "firstname"                => $worker["firstname"],
                        "fathername"               => $worker["fathername"],
                        "fullname"                 => $worker["fullname"],
                        "sex"                      => $worker["sex"],
                        "worker_specialization_id" => $worker["worker_specialization_id"] ? (int)$worker["worker_specialization_id"] : null,
                        "worker_specialization"    => $worker["worker_specialization"],
                        "worker_position_id"       => $worker["worker_position_id"] ? (int)$worker["worker_position_id"] : null,
                        "worker_position"          => $worker["worker_position"],
                        "worker_source_id"         => $worker["worker_source_id"]? (int)$worker["worker_source_id"] : null,
                        "worker_source"            => $worker["worker_source"]
                    );
                }


                $data["unit_dns"] = array();
                foreach ($unit_dnses[ $row["mm_id"] ] as $unit_dns)
                {
                    $data["unit_dns"][] = array(
                        "unit_dns_id" => $unit_dns["unit_dns_id"] ? (int)$unit_dns["unit_dns_id"] : null,
                        "unit_dns"    => $unit_dns["unit_dns"],
                        "unit_ext_dns"     => $unit_dns["unit_ext_dns"]
                    );
                }


                $data["cpes"] = array();
                foreach ($cpes[ $row["mm_id"] ] as $cpe)
                {
                    $data["cpes"][] = array(
                        "cpe_id" => $cpe["cpe_id"] ? (int)$cpe["cpe_id"] : null,
                        "name"   => $cpe["name"],
                        "is_connected"     => isset($cpe["is_connected"]) ? (bool)$cpe["is_connected"] : null,
                    );
                }


                $data["ldaps"] = array();
                foreach ($ldaps[ $row["mm_id"] ] as $ldap)
                {
                    $data["ldaps"][] = array(
                        "ldap_id"  => $ldap["ldap_id"] ? (int)$ldap["ldap_id"] : null,
                        "ldap_uid" => $ldap["ldap_uid"],
                        "is_connected"     => isset($ldap["is_connected"]) ? (bool)$ldap["is_connected"] : null,
                    );
                }


                $data["circuits"] = array();
                foreach ($circuits[ $row["mm_id"] ] as $circuit)
                {
                    $data["circuits"][] = array(
                        "circuit_id"       => $circuit["circuit_id"] ? (int)$circuit["circuit_id"] : null,
                        "phone_number"     => $circuit["phone_number"],
                        "status"           => $circuit["status"] ? (bool)$circuit["status"] : null,
                        "paid_by_psd"      => $circuit["paid_by_psd"] ? (bool)$circuit["paid_by_psd"] : null,
                        "updated_date"     => $circuit["updated_date"],
                        "deactivated_date" => $circuit["deactivated_date"],
                        "bandwidth"        => $circuit["bandwidth"],
                        "readspeed"        => $circuit["readspeed"],
                        "circuit_type_id"  => $circuit["circuit_type_id"] ? $circuit["circuit_type_id"] : null,
                        "circuit_type"     => $circuit["circuit_type"],
                        "is_connected"     => isset($circuit["is_connected"]) ? (bool)$circuit["is_connected"] : null,
                    );
                }

               $data["unit_network_subnets"] = array();
                // foreach ($groups[ $row["mm_id"] ][ $level["level_id"] ] as $group)
                foreach ($unit_network_subnets[ $row["mm_id"] ] as $unit_network_subnet)
                {
                    //$circuit = $circuits[ $row["mm_id"] ][ $network_element["circuit_id"] ];

                    $data["unit_network_subnets"][] = array(
                        "unit_network_subnet_id"        => Validator::toIntVal($unit_network_subnet["unit_network_subnet_id"]),
                        "subnet_name"                   => $unit_network_subnet["subnet_name"],
                        "subnet_ip"                     => $unit_network_subnet["subnet_ip"],
                        "subnet_default_router"         => $unit_network_subnet["subnet_default_router"],
                        "mask"                          => $unit_network_subnet["mask"],
                        "mm_id"                         => Validator::toIntVal($row["mm_id"]),
                        "registry_no"                   => $unit_network_subnet["registry_no"],
                        "unit_name"                     => $unit_network_subnet["unit_name"],
                        "special_unit_name"             => $unit_network_subnet["special_unit_name"],
                        "unit_network_subnet_type_id"   => Validator::toIntVal($unit_network_subnet["unit_network_subnet_type_id"]),
                        "unit_network_subnet_type"      => $unit_network_subnet["unit_network_subnet_type"],
                        "unit_network_object_ip"        => $unit_network_subnet["object_ip"],                      
                        "unit_network_object_name"      => $unit_network_subnet["object_dns_name"],
                        "connection_unit_network_subnet_id"   => Validator::toIntVal($unit_network_subnet["connection_unit_network_subnet_id"]),
                        "is_connected"     => isset($unit_network_subnet["is_connected"]) ? (bool)$unit_network_subnet["is_connected"] : null
                    );
                }

                $data["connections"] = array();
                foreach ($connections[ $row["mm_id"] ] as $connection)
                {

                    $has_unit_network_subnets = array();
                    foreach ($connection_unit_network_subnets[$connection["connection_id"]] as $connection_unit_network_subnet)
                    {
                        $has_unit_network_subnets[] = array(
                            "connection_unit_network_subnet_id"       => $connection_unit_network_subnet["connection_unit_network_subnet_id"] ? (int)$connection_unit_network_subnet["connection_unit_network_subnet_id"] : null,
                            "connection_id"                           => $connection_unit_network_subnet["connection_id"]? (int)$connection_unit_network_subnet["connection_id"] : null,
                            "unit_network_subnet_id"                  => $connection_unit_network_subnet["unit_network_subnet_id"] ? (int)$connection_unit_network_subnet["unit_network_subnet_id"] : null,
                            "unit_network_subnet_id"        => Validator::toIntVal($connection_unit_network_subnet["unit_network_subnet_id"]),
                            "subnet_name"                   => $connection_unit_network_subnet["subnet_name"],
                            "subnet_ip"                     => $connection_unit_network_subnet["subnet_ip"],
                            "subnet_default_router"         => $connection_unit_network_subnet["subnet_default_router"],
                            "mask"                          => $connection_unit_network_subnet["mask"],
                            "unit_network_subnet_type_id"   => Validator::toIntVal($connection_unit_network_subnet["unit_network_subnet_type_id"]),
                            "unit_network_subnet_type"      => $connection_unit_network_subnet["unit_network_subnet_type"],
                            "unit_network_object_ip"        => $connection_unit_network_subnet["object_ip"],                      
                            "unit_network_object_name"      => $connection_unit_network_subnet["object_dns_name"]
                        );
                    }


                    $circuit = $circuits[ $row["mm_id"] ][ $connection["circuit_id"] ];
                    //if ($circuit)
                    //{
                        $connection_circuit = array(
                            "circuit_id"       => $circuit["circuit_id"] ? (int)$circuit["circuit_id"] : null,
                            "phone_number"     => $circuit["phone_number"],
                            "status"           => $circuit["status"] ? (bool)$circuit["status"] : null,
                            "paid_by_psd"      => $circuit["paid_by_psd"] ? (bool)$circuit["paid_by_psd"] : null,
                            "updated_date"     => $circuit["updated_date"],
                            "deactivated_date" => $circuit["deactivated_date"],
                            "bandwidth"        => $circuit["bandwidth"],
                            "readspeed"        => $circuit["readspeed"],
                            "circuit_type_id"  => $circuit["circuit_type_id"] ? $circuit["circuit_type_id"] : null,
                            "circuit_type"     => $circuit["circuit_type"],
                        );
                    //}
                    //else
                    //    $connection_circuit = array();


                    $cpe = $cpes[ $row["mm_id"] ][ $connection["cpe_id"] ];
                    //if ($cpe)
                    //{
                        $connection_cpe = array(
                            "cpe_id" => $cpe["cpe_id"] ? (int)$cpe["cpe_id"] : null,
                            "name"   => $cpe["name"],
                        );
                    //}
                    //else
                    //    $connection_cpe = array();


                    $ldap = $ldaps[ $row["mm_id"] ][ $connection["ldap_id"] ];
                    //if ($ldap)
                    //{
                        $connection_ldap = array(
                            "ldap_id"  => $ldap["ldap_id"] ? (int)$ldap["ldap_id"] : null,
                            "ldap_uid" => $ldap["ldap_uid"],
                        );
                    //}
                    //else
                    //    $connection_ldap = array();


                    $data["connections"][] = array(
                        "connection_id"         => $connection["connection_id"] ? (int)$connection["connection_id"] : null,
                        "circuit"               => $connection_circuit,
                        "cpe"                   => $connection_cpe,
                        "ldap"                  => $connection_ldap,
                        "unit_network_subnets" => $has_unit_network_subnets

                    );
                }
            }

            $result["data"][] = $data;
        }
        
        $result["status"] = ExceptionCodes::NoErrors;;
        $result["message"] = ExceptionMessages::NoErrors;
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    }

//set debug=====================================================================    
    if ( Validator::isTrue( $params["debug"] ) )
    {
        $result["sql"] =  trim(preg_replace('/\s\s+/', ' ', $sql));
    }

//set export format=============================================================    
    if ($export == 'JSON'){
        return $result;
    } else if ($export == 'XLSX') {
       $xlsx_filename = UnitsExt::ExcelCsvCreate($result, $export);
       unset($result['data']);
       return array("result"=>$result,"tmp_xlsx_filepath" => $Options["WebTmpFolder"].$xlsx_filename);
    } else if ($export == 'CSV'){
       $csv_filename = UnitsExt::ExcelCsvCreate($result, $export);
       unset($result['data']);
       return array("result"=>$result,"tmp_csv_filepath" => $Options["WebTmpFolder"].$csv_filename);
    } else if ($export == 'PHP_ARRAY'){
       return print_r($result);
    } else {     
       return $result;
    }

}

?>