<?php

require_once (dirname(__FILE__).'/classes/CharacterFactory.php');
require_once ('retrieveInputs.php');
require_once ('characterValidation.php');

$character = CharacterFactory::getCharacter($dataErrors,$nom,$prenom,$titre,$pays,$description,$armoiries,$portrait);

require_once (dirname(__FILE__).'/CharacterErrorView.php');


