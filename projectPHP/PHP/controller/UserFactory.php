<?php

require_once $_SERVER['DOCUMENT_ROOT']."/model/User.php";

class UserFactory{
    
    public static function getUser(&$dataErrors,$nom,$prenom,$pseudo,$email,$mdp,$mdpConfirm,$dateDeNaissance,$nationalite){
        
        $user = User::getDefaultUser();
        $dataErrors=array();
        
        try{
            $user->setNom($nom);
        } catch (Exception $e) {
           $dataErrors ['nom']=$e->getMessage() ."<br/>\n";
        }
        try{
            $user->setPrenom($prenom);
        } catch (Exception $e) {
           $dataErrors ['prenom']=$e->getMessage() ."<br/>\n";
        }
        try{
            $user->setPseudo($pseudo);
        } catch (Exception $e) {
           $dataErrors ['pseudo']=$e->getMessage() ."<br/>\n";
        }
        try{
            $user->setEmail($email);
        } catch (Exception $e) {
           $dataErrors ['email']=$e->getMessage() ."<br/>\n";
        }
        try{
            $user->setMdp($mdp);
        } catch (Exception $e) {
           $dataErrors ['mdp']=$e->getMessage() ."<br/>\n";
        }
        try{
            $user->setMdpConfirm($mdpConfirm);
        } catch (Exception $e) {
           $dataErrors ['mdpConfirm']=$e->getMessage() ."<br/>\n";
        }
        try{
            $user->setDateDeNaissance($dateDeNaissance);
        } catch (Exception $e) {
           $dataErrors ['dateDeNaissance']=$e->getMessage() ."<br/>\n";
        }
        try{
            $user->setNationalite($nationalite);
        } catch (Exception $e) {
           $dataErrors ['nationalite']=$e->getMessage() ."<br/>\n";
        }
        
        return $user;
    } 
}

?>
