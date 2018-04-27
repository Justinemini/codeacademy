<?php

//sesija issaugo pries tai siustus duomenis tol, kol uzdarai narsykle

session_start();
$_SESSION['sarasas'][] = $_POST;
//var_dump($_SESSION);

//session_unset();  //nerodo sesijos kintamuju
//session_destroy(); //sunaikinam sesija

echo '<table>';
foreach ($_SESSION['skaitliukas'] as $asmuo) {
    echo '<tr>';
    echo '<td>' . $asmuo['vardas'] . '</td>';
    echo '<td>' . $asmuo['lytis'] . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '<a href="frontend-post-session.html">Atgal</a>'; //padarem mygtuka, kuris ale nukreips i musu duombaze