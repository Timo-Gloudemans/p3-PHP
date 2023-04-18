<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Voer een getal in: <input type="text" name="getal">
    <input type="submit" name="submit" value="Bereken">
</form>

<?php
if(isset($_POST['submit'])) {
    $getal = $_POST['getal'];
    $som = 1;
    for($i = 1; $i <= $getal; $i++) {
        $som *= $i;
    }
    echo "De som van 1 tot en met " . $getal . " is: " . $som;
}
?>


</body>
</html>