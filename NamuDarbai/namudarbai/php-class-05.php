<?php

/**
Sukurkite a klasę su savybe - masyvu. Sukurkite metdą, su kuriuo būtų galima patalpinti į masyvą atsitiktini skaičių intervale nuo 1 iki 100. Sukurkite metodą, kuris suskaičiuoja ir gražina nelyginių skaičių kiekį masyve. Sukurkite b klasę, kuri paveldi a klasę ir joje sukurkite metodą, kuris suskaičiuoja ir gražina lyginių skaičių kiekį. Sukurkite b klasės egzempliorių ir pademonstrukokite visų 3 metodų veikimą.
 *
 */
class a{
    public $masyvas = [];

    public function patalpintiSkaicius(){
        $this->masyvas[] = rand(1, 100) . '<br>';
        $this->masyvas[] = rand(1, 100) . '<br>';
        $this->masyvas[] = rand(1, 100) . '<br>';
        $this->masyvas[] = rand(1, 100) . '<br>';
    }

    public function nelyginiaiSkaiciai(){
        $kiekis = 0;
        for ($i = 0; $i <count($this->masyvas); $i++) {
            if ($this->masyvas[$i] % 2 != 0) {
                $kiekis++;
            }
        }
        return $kiekis;
    }
}
//$o = new a();
//$o->patalpintiSkaicius();
//print_r('Nelyginiu skaiciu yra: ' . $o->nelyginiaiSkaiciai());
//echo '<br>';echo '<br>';

class b extends a{

    public function lyginiaiSkaiciai(){
        $kiekis = 0;
        for ($i = 0; $i <count($this->masyvas); $i++) {
            if ($this->masyvas[$i] % 2 ===0){
                $kiekis++;
            }
        }
        return $kiekis;
    }
}

$o = new b();
$o->patalpintiSkaicius();
print_r('Lyginiu skaiciu yra: ' . $o->lyginiaiSkaiciai());
print_r('Nelyginiu skaiciu yra: ' . $o->nelyginiaiSkaiciai());
echo '<br>';echo '<br>';
print_r($o->masyvas);


