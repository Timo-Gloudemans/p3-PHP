<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    Leeftijd: <input type="text" name="leeftijd"><br>
    Stempas ontvangen: <input type="radio" name="stempas" value="ja"> Ja 
                       <input type="radio" name="stempas" value="nee"> Nee<br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
    if (isset($_POST['submit'])) {
      $leeftijd = $_POST['leeftijd'];
      $stempas = $_POST['stempas'];

      if ($leeftijd >= 16 && $stempas == "ja") {
        echo "Je mag je scooterrijbewijs halen.<br>";
      } else {
        echo "Je mag nog geen scooterrijbewijs halen.<br>";
      }

      if ($leeftijd >= 18) {
        if ($stempas == "ja") {
          echo "Je mag stemmen.<br>";
        } else {
          echo "Je mag niet stemmen omdat je je stempas nog niet hebt ontvangen.<br>";
        }
      } else {
        echo "Je mag nog niet stemmen omdat je nog geen 18 jaar bent.<br>";
      }

    }
  ?>
</body>
</html>