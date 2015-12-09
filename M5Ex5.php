<?php

class TextFunctions {
    static public function changeCase($string, $upperCase) {
        if( $upperCase) return strtoupper( $string );
                else return mb_strtolower( $string );
      
    }
}

$string = "Hello, World!\n";

echo TextFunctions::changeCase($string, true);
echo TextFunctions::changeCase($string, false);

