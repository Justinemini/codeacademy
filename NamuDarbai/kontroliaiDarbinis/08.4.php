<?php

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “miestas”, kuri turi savybes ‐ pavadinimas, gyventojų skaičius, regionas. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, gyventojų skaičius, regionas ‐ perduotus parametrus padėtų į savo savybes.
*/

class miestas{
    public $pavadinimas;
    public $gyventojusk;
    public $regionas;

    function __construct($pav, $gyvsk, $reg)
    {
        $this->pavadinimas=$pav;
        $this->gyventojusk=$gyvsk;
        $this->regionas=$reg;
    }
    function info(){
        $m = "%s, %s, %s";
        echo sprintf($m, $this->pavadinimas, $this->gyventojusk, $this->regionas . '<br>');
    }
}

$o = new miestas('Kaunas', '129870', '-');
$o->info();

/*
Panaudodami prieš tai sukurtą klasę "miestas", sukurkite klases "didelis" ir "mazas", kurios paveldi "miestas" klasę. "miestas" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, gyventojų skaičius, regionas”. "didelis" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “pavadinimas, gyventojų skaičius, regionas (didelis miestas)”. didelis miestas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/

class didelis extends miestas {
    function info(){
        $m = "%s, %s, %s";
        echo sprintf($m, $this->pavadinimas, $this->gyventojusk, $this->regionas . ' (didelis miestas)' . '<br>');
    }
}
$o = new didelis('Vilnius', '248329058', '-');
$o->info();

class mazas extends miestas{
    function info(){
        $m = "%s, %s, %s";
        echo sprintf($m, $this->pavadinimas, $this->gyventojusk, $this->regionas);
    }
}
$o = new mazas('Klaipeda', '24832', '-');
$o->info();