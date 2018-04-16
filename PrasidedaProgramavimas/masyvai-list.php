<?php

$info = ['Coffee', 'brown', 'caffeine'];

// cia tas pats kas:
// $drink = $coffee[0];
//$color = $brown [1];
//$power = $coffeine [1];
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.";
echo '<br>';
echo '<br>';


$m1 = [1, 3, 5, 7, 9];
$m2 = [1, 4, 5, 6, 9];
$m = array_merge(array_diff($m1, $m2)); //array_merge - sumergina indeksa ir is eiles eina indeksas
print_r($m);
echo '<br>';
echo '<br>';


$masyvas = [3,2,1,3,3,4,5,6,4,5];
$masyvas2 = array_merge(array_unique($masyvas));
print_r($masyvas2);
echo '<br>';
echo '<br>';


$mas = ['sintagma', 'BMS', 'traktoristai'];
print_r($mas);
echo '<br>';
shuffle($mas);
print_r($mas);
echo '<br>';
shuffle($mas);
print_r($mas);
echo '<br>';
shuffle($mas);
print_r($mas);
echo '<br>';
echo '<br>';
