<?php
header("Content-Type: text/html; charset=utf-8");
class UnitsExt {

 public static function ExcelCsvCreate($data, $export = 'XLSX'){
     
     global $Options;
   
    // Create new PHPExcel object
    $objPHPExcel = new PHPExcel();

    // Set document properties
    $objPHPExcel->getProperties()->setCreator("MM Administrator")
                                 ->setTitle("MM Units xlsx")
                                 ->setSubject("Export Units xlsx format")
                                 ->setDescription("First level xls data. Saved at server folder.");
    // Set format codes 
    $objPHPExcel->getDefaultStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);

    // Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $objPHPExcel->setActiveSheetIndex(0);
    
    // Create a first sheet
    $objPHPExcel->getActiveSheet()->setCellValue('A1', "Κωδικός ΜΜ");
    $objPHPExcel->getActiveSheet()->setCellValue('B1', "Κωδικός ΥΠΑΙΠΘ");
    $objPHPExcel->getActiveSheet()->setCellValue('C1', "Ονομασία");
    $objPHPExcel->getActiveSheet()->setCellValue('D1', "Ειδική Ονομασία");
    $objPHPExcel->getActiveSheet()->setCellValue('E1', "Τηλέφωνο Επικοινωνίας");
    $objPHPExcel->getActiveSheet()->setCellValue('F1', "Ηλεκτρονική Αλληλογραφία");
    $objPHPExcel->getActiveSheet()->setCellValue('G1', "Αριθμός Τηλεομοιοτυπίας");
    $objPHPExcel->getActiveSheet()->setCellValue('H1', "Διεύθυνση");
    $objPHPExcel->getActiveSheet()->setCellValue('I1', "Ταχυδρομικός Κώδικας");
    $objPHPExcel->getActiveSheet()->setCellValue('J1', "Αριθμός Φορολογικού Μητρώου");
    $objPHPExcel->getActiveSheet()->setCellValue('K1', "Ομάδα Σχολείων");
    $objPHPExcel->getActiveSheet()->setCellValue('L1', "Πλήθος των Τάξεων");
    $objPHPExcel->getActiveSheet()->setCellValue('M1', "Πλήθος των Τμημάτων");
    $objPHPExcel->getActiveSheet()->setCellValue('N1', "Πλήθος των Μαθητών");
    $objPHPExcel->getActiveSheet()->setCellValue('O1', "Γεωγραφικό Πλάτος");
    $objPHPExcel->getActiveSheet()->setCellValue('P1', "Γεωγραφικό Μήκο");
    $objPHPExcel->getActiveSheet()->setCellValue('Q1', "Κτηριακή Θέση");
    $objPHPExcel->getActiveSheet()->setCellValue('R1', "Φ.Ε.Κ. (Δημιουργίας)");
    $objPHPExcel->getActiveSheet()->setCellValue('S1', "Ημερομηνία Τελευταίας Ενημέρωσης");
    $objPHPExcel->getActiveSheet()->setCellValue('T1', "Ημερομηνία Τελευταίου Συγχρονισμού");
    $objPHPExcel->getActiveSheet()->setCellValue('U1', "Παρατηρήσεις - Σχόλια");
    $objPHPExcel->getActiveSheet()->setCellValue('V1', "Πρωτογενής Πηγή");
    $objPHPExcel->getActiveSheet()->setCellValue('W1', "Κατάσταση");
    $objPHPExcel->getActiveSheet()->setCellValue('X1', "Περιφέρεια");
    $objPHPExcel->getActiveSheet()->setCellValue('Y1', "Διεύθυνση Εκπαίδευσης");
    $objPHPExcel->getActiveSheet()->setCellValue('Z1', "Φορέας Υλοποίησης ");
    $objPHPExcel->getActiveSheet()->setCellValue('AA1', "Περιοχή Μετάθεσης");
    $objPHPExcel->getActiveSheet()->setCellValue('AB1', "Νομός");
    $objPHPExcel->getActiveSheet()->setCellValue('AC1', "Δήμος ΟΤΑ");
    $objPHPExcel->getActiveSheet()->setCellValue('AD1', "Επιπέδου Εκπαίδευσης");
    $objPHPExcel->getActiveSheet()->setCellValue('AE1', "Δ.Ο.Υ.");
    $objPHPExcel->getActiveSheet()->setCellValue('AF1', "Κατηγορία");
    $objPHPExcel->getActiveSheet()->setCellValue('AG1', "Τύπος");
    $objPHPExcel->getActiveSheet()->setCellValue('AH1', "Ωράριο Λειτουργίας");
    $objPHPExcel->getActiveSheet()->setCellValue('AI1', "Νομικός Χαρακτήρας");
    $objPHPExcel->getActiveSheet()->setCellValue('AJ1', "Προσανατολισμός");
    $objPHPExcel->getActiveSheet()->setCellValue('AK1', "Ειδικός Χαρακτηρισμός");
    $objPHPExcel->getActiveSheet()->setCellValue('AL1', "DNS Μονάδας");
    $objPHPExcel->getActiveSheet()->setCellValue('AM1', "ExtDNS Μονάδας");
    
    //Loop throught data result of get api function
    $i=2;
    foreach($data["data"] as $lab_data)
    {    

        // Set values from get api function to excell cells
        $objPHPExcel->getActiveSheet()->setCellValue("A$i", $lab_data["mm_id"])
                                        ->setCellValue("B$i", $lab_data["registry_no"])
                                        ->setCellValue("C$i", $lab_data["name"])
                                        ->setCellValue("D$i", $lab_data["special_name"])
                                        ->setCellValue("E$i", $lab_data["phone_number"])
                                        ->setCellValue("F$i", $lab_data["email"])
                                        ->setCellValue("G$i", $lab_data["fax_number"])
                                        ->setCellValue("H$i", $lab_data["street_address"])
                                        ->setCellValue("I$i", $lab_data["postal_code"])
                                        ->setCellValue("J$i", $lab_data["tax_number"])
                                        ->setCellValue("K$i", $lab_data["area_team_number"])
                                        ->setCellValue("L$i", $lab_data["levels_count"])
                                        ->setCellValue("M$i", $lab_data["groups_count"])
                                        ->setCellValue("N$i", $lab_data["students_count"])
                                        ->setCellValue("O$i", $lab_data["latitude"])
                                        ->setCellValue("P$i", $lab_data["longitude"])
                                        ->setCellValue("Q$i", $lab_data["positioning"])
                                        ->setCellValue("R$i", $lab_data["creation_fek"])
                                        ->setCellValue("S$i", $lab_data["last_update"])
                                        ->setCellValue("T$i", $lab_data["last_sync"])           
                                        ->setCellValue("U$i", $lab_data["comments"])
                                        ->setCellValue("V$i", $lab_data["source"])
                                        ->setCellValue("W$i", $lab_data["state"])
                                        ->setCellValue("X$i", $lab_data["region_edu_admin"])
                                        ->setCellValue("Y$i", $lab_data["edu_admin"])
                                        ->setCellValue("Z$i", $lab_data["implementation_entity"])
                                        ->setCellValue("AA$i", $lab_data["transfer_area"])
                                        ->setCellValue("AB$i", $lab_data["prefecture"])
                                        ->setCellValue("AC$i", $lab_data["municipality"])
                                        ->setCellValue("AD$i", $lab_data["education_level"])
                                        ->setCellValue("AE$i", $lab_data["tax_office"])
                                        ->setCellValue("AF$i", $lab_data["category"])
                                        ->setCellValue("AG$i", $lab_data["unit_type"])
                                        ->setCellValue("AH$i", $lab_data["operation_shift"])
                                        ->setCellValue("AI$i", $lab_data["legal_character"])
                                        ->setCellValue("AJ$i", $lab_data["orientation_type"])
                                        ->setCellValue("AK$i", $lab_data["special_type"])
                                        ->setCellValue("AL$i", $lab_data["unit_dns"][0]["unit_dns"])
                                        ->setCellValue("AM$i", $lab_data["unit_dns"][0]["unit_ext_dns"])
                                    ;
        $i++;

    }

    // Save Excel 2007 file
    $stringDate = date('dmYHis');
             
    if ($export == 'CSV'){
        $filename = "Units".$stringDate.".csv";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
        $objWriter->save($Options["TmpFolder"].$filename);
    } else {
       $filename = "Units".$stringDate.".xlsx";
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save($Options["TmpFolder"].$filename);
    }
      
    return $filename;
}

}
?>