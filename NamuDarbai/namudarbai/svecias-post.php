<?php

session_start();
$_SESSION [] = $POST;

class svecias
{
    function add()
    {
        $_SESSION['svecias'][] = $_POST;
    }
}

$o = new svecias();
$o->add();
print_r($_SESSION['svecias']);
echo '<a href="svecias.html">Atgal</a>';