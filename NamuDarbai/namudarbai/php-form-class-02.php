<?php

/**
Sukurti GET formą, kuri leistų įvesti automobilio duomenis: gamintojas, modelis, kuro rūšis (iš sąrašo), daužta/nedaužta (radio), metai, kaina. Sukurti formos backend, kuris priimtų formos duomenis ir įrašytų į masyvą, kuris yra sesijoje. Išvesti visus sesijoje esančio masyvo duomenis apie automobilius lentele. Įdėti nuorodą į formą, kad būtų galima grižti ir įvesti naują automobilį. Backend suprogramuoti naudojant class.
 */

session_start();
//$_SESSION['automobilis'][] = $_GET;
//print_r($_SESSION);

class auto
{
    function add()
    {
        $_SESSION['automobilis'][] = $_GET;
    }
}
class forma extends auto {
    function info()
    {
        echo '<table>';
        foreach ($_SESSION['automobilis'] as $data) {
            echo '<tr>';
            echo '<td>' . $data['gamintojas'] . '</td>';
            echo '<td>' . $data['modelis'] . '</td>';
            echo '<td>' . $data['kuroTipas'] . '</td>';
            echo '<td>' . $data['bukle'] . '</td>';
            echo '<td>' . $data['metai'] . '</td>';
            echo '<td>' . $data['kaina'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new forma();
$o->add();
$o->info();
echo '<a href="automobilis-get.html">Atgal</a>';