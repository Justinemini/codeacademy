<?php

$a = 2;
$b = 5;
$e = 1;
$d = 2;
$c = $a +=$b +=$e +=$d;
echo $c . '<br>';

$c = sqrt($c);
echo $c . '<br>';


$asmuo = [
    'vardas' => 'Robertas',
    'lytis' => 'vyras',
    'amzius' => 28,
    'svoris' => 79
];
var_dump($asmuo);
echo '<br>';
print_r($asmuo);
echo '<br>';


$skaiciai = [
    'metai' => 34,
    'mobilusis' => 867584757,
    'amzius' => 28,
    'svoris' => 79,
    'atlyginimas' => 800
];
foreach ($skaiciai as $raktas => $skaicius) {
    if ($skaicius % 2) {
        $skaiciai[$raktas] = 0;
    }
}
print_r($skaiciai);
echo '<br>';

$suma = 0;
$kiekis = 0;
$skaiciumasyvas = [1, 10, 11, 12, 13];
foreach ($skaiciumasyvas as $skaicius) {
    if ($skaicius % 2 ==0) {
        $suma += $skaicius;
        $kiekis++;
    }
}
echo "suma: " . $suma . "<br>";
echo "kiekis: " . $kiekis . "<br>";
echo $suma/$kiekis;


