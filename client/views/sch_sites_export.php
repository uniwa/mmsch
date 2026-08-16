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


// Allow the map front-end to read this from production, from staging, and
// from a developer's machine. The response carries no credentials and the
// data is public, so a local origin is a testing convenience rather than an
// exposure. Anything else gets the previous fixed header, unchanged.
$allowedOrigins = [
    'https://maps.sch.gr',
    'https://mmsch.uniwa.gr',
];
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($origin, $allowedOrigins, true) || preg_match('#^http://localhost(:\d+)?$#', $origin)) {
    header("Access-Control-Allow-Origin: $origin");
    header('Vary: Origin');
} else {
    header("Access-Control-Allow-Origin: https://maps.sch.gr");
}

// Output the response
header('Content-Type: application/json');
echo $response;
?>
