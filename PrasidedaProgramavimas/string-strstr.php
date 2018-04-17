<?php

$s = "labas rytas";
echo strstr($s, 'bas') . '<br>';

//nurodo pozicija masyve:
echo strpos($s, 'bas') . '<br>';
echo strpos($s, 'rytas') . '<br>';
echo strpos($s, 'l') . '<br>';
echo '<br>';


$string = "This is\tan example\nstring";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}
echo '<br>';
echo '<br>';


$s1 = " labas ";
echo "'" . trim($s1) . "'<br>";
echo "'" . ltrim($s1) . "'<br>";
echo "'" . rtrim($s1) . "'<br>";
echo '<br>';

$x = "Ąžuolas";
echo strlen($x); //simboliu skaicius - 9 - neteisinga, nes LT simboliai is dvieju bytes, o ne is vieno
echo '<br>';
//simboliu skaicius teisingas, nes lt simboliai is dvieju bytes (8+8 bitai):
echo mb_strlen($x, 'utf-8');
echo '<br>';
echo '<br>';






