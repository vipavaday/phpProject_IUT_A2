
<?php 
    
    require_once $_SERVER['DOCUMENT_ROOT']."/controller/RegexUtils.php";
    
        class User {

            private $nom;
            private $prenom;
            private $pseudo;
            private $email;
            private $mdp;
            private $mdpConfirm;
            private $dateDeNaissance;
            private $nationalite;

            function getNom() { return $this->nom;}
            function setNom($nom) {
                if(!RegexUtils::isValidRegexFrLang($nom,0,100)){
                    throw new Exception("Erreur, le nom doit comporter entre 0 et 100 caractères alphabétiques");
                }
                $this->nom = empty($nom) ? "" : $nom;
            }

            function getPrenom() { return $this->prenom;}
            function setPrenom($prenom) {
                if(!RegexUtils::isValidRegexFrLang($prenom,2,100)){
                    throw new Exception("Erreur, le prénom doit comporter entre 2 et 100 caractères alphabétiques");
                }
                $this->prenom = empty($prenom) ? "" : $prenom;
            }

            function getPseudo() { return $this->pseudo;}
            function setPseudo($pseudo) {
                if(!RegexUtils::isValidRegexPseudo($pseudo,6,30)){
                    throw new Exception("Erreur, le pseudo doit comporter entre 0 et 30 caractères alpha-numériques ou symboles.");
                }
                $this->pseudo = empty($pseudo) ? "" : $pseudo;
            }

            function getEmail() { return $this->email;}
            function setEmail($email) {
                $this->email = empty($email) ? "" : filter_var($email,FILTER_VALIDATE_EMAIL);
            }

            function getMdp() { return $this->mdp;}
            function setMdp($mdp) {
                if(!RegexUtils::isValidRegexPseudo($mdp,8,20)){
                    throw new Exception("Erreur, le mot de passe doit comporter entre 8 et 20 caractères.");
                }
                $this->mdp = empty($mdp) ? "" : $mdp;
            }

            function getMdpConfirm() { return $this->mdpConfirm;}
            function setMdpConfirm($mdpConfirm) { 
                if(strcmp($mdpConfirm,$this->getMdp()) !== 0){
                    throw new Exception("mot de passe différent");
                }
                $this->mdpConfirm = empty($mdpConfirm) ? "" : $mdpConfirm;
            }

            function getDateDeNaissance() { return $this->dateDeNaissance;}
            function setDateDeNaissance($dateDeNaissance) {
                if(!RegexUtils::isValidRegexDate($dateDeNaissance,8,10)){
                    throw new Exception("Erreur, la date de naissance doit être au format &lt;jj/mm/aaaa&gt;.");
                }
                $this->dateDeNaissance = empty($dateDeNaissance) ? "" : $dateDeNaissance;
            }

            function getNationalite() { return $this->nationalite;}
            function setNationalite($nationalite) {
                if(!RegexUtils::isValidRegexFrLang($nationalite,0,100)){
                    throw new Exception("Erreur, nationnalité doit comporter entre 0 et 100 caractères alphabétiques.");
                }
                $this->nationalite = empty($nationalite) ? "" : $nationalite;
            }

            function __construct($nom, $prenom, $pseudo, $email, $mdp, $mdpConfirm, $dateDeNaissance, $nationalite) {
                $this->setNom($nom);
                $this->setPrenom($prenom);
                $this->setPseudo($pseudo);
                $this->setEmail($email);
                $this->setMdp($mdp);
                $this->setMdpConfirm($mdpConfirm);
                $this->setDateDeNaissance($dateDeNaissance);
                $this->setNationalite($nationalite);
            }

            public static function getDefaultUser(){
            $user= new User("nom","prenom","pseudo","email","mdpmdpmdp","mdpmdpmdp","25/12/0800","nationalite");
            $user->nom ="";
            $user->prenom ="";
            $user->pseudo ="";
            $user->email ="";
            $user->mdp ="";
            $user->mdpConfirm ="";
            $user->dateDeNaissance ="";
            $user->nationalite ="";
            return $user;
        }


    }


?>