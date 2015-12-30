<?php

class ExpressionsRegexUtils{

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
            return '/^([0-9]*$/';
        }


        
        
	public static function isValidRegexFrLang($chaine, $minLenth, $maxLenth){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenth && strlen($chaine) <= $maxLenth
				&& preg_match(self::getRegexFrLang(), $chaine));				
	}

	public static function isValidRegexFrLangWithNumbers($chaine, $minLenth, $maxLenth){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenth && strlen($chaine) <= $maxLenth
				&& preg_match(self::getRegexFrLangWithNumbers(), $chaine));				
	}

	public static function isValidString($chaine, $regExp, $minLenth, $maxLenth){
		return (isset($chaine) &&
			     strlen($chaine) >= $minLenth && strlen($chaine) <= $maxLenth
				&& preg_match($regExp, $chaine));				
	}
}


