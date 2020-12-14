<?php
$dateDebut = "2016/05/16";
$dateFin = "today";

$dureeSejour = (strtotime($dateFin) - strtotime($dateDebut));
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 5 Partie 9</title>
</head>

<body>
    <h1>Exercice 5 Partie 9</h1>
    <!--86400 car le résultat est en seconde, on le transforme en jour 60*60*24--->
    <p><?= number_format($dureeSejour / 86400) . ' jours se sont écoulés depuis le 16 mai 2016 à nos jours.' ?></p>
</body>

</html>