<?php 
use \DateTime;

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
                <tr><th>Id</th><th>Nom</th><th>Prénom</th><th>Naissance</th><th>Id voiture</th></tr>
                <?php foreach($personnes as $pers) :
                    $dt = new DateTime($pers->getNaissance());
                    ?>
                <tr>
                    <td><?php echo $pers->getId()?></td>
                    <td><?php echo htmlentities($pers->getNom(), ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?php echo $pers->getPrenom()?></td>
                    <td><?php echo $dt->format("d/m/Y")?></td>
                    <td><a href="/VehiculeController.php/action/<?php echo $pers->getVoiture()->getId()?>"><?php echo $pers->getVoiture()->getId()?></a></td>
                </tr>
                <?php endforeach; ?>
            </table>
            
            
            
        </section>
    </body>
</html>
