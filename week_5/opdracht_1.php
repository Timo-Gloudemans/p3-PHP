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
<label for="straal">Straal:</label>
<input type="number" name="straal" id="straal" required>
<input type="submit" name= "submitt" value="Berekenen">
</form>

<?php


if(isset($_POST['submitt']))
{
    $straal = $_POST['straal'];
    $pi = 3.14159;
    $op = $pi * $straal * $straal;

    $om = 2*$pi*$straal;

echo"De omtrek van een cirkel met straal $straal = ". $om . "<br>";
echo"De oppervlakte van een cirkel met straal $straal = ". $op;

}



?>


</body>
</html>