<?php

$nom =  filter_var($nom,FILTER_SANITIZE_STRING);
$prenom = filter_var($prenom,FILTER_SANITIZE_STRING);
$pseudo = filter_var($pseudo,FILTER_SANITIZE_STRING);
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
$motDePasse = filter_var($motDePasse,FILTER_SANITIZE_STRING);
$confirmationMotDePasse = filter_var($confirmationMotDePasse ,FILTER_SANITIZE_STRING);
$dateDeNaissance = filter_var($dateDeNaissance,FILTER_SANITIZE_STRING);
$nationalite = filter_var($nationalite,FILTER_SANITIZE_STRING);

?>