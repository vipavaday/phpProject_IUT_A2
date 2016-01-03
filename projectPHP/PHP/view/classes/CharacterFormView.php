<?php

require_once $_SERVER['DOCUMENT_ROOT']."/model/Character.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/FormManager.php";

class CharacterFormView{
    
    public static function getDefaultFormHTML($action){
        return self::getFormHtml($action,Character::getDefaultCharacter());
    }
    
    public static function getFormHtml($action,$character){
        $htmlCode = FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addTextInput("Nom","nomPersonnage","nomPersonnage",30,html_entity_decode($character->getNom(),ENT_QUOTES,"UTF-8"),"maxlength=\"50\"")."<br/>";
        $htmlCode .= FormManager::addTextInput("Prenom","prenomPersonnage","prenomPersonnage",30,html_entity_decode($character->getPrenom(),ENT_QUOTES,"UTF-8"),"required","maxlength=\"50\"")."<br/>";
        $htmlCode .= FormManager::addTextInput("Titre","titrePersonnage","titrePersonnage",30,html_entity_decode($character->getTitre(),ENT_QUOTES,"UTF-8"),"maxlength=\"60\"")."<br/>";
        $htmlCode .= FormManager::addTextInput("Pays","paysPersonnage","paysPersonnage",30,html_entity_decode($character->getPays(),ENT_QUOTES,"UTF-8"),"maxlength=\"50\"")."<br/>";
        $htmlCode .= FormManager::addTextAreaInput("Description","descriptionPersonnage","descriptionPersonnage",10,30,html_entity_decode($character->getDescription(),ENT_QUOTES,"UTF-8"),"maxlength=\"350\"")."<br/>";
        $htmlCode .= FormManager::addTextInput("Armoirie","armoiriePersonnage","armoiriePersonnage",30,html_entity_decode($character->getArmoirie(),ENT_QUOTES,"UTF-8"),"maxlength=\"100\"")."<br/>";
        $htmlCode .= FormManager::addTextInput("Portrait","portraitPersonnage","portraitPersonnage",30,html_entity_decode($character->getPortrait(),ENT_QUOTES,"UTF-8"),"maxlength=\"100\"")."<br/>";
        $htmlCode .= FormManager::addSubmitButton("Envoyer","class=\"sansLabel\"")."<br/>";
        $htmlCode .= FormManager::endForm();
        
        return $htmlCode;
    }
    
    private static function addErrorMsg ( $dataErrors , $fieldName ) {
        if(!empty($dataErrors[$fieldName])){
           return $htmlCode .= "<br/><span class=\"errorMsg\">".$dataErrors[$fieldName]."</span>";
        }else{
           return $htmlCode."<br/>"; 
        }
    }
    
    public static function getFormErrorsHtml($action,$character,&$dataErrors){
        $htmlCode = FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addTextInput("Nom","nomPersonnage","nomPersonnage",50,  html_entity_decode($character->getNom(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"nom");
        $htmlCode .= FormManager::addTextInput("Prénom*","prenomPersonnage","prenomPersonnage",50,  html_entity_decode($character->getPrenom(),ENT_QUOTES,"UTF-8"),"required");
        $htmlCode .= self::addErrorMsg($dataErrors,"prenom");
        $htmlCode .= FormManager::addTextInput("Titre","titrePersonnage","titrePersonnage",50,  html_entity_decode($character->getTitre(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"titre");
        $htmlCode .= FormManager::addTextInput("Pays","paysPersonnage","paysPersonnage",50,  html_entity_decode($character->getPays(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"pays");
        $htmlCode .= FormManager::addTextInput("Description","descriptionPersonnage","descriptionPersonnage",50,  html_entity_decode($character->getDescription(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"description");
        $htmlCode .= FormManager::addTextInput("Armoirie","armoiriePersonnage","armoiriePersonnage",50,  html_entity_decode($character->getArmoirie(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"armoirie");
        $htmlCode .= FormManager::addTextInput("Portrait","portraitPersonnage","portraitPersonnage",50,  html_entity_decode($character->getPortrait(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"portrait");
        $htmlCode .= FormManager::addSubmitButton("Envoyer","class=\"sansLabel\"")."<br/>";
        $htmlCode .= FormManager::endForm();
        return $htmlCode;
        
    }
    
    public static function getHiddenFormHtml($action,$character,$buttontext){
        $htmlCode =  FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addHiddenInput("nomPersonnage","nomPersonnage",  html_entity_decode($character->getNom(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("prenomPersonnage","prenomPersonnage",  html_entity_decode($character->getPrenom(),ENT_QUOTES,"UTF-8"),"required");
        $htmlCode .= FormManager::addHiddenInput("titrePersonnage","titrePersonnage",  html_entity_decode($character->getTitre(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("paysPersonnage","paysPersonnage",  html_entity_decode($character->getPays(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("descriptionPersonnage","descriptionPersonnage",  html_entity_decode($character->getDescription(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("armoiriePersonnage","armoiriePersonnage",  html_entity_decode($character->getArmoirie(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("portraitPersonnage","portraitPersonnage",  html_entity_decode($character->getPortrait(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addSubmitButton($buttontext,"class=\"sansLabel\"");
        $htmlCode .= FormManager::endForm();
        
        return $htmlCode;
    }
}

?>
