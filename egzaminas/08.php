<!--8. Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “person”, kuri turi savybes ‐ name, surname,
age. Sukurkite standarnį
klasės __construct metodą, kuriam perdavus tris parametrus ‐ name,
surname ir age ‐ perduotus parametrus padėtų į savo savybes.
-->
<?php

class person{
    public $name;
    public $surname;
    public $age;

    function __construct($n, $s, $a)
    {
        $this->name=$n;
        $this->surname=$s;
        $this->age=$a;
    }
}

$s = new person('Vardas', 'Pavarde', 28);
var_dump($s);