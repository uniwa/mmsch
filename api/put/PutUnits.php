<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Ενημέρωση Μονάδας**
 *
 * Η συνάρτηση ενημερώνει Μονάδα σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **units** :
 * <br>https://mm.sch.gr/api/units
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 * * **mm_id**
 *
 * ***Πίνακας Παραμέτρων***
 * * Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους μπορεί να γίνει η κλήση της συνάρτησης.
 * * Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί.
 * * Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά.
 * 
 * ***Πίνακας Αποτελεσμάτων***
 * * Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση.
 * * Όλες οι μεταβλητές επιστρέφονται σε <a href="#model">JSON objects</a>.
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
 * "controller": "PutUnits",
 * "function": "units",
 * "method": "PUT",
 * "parameters": {  "mm_id": ``, "registry_no": ``, "source": ``, "name": ``, "special_name": ``, 
 *                  "state": ``, "region_edu_admin": ``, "edu_admin": ``, "implementation_entity": ``,
 *                  "transfer_area": ``, "prefecture": ``, "municipality": ``, "municipality_community": ``,
 *                  "education_level": ``, "phone_number": ``, "email": ``, "fax_number": ``, 
 *                  "street_address": ``, "postal_code": ``, "tax_number": ``, "tax_office": ``, 
 *                  "area_team_number": ``, "category": ``, "unit_type": ``, "operation_shift": ``, 
 *                  "legal_character": ``, "orientation_type": ``, "special_type": ``, 
 *                  "levels_count": ``, "groups_count": ``, "students_count": ``, "latitude": ``,
 *                  "longitude": ``, "positioning": ``, "creation_fek": ``, "last_update": ``, 
 *                  "last_sync": ``, "comments": `` },
 * "mm_id": ``,
 * "status": 200,
 * "message": "[PUT][units]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $mm_id Κωδικός ΜΜ
 * <br>
 * <br>Ο Κωδικός ΜΜ
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Κωδικός ΜΜ : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικός ΜΜ
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $registry_no Κωδικός ΥΠΕΠΘ
 * <br>
 * <br>Ο Κωδικός ΥΠΕΠΘ της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param integer|string $source Όνομα ή ID Πρωτογενής Πηγή
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Πρωτογενής Πηγής
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Ειδικότητας Εργαζόμενου : {@see GetSources}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Πρωτογενής Πηγής
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Πρωτογενής Πηγής
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $name Ονομασία
 * <br>
 * <br>Το Όνομα της Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $special_name Ειδική Ονομασία 
 * <br>
 * <br>Το Προσωνύμιο της Μονάδας 
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string 
 * 
 * @param integer|string $state Όνομα ή ID Λειτουργικής Καταστάσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Λειτουργικής Καταστάσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Λειτουργικής Καταστάσης : {@see GetStates}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID της Λειτουργικής Καταστάσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Λειτουργικής Καταστάσης
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $region_edu_admin Όνομα ή ID Περιφέρειας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιφέρειας
 * <br>Όνομα ή ID Περιφέρειας : {@see GetRegionEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιφέρειας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιφέρειας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $edu_admin Όνομα ή ID Διεύθυνσης Εκπαίδευσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Διεύθυνσης Εκπαίδευσης
 * <br>Όνομα ή ID Διεύθυνσης Εκπαίδευσης : {@see GetEduAdmins}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Διεύθυνσης Εκπαίδευσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Διεύθυνσης Εκπαίδευσης
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>  
 *  
* @param integer|string $implementation_entity Όνομα ή ID Φορέα Υλοποίησης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Φορέα Υλοποίησης
 * <br>Όνομα ή ID Φορέα Υλοποίησης : {@see GetImplementationEntities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Φορέα Υλοποίησης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιφέρειας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $transfer_area Όνομα ή ID Περιοχής Μετάθεσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιοχής Μετάθεσης
 * <br>Όνομα ή ID Περιοχής Μετάθεσης : {@see GetTransferAreas}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιοχής Μετάθεσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιοχής Μετάθεσης
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $prefecture Όνομα ή ID Περιφερειακής Ενότητας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Περιφερειακής Ενότητας
 * <br>Όνομα ή ID Περιφερειακής Ενότητας : {@see GetPrefectures}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Περιφερειακής Ενότητας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Περιφερειακής Ενότητας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $municipality Όνομα ή ID Δήμου ΟΤΑ
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Δήμου ΟΤΑ
 * <br>Όνομα ή ID Δήμου ΟΤΑ : {@see GetMunicipalities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Δήμου ΟΤΑ
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Δήμου ΟΤΑ
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $municipality_community Όνομα ή ID Δημοτικής Ενότητας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Δημοτικής Ενότητας
 * <br>Όνομα ή ID Δήμου ΟΤΑ : {@see GetMunicipalityCommunities}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Δημοτικής Ενότητας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Δημοτικής Ενότητας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul> 
 * 
 * @param integer|string $education_level Όνομα ή ID Επίπεδου Εκπαίδευσης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Επίπεδου Εκπαίδευσης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Επίπεδου Εκπαίδευσης : {@see GetEducationLevels}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Επίπεδου Εκπαίδευσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Επίπεδου Εκπαίδευσης
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer $phone_number Τηλέφωνο Επικοινωνίας
 * <br>
 * <br>Το Τηλέφωνο Επικοινωνίας της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * 
 * @param string $email Ηλεκτρονική Αλληλογραφία
 * <br>
 * <br>Η Ηλεκτρονική Αλληλογραφία της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $fax_number Αριθμός FAX
 * <br>
 * <br>Ο Αριθμός Τηλεομοιοτυπίας (φαξ) της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string 
 * 
 * @param string $street_address Οδός, Αριθμός
 * <br>
 * <br>Η Διεύθυνση (Οδός και Αριθμός) της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param integer $postal_code Ταχυδρομικός Κώδικας
 * <br>
 * <br>Ο Ταχυδρομικός Κώδικας της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *
 * @param string $tax_number Αριθμός Φορολογικού Μητρώου
 * <br>
 * <br>Ο Αριθμός Φορολογικού Μητρώου της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param integer|string $tax_office Όνομα ή ID Δ.Ο.Υ (Εφορίας)
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Δ.Ο.Υ (Εφορίας)
 * <br>Όνομα ή ID Δ.Ο.Υ (Εφορίας) : {@see GetTaxOffices}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Δ.Ο.Υ (Εφορίας)
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Δ.Ο.Υ (Εφορίας)
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>  
 * 
 * @param integer $area_team_number Ομάδα Σχολείων
 * <br>
 * <br>Η Ομάδα Σχολείων της Μονάδας (1η έως 40η)
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * 
 * @param integer|string $category Όνομα ή ID Κατηγορίας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID της Κατηγορίας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Κατηγορίας : {@see GetCategories}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Κατηγορίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Κατηγορίας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $unit_type Όνομα ή ID Τύπου Μονάδας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Τύπου Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Τύπου Μονάδας : {@see GetUnitTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID του Τύπου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Τύπου Μονάδας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>  
 *  
 * @param integer|string $operation_shift Όνομα ή ID Ωράριου Λειτουργίας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Ωράριου Λειτουργίας
 * <br>Όνομα ή ID Ωράριου Λειτουργίας : {@see GetOperationShifts}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Ωράριου Λειτουργίας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Ωράριου Λειτουργίας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $legal_character Όνομα ή ID Νομικού Χαρακτήρα Μονάδας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Νομικού Χαρακτήρα Μονάδας
 * <br>Όνομα ή ID Νομικού Χαρακτήρα Μονάδας : {@see GetLegalCharacters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Νομικού Χαρακτήρα Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Νομικού Χαρακτήρα Μονάδας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer|string $orientation_type Όνομα ή ID Προσανατολισμού
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Προσανατολισμού
 * <br>Όνομα ή ID Προσανατολισμού : {@see GetOrientationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Προσανατολισμού
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Προσανατολισμού
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul> 
 * 
 * @param integer|string $special_type Όνομα ή ID Ειδικού Τύπου Μονάδας
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Ειδικού Τύπου Μονάδας
 * <br>Όνομα ή ID Ειδικού Τύπου Μονάδας : {@see GetSpecialTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Ειδικού Τύπου Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Ειδικού Τύπου Μονάδας
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul> 
 *
 * @param integer $levels_count Πλήθος Τάξεω
 * <br>
 * <br>Το Πλήθος  των Τάξεων της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param integer $groups_count Πλήθος Τμημάτων
 * <br>
 * <br>Το Πλήθος των Τμημάτων της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * 
 * @param integer $students_count Πλήθος Μαθητών
 * <br>
 * <br>Το Πλήθος των Μαθητών της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * 
 * @param string $latitude Γεωγραφικό Πλάτος
 * <br>
 * <br>Το Γεωγραφικό Πλάτος της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $longitude Γεωγραφικό Μήκος
 * <br>
 * <br>Το Γεωγραφικό Μήκος της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $positioning Κτηριακή Θέση
 * <br>
 * <br>Η Κτηριακή Θέση της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param string $creation_fek Φ.Ε.Κ.
 * <br>
 * <br>Το Φ.Ε.Κ. (Δημιουργίας) της Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param datetime $last_update Ημερομηνία Τελευταίας Ενημέρωσης
 * <br>
 * <br>Η Ημερομηνία Τελευταίας Ενημέρωσης την Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : datetime
 * 
 * @param datetime $last_sync Ημερομηνία Τελευταίας Συγχρονισμού
 * <br>
 * <br>Η Ημερομηνία Τελευταίας Συγχρονισμού την Μονάδας
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : datetime
 * 
 * @param string $comments Παρατηρήσεις / Σχόλια
 * <br>
 * <br>Παρατηρήσεις / Σχόλια σχετικά με τη Μονάδα
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>mm_id</b> : Ο Κωδικός ID της Μονάδας που ενημερώθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 * 
 * 
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 *  
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 *
 * @throws InvalidUnitValue {@see ExceptionMessages::InvalidUnitValue}
 * <br>{@see ExceptionCodes::InvalidUnitValue}
 *
 * @throws DuplicatedUnitUniqueValue {@see ExceptionMessages::DuplicatedUnitUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitUniqueValue}
 * 
 * @throws MissingUnitRegistryNoParam {@see ExceptionMessages::MissingUnitRegistryNoParam}
 * <br>{@see ExceptionCodes::MissingUnitRegistryNoParam}
 *
 * @throws MissingUnitRegistryNoValue {@see ExceptionMessages::MissingUnitRegistryNoValue}
 * <br>{@see ExceptionCodes::MissingUnitRegistryNoValue}
 *
 * @throws InvalidUnitRegistryNoType {@see ExceptionMessages::InvalidUnitRegistryNoType}
 * <br>{@see ExceptionCodes::InvalidUnitRegistryNoType} 
 * 
 * @throws MissingSourceParam {@see ExceptionMessages::MissingSourceParam}
 * <br>{@see ExceptionCodes::MissingSourceParam}
 *
 * @throws MissingSourceValue {@see ExceptionMessages::MissingSourceValue}
 * <br>{@see ExceptionCodes::MissingSourceValue}
 *  
 * @throws InvalidSourceArray {@see ExceptionMessages::InvalidSourceArray}
 * <br>{@see ExceptionCodes::InvalidSourceArray}
 *
 * @throws InvalidSourceType {@see ExceptionMessages::InvalidSourceType}
 * <br>{@see ExceptionCodes::InvalidSourceType}
 * 
 * @throws DuplicatedSourceUniqueValue {@see ExceptionMessages::DuplicatedSourceUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedSourceUniqueValue}
 * 
 * @throws MissingUnitNameParam {@see ExceptionMessages::MissingUnitNameParam}
 * <br>{@see ExceptionCodes::MissingUnitNameParam}
 *
 * @throws MissingUnitNameValue {@see ExceptionMessages::MissingUnitNameValue}
 * <br>{@see ExceptionCodes::MissingUnitNameValue}
 *
 * @throws InvalidUnitNameType {@see ExceptionMessages::InvalidUnitNameType}
 * <br>{@see ExceptionCodes::InvalidUnitNameType} 
 * 
 * @throws MissingUnitSpecialNameParam {@see ExceptionMessages::MissingUnitSpecialNameParam}
 * <br>{@see ExceptionCodes::MissingUnitSpecialNameParam}
 *
 * @throws MissingUnitSpecialNameValue {@see ExceptionMessages::MissingUnitSpecialNameValue}
 * <br>{@see ExceptionCodes::MissingUnitSpecialNameValue}
 *
 * @throws InvalidUnitSpecialNameType {@see ExceptionMessages::InvalidUnitSpecialNameType}
 * <br>{@see ExceptionCodes::InvalidUnitSpecialNameType} 
 * 
 * @throws MissingStateParam {@see ExceptionMessages::MissingSourceParam}
 * <br>{@see ExceptionCodes::MissingSourceParam}
 *
 * @throws MissingStateValue {@see ExceptionMessages::MissingSourceValue}
 * <br>{@see ExceptionCodes::MissingSourceValue}
 *  
 * @throws InvalidStateArray {@see ExceptionMessages::InvalidSourceArray}
 * <br>{@see ExceptionCodes::InvalidSourceArray}
 *
 * @throws InvalidStateType {@see ExceptionMessages::InvalidSourceType}
 * <br>{@see ExceptionCodes::InvalidSourceType}
 * 
 * @throws DuplicatedStateUniqueValue {@see ExceptionMessages::DuplicatedSourceUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedSourceUniqueValue} 
 * 
 * @throws MissingRegionEduAdminParam {@see ExceptionMessages::MissingRegionEduAdminParam}
 * <br>{@see ExceptionCodes::MissingRegionEduAdminParam}
 *
 * @throws MissingRegionEduAdminValue {@see ExceptionMessages::MissingRegionEduAdminValue}
 * <br>{@see ExceptionCodes::MissingRegionEduAdminValue}
 *  
 * @throws InvalidRegionEduAdminArray {@see ExceptionMessages::InvalidRegionEduAdminArray}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminArray}
 *
 * @throws InvalidRegionEduAdminType {@see ExceptionMessages::InvalidRegionEduAdminType}
 * <br>{@see ExceptionCodes::InvalidRegionEduAdminType}
 * 
 * @throws DuplicatedRegionEduAdminUniqueValue {@see ExceptionMessages::DuplicatedRegionEduAdminUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedRegionEduAdminUniqueValue}
 * 
 * @throws MissingEduAdminParam {@see ExceptionMessages::MissingEduAdminParam}
 * <br>{@see ExceptionCodes::MissingEduAdminParam}
 *
 * @throws MissingEduAdminValue {@see ExceptionMessages::MissingEduAdminValue}
 * <br>{@see ExceptionCodes::MissingEduAdminValue}
 *  
 * @throws InvalidEduAdminArray {@see ExceptionMessages::InvalidEduAdminArray}
 * <br>{@see ExceptionCodes::InvalidEduAdminArray}
 *
 * @throws InvalidEduAdminType {@see ExceptionMessages::InvalidEduAdminType}
 * <br>{@see ExceptionCodes::InvalidEduAdminType}
 * 
 * @throws DuplicatedEduAdminUniqueValue {@see ExceptionMessages::DuplicatedEduAdminUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedEduAdminUniqueValue}  
 * 
 * @throws MissingImplementationEntityParam {@see ExceptionMessages::MissingImplementationEntityParam}
 * <br>{@see ExceptionCodes::MissingImplementationEntityParam}
 *
 * @throws MissingImplementationEntityValue {@see ExceptionMessages::MissingImplementationEntityValue}
 * <br>{@see ExceptionCodes::MissingImplementationEntityValue}
 *  
 * @throws InvalidImplementationEntityArray {@see ExceptionMessages::InvalidImplementationEntityArray}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityArray}
 *
 * @throws InvalidImplementationEntityType {@see ExceptionMessages::InvalidImplementationEntityType}
 * <br>{@see ExceptionCodes::InvalidImplementationEntityType}
 * 
 * @throws DuplicatedImplementationEntityUniqueValue {@see ExceptionMessages::DuplicatedImplementationEntityUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedImplementationEntityUniqueValue}
 * 
 * @throws MissingTransferAreaParam {@see ExceptionMessages::MissingTransferAreaParam}
 * <br>{@see ExceptionCodes::MissingTransferAreaParam}
 *
 * @throws MissingTransferAreaValue {@see ExceptionMessages::MissingTransferAreaValue}
 * <br>{@see ExceptionCodes::MissingTransferAreaValue}
 *  
 * @throws InvalidTransferAreaArray {@see ExceptionMessages::InvalidTransferAreaArray}
 * <br>{@see ExceptionCodes::InvalidTransferAreaArray}
 *
 * @throws InvalidTransferAreaType {@see ExceptionMessages::InvalidTransferAreaType}
 * <br>{@see ExceptionCodes::InvalidTransferAreaType}
 * 
 * @throws DuplicatedTransferAreaUniqueValue {@see ExceptionMessages::DuplicatedTransferAreaUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedTransferAreaUniqueValue} 
 * 
 * @throws MissingPrefectureParam {@see ExceptionMessages::MissingPrefectureParam}
 * <br>{@see ExceptionCodes::MissingPrefectureParam}
 *
 * @throws MissingPrefectureValue {@see ExceptionMessages::MissingPrefectureValue}
 * <br>{@see ExceptionCodes::MissingPrefectureValue}
 *  
 * @throws InvalidPrefectureArray {@see ExceptionMessages::InvalidPrefectureArray}
 * <br>{@see ExceptionCodes::InvalidPrefectureArray}
 *
 * @throws InvalidPrefectureType {@see ExceptionMessages::InvalidPrefectureType}
 * <br>{@see ExceptionCodes::InvalidPrefectureType}
 * 
 * @throws DuplicatedPrefectureUniqueValue {@see ExceptionMessages::DuplicatedPrefectureUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedPrefectureUniqueValue}
 * 
 * @throws MissingMunicipalityParam {@see ExceptionMessages::MissingMunicipalityParam}
 * <br>{@see ExceptionCodes::MissingMunicipalityParam}
 *
 * @throws MissingMunicipalityValue {@see ExceptionMessages::MissingMunicipalityValue}
 * <br>{@see ExceptionCodes::MissingMunicipalityValue}
 *  
 * @throws InvalidMunicipalityArray {@see ExceptionMessages::InvalidMunicipalityArray}
 * <br>{@see ExceptionCodes::InvalidMunicipalityArray}
 *
 * @throws InvalidMunicipalityType {@see ExceptionMessages::InvalidMunicipalityType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityType}
 * 
 * @throws DuplicatedMunicipalityUniqueValue {@see ExceptionMessages::DuplicatedMunicipalityUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedMunicipalityUniqueValue}
 *  
 * @throws MissingMunicipalityCommunityParam {@see ExceptionMessages::MissingMunicipalityCommunityParam}
 * <br>{@see ExceptionCodes::MissingMunicipalityCommunityParam}
 *
 * @throws MissingMunicipalityCommunityValue {@see ExceptionMessages::MissingMunicipalityCommunityValue}
 * <br>{@see ExceptionCodes::MissingMunicipalityCommunityValue}
 *  
 * @throws InvalidMunicipalityCommunityArray {@see ExceptionMessages::InvalidMunicipalityCommunityArray}
 * <br>{@see ExceptionCodes::InvalidMunicipalityCommunityArray}
 *
 * @throws InvalidMunicipalityCommunityType {@see ExceptionMessages::InvalidMunicipalityCommunityType}
 * <br>{@see ExceptionCodes::InvalidMunicipalityCommunityType}
 * 
 * @throws DuplicatedMunicipalityCommunityUniqueValue {@see ExceptionMessages::DuplicatedMunicipalityCommunityUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedMunicipalityCommunityUniqueValue}
 * 
 * @throws MissingEducationLevelParam {@see ExceptionMessages::MissingEducationLevelParam}
 * <br>{@see ExceptionCodes::MissingEducationLevelParam}
 *
 * @throws MissingEducationLevelValue {@see ExceptionMessages::MissingEducationLevelValue}
 * <br>{@see ExceptionCodes::MissingEducationLevelValue}
 *  
 * @throws InvalidEducationLevelArray {@see ExceptionMessages::InvalidEducationLevelArray}
 * <br>{@see ExceptionCodes::InvalidEducationLevelArray}
 *
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelType}
 * 
 * @throws DuplicatedEducationLevelUniqueValue {@see ExceptionMessages::DuplicatedEducationLevelUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedEducationLevelUniqueValue}
 * 
 * @throws MissingUnitPhoneNumberParam {@see ExceptionMessages::MissingUnitPhoneNumberParam}
 * <br>{@see ExceptionCodes::MissingUnitPhoneNumberParam}
 *
 * @throws MissingUnitPhoneNumberValue {@see ExceptionMessages::MissingUnitPhoneNumberValue}
 * <br>{@see ExceptionCodes::MissingUnitPhoneNumberValue}
 *
 * @throws InvalidUnitPhoneNumberType {@see ExceptionMessages::InvalidUnitPhoneNumberType}
 * <br>{@see ExceptionCodes::InvalidUnitPhoneNumberType}
 *
 * @throws MissingUnitEmailParam {@see ExceptionMessages::MissingUnitEmailParam}
 * <br>{@see ExceptionCodes::MissingUnitEmailParam}
 *
 * @throws MissingUnitEmailValue {@see ExceptionMessages::MissingUnitEmailValue}
 * <br>{@see ExceptionCodes::MissingUnitEmailValue}
 *
 * @throws InvalidUnitEmailType {@see ExceptionMessages::InvalidUnitEmailType}
 * <br>{@see ExceptionCodes::InvalidUnitEmailType}
 * 
 * @throws MissingUnitFaxNumberParam {@see ExceptionMessages::MissingUnitFaxNumberParam}
 * <br>{@see ExceptionCodes::MissingUnitFaxNumberParam}
 *
 * @throws MissingUnitFaxNumberValue {@see ExceptionMessages::MissingUnitFaxNumberValue}
 * <br>{@see ExceptionCodes::MissingUnitFaxNumberValue}
 *
 * @throws InvalidUnitFaxNumberType {@see ExceptionMessages::InvalidUnitFaxNumberType}
 * <br>{@see ExceptionCodes::InvalidUnitFaxNumberType}
 * 
 * @throws MissingUnitStreetAddressParam {@see ExceptionMessages::MissingUnitStreetAddressParam}
 * <br>{@see ExceptionCodes::MissingUnitStreetAddressParam}
 *
 * @throws MissingUnitStreetAddressValue {@see ExceptionMessages::MissingUnitStreetAddressValue}
 * <br>{@see ExceptionCodes::MissingUnitStreetAddressValue}
 *
 * @throws InvalidUnitStreetAddressType {@see ExceptionMessages::InvalidUnitStreetAddressType}
 * <br>{@see ExceptionCodes::InvalidUnitStreetAddressType}
 * 
 * @throws MissingUnitPostalCodeParam {@see ExceptionMessages::MissingUnitPostalCodeParam}
 * <br>{@see ExceptionCodes::MissingUnitPostalCodeParam}
 *
 * @throws MissingUnitPostalCodeValue {@see ExceptionMessages::MissingUnitPostalCodeValue}
 * <br>{@see ExceptionCodes::MissingUnitPostalCodeValue}
 *
 * @throws InvalidUnitPostalCodeType {@see ExceptionMessages::InvalidUnitPostalCodeType}
 * <br>{@see ExceptionCodes::InvalidUnitPostalCodeType}
 * 
 * @throws MissingUnitTaxNumberParam {@see ExceptionMessages::MissingUnitTaxNumberParam}
 * <br>{@see ExceptionCodes::MissingUnitTaxNumberParam}
 *
 * @throws MissingUnitTaxNumberValue {@see ExceptionMessages::MissingUnitTaxNumberValue}
 * <br>{@see ExceptionCodes::MissingUnitTaxNumberValue}
 *
 * @throws InvalidUnitTaxNumberType {@see ExceptionMessages::InvalidUnitTaxNumberType}
 * <br>{@see ExceptionCodes::InvalidUnitTaxNumberType}
 *
 * @throws MissingTaxOfficeParam {@see ExceptionMessages::MissingTaxOfficeParam}
 * <br>{@see ExceptionCodes::MissingTaxOfficeParam}
 *
 * @throws MissingTaxOfficeValue {@see ExceptionMessages::MissingTaxOfficeValue}
 * <br>{@see ExceptionCodes::MissingTaxOfficeValue}
 *  
 * @throws InvalidTaxOfficeArray {@see ExceptionMessages::InvalidTaxOfficeArray}
 * <br>{@see ExceptionCodes::InvalidTaxOfficeArray}
 *
 * @throws InvalidTaxOfficeType {@see ExceptionMessages::InvalidTaxOfficeType}
 * <br>{@see ExceptionCodes::InvalidTaxOfficeType}
 * 
 * @throws DuplicatedTaxOfficeUniqueValue {@see ExceptionMessages::DuplicatedTaxOfficeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedTaxOfficeUniqueValue}
 * 
 * @throws MissingUnitAreaTeamNumberParam {@see ExceptionMessages::MissingUnitAreaTeamNumberParam}
 * <br>{@see ExceptionCodes::MissingUnitAreaTeamNumberParam}
 *
 * @throws MissingUnitAreaTeamNumberValue {@see ExceptionMessages::MissingUnitAreaTeamNumberValue}
 * <br>{@see ExceptionCodes::MissingUnitAreaTeamNumberValue}
 *
 * @throws InvalidUnitAreaTeamNumberType {@see ExceptionMessages::InvalidUnitAreaTeamNumberType}
 * <br>{@see ExceptionCodes::InvalidUnitAreaTeamNumberType} 
 * 
 * @throws MissingCategoryParam {@see ExceptionMessages::MissingCategoryParam}
 * <br>{@see ExceptionCodes::MissingCategoryParam}
 *
 * @throws MissingCategoryValue {@see ExceptionMessages::MissingCategoryValue}
 * <br>{@see ExceptionCodes::MissingCategoryValue}
 *  
 * @throws InvalidCategoryArray {@see ExceptionMessages::InvalidCategoryArray}
 * <br>{@see ExceptionCodes::InvalidCategoryArray}
 *
 * @throws InvalidCategoryType {@see ExceptionMessages::InvalidCategoryType}
 * <br>{@see ExceptionCodes::InvalidCategoryType}
 * 
 * @throws DuplicatedCategoryUniqueValue {@see ExceptionMessages::DuplicatedCategoryUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedCategoryUniqueValue} 
 * 
 * @throws MissingUnitTypeParam {@see ExceptionMessages::MissingUnitTypeParam}
 * <br>{@see ExceptionCodes::MissingUnitTypeParam}
 *
 * @throws MissingUnitTypeValue {@see ExceptionMessages::MissingUnitTypeValue}
 * <br>{@see ExceptionCodes::MissingUnitTypeValue}
 *  
 * @throws InvalidUnitTypeArray {@see ExceptionMessages::InvalidUnitTypeArray}
 * <br>{@see ExceptionCodes::InvalidUnitTypeArray}
 *
 * @throws InvalidUnitTypeType {@see ExceptionMessages::InvalidUnitTypeType}
 * <br>{@see ExceptionCodes::InvalidUnitTypeType}
 * 
 * @throws DuplicatedUnitTypeUniqueValue {@see ExceptionMessages::DuplicatedUnitTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedUnitTypeUniqueValue}
 *
 * @throws MissingOperationShiftParam {@see ExceptionMessages::MissingOperationShiftParam}
 * <br>{@see ExceptionCodes::MissingOperationShiftParam}
 *
 * @throws MissingOperationShiftValue {@see ExceptionMessages::MissingOperationShiftValue}
 * <br>{@see ExceptionCodes::MissingOperationShiftValue}
 *  
 * @throws InvalidOperationShiftArray {@see ExceptionMessages::InvalidOperationShiftArray}
 * <br>{@see ExceptionCodes::InvalidOperationShiftArray}
 *
 * @throws InvalidOperationShiftType {@see ExceptionMessages::InvalidOperationShiftType}
 * <br>{@see ExceptionCodes::InvalidOperationShiftType}
 * 
 * @throws DuplicatedOperationShiftUniqueValue {@see ExceptionMessages::DuplicatedOperationShiftUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedOperationShiftUniqueValue}
 * 
 * @throws MissingLegalCharacterParam {@see ExceptionMessages::MissingLegalCharacterParam}
 * <br>{@see ExceptionCodes::MissingLegalCharacterParam}
 *
 * @throws MissingLegalCharacterValue {@see ExceptionMessages::MissingLegalCharacterValue}
 * <br>{@see ExceptionCodes::MissingLegalCharacterValue}
 *  
 * @throws InvalidLegalCharacterArray {@see ExceptionMessages::InvalidLegalCharacterArray}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterArray}
 *
 * @throws InvalidLegalCharacterType {@see ExceptionMessages::InvalidLegalCharacterType}
 * <br>{@see ExceptionCodes::InvalidLegalCharacterType}
 * 
 * @throws DuplicatedLegalCharacterUniqueValue {@see ExceptionMessages::DuplicatedLegalCharacterUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedLegalCharacterUniqueValue}
 * 
 * @throws MissingOrientationTypeParam {@see ExceptionMessages::MissingOrientationTypeParam}
 * <br>{@see ExceptionCodes::MissingOrientationTypeParam}
 *
 * @throws MissingOrientationTypeValue {@see ExceptionMessages::MissingOrientationTypeValue}
 * <br>{@see ExceptionCodes::MissingOrientationTypeValue}
 *  
 * @throws InvalidOrientationTypeArray {@see ExceptionMessages::InvalidOrientationTypeArray}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeArray}
 *
 * @throws InvalidOrientationTypeType {@see ExceptionMessages::InvalidOrientationTypeType}
 * <br>{@see ExceptionCodes::InvalidOrientationTypeType}
 * 
 * @throws DuplicatedOrientationTypeUniqueValue {@see ExceptionMessages::DuplicatedOrientationTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedOrientationTypeUniqueValue}
 * 
 * @throws MissingSpecialTypeParam {@see ExceptionMessages::MissingSpecialTypeParam}
 * <br>{@see ExceptionCodes::MissingSpecialTypeParam}
 *
 * @throws MissingSpecialTypeValue {@see ExceptionMessages::MissingSpecialTypeValue}
 * <br>{@see ExceptionCodes::MissingSpecialTypeValue}
 *  
 * @throws InvalidSpecialTypeArray {@see ExceptionMessages::InvalidSpecialTypeArray}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeArray}
 *
 * @throws InvalidSpecialTypeType {@see ExceptionMessages::InvalidSpecialTypeType}
 * <br>{@see ExceptionCodes::InvalidSpecialTypeType}
 * 
 * @throws DuplicatedSpecialTypeUniqueValue {@see ExceptionMessages::DuplicatedSpecialTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedSpecialTypeUniqueValue}
 * 
 * @throws MissingUnitLevelsCountParam {@see ExceptionMessages::MissingUnitLevelsCountParam}
 * <br>{@see ExceptionCodes::MissingUnitLevelsCountParam}
 *
 * @throws MissingUnitLevelsCountValue {@see ExceptionMessages::MissingUnitLevelsCountValue}
 * <br>{@see ExceptionCodes::MissingUnitLevelsCountValue}
 *
 * @throws InvalidUnitLevelsCountType {@see ExceptionMessages::InvalidUnitLevelsCountType}
 * <br>{@see ExceptionCodes::InvalidUnitLevelsCountType}
 * 
 * @throws MissingUnitGroupsCountParam {@see ExceptionMessages::MissingUnitGroupsCountParam}
 * <br>{@see ExceptionCodes::MissingUnitGroupsCountParam}
 *
 * @throws MissingUnitGroupsCountValue {@see ExceptionMessages::MissingUnitGroupsCountValue}
 * <br>{@see ExceptionCodes::MissingUnitGroupsCountValue}
 *
 * @throws InvalidUnitGroupsCountType {@see ExceptionMessages::InvalidUnitGroupsCountType}
 * <br>{@see ExceptionCodes::InvalidUnitGroupsCountType}
 * 
 * @throws MissingUnitStudentsCountParam {@see ExceptionMessages::MissingUnitStudentsCountParam}
 * <br>{@see ExceptionCodes::MissingUnitStudentsCountParam}
 *
 * @throws MissingUnitStudentsCountValue {@see ExceptionMessages::MissingUnitStudentsCountValue}
 * <br>{@see ExceptionCodes::MissingUnitStudentsCountValue}
 *
 * @throws InvalidUnitStudentsCountType {@see ExceptionMessages::InvalidUnitStudentsCountType}
 * <br>{@see ExceptionCodes::InvalidUnitStudentsCountType}
 * 
 * @throws MissingUnitLatitudeParam {@see ExceptionMessages::MissingUnitLatitudeParam}
 * <br>{@see ExceptionCodes::MissingUnitLatitudeParam}
 *
 * @throws MissingUnitLatitudeValue {@see ExceptionMessages::MissingUnitLatitudeValue}
 * <br>{@see ExceptionCodes::MissingUnitLatitudeValue}
 *
 * @throws InvalidUnitLatitudeType {@see ExceptionMessages::InvalidUnitLatitudeType}
 * <br>{@see ExceptionCodes::InvalidUnitLatitudeType}
 * 
 * @throws MissingUnitLongitudeParam {@see ExceptionMessages::MissingUnitLongitudeParam}
 * <br>{@see ExceptionCodes::MissingUnitLongitudeParam}
 *
 * @throws MissingUnitLongitudeValue {@see ExceptionMessages::MissingUnitLongitudeValue}
 * <br>{@see ExceptionCodes::MissingUnitLongitudeValue}
 *
 * @throws InvalidUnitLongitudeType {@see ExceptionMessages::InvalidUnitLongitudeType}
 * <br>{@see ExceptionCodes::InvalidUnitLongitudeType}
 * 
 * @throws MissingUnitPositioningParam {@see ExceptionMessages::MissingUnitPositioningParam}
 * <br>{@see ExceptionCodes::MissingUnitPositioningParam}
 *
 * @throws MissingUnitPositioningValue {@see ExceptionMessages::MissingUnitPositioningValue}
 * <br>{@see ExceptionCodes::MissingUnitPositioningValue}
 *
 * @throws InvalidUnitPositioningType {@see ExceptionMessages::InvalidUnitPositioningType}
 * <br>{@see ExceptionCodes::InvalidUnitPositioningType}
 * 
 * @throws MissingUnitCreationFekParam {@see ExceptionMessages::MissingUnitCreationFekParam}
 * <br>{@see ExceptionCodes::MissingUnitCreationFekParam}
 *
 * @throws MissingUnitCreationFekValue {@see ExceptionMessages::MissingUnitCreationFekValue}
 * <br>{@see ExceptionCodes::MissingUnitCreationFekValue}
 *
 * @throws InvalidUnitCreationFekType {@see ExceptionMessages::InvalidUnitCreationFekType}
 * <br>{@see ExceptionCodes::InvalidUnitCreationFekType}
 *  
 * @throws MissingUnitLastUpdateParam {@see ExceptionMessages::MissingUnitLastUpdateParam}
 * <br>{@see ExceptionCodes::MissingUnitLastUpdateParam}
 *
 * @throws MissingUnitLastUpdateValue {@see ExceptionMessages::MissingUnitLastUpdateValue}
 * <br>{@see ExceptionCodes::MissingUnitLastUpdateValue}
 *
 * @throws InvalidUnitLastUpdateType {@see ExceptionMessages::InvalidUnitLastUpdateType}
 * <br>{@see ExceptionCodes::InvalidUnitLastUpdateType}
 * 
 * @throws MissingUnitLastSyncParam {@see ExceptionMessages::MissingUnitLastSyncParam}
 * <br>{@see ExceptionCodes::MissingUnitLastSyncParam}
 *
 * @throws MissingUnitLastSyncValue {@see ExceptionMessages::MissingUnitLastSyncValue}
 * <br>{@see ExceptionCodes::MissingUnitLastSyncValue}
 *
 * @throws InvalidUnitLastSyncType {@see ExceptionMessages::InvalidUnitLastSyncType}
 * <br>{@see ExceptionCodes::InvalidUnitLastSyncType}
 * 
 * @throws MissingUnitCommentsParam {@see ExceptionMessages::MissingUnitCommentsParam}
 * <br>{@see ExceptionCodes::MissingUnitCommentsParam}
 *
 * @throws MissingUnitCommentsValue {@see ExceptionMessages::MissingUnitCommentsValue}
 * <br>{@see ExceptionCodes::MissingUnitCommentsValue}
 *
 * @throws InvalidUnitCommentsType {@see ExceptionMessages::InvalidUnitCommentsType}
 * <br>{@see ExceptionCodes::InvalidUnitCommentsType}
 *
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 *
 * @throws NoErrorsUpdateUnit {@see ExceptionMessages::NoErrorsUpdateUnit}
 * <br>{@see ExceptionCodes::NoErrorsUpdateUnit}
 * 
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
    CRUDUtils::entitySetParam($unit, $phone_number, 'UnitPhoneNumber', 'phone_number' , $params, false, true );

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
                
//result_messages===============================================================
        $result["mm_id"] = $unit->getMmId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrorsUpdateUnit;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}

?>