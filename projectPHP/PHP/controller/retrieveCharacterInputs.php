<?php

$nom="";
if(isset($_POST['nomPersonnage'])){
    $nom = htmlentities($_POST['nomPersonnage'],ENT_QUOTES,'UTF-8'); 
}
$prenom="";
if(isset($_POST['prenomPersonnage'])){
    $prenom =  htmlentities($_POST['prenomPersonnage'],ENT_QUOTES,'UTF-8');
}
$titre="";
if(isset($_POST['titrePersonnage'])){    
    $titre =  htmlentities($_POST['titrePersonnage'],ENT_QUOTES,'UTF-8');
}
$pays="";
if(isset($_POST['paysPersonnage'])){
    $pays =  htmlentities($_POST['paysPersonnage'],ENT_QUOTES,'UTF-8');
}

$description="";
if(isset($_POST['descriptionPersonnage'])){
    $description =  htmlentities($_POST['descriptionPersonnage'],ENT_QUOTES,'UTF-8');
}

$armoiries="";
if(isset($_POST['armoiriePersonnage'])){
    $armoiries =  htmlentities($_POST['armoiriePersonnage'],ENT_QUOTES,'UTF-8');
}
$portrait="";
if(isset($_POST['portraitPersonnage'])){
    $portrait =  htmlentities($_POST['portraitPersonnage'],ENT_QUOTES,'UTF-8');
}

?>