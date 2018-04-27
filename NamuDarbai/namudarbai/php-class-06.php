<?php


/**
Sukurkite klasę su prekių sąrašu. Sukurkite metodą, kurio pagalba galima patalpintį į sąrašą duomenis apie prekes: pavadinimas, kaina, kiekis. Sukurkite metodą, kuris gražina prekių sąrašą su 3 pigiausiomis prekėmis. Pademonstruokite veikimą.
 */

class prekiuSarasas{
    public $prekes = [];

    function sukeltiPrekes($pavadinimas, $kaina, $kiekis){
        $this->prekes[] = [
            'Pavadinimas' => $pavadinimas,
            'Kaina' => $kaina,
            'Kiekis' => $kiekis
        ];
        usort($this->prekes, function ($a, $b){
            if ($a['Kaina']>$b['Kaina']) return 1;
            elseif ($a['Kaina']<$b['Kaina']) return -1;
            else return 0;
        }
        );
    }

    function pigiausiosPrekes()
    {
        $m[] = 0;
        $kaina = 10000;
        for ($i = 0; $i < count($this->prekes) && $i < 3; $i++) {
            $m = $this->prekes[$i];
        }
            return $m;
    }

}

$o = new prekiuSarasas();
$o->sukeltiPrekes('KnK1', 100.01, '1 vnt');
$o->sukeltiPrekes('KnK2', 100, '2 vnt');
$o->sukeltiPrekes('KnK3', 200.39, '3 vnt');
$o->sukeltiPrekes('KnK4', 200.22, '4 vnt');
$rez = $o->pigiausiosPrekes();
print_r($rez);
