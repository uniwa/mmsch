<?php

header("Content-Type: text/html; charset=utf-8");



function SendMail($To, $Cc, $From, $Subject, $Message)
{    
    $Headers = "From: ".($From ? $From : 'mmsch@teiath.gr'). "\r\n" .
               ($Cc ? "Cc: " .$Cc. "\r\n" : "") .
               "Reply-To: ".($From ? $From : 'mmsch@teiath.gr'). "\r\n" .
               "X-Mailer: MMSCH" . "\r\n" .
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n";

    $Subject = '=?UTF-8?B?'.base64_encode($Subject).'?=';
    
    return mail( $To, $Subject, $Message, $Headers );
}

function getRunningPid($processName) {
    $pid = 0;
    $processes = array();
    
    $command = 'ps ax | grep '.$processName;
    exec($command, $processes);
    //var_dump($processes);
    
    foreach ($processes as $processString) 
    {
        $processArr = explode(' ', trim($processString));
        if ( (intval($processArr[0]) != getmypid())&&
             (strpos($processString, 'grep '.$processName) === false)) 
        {
            $pid = intval($processArr[0]);
        }
    }
    
    return $pid;
}
	
        
function loadData($api_url)
{
    global $Options;
    
    $params = array("pagesize" => 0);

    $curl = curl_init( $Options["ServerURL"].$api_url );
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, $Options["ServerUserName"].":".$Options["ServerPassWord"]);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);

    return json_decode($data);   
}

function load_region_edu_admins(&$a_region_edu_admins, &$o_region_edu_admins)
{
    $a_region_edu_admins = array();
    $o_region_edu_admins = array();
    $data = loadData("/region_edu_admins");
    
    foreach ($data->data as $item)
    {
        $a_region_edu_admins[$item->region_edu_admin_id] = $item->name;
        $o_region_edu_admins[$item->region_edu_admin_id] = $item;
    }
}

function load_edu_admins(&$a_edu_admins, &$o_edu_admins)
{
    $a_edu_admins = array();
    $o_edu_admins = array();
    $data = loadData("/edu_admins");
    foreach ($data->data as $item)
    {
        $a_edu_admins[$item->edu_admin_id] = $item->name;
        $o_edu_admins[$item->edu_admin_id] = $item;
    }
}

function load_transfer_areas(&$a_transfer_areas, &$o_transfer_areas)
{
    $a_transfer_areas = array();
    $o_transfer_areas = array();
    $data = loadData("/transfer_areas");
    foreach ($data->data as $item)
    {
        $a_transfer_areas[$item->transfer_area_id] = $item->name;
        $o_transfer_areas[$item->transfer_area_id] = $item;
    }
}

function load_municipalities(&$a_municipalities, &$o_municipalities)
{
    $a_municipalities = array();
    $o_municipalities = array();
    $data = loadData("/municipalities");
    foreach ($data->data as $item)
    {
        $a_municipalities[$item->municipality_id] = $item->name;
        $o_municipalities[$item->municipality_id] = $item;
    }
}

function load_prefectures(&$a_prefectures, &$o_prefectures)
{
    $a_prefectures = array();
    $o_prefectures = array();
    $data = loadData("/prefectures");
    foreach ($data->data as $item)
    {
        $a_prefectures[$item->prefecture_id] = $item->name;
        $o_prefectures[$item->prefecture_id] = $item;
    }
}

function load_unit_types(&$a_unit_types, &$o_unit_types)
{
    $a_unit_types = array();
    $o_unit_types = array();
    $data = loadData("/unit_types");
    foreach ($data->data as $item)
    {
        $a_unit_types[$item->unit_type_id] = $item->name;
        $o_unit_types[$item->unit_type_id] = $item;
    }
}

function load_operation_shifts(&$a_operation_shifts, &$o_operation_shifts)
{
    $a_operation_shifts = array();
    $o_operation_shifts = array();
    $data = loadData("/operation_shifts");
    foreach ($data->data as $item)
    {
        $a_operation_shifts[$item->operation_shift_id] = $item->name;
        $o_operation_shifts[$item->operation_shift_id] = $item;
    }
}

function load_legal_characters(&$a_legal_characters, &$o_legal_characters)
{
    $a_legal_characters = array();
    $o_legal_characters = array();
    $data = loadData("/legal_characters");
    foreach ($data->data as $item)
    {
        $a_legal_characters[$item->legal_character_id] = $item->name;
        $o_legal_characters[$item->legal_character_id] = $item;
    }
}

function load_orientation_types(&$a_orientation_types, &$o_orientation_types)
{
    $a_orientation_types = array();
    $o_orientation_types = array();
    $data = loadData("/orientation_types");
    foreach ($data->data as $item)
    {
        $a_orientation_types[$item->orientation_type_id] = $item->name;
        $o_orientation_types[$item->orientation_type_id] = $item;
    }
}

function load_special_types(&$a_special_types, &$o_special_types)
{
    $a_special_types = array();
    $o_special_types = array();
    $data = loadData("/special_types");
    foreach ($data->data as $item)
    {
        $a_special_types[$item->special_type_id] = $item->name;
        $o_special_types[$item->special_type_id] = $item;
    }
}

function load_sync_unit_types(&$a_sync_unit_types, &$o_sync_unit_types)
{
    global $db;
    
    $a_sync_unit_types = array();
    $o_sync_unit_types = array();
    $sql = "SELECT 
                sync_type_id, name, unit_type_id, operation_shift_id, legal_character_id, orientation_type_id, special_type_id
            FROM 
                sync_types
            ORDER BY name";

    $stmt = $db->query( $sql );        
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row)
    {
        $row = json_decode( json_encode( $row ) );
        $a_sync_unit_types[ $row->sync_type_id ] = $row->name;
        $o_sync_unit_types[ $row->sync_type_id ] = $row;
    }
}

function load_tax_offices(&$a_tax_offices, &$o_tax_offices)
{
    $a_tax_offices = array();
    $o_tax_offices = array();
    $data = loadData("/tax_offices");
    foreach ($data->data as $item)
    {
        $a_tax_offices[$item->tax_office_id] = $item->name;
        $o_tax_offices[$item->tax_office_id] = $item;
    }
}

function load_education_levels(&$a_education_levels, &$o_education_levels)
{
    $a_education_levels = array();
    $o_education_levels = array();
    $data = loadData("/education_levels");
    foreach ($data->data as $item)
    {
        $a_education_levels[$item->education_level_id] = $item->name;
        $o_education_levels[$item->education_level_id] = $item;
    }
}

function load_states(&$a_states, &$o_states)
{
    $a_states = array();
    $o_states = array();
    $data = loadData("/states");
    foreach ($data->data as $item)
    {
        $a_states[$item->state_id] = $item->name;
        $o_states[$item->state_id] = $item;
    }
}

function load_implementation_entities(&$a_implementation_entities, &$o_implementation_entities)
{
    $a_implementation_entities = array();
    $o_implementation_entities = array();
    $data = loadData("/implementation_entities");
    foreach ($data->data as $item)
    {
        $a_implementation_entities[$item->implementation_entity_id] = $item->name;
        $o_implementation_entities[$item->implementation_entity_id] = $item;
    }
}


function load_categories(&$a_categories, &$o_categories)
{
    $a_categories = array();
    $o_categories = array();
    $data = loadData("/categories");
    foreach ($data->data as $item)
    {
        $a_categories[$item->category_id] = $item->name;
        $o_categories[$item->category_id] = $item;
    }
}













function isJson($string) {
  json_decode($string);
  return (json_last_error() == JSON_ERROR_NONE);
}

function EmptyStringOnNull($arg)
{
    if (is_null($arg)) {
        $arg = "";
    }
    
    return $arg;
}

function IsNullOrEmptyString($question){
    return (!isset($question) || trim($question)==='');
}

function getIDFromValuesArray($value, $array)
{
    foreach ($array as $id => $arr)
    {
        if ($arr["Name"] == $value)
        {
            return $id;
        }
    }
    
    return false;
}

function humanTiming($time)
{
    $value = "";
    
    $diff = time()-$time;
    $daysDiff = floor($diff/60/60/24);
    if ($daysDiff) $value .= $daysDiff.' '.($daysDiff > 1 ? 'Ημέρες' :'Ημέρα');
    
    $diff -= $daysDiff*60*60*24;
    $hrsDiff = floor($diff/60/60);
    if ($hrsDiff) $value .= ($value ? ', ': '').$hrsDiff.' '.($hrsDiff > 1 ? 'ώρες' :'ώρα');

    $diff -= $hrsDiff*60*60;
    $minsDiff = floor($diff/60);
    if ($minsDiff) $value .= ($value ? ', ': '').$minsDiff.' '.($minsDiff > 1 ? 'λεπτά' :'λεπτό');

    $diff -= $minsDiff*60;
    $secsDiff = $diff;
    if ($secsDiff) $value .= ($value ? ' and ': '').$secsDiff.' '.($secsDiff > 1 ? 'δευτερόλεπτα' :'δευτερόλεπτο');
    
    if (!$value) $value = '0 δευτερόλεπτα';
    
    return $value;
}
     
?>
