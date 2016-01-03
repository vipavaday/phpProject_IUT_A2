<?php

class DatabaseManager {

    static private $dbh = null;
    static private $instance = null;

    static private $db_host = "mysql:host=localhost;";
    static private $db_name = "dbname=PHPdataBase";
    static private $db_user = "Default";
    static private $db_password = "";
    
    private function __construct(){
        try{
            self::$dbh =new PDO(self::$db_host.self::$db_name,  self::$db_user,self::$db_password);
        } catch (PDOException $ex) {
            //echo '<p>Erreur de connexion à la base de données.</p>';
            die();
        }
    }
    
    public static function getInstance(){
        if(null ===self::$instance){
            self::$instance =new self;
        }
        return self::$instance;
    }
    
    
    public function prepareAndExecuteQuery($requete,$args){
        $numargs =  count($args);
       
        if(empty($requete)|| !is_string($requete)|| preg_match('/(\"|\')+/', $requete)!==0){
            return false;
        }
        
        $statement=self::$dbh->prepare($requete);
        if($statement === false){
            return false;
        }
        
        for($i=1; $i<=$numargs;$i++){
            $statement->bindParam($i,$args[$i-1]);
        }
        
        if($statement->execute() === false){
            return false;
        }
        return $statement;
    }
    
    public static function destroyQuerryResults(&$statement){
        $statement->closeCursor();
        $statement=null;
    }
    
    private function __clone(){}
}
?>

