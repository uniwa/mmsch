<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package SYSTEM
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **Πίνακας Μηνυμάτων Authentication/Authorization**
 * 
 * Στον Πίνακα Μηνυμάτων Authentication/Authorization εμφανίζονται τα Μηνύματα που μπορεί να προκύψουν κατά την διαδικασίας Authentication/Authorization της συνάρτησης.
 * 
 * ***'Ο χρήστης δεν έχει συγκεριμενα δικαιώματα πρόσβασης'***
 * <br> {@see ExceptionMessages::UserNoPermissions} , {@see ExceptionCodes::UserNoPermissions}
 * <br>Το μήνυμα εμφανίζεται στην περίπτωση που ο χρήστης δεν έχει δικαίωμα πρόσβασης σε συγκεκριμένη Function(route api name) με συγκεκριμένη Method(GET,POST,PUT,DELETE).

 * 
 * ***'Ο χρήστης δεν έχει πρόσβαση'***
 * <br> {@see ExceptionMessages::UserAccesDenied} , {@see ExceptionCodes::UserAccesDenied}
 * <br>Το μήνυμα εμφανίζεται στην περίπτωση που έχουν βρεθεί πολλαπλοι χρήστες με το ίδιο username στον ldap server και δεν επιτρέπεται η πρόσβαση. 
 *  
 * ***'HTTP Error 401 Unauthorized'***
 * <br> {@see ExceptionMessages::Unauthorized} , {@see ExceptionCodes::Unauthorized}
 * <br>Το μήνυμα εμφανίζεται στην περίπτωση που δεν έχει γίνει προσθήκη του route api name στον πίνακα $Permissions της κλάσης UserRoles. 
 * 
 * ***'Η Μέθοδος δεν βρέθηκε'***
 * <br> {@see ExceptionMessages::MethodNotFound} , {@see ExceptionCodes::MethodNotFound}
 * <br>Το μήνυμα εμφανίζεται στην περίπτωση που η Μέθοδος(GET,POST,PUT,DELETE) δεν υπάρχει.
 * 
 * ***'Η Function δεν βρέθηκε'***
 * <br> {@see ExceptionMessages::FunctionNotFound} , {@see ExceptionCodes::FunctionNotFound}
 * <br>Το μήνυμα εμφανίζεται στην περίπτωση που η Function(route api name) δεν υπάρχει.
 * 
 * ***'Invalid credentials'***
 * <br>Το μήνυμα εμφανίζεται στην περίπτωση που ο χρήστης δώσει λάθος στοιχεία πρόσβασης.
 * 
 */

class AuthMessages{}

?>