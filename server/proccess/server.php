#!/usr/bin/php
<?php

chdir( "../" );

require_once('system/includes.php');

//==============================================================================
    
while (true)
{
    $sql = "SELECT "
         . "system_sync_script_id, title, script, time_loop, last_date_check, last_time_check, status, active "
         . "FROM system_sync_scripts WHERE active = 1";
    //echo "\n\n".$sql."\n\n";
    $stmt = $db->query( $sql );  
    $rows = $stmt->fetchAll (PDO::FETCH_ASSOC);

    $check_date = date("Y-m-d");
    $check_time = date("H:i:s");
    $to_time = strtotime( $check_date." ".$check_time );

    foreach( $rows as $row )
    {
        $last_run = $row["last_date_check"]." ".$row["last_time_check"];

        $from_time = strtotime( $last_run );
        $elapsed_time = floor( abs( $to_time - $from_time ) );
        
        if ( (trim($last_run) == "") || ($elapsed_time >= ($row["time_loop"] * 60)))
        {
            $sql = "UPDATE system_sync_scripts SET "
                 . "last_date_check = '".$check_date."', "
                 . "last_time_check = '".$check_time."', "
                 . "status = 'Running' "
                 . "WHERE system_sync_script_id = ".$row["system_sync_script_id"];
            $stmt = $db->query( $sql );

            $filename = getcwd()."/scripts/".$row["script"];

            //system( $filename.' >/dev/null &' );
            system( $filename );
        }
        else if ( getRunningPid($row["script"]) == 0)
        {
            $sql = "UPDATE system_sync_scripts SET "
                 . "status = 'Idle' "
                 . "WHERE system_sync_script_id = ".$row["system_sync_script_id"];
            $stmt = $db->query( $sql );
        }
    }

    sleep(30); //seconds
}       
?>