<?php

// PHP 8.1

$str = readline("Wpisz dowolny ciąg znaków: ");
$pattern = readline("Wpisz dowolny znak lub frazę: ");

echo ' addcslashes() - zwraca ciąg z ukośnikami odwrotnymi przed określonym znakiem lub zakresem np.: A..Z. Funkcja rozpoznaje wielkość znaków.'. PHP_EOL;
echo addcslashes($str ,$pattern ) . PHP_EOL;

echo ' addslashes($str) - zwraca ciąg z odwrotnymi ukośnikami przed określonym znakiem: \' " \.'. PHP_EOL;
echo addslashes($str ) .  PHP_EOL;

echo ' bin2hex() - zwraca, konwertuje ciągi znaków ASCII na wartości szesnastkowe.'. PHP_EOL;
echo bin2hex($str ) . PHP_EOL;

echo ' chop() - usuwa spacje lub inne opcjonalnie zdefiniowane znaki, lub ciągi.(nie rozpoznaje polskich znaków ?).' . PHP_EOL;
/*
„\0” — NULL,
"\t" - tab,
"\n" - nowa linia,
"\x0B" - pionowa zakładka,
"\r" - powrót karetki,
" " - zwykła biała spacja,
 */
echo chop($str ,$pattern ) . PHP_EOL;

echo ' chr() zwraca znak z określonej wartości ASCII.'. PHP_EOL;
echo chr(0x52) . PHP_EOL;

echo ' chunk_split() - dzieli ciąg na szereg mniejszych części co podaną wartość (2). Opcjonalnie dodaje znak po każdym podziale. (..)' . PHP_EOL;
echo chunk_split($str ,2, '..') . PHP_EOL;

echo ' convert_uuencode($str) - koduje znaki ciągu znaków  przy użyciu algorytmu uuencode.' . PHP_EOL;
echo convert_uuencode($str) . PHP_EOL;

echo ' count_chars() - zwraca informacje o wszystkich różnych znakach użytych w ciągu. Przyjmuje dodatkowe parametry.' . PHP_EOL;
/*
0 - tablica z wartością ASCII jako kluczem i liczbą wystąpień jako wartością,
1 - tablica z wartością ASCII jako kluczem i liczbą wystąpień jako wartością, wyświetla tylko wystąpienia większe od zera,
2 - tablica z wartością ASCII jako kluczem i liczbą wystąpień jako wartością, wymieniane są tylko wystąpienia równe zero,
3 - ciąg ze wszystkimi użytymi różnymi znakami,
4 - ciąg ze wszystkimi niewykorzystanymi znakami,
 */
echo count_chars($str,4) . PHP_EOL;