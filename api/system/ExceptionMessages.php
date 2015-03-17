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

    //= GetLdaps
    const MissingUnitID = 'Ο Κωδικός του Μονάδας είναι υποχρεωτικό πεδίο';

    //= GetUnitDns
//    const InvalidUnitDNSType = 'Το DNS πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
//    const InvalidExtUnitDnsType = 'Το ExtDNS πρέπει να είναι αλφαριθμητικό';
//    const InvalidUnitUIDType = 'Το UID πρέπει να είναι αλφαριθμητικό';



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


   

//= TaxOffices==================================================================
    
    const MissingTaxOfficeIDParam = 'Ο Κωδικός της Δ.Ο.Υ. είναι υποχρεωτικό πεδίο';
    const MissingTaxOfficeIDValue = 'Ο Κωδικός της Δ.Ο.Υ. πρέπει να έχει τιμή';
    const InvalidTaxOfficeIDType = 'Ο Κωδικός της Δ.Ο.Υ. πρέπει να είναι αριθμητικός';
    const InvalidTaxOfficeIDArray = 'Ο Κωδικός της Δ.Ο.Υ. δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingTaxOfficeParam = 'Η Δ.Ο.Υ. είναι υποχρεωτικό πεδίο';
    const MissingTaxOfficeValue = 'Η Δ.Ο.Υ. πρέπει να έχει τιμή';
    const InvalidTaxOfficeValue = 'Η Δ.Ο.Υ. δεν υπάρχει στο λεξικό';
    const InvalidTaxOfficeType = 'Η Δ.Ο.Υ. πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidTaxOfficeArray = 'Η Δ.Ο.Υ. δεν μπορεί να έχει πολλαπλές τιμές';
     
    const MissingTaxOfficeNameParam = 'Το Όνομα της Δ.Ο.Υ. είναι υποχρεωτικό πεδίο';
    const MissingTaxOfficeNameValue = 'Το Όνομα της Δ.Ο.Υ. πρέπει να έχει τιμή';
    const InvalidTaxOfficeNameType = 'Το Όνομα της Δ.Ο.Υ. πρέπει να είναι αλφαριθμητικό';
    const InvalidTaxOfficeNameArray = 'Το Όνομα της Δ.Ο.Υ. δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedTaxOfficeValue = 'Η Δ.Ο.Υ. υπάρχει ήδη';
    const DuplicatedTaxOfficeUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key TaxOffice';
    const UsedTaxOfficeByUnits = 'Η Δ.Ο.Υ. χρησιμοποιείται από Μονάδες';
    const UsedTaxOfficeBySchoolCommittees = 'ΟΗ Δ.Ο.Υ. χρησιμοποιείται από Σχολικές Επιτροπές';
    
        //delete
        const DuplicateDelTaxOfficeValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Δ.Ο.Υ.'; 
        const NotFoundDelTaxOfficeValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesTaxOfficeUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesTaxOfficeSchoolCommittees = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SchoolCommittees.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSchoolCommittees';
    
//= SpecialTypes================================================================
    
    const MissingSpecialTypeIDParam = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού είναι υποχρεωτικό πεδίο';
    const MissingSpecialTypeIDValue = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού πρέπει να έχει τιμή';
    const InvalidSpecialTypeIDType = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού πρέπει να είναι αριθμητικός';
    const InvalidSpecialTypeIDArray = 'Ο Κωδικός του Ειδικού Χαρακτηρισμού δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingSpecialTypeParam = 'Ο Ειδικός Χαρακτηρισμός είναι υποχρεωτικό πεδίο';
    const MissingSpecialTypeValue = 'Ο Ειδικός Χαρακτηρισμός πρέπει να έχει τιμή';
    const InvalidSpecialTypeValue = 'Ο Ειδικός Χαρακτηρισμός δεν υπάρχει στο λεξικό';
    const InvalidSpecialTypeType = 'Ο Ειδικός Χαρακτηρισμός πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidSpecialTypeArray = 'Ο Ειδικός Χαρακτηρισμός δεν μπορεί να έχει πολλαπλές τιμές';
     
    const MissingSpecialTypeNameParam = 'Το Όνομα του Ειδικού Χαρακτηρισμού είναι υποχρεωτικό πεδίο';
    const MissingSpecialTypeNameValue = 'Το Όνομα του Ειδικού Χαρακτηρισμού πρέπει να έχει τιμή';
    const InvalidSpecialTypeNameType = 'Το Όνομα του Ειδικού Χαρακτηρισμού πρέπει να είναι αλφαριθμητικό';
    const InvalidSpecialTypeNameArray = 'Το Όνομα του Ειδικού Χαρακτηρισμού δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedSpecialTypeValue = 'Ο Ειδικός Χαρακτηρισμός υπάρχει ήδη';
    const DuplicatedSpecialTypeUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key SpecialType';
    const UsedSpecialTypeByUnits = 'Ο Ειδικός Χαρακτηρισμός χρησιμοποιείται από Μονάδες';
    const UsedSpecialTypeBySyncTypes = 'Ο Ειδικός Χαρακτηρισμός χρησιμοποιείται από τον Πίνακα Συγχρονισμού Τύπων Μονάδας';
    
        //delete
        const DuplicateDelSpecialTypeValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Ειδικού Χαρακτηρισμού'; 
        const NotFoundDelSpecialTypeValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesSpecialTypeUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesSpecialTypeSyncTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SyncTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSyncTypes';
    
//= LegalCharacters=============================================================
    
    const MissingLegalCharacterIDParam = 'Ο Κωδικός του Νομικού Χαρακτήρα είναι υποχρεωτικό πεδίο';
    const MissingLegalCharacterIDValue = 'Ο Κωδικός του Νομικού Χαρακτήρα πρέπει να έχει τιμή';
    const InvalidLegalCharacterIDType = 'Ο Κωδικός του Νομικού Χαρακτήρα πρέπει να είναι αριθμητικός';
    const InvalidLegalCharacterIDArray = 'Ο Κωδικός του Νομικού Χαρακτήρα δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingLegalCharacterParam = 'Ο Νομικός Χαρακτήρας είναι υποχρεωτικό πεδίο';    
    const MissingLegalCharacterValue = 'Ο Νομικός Χαρακτήρας πρέπει να έχει τιμή';
    const InvalidLegalCharacterValue = 'Ο Νομικός Χαρακτήρας δεν υπάρχει στο λεξικό';
    const InvalidLegalCharacterType = 'Ο Νομικός Χαρακτήρας πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidLegalCharacterArray = 'Ο Νομικός Χαρακτήρας δεν μπορεί να έχει πολλαπλές τιμές';
     
    const MissingLegalCharacterNameParam = 'Το Όνομα του Νομικού Χαρακτήρα είναι υποχρεωτικό πεδίο';
    const MissingLegalCharacterNameValue = 'Το Όνομα του Νομικού Χαρακτήρα πρέπει να έχει τιμή';
    const InvalidLegalCharacterNameType = 'Το Όνομα του Νομικού Χαρακτήρα πρέπει να είναι αλφαριθμητικό';
    const InvalidLegalCharacterNameArray = 'Το Όνομα του Νομικού Χαρακτήρα δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedLegalCharacterValue = 'Ο Νομικός Χαρακτήρας υπάρχει ήδη';
    const DuplicatedLegalCharacterUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key LegalCharacter';
    const UsedLegalCharacterByUnits = 'Ο Νομικός Χαρακτήρας χρησιμοποιείται από Μονάδες';
    const UsedLegalCharacterBySyncTypes = 'Ο Νομικός Χαρακτήρας χρησιμοποιείται από τον Πίνακα Συγχρονισμού Τύπων Μονάδας';

        //delete
        const DuplicateDelLegalCharacterValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Νομικού Χαρακτήρα'; 
        const NotFoundDelLegalCharacterValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesLegalCharacterUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesLegalCharacterSyncTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SyncTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSyncTypes';
        
//= OperationShifts=============================================================
    
    const MissingOperationShiftIDParam = 'Ο Κωδικός του Ωραρίου Λειτουργίας είναι υποχρεωτικό πεδίο';  
    const MissingOperationShiftIDValue = 'Ο Κωδικός του Ωραρίου Λειτουργίας πρέπει να έχει τιμή';
    const InvalidOperationShiftIDType = 'Ο Κωδικός του Ωραρίου Λειτουργίας πρέπει να είναι αριθμητικός';
    const InvalidOperationShiftIDArray = 'Ο Κωδικός του Ωραρίου Λειτουργίας δεν μπορεί να έχει πολλαπλές τιμές';
   
    const MissingOperationShiftParam = 'Το Ωράριο Λειτουργίας είναι υποχρεωτικό πεδίο';
    const MissingOperationShiftValue = 'Το Ωράριο Λειτουργίας πρέπει να έχει τιμή';
    const InvalidOperationShiftValue = 'Το Ωράριο Λειτουργίας δεν υπάρχει στο λεξικό';
    const InvalidOperationShiftType = 'Το Ωράριο Λειτουργίας πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidOperationShiftArray = 'Το Ωράριο Λειτουργίας δεν μπορεί να έχει πολλαπλές τιμές';
     
    const MissingOperationShiftNameParam = 'Το Όνομα του Ωραρίου Λειτουργίας είναι υποχρεωτικό πεδίο';
    const MissingOperationShiftNameValue = 'Το Όνομα του Ωραρίου Λειτουργίας πρέπει να έχει τιμή';
    const InvalidOperationShiftNameType = 'Το Όνομα του Ωραρίου Λειτουργίας πρέπει να είναι αλφαριθμητικό';
    const InvalidOperationShiftNameArray = 'Το Όνομα του Ωραρίου Λειτουργίας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedOperationShiftValue = 'Το Ωράριο Λειτουργίας υπάρχει ήδη';
    const DuplicatedOperationShiftUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key OperationShift';
    const UsedOperationShiftByUnits = 'Το Ωράριο Λειτουργίας χρησιμοποιείται από Μονάδες';
    const UsedOperationShiftBySyncTypes = 'Το Ωράριο Λειτουργίας χρησιμοποιείται από τον Πίνακα Συγχρονισμού Τύπων Μονάδας';

        //delete
        const DuplicateDelOperationShiftValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Ωραρίου Λειτουργίας'; 
        const NotFoundDelOperationShiftValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesOperationShiftUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';      
        const ReferencesOperationShiftSyncTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SyncTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSyncTypes';      
        
//= OrientationTypes============================================================
    
    const MissingOrientationTypeIDParam = 'Ο Κωδικός του Σχολικού Προσανατολισμού είναι υποχρεωτικό πεδίο';
    const MissingOrientationTypeIDValue = 'Ο Κωδικός του Σχολικού Προσανατολισμού πρέπει να έχει τιμή';
    const InvalidOrientationTypeIDType = 'Ο Κωδικός του Σχολικού Προσανατολισμού πρέπει να είναι αριθμητικός';
    const InvalidOrientationTypeIDArray = 'Ο Κωδικός του Σχολικού Προσανατολισμού δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingOrientationTypeParam = 'Ο Σχολικός Προσανατολισμός είναι υποχρεωτικό πεδίο';
    const MissingOrientationTypeValue = 'Ο Σχολικός Προσανατολισμός πρέπει να έχει τιμή';
    const InvalidOrientationTypeValue = 'Ο Σχολικός Προσανατολισμός δεν υπάρχει στο λεξικό';
    const InvalidOrientationTypeType = 'Ο Σχολικός Προσανατολισμός πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidOrientationTypeArray = 'Ο Σχολικός Προσανατολισμός δεν μπορεί να έχει πολλαπλές τιμές';
     
    const MissingOrientationTypeNameParam = 'Το Όνομα του Σχολικού Προσανατολισμού είναι υποχρεωτικό πεδίο';
    const MissingOrientationTypeNameValue = 'Το Όνομα του Σχολικού Προσανατολισμού πρέπει να έχει τιμή';
    const InvalidOrientationTypeNameType = 'Το Όνομα του Σχολικού Προσανατολισμού πρέπει να είναι αλφαριθμητικό';
    const InvalidOrientationTypeNameArray = 'Το Όνομα του Σχολικού Προσανατολισμού δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedOrientationTypeValue = 'Ο Σχολικός Προσανατολισμός υπάρχει ήδη';
    const DuplicatedOrientationTypeUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key OrientationType';
    const UsedOrientationTypeByUnits = 'Ο Σχολικός Προσανατολισμός χρησιμοποιείται από Μονάδες';
    const UsedOrientationTypeBySyncTypes = 'Ο Σχολικός Προσανατολισμός χρησιμοποιείται από τον Πίνακα Συγχρονισμού Τύπων Μονάδας';
    
        //delete
        const DuplicateDelOrientationTypeValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Σχολικού Προσανατολισμού'; 
        const NotFoundDelOrientationTypeValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesOrientationTypeUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';      
        const ReferencesOrientationTypeSyncTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SyncTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSyncTypes';      
    
//= ImplementationEntities======================================================
    
    const MissingImplementationEntityIDParam = 'Ο Κωδικός του Φορέα Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityIDValue = 'Ο Κωδικός του Φορέα Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityIDType = 'Ο Κωδικός του Φορέα Υλοποίησης πρέπει να είναι αριθμητικός';
    const InvalidImplementationEntityIDArray = 'Ο Κωδικός του Φορέα Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingImplementationEntityParam = 'Ο Φορέας Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityValue = 'Ο Φορεάς Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityValue = 'Ο Φορέας Υλοποίησης δεν υπάρχει στο λεξικό';
    const InvalidImplementationEntityType = 'Ο Φορέας Υλοποίησης πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidImplementationEntityArray = 'Ο Φορέας Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingImplementationEntityNameParam = 'Το Όνομα του Φορέας Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityNameValue = 'Το Όνομα του Φορέας Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityNameType = 'Το Όνομα του Φορέας Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityNameArray = 'Το Όνομα του Φορέας Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
       
    const MissingImplementationEntityInitialParam = 'Τα Αρχικά του Ονόματος του Φορέας Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityInitialValue = 'Τα Αρχικά του Ονόματος του Φορέας Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityInitialType = 'Τα Αρχικά του Ονόματος του Φορέας Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityInitialArray = 'Τα Αρχικά του Ονόματος του Φορέας Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingImplementationEntityStreetAddressParam = 'Η Διεύθυνση (Οδός και Αριθμός) του Φορέα Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityStreetAddressValue = 'Η Διεύθυνση (Οδός και Αριθμός) του Φορέα Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityStreetAddressType = 'Η Διεύθυνση (Οδός και Αριθμός) του Φορέα Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityStreetAddressArray = 'Η Διεύθυνση (Οδός και Αριθμός) του Φορέα Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingImplementationEntityPostalCodeParam = 'Ο Ταχυδρομικός Κώδικας του Φορέα Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityPostalCodeValue = 'Ο Ταχυδρομικός Κώδικας του Φορέα Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityPostalCodeType = 'Ο Ταχυδρομικός Κώδικας του Φορέα Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityPostalCodeArray = 'Ο Ταχυδρομικός Κώδικας του Φορέα Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingImplementationEntityEmailParam = 'Η Ηλεκτρονική Αλληλογραφία του Φορέα Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityEmailValue = 'Η Ηλεκτρονική Αλληλογραφία του Φορέα Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityEmailType = 'Η Ηλεκτρονική Αλληλογραφία του Φορέα Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityEmailArray = 'Η Ηλεκτρονική Αλληλογραφία του Φορέα Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingImplementationEntityPhoneNumberParam = 'Ο Τηλεφωνικός Αριθμός του Φορέα Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityPhoneNumberValue = 'Ο Τηλεφωνικός Αριθμός του Φορέα Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityPhoneNumberType = 'Ο Τηλεφωνικός Αριθμός του Φορέα Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityPhoneNumberArray = 'Ο Τηλεφωνικός Αριθμός του Φορέα Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingImplementationEntityDomainParam = 'Το Domain του Φορέα Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityDomainValue = 'Το Domain του Φορέα Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityDomainType = 'Το Domain του Φορέα Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityDomainArray = 'Το Domain του Φορέα Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingImplementationEntityUrlParam = 'Η Διεύθυνση URL του Φορέας Υλοποίησης είναι υποχρεωτικό πεδίο';
    const MissingImplementationEntityUrlValue = 'Η Διεύθυνση URL του Φορέας Υλοποίησης πρέπει να έχει τιμή';
    const InvalidImplementationEntityUrlType = 'Η Διεύθυνση URL του Φορέας Υλοποίησης πρέπει να είναι αλφαριθμητικό';
    const InvalidImplementationEntityUrlArray = 'Η Διεύθυνση URL του Φορέας Υλοποίησης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedImplementationEntityValue = 'Το όνομα του Φορέα Υλοποίησης υπάρχει ήδη';
    const DuplicatedImplementationEntityInitialsValue = 'Τα αρχικά του Φορέα Υλοποίησης υπάρχουν ήδη';
    const DuplicatedImplementationEntityUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key ImplementationEntity';
    const UsedImplementationEntityByUnits = 'Ο Φορέας Υλοποίησης χρησιμοποιείται από Μονάδες';
    const UsedImplementationEntityByEduAdmins = 'Ο Φορέας Υλοποίησης χρησιμοποιείται από Διευθύνσεις Εκπαίδευσης';
   
        //delete
        const DuplicateDelImplementationEntityValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Φορέα Υλοποίησης'; 
        const NotFoundDelImplementationEntityValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesImplementationEntityUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesImplementationEntityEduAdmins = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα EduAdmins.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteEduAdmins';
    
//= Categories==================================================================
    
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
    const UsedCategoriesByUnits = 'Ο Κωδικός Κατηγορίας χρησιμοποιείται από Μονάδες';
    const UsedCategoriesBySpecialTypes = 'Ο Κωδικός Κατηγορίας χρησιμοποιείται από Ειδικούς Τύπους Μονάδων';
    const UsedCategoriesByLegalCharacters = 'Ο Κωδικός Κατηγορίας χρησιμοποιείται από Νομικούς Χαρακτήρες Μονάδων';
    const UsedCategoriesByOperationShifts= 'Ο Κωδικός Κατηγορίας χρησιμοποιείται από Ωράρια Λειτουργίας Μονάδων';
    const UsedCategoriesByOrientationTypes = 'Ο Κωδικός Κατηγορίας χρησιμοποιείται από Σχολικούς Προσανατολισμούς Μονάδων';
    const UsedCategoriesByUnitTypes = 'Ο Κωδικός Κατηγορίας χρησιμοποιείται από Τύπους Μονάδων';
    
        //delete
        const DuplicateDelCategoryValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Κατηγορίας'; 
        const NotFoundDelCategoryValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesCategoryUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesCategorySpecialTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SpecialTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSpecialTypes';
        const ReferencesCategoryUnitTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα UnitTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnitTypes';
        const ReferencesCategoryOrientationTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα OrientationTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteOrientationTypes';
        const ReferencesCategoryOperationShifts = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα OperationShifts.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteOperationShifts';
        const ReferencesCategoryLegalCharacters = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα LegalCharacters.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteLegalCharacters';
    
//= RegionEduAdmins=============================================================
    
    const MissingRegionEduAdminIDParam = 'Ο Κωδικός της Περιφέρειας είναι υποχρεωτικό πεδίο';
    const MissingRegionEduAdminIDValue = 'Ο Κωδικός της Περιφέρειας πρέπει να έχει τιμή';
    const InvalidRegionEduAdminIDType = 'Ο Κωδικός της Περιφέρειας πρέπει να είναι αριθμητικός';
    const InvalidRegionEduAdminIDArray = 'Ο Κωδικός της Περιφέρειας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingRegionEduAdminParam = 'Η Περιφέρεια είναι υποχρεωτικό πεδίο';
    const MissingRegionEduAdminValue = 'Η Περιφέρεια πρέπει να έχει τιμή';
    const InvalidRegionEduAdminValue = 'Η Περιφέρεια δεν υπάρχει στο λεξικό';
    const InvalidRegionEduAdminType = 'Η Περιφέρεια πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidRegionEduAdminArray = 'Η Περιφέρεια δεν μπορεί να έχει πολλαπλές τιμές';
     
    const MissingRegionEduAdminNameParam = 'Το Όνομα της Περιφέρειας είναι υποχρεωτικό πεδίο';
    const MissingRegionEduAdminNameValue = 'Το Όνομα της Περιφέρειας πρέπει να έχει τιμή';
    const InvalidRegionEduAdminNameType = 'Το Όνομα της Περιφέρειας πρέπει να είναι αλφαριθμητικό';
    const InvalidRegionEduAdminNameArray = 'Το Όνομα της Περιφέρειας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedRegionEduAdminValue = 'Η Περιφέρεια υπάρχει ήδη';
    const DuplicatedRegionEduAdminUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key RegionEduAdmin';
    const UsedRegionEduAdminByUnits = 'Ο Κωδικός Περιφέρειας χρησιμοποιείται από Μονάδες';
    const UsedRegionEduAdminByEduAdmins = 'Ο Κωδικός Περιφέρειας χρησιμοποιείται από Διευθύνσεις Εκπαίδευσης';
    const UsedRegionEduAdminBySchoolCommittees = 'Ο Κωδικός Περιφέρειας χρησιμοποιείται από Σχολικές Επιτροπές';
    
        //delete
        const DuplicateDelRegionEduAdminValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Περιφέρειας'; 
        const NotFoundDelRegionEduAdminValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesRegionEduAdminUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';      
        const ReferencesRegionEduAdminEduAdmins = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα EduAdmins.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteEduAdmins';      
        const ReferencesRegionEduAdminSchoolCommittees = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SchoolCommittees.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSchoolCommittees';      
  
//= EduAdmins===================================================================
      
    const MissingEduAdminIDParam = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminIDValue = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminIDType = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αριθμητικός';
    const InvalidEduAdminIDArray = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingEduAdminParam = 'Η Διεύθυνση Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminValue = 'Η Διεύθυνση Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminValue = 'Η Διεύθυνση Εκπαίδευσης δεν υπάρχει στο λεξικό';
    const InvalidEduAdminType = 'Η Διεύθυνση Εκπαίδευσης πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidEduAdminArray = 'Η Διεύθυνση Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingEduAdminNameParam = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminNameValue = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminNameType = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό';
    const InvalidEduAdminNameArray = 'Το Όνομα της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingEduAdminCodeParam = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminCodeValue = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminCodeValue = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης δεν υπάρχει στο λεξικό';
    const InvalidEduAdminCodeType = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό';
    const InvalidEduAdminCodeArray = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
        
    const MissingEduAdminParentRdnParam = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminParentRdnValue = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminParentRdnType = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό';
    const InvalidEduAdminParentRdnArray = 'Το ParentRdn της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingEduAdminThirdLevelDnsParam = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEduAdminThirdLevelDnsValue = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEduAdminThirdLevelDnsType = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης πρέπει να είναι αλφαριθμητικό';
    const InvalidEduAdminThirdLevelDnsArray = 'Το ThirdLevelDns της Διεύθυνσης Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedEduAdminValue = 'To όνομα της Διεύθυνσης Εκπαίδευσης υπάρχει ήδη';
    const DuplicatedEduAdminUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key EduAdmin';
    const DuplicatedEduAdminCodeValue = 'Ο Κωδικός της Διεύθυνσης Εκπαίδευσης υπάρχει ήδη';
    const UsedEduAdminByUnits = 'Ο Κωδικός Διεύθυνσης Εκπαίδευσης χρησιμοποιείται από Μονάδες';
    const UsedEduAdminByTransferAreas = 'Ο Κωδικός Διεύθυνσης Εκπαίδευσης χρησιμοποιείται από Περιοχές Μετάθεσης';
    const UsedEduAdminBySchoolCommittees = 'Ο Κωδικός Διεύθυνσης Εκπαίδευσης χρησιμοποιείται από Σχολικές Επιτροπές';
    
        //delete
        const DuplicateDelEduAdminValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Διεύθυνσης Εκπαίδευσης'; 
        const NotFoundDelEduAdminValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesEduAdminUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesEduAdminSchoolCommittees = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SchoolCommittees.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSchoolCommittees';
        const ReferencesEduAdminTransferAreas= 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα TransferAreas.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteTransferAreas';
    
//= TransferAreas===============================================================
    
    const MissingTransferAreaIDParam = 'Ο Κωδικός της Περιοχής Μετάθεσης είναι υποχρεωτικό πεδίο';
    const MissingTransferAreaIDValue = 'Ο Κωδικός της Περιοχής Μετάθεσης πρέπει να έχει τιμή';
    const InvalidTransferAreaIDType = 'Ο Κωδικός της Περιοχής Μετάθεσης πρέπει να είναι αριθμητικός';
    const InvalidTransferAreaIDArray = 'Ο Κωδικός της Περιοχής Μετάθεσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingTransferAreaParam = 'Η Περιοχή Μετάθεσης είναι υποχρεωτικό πεδίο';
    const MissingTransferAreaValue = 'Η Περιοχή Μετάθεσης πρέπει να έχει τιμή';
    const InvalidTransferAreaValue = 'Η Περιοχή Μετάθεσης δεν υπάρχει στο λεξικό';
    const InvalidTransferAreaType = 'Η Περιοχή Μετάθεσης πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidTransferAreaArray = 'Η Περιοχή Μετάθεσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingTransferAreaNameParam = 'Το Όνομα της Περιοχής Μετάθεσης είναι υποχρεωτικό πεδίο';
    const MissingTransferAreaNameValue = 'Το Όνομα της Περιοχής Μετάθεσης πρέπει να έχει τιμή';
    const InvalidTransferAreaNameType = 'Το Όνομα της Περιοχής Μετάθεσης πρέπει να είναι αλφαριθμητικό';
    const InvalidTransferAreaNameArray = 'Το Όνομα της Περιοχής Μετάθεσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedTransferAreaValue = 'Η Περιοχή Μετάθεσης υπάρχει ήδη';
    const DuplicatedTransferAreaUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key TransferArea';
    const UsedTransferAreaByUnits = 'Ο Κωδικός Περιοχής Μετάθεσης χρησιμοποιείται από Μονάδες';
    const UsedTransferAreaByTransferAreaMunicipality = 'Ο Κωδικός Περιοχής Μετάθεσης χρησιμοποιείται από Συσχετίσεις Περιοχών Μετάθεσης με Δήμο ';

        //delete
        const DuplicateDelTransferAreaValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Περιοχής Μετάθεσης'; 
        const NotFoundDelTransferAreaValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesTransferAreaUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesTransferAreaTransferAreaMunicipalities = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα TransferAreaMunicipalities.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteTransferAreaMunicipalities';   
    
//= Municipalities==============================================================
      
    const MissingMunicipalityIDParam = 'Ο Κωδικός του Δήμου είναι υποχρεωτικό πεδίο';
    const MissingMunicipalityIDValue = 'Ο Κωδικός του Δήμου πρέπει να έχει τιμή';
    const InvalidMunicipalityIDType = 'Ο Κωδικός του Δήμου πρέπει να είναι αριθμητικός';
    const InvalidMunicipalityIDArray = 'Ο Κωδικός του Δήμου δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingMunicipalityParam = 'Ο Δήμος είναι υποχρεωτικό πεδίο';
    const MissingMunicipalityValue = 'Ο Δήμος πρέπει να έχει τιμή';
    const InvalidMunicipalityValue = 'Ο Δήμος δεν υπάρχει στο λεξικό';
    const InvalidMunicipalityType = 'Ο Δήμος πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidMunicipalityArray = 'Ο Δήμος δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingMunicipalityNameParam = 'Το Όνομα του Δήμου είναι υποχρεωτικό πεδίο';
    const MissingMunicipalityNameValue = 'Το Όνομα του Δήμου πρέπει να έχει τιμή';
    const InvalidMunicipalityNameType = 'Το Όνομα του Δήμου πρέπει να είναι αλφαριθμητικό';
    const InvalidMunicipalityNameArray = 'Το Όνομα του Δήμου δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedMunicipalityValue = 'Ο Δήμος υπάρχει ήδη';
    const DuplicatedMunicipalityUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Municipality';
    const UsedMunicipalityByUnits = 'Ο Κωδικός Δήμου χρησιμοποιείται από Μονάδες';
    const UsedMunicipalityByTransferAreaMunicipality = 'Ο Κωδικός Δήμου χρησιμοποιείται από Συσχετίσεις Περιοχών Μετάθεσης με Δήμο';
    const UsedMunicipalityBySchoolCommittees = 'Ο Κωδικός Δήμου χρησιμοποιείται από Σχολικές Επιτροπές'; 

        //delete
        const DuplicateDelMunicipalityValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Δήμου'; 
        const NotFoundDelMunicipalityValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesMunicipalityUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';      
        const ReferencesMunicipalityTransferAreaMunicipalities = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα TransferAreaMunicipalities.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteTransferAreaMunicipalities';      
        const ReferencesMunicipalitySchoolCommittees = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SchoolCommittees.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSchoolCommittees';      

//= MunicipalityCommunities=====================================================
      
    const MissingMunicipalityCommunityIDParam = 'Ο Κωδικός της Δημοτικής Ενότητας είναι υποχρεωτικό πεδίο';
    const MissingMunicipalityCommunityIDValue = 'Ο Κωδικός της Δημοτικής Ενότητας πρέπει να έχει τιμή';
    const InvalidMunicipalityCommunityIDType = 'Ο Κωδικός της Δημοτικής Ενότητας πρέπει να είναι αριθμητικός';
    const InvalidMunicipalityCommunityIDArray = 'Ο Κωδικός της Δημοτικής Ενότητας δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingMunicipalityCommunityParam = 'Η Δημοτική Ενότητα είναι υποχρεωτικό πεδίο';
    const MissingMunicipalityCommunityValue = 'Η Δημοτική Ενότητα πρέπει να έχει τιμή';
    const InvalidMunicipalityCommunityValue = 'Η Δημοτική Ενότητα δεν υπάρχει στο λεξικό';
    const InvalidMunicipalityCommunityType = 'Η Δημοτική Ενότητα πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidMunicipalityCommunityArray = 'Η Δημοτική Ενότητα δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingMunicipalityCommunityNameParam = 'Το Όνομα της Δημοτικής Ενότητας είναι υποχρεωτικό πεδίο';
    const MissingMunicipalityCommunityNameValue = 'Το Όνομα της Δημοτικής Ενότητας πρέπει να έχει τιμή';
    const InvalidMunicipalityCommunityNameType = 'Το Όνομα της Δημοτικής Ενότητας πρέπει να είναι αλφαριθμητικό';
    const InvalidMunicipalityCommunityNameArray = 'Το Όνομα της Δημοτικής Ενότητας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedMunicipalityCommunityValue = 'Η Δημοτική Ενότητα υπάρχει ήδη';
    const DuplicatedMunicipalityCommunityUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key MunicipalityCommunity';
    const UsedMunicipalityCommunityByUnits = 'Ο Κωδικός της Δημοτικής Ενότητας χρησιμοποιείται από Μονάδες';
    const UsedMunicipalityCommunityByMunicipalities = 'Ο Κωδικός της Δημοτικής Ενότητας χρησιμοποιείται από Δήμους';

        //delete
        const DuplicateDelMunicipalityCommunityValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Δημοτικής Ενότητας'; 
        const NotFoundDelMunicipalityCommunityValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesMunicipalityCommunityUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';      
        const ReferencesMunicipalityCommunityMunicipalities = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Municipalities.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteMunicipalities';      
 
//= Prefectures=================================================================
        
    const MissingPrefectureIDParam = 'Ο Κωδικός της Περιφερειακής Ενότητας είναι υποχρεωτικό πεδίο';
    const MissingPrefectureIDValue = 'Ο Κωδικός της Περιφερειακής Ενότητας πρέπει να έχει τιμή';
    const InvalidPrefectureIDType = 'Ο Κωδικός της Περιφερειακής Ενότητας πρέπει να είναι αριθμητικός';
    const InvalidPrefectureIDArray = 'Ο Κωδικός της Περιφερειακής Ενότητας δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingPrefectureParam = 'Η Περιφερειακή Ενότητα είναι υποχρεωτικό πεδίο';
    const MissingPrefectureValue = 'Η Περιφερειακή Ενότητα πρέπει να έχει τιμή';
    const InvalidPrefectureValue = 'Η Περιφερειακή Ενότητα δεν υπάρχει στο λεξικό';
    const InvalidPrefectureType = 'Η Περιφερειακή Ενότητα πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidPrefectureArray = 'Η Περιφερειακή Ενότητα δεν μπορεί να έχει πολλαπλές τιμές';
  
    const MissingPrefectureNameParam = 'Το Όνομα της Περιφερειακής Ενότητας είναι υποχρεωτικό πεδίο';
    const MissingPrefectureNameValue = 'Το Όνομα της Περιφερειακής Ενότητας πρέπει να έχει τιμή';
    const InvalidPrefectureNameType = 'Το Όνομα της Περιφερειακής Ενότητας πρέπει να είναι αλφαριθμητικό';
    const InvalidPrefectureNameArray = 'Το Όνομα της Περιφερειακής Ενότητας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedPrefectureValue = 'Η Περιφερειακή Ενότητα υπάρχει ήδη';
    const DuplicatedPrefectureUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Prefecture';
    const UsedPrefectureByUnits = 'Ο Κωδικός Περιφερειακής Ενότητας χρησιμοποιείται από Μονάδες';
    const UsedPrefectureByMunicipalities = 'Ο Κωδικός Περιφερειακής Ενότητας χρησιμοποιείται από Δήμους';
    const UsedPrefectureBySchoolCommittees = 'Ο Κωδικός Περιφερειακής Ενότητας χρησιμοποιείται από Σχολικές Επιτροπές';

        //delete
        const DuplicateDelPrefectureValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Περιφερειακής Ενότητας'; 
        const NotFoundDelPrefectureValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesPrefectureUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';      
        const ReferencesPrefectureMunicipalities = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Municipalities.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteMunicipalities';      
        const ReferencesPrefectureSchoolCommittees = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SchoolCommittees.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSchoolCommittees';      

//= TransferAreaMunicipalities==================================================
    
    const MissingTransferAreaMunicipalityIDParam = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο είναι υποχρεωτικό πεδίο';
    const MissingTransferAreaMunicipalityIDValue = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο πρέπει να έχει τιμή';
    const InvalidTransferAreaMunicipalityIDType = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο πρέπει να είναι αριθμητικός';
    const InvalidTransferAreaMunicipalityIDArray = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingTransferAreaMunicipalityParam = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο είναι υποχρεωτικό πεδίο';
    const MissingTransferAreaMunicipalityValue = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο πρέπει να έχει τιμή';
    const InvalidTransferAreaMunicipalityValue = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο δεν υπάρχει στο λεξικό';
    const InvalidTransferAreaMunicipalityType = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidTransferAreaMunicipalityArray = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο δεν μπορεί να έχει πολλαπλές τιμές';
        
    const DuplicatedTransferAreaMunicipalityValue = 'Η Συσχέτιση Περιοχής Μετάθεσης με Δήμο υπάρχει ήδη';
    const DuplicatedTransferAreaMunicipalityUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key TransferAreaMunicipality';
    
        //delete
        const DuplicateDelTransferAreaMunicipalityValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Συσχέτισης Περιοχής Μετάθεσης με Δήμο'; 
        const NotFoundDelTransferAreaMunicipalityValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

//= EducationLevels=============================================================
    
    const MissingEducationLevelIDParam = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEducationLevelIDValue = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEducationLevelIDType = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης πρέπει να είναι αριθμητικός';
    const InvalidEducationLevelIDArray = 'Ο Κωδικός του Επιπέδου Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingEducationLevelParam = 'Το Επίπεδο Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEducationLevelValue = 'Το Επίπεδο Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEducationLevelValue = 'Το Επίπεδο Εκπαίδευσης δεν υπάρχει στο λεξικό';
    const InvalidEducationLevelType = 'Το Επίπεδο Εκπαίδευσης πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidEducationLevelArray = 'Το Επίπεδο Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingEducationLevelNameParam = 'Το Όνομα του Επιπέδου Εκπαίδευσης είναι υποχρεωτικό πεδίο';
    const MissingEducationLevelNameValue = 'Το Όνομα του Επιπέδου Εκπαίδευσης πρέπει να έχει τιμή';
    const InvalidEducationLevelNameType = 'Το Όνομα του Επιπέδου Εκπαίδευσης πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidEducationLevelNameArray = 'Το Όνομα του Επιπέδου Εκπαίδευσης δεν μπορεί να έχει πολλαπλές τιμές';    

    const DuplicatedEducationLevelValue = 'Το Επίπεδο Εκπαίδευσης υπάρχει ήδη';
    const DuplicatedEducationLevelUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key EducationLevel';
    const UsedEducationLevelByUnits = 'Ο Κωδικός Επίπεδου Εκπαίδευσης χρησιμοποιείται από Μονάδες';
    const UsedEducationLevelByUnitTypes = 'Ο Κωδικός Επίπεδου Εκπαίδευσης χρησιμοποιείται από Τύπους Μονάδων';
    const UsedEducationLevelBySchoolCommittees = 'Ο Κωδικός Επίπεδου Εκπαίδευσης χρησιμοποιείται από Σχολικές Επιτροπές';

        //delete
        const DuplicateDelEducationLevelValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Επιπέδου Εκπαίδευσης'; 
        const NotFoundDelEducationLevelValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesEducationLevelUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesEducationLevelSchoolCommittees = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SchoolCommittees.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSchoolCommittees';
        const ReferencesEducationLevelUnitTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα UnitTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnitTypes';
    
//= UnitTypes===================================================================
    
    const MissingUnitTypeIDParam = 'Ο Κωδικός του Τύπου Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitTypeIDValue = 'Ο Κωδικός του Τύπου Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitTypeIDType = 'Ο Κωδικός του Τύπου Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidUnitTypeIDArray = 'Ο Κωδικός του Τύπου Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingUnitTypeParam = 'Ο Τύπος Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitTypeValue = 'Ο Τύπος Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitTypeValue = 'Ο Τύπος Μονάδας δεν υπάρχει στο λεξικό';
    const InvalidUnitTypeType = 'Ο Τύπος Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitTypeArray = 'Ο Τύπος Μονάδας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingUnitTypeNameParam = 'Το Όνομα του Τύπου Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitTypeNameValue = 'Το Όνομα του Τύπου Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitTypeNameType = 'Το Όνομα του Τύπου Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitTypeNameArray = 'Το Όνομα του Τύπου Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingUnitTypeInitialParam = 'Η Συντομογραφία Ονόματος του Τύπου Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingUnitTypeInitialValue = 'Η Συντομογραφία Ονόματος του Τύπου Μονάδας πρέπει να έχει τιμή';
    const InvalidUnitTypeInitialType = 'Η Συντομογραφία Ονόματος του Τύπου Μονάδας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidUnitTypeInitialArray = 'Η Συντομογραφία Ονόματος του Τύπου Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedUnitTypeValue = 'Ο Τύπος Μονάδας υπάρχει ήδη';
    const DuplicatedUnitTypeUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key UnitType';
    const DuplicatedUnitTypeNameValue = 'Το Όνομα του Τύπου Μονάδας υπάρχει ήδη';
    const DuplicatedUnitTypeInitialValue = 'Η Συντομογραφία Ονόματος του Τύπου Μονάδας υπάρχει ήδη';
    const UsedUnitTypeByUnits = 'Ο Κωδικός του Τύπου Μονάδας χρησιμοποιείται από Μονάδες';
    const UsedUnitTypeBySyncTypeUnits = 'Ο Κωδικός του Τύπου Μονάδας χρησιμοποιείται από τον Πίνακα Συγχρονισμού Τύπων Μονάδας';
    
        //delete
        const DuplicateDelUnitTypeValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Τύπου Μονάδας'; 
        const NotFoundDelUnitTypeValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesUnitTypeUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
        const ReferencesUnitTypeSyncTypes = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα SyncTypes.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteSyncTypes';

//= States======================================================================
    
    const MissingStateIDParam = 'Ο Κωδικός της Κατάστασης είναι υποχρεωτικό πεδίο';
    const MissingStateIDValue = 'Ο Κωδικός της Κατάστασης πρέπει να έχει τιμή';
    const InvalidStateIDType = 'Ο Κωδικός της Κατάστασης πρέπει να είναι αριθμητικός';
    const InvalidStateIDArray = 'Ο Κωδικός της Κατάστασης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingStateParam = 'Η Κατάσταση είναι υποχρεωτικό πεδίο';
    const MissingStateValue = 'Η Κατάσταση πρέπει να έχει τιμή';
    const InvalidStateValue = 'Η Κατάσταση δεν υπάρχει στο λεξικό';
    const InvalidStateType = 'Η Κατάσταση πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidStateArray = 'Η Κατάσταση δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingStateNameParam = 'Το Όνομα της Κατάστασης είναι υποχρεωτικό πεδίο';
    const MissingStateNameValue = 'Το Όνομα της Κατάστασης πρέπει να έχει τιμή';
    const InvalidStateNameType = 'Το Όνομα της Κατάστασης πρέπει να είναι αλφαριθμητικό';
    const InvalidStateNameArray = 'Το Όνομα της Κατάστασης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedStateValue = 'Η Κατάσταση υπάρχει ήδη';
    const DuplicatedStateUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key State';
    const UsedStateByUnits = 'Ο Κωδικός της Κατάστασης χρησιμοποιείται από Μονάδες';

        //delete
        const DuplicateDelStateValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Κατάστασης'; 
        const NotFoundDelStateValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesStateUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits';
   
//= CircuitTypes================================================================
    
    const MissingCircuitTypeIDParam = 'Ο Κωδικός του Τυπου Τηλεπικοινωνιακού Κυκλώματος είναι υποχρεωτικό πεδίο';
    const MissingCircuitTypeIDValue = 'Ο Κωδικός του Τυπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να έχει τιμή';
    const InvalidCircuitTypeIDType = 'Ο Κωδικός του Τυπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός';
    const InvalidCircuitTypeIDArray = 'Ο Κωδικός του Τυπου Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingCircuitTypeParam = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος είναι υποχρεωτικό πεδίο';
    const MissingCircuitTypeValue = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος πρέπει να έχει τιμή';
    const InvalidCircuitTypeValue = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος δεν υπάρχει στο λεξικό';
    const InvalidCircuitTypeType = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidCircuitTypeArray = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingCircuitTypeNameParam = 'Το Όνομα του Τύπου Τηλεπικοινωνιακού Κυκλώματος είναι υποχρεωτικό πεδίο';
    const MissingCircuitTypeNameValue = 'Το Όνομα του Τύπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να έχει τιμή';
    const InvalidCircuitTypeNameType = 'Το Όνομα του Τύπου Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αλφαριθμητικό';
    const InvalidCircuitTypeNameArray = 'Το Όνομα του Τύπου Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedCircuitTypeValue = 'Ο Τύπος Τηλεπικοινωνιακού Κυκλώματος υπάρχει ήδη';
    const DuplicatedCircuitTypeUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key CircuitType';
    const UsedCircuitTypeByCircuits = 'Ο Κωδικός του Τυπου Τηλεπικοινωνιακού Κυκλώματος χρησιμοποιείται από Τηλεπικοινωνιακά Κυκλώματα'; 
    
 //= RelationTypes==============================================================
    
    const MissingRelationTypeIDParam = 'Ο Κωδικός του Τύπου Συσχέτισης είναι υποχρεωτικό πεδίο';
    const MissingRelationTypeIDValue = 'Ο Κωδικός του Τύπου Συσχέτισης πρέπει να έχει τιμή';
    const InvalidRelationTypeIDType = 'Ο Κωδικός του Τύπου Συσχέτισης πρέπει να είναι αριθμητικός';
    const InvalidRelationTypeIDArray = 'Ο Κωδικός του Τύπου Συσχέτισης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingRelationTypeValue = 'Ο Τύπος Συσχέτισης πρέπει να έχει τιμή';
    const MissingRelationTypeParam = 'Ο Τύπος Συσχέτισης είναι υποχρεωτικό πεδίο';
    const InvalidRelationTypeValue = 'Ο Τύπος Συσχέτισης δεν υπάρχει στο λεξικό';
    const InvalidRelationTypeType = 'Ο Τύπος Συσχέτισης πρέπει να είναι αριθμητικός ή αλφαριθμητικός';
    const InvalidRelationTypeArray = 'Ο Τύπος Συσχέτισης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingRelationTypeNameParam = 'Το Όνομα του Τύπου Συσχέτισης είναι υποχρεωτικό πεδίο';
    const MissingRelationTypeNameValue = 'Το Όνομα του Τύπου Συσχέτισης πρέπει να έχει τιμή';
    const InvalidRelationTypeNameType = 'Το Όνομα του Τύπου Συσχέτισης πρέπει να είναι αλφαριθμητικό';
    const InvalidRelationTypeNameArray = 'Το Όνομα του Τύπου Συσχέτισης δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedRelationTypeValue = 'Ο Τύπος Συσχέτισης υπάρχει ήδη';
    const DuplicatedRelationTypeUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key RelationType';
    const UsedRelationTypeByRelations = 'Ο Κωδικός του Τυπου Συσχέτισης χρησιμοποιείται από Συσχέτισεις Μονάδων';

        //delete
        const DuplicateDelRelationTypeValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο κωδικό του Τυπου Συσχέτισης.'; 
        const NotFoundDelRelationTypeValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesRelationTypeRelations = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Relations .Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteRelations ';
   
//= WorkerPositions=============================================================
        
    const MissingWorkerPositionIDParam = 'Ο Κωδικός της Θέσης Εργασίας είναι υποχρεωτικό πεδίο';
    const MissingWorkerPositionIDValue = 'Ο Κωδικός της Θέσης Εργασίας πρέπει να έχει τιμή';
    const InvalidWorkerPositionIDType = 'Ο Κωδικός της Θέσης Εργασίας πρέπει να είναι αριθμητικός';
    const InvalidWorkerPositionIDArray = 'Ο Κωδικός της Θέσης Εργασίας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingWorkerPositionParam = 'Η Θέση Εργασίας είναι υποχρεωτικό πεδίο';
    const MissingWorkerPositionValue = 'Η Θέση Εργασίας πρέπει να έχει τιμή';
    const InvalidWorkerPositionValue = 'Η Θέση Εργασίας δεν υπάρχει στο λεξικό';
    const InvalidWorkerPositionType = 'Η Θέση Εργασίας πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidWorkerPositionArray = 'Η Θέση Εργασίας δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingWorkerPositionNameParam = 'Το Όνομα της Θέσης Εργασίας είναι υποχρεωτικό πεδίο';
    const MissingWorkerPositionNameValue = 'Το Όνομα της Θέσης Εργασίας πρέπει να έχει τιμή';
    const InvalidWorkerPositionNameType = 'Το Όνομα της Θέσης Εργασίας πρέπει να είναι αλφαριθμητικό';
    const InvalidWorkerPositionNameArray = 'Το Όνομα της Θέσης Εργασίας δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedWorkerPositionValue = 'Η Θέση Εργασίας υπάρχει ήδη';
    const DuplicatedWorkerPositionUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key WorkerPosition';
    const UsedWorkerPositionByUnitWorkers = 'Ο Κωδικός της Θέσης Εργασίας χρησιμοποιείται από Εργαζόμενους Μοναδων';
    
        //delete
        const DuplicateDelWorkerPositionValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικός Θέσης Εργασίας'; 
        const NotFoundDelWorkerPositionValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesWorkerPositionUnitWorkers = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα UnitWorkers.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnitWorkers';
   
//= WorkerSpecializations=======================================================
    
    const MissingWorkerSpecializationIDParam = 'Ο Κωδικός της Ειδικότητας Εργαζόμενου είναι υποχρεωτικό πεδίο';
    const MissingWorkerSpecializationIDValue = 'Ο Κωδικός της Ειδικότητας Εργαζόμενου πρέπει να έχει τιμή';
    const InvalidWorkerSpecializationIDType = 'Ο Κωδικός της Ειδικότητας Εργαζόμενου πρέπει να είναι αριθμητικός';
    const InvalidWorkerSpecializationIDArray = 'Ο Κωδικός της Ειδικότητας Εργαζόμενου δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingWorkerSpecializationParam = 'Η Ειδικότητα Εργαζόμενου είναι υποχρεωτικό πεδίο';
    const MissingWorkerSpecializationValue = 'Η Ειδικότητα Εργαζόμενου πρέπει να έχει τιμή';
    const InvalidWorkerSpecializationValue = 'Η Ειδικότητα Εργαζόμενου δεν υπάρχει στο λεξικό';
    const InvalidWorkerSpecializationType = 'Η Ειδικότητα Εργαζόμενου πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidWorkerSpecializationArray = 'Η Ειδικότητα Εργαζόμενου δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingWorkerSpecializationNameParam = 'Το Όνομα της Ειδικότητας Εργαζόμενου είναι υποχρεωτικό πεδίο';
    const MissingWorkerSpecializationNameValue = 'Το Όνομα της Ειδικότητας Εργαζόμενου πρέπει να έχει τιμή';
    const InvalidWorkerSpecializationNameType = 'Το Όνομα της Ειδικότητας Εργαζόμενου πρέπει να είναι αλφαριθμητικό';
    const InvalidWorkerSpecializationNameArray = 'Το Όνομα της Ειδικότητας Εργαζόμενου δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedWorkerSpecializationValue = 'Η Ειδικότητα Εργαζόμενου υπάρχει ήδη';
    const DuplicatedWorkerSpecializationUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key WorkerSpecialization';
    const UsedWorkerSpecializationByUnitWorkers = 'Ο Κωδικός της Ειδικότητας Εργαζόμενου χρησιμοποιείται από Εργαζόμενους Μοναδων';

        //delete
        const DuplicateDelWorkerSpecializationValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Ειδικότητας Εργαζόμενου'; 
        const NotFoundDelWorkerSpecializationValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesWorkerSpecializationWorkers = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Workers.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteWorkers';
    
//= Sources=====================================================================
    
    const MissingSourceIDParam = 'Ο Κωδικός της Πρωτογενής Πηγής Δεδομένων είναι υποχρεωτικό πεδίο';
    const MissingSourceIDValue = 'Ο Κωδικός της Πρωτογενής Πηγής Δεδομένων πρέπει να έχει τιμή';
    const InvalidSourceIDType = 'Ο Κωδικός της Πρωτογενής Πηγής Δεδομένων πρέπει να είναι αριθμητικός';
    const InvalidSourceIDArray = 'Ο Κωδικός της Πρωτογενής Πηγής Δεδομένων δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingSourceParam = 'Η Πρωτογενής Πηγή Δεδομένων είναι υποχρεωτικό πεδίο';
    const MissingSourceValue = 'Η Πρωτογενής Πηγή Δεδομένων πρέπει να έχει τιμή';
    const InvalidSourceValue = 'Η Πρωτογενής Πηγή Δεδομένων δεν υπάρχει στο λεξικό';
    const InvalidSourceType = 'Η Πρωτογενής Πηγή Δεδομένων πρέπει να είναι αριθμητικό ή αλφαριθμητικό';
    const InvalidSourceArray = 'Η Πρωτογενής Πηγή Δεδομένων δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingSourceNameParam = 'Το Όνομα της Πρωτογενής Πηγής Δεδομένων είναι υποχρεωτικό πεδίο';
    const MissingSourceNameValue = 'Το Όνομα της Πρωτογενής Πηγής Δεδομένων πρέπει να έχει τιμή';
    const InvalidSourceNameType = 'Το Όνομα της Πρωτογενής Πηγής Δεδομένων πρέπει να είναι αλφαριθμητικό';
    const InvalidSourceNameArray = 'Το Όνομα της Πρωτογενής Πηγής Δεδομένων δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingSourceVisibleParam = 'H δυνατότητα Εμφάνισης της Πρωτογενής Πηγής είναι υποχρεωτικό πεδίο';
    const MissingSourceVisibleValue = 'Η δυνατότητα Εμφάνισης της Πρωτογενής Πηγής πρέπει να έχει τιμή';
    const InvalidSourceVisibleType = 'Η δυνατότητα Εμφάνισης της Πρωτογενής Πηγής πρέπει να είναι αλφαριθμητική(true|false)';
    const InvalidSourceVisibleArray = 'Η δυνατότητα Εμφάνισης της Πρωτογενής Πηγής δεν μπορεί να έχει πολλαπλές τιμές';
    
    const DuplicatedSourceValue = 'Η Πρωτογενής Πηγή Δεδομένων υπάρχει ήδη';
    const DuplicatedSourceUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Source';
    const UsedSourceByWorkers = 'Ο Κωδικός της Πρωτογενής Πηγής Δεδομένων χρησιμοποιείται από Εργαζόμενο';
    const UsedSourceByUnits = 'Ο Κωδικός της Πρωτογενής Πηγής Δεδομένων χρησιμοποιείται από Μονάδα';

        //delete
        const DuplicateDelSourceValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο κωδικό της Πρωτογενής Πηγής Δεδομένων'; 
        const NotFoundDelSourceValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesSourceUnits = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Units .Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteUnits ';
        const ReferencesSourceWorkers = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Workers .Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteWorkers ';

//= Levels======================================================================
    
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
    const UsedLevelByGroups = 'Ο Κωδικός της Τάξης χρησιμοποιείται από Τμήμα';
    const DuplicatedLevelIDUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key LevelID'; //EXTRA only for ID REFERENCE

        //delete
        const DuplicateDelLevelsValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Τάξης'; 
        const NotFoundDelLevelsValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

        //references
        const ReferencesLevelsGroups = 'Δεν είναι δυνατή η διαγραφή της εγγραφής, λόγω συσχετισμού με τον πίνακα Groups.Διαγραψτε τις αντίστοιχες εγγραφές με χρήση api request DeleteGroups';      
    
//= Groups======================================================================
    
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

        //delete
        const DuplicateDelGroupValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Διεύθυνσης Εκπαίδευσης'; 
        const NotFoundDelGroupValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';

//******************************************************************************

    
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
    
    
// =Relations===================================================================

    const MissingRelationIDParam = 'Ο Κωδικός της Συσχέτισης Μονάδων είναι υποχρεωτικό πεδίο';
    const MissingRelationIDValue = 'Ο Κωδικός της Συσχέτισης Μονάδων πρέπει να έχει τιμή';
    const InvalidRelationIDType = 'Ο Κωδικός της Συσχέτισης Μονάδων πρέπει να είναι αριθμητικός';
    const InvalidRelationIDArray = 'Ο Κωδικός της Συσχέτισης Μονάδων δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingRelationValue = 'Η Συσχέτιση Μονάδων πρέπει να έχει τιμή';
    const MissingRelationParam = 'Η Συσχέτιση Μονάδων είναι υποχρεωτικό πεδίο';
    const InvalidRelationValue = 'Η Συσχέτιση Μονάδων δεν υπάρχει στο λεξικό';
    const InvalidRelationType = 'Η Συσχέτιση Μονάδων πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidRelationArray = 'Η Συσχέτιση Μονάδων δεν μπορεί να έχει πολλαπλές τιμές';
    
    const MissingRelationHostUnitMMIDParam = 'Ο Κωδικός ΜΜ της Host Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingRelationHostUnitMMIDValue = 'Ο Κωδικός ΜΜ της Host Μονάδας πρέπει να έχει τιμή';
    const InvalidRelationHostUnitMMIDType = 'Ο Κωδικός ΜΜ της Host Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidRelationHostUnitMMIDArray = 'Ο Κωδικός ΜΜ της Host Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidRelationHostUnitMMIDValue = 'Ο Κωδικός ΜΜ της Host Μονάδας δεν βρέθηκε'; //EXTRA only for ID REFERENCE
    
    const MissingRelationGuestUnitMMIDParam = 'Ο Κωδικός ΜΜ της Guest Μονάδας είναι υποχρεωτικό πεδίο';
    const MissingRelationGuestUnitMMIDValue = 'Ο Κωδικός ΜΜ της Guest Μονάδας πρέπει να έχει τιμή';
    const InvalidRelationGuestUnitMMIDType = 'Ο Κωδικός ΜΜ της Guest Μονάδας πρέπει να είναι αριθμητικός';
    const InvalidRelationGuestUnitMMIDArray = 'Ο Κωδικός ΜΜ της Guest Μονάδας δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidRelationGuestUnitMMIDValue = 'Ο Κωδικός ΜΜ της Guest Μονάδας δεν βρέθηκε'; //EXTRA only for ID REFERENCE
    
    const MissingRelationStateParam = 'H Κατάσταση της Συσχέτισης Μονάδων είναι υποχρεωτικό πεδίο';
    const MissingRelationStateValue = 'H Κατάσταση της Συσχέτισης Μονάδων πρέπει να έχει τιμή';
    const InvalidRelationStateType = 'H Κατάσταση της Συσχέτισης Μονάδων πρέπει να είναι αριθμητικό (0=ΑΝΕΝΕΡΓΗ ή 1=ΕΝΕΡΓΗ)';
    const InvalidRelationStateArray = 'H Κατάσταση της Συσχέτισης Μονάδων δεν μπορεί να έχει πολλαπλές τιμές';

    const MissingRelationTrueDateParam = 'Η Ημερομηνία Ενεργοποίησης της Συσχέτισης Μονάδων είναι υποχρεωτικό πεδίο';
    const MissingRelationTrueDateValue = 'Η Ημερομηνία Ενεργοποίησης της Συσχέτισης Μονάδων πρέπει να έχει τιμή';
    const InvalidRelationTrueDateType = 'Η Ημερομηνία Ενεργοποίησης της Συσχέτισης Μονάδων πρέπει να είναι Ημερομηνία (dd-mm-yyyy hh::mm:ss)';
    const InvalidRelationTrueDateArray = 'Η Ημερομηνία Ενεργοποίησης της Συσχέτισης Μονάδων δεν μπορεί να έχει πολλαπλές τιμές';
    const InvalidRelationTrueDateValidType = 'Η Ημερομηνία Ενεργοποίησης της Συσχέτισης Μονάδων πρέπει να έιναι μεταξύ των τιμών "1975 - current_date"'; //extra date
    
    const MissingRelationTrueFekParam = 'Το ΦΕΚ Ενεργοποίησης της Συσχέτισης Μονάδων είναι υποχρεωτικό πεδίο';
    const MissingRelationTrueFekValue = 'Το ΦΕΚ Ενεργοποίησης της Συσχέτισης Μονάδων πρέπει να έχει τιμή';
    const InvalidRelationTrueFekType = 'Το ΦΕΚ Ενεργοποίησης της Συσχέτισης Μονάδων πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidRelationTrueFekArray = 'Το ΦΕΚ Ενεργοποίησης της Συσχέτισης Μονάδων δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const MissingRelationFalseDateParam = 'Η Ημερομηνία Απενεργοποίησης της Συσχέτισης Μονάδων είναι υποχρεωτικό πεδίο';
    const MissingRelationFalseDateValue = 'Η Ημερομηνία Απενεργοποίησης της Συσχέτισης Μονάδων πρέπει να έχει τιμή';
    const InvalidRelationFalseDateType = 'Η Ημερομηνία Απενεργοποίησης της Συσχέτισης Μονάδων πρέπει να είναι Ημερομηνία (dd-mm-yyyy hh::mm:ss)';
    const InvalidRelationFalseDateArray = 'Η Ημερομηνία Απενεργοποίησης της Συσχέτισης Μονάδων δεν μπορεί να έχει πολλαπλές τιμές'; 
    const InvalidRelationFalseDateValidType = 'Η Ημερομηνία Απενεργοποίησης της Συσχέτισης Μονάδων πρέπει να έιναι μεταξύ των τιμών "1975 - current_date"'; //extra date
    
    const MissingRelationFalseFekParam = 'Το ΦΕΚ Απενεργοποίησης της Συσχέτισης Μονάδων είναι υποχρεωτικό πεδίο';
    const MissingRelationFalseFekValue = 'Το ΦΕΚ Απενεργοποίησης της Συσχέτισης Μονάδων πρέπει να έχει τιμή';
    const InvalidRelationFalseFekType = 'Το ΦΕΚ Απενεργοποίησης της Συσχέτισης Μονάδων πρέπει να είναι αριθμητική ή αλφαριθμητική';
    const InvalidRelationFalseFekArray = 'Το ΦΕΚ Απενεργοποίησης της Συσχέτισης Μονάδων δεν μπορεί να έχει πολλαπλές τιμές'; 
    
    const DuplicatedRelationValue = 'Η Συσχέτιση Μονάδων υπάρχει ήδη';
    const DuplicatedRelationUniqueValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή primary key Relation';
    
        //delete
        const DuplicateDelRelationValue = 'Ενημερώστε τον διαχειριστή! Βρέθηκε διπλοεγγραφή με ίδιο Κωδικό Συσχέτισης Μονάδων'; 
        const NotFoundDelRelationValue = 'Δεν βρέθηκε η εγγραφή προς διαγραφή.';
    
}    

?>