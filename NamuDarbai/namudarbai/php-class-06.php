<?php


/**
Sukurkite klasę su prekių sąrašu. Sukurkite metodą, kurio pagalba galima patalpintį į sąrašą duomenis apie prekes: pavadinimas, kaina, kiekis. Sukurkite metodą, kuris gražina prekių sąrašą su 3 pigiausiomis prekėmis. Pademonstruokite veikimą.
 */

class prekiuSarasas{
    public $prekes = [];

    function sukeltiPrekes($pavadinimas, $kaina, $kiekis){
        $prekes[] = [
            'Pavadinimas' => $pavadinimas,
            'Kaina' => $kaina,
            'Kiekis' => $kiekis
        ];
    }

    function pigiausiosPrekes(){
        $kaina = 10000;
        foreach ($this->prekes as $pigiausia) {
            if ($pigiausia['Kaina'] == $kaina < $kaina) $kaina++;
        }
        return $kaina;
    }
}

$o = new prekiuSarasas();
$o->sukeltiPrekes('KnK1', 200, '1 vnt');
$o->sukeltiPrekes('KnK2', 100, '2 vnt');
$o->sukeltiPrekes('KnK3', 200.39, '3 vnt');
$o->sukeltiPrekes('KnK4', 200.22, '4 vnt');
$o->pigiausiosPrekes();
print_r($);//nebaigta