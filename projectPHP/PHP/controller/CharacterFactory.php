<?php

require_once (dirname(__FILE__)."/Model/Character.php");

class CharacterFactory{
    
    
    public static function getCharacter(&$dataErrors,$nom,$prenom,$titre=null,$pays=null,$description=null,$armoirie=null,$portrait=null){
        
        $character = Personnage::getDefaultCharacter();
        $dataErrors=array();
        
        try{
            $character->setNom($nom);
        } catch (Exception $e) {
           $dataErrors ['nom']=$e->getMessage() ."<br/>\n";
        }
        try{
            $character->setPrenom($prenom);
        } catch (Exception $e) {
           $dataErrors ['prenom']=$e->getMessage() ."<br/>\n";
        }
        try{
            $character->setTitre($titre);
        } catch (Exception $e) {
           $dataErrors ['titre']=$e->getMessage() ."<br/>\n";
        }
        try{
            $character->setPays($pays);
        } catch (Exception $e) {
           $dataErrors ['pays']=$e->getMessage() ."<br/>\n";
        }
        try{
            $character->setDescription($description);
        } catch (Exception $e) {
           $dataErrors ['description']=$e->getMessage() ."<br/>\n";
        }
        try{
            $character->setArmoirie($armoirie);
        } catch (Exception $e) {
           $dataErrors ['armoirie']=$e->getMessage() ."<br/>\n";
        }
        try{
            $character->setPortrait($portrait);
        } catch (Exception $e) {
           $dataErrors ['portrait']=$e->getMessage() ."<br/>\n";
        }
        return $character;
    } 
}

