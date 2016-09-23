#!/usr/bin/php
<?php
header("Content-Type: text/html; charset=utf-8");
chdir( "../" );

require_once('system/includes.php');
require_once('libs/nusoap/nusoap.php');
require_once 'sync/sync_survey_units.php';

//==============================================================================

$counter = 1;
$message = $data = null;
$sync_flag = false;

do {
        $data = exec('cd '.__DIR__.'/../myschool_client && "'.$Options['javaBin'].'" -Dfile.encoding=UTF-8 -jar MyschoolUnitInfoJClient.jar units '.getcwd().'/'.$Options["dbUnits"]);
        $data = json_decode($data);
        //var_dump($data);die();
        $message .= $data->message;

	if ($data==null) {
		$message = 'MyschoolUnitInfoJClient.jar has problem on mm server';
		break;
	}

        if ($data->records ==  0 | NULL) {
        	$message = " $counter Attempt. Try for sync with MySchool Failed. ";
        } else {
		$sync_flag=true;
	}

       $counter++;
        if ($counter>3) {
		$message .= ' Reach Maximum 3 Sync Attempts ';
        	break;
	}

} while($sync_flag == false);

//=actions if sync_flag is FALSE
if ($sync_flag == false) {
	$data->title = 'MM - Myschool Sync failed!';
        $data->records = 0;
	$data->start_date = date("Y-m-d"); 
	$data->start_time = date("H:i:s");
	$data->time = '0 seconds';
}

$sql = "INSERT INTO system_sync_logs SET "
     . "title = '".  mysql_escape_string($data->title)."',"
     . "message = '".  mysql_escape_string($message)."',"
     . "records = '".  mysql_escape_string($data->records)."',"
     . "start_date = '".  mysql_escape_string($data->start_date)."',"
     . "start_time = '".  mysql_escape_string($data->start_time)."',"
     . "time = '".  mysql_escape_string($data->time)."'";

//echo "\n\n".$sql."\n\n";
$stmt = $db->query( $sql );

if ($sync_flag == false) { exit;}

//action if sync_flag is TRUE
$data    = json_decode(sync_survey_units());
$message = $data->message;

$sql = "INSERT INTO system_sync_logs SET "
     . "title = '".  mysql_escape_string($data->title)."',"
     . "message = '".  mysql_escape_string($message)."',"
     . "records = '".  mysql_escape_string($data->records)."',"
     . "installed = '".  mysql_escape_string($data->installed)."',"
     . "updated = '".  mysql_escape_string($data->updated)."',"
     . "skipped = '".  mysql_escape_string($data->skipped)."',"
     . "errors = '".  mysql_escape_string($data->errors)."',"
     . "start_date = '".  mysql_escape_string($data->start_date)."',"
     . "start_time = '".  mysql_escape_string($data->start_time)."',"
     . "time = '".  mysql_escape_string($data->time)."'";

//echo "\n\n".$sql."\n\n";
$stmt = $db->query( $sql );        

//=logging results and send mail
$sql = "SELECT system_mail_rule_id, title, mailto, mailcc, mailfrom, subject "
     . "FROM system_mail_rules WHERE title = '".mysql_escape_string($data->title)."'";
$stmt = $db->query( $sql );  

$rows = $stmt->fetch(PDO::FETCH_ASSOC);

if ( ( $stmt->rowCount() > 0 ) && $rows["mailto"] )
{
    SendMail($rows["mailto"], $rows["mailcc"], $rows["mailfrom"], $rows["subject"], "<pre>".$message."</pre>");
}
    
?>