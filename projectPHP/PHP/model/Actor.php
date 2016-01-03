<?php

class Actor {
    
    private $nom;
    private $prenom;
    private $dateDeNaissance;
    private $personnage;
    private $biographie;
    
    public function getNom() { return $this->nom;}
    public function setNom($nom) {
        global $regEx_FR_LANG;
        if(!isValidString($nom,$regEx_FR_LANG,0,100)){
            throw new Exception("Erreur, le nom doit comporter entre 0 et 100 caractères alphabétiques");
        }
        $this->nom = empty($nom) ? "" : $nom;
    }

    public function getPrenom() { return $this->prenom;}
    public function setPrenom($prenom) {
        global $regEx_FR_LANG;
        if(!isValidString($prenom,$regEx_FR_LANG,2,100)){
            throw new Exception("Erreur, le prénom doit comporter entre 2 et 100 caractères alphabétiques");
        }
        $this->prenom = empty($prenom) ? "" : $prenom;
    }

    public function getDateDeNaissance() { return $this->dateDeNaissance;}
    public function setDateDeNaissance($dateDeNaissance) {
        global $regEx_DATE;
        if(!isValidString($dateDeNaissance,$regEx_DATE,10,10)){
            throw new Exception("Erreur, la date de naissance doit être au format <jj/mm/aaaa>.");
        }
        $this->dateDeNaissance = empty($dateDeNaissance) ? "" : $dateDeNaissance;
    }

    public function getPersonnage() { return $this->personnage;}
    public function setPersonnage($personnage) {
        $this->personnage=$personnage;
    }

    public function getBiographie() { return $this->biographie;}
    public function setBiographie($biographie) {
        global $regEx_FR_LANG;
        if(!isValidString($biographie,$regEx_FR_LANG,0,500)){
            throw new Exception("Erreur, la biographie doit comporter entre 0 et 500 caractères alpha-numériques");
        }
        $this->biographie = empty($biographie) ? "" : $biographie;
    }

    public function __construct($nom, $prenom,$dateDeNaissance, $personnage, $biographie) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setDateDeNaissance($dateDeNaissance);
        $this->setPersonnage($personnage);
        $this->setBiographie($biographie);
    }

}

?>