<?php

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobilis”, kuri turi savybes ‐ gamintojas, modelis, metai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ gamintojas, modelis, metai ‐ perduotus parametrus padėtų į savo savybes.
*/

class automobilis
{
    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($gam, $mod, $met)
    {
        $this->gamintojas = $gam;
        $this->modelis = $mod;
        $this->metai = $met;
    }
}


/*
Panaudodami prieš tai sukurtą klasę automobilis, sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klasę. automobilis klasę papildykite metodu “duomenys”, kuris išvestų suformatuotą eilutę “gamintojas - modelis - metai”. lengvasis klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “gamintojas, modelis, metai (lengvasis automobilis)”. lengvasis automobilis ‐ tiesiog paprastas žodis.
*/

class lengvasis extends automobilis {
    function duomenys(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai . ' ' . 'lengvasis automobilis' . '<br>');
    }
}
$o = new lengvasis('BMW', 'e30', '2009');
$o->duomenys();
$o = new lengvasis('AUDI', '100', '1992');
$o->duomenys();
$o = new lengvasis('SKODA', 'br','2004');
$o->duomenys();


class krovininis extends automobilis{

}
