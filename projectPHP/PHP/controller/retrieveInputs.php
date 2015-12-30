<?php

// À compléter

$nom="";
if(isset($_POST['nom'])){
    $nom = htmlentities($_POST['nom'],ENT_QUOTES,'UTF-8');
}
$prenom="";
if(isset($_POST['prenom'])){
    $prenom =  htmlentities($_POST['prenom'],ENT_QUOTES,'UTF-8');
}
$titre="";
if(isset($_POST['titre'])){
    $titre =  htmlentities($_POST['titre'],ENT_QUOTES,'UTF-8');
}
$pays="";
if(isset($_POST['pays'])){
    $pays =  htmlentities($_POST['pays'],ENT_QUOTES,'UTF-8');
}
$pays="";
if(isset($_POST['description'])){
    $description =  htmlentities($_POST['description'],ENT_QUOTES,'UTF-8');
}
$armoiries="";
if(isset($_POST['armoiries'])){
    $armoiries =  htmlentities($_POST['armoiries'],ENT_QUOTES,'UTF-8');
}
$portrait="";
if(isset($_POST['portrait'])){
    $portrait =  htmlentities($_POST['portrait'],ENT_QUOTES,'UTF-8');
}

