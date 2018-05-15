<?php

/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti studento egzaminų rezultatus: vardas, fizika, matematika, programavimas (dšimtbalėje sistemoje). Sukurti metodą, kuris gražina visus egzaminus išlaikiusių studentų sąrašą (egzaminas yra išlaikytas, jeigu rezultatas yra >= 5. Sukurti metodą, kuris gražina egzaminų laikymo vidurkį. Pademonstruoti veikimą.
 */

class sarasas
{
    public $sarasas = [];

    function studentas($vardas, $fizika, $matematika, $programavimas)
    {
        $this->sarasas[] = [
            'Vardas' => $vardas,
            'Fizika' => $fizika,
            'Matematika' => $matematika,
            'Programavimas' => $programavimas,
        ];
    }

    function islaike()
    {
        $x = [];
        foreach ($this->sarasas as $islaike) {
            if ($islaike['Fizika'] >= 5 && $islaike['Matematika'] >= 5 && $islaike['Programavimas'] >= 5) $x[] = $islaike['Vardas'];
        }
        return $x();
    }

    function vidurkis(){
        $suma=0;
        $kiekis=0;
        foreach ($this->sarasas as $a){
            $suma+= $a['Fizika']+$a['Matematika']+$a['Programavimas'];
            $kiekis++;
        }
        return $suma / ($kiekis*3);
    }
}

$o = new sarasas();
$o->studentas('Vidas', 10, 10, 10);
$o->studentas('Kestas', 2, 2, 2);
$o->studentas('Antanas', 10, 4, 10);
$o->studentas('Valdas', 10, 5, 10);
var_dump($o);

$y = $o->islaike();
var_dump($y);

$x = $o->vidurkis();
echo "Vidurkis: $x";