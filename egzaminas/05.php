<!--5. Sukurkite PHP skriptą, kuriame būtų aprašytas vienmas
masyvas, aprašans
vieną automobilį
naudojant vardinius raktus, pavyzdžiui “Marke” => “Ford”. Masyve turi bū
laukeliai ‐ marke,
modeliai, pagaminimo metai, spalva, galia.
-->
<?php

$m[] = [
    'Makre' => 'Ford',
    'Modelis' => 'Mondeo',
    'Pagaminimo metai' => '2006',
    'Spalva' => 'Zalia',
    'Galia' => '103kW',
];
var_dump($m);
echo '<br>';
