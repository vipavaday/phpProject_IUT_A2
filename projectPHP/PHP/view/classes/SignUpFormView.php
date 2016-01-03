<?php

require_once $_SERVER['DOCUMENT_ROOT']."/model/User.php";
require_once $_SERVER['DOCUMENT_ROOT']."/view/FormManager.php";

class SignUpFormView{
    
    public static function getDefaultFormHTML($action){
        return self::getFormHtml($action,User::getDefaultUser());
    }
    
    public static function getFormHtml($action,$user){
        $htmlCode = '<h1> Inscription </h1><br/>';
        $htmlCode .= FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addTextInput("Nom","nomUtilisateur","nomUtilisateur",30,html_entity_decode($user->getNom(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addTextInput("Prenom","prenomUtilisateur","prenomUtilisateur",30,html_entity_decode($user->getPrenom(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addTextInput("Pseudo","pseudoUtilisateur","pseudoUtilisateur",30,html_entity_decode($user->getPseudo(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addEmailInput("Email","emailUtilisateur","emailUtilisateur",30,html_entity_decode($user->getEmail(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addPasswordInput("Mot De Passe","motDePasseUtilisateur","motdepasseUtilisateur",30,html_entity_decode($user->getMdp(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addPasswordInput("Confirmation","confirmationMdpUtilisateur","confirmationMdpUtilisateur",30,html_entity_decode($user->getMdpConfirm(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addTextInput("Date De Naissance","dateDeNaissanceUtilisateur","dateDeNaissanceUtilisateur",30,html_entity_decode($user->getDateDeNaissance(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addTextInput("Nationalité","nationaliteUtilisateur","nationaliteUtilisateur",30,html_entity_decode($user->getNationalite(),ENT_QUOTES,"UTF-8"),"required")."<br/>";
        $htmlCode .= FormManager::addSubmitButton("S'inscrire","class=\"sansLabel\"")."<br/>";
        $htmlCode .= FormManager::endForm();
        $htmlCode .= '<br/><br/><a class="sansLabel"> Vous avez déjà un compte ? <i>Connectez-vous !</i> </a>';
        return $htmlCode;
    }
    
    private static function addErrorMsg ( $dataErrors , $fieldName ) {
        if(!empty($dataErrors[$fieldName])){
           return $htmlCode .= "<br/><span class=\"errorMsg\">".$dataErrors[$fieldName]."</span>";
        }else{
           return $htmlCode."<br/>"; 
        }
    }
    
    public static function getFormErrorsHtml($action,$user,&$dataErrors){
        $htmlCode = '<h1> Inscription </h1>';
        $htmlCode .= FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addTextInput("Nom","nomUtilisateur","nomUtilisateur",30,html_entity_decode($user->getNom(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"nom");
        $htmlCode .= FormManager::addTextInput("Prénom*","prenomUtilisateur","prenomUtilisateur",30,  html_entity_decode($user->getPrenom(),ENT_QUOTES,"UTF-8"),"required");
        $htmlCode .= self::addErrorMsg($dataErrors,"prenom");
        $htmlCode .= FormManager::addTextInput("Pseudo","pseudoUtilisateur","pseudoUtilisateur",30,  html_entity_decode($user->getPseudo(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"pseudo");
        $htmlCode .= FormManager::addEmailInput("Email","emailUtilisateur","emailUtilisateur",30,  html_entity_decode($user->getEmail(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"email");
        $htmlCode .= FormManager::addPasswordInput("Mot De Passe","motDePasseUtilisateur","motDePasseUtilisateur",30,  html_entity_decode($user->getMdp(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"mdp");
        $htmlCode .= FormManager::addPasswordInput("Confirmation","confirmationMdpUtilisateur","confirmationMdpUtilisateur",30,  html_entity_decode($user->getMdpConfirm(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"mdpConfirm");
        $htmlCode .= FormManager::addTextInput("Date De Naissance","dateDeNaissanceUtilisateur","dateDeNaissanceUtilisateur",30,  html_entity_decode($user->getDateDeNaissance(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"dateDeNaissance");
        $htmlCode .= FormManager::addTextInput("Nationalité","nationaliteUtilisateur","nationaliteUtilisateur",30,html_entity_decode($user->getNationalite(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= self::addErrorMsg($dataErrors,"nationalite");
        $htmlCode .= FormManager::addSubmitButton("Envoyer","class=\"sansLabel\"")."<br/>";
        $htmlCode .= FormManager::endForm();
        $htmlCode .= '<br/><br/><a> Vous avez déjà un compte ? <i>Connectez-vous !</i> </a>';
        return $htmlCode;
        
    }
    
    public static function getHiddenFormHtml($action,$user,$buttontext){
        $htmlCode =  FormManager::beginForm("post", $action);
        $htmlCode .= FormManager::addHiddenInput("nomUtilisateur","nomUtilisateur",  html_entity_decode($user->getNom(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("prenomUtilisateur","prenomUtilisateur",  html_entity_decode($user->getPrenom(),ENT_QUOTES,"UTF-8"),"required");
        $htmlCode .= FormManager::addHiddenInput("pseudoUtilisateur","pseudoUtilisateur",  html_entity_decode($user->getPseudo(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("emailUtilisateur","emailUtilisateur",  html_entity_decode($user->getEmail(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("motDePasseUtilisateur","motDePasseUtilisateur",  html_entity_decode($user->getMdp(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("confirmationMdpUtilisateur","confirmationMdpUtilisateur",  html_entity_decode($user->getMdpConfirm(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("dateDeNaissanceUtilisateur","dateDeNaissanceUtilisateur",  html_entity_decode($user->getDateDeNaissance(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addHiddenInput("nationaliteUtilisateur","nationaliteUtilisateur", html_entity_decode($user->getNationalite(),ENT_QUOTES,"UTF-8"));
        $htmlCode .= FormManager::addSubmitButton($buttontext,"class=\"sansLabel\"");
        $htmlCode .= FormManager::endForm();
        
        return $htmlCode;
    }
}

?>

