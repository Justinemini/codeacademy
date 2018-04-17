<?php

class asmuo{
    public $vardas;
    public $pavarde;
    public $pareigos;
function __construct($vr, $pv, $pr){
    $this->vardas = $vr;
    $this->pavarde = $pv;
    $this->pareigos = $pr;
}

    public function getInfo()
    {
        $s = "%s %s yra %s";
        echo sprintf($s, $this->vardas, $this->pavarde, $this->pareigos) . '<br>';
    }
}

$o = new asmuo('Petras', 'Petraitis', 'darbuotojas');
$o->getInfo();
$o = new asmuo('Jonas', 'Jonaitis', 'direktorius');
$o->getInfo();
$o = new asmuo('Antanas', 'Antanaitis', 'slaugytojas');
$o->getInfo();
//Funkcija __construct suveikia tik 1karta, kai kvieciam kintamaji = NEW classname

