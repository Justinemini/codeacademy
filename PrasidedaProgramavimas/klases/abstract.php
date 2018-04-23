<?php

abstract class a{
    abstract function f();
}
//$o = new a();      KLAIDA
class  b extends a{ // jeigu funkcijos nenorim rasyt - 'abstract function' turi nebuti
function f(){   //jeigu ABTRACT clase ar funkcija - butina nurodyt funkcija
    echo 'ok';
}
}

$o = new b();
$o->f();
