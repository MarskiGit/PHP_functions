<?php

// PHP 8.1

$str = readline('Wpisz dowolny ciąg znaków: ');
$pattern = readline('Wpisz dowolny znak lub frazę: ');
$number = readline('Wpisz dowolną liczbę: ');

$get = 'name=Peter&age=43&city=NewYork';
$html_link = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';

echo ' addcslashes() - zwraca ciąg z ukośnikami odwrotnymi przed określonym znakiem lub zakresem np.: A..Z. Funkcja rozpoznaje wielkość znaków.' . PHP_EOL;
echo ' addcslashes(string,characters)' . PHP_EOL;
echo addcslashes($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' addslashes($str) - zwraca ciąg z odwrotnymi ukośnikami przed określonym znakiem: \' " \.' . PHP_EOL;
echo ' addslashes(string)' . PHP_EOL;
echo addslashes($str) . PHP_EOL . PHP_EOL;


echo ' bin2hex() - zwraca, konwertuje ciągi znaków ASCII na wartości szesnastkowe.' . PHP_EOL;
echo ' bin2hex(string)' . PHP_EOL;
$szt_hex = bin2hex($str);
echo $szt_hex . PHP_EOL . PHP_EOL;


echo ' hex2bin() - zwraca, konwertuje ciąg szesnastkowy na znaki ASCII.' . PHP_EOL;
echo ' hex2bin(string)' . PHP_EOL;
echo hex2bin($szt_hex) . PHP_EOL . PHP_EOL;


echo ' chop() - usuwa spacje lub inne opcjonalnie zdefiniowane znaki, lub ciągi.(nie rozpoznaje polskiego).' . PHP_EOL;
echo ' chop(string,charlist)' . PHP_EOL;
echo chop($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' chr() zwraca znak z określonej wartości ASCII.' . PHP_EOL;
echo ' chr(ascii)' . PHP_EOL;
echo chr(0x52) . PHP_EOL . PHP_EOL;


echo ' chunk_split() - dzieli ciąg na szereg mniejszych części co podaną wartość (2). Opcjonalnie dodaje znak po każdym podziale. (..)' . PHP_EOL;
echo ' chunk_split(string,length,end)' . PHP_EOL;
echo chunk_split($str, 2, '..') . PHP_EOL . PHP_EOL;


echo ' convert_uuencode($str) - koduje znaki ciągu znaków  przy użyciu algorytmu uuencode.' . PHP_EOL;
echo ' convert_uudecode(string)' . PHP_EOL;
echo convert_uuencode($str) . PHP_EOL . PHP_EOL;


echo ' count_chars() - zwraca informacje o ciągu znaków, według użytego opcjonalnego parametru.' . PHP_EOL;
echo ' count_chars(string,mode)' . PHP_EOL;
echo count_chars($str, 4) . PHP_EOL . PHP_EOL;


echo ' expolde() - dzieli ciąg na tablicę . Przyjmuje parametr "separator" nie morze być pustym ciągiem.' . PHP_EOL;
echo ' explode(separator,string,limit)' . PHP_EOL;
$str_arr = explode(' ', $str);
var_dump($str_arr) . PHP_EOL . PHP_EOL;


echo ' impplode() - Łączy elementy tablicy w ciąg znaków za pomocą zdefiniowanego separatora.' . PHP_EOL;
echo ' implode(separator,array)' . PHP_EOL;
echo implode('+', $str_arr) . PHP_EOL . PHP_EOL;


echo ' htmlentities() - konwertuje znaki na encje HTML. Jko opcjonalnie przyjmuje dwa parametry.' . PHP_EOL;
echo ' htmlentities(string,flags,character-set,double_encode)' . PHP_EOL;
$html_link_en = htmlentities($html_link) . PHP_EOL;
echo $html_link_en . PHP_EOL . PHP_EOL;


echo ' html_entity_decode() - konwertuje elementy, encje HTML na znaki. Jako opcjonalnie przyjmuje dwa parametry.' . PHP_EOL;
echo ' html_entity_decode(string,flags,character-set)' . PHP_EOL;
echo html_entity_decode($html_link_en) . PHP_EOL . PHP_EOL;;


echo ' htmlspecialchars() - konwertuje zdefiniowane znaki "<" i ">" na encje HTML. Jest rozbudową wersją funkcji htmlspecialchars_decode().' . PHP_EOL;
echo ' htmlspecialchars(string,flags,character-set,double_encode)' . PHP_EOL;
echo htmlspecialchars($html_link) . PHP_EOL . PHP_EOL;


echo ' lcfirst() - konwertuje pierwszy znak ciągu na małą literę.' . PHP_EOL;
echo ' lcfirst(string)' . PHP_EOL;
echo lcfirst($str) . PHP_EOL . PHP_EOL;


echo ' ucfirst() - konwertuje pierwszy znak ciągu na wielką literę.' . PHP_EOL;
echo ' ucfirst(string)' . PHP_EOL;
echo ucfirst($str) . PHP_EOL . PHP_EOL;


echo ' ucwords() - konwertuje pierwszy znak każdego słowa ciągu na wielką literę.' . PHP_EOL;
echo ' uswords(string)' . PHP_EOL;
echo ucwords($str) . PHP_EOL . PHP_EOL;


echo ' mb_strtoupper() - konwertuje każdy znak w ciągu na wielką litery. Przedrostek mb_ sprawa, żę funkcja akceptuje polskie znaki.' . PHP_EOL;
echo ' mb_strtoupper(string)' . PHP_EOL;
echo mb_strtoupper($str) . PHP_EOL . PHP_EOL;


echo ' strtolower() - konwertuje każdy znak w ciągu na małą literę. Przedrostek mb_ sprawa, żę funkcja akceptuje polskie znaki.' . PHP_EOL;
echo ' strtolower(string)' . PHP_EOL;
echo mb_strtolower($str) . PHP_EOL . PHP_EOL;


echo ' levenshtein() - zwraca odległość Levenshteina (edycyjna) między dwoma ciągami. Ile zmian w ciągu należy dokonać aby ten był identyczny ze wzorcem.' . PHP_EOL;
echo ' levenshtein(string1,string2,insert,replace,delete)' . PHP_EOL;
echo levenshtein($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' localeconv() - zwraca tablicę zawierającą lokalne informacje o formatowaniu numerycznym i monetarnym' . PHP_EOL;
setlocale(LC_ALL, "PL");
echo var_dump(localeconv()) . PHP_EOL . PHP_EOL;


echo ' trim() - usuwa spacje lub inne wstępnie zdefiniowane znaki z obu stron ciągu' . PHP_EOL;
echo ' trim(string,charlist)' . PHP_EOL;
echo trim($str) . PHP_EOL . PHP_EOL;


echo ' rtrim() - usuwa spacje lub inne wstępnie zdefiniowane znaki z prawej strony ciągu' . PHP_EOL;
echo ' rtrim(string,charlist)' . PHP_EOL;
echo rtrim($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' ltrim() - usuwa spacje lub inne wstępnie zdefiniowane znaki z lewej strony ciągu.' . PHP_EOL;
echo ' ltrim(string,charlist)' . PHP_EOL;
echo ltrim($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' md5() - oblicza skrót MD5 ciągu znaków.' . PHP_EOL;
echo ' md5(string,raw)' . PHP_EOL;
echo md5($str) . PHP_EOL . PHP_EOL;


echo ' nl2br() - wstawia podziały wierszy HTML (<br> lub <br />) przed każdym nowym wierszem (\n) w ciągu..' . PHP_EOL;
echo ' nl2br(string,xhtml)' . PHP_EOL;
echo nl2br($str) . PHP_EOL . PHP_EOL;


echo ' number_format() - formatuje liczbę z pogrupowanymi tysiącami.' . PHP_EOL;
echo ' number_format(number,decimals,decimalpoint,separator)' . PHP_EOL;
echo number_format('1000000', 2) . PHP_EOL . PHP_EOL;


echo ' ord() - zwraca wartość ASCII pierwszego znaku ciągu.' . PHP_EOL;
echo ' ord(string)' . PHP_EOL;
echo ord($str) . PHP_EOL . PHP_EOL;


echo ' parse_str() - analizuje ciąg zapytania na zmienne.' . PHP_EOL;
echo ' parse_str(string,array)' . PHP_EOL;
parse_str($get, $arr);
var_dump($arr) . PHP_EOL . PHP_EOL;


echo ' printf() - wyświetla sformatowany ciąg znaków.' . PHP_EOL;
echo ' printf(format,arg1,arg2,arg++)' . PHP_EOL;
printf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', $number, $str);
echo PHP_EOL . PHP_EOL;


echo ' vprintf() - wyświetla sformatowany ciąg znaków. Argumenty umieszczone są w tablicy.' . PHP_EOL;
echo ' vprintf(format,array)' . PHP_EOL;
vprintf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', [++$number, $str]);
echo PHP_EOL . PHP_EOL;


echo ' sprintf() - zapisuje sformatowany ciąg znaków do zmiennej.' . PHP_EOL;
echo ' sprintf(format,arg1,arg2,arg++)' . PHP_EOL;
$sprint = sprintf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', ++$number, $str);
echo $sprint . PHP_EOL . PHP_EOL;


echo ' vsprintf() - zapisuje sformatowany ciąg znaków do zmiennej. Argumenty umieszczone są w tablicy.' . PHP_EOL;
echo ' vsprintf(format,array)' . PHP_EOL;
$sprint = vsprintf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', [++$number, $str]);
echo $sprint . PHP_EOL . PHP_EOL;


echo ' vfprintf() - zapisuje sformatowany ciąg znaków w określonym strumieniu wyjściowym (na przykład: pliku lub bazie danych). Argumenty umieszczone są w tablicy' . PHP_EOL;
echo ' vfprintf(stream,format,array)' . PHP_EOL;
$file = fopen("./test.txt", "a");
vfprintf($file, 'Tu zamieniono wartość liczbową "%u", a tu ciąg "%s". \n', [++$number, $str]);
fclose($file);
echo PHP_EOL . PHP_EOL;


echo ' wordwrap() - zawija ciąg znaków w nowe linie, gdy osiągnie on określoną długość.' . PHP_EOL;
echo ' wordwrap(string,width,break,cut)' . PHP_EOL;
echo wordwrap($str, 5, "<br>\n") > PHP_EOL . PHP_EOL;