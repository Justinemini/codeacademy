<?php
/**
Sukurti klasę "imone" su savybėmis: "pavadinimas", "adresas", "telefonas", "pastas", "darbuotojai". Sukurti konstruktorių, kuris patalpina duomenis į savybes "pavadinimas", "adresas", "telefonas", "pastas". Sukurti metodą, kuris patalpina į savybę "darbuotojai" (sąrašą) darbuotojo duomenis: "vardas", "pavarde", "pareigos", "atlyginimas". Sukurti metodą, kuris išveda informaciją apie įmonę: pavadinimas, adresas, telefonas. el. paštas, darbuotojų skaičius. Sukurti metodą, kuris išveda darbuotojų sąrašą. Pademonstruoti veikimą.
 */
class Imone
{
    public $pavadinimas;
    public $adresas;
    public $telefonas;
    public $pastas;
    public $darbuotojai = [];

    function __construct($pavadinimas, $adresas, $telefonas, $pastas)
    {
        $this->pavadinimas = $pavadinimas;
        $this->adresas = $adresas;
        $this->telefonas = $telefonas;
        $this->pastas = $pastas;
    }

    function itrauktiDarbuotoja($vardas, $pavarde, $pareigos, $atlyginimas){
       $this->darbuotojai[] = [
           'Vardas' => $vardas,
           'Pavarde' => $pavarde,
           'Pareigos' => $pareigos,
           'Atlyginimas' => $atlyginimas
       ];
    }

    function gautiImonesInfo(){
        $s = "%s %s %s %s %s";
        echo sprintf($s, $this->pavadinimas, $this->adresas, $this->telefonas, $this->pastas, count($this->darbuotojai));
    }

    function gautiDarbuotojus(){
        foreach ($this->darbuotojai as $darbuotojas){
            echo $darbuotojas['Vardas'] . ' ';
            echo $darbuotojas['Pavarde'] . ' ';
            echo $darbuotojas['Pareigos'] . ' ';
            echo $darbuotojas['Atlyginimas'] . '<br>';
        }

    }
}

$o = new Imone('UAB Tiras', 'Veiveriu g. 10', 864511111111, 'info@info.lt');
$o->itrauktiDarbuotoja('Jonas', 'Jonaitis', 'Vadovas', 1000);
$o->itrauktiDarbuotoja('Jonas2', 'Jonaitis2', 'Vadovas2', 1000);
$o->itrauktiDarbuotoja('Jonas3', 'Jonaitis3', 'Vadovas3', 1000);
$o->itrauktiDarbuotoja('Jonas4', 'Jonaitis4', 'Vadovas4', 1000);
$o->gautiImonesInfo();
echo '<br>';
$o->gautiDarbuotojus();
print_r($o->darbuotojai);




/**
Sukurti klasę darbuotojai, kurioje yra savybė skirta darbuotojų sąrašui saugoti. Sukurti metodą, kurio pagalba galima patalpinti darbuotojo duomenis į sąrašą: asmens kodas, pavarde ir vardas, pareigos, atlyginimas. Sukurti metodą, kurio pagalba galima būtų pašalinti darbuotojo duomenis iš sąrašo pagal asmens kodą. Pademonstruoti veikimą.
 */



/**
Sukurti klasę, kurioje yra įmonės akcininkų sąrašas. Sukurti metodą, kurio pagalba galima į sąrašą įvesti įmonės akcininkų duomenis: vardas, pavardė, akcijų skaičius. Akcininkų sąrašą surūšiuoti pagal turimų akcijų skaičių mažėjančia tvarka. Sukurti metodą, kuris išvestu akcininikų sąrašą: vardas, pavardė, turimų akcijų kiekis procentais nuo visų akcijų skaičiaus. Pademonstruoti veikimą.
 */