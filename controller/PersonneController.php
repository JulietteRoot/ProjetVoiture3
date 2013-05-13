<?php
namespace controller;

use dao\MysqlDao;

class PersonneController{
    public function action(){
        $dao = new MysqlDao();
        $personnes = $dao->getAllPersonnes();
        include VIEW."display_personnes.php"; // le setup sera inclus dans l'index
    }
}
?>
