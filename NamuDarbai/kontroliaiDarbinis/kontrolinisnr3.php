<?php
/**
Sukurti klasę, kuri turi savybę - skaičių sąrašas. Sukurti metodą, kuris sugeneruotų atsitiktinį skaičių intervale nuo 1 iki 100 ir patalpintų į sąrašą, o po to surūšiuotų sąrašą. Sukurti metodą, kuris gražiną sugeneruotų skaičių aritmetitinį vidurkį. Sukurti metodą, kuris išveda masyvo elementus tekstu, kur masyvo elementai atskirti kableliais. Pademonstruoti veikimą.
 */

class MasyvoRedagavimas
{
    public $skaiciusarasas = [];

    function atsitiktinis()
    {
        $this->skaiciusarasas[] = rand(0, 100);
        sort($this->skaiciusarasas);
    }
    function vidurkis()
    {
        $suma = 0;
        foreach ($this->skaiciusarasas as $atsitiktinis){
            $suma +=$atsitiktinis;
        }
        return $suma / count($this->skaiciusarasas);
    }
    function gautiTeksta(){
        return implode(', ', $this->skaiciusarasas);
    }
}

$sarasas = new MasyvoRedagavimas();
$sarasas->atsitiktinis();
$sarasas->atsitiktinis();
$sarasas->atsitiktinis();
$sarasas->atsitiktinis();
$sarasas->atsitiktinis();
$sarasas->atsitiktinis();
$sarasas->atsitiktinis();
echo '<br>';
echo $sarasas->vidurkis();
echo '<br>';
echo $sarasas->gautiTeksta();
echo '<br>';
var_dump($sarasas);



