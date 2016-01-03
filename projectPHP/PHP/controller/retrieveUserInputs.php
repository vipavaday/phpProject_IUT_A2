<?php

$nom="";
if(isset($_POST['nomUtilisateur'])){
    $nom = htmlentities($_POST['nomUtilisateur'],ENT_QUOTES,'UTF-8'); 
}
$prenom="";
if(isset($_POST['prenomUtilisateur'])){
    $prenom =  htmlentities($_POST['prenomUtilisateur'],ENT_QUOTES,'UTF-8');
}
$pseudo="";
if(isset($_POST['pseudoUtilisateur'])){    
    $pseudo =  htmlentities($_POST['pseudoUtilisateur'],ENT_QUOTES,'UTF-8');
}
$email="";
if(isset($_POST['emailUtilisateur'])){
    $email =  htmlentities($_POST['emailUtilisateur'],ENT_QUOTES,'UTF-8');
}

$motDePasse="";
if(isset($_POST['motDePasseUtilisateur'])){
    $motDePasse =  htmlentities($_POST['motDePasseUtilisateur'],ENT_QUOTES,'UTF-8');
}

$confirmationMotDePasse="";
if(isset($_POST['confirmationMdpUtilisateur'])){
    $confirmationMotDePasse =  htmlentities($_POST['confirmationMdpUtilisateur'],ENT_QUOTES,'UTF-8');
}

$dateDeNaissance="";
if(isset($_POST['dateDeNaissanceUtilisateur'])){
    $dateDeNaissance =  htmlentities($_POST['dateDeNaissanceUtilisateur'],ENT_QUOTES,'UTF-8');
}

$nationalite="";
if(isset($_POST['nationaliteUtilisateur'])){
    $nationalite =  htmlentities($_POST['nationaliteUtilisateur'],ENT_QUOTES,'UTF-8');
}

?>

