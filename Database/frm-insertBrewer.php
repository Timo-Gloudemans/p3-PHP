<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Geef de gegevens van de nieuwe brouwer op</h2>
    <form action="chk-insertBrewer.php" method="POST">
        <fieldset>
            <legend>ID-nummer brouwer:</legend>
            <input type="number" name="brewid" required>
        </fieldset>
        <fieldset>
            <legend>Naam van de nieuwe brouwer:</legend>
            <input type="text" name="brewname" required>
        </fieldset>
        <fieldset>
            <legend>Land van de nieuwe brouwer:</legend>
            <input type="text" name="brewcountry" required>
        </fieldset>
        <button type="submit" name="voegtoe">Voeg toe</button>        
    </form>
</body>
</html>