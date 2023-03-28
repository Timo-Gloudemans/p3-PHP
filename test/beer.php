<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>

<?php

if (! isset($_POST["zoekop"]))
{
    echo "<h2>U moet eerst het formulier invullen</h2>";
    header('refresh:5; url=frm-beer.php');
    die();
}

require "connectbeer.php";

$namebeer = filter_input(INPUT_POST, "namebeer", FILTER_SANITIZE_STRING). "%";

try{
    $fullQuery = $db->prepare("SELECT bier.naam, soort
    FROM bier
    WHERE bier LIKE 'A%' ");
    }
    catch(PDOExpection $e)
    {
        die("Fout bij verbinden met database: ".$e->getMessage());
    }
    
    $fullQuery->execute();


    if($fullQuery->RowCount()>0)
    {
        $result=$fullQuery->fetchAll(PDO::FETCH_ASSOC);
?>
    <table>
        <thead>
            <th>bier</th>
            <th>kroeg</th>
        </thead>
    <tbody>
        <?php
        foreach($result as $rij)
        {
            echo "<tr><td>" . $rij["bier"] ."</td>";
            echo "<td>" .$rij["kroeg"] ."</td></tr>";
        }
        ?>
    </tbody>
    </table>
    <?php
    }
    ?>

</body>
</html>