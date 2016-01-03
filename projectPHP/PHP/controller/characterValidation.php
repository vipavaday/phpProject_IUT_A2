<?php

$nom =  filter_var($nom,FILTER_SANITIZE_STRING);
$prenom = filter_var($prenom,FILTER_SANITIZE_STRING);
$titre = filter_var($titre,FILTER_SANITIZE_STRING);
$pays = filter_var($pays,FILTER_SANITIZE_STRING);
$description = filter_var($description,FILTER_SANITIZE_STRING);
$armoiries = filter_var($armoiries,FILTER_SANITIZE_STRING);
$portrait = filter_var($portrait,FILTER_SANITIZE_STRING);

?>