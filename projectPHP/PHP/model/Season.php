
        <?php
                class Season {
                    
                    private $numero;
                    private $date;
                    private $resume;
                    
                    function getNumero() {
                        return $this->numero;
                    }

                    function getDate() {
                        return $this->date;
                    }

                    function getResume() {
                        return $this->resume;
                    }

                    function setNumero($numero) {
                        $this->numero = $numero;
                    }

                    function setDate($date) {
                        $this->date = $date;
                    }

                    function setResume($resume) {
                        $this->resume = $resume;
                    }

                    function __construct($numero, $date, $resume) {
                        $this->numero = $numero;
                        $this->date = $date;
                        $this->resume = $resume;
                    }


                }
       
        ?>

