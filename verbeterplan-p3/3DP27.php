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
    $fullQuery = $db->prepare("SELECT landherkomst, AVG(duur) AS duur
    FROM film
    GROUP BY landherkomst;");
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
            <th>Duur</th>
            <th>landherkomst</th>
        </thead>
    <tbody>
        <?php
        foreach($result as $rij)
        {
            echo "<tr><td>" . $rij["duur"] ."</td>";
            echo "<td>" .$rij["landherkomst"] ."</td></tr>";
        }
        ?>
          </tbody>
    </table>
    <?php
    }
    ?>

    


</body>
</html>