<?php

require_once $_SERVER['DOCUMENT_ROOT']."/view/commonFunctions.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/classes/CharacterView.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/classes/CharacterFormView.php";

outputEnTeteHTML5("Le personnage a bien été saisi","UTF-8","/view/classes/style.css");
echo CharacterView::getHtmlDevelopped($character);
require_once $_SERVER['DOCUMENT_ROOT']."/persistance/addCharacterDB.php";
//echo CharacterFormView::getHiddenFormHTML('/controller/recieveModifiedCharacter.php',$character,"Modifier");

outputFinFichierHTML5();

?>