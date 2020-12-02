<?php

$nbreDes = $_POST ["nombre-des"] ?? false;
$faceDes = $_POST ["face-des"] ?? false;

if  ($faceDes ==6) {
    while ($nbreDes >= 1){
    echo ' Dé :';
        echo random_int (1,6);
        $nbreDes--;
    }
}

elseif ($faceDes ==8) {
   while ($nbreDes >= 1){
    echo ' Dé :';
      echo random_int (1,8);
       $nbreDes--;
;
 }
 
}

elseif ($faceDes ==10) {
    while ($nbreDes >= 1){  
        echo ' Dé :';
        echo random_int (1,10);
        $nbreDes--;
        
    }
}

elseif ($faceDes ==12) {
    while ($nbreDes >= 1){
        echo ' Dé :';
        echo random_int (1,12);
        $nbreDes--;
    }
 
}
$nbreDes = $_POST ["nombre-des"] ?? false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Voici le résultat de votre lancé </h2>
  <main>
      <li>Nombre de Dés : <?php echo $nbreDes; ?></li>
      <li>Nombre de face : <?php echo $faceDes; ?></li>
  </main> 
  <form method="post" action="resultat.php">
    <input name="nombre-des" type="hidden" value="<?php echo ($nbreDes);?>">
    <input name= "face-des" type="hidden" value="<?php echo ($faceDes);?>">
    <input type="submit" id="relancer" value="Relancer">
  </form>
  <a href="index.html"><input type="submit" id="retour" value="Retour"></a>
</body>
</html>