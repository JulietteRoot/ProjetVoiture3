<?php

namespace entity;

use entity\Voiture;

class Personne {

    private $id;
    private $nom;
    private $prenom;
    private $naissance;
    private $voiture;

    function __construct($id, $nom, $prenom, $naissance, Voiture $voiture) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = $naissance;
        $this->voiture = $voiture;
    }
    
   

        public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getNaissance() {
        return $this->naissance;
    }

    public function setNaissance($naissance) {
        $this->naissance = $naissance;
    }

    public function getVoiture() {
        return $this->voiture;
    }

    public function setVoiture(Voiture $voiture) {
        $this->voiture = $voiture;
    }

    public function __toString() {
        return "$this->id $this->nom $this->prenom $this->naissance $this->voiture";
    }

}

?>
