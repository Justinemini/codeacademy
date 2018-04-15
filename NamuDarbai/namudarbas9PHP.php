<?php

$m = ['laba', 'diena', 'su', 'vistiena', 'siandien', 'gera', 'diena', 'programuotoju', 'diena', 'desimt', 'venuolika'];

$trumpiausias = '';
$zodzioIlgis = 1000;
for ($i = 0; $i < count($m); $i++) {
    if (strlen($m[$i]) < $zodzioIlgis) {
        $trumpiausias = $m[$i];
        $zodzioIlgis = strlen($m[$i]);
    }
}
echo 'Trumpiausias zodis: ' . $trumpiausias;
echo '<br>';
echo '<br>';


$m2 = ['laba', 'diena', 'su', 'vistiena', 'siandien', 'gera', 'diena', 'programuotoju', 'diena', 'desimt', 'venuolika', 'antanas'];

$simbolisa = '';
$ieskom = 'a';
$naujasmasyvas = [];
for ($i = 0; $i <count($m2); $i++){
    if (strpos($m2[$i], $ieskom) !==false) {
        $naujasmasyvas[] = $m2[$i];
    }
}
var_dump($naujasmasyvas);
echo '<br>';
echo '<br>';


$m3 = [];
$i = 0;
while ($i < 10){
    $m3[] = rand(0, 100);
    $i++;
}

$maziausias = 101;
foreach ($m3 as $skaicius) {
    if ($skaicius % 2 !=0 && $skaicius < $maziausias){
       $maziausias = $skaicius;
    }
}
print_r($m3);
echo '<br>';
var_dump('Maziausias nelyginis skaicius: ' . $maziausias);
echo '<br>';
echo '<br>';



$skaiciumasyvas = [1, 10, 11, 12, 13];
foreach ($skaiciumasyvas as $key => $skaicius1) {
    if ($skaicius1 % 2 !=0){
        unset($skaiciumasyvas[$key]);
    }
}
print_r($skaiciumasyvas);
echo '<br>';
echo '<br>';
