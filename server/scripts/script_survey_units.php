#!/usr/bin/php
<?php

chdir( "../" );

require_once('system/includes.php');
require_once('libs/nusoap/nusoap.php');
require_once 'sync/sync_survey_units_data.php';
require_once 'sync/sync_survey_units.php';
require_once 'sync/sync_survey_committees.php';

//==============================================================================

$data    = json_decode( sync_survey_units_data() );
$message = $data->message;
//
$sql = "INSERT INTO system_sync_logs SET "
     . "title = '".  mysql_escape_string($data->title)."',"
     . "message = '".  mysql_escape_string($message)."',"
     . "records = '".  mysql_escape_string($data->records)."',"
     . "start_date = '".  mysql_escape_string($data->start_date)."',"
     . "start_time = '".  mysql_escape_string($data->start_time)."',"
     . "time = '".  mysql_escape_string($data->time)."'";

//echo "\n\n".$sql."\n\n";
$stmt = $db->query( $sql );
//
//
//$sql = "SELECT system_mail_rule_id, title, mailto, mailcc, mailfrom, subject "
//     . "FROM system_mail_rules WHERE title = '".mysql_escape_string($data->title)."'";
//$stmt = $db->query( $sql );  
//$rows = $stmt->fetch(PDO::FETCH_ASSOC);
//
//if ( ( $stmt->rowCount() > 0 ) && $rows["mailto"] )
//{
//    SendMail($rows["mailto"], $rows["mailcc"], $rows["mailfrom"], $rows["subject"], "<pre>".$message."</pre>");
//}
//
////==============================================================================
//
//$data    = json_decode(sync_survey_committees() );
//$message = $data->message;
//
//$sql = "INSERT INTO system_sync_logs SET "
//     . "title = '".  mysql_escape_string($data->title)."',"
//     . "message = '".  mysql_escape_string($message)."',"
//     . "records = '".  mysql_escape_string($data->records)."',"
//     . "installed = '".  mysql_escape_string($data->installed)."',"
//     . "updated = '".  mysql_escape_string($data->updated)."',"
//     . "skipped = '".  mysql_escape_string($data->skipped)."',"
//     . "errors = '".    mysql_escape_string($data->errors)."',"
//     . "start_date = '".  mysql_escape_string($data->start_date)."',"
//     . "start_time = '".  mysql_escape_string($data->start_time)."',"
//     . "time = '".  mysql_escape_string($data->time)."'";
//
//echo "\n\n\n\n\n\n\n\n";
//echo "\n\n".$sql."\n\n";
//$stmt = $db->query( $sql );


//$sql = "SELECT system_mail_rule_id, title, mailto, mailcc, mailfrom, subject "
//     . "FROM system_mail_rules WHERE title = '".mysql_escape_string($data->title)."'";
//$stmt = $db->query( $sql );  
//
//$rows = $stmt->fetch(PDO::FETCH_ASSOC);
//
//if ( ( $stmt->rowCount() > 0 ) && $rows["mailto"] )
//{
//    SendMail($rows["mailto"], $rows["mailcc"], $rows["mailfrom"], $rows["subject"], "<pre>".$message."</pre>");
//}

//==============================================================================
//
//$data    = json_decode( sync_survey_units() );
//$message = $data->message;
//
//$sql = "INSERT INTO system_sync_logs SET "
//     . "title = '".  mysql_escape_string($data->title)."',"
//     . "message = '".  mysql_escape_string($message)."',"
//     . "records = '".  mysql_escape_string($data->records)."',"
//     . "installed = '".  mysql_escape_string($data->installed)."',"
//     . "updated = '".  mysql_escape_string($data->updated)."',"
//     . "skipped = '".  mysql_escape_string($data->skipped)."',"
//     . "errors = '".  mysql_escape_string($data->errors)."',"
//     . "start_date = '".  mysql_escape_string($data->start_date)."',"
//     . "start_time = '".  mysql_escape_string($data->start_time)."',"
//     . "time = '".  mysql_escape_string($data->time)."'";
//
////echo "\n\n".$sql."\n\n";
//$stmt = $db->query( $sql );        
//
//
//$sql = "SELECT system_mail_rule_id, title, mailto, mailcc, mailfrom, subject "
//     . "FROM system_mail_rules WHERE title = '".mysql_escape_string($data->title)."'";
//$stmt = $db->query( $sql );  
//
//$rows = $stmt->fetch(PDO::FETCH_ASSOC);
//
//if ( ( $stmt->rowCount() > 0 ) && $rows["mailto"] )
//{
//    SendMail($rows["mailto"], $rows["mailcc"], $rows["mailfrom"], $rows["subject"], "<pre>".$message."</pre>");
//}

//==============================================================================
    
?>
