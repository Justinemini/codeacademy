<?php

/**
Sukurti skaičių masyvą, paversti masyvą tekstu, sujungiant elementus kableliu ir įrašyti į failą. Su teksto redaktoriumi papildyti failo turinį keletu naujų skaičių. Parašyti PHP skriptą, kuris nuskaito pakeistą failą, atstato iš jo masyvą. Išvesti masyvo turinį su var_dump.
 */

$m = [1, 4, 7, 11, 23, 55];

$s = implode(',', $m);

$f = fopen('php-file-01.txt', 'w');
fwrite($f, $s);

fclose($f);

echo 'ok';