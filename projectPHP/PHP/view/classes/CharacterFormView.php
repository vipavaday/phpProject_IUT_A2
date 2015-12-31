<?php

require_once dirname(__FILE__)."/model/Character.php";
require_once dirname(__FILE__)."FormManager.php";

class CharacterFormView{
    
    public static function getDefaultFormHTML($action){
        return self::getFormHTML($action, Character::getDefaultCharacter);
    }
    
    public static function getFormHtml($action,$character){
        $htmlCode = FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addTextInput("Nom","nomPersonnage","nomPersonnage",30,  html_entity_decode($character->getNom(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= FormManager::addTextInput("Prenom","prenomPersonnage","prenomPersonnage",30,  html_entity_decode($character->getPrenom(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= FormManager::addTextInput("Nom","nomPersonnage","nomPersonnage",30,  html_entity_decode($character->getNom(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= FormManager::addSubmitButton("Envoyer","class=\"sansLabel\"")."<br/>";
        $htmlCode .= FormManager::endForm();
        return $htmlCode;
    }
    
    private static function addErrorMsg ( $dataErrors , $fieldName ) {
        if(!empty($dataErrors[$fieldName])){
            $htmlCode .= "<span class=\"errorMsg\">".$dataErrors[$fieldName]."</span><br/>";
        }
        return $htmlCode;
    }
    
    public static function getFormErrorsHtml($action,$character,&$dataErrors){
        
        $htmlCode = FormManager::beginForm("post", $action);
        $htmlCode .= self::addErrorMsg($dataErrors,"nom");
        $htmlCode .= FormManager::addTextInput("Nom","nomPersonnage","nomPersonnage",50,  html_entity_decode($character->getNom(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= self::addErrorMsg($dataErrors,"prénom");
        $htmlCode .= FormManager::addTextInput("Prénom","prénomPersonnage","prénomPersonnage",50,  html_entity_decode($character->getPrenom(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= self::addErrorMsg($dataErrors,"titre");
        $htmlCode .= FormManager::addTextInput("Titre","titrePersonnage","titrePersonnage",50,  html_entity_decode($character->getTitre(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= self::addErrorMsg($dataErrors,"pays");
        $htmlCode .= FormManager::addTextInput("Pays","paysPersonnage","paysPersonnage",50,  html_entity_decode($character->getPays(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= self::addErrorMsg($dataErrors,"description");
        $htmlCode .= FormManager::addTextInput("Description","descriptionPersonnage","descriptionPersonnage",50,  html_entity_decode($character->getDescription(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= self::addErrorMsg($dataErrors,"armoirie");
        $htmlCode .= FormManager::addTextInput("Armoirie","armoiriePersonnage","armoiriePersonnage",50,  html_entity_decode($character->getArmoirie(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= self::addErrorMsg($dataErrors,"portrait");
        $htmlCode .= FormManager::addTextInput("Portrait","portraitPersonnage","portraitPersonnage",50,  html_entity_decode($character->getPortrait(),ENT_QUOTES,"UTF-8"))."<br/>";
        $htmlCode .= FormManager::endForm();
        
        return $htmlCode;
        
    }
    
    public static function getHiddenFormHtml($action,$character,$buttontext){
        $htmlCode =  FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addHiddenInput("nom","nomPersonnage",  html_entity_decode($character->getNom(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("prénom","prénomPersonnage",  html_entity_decode($character->getPrenom(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("titre","titrePersonnage",  html_entity_decode($character->getTitre(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("Pays","paysPersonnage",  html_entity_decode($character->getPays(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("description","descriptionPersonnage",  html_entity_decode($character->getDescription(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("armoirie","armoiriePersonnage",  html_entity_decode($character->getArmoirie(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("portrait","portraitPersonnage",  html_entity_decode($character->getPortrait(),ENT_QUOTES,"UTF-8"));
        
        $htmlCode .= FormManager::addSubmitButton($buttontext,"class=\"sansLabel\"");
        $htmlCode .= FormManager::endForm();
        
        return $htmlCode;
    }
}

