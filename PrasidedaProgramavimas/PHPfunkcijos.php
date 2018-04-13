<?php

function funkcijosPavadinimas($skaicius){
    echo $skaicius ** 2;
}
funkcijosPavadinimas(5);
echo '<br>';
funkcijosPavadinimas(6);
echo '<br>';
funkcijosPavadinimas(10);

echo '<br>';
echo '<br>';

function daug($a, $b){
    return $a * $b;
}

echo daug(2,2);
echo '<br>';
$x = daug(5, 6);
echo $x;
echo '<br>';

$x = 3; $y = 4;
echo daug($x, $y);
echo '<br>';

$x = 7; $y = 5;
echo daug($x, $y);
echo '<br>';
unset($x);
echo $x;
echo '<br>';
echo '<br>';

function dar($a, $b){
    return $a * $b;
}

//anonimine funkcija ($daugas iskeltas):

$daugas = function ($a, $b) {
    return $a * $b;
};
echo $daugas (2, 3);
echo '<br>';


function daugas($a, $b = 2){
    return $a * $b;
}
echo $daugas (2, 3);
echo '<br>';
echo daugas();