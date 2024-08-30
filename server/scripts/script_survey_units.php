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
        $check_proccess = shell_exec("ps -ef | grep MyschoolUnitInfoClient | grep -v grep");
        if ($check_proccess!=null) {
            shell_exec("ps -ef | grep MyschoolUnitInfoClient | grep -v grep | awk '{print $2}' | xargs kill");    
        }

        $data = exec('php /IS/web/hosting/hosts/main/mm/server/myschool_client/MyschoolUnitInfoClient.php units /IS/web/hosting/hosts/main/mm/server/data/survey_units.txt');
        $data = json_decode($data);
        //var_dump($data);die();
        $message .= $data->message;

	if ($data==null) {
		$message = ' MyschoolUnitInfoClient connection problem. Return null ';
        } else if ($data->records ==  0 || NULL) {
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
     . "title = ".  $db->quote($data->title).","
     . "message = ".  $db->quote($message).","
     . "records = ". $db->quote($data->records).","
     . "start_date = ".  $db->quote($data->start_date).","
     . "start_time = ".  $db->quote($data->start_time).","
     . "time = ".  $db->quote($data->time)."";

//echo "\n\n".$sql."\n\n";
$stmt = $db->query( $sql );
if ($sync_flag == false) { exit;}

//START SYNC------------------
//exit;

//action if sync_flag is TRUE
$data    = json_decode(sync_survey_units());
$message = $data->message;

$sql = "INSERT INTO system_sync_logs SET "
     . "title = ".  $db->quote($data->title).","
     . "message = ".  $db->quote($message).","
     . "records = ".  $db->quote($data->records).","
     . "installed = ".  $db->quote($data->installed).","
     . "updated = ".  $db->quote($data->updated).","
     . "skipped = ".  $db->quote($data->skipped).","
     . "errors = ".  $db->quote($data->errors).","
     . "start_date = ".  $db->quote($data->start_date).","
     . "start_time = ".  $db->quote($data->start_time).","
     . "time = ".  $db->quote($data->time)."";

//echo "\n\n".$sql."\n\n";
$stmt = $db->query( $sql );        

//exit;

//=logging results and send mail
$sql = "SELECT system_mail_rule_id, title, mailto, mailcc, mailfrom, subject "
     . "FROM system_mail_rules WHERE title = ".$db->quote($data->title)."";
$stmt = $db->query( $sql );  

$rows = $stmt->fetch(PDO::FETCH_ASSOC);

if ( ( $stmt->rowCount() > 0 ) && $rows["mailto"] )
{
    //SendMail($rows["mailto"], $rows["mailcc"], $rows["mailfrom"], $rows["subject"], "<pre>".$message."</pre>");
    SendMail('ktsiolis@uniwa.gr', '', 'dbsch@uniwa.gr', 'MM-Myschool daily sync', "<pre>".$message."</pre>");
    SendMail('krantzos@uniwa.gr', '', 'dbsch@uniwa.gr', 'MM-Myschool daily sync', "<pre>".$message."</pre>");
}
    
?>
