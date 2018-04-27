<?php

//sesija issaugo pries tai siustus duomenis tol, kol uzdarai narsykle

session_start();
$_SESSION['sarasas'][] = $_POST;
//var_dump($_SESSION);

//session_unset();  //nerodo sesijos kintamuju
//session_destroy(); //sunaikinam sesija


class preforma
{
    function add()
    {
        $_SESSION['sarasas'][] = $_POST;
    }
}
class forma extends preforma {
    function info()
    {
        echo '<table>';
        foreach ($_SESSION['skaitliukas'] as $asmuo) {
            echo '<tr>';
            echo '<td>' . $asmuo['vardas'] . '</td>';
            echo '<td>' . $asmuo['lytis'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        //echo '<a href="frontend-post-session.html">Atgal</a>';
//padarem mygtuka ATGAL, kuris ale nukreips i musu duombaze
    }
}

$o = new forma();
$o->add();
$o->info();
echo '<a href="frontend-post-session.html">Atgal</a>';