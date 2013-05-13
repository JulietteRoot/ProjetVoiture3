<?php
namespace controller;

use dao\MysqlDao;

// même nom que le fichier
class VehiculeController{

    public function action(){
        $idVoiture = $_GET['id'];
        if(preg_match("/^[0-9]+$/", $idVoiture)){ // les "/" délimitent l'expression régulière (en PHP et Javascript notamment)
            $dao = new MysqlDao();
            $voiture = $dao->getVoitureById($idVoiture);
            include VIEW.'display_voiture.php';
        } else {
            throw new Exception(); // renvoie une exception si ça se passe mal
            // théoriquement on aurait un log et on traiterait cette erreur
        }
    }   
} 
?>
