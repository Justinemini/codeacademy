<?php

Class Automobilis
{
    public $rida;

    public $maxGreitis;

    public $kuroSanaudos;

    public $marke;

    public function __construct($rida, $maxGreitis, $kuroSanaudos, $marke)
    {
        $this->rida = $rida;
        $this->maxGreitis = $maxGreitis;
        $this->kuroSanaudos = $kuroSanaudos;
        $this->marke = $marke;
    }

    function uzkurtiMasina()
    {
        if ('bmw' === $this->marke) {
            echo 'vroom';
        }

        if ('audi 100' === $this->marke) {
            echo 'iihihihihihihihihihihvooihihihihihihivoom';
        }
    }

    function vaziuoti()
    {
        echo 'voooom';
    }
}

$audi100 = new Automobilis(400000, 100, 10, 'audi 100');
$audi100->uzkurtiMasina();
echo "<hr>";
$bmw = new Automobilis(1000, 300, 5, 'bmw');
$bmw->uzkurtiMasina();