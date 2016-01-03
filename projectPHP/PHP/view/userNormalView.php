<?php

require_once $_SERVER['DOCUMENT_ROOT']."/view/commonFunctions.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/classes/SignUpView.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/classes/SignUpFormView.php";

require_once $_SERVER['DOCUMENT_ROOT']."/persistance/addUserDB.php";

outputEnTeteHTML5("Utilisateur créé","UTF-8","/view/classes/style.css");
echo SignUpView::getHtmlDevelopped($user,$res);
outputFinFichierHTML5();

?>

