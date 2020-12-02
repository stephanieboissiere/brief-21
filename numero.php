<?php

$nbreDes = $_POST ["nombre-des"] ?? false;
$faceDes = $_POST ["face-des"] ?? false;

$nbreDes = 1;   
while ($nbreDes <= 4){

if  ($faceDes ==6) {
    echo random_int (1,6);          
}

elseif ($faceDes ==8) {
    echo random_int (1,8);
}


elseif ($faceDes ==10) {
    echo random_int (1,10);
}


elseif ($faceDes ==12) {
    echo random_int (1,12);
}
echo $nbreDes++; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <main>
    <p>Voici le réslutat de votre lancé </p>
      <li>Nombre de Dés : <?php echo $nbreDes; ?></li>
      <li>Nombre de face : <?php echo $faceDes; ?></li>
  </main>
  <input type="submit" value="Relancer"> 
  <input type="submit" value="Retour"> 
</body>
</html>