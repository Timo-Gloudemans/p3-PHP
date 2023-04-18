<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="verwerking.php">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required>
     
        <label for="geslacht">Geslacht:</label>
        <input type="radio" id="man" name="geslacht" value="Man" required>
        <label for="man">Man</label>
        <input type="radio" id="vrouw" name="geslacht" value="Vrouw" required>
        <label for="vrouw">Vrouw</label>
        <input type="radio" id="onbekend" name="geslacht" value="Onbekend" required>
        <label for="onbekend">Onbekend</label>
        

        <label for="adres">Adres:</label>
        <input type="text" id="adres" name="adres" required>
        

        <label for="stad">Stad:</label>
        <input type="text" id="stad" name="stad" required>
        

        <label for="land">Land:</label>
        <select id="land" name="land" required>
            <option value="Nederland">Nederland</option>
            <option value="België">België</option>
            <option value="Spanje">Spanje</option>
            <option value="Verenigde Staten">Verenigde Staten</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Vietnam">Vietnam</option>
        </select>
        

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>
      

        <input type="submit" value="Verzenden">
    </form>


</body>
</html>