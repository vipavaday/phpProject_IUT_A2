<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/controller/CharacterFactory.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/controller/retrieveCharacterInputs.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/controller/characterValidation.php';

$character = CharacterFactory::getCharacter($dataErrors,$nom,$prenom,$titre,$pays,$description,$armoiries,$portrait);
//print_r($character);
require_once $_SERVER['DOCUMENT_ROOT'].'/view/characterErrorView.php';


?>