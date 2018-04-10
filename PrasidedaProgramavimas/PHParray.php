<?php

$m = ['BMW', 'AUDI', 'HONDA'];
var_dump($m);
echo $m[2] . '<br>';
$m[1] = 'Hyundai';
echo $m[1] . '<br>';
var_dump($m);
echo '<br>';
echo '<br>';
echo json_encode($m); //uzkoduota info tekstu galima matyti

$m[] = 'Skoda';
echo '<br>';
var_dump($m);
array_splice($m,2);
echo '<br>';
var_dump($m);
echo '<br>';

echo count($m);



