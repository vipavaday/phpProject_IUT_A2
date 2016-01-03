<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/view/commonFunctions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/view/classes/CharacterFormView.php';

outputEnTeteHTML5('Saisie d\'un personnage','UTF-8','/view/classes/style.css');

echo CharacterFormView::getFormErrorsHtml('/controller/recieveCharacter.php',$character,$dataErrors);

outputFinFichierHTML5();

?>