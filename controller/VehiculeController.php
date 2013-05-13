<?php
namespace controller;

use dao\MysqlDao;
use \Exception; // ATTENTION, penser à cette ligne

// même nom que le fichier
class VehiculeController{

    public function action(){
        //$idVoiture = $_GET['id'];
        //if(preg_match("/^[0-9]+$/", $idVoiture)){ // les "/" délimitent l'expression régulière (en PHP et Javascript notamment)
         if(isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){
            $dao = new MysqlDao();
            $voiture = $dao->getVoitureById($_GET['id']);
            include VIEW.'display_voiture.php';
        } else {
            throw new Exception(); // renvoie une exception si ça se passe mal
            // théoriquement on aurait un log et on traiterait cette erreur, dans notre appli ici on renverra seulement vers une page d'erreur.
        }
    }

    public function getAllVoitures(){
        $dao = new MysqlDao();
        $voitures = $dao->getAllVoitures();

        include VIEW . 'display_all_voitures.php';
    }
}
?>