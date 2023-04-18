<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Naam: <?php echo $_POST['naam']; ?></li>
        <li>Geslacht: <?php echo $_POST['geslacht']; ?></li>
        <li>Adres: <?php echo $_POST['adres']; ?></li>
        <li>Stad: <?php echo $_POST['stad']; ?></li>
        <li>Land: <?php echo $_POST['land']; ?></li>
        <li>E-mail: <?php echo $_POST['email']; ?></li>
        <li>Wachtwoord: <?php echo $_POST['wachtwoord']; ?></li>
    </ul>
    <form method="post" action="opslaan.php">

</body>
</html>
