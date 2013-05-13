<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="/VehiculeController/addVehicule" method="post" name="add_vehicule">
            Marque : <input type="text" name="marque" id="marque"><br>
            Modèle : <input type="text" name="modele" id="modele"><br>
            Année : <input type="text" name="annee" id="annee"><br>
            <input type="submit" value="valider"> <input type="reset" value="annuler">
        </form>
    </body>
</html>