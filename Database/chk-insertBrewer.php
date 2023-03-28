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
    function test_input($datatest)
    {
        $datatest = ltrim($datatest);
        $datatest = rtrim($datatest);
        $datatest = stripslashes($datatest);
        $datatest = htmlspecialchars($datatest);
        return $datatest;    
    }

    if (! isset($_POST["voegtoe"]))
    {
        echo "<h2>U bent niet op de juiste manier hier gekomen</h2>";
        header('refresh:5; url=frm-insertBrewer.php');
        exit();
    }

    require "contectbieren.php";

    $brewid = test_input($_POST["brewid"]);
    $brewname = test_input($_POST["brewname"]);
    $brewcountry = test_input($_POST["brewcountry"]);

    try
    {
        $chkBrewNr = $db->prepare("SELECT brouwcode
        FROM brouwer
        Where brouwcode = :brewid");
        $chkBrewNr->bindValue("brewid",$brewid);
        $chkBrewNr->execute();
    }

    catch(PDOExpection $e)
    {
        $sMsg = '<p>
        Regelnummer: '.$e->getLine(). '<br />
        Bestand: ' .$e->getFile() '<br /> 
        Foutmelding: '.$e->getMessage().'
        </p>';

        trigger_error($sMsg);

        die("Fout bij verbinden met database: ".$e->getMessage());

    }


    if ($chkBrewNr->RowCount()>0)
    {
        $maxBrewNr = $db->prepare("SELECT MAX(brouwcode) AS  'Maxnr' FROM brouwer");
        $maxBrewNr ->execute();

        $result=$maxBrewNr->fetch(PDO::FETCH_ASSOC);
        $maxNr = $result["Maxnr"] + 1;

        echo "<h2>Het opgegeven brouwernummer komt al voor!!</h2>";
        echo "<p>Probeer eens met $maxNr of hoger</p>";
        header('refresh:5; url=frm-insertBrewer.php');
        exit();
    }

    try 
    {
        $chkBrewNm = $db->prepare("SELECT naam
        From brouwer
        Where brouwer.naam = :brewname");
        $chkBrewNm->bindValue("brewname", $brewname);
        $chkBrewNm->execute();

        if (chkBrewNm->RowCount()>0)
        {
            echo "<h2>De opgegeven brouwernaam komt al voor!!</h2>";
            header('refresh:5; url=frm-insertBrewer.php');
            exit();
        }
    }
    catch(PDOException $e)
    {
        die("Fout bij verbinden met database: ".$e->getMessage());
    }

    if (strlen($brewcountry)>4);
    {
        echo "<h2>Het opgegeven land heeft meer dan 4 tekens!!</h2>";
        header('refresh:5; url=frm-insertBrewer.php');
        exit();
    }

    ?>

    <h2>Controleer de gegevens van de nieuwe  brouwer</h2>
    <p>Druk op de knop &quot;Bevestig&quot; als u akkord bent.</p>
    <form action="cnfrm-insertBrewer.php" method="POST">
        <input type="number" name="brewid" value="<?php echo $brewid ; ?>" readonly>
        <input type="text" name="brewname" value="<?php echo $brewname ; ?>" readonly>
        <input type="text" name="brewcountry" value="<?php echo $brewcountry ; ?>" readonly>
        <button type="submit" name="cnfrm-brew">Bevestig</button>
        <button type="submit" name="reset-brew">Annuleren</button>
    </form>

</body>
</html>