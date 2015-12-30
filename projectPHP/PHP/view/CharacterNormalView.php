<?php

require_once (dir(__FILE__)."/controller/commonfunctions.php");
require_once (dir(__FILE__)."/classes/CharacterView.php");
require_once (dir(__FILE__)."/controller/CharacterFormView.php");

outputEnTeteHTML5("Le personnage a bien été saisi","UTF-8","style.css");

echo CharacterView::getHtmlDevelopped($adresse);
echo CharacterFormView::getHiddenFormHTML('recieveModifiedCharacter.php',$character,"Modifier");

outputFinFichierHTML5();

