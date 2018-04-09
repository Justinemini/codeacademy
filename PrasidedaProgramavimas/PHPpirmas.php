<?php

$abc = 2; // cia yra kintamasis
/* cia yra isvedimas i narsykles langa */
echo $abc . 'xxx' . '<br>';
$b = 5;
echo $b . '<br>';

$c = $abc + $b;
echo $c . '<br>';

$d = $b * $abc;
echo $d . '<br>';

echo $d / 3;
echo '<br>';
echo 10 % 3; /*liekana*/
echo '<br>';
echo 5 ** 2;
echo '<br>';
echo '<br>';

$x = 1;
$x += 2;

echo $x;
echo '<br>';

$x++;
echo $x;
echo '<br>';

$x--;
echo $x;
echo '<br>';

$z = ++$x;
echo $z;
echo '<br>';

echo 1.2e2; /*1,2 padauginta is 10antram laipsny*/
echo '<br>';

echo 1.2e-2 . '<br>'; /*1,2 padauginta is 10antram laipsny*/


echo 'abcdf<br>';
echo "zdfgt<br>"; /*"" galima ivesti atskira simboli*/
echo "\x31zdfgt<br>"; /*gaunasi 1 priekyje*/
echo "\x61zdfgt<br>"; /*gaunasi a raide priekyje*/

$a1 = "labas";
$b1 = "rytas";
echo '<br>';


echo $a1 . " " . $b1 . '<br>';
echo $a1 . " $nbsp $nbsp $nbsp $nbsp " . $b1;


echo '<br>';
echo "xxx=$z";

echo '<br>';
echo "xxx=($z)"; /*figuriniai skliaustai uztikrina reiksme, simbolius*/

echo '<br>';
echo 'xxx=$z';



















