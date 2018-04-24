<?php

/*
Padaryti klasę personalas. Sukurti funkciją persona. Parametrai: a) vardas, b) pavardė, c) lytis. Funkcija turi patalpinti personos duomenis kaip asociatyvinį masyvą į klasės savybę darbuotojai (paprastas masyvas). Sukurti funkciją kiekMoteru kuri gražina personalo moterų skaiciu. Sukurti funkciją kiekVyru kuri gražina personalo vyrų skaičių.
*/


class personalas{

    public $darbuotojai = [];


    function persona($vardas, $pavarde, $lytis){
        $this->darbuotojai[]=[
            'Vardas' => $vardas,
            'Pavarde' => $pavarde,
            'Lytis' => $lytis
        ];
        }

        function kiekMoteru()
        {
            $kiekis = 0;
            foreach ($this->darbuotojai as $zmogus) {
                if ($zmogus['Lytis'] == 'MOTERIS') $kiekis++;
            }
            return $kiekis;
        }

        function kiekVyru()
        {
            $kiekis = 0;
            foreach ($this->darbuotojai as $zmogus) {
                if ($zmogus['Lytis'] == 'VYRAS') $kiekis++;

                return $kiekis;
            }
        }}

$o = new personalas();
$o->persona('Jonas', 'Jonaitis', 'VYRAS');
$o->persona('Anele', 'Anelyte', 'MOTERIS');
$o->persona('Jonas', 'Jonaitis', 'VYRAS');
$o->persona('Jonas', 'Jonaitis', 'VYRAS');
print_r($o);
echo '<br>';
echo 'Moteru yra: ' . $o->kiekMoteru() . '<br>';
echo 'Vyru yra: ' . $o->kiekVyru() . '<br>';
