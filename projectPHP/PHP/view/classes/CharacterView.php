<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/Character.php';

class CharacterView{
    
    public static function getHtmlDevelopped($character){
            
            $htmlCode="";
            $htmlCode .="<h1><strong>Personnage : </strong><br/></h1>\n";           
            $htmlCode .= "<table>\n"
                            . "<tr>\n"
                                . "<th>Nom</th>\n"
                                . "<td>".$character->getNom()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Prenom</th>\n"
                                . "<td>".$character->getPrenom()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"      
                                . "<th>Titre</th>\n"
                                . "<td>".$character->getTitre()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Pays</th>\n"
                                . "<td>".$character->getPays()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Description</th>\n"
                                . "<td>".$character->getDescription()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Armoirie</th>\n"
                                . "<td>".$character->getArmoirie()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Portrait</th>\n"
                                . "<td>".$character->getPortrait()."</td>"
                            . "</tr>\n"
                    . "\n</table>\n";

            return $htmlCode;
        }
}


?>



<!--//$htmlCode .= $character->getNom();
//            if (!empty($character->getNom())) {$htmlCode .=", ";}
//
//            $htmlCode .= $character-> getPrenom();
//            if (!empty($character->getPrenom())) {$htmlCode .=", ";}
//
//            $htmlCode .= $character-> getTitre();
//            if (!empty($character->getTitre())) {$htmlCode .=", ";}
//
//            $htmlCode .= $character-> getPays();                    
//            if (!empty($character->getPays())) {$htmlCode .=", ";}
//
//            $htmlCode .= $character-> getDescription();
//            if (!empty($character->getDescription())) {$htmlCode .=", ";}
//
//            $htmlCode .= $character-> getArmoirie();
//            if (!empty($character->getArmoirie())) {$htmlCode .=", ";}
//
//            $htmlCode .= $character-> getPortrait();
//            if (!empty($character->getPortrait())) {$htmlCode .=", ";}-->