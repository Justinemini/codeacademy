<?php

class asmuo{
    public $vardas = 'Jonas';
    public $pavarde = 'Jonaitis';
    public $pareigos = 'vadybininkas';

    public function getInfo()
    {
        $s = "%s %s yra %s";
        echo sprintf($s, $this->vardas, $this->pavarde, $this->pareigos);
    }
}

$o = new asmuo();
$o->getInfo();
