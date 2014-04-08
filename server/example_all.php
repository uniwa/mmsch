<?php
header("Content-Type: text/html; charset=utf-8");

require_once('system/includes.php');

$arrayAPIs = array(
    '/units',
    '/workers',
    '/unit_workers',
    '/relations',
    '/levels',
    '/groups',
    '/ip_masks',
    '/addrspace_types',
    '/addrspaces',
    '/unit_ip_dns',
    '/categories',
    '/edu_admins',
    '/education_levels',
    '/implementation_entities',
    '/legal_characters',
    '/municipalities',
    '/operation_shifts',
    '/orientation_types',
    '/region_edu_admins',
    '/sources',
    '/special_types',
    '/states',
    '/tax_offices',
    '/transfer_areas',
    '/transitions',
    '/unit_types',
    '/relation_types',
    '/worker_positions',
    '/worker_specializations',
    '/prefectures'
);
?>

<table width="600" border="1">
    <tr>
        <th width="250">Method</th>
        <th width="100">Count</th>
        <th width="100">Total</th>
        <th width="150">Time</th>
    </tr>

<?php
ob_start();

foreach($arrayAPIs as $func)
{
    $syncTime = time();
    
    $server = $Options["ServerURL"].$func;

    $params = array(
        //"category" => "ΥΠΟΣΤΗΡΙΚΤΙΚΕΣ ΜΟΝΑΔΕΣ",
        //"mm_id" => "1000017, 1000019, 1000021, 1000023, 1000025,,",
        //"pagesize" => 500
    );

    $curl = curl_init($server);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerAdminUserName"] . ":" . $Options["ServerAdminPassWord"]);
    curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerUserName"] . ":" . $Options["ServerPassWord"]);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($curl);
    $data = json_decode( $data );
    
    //echo "<pre>"; var_dump($data); echo "</pre>";
?>
    <tr>
        <td><?php echo $func ?></td>
        <td><?php echo $data->count ?></td>
        <td><?php echo $data->total ?></td>
        <td><?php echo "Time : ".humanTiming($syncTime) ?></td>
    </tr>
<?php
    ob_get_flush(); ob_flush(); flush();
}

?>
</table>
