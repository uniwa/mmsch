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
    $objPHPExcel->getActiveSheet()->setCellValue('B1', "Κωδικός ΥΠΑΙΠΘ", PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('C1', "Ονομασία");
    $objPHPExcel->getActiveSheet()->setCellValue('D1', "Ειδική Ονομασία");
    $objPHPExcel->getActiveSheet()->setCellValue('E1', "Τηλέφωνο Επικοινωνίας",PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('F1', "Ηλεκτρονική Αλληλογραφία");
    $objPHPExcel->getActiveSheet()->setCellValue('G1', "Αριθμός Τηλεομοιοτυπίας",PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('H1', "Διεύθυνση");
    $objPHPExcel->getActiveSheet()->setCellValue('I1', "Ταχυδρομικός Κώδικας",PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('J1', "Αριθμός Φορολογικού Μητρώου",PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('K1', "Ομάδα Σχολείων");
    $objPHPExcel->getActiveSheet()->setCellValue('L1', "Πλήθος των Τάξεων");
    $objPHPExcel->getActiveSheet()->setCellValue('M1', "Πλήθος των Τμημάτων");
    $objPHPExcel->getActiveSheet()->setCellValue('N1', "Πλήθος των Μαθητών");
    $objPHPExcel->getActiveSheet()->setCellValue('O1', "Γεωγραφικό Πλάτος",PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('P1', "Γεωγραφικό Μήκος",PHPExcel_Cell_DataType::TYPE_STRING);
    $objPHPExcel->getActiveSheet()->setCellValue('Q1', "Κτηριακή Θέση");
    $objPHPExcel->getActiveSheet()->setCellValue('R1', "Φ.Ε.Κ. (Δημιουργίας)",PHPExcel_Cell_DataType::TYPE_STRING);
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
        $objPHPExcel->getActiveSheet()->setCellValue("A$i", $lab_data["mm_id"]);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit("B$i", $lab_data["registry_no"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("C$i", $lab_data["name"]);
        $objPHPExcel->getActiveSheet()->setCellValue("D$i", $lab_data["special_name"]);
        $objPHPExcel->getActiveSheet()->setCellValue("E$i", $lab_data["phone_number"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("F$i", $lab_data["email"]);
        $objPHPExcel->getActiveSheet()->setCellValue("G$i", $lab_data["fax_number"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("H$i", $lab_data["street_address"]);
        $objPHPExcel->getActiveSheet()->setCellValue("I$i", $lab_data["postal_code"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("J$i", $lab_data["tax_number"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("K$i", $lab_data["area_team_number"]);
        $objPHPExcel->getActiveSheet()->setCellValue("L$i", $lab_data["levels_count"]);
        $objPHPExcel->getActiveSheet()->setCellValue("M$i", $lab_data["groups_count"]);
        $objPHPExcel->getActiveSheet()->setCellValue("N$i", $lab_data["students_count"]);
        $objPHPExcel->getActiveSheet()->setCellValue("O$i", $lab_data["latitude"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("P$i", $lab_data["longitude"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("Q$i", $lab_data["positioning"]);
        $objPHPExcel->getActiveSheet()->setCellValue("R$i", $lab_data["creation_fek"],PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValue("S$i", $lab_data["last_update"]);
        $objPHPExcel->getActiveSheet()->setCellValue("T$i", $lab_data["last_sync"]);      
        $objPHPExcel->getActiveSheet()->setCellValue("U$i", $lab_data["comments"]);
        $objPHPExcel->getActiveSheet()->setCellValue("V$i", $lab_data["source"]);
        $objPHPExcel->getActiveSheet()->setCellValue("W$i", $lab_data["state"]);
        $objPHPExcel->getActiveSheet()->setCellValue("X$i", $lab_data["region_edu_admin"]);
        $objPHPExcel->getActiveSheet()->setCellValue("Y$i", $lab_data["edu_admin"]);
        $objPHPExcel->getActiveSheet()->setCellValue("Z$i", $lab_data["implementation_entity"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AA$i", $lab_data["transfer_area"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AB$i", $lab_data["prefecture"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AC$i", $lab_data["municipality"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AD$i", $lab_data["education_level"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AE$i", $lab_data["tax_office"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AF$i", $lab_data["category"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AG$i", $lab_data["unit_type"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AH$i", $lab_data["operation_shift"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AI$i", $lab_data["legal_character"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AJ$i", $lab_data["orientation_type"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AK$i", $lab_data["special_type"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AL$i", $lab_data["unit_dns"][0]["unit_dns"]);
        $objPHPExcel->getActiveSheet()->setCellValue("AM$i", $lab_data["unit_dns"][0]["unit_ext_dns"]);
          
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