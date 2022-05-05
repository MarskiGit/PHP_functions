<?php

// PHP 8.1

$str = readline('Wpisz dowolny ciąg znaków: ');
$pattern = readline('Wpisz dowolny znak lub frazę: ');
$number = readline('Wpisz dowolną liczbę: ');

$get = 'name=Peter&age=43&city=NewYork';
$html_link = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';

echo ' addcslashes() - zwraca ciąg z ukośnikami odwrotnymi przed określonym znakiem lub zakresem np.: A..Z. Funkcja rozpoznaje wielkość znaków.' . PHP_EOL;
echo ' addcslashes(string, string): string' . PHP_EOL;
echo addcslashes($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' addslashes($str) - zwraca ciąg z odwrotnymi ukośnikami przed określonym znakiem: \' " \.' . PHP_EOL;
echo ' addslashes(string): string' . PHP_EOL;
echo addslashes($str) . PHP_EOL . PHP_EOL;


echo ' bin2hex() - zwraca, konwertuje ciągi znaków ASCII na wartości szesnastkowe.' . PHP_EOL;
echo ' bin2hex(string): string' . PHP_EOL;
$szt_hex = bin2hex($str);
echo $szt_hex . PHP_EOL . PHP_EOL;


echo ' hex2bin() - zwraca, konwertuje ciąg szesnastkowy na znaki ASCII.' . PHP_EOL;
echo ' hex2bin(string): string|false' . PHP_EOL;
echo hex2bin($szt_hex) . PHP_EOL . PHP_EOL;


echo ' chr() zwraca znak z określonej wartości ASCII.' . PHP_EOL;
echo ' chr(int): string' . PHP_EOL;
echo chr(0x52) . PHP_EOL . PHP_EOL;


echo ' chunk_split() - dzieli ciąg na szereg mniejszych części co podaną wartość (2). Opcjonalnie dodaje znak po każdym podziale. (..)' . PHP_EOL;
echo ' chunk_split((string, int = 76, string = "\r\n"): string' . PHP_EOL;
echo chunk_split($str, 2, '..') . PHP_EOL . PHP_EOL;


echo ' convert_uuencode($str) - koduje znaki ciągu znaków  przy użyciu algorytmu uuencode.' . PHP_EOL;
echo ' convert_uudecode(string): string|false' . PHP_EOL;
echo convert_uuencode($str) . PHP_EOL . PHP_EOL;


echo ' count_chars() - zwraca informacje o ciągu znaków, według użytego opcjonalnego parametru.' . PHP_EOL;
echo ' count_chars(string, int = 0): array|string' . PHP_EOL;
echo count_chars($str, 4) . PHP_EOL . PHP_EOL;


echo ' expolde() - dzieli ciąg na tablicę . Przyjmuje parametr "separator" nie morze być pustym ciągiem.' . PHP_EOL;
echo ' explode(string, string, int = PHP_INT_MAX): array' . PHP_EOL;
$str_arr = explode(' ', $str);
var_dump($str_arr) . PHP_EOL . PHP_EOL;


echo ' impplode() - Łączy elementy tablicy w ciąg znaków za pomocą zdefiniowanego separatora.' . PHP_EOL;
echo ' implode(string, array): string' . PHP_EOL;
echo implode('+', $str_arr) . PHP_EOL . PHP_EOL;


echo ' htmlentities() - konwertuje znaki na encje HTML. Jko opcjonalnie przyjmuje dwa parametry.' . PHP_EOL;
echo ' htmlentities(string, int = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string = null, bool = true): string' . PHP_EOL;
$html_link_en = htmlentities($html_link) . PHP_EOL;
echo $html_link_en . PHP_EOL . PHP_EOL;


echo ' html_entity_decode() - konwertuje elementy, encje HTML na znaki. Jako opcjonalnie przyjmuje dwa parametry.' . PHP_EOL;
echo ' html_entity_decode(string, int = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string = null): string' . PHP_EOL;
echo html_entity_decode($html_link_en) . PHP_EOL . PHP_EOL;;


echo ' htmlspecialchars() - konwertuje zdefiniowane znaki "<" i ">" na encje HTML. Jest rozbudową wersją funkcji htmlspecialchars_decode().' . PHP_EOL;
echo ' htmlspecialchars(string, int = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string = null, bool = true): string' . PHP_EOL;
echo htmlspecialchars($html_link) . PHP_EOL . PHP_EOL;


echo ' lcfirst() - konwertuje pierwszy znak ciągu na małą literę.' . PHP_EOL;
echo ' lcfirst(string): string' . PHP_EOL;
echo lcfirst($str) . PHP_EOL . PHP_EOL;


echo ' ucfirst() - konwertuje pierwszy znak ciągu na wielką literę.' . PHP_EOL;
echo ' ucfirst(string): string' . PHP_EOL;
echo ucfirst($str) . PHP_EOL . PHP_EOL;


echo ' ucwords() - konwertuje pierwszy znak każdego słowa ciągu na wielką literę.' . PHP_EOL;
echo ' ucwords(string, string = " \t\r\n\f\v"): string' . PHP_EOL;
echo ucwords($str) . PHP_EOL . PHP_EOL;


echo ' mb_strtoupper() - konwertuje każdy znak w ciągu na wielką litery. Przedrostek mb_ sprawa, żę funkcja akceptuje polskie znaki.' . PHP_EOL;
echo ' mb_strtoupper(string): string' . PHP_EOL;
echo mb_strtoupper($str) . PHP_EOL . PHP_EOL;


echo ' strtolower() - konwertuje każdy znak w ciągu na małą literę. Przedrostek mb_ sprawa, żę funkcja akceptuje polskie znaki.' . PHP_EOL;
echo ' strtolower(string): string' . PHP_EOL;
echo mb_strtolower($str) . PHP_EOL . PHP_EOL;


echo ' levenshtein() - zwraca odległość Levenshteina (edycyjna) między dwoma ciągami. Ile zmian w ciągu należy dokonać aby ten był identyczny ze wzorcem.' . PHP_EOL;
echo ' levenshtein(string, string, int = 1, int = 1, int = 1): int' . PHP_EOL;
echo levenshtein($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' localeconv() - zwraca tablicę zawierającą lokalne informacje o formatowaniu numerycznym i monetarnym' . PHP_EOL;
echo ' localeconv(): array' . PHP_EOL;
setlocale(LC_ALL, "PL");
echo var_dump(localeconv()) . PHP_EOL . PHP_EOL;


echo ' trim() - usuwa spacje lub inne wstępnie zdefiniowane znaki z obu stron ciągu' . PHP_EOL;
echo ' trim(string, string = " \n\r\t\v\x00"): string' . PHP_EOL;
echo trim($str) . PHP_EOL . PHP_EOL;


echo ' rtrim() - usuwa spacje lub inne wstępnie zdefiniowane znaki z prawej strony ciągu' . PHP_EOL;
echo ' rtrim(string, string = " \n\r\t\v\x00"): string' . PHP_EOL;
echo rtrim($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' ltrim() - usuwa spacje lub inne wstępnie zdefiniowane znaki z lewej strony ciągu.' . PHP_EOL;
echo ' ltrim(string, string = " \n\r\t\v\x00"): string' . PHP_EOL;
echo ltrim($str, $pattern) . PHP_EOL . PHP_EOL;


echo ' md5() - oblicza skrót MD5 ciągu znaków.' . PHP_EOL;
echo ' md5(string, bool - false): string' . PHP_EOL;
echo md5($str) . PHP_EOL . PHP_EOL;


echo ' nl2br() - wstawia podziały wierszy HTML (<br> lub <br />) przed każdym nowym wierszem (\n) w ciągu..' . PHP_EOL;
echo ' nl2br(string, bool = true): string' . PHP_EOL;
echo nl2br($str) . PHP_EOL . PHP_EOL;


echo ' number_format() - formatuje liczbę z pogrupowanymi tysiącami.' . PHP_EOL;
echo ' number_format(number, int , ?string, ?string): string' . PHP_EOL;
echo number_format('1000000', 2) . PHP_EOL . PHP_EOL;


echo ' ord() - zwraca wartość ASCII pierwszego znaku ciągu.' . PHP_EOL;
echo ' ord(string): int' . PHP_EOL;
echo ord($str) . PHP_EOL . PHP_EOL;


echo ' parse_str() - analizuje ciąg zapytania na zmienne.' . PHP_EOL;
echo ' parse_str(string, array): void' . PHP_EOL;
parse_str($get, $arr);
var_dump($arr);
echo PHP_EOL . PHP_EOL;

echo ' printf() - wyświetla sformatowany ciąg znaków.' . PHP_EOL;
echo ' printf(string ,mixed...): int' . PHP_EOL;
printf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', $number, $str);
echo PHP_EOL . PHP_EOL;


echo ' vprintf() - wyświetla sformatowany ciąg znaków. Argumenty umieszczone są w tablicy.' . PHP_EOL;
echo ' vprintf(string, array): int' . PHP_EOL;
vprintf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', [++$number, $str]);
echo PHP_EOL . PHP_EOL;


echo ' sprintf() - zapisuje sformatowany ciąg znaków do zmiennej.' . PHP_EOL;
echo ' sprintf(string , mixed...): string' . PHP_EOL;
$sprint = sprintf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', ++$number, $str);
echo $sprint . PHP_EOL . PHP_EOL;


echo ' vsprintf() - zapisuje sformatowany ciąg znaków do zmiennej. Argumenty umieszczone są w tablicy.' . PHP_EOL;
echo ' vsprintf(string, array): string' . PHP_EOL;
$sprint = vsprintf('Tu zamieniono wartość liczbową "%u", a tu ciąg "%s".', [++$number, $str]);
echo $sprint . PHP_EOL . PHP_EOL;


echo ' vfprintf() - zapisuje sformatowany ciąg znaków w określonym strumieniu wyjściowym (na przykład: pliku lub bazie danych). Argumenty umieszczone są w tablicy' . PHP_EOL;
echo ' vfprintf(stream, string, array): int' . PHP_EOL;
$file = fopen("./test.txt", "a");
vfprintf($file, 'Tu zamieniono wartość liczbową "%u", a tu ciąg "%s". \n', [++$number, $str]);
fclose($file);
echo PHP_EOL . PHP_EOL;


echo ' wordwrap() - zawija ciąg znaków w nowe linie, gdy osiągnie on określoną długość.' . PHP_EOL;
echo ' wordwrap(string, int, string, bool): string' . PHP_EOL . PHP_EOL;
//echo wordwrap($str, 1, PHP_EOL) . PHP_EOL . PHP_EOL;


echo ' similar_text() — oblicza podobieństwo między dwoma ciągami znaków' . PHP_EOL;
echo ' similar_text(string, string, float $percent = null): int' . PHP_EOL;
similar_text($str, $pattern, $percent);
echo '"' . $str . '" i "' . $pattern . '" są podobne w ' . $percent . '%' . PHP_EOL . PHP_EOL;

echo ' str_contains() — określa, czy ciąg zawiera dany podciąg.' . PHP_EOL;
echo ' str_contains(string, string): bool' . PHP_EOL;
var_dump(str_contains($str, $pattern));
echo PHP_EOL . PHP_EOL;

echo ' str_ends_with() — Sprawdza, czy ciąg znaków kończy się danym podciągiem.' . PHP_EOL;
echo ' str_ends_with (string, string): bool' . PHP_EOL;
var_dump(str_contains($str, $pattern)) . PHP_EOL . PHP_EOL;
echo PHP_EOL . PHP_EOL;