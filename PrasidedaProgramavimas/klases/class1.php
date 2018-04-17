<?php

class asmuo {
 public $vardas = 'Jonas';
 public $pavarde = 'Jonaitis';
 private $atlyginimas = 1000;
}

$o = new asmuo();
print_r($o);
echo '<br>';
echo $o->vardas . ' ' . $o->pavarde;
echo '<br>';
//neduoda, nes PRIVATE:
//echo $o->atlyginimas


