<!--7. Sukurkite PHP skriptą, kuriame būtų aprašytas vienmas
masyvas iš 5 elementų ‐ teksto eilučių.
Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis
raidėmis.
-->
<?php

$m = ['Aaa', 'bbb', 'CCC', 'ddd', 'eee'];
$i = 0;
foreach($m as $tekstas){
    $m[$i++] = strtoupper($tekstas);
}
var_dump($m);