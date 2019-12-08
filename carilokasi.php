<?php
error_reporting(0) ;

$dari = $_GET["dari"] ;
$ke = $_GET["ke"] ;






$json = file_get_contents('https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=haji%20murni%20gg%20jeruk%201%20ketapang%20kalimantan%20barat&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry&key=AIzaSyCHYF333AldGKP8pkcpTiy9EWnQZnFqsf8');

$data = json_decode($json,true);

$jarak = $data['candidates'][0]['formatted_address'] ;

echo "<pre>";

print_r($jarak);

//$json = json_encode($jarak) ;

//echo $json ;
exit;

?>