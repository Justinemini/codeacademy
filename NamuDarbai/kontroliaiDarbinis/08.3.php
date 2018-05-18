<?php

/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “preke”, kuri turi savybes ‐ kodas, pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ kodas, pavadinimas, kaina padėtų į savo savybes.
*/

class preke
{
    public $kodas;
    public $pavadinimas;
    public $kaina;

    function __construct($k, $p, $kai)
    {
$this->kodas=$k;
$this->pavadinimas=$p;
$this->kaina=$kai;
    }

    function info(){
        $s = "%s %s %s";
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina  . '<br>');
    }
}

/*
Panaudodami prieš tai sukurtą klasę "preke", sukurkite klases "vaikams" ir "studentams", kurios paveldi "preke" klasę. "preke" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “kodas, pavadinimas kaina”. "vaikams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (vaikams)”. vaikams‐ tiesiog paprastas žodis. "studentams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (studentams)”. studentams‐ tiesiog paprastas žodis. "vaikams" ir "studentams" klasių metodas info turi turėti parametrą "nuolaida" (procentais), kurio pagalba būtų perskaičiuojama prekės kaina išvedimo metu. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/

class vaikams extends preke {
    function info($m){
        $this->kaina = $this->kaina - ($this->kaina * ($m / 100));
        $s = "%s %s %s";
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina . ' (vaikams)'  . '<br>');
    }
}



class studentams extends preke {
    function info($m){
        $s = "%s %s %s";
        $this->kaina = $this->kaina - ($this->kaina * ($m / 100));
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina . ' (studentams)'  . '<br>');
    }
}

$o = new preke('01', 'Kelnes', '100.99');
$o->info();
$o = new vaikams('01', 'Kelnes', '100.99');
$o->info('10');
$o = new studentams('02', 'Maike', '100.99');
$o->info('20');