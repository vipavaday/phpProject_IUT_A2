<?php
print_r($_SESSION);
if(isset($_SESSION['pseudo']) && isset($_SESSION['mdp'])){
    echo "<header>\n"
    . "<nav>\n"
    ."<a class=\"nav_focused\" >Accueil</a>"
    ."<a href=\"/view/classes/characterReview.php\">Personnages</a>"
    ."<a >Saisons</a>"
    ."<a >Univers</a>"
    ."<a >Forum</a>"
    ."<a href=\"/view/signUpDefaultFormView.php\"><i>".$_SESSION['pseudo']." connecté</i></a>"
    ."</nav>\n</header>";
}else{
    echo "<header>\n"
    . "<nav>\n"
    ."<a class=\"nav_focused\" >Accueil</a>"
    ."<a href=\"/view/classes/characterReview.php\">Personnages</a>"
    ."<a >Saisons</a>"
    ."<a >Univers</a>"
    ."<a >Forum</a>"
    ."<a href=\"/persistance/deco.php\">Connexion</a>"
    ."</nav>\n</header>";
}


		
?>