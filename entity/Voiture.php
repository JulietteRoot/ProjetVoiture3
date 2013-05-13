<?php

namespace entity;

class Voiture {

    private $id;
    private $marque;
    private $modele;
    private $annee;

    function __construct($id, $marque, $modele, $annee) {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function __toString() {
        return "$this->id $this->marque $this->modele $this->annee";
    }

}

?>
