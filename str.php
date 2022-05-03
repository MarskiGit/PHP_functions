<?php

// addcslashes() - zwraca ciąg z ukośnikami odwrotnymi przed określonym znakiem lub zakresem np.: A..Z. Funkcja rozpoznaje wielkość znaków.
echo addcslashes("Hello World!","l") . PHP_EOL;

// addslashes($str) - zwraca ciąg z odwrotnymi ukośnikami przed określonym znakiem: ' " \.
echo addslashes("Hello World's!") . PHP_EOL;

// bin2hex() - zwraca, konwertuje ciągi znaków ASCII na wartości szesnastkowe.
echo bin2hex("Hello World!") . PHP_EOL;