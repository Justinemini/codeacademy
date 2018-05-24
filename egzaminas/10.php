<!--10. Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐
$numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į
masyvą sąvybę $numbers. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje
esančių elementų matemanį
vidurkį.
-->
<?php

class numberList{
    public $numbers = [];

    function add($number){
        $this->numbers[] = $number;
    }

    function average(){
        $suma = 0;
        foreach ($this->numbers as $skaicius){
            $suma+= $skaicius;
        }
        return $suma / count($this->numbers);
    }
}

$x = new numberList();
$x->add(5);
$x->add(1);
$x->add(6);
echo $x->average();