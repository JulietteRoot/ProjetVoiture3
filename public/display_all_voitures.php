<?php
use entity\Voiture; // non obligatoire, informatif.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <section>
            <table>
                <tr><th>Id</th><th>Marque</th><th>Modèle</th><th>Année</th></tr>
                <?php foreach($voitures as $voiture) : ?>
                    <tr>
                        <td>Id : <?php echo $voiture->getId() ?></td>
                        <td>Marque : <?php echo $voiture->getMarque() ?></td>
                        <td>Modèle : <?php echo $voiture->getModele() ?></td>
                        <td>Année : <?php echo $voiture->getAnnee() ?></td>
                    </tr>
            <?php endforeach; ?>
            </table>
        </section>
    </body>
</html>
