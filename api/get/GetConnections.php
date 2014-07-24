<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");


/**
 * <b>Διασυνδέσεις Τηλεπικοινωνιακών Κυκλωμάτων</b>
 *
 *
 * Η συνάρτηση αυτή επιστρέφει όλες τις Διασυνδέσεις των Τηλεπικοινωνιακών Κυκλωμάτων σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> http://mm.sch.gr/api/connections
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
 * <br>Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που
 * μπορεί να προκύψουν κατά την κλήση της συνάρτησης
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
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X GET http://mm.sch.gr/api/connections \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"unit" : "1002553"}'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "unit" : "1002553"
 *    });
 *
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "http://mm.sch.gr/api/connections");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    http.setRequestHeader("Authorization", "Basic " + btoa('username' + ':' + 'password') );
 *
 *    http.onreadystatechange = function()
 *    {
 *        if(http.readyState == 4 && http.status == 200)
 *        {
 *            var result = JSON.parse(http.responseText);
 *            document.write(result.status + " : " + result.message + " : " + result.data);
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
 *    header("Content-Type: text/html; charset=utf-8");
 *
 *    $params = array(
 *       "unit" => "1002553"
 *    );
 *
 *    $curl = curl_init("http://mm.sch.gr/api/connections");
 *
 *    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 *    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 *    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
 *    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 *    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 *
 *    $data = curl_exec($curl);
 *    $data = json_decode($data);
 *    echo "<pre>"; var_dump( $data ); echo "</pre>";
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
 *        url: 'http://mm.sch.gr/api/connections',
 *        dataType: "json",
 *        data: {
 *          "unit" : "1002553"
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
 * <br><b>Πίνακας Δεδομένων</b>
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα του λεξικού σε μορφή JSON :
 * <code>
 * {"data":[
 *    {
 *      "connection_id": 184,
 *      "unit": {
 *        "mm_id": 1002553,
 *        "registry_no": "9050097",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΑΘΗΝΩΝ",
 *        "special_unit_name": null
 *      },
 *      "cpe": {
 *        "cpe_id": null,
 *        "cpe": null
 *      },
 *      "ldap": {
 *        "ldap_id": null,
 *        "ldap_uid": null
 *      },
 *      "circuit": {
 *        "circuit_id": null,
 *        "phone_number": null,
 *        "status": null,
 *        "paid_by_psd": null,
 *        "activated_date": null,
 *        "updated_date": null,
 *        "deactivated_date": null,
 *        "bandwidth": null,
 *        "readspeed": null,
 *        "circuit_type_id": null,
 *        "circuit_type": null
 *      },
 *       "unit_network_subnets": [
 *           {
 *               "connection_unit_network_subnet_id": 550,
 *               "connection_id": 184,
 *               "unit_network_subnet_id": 184,
 *               "subnet_name": null,
 *               "subnet_ip": "10.79.107.0",
 *               "subnet_default_router": null,
 *               "mask": "/24",
 *               "unit_network_subnet_type_id": 1,
 *               "unit_network_subnet_type": "LAN"
 *           },
 *           {
 *               "connection_unit_network_subnet_id": 551,
 *               "connection_id": 184,
 *               "unit_network_subnet_id": 5799,
 *               "subnet_name": null,
 *               "subnet_ip": "81.186.16.244",
 *               "subnet_default_router": null,
 *               "mask": "/30",
 *               "unit_network_subnet_type_id": 2,
 *               "unit_network_subnet_type": "NAT"
 *           },
 *           {
 *               "connection_unit_network_subnet_id": 552,
 *               "connection_id": 184,
 *               "unit_network_subnet_id": 11411,
 *               "subnet_name": null,
 *               "subnet_ip": "81.186.194.195",
 *               "subnet_default_router": null,
 *               "mask": "/32",
 *               "unit_network_subnet_type_id": 3,
 *               "unit_network_subnet_type": "ROUTER_IP"
 *           }
 *       ]
 *    },
 *    {
 *      "connection_id": 1353,
 *      "unit": {
 *        "mm_id": 1005932,
 *        "registry_no": "9190637",
 *        "unit_name": "100ο ΟΛΟΗΜΕΡΟ ΔΗΜΟΤΙΚΟ ΣΧΟΛΕΙΟ ΘΕΣΣΑΛΟΝΙΚΗΣ",
 *        "special_unit_name": null
 *      },
 *      "cpe": {
 *        "cpe_id": null,
 *        "cpe": null
 *      },
 *      "ldap": {
 *        "ldap_id": null,
 *        "ldap_uid": null
 *      },
 *      "circuit": {
 *        "circuit_id": 3207,
 *        "phone_number": "2310914550",
 *        "status": true,
 *        "paid_by_psd": true,
 *        "activated_date": null,
 *        "updated_date": "2013-12-13 19:09:00",
 *        "deactivated_date": null,
 *        "bandwidth": "2048\/512Kbps",
 *        "readspeed": null,
 *        "circuit_type_id": "2",
 *        "circuit_type": "aDSLoISDN"
 *      },
 *      "unit_network_subnets": [
 *        {
 *          "connection_unit_network_subnet_id": 4052,
 *          "connection_id": 1353,
 *          "unit_network_subnet_id": 1352,
 *          "subnet_name": null,
 *          "subnet_ip": "10.128.155.0",
 *           "subnet_default_router": null,
 *           "mask": "/24",
 *           "unit_network_subnet_type_id": 1,
 *           "unit_network_subnet_type": "LAN"
 *       },
 *       {
 *          "connection_unit_network_subnet_id": 4053,
 *           "connection_id": 1353,
 *           "unit_network_subnet_id": 6964,
 *           "subnet_name": null,
 *           "subnet_ip": "81.186.171.188",
 *           "subnet_default_router": null,
 *           "mask": "/30",
 *           "unit_network_subnet_type_id": 2,
 *           "unit_network_subnet_type": "NAT"
 *       },
 *       {
 *           "connection_unit_network_subnet_id": 4054,
 *           "connection_id": 1353,
 *           "unit_network_subnet_id": 12580,
 *           "subnet_name": null,
 *           "subnet_ip": "81.186.171.251",
 *           "subnet_default_router": null,
 *           "mask": "/32",
 *           "unit_network_subnet_type_id": 3,
 *           "unit_network_subnet_type": "ROUTER_IP"
 *       }
 *
 *   ]
 *    }
 * ]}
 * </code>
 * <br>
 *
 *
 *
 *
 * @param mixed $unit Μονάδα
 * <br>Το Όνομα ή ο Κωδικός MM της Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα της Μονάδας
 *       <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *       θα αναζητηθεί η τιμή της παραμέτρου
 *       <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *    </li>
 *    <li>array[integer|string]
 *       <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *       <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *    </li>
 * </ul>
 *
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
 *
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Όνομα της Μονάδας (<a href="#$unit">$unit</a>)
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Αν η παράμετρος Μονάδα (<a href="#$unit">$unit</a>) έχει Αριθμητική Τιμή τότε η αναζήτηση γίνεται
 * με τον Κωδικό ΜΜ της Μονάδας με Τύπο {@see SearchEnumTypes::Exact}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}
 *    </li>
 * </ul>
 *
 *
 *
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>array : <b>data</b> : Ο Πίνακας με το λεξικό
 * <ul>
 *    <li>integer : <b>connection_id</b> : Η Ειδικότητα του Εργαζομένου (Λεξικό : {@see GetWorkerSpecializations})</li>
 *    <li>array : <b>unit</b> : Μονάδα
 *       <ul>
 *          <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της Μονάδας (Μονάδες : {@see GetUnits})</li>
 *          <li>string : <b>registry_no</b> : Ο Κωδικός ΥΠΕΠΘ της Μονάδας</li>
 *          <li>string : <b>unit_name</b> : Το Όνομα της Μονάδας</li>
 *          <li>string : <b>special_unit_name</b> : Το Προσωνύμιο της Μονάδας</li>
 *       </ul>
 *    </li>
 *    <li>array : <b>cpe</b> : CPEs
 *       <ul>
 *          <li>integer : <b>cpe_id</b> : Ο Κωδικός του CPE</li>
 *          <li>string : <b>cpe</b> : Το Όνομα του CPE (Λεξικό : {@see GetCpes})</li>
 *       </ul>
 *    </li>
 *    <li>array : <b>ldap</b> : LDaps
 *       <ul>
 *          <li>integer : <b>ldap_id</b> : Ο Κωδικός του ldap</li>
 *          <li>string : <b>ldap_uid</b> : Το uid του ldap (Λεξικό : {@see GetLdaps})</li>
 *       </ul>
 *    </li>
 *    <li>array : <b>circuit</b> : Τηλεπικοινωνιακό Κύκλωμα
 *       <ul>
 *          <li>integer : <b>circuit_id</b> : Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>string : <b>phone_number</b> : Ο Τηλεφωνικός Αριθμός του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>boolean : <b>status</b> : Ενεργό/Ανενεργό Τηλεπικοινωνιακό Κύκλωμα</li>
 *          <li>boolean : <b>paid_by_psd</b> : Χρηματοδοτείται από το Π.Σ.Δ.</li>
 *          <li>date : <b>activated_date</b> : Η Ημερομηνία Εγκατάστασης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>date : <b>updated_date</b> : Η Ημερομηνία Ενημέωσης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>date : <b>deactivated_date</b> : Η Ημερομηνία Απενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>string : <b>bandwidth</b> : Το Εύρως Ζώνης του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>string : <b>readspeed</b> : Η Ταχύτητα του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>integer : <b>circuit_type_id</b> : Ο Κωδικός του Τύπου του Τηλεπικοινωνιακού Κυκλώματος</li>
 *          <li>string : <b>circuit_type</b> : Ο Τύπος του Τηλεπικοινωνιακού Κυκλώματος (Λεξικό : {@see GetCircuitTypes})</li>
 *       </ul>
 *    </li>
 *    <li>array : <b>network_subnet</b> : Υποδίκτυα Μονάδας
 *        <ul>
 *           <li>integer : <b>connection_unit_network_subnet_id</b> : Ο Κωδικός της Διασύνδεσης του Υποδικτύου Μονάδας</li>
 *           <li>integer : <b>connection_id</b> : Ο Κωδικός της Διασύνδεσης (Διασυνδέσεις : {@see GetConnections})</li>
 *           <li>integer : <b>unit_network_subnet_id</b> : Ο Κωδικός του Υποδικτύου Μονάδας ( Λεξικό :{@see GetUnitNetworkSubnets)}</li>
 *           <li>string : <b>subnet_name</b> : Το Όνομα του Υποδικτύου Μονάδας</li>
 *           <li>string : <b>subnet_ip</b> : Η IP Διευθυνση του Υποδικτύου Μονάδας</li>
 *           <li>string : <b>mask</b> : Η Μάσκα του Υποδικτύου Μονάδας.</li>
 *           <li>string : <b>subnet_default_router</b> : Η Default Gateway του Υποδικτύου Μονάδας</li>
 *           <li>integer : <b>unit_network_subnet_type_id</b> : Ο Κωδικός του Τύπου Υποδικτύου</li>
 *           <li>string : <b>unit_network_subnet_type</b> : Ο Τύπος του Τύπου Υποδικτύου (Λεξικό : {@see GetUnitNetworkSubnetTypes})</li>
 *          </ul>
 *      </li>
 * 
 * </ul>
 *
 *
 *
 *
 * @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}
 * <br>{@see ExceptionCodes::InvalidSearchType}
 * <br>Ο Τύπος Αναζήτησης είναι λάθος
 *
 * @throws MissingPageValue {@see ExceptionMessages::MissingPageValue}
 * <br>{@see ExceptionCodes::MissingPageValue}
 * <br>Ο Αριθμός Σελίδας πρέπει να έχει τιμή
 *
 * @throws InvalidPageArray {@see ExceptionMessages::InvalidPageArray}
 * <br>{@see ExceptionCodes::InvalidPageArray}
 * <br>Ο Αριθμός Σελίδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidPageNumber {@see ExceptionMessages::InvalidPageNumber}
 * <br>{@see ExceptionCodes::InvalidPageNumber}
 * <br>Ο Αριθμός Σελίδας πρέπει να είναι μεγαλύτερος από 0
 *
 * @throws InvalidPageType {@see ExceptionMessages::InvalidPageType}
 * <br>{@see ExceptionCodes::InvalidPageType}
 * <br>Ο Αριθμός Σελίδας πρέπει να είναι αριθμητικός
 *
 * @throws MissingPageSizeValue {@see ExceptionMessages::MissingPageSizeValue}
 * <br>{@see ExceptionCodes::MissingPageSizeValue}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να έχει τιμή
 *
 * @throws InvalidPageSizeArray {@see ExceptionMessages::InvalidPageSizeArray}
 * <br>{@see ExceptionCodes::InvalidPageSizeArray}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidPageSizeNumber {@see ExceptionMessages::InvalidPageSizeNumber}
 * <br>{@see ExceptionCodes::InvalidPageSizeNumber}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι από 0 έως 500
 *
 * @throws InvalidPageSizeType {@see ExceptionMessages::InvalidPageSizeType}
 * <br>{@see ExceptionCodes::InvalidPageSizeType}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι αριθμητικός
 *
 * @throws InvalidUnitType {@see ExceptionMessages::InvalidUnitType}
 * <br>{@see ExceptionCodes::InvalidUnitType}
 * <br>Η Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidOrderType {@see ExceptionMessages::InvalidOrderType}
 * <br>{@see ExceptionCodes::InvalidOrderType}
 * <br>Ο Τύπος Ταξινόμησης πρέπει να είναι ASC ή DESC
 *
 * @throws InvalidOrderBy {@see ExceptionMessages::InvalidOrderBy}
 * <br>{@see ExceptionCodes::InvalidOrderBy}
 * <br>Το Πεδίο Ταξινόμησης πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση
 *
 *
 */


function GetConnections(
    $unit,
    $pagesize, $page, $orderby, $ordertype, $searchtype
)
{
    global $db;

    $filter = array();
    $result = array();

    $result["data"] = array();

    $result["method"] = __FUNCTION__;

    $params = loadParameters();

    try
    {

//======================================================================================================================
//= Paging
//======================================================================================================================

        if ( Validator::Missing('searchtype', $params) )
            $searchtype = SearchEnumTypes::ContainAll ;
        else if ( SearchEnumTypes::isValidValue( $searchtype ) || SearchEnumTypes::isValidName( $searchtype ) )
            $searchtype = SearchEnumTypes::getValue($searchtype);
        else
            throw new Exception(ExceptionMessages::InvalidSearchType." : ".$searchtype, ExceptionCodes::InvalidSearchType);


        if ( Validator::Missing('page', $params) )
            $page = 1;
        else if ( Validator::isNull($page) )
            throw new Exception(ExceptionMessages::MissingPageValue, ExceptionCodes::MissingPageValue);
        elseif ( Validator::isArray($page) )
            throw new Exception(ExceptionMessages::InvalidPageArray, ExceptionCodes::InvalidPageArray);
        elseif (Validator::isLowerThan($page, 0, true) )
            throw new Exception(ExceptionMessages::InvalidPageNumber, ExceptionCodes::InvalidPageNumber);
        elseif (!Validator::isGreaterThan($page, 0) )
            throw new Exception(ExceptionMessages::InvalidPageType, ExceptionCodes::InvalidPageType);
        else
            $page = Validator::toInteger($page);



        if ( Validator::Missing('pagesize', $params) )
            $pagesize = Parameters::DefaultPageSize;
        else if ( Validator::isEqualTo($pagesize, 0) )
            $pagesize = Parameters::AllPageSize;
        else if ( Validator::isNull($pagesize) )
            throw new Exception(ExceptionMessages::MissingPageSizeValue, ExceptionCodes::MissingPageSizeValue);
        elseif ( Validator::isArray($pagesize) )
            throw new Exception(ExceptionMessages::InvalidPageSizeArray, ExceptionCodes::InvalidPageSizeArray);
        elseif ( (Validator::isLowerThan($pagesize, 0) ) )
            throw new Exception(ExceptionMessages::InvalidPageSizeNumber, ExceptionCodes::InvalidPageSizeNumber);
        elseif (!Validator::isGreaterThan($pagesize, 0) )
            throw new Exception(ExceptionMessages::InvalidPageSizeType, ExceptionCodes::InvalidPageSizeType);
        else
            $pagesize = Validator::toInteger($pagesize);

//======================================================================================================================
//= $unit
//======================================================================================================================

        if ( Validator::Exists('unit', $params) )
        {
            $table_name = "units";
            $table_column_id = "mm_id";
            $table_column_name = "name";

            $param = Validator::toArray($unit);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
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
                    throw new Exception(ExceptionMessages::InvalidUnitDNSType." : ".$values, ExceptionCodes::InvalidUnitDNSType);

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

        if ( Validator::Missing('orderby', $params) )
            $orderby = "unit_name";
        else
        {
            $columns = array(
                "connection_id",
                "mm_id",
                "registry_no",
                "unit_name",
                "special_unit_name",
                "circuit_id",
                "phone_number",
                "status",
                "activated_date",
                "paid_by_psd",
                "updated_date",
                "deactivated_date",
                "bandwidth",
                "readspeed",
                "circuit_type_id",
                "circuit_type",
                "cpe_id",
                "cpe",
                "ldap_id",
                "ldap_uid"
            );

            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        $sqlSelect = "SELECT
                        connections.connection_id,
                        units.mm_id,
                        units.registry_no,
                        units.name as unit_name,
                        units.special_name as special_unit_name,
                        circuits.circuit_id,
                        circuits.phone_number,
                        circuits.status,
                        circuits.activated_date,
                        circuits.paid_by_psd,
                        circuits.updated_date,
                        circuits.deactivated_date,
                        circuits.bandwidth,
                        circuits.readspeed,
                        circuit_types.circuit_type_id,
                        circuit_types.name as circuit_type,
                        cpes.cpe_id,
                        cpes.name as cpe,
                        ldaps.ldap_id,
                        ldaps.uid as ldap_uid
                     ";

        $sqlFrom = "FROM connections
                    LEFT JOIN circuits ON connections.circuit_id = circuits.circuit_id
                    LEFT JOIN units ON connections.mm_id = units.mm_id
                    LEFT JOIN cpes ON connections.cpe_id = cpes.cpe_id
                    LEFT JOIN ldaps ON connections.ldap_id = ldaps.ldap_id
                    LEFT JOIN circuit_types ON circuits.circuit_type_id = circuit_types.circuit_type_id
                    ";

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
   
        $ids = "'0'";
        foreach ($rows as $row)
        {
            $ids .= ($ids ? ", " : "") . "'".$row["connection_id"]."'";
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
                             unit_network_subnet_types.subnet_type as unit_network_subnet_type
                             ";

        $sqlFrom   = "FROM connection_unit_network_subnets
                      LEFT JOIN unit_network_subnets ON connection_unit_network_subnets.unit_network_subnet_id = unit_network_subnets.unit_network_subnet_id
                      LEFT JOIN unit_network_subnet_types ON unit_network_subnets.unit_network_subnet_type_id = unit_network_subnet_types.unit_network_subnet_type_id";

        $sqlWhere = " WHERE connection_unit_network_subnets.connection_id in (".$ids.")";
        $sqlOrder = " ORDER BY connection_unit_network_subnets.connection_unit_network_subnet_id ASC, connection_unit_network_subnets.unit_network_subnet_id ASC";

        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder;
        //echo "<br><br>".$sql."<br><br>";

        $unit_network_subnets_stmt = $db->query( $sql );
        $array_unit_network_subnets = $unit_network_subnets_stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($array_unit_network_subnets as $unit_network_subnet)
        {
            $unit_network_subnets[ $unit_network_subnet["connection_id"] ][ $unit_network_subnet["connection_unit_network_subnet_id"] ] = $unit_network_subnet;
        }
  
//=================================/**=====================================================================================
//= R E S U L T S
//======================================================================================================================  
        
        foreach ($rows as $row)
        {

            $connection_unit_network_subnets["unit_network_subnets"] = array();
        foreach ($unit_network_subnets[ $row["connection_id"] ] as $unit_network_subnet)
            {
         
                $connection_unit_network_subnets["unit_network_subnets"][] = array(
                    "connection_unit_network_subnet_id"       => $unit_network_subnet["connection_unit_network_subnet_id"] ? (int)$unit_network_subnet["connection_unit_network_subnet_id"] : null,
                    "connection_id"                           => $unit_network_subnet["connection_id"]? (int)$unit_network_subnet["connection_id"] : null,
                    "unit_network_subnet_id"                  => $unit_network_subnet["unit_network_subnet_id"] ? (int)$unit_network_subnet["unit_network_subnet_id"] : null,
                    "unit_network_subnet_id"        => Validator::toIntVal($unit_network_subnet["unit_network_subnet_id"]),
                    "subnet_name"                   => $unit_network_subnet["subnet_name"],
                    "subnet_ip"                     => $unit_network_subnet["subnet_ip"],
                    "subnet_default_router"         => $unit_network_subnet["subnet_default_router"],
                    "mask"                          => $unit_network_subnet["mask"],
                    "unit_network_subnet_type_id"   => Validator::toIntVal($unit_network_subnet["unit_network_subnet_type_id"]),
                    "unit_network_subnet_type"      => $unit_network_subnet["unit_network_subnet_type"],
                );
            }

       
            
            $result["data"][] = array(
                "connection_id" => $row["connection_id"] ? (int)$row["connection_id"] : null,

                "unit" => array(
                    "mm_id" => $row["mm_id"] ? (int)$row["mm_id"] : null,
                    "registry_no"   => $row["registry_no"],
                    "unit_name"   => $row["unit_name"],
                    "special_unit_name"   => $row["special_unit_name"],
                ),

                "cpe" => array(
                    "cpe_id" => $row["cpe_id"] ? (int)$row["cpe_id"] : null,
                    "cpe"   => $row["cpe"],
                ),

                "ldap" => array(
                    "ldap_id" => $row["ldap_id"] ? (int)$row["ldap_id"] : null,
                    "ldap_uid"=> $row["ldap_uid"],
                ),

                "circuit" => array(
                    "circuit_id"       => $row["circuit_id"] ? (int)$row["circuit_id"] : null,
                    "phone_number"     => $row["phone_number"],
                    "status"           => $row["status"] ? (bool)$row["status"] : null,
                    "paid_by_psd"      => $row["paid_by_psd"] ? (bool)$row["paid_by_psd"] : null,
                    "activated_date"   => $row["activated_date"],
                    "updated_date"     => $row["updated_date"],
                    "deactivated_date" => $row["deactivated_date"],
                    "bandwidth"        => $row["bandwidth"],
                    "readspeed"        => $row["readspeed"],
                    "circuit_type_id"  => $row["circuit_type_id"] ? $row["circuit_type_id"] : null,
                    "circuit_type"     => $row["circuit_type"],
                ),
                
                "unit_network_subnets" => $connection_unit_network_subnets["unit_network_subnets"]
            );
        }

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