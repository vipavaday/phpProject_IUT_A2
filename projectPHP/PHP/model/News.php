<?php

class News {
    
    private $id;
    private $titre;
    private $date;
    private $libelle;
    private $contenu;
    
    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDate() {
        return $this->date;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getContenu() {
        return $this->contenu;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function __construct($id, $titre, $date, $libelle, $contenu) {
        $this->id = $id;
        $this->titre = $titre;
        $this->date = $date;
        $this->libelle = $libelle;
        $this->contenu = $contenu;
    }


}

?>