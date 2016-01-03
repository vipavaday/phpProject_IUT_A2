<?php

require_once $_SERVER['DOCUMENT_ROOT']."/view/commonfunctions.php";
outputEnTeteHTML5("Personnages", $charset,"/view/classes/style.css");
?>

<h1>Personnages</h1>

<a href="/view/CharacterDefaultFormView.php">Ajouter</a>
<?php
outputFinFichierHTML5();
?>