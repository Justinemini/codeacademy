<?php

global $a;
$a = 5;

function fnc() {
    global $a;
    echo $a  . '<br>' . '<br>';
}

fnc ();


//global $a;
$a = 5;

function fnc1() {
    static $a = 0;
    $a++;
    echo $a . '<br>';
}

fnc1();
fnc1();
fnc1();
fnc1();
echo '<br>';

define('c', 55);
echo c;
//c++;
echo '<br>';

echo $_SERVER['HTTP_HOST'];
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';
echo $_SERVER['SERVER_ADDR'];
echo '<br>';
echo $_SERVER["DOCUMENT_ROOT"];



