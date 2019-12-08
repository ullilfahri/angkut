<!DOCTYPE html>
<html>
<body>

<h2>Hitung Jarak</h2>


<form method="GET">
First name:<br>
<input type="text" name="dari"> <?php echo $_GET["dari"] ?>
<br>
Last name:<br>
<input type="text" name="ke"> <?php echo $_GET["ke"] ?>
<br><br>
<input type="submit">
</form>

</body>
</html>



<?php
error_reporting(0) ;

$dari = $_GET["dari"] ;
$ke = $_GET["ke"] ;



$json = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?origin='.$dari.'&destination='.$ke.'&key=AIzaSyCHYF333AldGKP8pkcpTiy9EWnQZnFqsf8');

$data = json_decode($json,true);

$jarak = $data['routes'][0]['legs']['0']['distance']['text'] ;

echo "<pre>";

//print_r($jarak);

$json = json_encode($jarak) ;

echo $json ;
exit;

?>