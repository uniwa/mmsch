<?php
$mm_id = $_GET['mm_id'];
$url = "https://www.sch.gr/sites/sch-units/export?mm_id=" . $mm_id;


//OLD VERSION
// Use file_get_contents to fetch the content
//$response = file_get_contents($url);
// Check if the request was successful
//if ($response === false) {
//    die('Error occurred!');
//}


//NEW VERSION
$context = stream_context_create([
    'http' => [
        'header' => "User-Agent: Mozilla/5.0\r\n"
    ]
]);

$response = file_get_contents($url, false, $context);

if ($response === false) {
    die('Error occurred!');
}


// Output the response
header("Access-Control-Allow-Origin: https://maps.sch.gr");
header('Content-Type: application/json');
echo $response;
?>
