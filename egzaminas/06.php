<!--6. Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus tris parametrus ‐ skaičius,
funkcija turi grąžin
rezultatą ‐ visų paduotų parametrų sumą.
-->
<?php

function f($a, $b, $c){
    return $a + $b + $c;
}

echo f(9,9,9);