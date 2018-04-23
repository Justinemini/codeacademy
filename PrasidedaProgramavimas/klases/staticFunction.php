<?php

class a{
    static function y(){
        return 'labas<br>';
    }
    static public function f(){
       //echo a::y();   //jeigu viduje klases - galim trumpiau rasyti: SELF vietoj klases pavadinimo
        echo self::y();
    }
}
a::f();
