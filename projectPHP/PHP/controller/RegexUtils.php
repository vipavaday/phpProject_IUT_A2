<?php

class RegexUtils{

	private static function getRegexFrLang(){
		return '/^([a-zA-Z]'
                        .'|(\&[a-zA-Z]grave\;)|(\&[a-zA-Z]acute\;)|(\&[a-zA-Z]circ\;)|(\&[a-zA-Z]uml\;)'
                        .'|(\&[a-zA-Z]cedil\;)|(\&[a-zA-Z][a-zA-Z]lig\;)|(\&szlig\;)|(\&[a-zA-Z]tilde\;)'
                        .'|(\-)|( )|(\&amp\;\#39\;)|(\&\#039\;)|(\&amp\;\#34\;)|(\&\#034\;)|(\&quot\;)|(\.))*$/';
	}

	private static function getRegexFrLangWithNumbers(){
	 return '/^([a-zA-Z0-9]'
                .'|(\&[a-zA-Z]grave\;)|(\&[a-zA-Z]acute\;)|(\&[a-zA-Z]circ\;)|(\&[a-zA-Z]uml\;)'
                .'|(\&[a-zA-Z]cedil\;)|(\&[a-zA-Z][a-zA-Z]lig\;)|(\&szlig\;)|(\&[a-zA-Z]tilde\;)'
                .'|(\-)|( )|(\&amp\;\#39\;)|(\&\#039\;)|(\&amp\;\#34\;)|(\&\#034\;)|(\&quot\;)|(\.))*$/';
	}

        private static function getRegexPseudo(){
            return '/^([a-zA-Z0-9]'
                    .'|(\&[a-zA-Z]grave\;)|(\&[a-zA-Z]acute\;)|(\&[a-zA-Z]circ\;)|(\&[a-zA-Z]uml\;)'
                    .'|(\&[a-zA-Z]cedil\;)|(\&[a-zA-Z][a-zA-Z]lig\;)|(\&szlig\;)|(\&[a-zA-Z]tilde\;)'
                    .'|(\-)|( )|(\&amp\;\#39\;)|(\&\#039\;)|(\&amp\;\#34\;)|(\&\#034\;)|(\&quot\;)|(\.))*$/';
        }
        
        private static function getRegexDate(){
            return '[^([0-9]{2}[/-]){2}[0-9]{4}]';
        }
        
        /**
         * Retourne true si la chaine contient entre $minLenght et $maxLenght caractères alaphabétiques.
         * @param type $chaine
         * @param type $minLenght
         * @param type $maxLenght
         * @return type
         */
	public static function isValidRegexFrLang($chaine, $minLenght, $maxLenght){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenght && strlen($chaine) <= $maxLenght
				&& preg_match(self::getRegexFrLang(), $chaine));				
	}

	public static function isValidRegexFrLangWithNumbers($chaine, $minLenght, $maxLenght){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenght && strlen($chaine) <= $maxLenght
				&& preg_match(self::getRegexFrLangWithNumbers(), $chaine));				
	}
        
        public static function isValidRegexPseudo($chaine, $minLenght, $maxLenght){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenght && strlen($chaine) <= $maxLenght
				&& preg_match(self::getRegexPseudo(), $chaine));				
	}
        
        public static function isValidRegexDate($chaine, $minLenght, $maxLenght){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenght && strlen($chaine) <= $maxLenght
				&& preg_match(self::getRegexDate(), $chaine));				
	}

	public static function isValidString($chaine, $regExp, $minLenght, $maxLenght){	
            return (isset($chaine) &&
			     strlen($chaine) >= $minLenght && strlen($chaine) <= $maxLenght
				&& preg_match($regExp, $chaine));				
	}
}


?>