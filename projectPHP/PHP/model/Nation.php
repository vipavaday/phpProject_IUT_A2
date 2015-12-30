
        <?php
          class Nation {
              
              private $nom;
              private $dirigeant;
              private $histoire;
              
              function getNom() {
                  return $this->nom;
              }

              function getDirigeant() {
                  return $this->dirigeant;
              }

              function getHistoire() {
                  return $this->histoire;
              }

              function setNom($nom) {
                  $this->nom = $nom;
              }

              function setDirigeant($dirigeant) {
                  $this->dirigeant = $dirigeant;
              }

              function setHistoire($histoire) {
                  $this->histoire = $histoire;
              }

              function __construct($nom, $dirigeant, $histoire) {
                  $this->nom = $nom;
                  $this->dirigeant = $dirigeant;
                  $this->histoire = $histoire;
              }


          }
        ?>

