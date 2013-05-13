<?php

include '../setup.php';

use entity\Voiture;
use dao\MysqlDao;

session_start();

if (!isset($_GET['id']) || !preg_match("/^[1-9]$/", $_GET['id'])) {
    header("location:/ProjetVoiture2/public/error.php");
} else {
    $idVoiture = $_GET['id'];
    try {
        $dao = new MysqlDao();
        $voiture = $dao->getVoitureById($idVoiture);
        $_SESSION['voiture'] = $voiture;
        header("location:/ProjetVoiture2/public/display_voiture.php");
    } catch (PDOException $ex) {
        header("location:/ProjetVoiture2/public/error.php");
    }
}
?>
