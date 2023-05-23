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
require "connect3dplus.php";

try{
    $fullQuery = $db->prepare("SELECT voornaam, achternaam, datum
    FROM klant
    JOIN reservering ON klant.klantid = reservering.klantid
    WHERE YEAR(reservering.datum) = 2018;");
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
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Datum</th>
        </thead>
    <tbody>
        <?php
        foreach($result as $rij)
        {
            echo "<tr><td>" . $rij["voornaam"] ."</td>";
            echo "<td>" .$rij["achternaam"] ."</td>";
            echo "<td>" .$rij["datum"] ."</td></tr>";
        }
        ?>
          </tbody>
    </table>
    <?php
    }
    ?>

    


</body>
</html>