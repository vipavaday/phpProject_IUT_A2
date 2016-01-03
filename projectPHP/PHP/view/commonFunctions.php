<?php
	function outputEnTeteHTML5($title, $charset,$css_sheet)
	{   
            session_id("userSession");
            session_start();
            
            echo "<!doctype html>\n";
            echo "<html lang=\"fr\">\n";
            echo "<head>\n";
            echo "<meta charset=\"";
            echo $charset;
            echo "\"/>\n";
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$css_sheet."\"/>\n";
            echo "<title>".$title."</title>\n";	
            echo "</head>\n<body>\n";
            require $_SERVER['DOCUMENT_ROOT']."/controller/header.php";
            echo "<div>";
	}
?>

<?php

	function outputFinFichierHTML5()
	{
            echo "</div>";
            echo "</body>\n</html>\n";
	}

?>