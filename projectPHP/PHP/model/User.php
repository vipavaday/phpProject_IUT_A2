
        <?php
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
                        global $regEx_FR_LANG;
                        if(!isValidString($nom,$regEx_FR_LANG,0,100)){
                            throw new Exception("Erreur, le nom doit comporter entre 0 et 100 caractères alphabétiques");
                        }
                        $this->nom = empty($nom) ? "" : $nom;
                    }
                    
                    function getPrenom() { return $this->prenom;}
                    function setPrenom($prenom) {
                        global $regEx_FR_LANG;
                        if(!isValidString($prenom,$regEx_FR_LANG,2,100)){
                            throw new Exception("Erreur, le prénom doit comporter entre 2 et 100 caractères alphabétiques");
                        }
                        $this->prenom = empty($prenom) ? "" : $prenom;
                    }
                    
                    function getPseudo() { return $this->pseudo;}
                    function setPseudo($pseudo) {
                        global $regEx_PSEUDO;
                        if(!isValidString($pseudo,$regEx_PSEUDO,0,30)){
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
                        global $regEx_FR_LANG;
                        if(!isValidString($mdp,$regEx_PSEUDO,8,20)){
                            throw new Exception("Erreur, le mot de passe doit comporter entre 8 et 20 caractères.");
                        }
                        $this->mdp = empty($mdp) ? "" : $mdp;
                    }
                    
                    function getMdpConfirm() { return $this->mdpConfirm;}
                    function setMdpConfirm($mdpConfirm) {
                        global $regEx_FR_LANG;
                        if(!isValidString($mdpConfirm,$regEx_PSEUDO,8,20)){
                            throw new Exception("Erreur, le mot de passe doit comporter entre 8 et 20 caractères.");
                        }
                        if($mdpConfirm != $mdp){
                            throw new Exception("La comfirmation du mot de passe ne correspond pas.");
                        }
                        $this->mdpConfirm = empty($mdpConfirm) ? "" : $mdpConfirm;
                    }
                    
                    function getDateDeNaissance() { return $this->dateDeNaissance;}
                    function setDateDeNaissance($dateDeNaissance) {
                        global $regEx_DATE;
                        if(!isValidString($dateDeNaissance,$regEx_DATE,10,10)){
                            throw new Exception("Erreur, la date de naissance doit être au format <jj/mm/aaaa>.");
                        }
                        $this->dateDeNaissance = empty($dateDeNaissance) ? "" : $dateDeNaissance;
                    }
                    
                    function getNationalite() { return $this->nationalite;}
                    function setNationalite($nationalite) {
                        global $regEx_FR_LANG;
                        if(!isValidString($nationalite,$regEx_DATE,0,100)){
                            throw new Exception("Erreur, nationnalité doit comporter entre 0 et 100 caractères alphabétiques.");
                        }
                        $this->nationalite = empty($nationalite) ? "" : $nationalite;
                    }
                    
                    function __construct($nom, $prenom, $email, $mdp, $mdpConfirm, $dateDeNaissance, $nationalite) {
                        $this->setNom($nom);
                        $this->setPrenom($prenom);
                        $this->setEmail($email);
                        $this->setMdp($mdp);
                        $this->setMdpConfirm($mdpConfirm);
                        $this->setDateDeNaissance($dateDeNaissance);
                        $this->setNationalite($nationalite);
                    }


                
                }
        

