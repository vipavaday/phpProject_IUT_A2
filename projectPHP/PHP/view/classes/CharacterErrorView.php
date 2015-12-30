<?php

require_once (dirname(__FILE__).'controller/commonFunctions.php');
require_once (dirname(__FILE__).'controller/recieveCharacter.php');

outputEnTeteHTML5('Saisie d\'un personnage','UTF-8','style.css');

echo CharacterFormView::getFormErrorsHtml('recieveCharacter.php',$adresse,$dataErrors);

outputFinFichierHTML5();

