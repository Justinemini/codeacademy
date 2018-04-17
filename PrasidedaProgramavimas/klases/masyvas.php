<?php

class Imone {
    public $pavadinimas;
    private $sarasas = [];
    function __construct($p)
    {
        $this->pavadinimas = $p;
    }
    function darbuotojas($vardas, $pavarde, $par){
        $this->sarasas[] = [
            'vardas' => $vardas,
            'pavarde' => $pavarde,
            'par' => $par
        ];
    }
    function getInfo(){
        echo $this->pavadinimas . '<br>';
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
$o = new Imone('CodeAcademy');
$o->darbuotojas('Jonas', 'Jonaitis', 'direktorius');
$o->darbuotojas('Petras', 'Petraitis', 'direktorius2');
$o->darbuotojas('Antanas', 'Antanaitis', 'direktorius3');
$o->getInfo();
