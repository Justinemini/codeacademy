<?php

$tekstas = 'lABas ryTas kauNas vEl rytAs';
$m = explode(' ',$tekstas);
print_r($m);
echo '<br>';

//pirmas budas padaryt zodziams didziasias
for ($i = 0; $i<count($m); $i++){
    $e = $m[$i];
    $e = strtolower($e);
    $e = ucfirst($e);
    $m[$i] = $e;
    $m[$i] = ucfirst(strtolower($m[$i]));
}

//nesigavo:
//$a2 = array_map(function($e){
//return ucfirst(strtolower($e));
//}, $m);
print_r($m);
echo '<br>';
echo '<br>';

$tekstas2 = implode(', ', $m);
print_r($tekstas2);
echo '<br>';
echo '<br>';












