<?php

/*
Padaryti klasę automobiliai. Sukurti funkciją automobilis. Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km). Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas). Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį. Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
*/


class Automobiliai{

    public $auto = [];

    function automobilis($gamintojas, $modelis, $kuras, $kuroSanaudos){
        $this->auto[]=[
        'gamintojas' => $gamintojas,
        'modelis' => $modelis,
        'kuras' => $kuras,
        '10' => $kuroSanaudos
        ];
    }

    ///PABAIGTI ir PHPstorm
}
