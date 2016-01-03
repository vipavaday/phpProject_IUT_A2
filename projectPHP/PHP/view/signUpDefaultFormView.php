<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/view/commonFunctions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/view/classes/SignUpFormView.php';

outputEnTeteHTML5('Inscription','UTF-8',"/view/classes/style.css");
echo SignUpFormView::getDefaultFormHTML('/controller/recieveUser.php');

outputFinFichierHTML5();

?>