<?php
include '../setup.php';
include ENTITY.'Voiture.php';
include ENTITY.'Personne.php';
include DAO.'MysqlDao.php';


use dao\MysqlDao;

$dao = new MysqlDao();
//$result = $dao->getAllPersonnes();
////var_dump($result);
//$sparrow = $result[0];
//$sparrow->getVoiture()->setAnnee(2012);
//foreach ($result as $pers) {
//    echo $pers.PHP_EOL;
//}

$voiture = $dao->getVoitureById(1);
var_dump($voiture);

?>
