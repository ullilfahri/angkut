<!DOCTYPE html>
<html>
<body>

<h2>Hitung Jarak</h2>


<form method="GET">
First name:<br>
<input type="text" name="dari"> 
<br>
Last name:<br>
<input type="text" name="ke"> 
<input type="submit">
</form>

</body>
</html>



<?php
error_reporting(0) ;

$dari = $_GET["dari"] ;
$ke = $_GET["ke"] ;

// dari
$json1 = file_get_contents('https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=jl%20s%20parman&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry&key=AIzaSyCHYF333AldGKP8pkcpTiy9EWnQZnFqsf8');

$data1 = json_decode($json1,true);

$jarak1 = $data1['candidates'][0]['formatted_address'] ;

echo "<pre>";

print_r($jarak1);

echo "<br>" ;
/////////////////////////////
////////ke ////////////////
$json2 = file_get_contents('https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=gg%20jeruk&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry&key=AIzaSyCHYF333AldGKP8pkcpTiy9EWnQZnFqsf8');

$data2 = json_decode($json2,true);

$jarak2 = $data2['candidates'][0]['formatted_address'] ;

echo "<pre>";

print_r($jarak2);

echo "<br>" ;


/////////////ini menghitung jarak 
$json = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?origin='.$jarak_dari_asli.'&destination='.$jarak_ke_asli.'&key=AIzaSyCHYF333AldGKP8pkcpTiy9EWnQZnFqsf8');

$data = json_decode($json,true);

$jarak = $data['routes'][0]['legs']['0']['distance']['text'] ;

echo "<pre>";
////////////////



//$json = json_encode($jarak) ;



//echo $json ;
exit;





?>