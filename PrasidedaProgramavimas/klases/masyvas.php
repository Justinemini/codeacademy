<?php

class Imone {
    public $pavadinimas;
    public $kodas;
    private $sarasas = [];
    function __construct($p, $k)
    {
        $this->pavadinimas = $p;
        $this->kodas = $k;
    }
    function darbuotojas($vardas, $pavarde, $par){
        $this->sarasas[] = [
            'vardas' => $vardas,
            'pavarde' => $pavarde,
            'par' => $par
        ];
    }
    function getInfo(){
        echo $this->pavadinimas . ' (' . $this->kodas . ')<br>';
        echo '<table>';
        foreach ($this->sarasas as $darbuotojas){
        echo '<tr>';
        echo '<td>' . $darbuotojas['vardas'] . '</td>';
        echo '<td>' . $darbuotojas['pavarde'] . '</td>';
        echo '<td>' . $darbuotojas['par'] . '</td>';
        echo '</tr>';
        }
            echo '</table>';
    }
}
$o = new Imone('CodeAcademy', '111222333');
$o->darbuotojas('Jonas', 'Jonaitis', 'direktorius');
$o->darbuotojas('Petras', 'Petraitis', 'direktorius2');
$o->darbuotojas('Antanas', 'Antanaitis', 'direktorius3');
$o->getInfo();

