<?php
include '../setup.php';

use entity\Voiture;

session_start();

$voiture = $_SESSION['voiture'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <section>
            Id : <?php echo $voiture->getId() ?><br>
            Marque : <?php echo $voiture->getMarque() ?><br>
            Modèle : <?php echo $voiture->getModele() ?><br>
            Année : <?php echo $voiture->getAnnee() ?><br>
        </section>
    </body>
</html>
