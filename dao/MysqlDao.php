<?php

namespace dao;

use \PDO;
use entity\Personne;
use entity\Voiture;

class MysqlDao {

    private $dbh;

    public function __construct() {
        $this->dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllPersonnes() {
        $sql = "SELECT p.id id_personne, p.nom, p.prenom, p.naissance, v.id id_voiture,
            v.marque, v.modele, v.annee FROM personne p JOIN voiture v on 
            p.fk_voiture = v.id";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $result = array();
        $voitures = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id_personne'];
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $naissance = $row['naissance'];
            $idVoiture = $row['id_voiture'];
            $marque = $row['marque'];
            $modele = $row['modele'];
            $annee = $row['annee'];
            if (array_key_exists($idVoiture, $voitures)) {
                $voiture = $voitures[$idVoiture];
            } else {
                $voiture = new Voiture($idVoiture, $marque, $modele, $annee);
                $voitures[$idVoiture] = $voiture;
            }
            $pers = new Personne($id, $nom, $prenom, $naissance, $voiture);
            $result[] = $pers;
        }
        return $result;
    }

    public function getVoitureById($id) {
        $sql = "SELECT * FROM voiture where id=:id";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $marque = $row['marque'];
        $modele = $row['modele'];
        $annee = $row['annee'];

//        $stmt->bindColumn(1, $id);
//        $stmt->bindColumn(2, $marque);
//        $stmt->bindColumn(3, $modele);
//        $stmt->bindColumn(4, $annee);
//        $stmt->fetch(PDO::FETCH_BOUND);
        $voiture = new Voiture($id, $marque, $modele, $annee);
        return $voiture;
    }
    
    public function getAllVoitures(){
        $sql = "SELECT * FROM voiture";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        $voitures = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $marque = $row['marque'];
            $modele = $row['modele'];
            $annee = $row['annee'];
            $voiture = new Voiture($id, $marque, $modele, $annee);
            $voitures[] = $voiture;
        }
        return $voitures;
   }
}

?>
