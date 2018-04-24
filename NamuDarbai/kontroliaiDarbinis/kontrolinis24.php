<?php

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes.
*/

class codeAcademy{
    public $data;
    public $skaicius;
    public $auditorija;
    function __construct($dt, $sk, $aud)
    {
        $this->data=$dt;
        $this->skaicius=$sk;
        $this->auditorija=$aud;
    }
    function kursas(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija) . '<br>';
    }
}
$o = new codeAcademy('2018-09-09', '3', '203');
$o->kursas();
/*
Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend, kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “kursas” veikimą.
*/

class backend extends codeAcademy {
    function kursas(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija) . ' ' . 'backend kursas' . '<br>';
    }
}
$o = new backend('2018-09-10', '5', '203');
$o->kursas();

class frontend extends codeAcademy{
    function kursas(){
        $s = "%s, %s, %s";
        echo sprintf($s, $this->data, $this->skaicius, $this->auditorija . ' ' . 'frontend kusas') . '<br>';
    }
}
$o = new frontend('2018-09-11', '3', '203');
$o->kursas();
