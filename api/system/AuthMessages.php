<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package System
 */

header("Content-Type: text/html; charset=utf-8");
/**
 * Πίνακας Μηνυμάτων Authentication/Authorization
 * 
 * Στον Πίνακα Μηνυμάτων Authentication/Authorization εμφανίζονται τα Μηνύματα που μπορεί να προκύψουν κατά την διαδικασίας Authentication/Authorization της συνάρτησης.
 * 
 * * 'Ο χρήστης δεν έχει συγκεριμενα δικαιώματα πρόσβασης'
 *  <br>{@see ExceptionMessages::UserNoPermissions} , {@see ExceptionCodes::UserNoPermissions}
 *  <br>Είναι μνμ το οποιο μπορεί 
 * 
 * * UserAccesDenied {@see ExceptionMessages::UserAccesDenied} , {@see ExceptionCodes::UserAccesDenied}
 * 
 * * Unauthorized {@see ExceptionMessages::Unauthorized} , {@see ExceptionCodes::Unauthorized}
 * 
 */
class AuthMessages{}
?>