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
        
    }
}

