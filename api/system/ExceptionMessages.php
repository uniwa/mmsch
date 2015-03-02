<?php

/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package System
 */

header("Content-Type: text/html; charset=utf-8");

/** 
 * Μηνύματα Σφαλμάτων
 * 
 * Παρακάτω εμφανίζονται τα Μηνύματα Σφαλμάτων που διαχειρίζετε η {@see CustomException}
 * 
 * Δείτε τους Κωδικούς που αντιστοιχούν στα παρακάτω Μηνύματα Σφαλμάτων {@see ExceptionCodes}
 * 
 */

class ExceptionMessages
{
    const NoErrors = 'success';
    
    const Unauthorized = 'HTTP Error 401 Unauthorized';
    const UserAccesDenied = 'Ο χρήστης δεν έχει πρόσβαση';
    const UserNoPermissions = 'Ο χρήστης δεν έχει συγκεριμενα δικαιώματα πρόσβασης';
    
    const MethodNotFound = 'Η Μέθοδος δεν βρέθηκε';
    
    const MissingPageValue = 'Ο Αριθμός Σελίδας πρέπει να έχει τιμή';
    const InvalidPageNumber = 'Ο Αριθμός Σελίδας πρέπει να είναι μεγαλύτερος από 0';
    const InvalidPageType = 'Ο Αριθμός Σελίδας πρέπει να είναι αριθμητικός';
    const InvalidPageArray = 'Ο Αριθμός Σελίδας δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingPageSizeValue = 'Ο Αριθμός Εγγραφών/Σελίδα πρέπει να έχει τιμή';
    const InvalidPageSizeNumber = 'Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι από 0 έως 500';
    const InvalidPageSizeType = 'Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι αριθμητικός';
    const InvalidPageSizeArray = 'Ο Αριθμός Εγγραφών/Σελίδα δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingPageSizeNegativeValue = 'Ο Αριθμός Εγγραφών/Σελίδα δεν μπορεί να έχει αρνητική τιμή και πρέπει να είναι μεγαλύτερος από 0';

    const InvalidMaxPageNumber = 'Ο Αριθμός Σελίδας έιναι μεγαλύτερος από την μέγιστη τιμή της σελιδοποίησης. Μέγιστη τιμή σελιδοποίησης = ';
    


    const InvalidSearchType = 'Ο Τύπος Αναζήτησης είναι λάθος';
    const InvalidOrderType = 'Ο Τύπος Ταξινόμησης πρέπει να είναι ASC ή DESC';
    const InvalidOrderBy = 'Το Πεδίο Ταξινόμησης πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση';
    const InvalidExportType = 'Ο Τύπος Επιστροφής Δεδομένων σε συγκεκριμένο format είναι λάθος';
        
    const MissingSelectionCheckRequiredParam = 'Το πεδίο Επιλογή Διαδικασίας Null Τιμών είναι υποχρεωτικό πεδίο';
    const MissingSelectionCheckRequiredValue = 'Το πεδίο Επιλογή Διαδικασίας Null Τιμών πρέπει να έχει τιμή';
    const InvalidSelectionCheckRequiredType = 'Το πεδίο Επιλογή Διαδικασίας Null Τιμών πρέπει να είναι αριθμητικό';
    const InvalidSelectionCheckRequiredArray = 'Το πεδίο Επιλογή Διαδικασίας Null Τιμών δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidSelectionCheckRequiredValue = 'Το πεδίο Επιλογή Διαδικασίας Null Τιμών πρέπει να έχει τιμή μεταξύ 1-10';
    const InvalidAllDataSelectionCheckRequiredValue = 'Το πεδίο all_data πρέπει να έχει τιμή true για την επιστροφή περισσότερων αποτελεσμάτων';
 
    const MissingXAxisParam = 'Ο Άξονας x είναι υποχρεωτικό πεδίο';
    const MissingXAxisValue = 'Ο Άξονας x πρέπει να έχει τιμή';
    const InvalidXAxisType = 'Ο Άξονας x πρέπει να είναι αλφαριθμητικός';
    const InvalidXAxisArray = 'Ο Άξονας x δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidXAxis = 'Ο Άξονας x πρέπεινα πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση';

    const MissingYAxisParam = 'Ο Άξονας y είναι υποχρεωτικό πεδίο';
    const MissingYAxisValue = 'Ο Άξονας y πρέπει να έχει τιμή';
    const InvalidYAxisType = 'Ο Άξονας y πρέπει να είναι αλφαριθμητικός';
    const InvalidYAxisArray = 'Ο Άξονας y δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidYAxis = 'Ο Άξονας y πρέπεινα πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση';
    
    const MissingNameParam = 'Το Όνομα είναι υποχρεωτικό πεδίο';
    const MissingNameValue = 'Το Όνομα πρέπει να έχει τιμή';
    const InvalidNameType = 'Το Όνομα πρέπει να είναι αλφαριθμητικό';
    const InvalidNameArray = 'Το Όνομα δεν μπορεί να έχει πολλαπλές τιμές';

    //= Categories==============================================================
    
    const MissingCategoryIDParam = 'Ο Κωδικός της Κατηγορίας είναι υποχρεωτικό πεδίο';
    const MissingCategoryIDValue = 'Ο Κωδικός της Κατηγορίας πρέπει να έχει τιμή';
    const InvalidCategoryIDType = 'Ο Κωδικός της Κατηγορίας πρέπει να είναι αριθμητικός';
    const InvalidCategoryIDArray = 'Ο Κωδικός της Κατηγορίας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingCategoryParam = 'Η Κατηγορία είναι υποχρεωτικό πεδίο';
    const MissingCategoryValue = 'Η Κατηγορία πρέπει να έχει τιμή';
    const InvalidCategoryValue = 'Η Κατηγορία δεν βρέθηκε στο λεξικό';
    const InvalidCategoryType = 'Η Κατηγορία πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidCategoryArray = 'Η Κατηγορία δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingCategoryNameParam = 'Το Όνομα της Κατηγορίας είναι υποχρεωτικό πεδίο';
    const MissingCategoryNameValue = 'Το Όνομα της Κατηγορίας πρέπει να έχει τιμή';
    const InvalidCategoryNameType = 'Το Όνομα της Κατηγορίας πρέπει να είναι αλφαριθμητικό';
    const InvalidCategoryNameArray = 'Το Όνομα της Κατηγορίας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedCategoryValue = 'Η Κατηγορία υπάρχει ήδη';
    const DuplicatedCategoryUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Category';

    //= GetSchoolCommittees
    const MissingSchoolCommitteeIDParam = 'Ο Κωδικός της Σχολική Επιτροπής είναι υποχρεωτικό πεδίο';
    const MissingSchoolCommitteeIDValue = 'Ο Κωδικός της Σχολική Επιτροπής πρέπει να έχει τιμή';
    const InvalidSchoolCommitteeIDType = 'Ο Κωδικός της Σχολική Επιτροπής πρέπει να είναι αριθμητικός';
    const InvalidSchoolCommitteeIDArray = 'Ο Κωδικός της  Σχολική Επιτροπής δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingSchoolCommitteeParam = 'Η Σχολική Επιτροπή είναι υποχρεωτικό πεδίο';
    const MissingSchoolCommitteeValue = 'Η Σχολική Επιτροπή πρέπει να έχει τιμή';
    const InvalidSchoolCommitteeValue = 'Η Σχολική Επιτροπή δεν υπάρχει στο λεξικό';
    const InvalidSchoolCommitteeType = 'Η Σχολική Επιτροπή πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedSchoolCommitteeValue = 'Η Σχολική Επιτροπή υπάρχει ήδη';


    //= GetEducationLevels
    const MissingEducationLevelIDParam = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEducationLevelIDValue = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEducationLevelIDType = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης πρέπει να είναι αριθμητικός';
    const InvalidEducationLevelIDArray = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingEducationLevelValue = 'Το Επίπεδο Εκπαίδευσης πρέπει να έχει τιμή';
    const MissingEducationLevelParam = 'Το Επίπεδο Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const InvalidEducationLevelValue = 'Το Επίπεδο Εκπαίδευσης δεν υπάρχει στο λεξικό';
    const InvalidEducationLevelType = 'Το Επίπεδο Εκπαίδευσης πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const DuplicatedEducationLevelValue = 'Το Επίπεδο Εκπαίδευσης υπάρχει ήδη';


    //= GetLdaps
    const MissingUnitID = 'Ο Κωδικός του Μονάδας είναι υποχρεωτικό πεδίο';

    //= GetUnitDns
//    const InvalidUnitDNSType = 'Το DNS πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
//    const InvalidExtUnitDnsType = 'Το ExtDNS πρέπει να είναι αλφαριθμητικό';
//    const InvalidUnitUIDType = 'Το UID πρέπει να είναι αλφαριθμητικό';


    //= CircuitTypes
    const MissingCircuitTypeIDParam = 'Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος είναι υποχρεωτικό πεδίο';
    const MissingCircuitTypeIDValue = 'Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να έχει τιμή';
    const InvalidCircuitTypeIDType = 'Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός';
    const InvalidCircuitTypeIDArray = 'Ο Κωδικός του Τύπου Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingCircuitTypeValue = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος πρέπει να έχει τιμή';
    const MissingCircuitTypeParam = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος είναι υποχρεωτικό πεδίο';
    const InvalidCircuitTypeValue = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος δεν υπάρχει στο λεξικό';
    const InvalidCircuitTypeType = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidCircuitTypeArray = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές';
    const DuplicatedCircuitTypeValue = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος υπάρχει ήδη';
    const UsedCircuitTypeByCircuits = 'Ο Τύπος χρησιμοποιείται από Τηλεπικοινωνιακά Κυκλώματα';




    //= GetAddrspaceTypes
    const MissingAddrspaceTypeIDParam = 'Ο Κωδικός του Τύπου της Διευθυνσιοδότησης είναι υποχρεωτικό πεδίο';
    const MissingAddrspaceTypeIDValue = 'Ο Κωδικός του Τύπου της Διευθυνσιοδότησης πρέπει να έχει τιμή';
    const InvalidAddrspaceTypeIDType = 'Ο Κωδικός του Τύπου της Διευθυνσιοδότησης πρέπει να είναι αριθμητικός';
    const InvalidAddrspaceTypeIDArray = 'Ο Κωδικός του Τύπου της Διευθυνσιοδότησης δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingAddrspaceTypeValue = 'Ο Τύπος της Διευθυνσιοδότησης πρέπει να έχει τιμή';
    const MissingAddrspaceTypeParam = 'Ο Τύπος της Διευθυνσιοδότησης είναι υποχρεωτικό πεδίο';
    const InvalidAddrspaceTypeValue = 'Ο Τύπος της Διευθυνσιοδότησης δεν υπάρχει στο λεξικό';
    const InvalidAddrspaceTypeType = 'Ο Τύπος της Διευθυνσιοδότησης πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedAddrspaceTypeValue = 'Ο Τύπος της Διευθυνσιοδότησης υπάρχει ήδη';

    //= GetSources
    const MissingSourceIDParam = 'Ο Κωδικός της Πρωτογενής Πηγής είναι υποχρεωτικό πεδίο';
    const MissingSourceIDValue = 'Ο Κωδικός της Πρωτογενής Πηγής πρέπει να έχει τιμή';
    const InvalidSourceIDType = 'Ο Κωδικός της Πρωτογενής Πηγής πρέπει να είναι αριθμητικός';
    const InvalidSourceIDArray = 'Ο Κωδικός της Πρωτογενής Πηγής δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingSourceValue = 'Η Πρωτογενής Πηγή πρέπει να έχει τιμή';
    const MissingSourceParam = 'Η Πρωτογενής Πηγή είναι υποχρεωτικό πεδίο';
    const InvalidSourceValue = 'Η Πρωτογενής Πηγή δεν υπάρχει στο λεξικό';
    const InvalidSourceType = 'Η Πρωτογενής Πηγή πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const MissingSourceVisibleParam = 'H δυνατότητα Εμφάνισης της Πρωτογενής Πηγής είναι υποχρεωτικό πεδίο';
    const MissingSourceVisibleValue = 'Η δυνατότητα Εμφάνισης της Πρωτογενής Πηγής πρέπει να έχει τιμή';
    const InvalidSourceVisibleType = 'Η δυνατότητα Εμφάνισης της Πρωτογενής Πηγής πρέπει να είναι αλφαριθμητική(true|false)';
    const InvalidSourceVisibleArray = 'Η δυνατότητα Εμφάνισης της Πρωτογενής Πηγής δεν μπορεί να έχει πολλαπλές τιμές';
    const DuplicatedSourceValue = 'Η Πρωτογενής Πηγή υπάρχει ήδη';


    //= GetStates
    const MissingStateIDParam = 'Ο Κωδικός της Κατάστασης είναι υποχρεωτικό πεδίο';
    const MissingStateIDValue = 'Ο Κωδικός της Κατάστασης πρέπει να έχει τιμή';
    const InvalidStateIDType = 'Ο Κωδικός της Κατάστασης πρέπει να είναι αριθμητικός';
    const InvalidStateIDArray = 'Ο Κωδικός της Κατάστασης  δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingStateValue = 'Η Κατάσταση πρέπει να έχει τιμή';
    const MissingStateParam = 'Η Κατάσταση είναι υποχρεωτικό πεδίο';
    const InvalidStateValue = 'Η Κατάσταση δεν υπάρχει στο λεξικό';
    const InvalidStateType = 'Η Κατάσταση πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedStateValue = 'Η Κατάσταση υπάρχει ήδη';


    //= GetRelationTypes
    const MissingRelationTypeIDParam = 'Ο Κωδικός του Τύπου Συσχέτισης είναι υποχρεωτικό πεδίο';
    const MissingRelationTypeIDValue = 'Ο Κωδικός του Τύπου Συσχέτισης πρέπει να έχει τιμή';
    const InvalidRelationTypeIDType = 'Ο Κωδικός του Τύπου Συσχέτισης πρέπει να είναι αριθμητικός';
    const InvalidRelationTypeIDArray = 'Ο Κωδικός του Τύπου Συσχέτισης δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingRelationTypeValue = 'Ο Τύπος Συσχέτισης πρέπει να έχει τιμή';
    const MissingRelationTypeParam = 'Ο Τύπος Συσχέτισης είναι υποχρεωτικό πεδίο';
    const InvalidRelationTypeValue = 'Ο Τύπος Συσχέτισης δεν υπάρχει στο λεξικό';
    const InvalidRelationTypeType = 'Ο Τύπος Συσχέτισης πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedRelationTypeValue = 'Ο Τύπος Συσχέτισης υπάρχει ήδη';



    //= GetIpMasks
    const MissingIpMaskIDParam = 'Ο Κωδικός της Μάσκας Δικτύου είναι υποχρεωτικό πεδίο';
    const MissingIpMaskIDValue = 'Ο Κωδικός της Μάσκας Δικτύου πρέπει να έχει τιμή';
    const InvalidIpMaskIDType = 'Ο Κωδικός της Μάσκας Δικτύου πρέπει να είναι αριθμητικός';
    const InvalidIpMaskIDArray = 'Ο Κωδικός της Μάσκας Δικτύου δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingIpMaskValue = 'Η Μάσκα Δικτύου πρέπει να έχει τιμή';
    const MissingIpMaskParam = 'Η Μάσκα Δικτύου είναι υποχρεωτικό πεδίο';
    const InvalidIpMaskValue = 'Η Μάσκα Δικτύου δεν υπάρχει στο λεξικό';
    const InvalidIpMaskType = 'Η Μάσκα Δικτύου πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedIpMaskValue = 'Η Μάσκα Δικτύου ($ip_mask) υπάρχει ήδη';



    //= GetPrefectures
    const MissingPrefectureIDValue = 'Ο Κωδικός του Νομού πρέπει να έχει τιμή';
    const MissingPrefectureIDParam = 'Ο Κωδικός του Νομού είναι υποχρεωτικό πεδίο';
    const InvalidPrefectureIDType = 'Ο Κωδικός του Νομού πρέπει να είναι αριθμητικός';
    const InvalidPrefectureIDArray = 'Ο Κωδικός του Νομού δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingPrefectureValue = 'Ο Νομός πρέπει να έχει τιμή';
    const MissingPrefectureParam = 'Ο Νομός είναι υποχρεωτικό πεδίο';
    const InvalidPrefectureValue = 'Ο Νομός δεν υπάρχει στο λεξικό';
    const InvalidPrefectureType = 'Ο Νομός πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedPrefectureValue = 'Ο Νομός υπάρχει ήδη';



    //= GetTaxOffices
    const MissingTaxOfficeIDValue = 'Ο Κωδικός της Δ.Ο.Υ. πρέπει να έχει τιμή';
    const MissingTaxOfficeIDParam = 'Ο Κωδικός της Δ.Ο.Υ. είναι υποχρεωτικό πεδίο';
    const InvalidTaxOfficeIDType = 'Ο Κωδικός της Δ.Ο.Υ. πρέπει να είναι αριθμητικός';
    const InvalidTaxOfficeIDArray = 'Ο Κωδικός της Δ.Ο.Υ. δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingTaxOfficeValue = 'Η Δ.Ο.Υ. πρέπει να έχει τιμή';
    const MissingTaxOfficeParam = 'Η Δ.Ο.Υ. είναι υποχρεωτικό πεδίο';
    const InvalidTaxOfficeValue = 'Η Δ.Ο.Υ. δεν υπάρχει στο λεξικό';
    const InvalidTaxOfficeType = 'Η Δ.Ο.Υ. πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedTaxOfficeValue = 'Η Δ.Ο.Υ. υπάρχει ήδη';



    //= GetSpecialTypes
    const MissingSpecialTypeIDValue = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού πρέπει να έχει τιμή';
    const MissingSpecialTypeIDParam = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού είναι υποχρεωτικό πεδίο';
    const InvalidSpecialTypeIDType = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού πρέπει να είναι αριθμητικός';
    const InvalidSpecialTypeIDArray = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingSpecialTypeValue = 'Ο Ειδικός Χαρακτηρισμός πρέπει να έχει τιμή';
    const MissingSpecialTypeParam = 'Ο Ειδικός Χαρακτηρισμός είναι υποχρεωτικό πεδίο';
    const InvalidSpecialTypeValue = 'Ο Ειδικός Χαρακτηρισμός δεν υπάρχει στο λεξικό';
    const InvalidSpecialTypeType = 'Ο Ειδικός Χαρακτηρισμός πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedSpecialTypeValue = 'Ο Ειδικός Χαρακτηρισμός υπάρχει ήδη';



    //= GetLegalCharacters
    const MissingLegalCharacterIDValue = 'Ο Κωδικός του Νομικού Χαρακτήρα πρέπει να έχει τιμή';
    const MissingLegalCharacterIDParam = 'Ο Κωδικός του Νομικού Χαρακτήρα είναι υποχρεωτικό πεδίο';
    const InvalidLegalCharacterIDType = 'Ο Κωδικός του Νομικού Χαρακτήρα πρέπει να είναι αριθμητικός';
    const InvalidLegalCharacterIDArray = 'Ο Κωδικός του Νομικού Χαρακτήρα δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingLegalCharacterValue = 'Ο Νομικός Χαρακτήρας πρέπει να έχει τιμή';
    const MissingLegalCharacterParam = 'Ο Νομικός Χαρακτήρας είναι υποχρεωτικό πεδίο';
    const InvalidLegalCharacterValue = 'Ο Νομικός Χαρακτήρας δεν υπάρχει στο λεξικό';
    const InvalidLegalCharacterType = 'Ο Νομικός Χαρακτήρας πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedLegalCharacterValue = 'Ο Νομικός Χαρακτήρας υπάρχει ήδη';



    //= GetOrientationTypes
    const MissingOrientationTypeIDValue = 'Ο Κωδικός του Σχολικού Προσανατολισμού πρέπει να έχει τιμή';
    const MissingOrientationTypeIDParam = 'Ο Κωδικός του Σχολικού Προσανατολισμού είναι υποχρεωτικό πεδίο';
    const InvalidOrientationTypeIDType = 'Ο Κωδικός του Σχολικού Προσανατολισμού πρέπει να είναι αριθμητικός';
    const InvalidOrientationTypeIDArray = 'Ο Κωδικός του Σχολικού Προσανατολισμού δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingOrientationTypeValue = 'Ο Σχολικός Προσανατολισμός πρέπει να έχει τιμή';
    const MissingOrientationTypeParam = 'Ο Σχολικός Προσανατολισμός είναι υποχρεωτικό πεδίο';
    const InvalidOrientationTypeValue = 'Ο Σχολικός Προσανατολισμός δεν υπάρχει στο λεξικό';
    const InvalidOrientationTypeType = 'Ο Σχολικός Προσανατολισμός πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedOrientationTypeValue = 'Ο Σχολικός Προσανατολισμός υπάρχει ήδη';



    //= GetOperationShifts
    const MissingOperationShiftIDValue = 'Ο Κωδικός του Ωραρίου Λειτουργίας πρέπει να έχει τιμή';
    const MissingOperationShiftIDParam = 'Ο Κωδικός του Ωραρίου Λειτουργίας είναι υποχρεωτικό πεδίο';
    const InvalidOperationShiftIDType = 'Ο Κωδικός του Ωραρίου Λειτουργίας πρέπει να είναι αριθμητικός';
    const InvalidOperationShiftIDArray = 'Ο Κωδικός του Ωραρίου Λειτουργίας δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingOperationShiftValue = 'Το Ωράριο Λειτουργίας πρέπει να έχει τιμή';
    const MissingOperationShiftParam = 'Το Ωράριο Λειτουργίας είναι υποχρεωτικό πεδίο';
    const InvalidOperationShiftValue = 'Το Ωράριο Λειτουργίας δεν υπάρχει στο λεξικό';
    const InvalidOperationShiftType = 'Το Ωράριο Λειτουργίας πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedOperationShiftValue = 'Το Ωράριο Λειτουργίας υπάρχει ήδη';



    //= GetUnitTypes
    const MissingUnitTypeIDValue = 'Ο Κωδικός του Τύπου Μονάδας πρέπει να έχει τιμή';
    const MissingUnitTypeIDParam = 'Ο Κωδικός του Τύπου Μονάδαςς είναι υποχρεωτικό πεδίο';
    const InvalidUnitTypeIDType = 'Ο Κωδικός του Τύπου Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidUnitTypeIDArray = 'Ο Κωδικός του Τύπου Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingUnitTypeValue = 'Ο Τύπος Μονάδας πρέπει να έχει τιμή';
    const MissingUnitTypeParam = 'Ο Τύπος Μονάδας είναι υποχρεωτικό πεδίο';
    const InvalidUnitTypeValue = 'Ο Τύπος Μονάδας δεν υπάρχει στο λεξικό';
    const InvalidUnitTypeType = 'Ο Τύπος Μονάδας πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedUnitTypeValue = 'Ο Τύπος Μονάδας υπάρχει ήδη';



    //= GetAddrspaces
    const MissingAddrspaceIDParam = 'Ο Κωδικός της Διευθυνσιοδότησης είναι υποχρεωτικό πεδίο';
    const MissingAddrspaceIDValue = 'Ο Κωδικός της Διευθυνσιοδότησης πρέπει να έχει τιμή';
    const InvalidAddrspaceIDType = 'Ο Κωδικός της Διευθυνσιοδότησης πρέπει να είναι αριθμητικός';
    const InvalidAddrspaceIDArray = 'Ο Κωδικός της Διευθυνσιοδότησης δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingAddrspaceValue = 'Η Διευθυνσιοδότηση πρέπει να έχει τιμή';
    const MissingAddrspaceParam = 'Η Διευθυνσιοδότηση είναι υποχρεωτικό πεδίο';
    const InvalidAddrspaceValue = 'Η Διευθυνσιοδότηση δεν υπάρχει στο λεξικό';
    const InvalidAddrspaceType = 'Η Διευθυνσιοδότηση πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedAddrspaceValue = 'Η Διευθυνσιοδότηση υπάρχει ήδη';



    //= GetRegionEduAdmins
    const MissingRegionEduAdminIDParam = 'Ο Κωδικός της Περιφέρειας είναι υποχρεωτικό πεδίο';
    const MissingRegionEduAdminIDValue = 'Ο Κωδικός της Περιφέρειας πρέπει να έχει τιμή';
    const InvalidRegionEduAdminIDType = 'Ο Κωδικός της Περιφέρειας πρέπει να είναι αριθμητικός';
    const InvalidRegionEduAdminIDArray = 'Ο Κωδικός της Περιφέρειας δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingRegionEduAdminValue = 'Η Περιφέρεια πρέπει να έχει τιμή';
    const MissingRegionEduAdminParam = 'Η Περιφέρεια είναι υποχρεωτικό πεδίο';
    const InvalidRegionEduAdminValue = 'Η Περιφέρεια (δεν υπάρχει στο λεξικό';
    const InvalidRegionEduAdminType = 'Η Περιφέρεια πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedRegionEduAdminValue = 'Η Περιφέρεια υπάρχει ήδη';


    //= GetImplementationEntities
    const MissingImplementationEntityIDParam = 'Ο Κωδικός του Φορέα Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityIDValue = 'Ο Κωδικός του Φορέα Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityIDType = 'Ο Κωδικός του Φορέα Υλοποίησης πρέπει να είναι αριθμητικός';
    const InvalidImplementationEntityIDArray = 'Ο Κωδικός του Φορέα Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingImplementationEntityValue = 'Ο Φορεάς Υλοποίησης πρέπει να έχει τιμή';
    const MissingImplementationEntityParam = 'Ο Φορέας Υλοποίησης είναι υποχρεωτικό πεδίο';
    const InvalidImplementationEntityValue = 'Ο Φορέας Υλοποίησης δεν υπάρχει στο λεξικό';
    const InvalidImplementationEntityType = 'Ο Φορέας Υλοποίησης πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedImplementationEntityValue = 'Ο Φορέας Υλοποίησης υπάρχει ήδη';





    //= GetCpes
    const MissingCpeIDParam = 'Ο Κωδικός του Cpe είναι υποχρεωτικό πεδίο';
    const MissingCpeIDValue = 'Ο Κωδικός του Cpe πρέπει να έχει τιμή';
    const InvalidCpeIDType = 'Ο Κωδικός του Cpe πρέπει να είναι αριθμητικός';
    const InvalidCpeIDArray = 'Ο Κωδικός του Cpe δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingCpeValue = 'Το Cpe πρέπει να έχει τιμή';
    const MissingCpeParam = 'Το Cpe είναι υποχρεωτικό πεδίο';
    const InvalidCpeValue = 'Το Cpe δεν υπάρχει στο λεξικό';
    const InvalidCpeType = 'Το Cpe πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const DuplicatedCpeValue = 'Το Cpe υπάρχει ήδη';



    //= GetLdaps
    const MissingLdapIDParam = 'Ο Κωδικός του Ldap Λογαριασμού είναι υποχρεωτικό πεδίο';
    const MissingLdapIDValue = 'Ο Κωδικός του Ldap Λογαριασμού πρέπει να έχει τιμή';
    const InvalidLdapIDType = 'Ο Κωδικός του Ldap Λογαριασμού πρέπει να είναι αριθμητικός';
    const InvalidLdapIDArray = 'Ο Κωδικός του Ldap Λογαριασμού δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingLdapValue = 'Ο Ldap Λογαριασμός πρέπει να έχει τιμή';
    const MissingLdapParam = 'Ο Ldap Λογαριασμός είναι υποχρεωτικό πεδίο';
    const InvalidLdapValue = 'Ο Ldap Λογαριασμός δεν υπάρχει στο λεξικό';
    const InvalidLdapType = 'Ο Ldap Λογαριασμός πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedLdapValue = 'Ο Ldap Λογαριασμός υπάρχει ήδη';



    //= GetEduAdmins
    const MissingEduAdminIDParam = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminIDValue = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminIDType = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αριθμητικός';
    const InvalidEduAdminIDArray = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingEduAdminValue = 'Η Διεύθυνση Εκπαίδευσης πρέπει να έχει τιμή';
    const MissingEduAdminParam = 'Η Διεύθυνση Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const InvalidEduAdminValue = 'Η Διεύθυνση Εκπαίδευσης δεν υπάρχει στο λεξικό';
    const InvalidEduAdminType = 'Η Διεύθυνση Εκπαίδευσης πρέπει να είναι αριθμητική ή αλφαριθμητική';
    
    const MissingEduAdminNameParam = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminNameValue = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminNameType = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό';
    const InvalidEduAdminNameArray = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
     
    const MissingEduAdminParentRdnParam = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminParentRdnValue = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminParentRdnType = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό';
    const InvalidEduAdminParentRdnArray = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingEduAdminThirdLevelDnsParam = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminThirdLevelDnsValue = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminThirdLevelDnsType = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό';
    const InvalidEduAdminThirdLevelDnsArray = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedEduAdminValue = 'Η Διεύθυνση Εκπαίδευσης υπάρχει ήδη';



    //= GetWorkerSpecializations
    const MissingWorkerSpecializationIDParam = 'Ο Κωδικός της Ειδικότητας Εργαζομένου είναι υποχρεωτικό πεδίο';
    const MissingWorkerSpecializationIDValue = 'Ο Κωδικός της Ειδικότητας Εργαζομένου πρέπει να έχει τιμή';
    const InvalidWorkerSpecializationIDType = 'Ο Κωδικός της Ειδικότητας Εργαζομένου πρέπει να είναι αριθμητικός';
    const InvalidWorkerSpecializationIDArray = 'Ο Κωδικός της Ειδικότητας Εργαζομένου δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingWorkerSpecializationValue = 'Η Ειδικότητα Εργαζομένου πρέπει να έχει τιμή';
    const MissingWorkerSpecializationParam = 'Η Ειδικότητα Εργαζομένου είναι υποχρεωτικό πεδίο';
    const InvalidWorkerSpecializationValue = 'Η Ειδικότητα Εργαζομένου δεν υπάρχει στο λεξικό';
    const InvalidWorkerSpecializationType = 'Η Ειδικότητα Εργαζομένου πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedWorkerSpecializationValue = 'Η Ειδικότητα Εργαζομένου υπάρχει ήδη';



    //= GetWorkerPositions
    const MissingWorkerPositionIDParam = 'Ο Κωδικός της Θέσης Εργασίας είναι υποχρεωτικό πεδίο';
    const MissingWorkerPositionIDValue = 'Ο Κωδικός της Θέσης Εργασίας πρέπει να έχει τιμή';
    const InvalidWorkerPositionIDType = 'Ο Κωδικός της Θέσης Εργασίας πρέπει να είναι αριθμητικός';
    const InvalidWorkerPositionIDArray = 'Ο Κωδικός της Θέσης Εργασίας δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingWorkerPositionValue = 'Η Θέση Εργασίας πρέπει να έχει τιμή';
    const MissingWorkerPositionParam = 'Η Θέση Εργασίας είναι υποχρεωτικό πεδίο';
    const InvalidWorkerPositionValue = 'Η Θέση Εργασίας δεν υπάρχει στο λεξικό';
    const InvalidWorkerPositionType = 'Η Θέση Εργασίας πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedWorkerPositionValue = 'Η Θέση Εργασίας υπάρχει ήδη';



    //= GetWorkerPositions
    const MissingTransferAreaIDParam = 'Ο Κωδικός της Περιοχής Μετάθεσης είναι υποχρεωτικό πεδίο';
    const MissingTransferAreaIDValue = 'Ο Κωδικός της Περιοχής Μετάθεσης πρέπει να έχει τιμή';
    const InvalidTransferAreaIDType = 'Ο Κωδικός της Περιοχής Μετάθεσης πρέπει να είναι αριθμητικός';
    const InvalidTransferAreaIDArray = 'Ο Κωδικός της Περιοχής Μετάθεσης δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingTransferAreaValue = 'Η Περιοχή Μετάθεσης πρέπει να έχει τιμή';
    const MissingTransferAreaParam = 'Η Περιοχή Μετάθεσης είναι υποχρεωτικό πεδίο';
    const InvalidTransferAreaValue = 'Η Περιοχή Μετάθεσης δεν υπάρχει στο λεξικό';
    const InvalidTransferAreaType = 'Η Περιοχή Μετάθεσης πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const DuplicatedTransferAreaValue = 'Η Περιοχή Μετάθεσης υπάρχει ήδη';




    //= GetWorkerPositions
    const MissingMunicipalityIDParam = 'Ο Κωδικός του Δήμου είναι υποχρεωτικό πεδίο';
    const MissingMunicipalityIDValue = 'Ο Κωδικός του Δήμου πρέπει να έχει τιμή';
    const InvalidMunicipalityIDType = 'Ο Κωδικός του Δήμου πρέπει να είναι αριθμητικός';
    const InvalidMunicipalityIDArray = 'Ο Κωδικός του Δήμου δεν μπορεί να έχει πολλαπλές τιμές';
    const MissingMunicipalityValue = 'Ο Δήμος πρέπει να έχει τιμή';
    const MissingMunicipalityParam = 'Ο Δήμος είναι υποχρεωτικό πεδίο';
    const InvalidMunicipalityValue = 'Ο Δήμος δεν υπάρχει στο λεξικό';
    const InvalidMunicipalityType = 'Ο Δήμος πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const DuplicatedMunicipalityValue = 'Ο Δήμος υπάρχει ήδη';



    //= GetWorkers
    const MissingWorkerIDParam = 'Ο Κωδικός του Εργαζομένου είναι υποχρεωτικό πεδίο';
    const MissingWorkerIDValue = 'Ο Κωδικός του Εργαζομένου πρέπει να έχει τιμή';
    const InvalidWorkerIDType = 'Ο Κωδικός του Εργαζομένου πρέπει να είναι αριθμητικός';
    const InvalidWorkerIDArray = 'Ο Κωδικός του Εργαζομένου δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingWorkerParam = 'Ο Εργαζόμενος είναι υποχρεωτικό πεδίο';
    const MissingWorkerValue = 'Ο Εργαζόμενος πρέπει να έχει τιμή';
    const InvalidWorkerType = 'Ο Εργαζόμενος πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidWorkerValue = 'Ο Εργαζόμενος δεν βρέθηκε';
    const DuplicatedWorkerValue = 'Ο Εργαζόμενος αυτός υπάρχει ήδη';

    const MissingWorkerRegistryNoValue = 'Ο Αριθμός Μητρώου του Εργαζομένου πρέπει να έχει τιμή';
    const InvalidWorkerRegistryNoType = 'Ο Αριθμός Μητρώου του Εργαζομένου πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const MissingWorkerRegistryNoParam = 'Ο Αριθμός Μητρώου του Εργαζομένου είναι υποχρεωτικό πεδίο';
    const DuplicatedWorkerRegistryNoValue = 'Ο Αριθμός Μητρώου του Εργαζομένου υπάρχει ήδη';

    const MissingWorkerLastnameValue = 'Το Επώνυμο του Εργαζομένου πρέπει να έχει τιμή';
    const MissingWorkerFirstnameValue = 'Το Όνομα του Εργαζομένου πρέπει να έχει τιμή';


    //= Circuits
    const MissingCircuitIDParam = 'Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος είναι υποχρεωτικό πεδίο';
    const MissingCircuitIDValue = 'Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος πρέπει να έχει τιμή';
    const InvalidCircuitIDType = 'Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός';
    const InvalidCircuitIDArray = 'Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingCircuitValue = 'Το Τηλεπικοινωνιακό Κύκλωμα πρέπει να έχει τιμή';
    const MissingCircuitParam = 'Το Τηλεπικοινωνιακό Κύκλωμα είναι υποχρεωτικό πεδίο';
    const InvalidCircuitValue = 'Το Τηλεπικοινωνιακό Κύκλωμα δεν υπάρχει στο λεξικό';
    const InvalidCircuitType = 'Το Τηλεπικοινωνιακό Κύκλωμα πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidCircuitArray = 'Το Τηλεπικοινωνιακό Κύκλωμα δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedCircuitValue = 'Το Τηλεπικοινωνιακό Κύκλωμα υπάρχει ήδη';

    const MissingCircuitPhoneNumberParam = 'Ο Αριθμός του Κυκλώματος είναι υποχρεωτικό πεδίο';
    const MissingCircuitPhoneNumberValue = 'Ο Αριθμός του Κυκλώματος πρέπει να έχει τιμή';
    const InvalidCircuitPhoneNumberType = 'Ο Αριθμός του Κυκλώματος πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidCircuitPhoneNumberArray = 'Ο Αριθμός του Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές';

    const InvalidCircuitStateType = 'Η Κατάσταση του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ενεργή ή Ανανεργή';
    const InvalidCircuitActivatedDateType = 'Η Ημερομηνία Ενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ημερομηνία (dd/mm/yyyy)';
    const InvalidCircuitUpdatedDateType = 'Η Ημερομηνία Ενημέρωσης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ημερομηνία (dd/mm/yyyy)';
    const InvalidCircuitDeactivatedDateType = 'Η Ημερομηνία Απενεργοποίησης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι Ημερομηνία (dd/mm/yyyy)';
    const InvalidCircuitBandwidthType = 'Το Εύρως Ζώνης του Τηλεπικοινωνιακού Κυκλώματος πρέπει να αλφαριθμητικό';
    const InvalidCircuitReadspeedhType = 'Η Ταχύτητα του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναιαλφαριθμητική';
    const InvalidCircuitPaidByPsdType = 'Η Χρηματοδήτηση του Τηλεπικοινωνιακού Κυκλώματος από το ΠΣΔ πρέπει να είναι Ενεργή ή Ανενεργή';

    //= ExtLogEntries
    const InvalidExtLogEntryIDType = 'Ο Κωδικός του Log Συγχρονισμου πρέπει να είναι αριθμητικός';
    const InvalidExtLogEntryActionType = 'Η Ενέργεια του Log Συγχρονισμου πρέπει να είναι update,insert,create,delete';
    const InvalidExtLogEntryLoggedAtType = 'Η Ημερομηνία του Log Συγχρονισμου πρέπει να είναι Ημερομηνία (dd/mm/yyyy)';
    const InvalidExtLogEntryObjectIdType = 'Ο Κωδικός Μονάδας του Log Συγχρονισμου πρέπει να είναι αριθμητικός';
    const InvalidExtLogEntryObjectClassType = 'Το Όνομα Πίνακα του Log Συγχρονισμου πρέπει να είναι αλφαριθμητικός';
    const InvalidExtLogEntryVersionType = 'Η Έκδοση του Log Συγχρονισμού πρέπει να αριθμητική';
    const InvalidExtLogEntryDataType = 'Τα Δεδομένα του Log Συγχρονισμού πρέπει να είναι αλφαριθμητικά';
    const InvalidExtLogEntryUsernameType = 'Το Όνομα του Χρήστη του Log Συγχρονισμού πρέπει να είναι αλφαριθμητικά';
    const InvalidExtLogEntryIpType = 'Η IP του Xρήστη του Log Συγχρονισμού πρέπει να είναι αλφαριθμητικά';   
    
//##########################################################################################################################
// IP/DNS
//##########################################################################################################################
    
    //======================================================================================================================
    // =UnitDns
    //======================================================================================================================
    const MissingUnitDnsIDParam = 'Ο Κωδικός του DNS της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitDnsIDValue = 'Ο Κωδικός του DNS της Μονάδας της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitDnsIDType = 'Ο Κωδικός του DNS της Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidUnitDnsIDArray = 'Ο Κωδικός του DNS της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingUnitDnsParam = 'Το DNS της Μονάδας είναι υποχρεωτικό πεδίο';   
    const MissingUnitDnsValue = 'Το DNS της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitDnsValue = 'Το DNS της Μονάδας δεν υπάρχει στο λεξικό';
    const InvalidUnitDnsType = 'Το DNS της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitDnsArray = 'Το DNS της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const DuplicatedUnitDnsValue = 'Το DNS της Μονάδας υπάρχει ήδη';
    const DuplicatedUnitExtDnsValue = 'Το πλήρης DNS της Μονάδας υπάρχει ήδη';
    
    const MissingUnitExtDnsParam = 'Το πλήρης DNS της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitExtDnsValue = 'Το πλήρης DNS της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitExtDnsType = 'Το πλήρης DNS της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitExtDnsArray = 'Το πλήρης DNS της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';

    //======================================================================================================================
    // =UnitNetworkSubnetTypes
    //======================================================================================================================
    const MissingUnitNetworkSubnetTypeIDParam = 'Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkSubnetTypeIDValue = 'Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου πρέπει να έχει τιμή';
    const InvalidUnitNetworkSubnetTypeIDType = 'Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου πρέπει να είναι αριθμητικός';
    const InvalidUnitNetworkSubnetTypeIDArray = 'Ο Κωδικός του Τύπου του IP δικτυακού στοιχείου δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingUnitNetworkSubnetTypeValue = 'Ο Τύπος του IP δικτυακού στοιχείου πρέπει να έχει τιμή';
    const MissingUnitNetworkSubnetTypeParam = 'Ο Τύπος του IP δικτυακού στοιχείου είναι υποχρεωτικό πεδίο';
    const InvalidUnitNetworkSubnetTypeValue = 'Ο Τύπος του IP δικτυακού στοιχείου δεν υπάρχει στο λεξικό';
    const InvalidUnitNetworkSubnetTypeType = 'Ο Τύπος του IP δικτυακού στοιχείου πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidUnitNetworkSubnetTypeArray = 'Ο Τύπος του IP δικτυακού στοιχείου δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedUnitNetworkSubnetTypeValue = 'Ο Τύπος του IP δικτυακού στοιχείου υπάρχει ήδη';
    const UsedUnitNetworkSubnetTypeByUnitNetworkSubnets = 'Ο Τύπος του IP δικτυακού στοιχείου χρησιμοποιείται από Υποδίκτυα Μονάδων';
 
    //======================================================================================================================
    // =UnitNetworkSubnets
    //======================================================================================================================
    const MissingUnitNetworkSubnetIDParam = 'Ο Κωδικός του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkSubnetIDValue = 'Ο Κωδικός του Υποδικτύου της Μονάδας της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkSubnetIDType = 'Ο Κωδικός του Υποδικτύου της Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidUnitNetworkSubnetIDArray = 'Ο Κωδικός του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingUnitNetworkSubnetParam = 'Το Υποδικτύο της Μονάδας είναι υποχρεωτικό πεδίο';   
    const MissingUnitNetworkSubnetValue = 'Το Υποδικτύο της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkSubnetValue = 'Το Υποδικτύο της Μονάδας δεν βρέθηκε';
    const InvalidUnitNetworkSubnetType = 'Το Υποδικτύο της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitNetworkSubnetArray = 'Το Υποδικτύο της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const DuplicatedUnitNetworkSubnetValue = 'Το Υποδικτύο της Μονάδας υπάρχει ήδη';
    const DuplicatedUnitNetworkSubnetNameValue = 'Το Όνομα του Υποδικτύο της Μονάδας υπάρχει ήδη';
    const DuplicatedUnitNetworkSubnetIpValue = 'Η διεύθυνση IP του Υποδικτύο της Μονάδας υπάρχει ήδη';
    const DuplicatedUnitNetworkSubnetMaskValue = 'Η Μάσκα του Υποδικτύο της Μονάδας υπάρχει ήδη';
    const UsedUnitNetworkSubnetByUnitNetworkObjects = 'Το Υποδικτύο της Μονάδας χρησιμοποιείται από Δικτυακά Αντικείμενα Μονάδας';
    const UsedUnitNetworkSubnetByConnections = 'Το Υποδικτύο της Μονάδας Συσχετίζεται με Διασύνδεση';
   
    const MissingUnitNetworkSubnetNameParam = 'Το Όνομα του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkSubnetNameValue = 'Το Όνομα του Υποδικτύου της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkSubnetNameType = 'Το Όνομα του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητικό';
    const InvalidUnitNetworkSubnetNameArray = 'Το Όνομα του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingUnitNetworkSubnetΙpParam = 'H IP του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkSubnetIpValue = 'H IP του Υποδικτύου της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkSubnetIpType = 'H IP του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική';
    const InvalidUnitNetworkSubnetIpArray = 'H IP του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingUnitNetworkSubnetDefaultRouterParam = 'H Default Gateway του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkSubnetDefaultRouterValue = 'H Default Gateway του Υποδικτύου της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkSubnetDefaultRouterType = 'H Default Gateway του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική';
    const InvalidUnitNetworkSubnetDefaultRouterArray = 'H Default Gateway του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingUnitNetworkSubnetMaskParam = 'H Μάσκα του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkSubnetMaskValue = 'H Μάσκα του Υποδικτύου της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkSubnetMaskType = 'H Μάσκα του Υποδικτύου της Μονάδας πρέπει να είναι αλφαριθμητική';
    const InvalidUnitNetworkSubnetMaskArray = 'H Μάσκα του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    //======================================================================================================================
    // =UnitNetworkObjects
    //======================================================================================================================
    const MissingUnitNetworkObjectIDParam = 'Ο Κωδικός των Δικτυακών Αντικειμένων της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkObjectIDValue = 'Ο Κωδικός των Δικτυακών Αντικειμένων της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkObjectIDType = 'Ο Κωδικός των Δικτυακών Αντικειμένων της Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidUnitNetworkObjectIDArray = 'Ο Κωδικός των Δικτυακών Αντικειμένων της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingUnitNetworkObjectParam = 'Τα Δικτυακά Αντικείμενα της Μονάδας είναι υποχρεωτικό πεδίο';   
    const MissingUnitNetworkObjectValue = 'Τα Δικτυακά Αντικείμενα της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkObjectValue = 'Τα Δικτυακά Αντικείμενα της Μονάδας δεν βρέθηκαν';
    const InvalidUnitNetworkObjectType = 'Τα Δικτυακά Αντικείμενα της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitNetworkObjectArray = 'Τα Δικτυακά Αντικείμενα της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedUnitNetworkObjectValue = 'Τα Δικτυακά Αντικείμενα της Μονάδας υπάρχουν ήδη';
    const DuplicatedUnitNetworkObjectIpValue = 'Η διεύθυνση IP του Δικτυακού Αντικειμένου της Μονάδας υπάρχει ήδη';
    const DuplicatedUnitNetworkObjectDnsNameValue = 'Το DNS όνομα του Δικτυακού Αντικειμένου της Μονάδας υπάρχει ήδη';
    
    const MissingUnitNetworkObjectIpParam = 'Η IP των Δικτυακών Αντικειμένων της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkObjectIpValue = 'Η IP των Δικτυακών Αντικειμένων της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkObjectIpType = 'Η IP των Δικτυακών Αντικειμένων της Μονάδας πρέπει να έχει αριθμητική μορφή IP';
    const InvalidUnitNetworkObjectIpArray = 'Η IP των Δικτυακών Αντικειμένων της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingUnitNetworkObjectDnsNameParam = 'Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitNetworkObjectDnsNameValue = 'Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitNetworkObjectDnsNameType = 'Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας πρέπει να είναι αλφαριθμητικό';
    const InvalidUnitNetworkObjectDnsNameArray = 'Το DNS Όνομα των Δικτυακών Αντικειμένων της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const InvalidUnitNetworkObjectDescriptionType = 'Η Περιγραφή των Δικτυακών Αντικειμένων της Μονάδας πρέπει να είναι αλφαριθμητική';
    
    //======================================================================================================================
    // =ConnectionUnitNetworkSubnets
    //======================================================================================================================
    const MissingConnectionUnitNetworkOSubnetIDParam = 'Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingConnectionUnitNetworkOSubnetIDValue = 'Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας πρέπει να έχει τιμή';
    const InvalidConnectionUnitNetworkOSubnetIDType = 'Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidConnectionUnitNetworkOSubnetIDArray = 'Ο Κωδικός της Διασύνδεσης του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingConnectionUnitNetworkOSubnetParam = 'Η Διασύνδεση του Υποδικτύου της Μονάδας είναι υποχρεωτικό πεδίο';   
    const MissingConnectionUnitNetworkOSubnetValue = 'Η Διασύνδεση του Υποδικτύου της Μονάδας πρέπει να έχει τιμή';
    const InvalidConnectionUnitNetworkOSubnetValue = 'Η Διασύνδεση του Υποδικτύου της Μονάδας δεν βρέθηκε';
    const InvalidConnectionUnitNetworkOSubnetType = 'Η Διασύνδεση του Υποδικτύου της Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidConnectionUnitNetworkOSubnetArray = 'Η Διασύνδεση του Υποδικτύου της Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedConnectionUnitNetworkOSubnetValue = 'Η Διασύνδεση του Υποδικτύου της Μονάδας υπάρχει ήδη';
    const DifferenceConnectionUnitNetworkOSubnetMMIdValue = 'Δεν είναι δυνατή η εισαγωγή Διασύνδεσης και Υποδικτύου Μονάδας με διαφορετικό Κωδικό Σχολικής Μονάδας';
    
    //= GetUnits
    const MissingUnitMMIDParam = 'Ο Κωδικός ΜΜ είναι υποχρεωτικό πεδίο';
    const MissingUnitMMIDValue = 'Ο Κωδικός ΜΜ πρέπει να έχει τιμή';
    const InvalidUnitMMIDType = 'Ο Κωδικός ΜΜ πρέπει να είναι αριθμητικός';
    const InvalidUnitMMIDArray = 'Ο Κωδικός ΜΜ δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidUnitMMIDValue = 'Ο Κωδικός ΜΜ δεν βρέθηκε'; //EXTRA only for ID REFERENCE
    
    const MissingUnitValue = 'Η Μονάδα πρέπει να έχει τιμή';
    const MissingUnitParam = 'Η Μονάδα είναι υποχρεωτικό πεδίο';
    const InvalidUnitValue = 'Η Μονάδα δεν βρέθηκε';
    const InvalidUnitType = 'Η Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidUnitArray = 'Η Μονάδα δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedUnitValue = 'Η Μονάδα υπάρχει ήδη';
    const DuplicatedUnitUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Unit';
    const DuplicatedUnitMMIDUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key UnitMMID'; //EXTRA only for ID REFERENCE

    const MissingRegistryNoValue = 'Ο Κωδικός ΥΠΕΠΘ πρέπει να έχει τιμή';
    const MissingRegistryNoParam = 'Ο Κωδικός ΥΠΕΠΘ είναι υποχρεωτικό πεδίο';
    const InvalidRegistryNoType = 'Ο Κωδικός ΥΠΕΠΘ πρέπει να είναι αριθμητικός ή αλφαριθμητικός';

    const MissingHostUnitValue = 'Η Host Μονάδα πρέπει να έχει τιμή';
    const MissingHostUnitParam = 'Η Host Μονάδα είναι υποχρεωτικό πεδίο';
    const InvalidHostUnitValue = 'Η Host Μονάδα δεν υπάρχει στο λεξικό';
    const InvalidHostUnitType = 'Η Host Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική';

    const MissingGuestUnitValue = 'Η Guest Μονάδα πρέπει να έχει τιμή';
    const MissingGuestUnitParam = 'Η Guest Μονάδα είναι υποχρεωτικό πεδίο';
    const InvalidGuestUnitValue = 'Η Guest Μονάδα δεν υπάρχει στο λεξικό';
    const InvalidGuestUnitType = 'Η Guest Μονάδα πρέπει να είναι αριθμητική ή αλφαριθμητική';

    //= Levels==================================================================
    
    const MissingLevelIDParam = 'Ο Κωδικός της Τάξης είναι υποχρεωτικό πεδίο';
    const MissingLevelIDValue = 'Ο Κωδικός της Τάξης πρέπει να έχει τιμή';
    const InvalidLevelIDType = 'Ο Κωδικός της Τάξης πρέπει να είναι αριθμητικός';
    const InvalidLevelIDArray = 'Ο Κωδικός της Τάξης δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidLevelIDValue = 'Ο Κωδικός της Τάξης δεν βρέθηκε'; //EXTRA only for ID REFERENCE
    
    const MissingLevelValue = 'Η Τάξη πρέπει να έχει τιμή';
    const MissingLevelParam = 'Η Τάξη είναι υποχρεωτικό πεδίο';
    const InvalidLevelValue = 'Η Τάξη δεν υπάρχει στο λεξικό';
    const InvalidLevelType = 'Η Τάξη πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidLevelArray = 'Η Τάξη δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingLevelNameParam = 'Το Όνομα της Τάξης είναι υποχρεωτικό πεδίο';
    const MissingLevelNameValue = 'Το Όνομα της Τάξης πρέπει να έχει τιμή';
    const InvalidLevelNameType = 'Το Όνομα της Τάξης πρέπει να είναι αλφαριθμητικό';
    const InvalidLevelNameArray = 'Το Όνομα της Τάξης δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingLevelGroupsCountParam = 'Το Πλήθος των Τμημάτων της Τάξης είναι υποχρεωτικό πεδίο';
    const MissingLevelGroupsCountValue = 'Το Πλήθος των Τμημάτων της Τάξης πρέπει να έχει τιμή';
    const InvalidLevelGroupsCountType = 'Το Πλήθος των Τμημάτων της Τάξης πρέπει να είναι αριθμητικό';
    const InvalidLevelGroupsCountArray = 'Το Πλήθος των Τμημάτων της Τάξης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingLevelStudentsCountParam = 'Το Πλήθος των Μαθητών της Τάξης είναι υποχρεωτικό πεδίο';
    const MissingLevelStudentsCountValue = 'Το Πλήθος των Μαθητών της Τάξης πρέπει να έχει τιμή';
    const InvalidLevelStudentsCountType = 'Το Πλήθος των Μαθητών της Τάξης πρέπει να είναι αριθμητικό';
    const InvalidLevelStudentsCountArray = 'Το Πλήθος των Μαθητών της Τάξης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedLevelValue = 'Η Τάξη υπάρχει ήδη';
    const DuplicatedLevelUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Level';
    const DuplicatedLevelIDUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key LevelID'; //EXTRA only for ID REFERENCE

    //= Groups==================================================================
    
    const MissingGroupIDParam = 'Ο Κωδικός του Τμήματος είναι υποχρεωτικό πεδίο';
    const MissingGroupIDValue = 'Ο Κωδικός του Τμήματος πρέπει να έχει τιμή';
    const InvalidGroupIDType = 'Ο Κωδικός του Τμήματος πρέπει να είναι αριθμητικός';
    const InvalidGroupIDArray = 'Ο Κωδικός του Τμήματος δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingGroupValue = 'Το Τμήμα πρέπει να έχει τιμή';
    const MissingGroupParam = 'Το Τμήμα είναι υποχρεωτικό πεδίο';
    const InvalidGroupValue = 'Το Τμήμα δεν υπάρχει στο λεξικό';
    const InvalidGroupType = 'Το Τμήμα πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidGroupArray = 'Το Τμήμα δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingGroupNameParam = 'Το Όνομα του Τμήματος είναι υποχρεωτικό πεδίο';
    const MissingGroupNameValue = 'Το Όνομα του Τμήματος πρέπει να έχει τιμή';
    const InvalidGroupNameType = 'Το Όνομα του Τμήματος πρέπει να είναι αλφαριθμητικό';
    const InvalidGroupNameArray = 'Το Όνομα του Τμήματος δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingGroupStudentsCountParam = 'Το Πλήθος των Μαθητών του Τμήματος είναι υποχρεωτικό πεδίο';
    const MissingGroupStudentsCountValue = 'Το Πλήθος των Μαθητών του Τμήματος πρέπει να έχει τιμή';
    const InvalidGroupStudentsCountType = 'Το Πλήθος των Μαθητών του Τμήματος πρέπει να είναι αριθμητικό';
    const InvalidGroupStudentsCountArray = 'Το Πλήθος των Μαθητών του Τμήματος δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedGroupValue = 'Το Τμήμα υπάρχει ήδη';
    const DuplicatedGroupUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Group';



    //= Connections
    const MissingConnectionIDParam = 'Ο Κωδικός της Διασύνδεσης είναι υποχρεωτικό πεδίο';
    const MissingConnectionIDValue = 'Ο Κωδικός της Διασύνδεσης πρέπει να έχει τιμή';
    const InvalidConnectionIDType = 'Ο Κωδικός της Διασύνδεσης πρέπει να είναι αριθμητικός';
    const InvalidConnectionIDArray = 'Ο Κωδικός της Διασύνδεσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingConnectionParam = 'H Διασύνδεση είναι υποχρεωτικό πεδίο';
    const MissingConnectionValue = 'H Διασύνδεση πρέπει να έχει τιμή';
    const InvalidConnectionValue = 'H Διασύνδεση δεν βρέθηκε';
    const InvalidConnectionType = 'H Διασύνδεση πρέπει να είναι αριθμητική';
    const InvalidConnectionArray = 'H Διασύνδεση δεν μπορεί να έχει πολλαπλές τιμές';
   
    const DuplicatedConnectionCircuitValue = 'Το Τηλεπικοινωνιακό Κύκλωμα υπάρχει σε άλλη Διασύνδεση';
    const DuplicatedConnectionLdapValue = 'Ο Ldap Λογαριασμός υπάρχει σε άλλη Διασύνδεση';
    const DifferenceConnectionCircuitMMIdValue = 'Δεν είναι δυνατή η εισαγωγή Διασύνδεσης και Κυκλώματος με διαφορετικό Κωδικό Σχολικής Μονάδας';
    const DifferenceConnectionLdapMMIdValue = 'Δεν είναι δυνατή η εισαγωγή Διασύνδεσης και Ldap Λογαριασμού με διαφορετικό Κωδικό Σχολικής Μονάδας';
    const DifferenceConnectionCpeMMIdValue = 'Δεν είναι δυνατή η εισαγωγή Διασύνδεσης και Cpe με διαφορετικό Κωδικό Σχολικής Μονάδας';
    const BanConnectionCircuitStatusValue = 'Δεν είναι δυνατή η εισαγωγή Καταργημένου Κυκλώματος ';
    const UsedConnectionByUnitNetworkSubnets = 'Η Διασύνδεση Συσχετίζεται με Υποδικτύο της Μονάδας';


    //======================================================================================================================
    // =UnitWorkers
    //======================================================================================================================
    const MissingUnitWorkerIDParam = 'Ο Κωδικός της Συσχέτισης Εργαζομενου - Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitWorkerIDValue = 'Ο Κωδικός της Συσχέτισης Εργαζομενου - Μονάδας  πρέπει να έχει τιμή';
    const InvalidUnitWorkerIDType = 'Ο Κωδικός της Συσχέτισης Εργαζομενου - Μονάδας  πρέπει να είναι αριθμητικός';
    const InvalidUnitWorkerIDArray = 'Ο Κωδικός της Συσχέτισης Εργαζομενου - Μονάδας  δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingUnitWorkerParam = 'Η Συσχέτιση Εργαζομενου - Μονάδας είναι υποχρεωτικό πεδίο';   
    const MissingUnitWorkerValue = 'Η Συσχέτιση Εργαζομενου - Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitWorkerValue = 'Η Συσχέτιση Εργαζομενου - Μονάδας δεν βρέθηκε';
    const InvalidUnitWorkerType = 'Η Συσχέτιση Εργαζομενου - Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitWorkerArray = 'Η Συσχέτιση Εργαζομενου - Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedUnitWorkerValue = 'Η Συσχέτιση Εργαζομένου και Μονάδας υπάρχει ήδη';






    const MissingMMIdParam = 'Ο Κωδικός ΜΜ είναι υποχρεωτικό πεδίο';
    const MissingMMIdValue = 'Ο Κωδικός ΜΜ πρέπει να έχει τιμή';
    const InvalidMMIdType  = 'Ο Κωδικός ΜΜ  πρέπει να είναι αριθμητικός';
    const InvalidMMIdValue = 'Η Μονάδα δεν βρέθηκε';
    





          


    const InvalidIpNatMaskType = 'Η Μάσκα του Δρομολογητή ($ip_nat_mask) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidIpLanMaskType = 'Η Μάσκα του Τοπικού Δικτύου ($ip_lan_mask) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';



    const InvalidSpecialNameType = 'Το Προσωνύμιο της Μονάδας ($special_name) πρέπει να είναι αλφαριθμητικός';
    
    const InvalidPhoneNumberType = 'Το Τηλέφωνο Επικοινωνίας ($fax_number) πρέπει να είναι αριθμητικό';
    const InvalidFaxNumberType = 'Το Φαξ Επικοινωνίας ($fax_number) πρέπει να είναι αριθμητικό';
    const InvalidEmailType = 'Η Ηλεκτρονική Αλληλογραφία ($email) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidStreetAddressType = 'Η Διεύθυνση (Οδός και Αριθμός) της Μονάδας ($street_address) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidPostalCodeType = 'Ο Ταχυδρομικός Κώδικας της Μονάδας ($postal_code) πρέπει να είναι αριθμητικό';
    const InvalidTaxNumberType = 'Ο Αριθμός Φορολογικού Μητρώου της Μονάδας ($tax_number) πρέπει να είναι αριθμητικό';
    const InvalidAreaTeamNumberType = 'Η Ομάδα Σχολείων της Μονάδας ($area_team_number) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidLevelsCountType = 'Η Ομάδα Σχολείων της Μονάδας ($levels_count) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidGroupsCountType = 'Το Πλήθος των Τμημάτων της Μονάδας ($groups_count) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidStudentsCountType = 'Το Πλήθος των Μαθητών της Μονάδας ($students_sum) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidLatitudeType = 'Το Γεωγραφικό Πλάτος της Μονάδας ($latitude) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidLongitudeType = 'Το Γεωγραφικό Μήκος της Μονάδας ($longitude) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidPositioningType = 'Η Κτηριακή Θέση της Μονάδας ($positioning) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidLastUpdateType = 'Η Ημερομηνία Τελευταίας Ενημέρωσης της Μονάδας ($last_update) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidLastSyncType = 'Η Ημερομηνία Τελευταίας Ενημέρωσης της Μονάδας ($last_sync) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidFekType = 'Ο Αριθμός ΦΕΚ ($fek) πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidCommentsType = 'Τα σχόλια ($comments) πρέπει να είναι αλφαριθμητικός';
      
    const InvalidWorkerLastnameType = 'Το Επώνυμο ($lastname) πρέπει να είναι αλφαριθμητικός';
    const InvalidWorkerFirstnameType = 'Το Όνομα ($firstname) πρέπει να είναι αλφαριθμητικός';
    const InvalidWorkerFathernameType = 'Το Πατρώνυμο ($fathername) πρέπει να είναι αλφαριθμητικός';
    const InvalidWorkerSexType = 'Το Φύλο ($sex) πρέπει να είναι κάποια από τις προκαθορισμένες τιμές';
    const InvalidWorkerTaxNumberType = 'Ο Αριθμός Φορολογικού Μητρώου ($tax_number)  πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    
    
    
    
    
    
    
       
    
    
    
    
    
    
    
    
    
    
    
    
    const DuplicatedRelationValue  = 'Η Συσχέτιση Μονάδων υπάρχει ήδη';




 

    const MissingRelationIDValue = 'Ο Κωδικός Συσχέτισης ($relation_id) πρέπει να έχει τιμή';
    const InvalidRelationIDType  = 'Ο Κωδικός Συσχέτισης ($relation_id) πρέπει να είναι αριθμητικός';
    const InvalidRelationValue  = 'Η Συσχέτιση δεν βρέθηκε';

    


    
      
        
        
}    

?>