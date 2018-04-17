<?php

$var1 = "Hello";
$var2 = "hello";
echo strcmp($var1, $var2); //tekstu, be LT simboliu, sulyginimas:
// Returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal

echo '<br>';
echo '<br>';


//spec. simboliai
$s = "<strong>abc</strong>";
//echo $s . '<br';
echo htmlspecialchars($s) . '<br>'; //uzkoduoja simbolius
echo htmlspecialchars_decode($s) . '<br>'; //dekoduoja simbolius

echo '<br>';
echo '<br>';







