<?php

$m = [1,2,3,4,5,6,7,8,9];
    function getNo($m){
        return $m[rand(0,count($m)-1)];
    }
echo getNo($m);
echo '<br>';
echo '<br>';


$n = [1,2,3,4,5,6,7,8,9];
$n1 = [2,22,33,44,4,8,9,45,99];
function unique($n, $n1){
    $n2 = array_merge($n, $n1);
    $n3 = array_unique($n2);
    sort($n3);
    var_dump($n2);
};





