<?php 

session_id("userSession");
//session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/view/commonFunctions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/view/classes/CharacterFormView.php';

outputEnTeteHTML5('Saisie d\'un Personnage','UTF-8',"/view/classes/style.css");
echo CharacterFormView::getDefaultFormHTML('/controller/recieveCharacter.php');

outputFinFichierHTML5();

?>

