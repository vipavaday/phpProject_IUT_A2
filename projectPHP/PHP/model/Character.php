
        <?php
        
        require_once $_SERVER['DOCUMENT_ROOT']."/controller/RegexUtils.php";
        
            class Character{
                
                private $nom;
                private $prenom;
                private $titre;  
                private $pays;
                private $description;
                private $armoirie;
                private $portrait;
                
                
                
                public function getNom() { return $this->nom;}
                public function setNom($nom) { 
                    if(!RegexUtils::isValidRegexFrLang($nom,0,100)){
                        throw new Exception("Le nom doit comporter entre 0 et 100 caractères alphabétiques");
                    }
                    $this->nom = empty($nom) ? "" : $nom;
                }

                public function getPrenom() {return $this->prenom;}
                public function setPrenom($prenom) {
                    if(!RegexUtils::isValidRegexFrLang($prenom,2,100)){
                        throw new Exception("Le prénom doit comporter entre 2 et 100 caractères alphabétiques");
                    }
                    $this->prenom = empty($prenom) ? "" : $prenom;
                }

                public function getTitre() {return $this->titre;}
                public function setTitre($titre) {
                    if(!RegexUtils::isValidRegexFrLangWithNumbers($titre,0,200)){
                        throw new Exception("Le titre doit comporter entre 0 et 200 caractères alpha-numériques");
                    }
                    $this->titre = empty($titre) ? "" : $titre;
                }

                public function getPays() {return $this->pays;}
                public function setPays($pays) {
                    if(!RegexUtils::isValidRegexFrLang($pays,0,200)){
                        throw new Exception("Le pays doit comporter entre 0 et 200 caractères alphabétiques");
                    }
                    $this->pays = empty($pays) ? "" : $pays;
                }

                public function getDescription() {return $this->description;}
                public function setDescription($description) {
                    if(!RegexUtils::isValidRegexFrLangWithNumbers($description,0,350)){
                        throw new Exception("La description doit comporter entre 0 et 350 caractères alpha-numériques");
                    }
                    $this->description = empty($description) ? "" : $description;
                }

                public function getArmoirie() {return $this->armoirie;}
                public function setArmoirie($armoirie) {
                    if(!RegexUtils::isValidRegexFrLangWithNumbers($armoirie,0,100)){
                        throw new Exception("Le chemin doit comporter entre 0 et 100 caractères alpha-numériques");
                    }
                    $this->armoirie = empty($armoirie) ? "" : $armoirie;
                }

                public function getPortrait() {return $this->portrait;}
                public function setPortrait($portrait) {
                    if(!RegexUtils::isValidRegexFrLangWithNumbers($portrait,0,100)){
                        throw new Exception("Le chemin doit comporter entre 0 et 100 caractères alpha-numériques");
                    }
                    $this->portrait = empty($portrait) ? "" : $portrait;
                }
                
                public function __construct($nom, $prenom, $titre, $pays, $description, $armoirie, $portrait) {
                    $this->setNom($nom);
                    $this->setPrenom($prenom);
                    $this->setTitre($titre);
                    $this->setPays($pays);
                    $this->setDescription($description);
                    $this->setArmoirie($armoirie);
                    $this->setPortrait($portrait);
                }
                
                public static function getDefaultCharacter(){
                    $character= new Character("nom","prenom","titre","pays","description","armoirie","portrait");
                    $character->nom ="";
                    $character->prenom ="";
                    $character->titre ="";
                    $character->pays ="";
                    $character->description ="";
                    $character->armoirie ="";
                    $character->portrait ="";
                    return $character;
                }

            }
        

?>