<?php

require_once $_SERVER['DOCUMENT_ROOT']."/controller/CharacterFactory.php";
require $_SERVER['DOCUMENT_ROOT']."/controller/retrieveCharacterInputs.php";
require $_SERVER['DOCUMENT_ROOT']."/controller/characterValidation.php";

$character = CharacterFactory::getCharacter($dataErrors,$nom,$prenom,$titre,$pays,$description,$armoiries,$portrait);

if(empty($dataErrors)){
    require $_SERVER['DOCUMENT_ROOT']."/view/characterNormalView.php";
}else{
    require $_SERVER['DOCUMENT_ROOT'].'/view/characterErrorView.php';
}

?>