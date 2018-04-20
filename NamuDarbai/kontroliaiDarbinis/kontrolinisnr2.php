<?php
/**
Sukurti klasę svečiai. Klaseje turi būti savybė - svečių sąrašas. Sukurti klasės metodą, su kuriuo būtų galima papildyti svečių sąrašą. Informacija apie svečią: vardas, lytis, patiekalas, amžius. Sukurti klasės metodą svečių sąrašui suformuoti.
 */

class Sveciai
{
    public $sveciusarasas = [];

    function sarasas($vardas, $lytis, $patiekalas, $amzius){
        $this->sveciusarasas[] = [
            'Vardas' => $vardas,
            'Lytis' => $lytis,
            'Patiekalas' => $patiekalas,
            'Amazius' => $amzius
        ];
}
function getInfo(){
        echo '<table>';
    foreach ($this->sveciusarasas as $sarasas) {
        echo '<tr>';
        echo '<td>' . $sarasas['Vardas'] . '</td>';
        echo '<td>' . $sarasas['Lytis'] . '</td>';
        echo '<td>' . $sarasas['Patiekalas'] . '</td>';
        echo '<td>' . $sarasas['Amzius'] . '</td>';
        }
        echo '</table>';
}
}
$o = new sveciai();
$o->sarasas('Antanas', 'vyras', 'Karbonadas', '34');
$o->sarasas('Jolanta', 'moteris', 'Cepelinai', '33');
$o->sarasas('Jonas', 'vyras', 'Varskeciai', '32');
$o->sarasas('Ramunas', 'vyras', 'Cepelinai', '30');
$o->getInfo();
