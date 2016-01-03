<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/view/commonFunctions.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/view/classes/SignUpFormView.php';

outputEnTeteHTML5('Création d\'un compte','UTF-8','/view/classes/style.css');

echo SignUpFormView::getFormErrorsHtml('/controller/recieveUser.php',$user,$dataErrors);

outputFinFichierHTML5();

?>