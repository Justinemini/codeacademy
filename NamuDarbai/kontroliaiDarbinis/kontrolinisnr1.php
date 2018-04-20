<?php
/**
Sukurti CodeAcademy klasę, kuriose yra savybė - kursų masyvas. Sukurti funkciją, kuri papildytu tą masyvą asociatyviniu kurso masyvu, kurio raktai: data, kiekis, pavadinimas. Sukurti funkciją, kuri išvestų informacija apie kursus lentele.
 */

class kursai
{
    public $kursumasyvas = [];

    function kursuInfo($data, $kiekis, $pavadinimas){
        $this->kursumasyvas[] = [
            'Data' => $data,
            'Kiekis' => $kiekis,
            'Pavadinimas' => $pavadinimas
        ];
    }
    function getInfo(){
        echo '<table>';
        foreach ($this->kursumasyvas as $kursuInfo){
            echo '<tr>';
            echo '<td>' . $kursuInfo['Data'] . '</td>';
            echo '<td>' . $kursuInfo['Kiekis'] . '</td>';
            echo '<td>' . $kursuInfo['Pavadinimas'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
$o = new kursai();
$o->kursuInfo('2018-01-01', '3', 'Kursai1');
$o->kursuInfo('2018-01-02', '5', 'Kursai2');
$o->kursuInfo('2018-01-03', '10', 'Kursai3');
$o->getInfo();


