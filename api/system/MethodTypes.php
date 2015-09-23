<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package SYSTEM
 */

header("Content-Type: text/html; charset=utf-8");

/**
 * **Τύποι Συναρτήσεων**
 *
 * Παρακάτω εμφανίζονται οι Τύποι Συναρτήσεων οι οποίοι παρέχονται μέσω του ΑΡΙ για την κλήση των συναρτήσεων.
 *
 */

class MethodTypes
{

    /**
     * Ο Τύπος Συνάρτησης χρησιμοποιείται για την κληση GET route api name (Αναζήτηση).
     */
    const GET = "GET";


    /**
     * Ο Τύπος Συνάρτησης χρησιμοποιείται για την κληση POST route api name (Δημιουργία).
     */
    const POST = "POST";

    /**
     * Ο Τύπος Συνάρτησης χρησιμοποιείται για την κληση PUT route api name (Ενημέρωση).
     */
    const PUT = "PUT";

    /**
     * Ο Τύπος Συνάρτησης χρησιμοποιείται για την κληση DELETE route api name (Διαγραφή).
     */
    const DELETE = "DELETE";
}

?>