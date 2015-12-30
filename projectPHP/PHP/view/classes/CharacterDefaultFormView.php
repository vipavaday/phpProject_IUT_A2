<?php

require_once (dirname(__FILE__).'/controller/outputEnTeteHTML5.php');
require_once (dirname(__FILE__).'/view/CharacterFormView.php');

outputEnTeteHTML5('Saisie d\'un Personage','UTF-8',dirname(__FILE__).'/CSS/style.css');

echo CharacterFormView::getDefaultFormHTML('recieveCharacter.php');

outputFinFichierHTML5();
