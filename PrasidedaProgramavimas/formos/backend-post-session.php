<?php

//sesija issaugo pries tai siustus duomenis tol, kol uzdarai narsykle

session_start();
$_SESSION['sarasas'][] = $_POST;
var_dump($_SESSION);

session_unset();  //nerodo sesijos kintamuju
session_destroy(); //sunaikinam sesija

