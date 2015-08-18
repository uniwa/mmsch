<?php
/**
 *
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package System
 */

header("Content-Type: text/html; charset=utf-8");
/**
 * Πίνακας Μηνυμάτων Προκαθορισμένων Παραμέτρων
 * 
 * Στον Πίνακα Μηνυμάτων Προκαθορισμένων Παραμέτρων εμφανίζονται τα Μηνύματα που μπορεί να προκύψουν κατά την εισαγωγή των παρακάτων παραμέτρων από τον χρήστη.
 * * page
 * * pagesize
 * * orderby
 * * ordertype
 * * searchtype
 * * exporttype
 * 
 * * 'Ο Τύπος Αναζήτησης είναι λάθος'
 *  <br>{@see ExceptionMessages::InvalidSearchType} , {@see ExceptionCodes::InvalidSearchType}
 * 
 * * 'Ο Αριθμός Σελίδας πρέπει να έχει τιμή'
 *  <br>{@see ExceptionMessages::MissingPageValue} , {@see ExceptionCodes::MissingPageValue}
 * 
 * * 'Ο Αριθμός Σελίδας δεν μπορεί να έχει πολλαπλές τιμές'
 *  <br>{@see ExceptionMessages::InvalidPageArray} , {@see ExceptionCodes::InvalidPageArray}
 * 
 * * 'Ο Αριθμός Σελίδας πρέπει να είναι μεγαλύτερος από 0'
 *  <br>{@see ExceptionMessages::InvalidPageNumber} , {@see ExceptionCodes::InvalidPageNumber}
 * 
 * * 'Ο Αριθμός Σελίδας πρέπει να είναι αριθμητικός'
 *  <br>{@see ExceptionMessages::InvalidPageType} , {@see ExceptionCodes::InvalidPageType}
 * 
 * * 'Ο Αριθμός Εγγραφών/Σελίδα πρέπει να έχει τιμή'
 *  <br>{@see ExceptionMessages::MissingPageSizeValue} , {@see ExceptionCodes::MissingPageSizeValue}
 * 
 * * 'Ο Αριθμός Εγγραφών/Σελίδα δεν μπορεί να έχει πολλαπλές τιμές'
 *  <br>{@see ExceptionMessages::InvalidPageSizeArray} , {@see ExceptionCodes::InvalidPageSizeArray}
 * 
 * * 'Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι από 0 έως 500'
 *  <br>{@see ExceptionMessages::InvalidPageSizeNumber} , {@see ExceptionCodes::InvalidPageSizeNumber}
 * 
 * * 'Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι αριθμητικός'
 *  <br>{@see ExceptionMessages::InvalidPageSizeType} , {@see ExceptionCodes::InvalidPageSizeType}
 * 
 * * 'Ο Τύπος Ταξινόμησης πρέπει να είναι ASC ή DESC'
 *  <br>{@see ExceptionMessages::InvalidOrderType} , {@see ExceptionCodes::InvalidOrderType}
 * 
 * * 'Το Πεδίο Ταξινόμησης πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση'
 *  <br>{@see ExceptionMessages::InvalidOrderBy} , {@see ExceptionCodes::InvalidOrderBy}
 * 
 */
class StandarParamsMessages{}
?>