<?php


require_once $_SERVER['DOCUMENT_ROOT']."/controller/UserFactory.php"; 
require $_SERVER['DOCUMENT_ROOT']."/controller/retrieveUserInputs.php";
require $_SERVER['DOCUMENT_ROOT']."/controller/userValidation.php";

$user = UserFactory::getUser($dataErrors,$nom,$prenom,$pseudo,$email,$motDePasse,$confirmationMotDePasse,$dateDeNaissance,$nationalite);

if(empty($dataErrors)){
    require $_SERVER['DOCUMENT_ROOT']."/view/userNormalView.php";
}else{
    require $_SERVER['DOCUMENT_ROOT'].'/view/userErrorView.php';
}

?>