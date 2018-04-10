<?php

$m = [
    'gamintojas' => 'Honda',
    'modelis' => 'civic',
    'metai' => 2005,
    'kaina' => 2000
];

var_dump($m);
echo $m['metai'];
echo '<br>';
$m['spalva'] = ['raudona'];
var_dump($m);
echo '<br>';

$m['kaina'] = 3000;
var_dump($m);
echo '<br>';

unset($m ['metai']);
var_dump($m);
echo '<br>';

echo count($m);
