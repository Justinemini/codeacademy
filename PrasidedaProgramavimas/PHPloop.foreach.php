<?php

$m = [1, 4, 3, 7, 11];

foreach ($m as $item) {
    echo $item . ' ';
}
echo '<br>';

$n = ['Gamintojas' => 'Honda', 'modelis' => 'civic', 'metai' => 2005];
foreach ($n as $item) {
echo $item. ' ';
}
echo '<br>';

foreach ($n as $key => $value){
    echo $key. ' ';
}

echo '<br>';

foreach ($n as $key => $value){
    echo $key. ': '.$value. ' ';
}