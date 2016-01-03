<?php
    
    require_once $_SERVER['DOCUMENT_ROOT']."/persistance/DatabaseManager.php";  
    $dataC=$user->getNom()."/".$user->getPrenom()."/".$user->getPseudo()."/".$user->getEmail()."/".$user->getMdp()."/".$user->getDateDeNaissance()."/".$user->getNationalite();
    $id=hash("sha512",$user->getNom().$user->getPrenom().$user->getPseudo().$user->getEmail().$user->getMdp().$user->getDateDeNaissance().$user->getNationalite());
    $mdp= hash("sha512",$user->getMdp()); 
    $statement=  DatabaseManager::getInstance()->prepareAndExecuteQuery('INSERT INTO Users VALUES(?,?,?,?,?,?,?,?)',array($id,$user->getNom(),$user->getPrenom(),$user->getPseudo(),$user->getEmail(),$mdp,$user->getDateDeNaissance(),$user->getNationalite()));
    
    if($statement !== false){
        $res['requete']='<br/>Votre inscription a bien été prise en compte !';
        DatabaseManager::destroyQuerryResults($statement); 
        //setcookie("userInfo","monCookieAMoi",time()+3600,null, null, false, true);
        
        $_SESSION['id']=$id;
        $_SESSION['mdp']=$mdp;
        $_SESSION['nom']=$user->getNom();
        $_SESSION['prenom']=$user->getPrenom();
        $_SESSION['pseudo']=$user->getPseudo();
        $_SESSION['email']=$user->getEmail();
        $_SESSION['ddn']=$user->getDateDeNaissance();
        $_SESSION['nationalite']=$user->getNationalite();
    }else {
        $res['requete']="Erreur: Utilisateur existant";
    }
    


?>

