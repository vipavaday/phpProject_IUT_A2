<?php
require_once(dirname(__FILE__).'Character.php');

class personnageView{
public static function getHTMLDevelopped($personnage){
    
        $htmlCode="";
        $htmlCode .="<strong>Personnage : </strong><br/>\n";
        
        $htmlCode .= $personnage-> getNom();
        if (!empty($personnage->getNom())) {$htmlCode .=", ";}

        $htmlCode .= $personnage-> getPrenom();
        if (!empty($personnage->getPrenom())) {$htmlCode .=", ";}

        $htmlCode .= $personnage-> getTitre();
        if (!empty($personnage->getTitre())) {$htmlCode .=", ";}

        $htmlCode .= $personnage-> getPays();
        if (!empty($personnage->getPays())) {$htmlCode .=", ";}

        $htmlCode .= $personnage-> getDescription();
        if (!empty($personnage->getDescription())) {$htmlCode .=", ";}

        $htmlCode .= $personnage-> getArmoirie();
        if (!empty($personnage->getArmoirie())) {$htmlCode .=", ";}

        $htmlCode .= $personnage-> getPortrait();
        if (!empty($personnage->getPortrait())) {$htmlCode .=", ";}

        return $htmlCode;
    }
}

