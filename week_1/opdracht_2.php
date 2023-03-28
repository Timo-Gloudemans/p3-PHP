<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 2</title>
</head>
<body>
<form method="POST" action="">
    <label for="zijde1">Zijde 1:</label>
    <input type="number" name="kant1" id="kant1" required><br><br>
    <label for="zijde2">Zijde 2:</label>
    <input type="number" name="kant2" id="kant2" required><br><br>
    <label for="zijde3">Zijde 3:</label>
    <input type="number" name="kant3" id="kant3" required><br><br>
    <input type="submit" value="Controleer driehoek">
</form>

<?php

       if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {

       $kant1 = $_POST["kant1"];
       $kant2 = $_POST["kant2"];
       $kant3 = $_POST["kant3"];


        if (($zijde1 + $zijde2 > $zijde3) && ($zijde1 + $zijde3 > $zijde2) && ($zijde2 + $zijde3 > $zijde1)) {
        echo "<p>Deze zijden vormen een driehoek.</p>";
        } else {
        echo "<p>Deze zijden vormen geen driehoek.</p>";
        }
    }
?>
</body>
</html>