<?php

$m1 = [7, 1, 3, 4];
$m2 = [5, 2];

$m = array_merge($m1, $m2);
print_r($m);
echo '<br>';
sort($m);
print_r($m);
echo '<br>';
echo '<br>';


$m3 = [1, 2, 7, 5, 6];
$m4 = [0, 2, 7, 8, 9];
$m5 = array_merge(array_intersect($m3, $m4));
print_r($m5);
echo '<br>';
echo '<br>';
// array_merge is eiles padaro ir eiles numeri masyve (indeksa)

if (in_array(11, $m5))
echo 'yra';
else echo 'nera';
echo '<br>';
echo '<br>';




