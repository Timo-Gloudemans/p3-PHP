<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST">
    <label for="remspoor">Lengte:</label>
    <input for="number" name="remspoor" id="remspoor" required>
    <input type="submit" name="submit" value="Berekenen">
 
<?php 

if(isset($_POST['submit']))
{

$remspoor = $_POST['remspoor'];
$vertraging = 5.5;

$speed = round(sqrt(2 * $vertraging * $remspoor) * 3.6,0);
echo"<br>";
echo"Snelheid van een auto met een remspoor van $remspoor meter is: " .$speed ."km/h";
}





?>
</body>
</html>