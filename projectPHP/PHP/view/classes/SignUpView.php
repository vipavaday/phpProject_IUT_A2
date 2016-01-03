<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/model/User.php';

class SignUpView{
    
    public static function getHtmlDevelopped($user,$res){
            
            $htmlCode="";
            $htmlCode .="<h1><strong>Données : </strong><br/></h1>\n";           
            $htmlCode .= "<table>\n"
                            . "<tr>\n"
                                . "<th>Nom</th>\n"
                                . "<td>".$user->getNom()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Prenom</th>\n"
                                . "<td>".$user->getPrenom()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"      
                                . "<th>Pseudo</th>\n"
                                . "<td>".$user->getPseudo()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Email</th>\n"
                                . "<td>".$user->getEmail()."</td>\n"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Date de naissance</th>\n"
                                . "<td>".$user->getDateDeNaissance()."</td>"
                            . "</tr>\n"
                            . "<tr>\n"
                                . "<th>Nationalité</th>\n"
                                . "<td>".$user->getNationalite()."</td>"
                            . "</tr>\n"
                    . "\n</table>\n";
            $htmlCode .= "<br/>".$res['requete'];

            return $htmlCode;
        }
}


?>