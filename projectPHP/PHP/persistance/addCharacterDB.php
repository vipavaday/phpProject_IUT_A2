<?php
    
    require_once $_SERVER['DOCUMENT_ROOT']."/persistance/DatabaseManager.php";  
    
    $id=hash("sha512",$character->getNom().$character->getPrenom().$character->getTitre().$character->getPays().$character->getDescription());
    $statement=  DatabaseManager::getInstance()->prepareAndExecuteQuery('INSERT INTO Characters VALUES(?,?,?,?,?,?,?,?)',array($id,$character->getNom(),$character->getPrenom(),$character->getTitre(),$character->getPays(),$character->getDescription(),$character->getArmoirie(),$character->getPortrait()));
    
    if($statement !== false){
        echo '<br/>L\'ajout du personnage a bien été pris en compte !';
        DatabaseManager::destroyQuerryResults($statement);
    }else {
        $dataError['requete']="Pb exec requete";
        echo '<br/>Pb exec requete';
        die();
    }

?>



