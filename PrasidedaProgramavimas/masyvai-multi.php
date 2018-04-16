<?php

$m = [
    ['vardas'=>'jonas', 'pavarde' => 'jonaitis', 'amzius' => 35],
    ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 40],
    ['vardas' => 'antanas', 'pavarde' => 'antanaitis', 'amzius' => 43]
    ];

echo '<table>';
echo '<tr><th>Vardas</th><th>Pavarde</th><th>Amzius</th>';
for ($i = 0; $i<count($m); $i++){
    echo '<tr>';
    echo '<td>' . $m[$i]['vardas'] . '</td>';
    echo '<td>' . $m[$i]['pavarde'] . '</td>';
    echo '<td>' . $m[$i]['amzius'] . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '<br>';
echo '<br>';


$m2 = [
    [1, 4, 23, 56, 34],
    [33, 47, 27, 78, 46],
    [11, 24, 45, 69, 33],
    [23, 22, 33, 44, 55],
    [77, 88, 99, 26, 8],
];
//var_dump($m);

echo '<table>';
for ($i = 0; $i<count($m2); $i++){
    echo '<tr>';
        for ($j = 0; $j<count($m2[$i]); $j++){
            echo '<td>' . $m2[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<br>';
echo '<br>';


$msort = ['vardas'=>'jonas', 'pavarde' => 'jonaitis', 'amzius' => 35];
sort($msort);
var_dump($msort);
echo '<br>';
asort($msort);
var_dump($msort);
echo '<br>';
ksort($msort);
var_dump($msort);
echo '<br>';
echo '<br>';


$m2sort = [56, 1, 4, 45, 34];
var_dump($m2sort);
echo '<br>';
sort($m2sort);
var_dump($m2sort);
echo '<br>';
rsort($m2sort);
var_dump($m2sort);
echo '<br>';
echo '<br>';


$m3 = [
    ['vardas'=>'jonas', 'pavarde' => 'jonaitis', 'amzius' => 55],
    ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 40],
    ['vardas' => 'antanas', 'pavarde' => 'antanaitis', 'amzius' => 43]
];
print_r($m3);
echo '<br>';

/*usort($m3, function ($a, $b){
   if ($a['amzius'] > $b['amzius']) return 1;
   elseif ($a['amzius'] == $b['amzius']) return 0;
   else return -1;
});
*/
print_r($m3);

