<?php

$m = [1, 2, 6, 8, 0];

$suma = 0;
foreach ($m as $sk){
    $suma += $sk;
    // tas pats kas $suma = $suma + $sk
}
echo $suma / count($m);
echo '<br>';



$m = [1, 2, 6, 8, 0];

$min = $m [0];
foreach ($m as $sk){
    if($sk < $min) $min = $sk;
}
echo $min;
echo '<br>';


$m = [1, 2, 6, 8, 0];

$max = $m [0];
foreach ($m as $sk){
    if($sk > $max) $max = $sk;
}
echo $max;
echo '<br>';

