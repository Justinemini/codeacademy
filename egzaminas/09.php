<!--9. Panaudodami prieš tai sukurtą klasę person, sukurkite klases staff ir client, kurios paveldi person
klasę. Person klasę papildykite metodu “asmendDuomenys”, kuris išvestų suformatuotą eilutę
“Vardas Pavardė (amžius)”. Staff klasėje perrašykite metodą asmensDuomenys, pakeisdami
išvedamą eilutę į “Pavardė Vardas, darbuotojas”. Darbuotojas ‐ esiog
paprastas žodis.
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

    function asmensDuomenys(){
        $s = "%s %s (%s)";
        echo sprintf($s, $this->name, $this->surname, $this->age) . '<br>';
    }
}

$s = new person('Vardas', 'Pavarde', 28);
$s->asmensDuomenys();

class staff extends person{
    function asmensDuomenys(){
        $s = "%s %s, darbuotojas";
        echo sprintf($s, $this->name, $this->surname) . '<br>';
    }
}
$s = new staff('Vaidas', 'Baumila', 25);
$s->asmensDuomenys();

class client extends person{

}
$s = new client('Vidas', 'Vaidinas', 24);
$s->asmensDuomenys();
