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
echo '<br>';echo '<br>';echo '<br>';




/**
Sukurti klasę darbuotojai, kurioje yra savybė skirta darbuotojų sąrašui saugoti. Sukurti metodą, kurio pagalba galima patalpinti darbuotojo duomenis į sąrašą: asmens kodas, pavarde ir vardas, pareigos, atlyginimas. Sukurti metodą, kurio pagalba galima būtų pašalinti darbuotojo duomenis iš sąrašo pagal asmens kodą. Pademonstruoti veikimą.
 */
class darbuotojai
{
    public $darbuotojai = [];

    function itrauktiDarbuotoja($asmensKodas, $pavarde, $vardas, $pareigos, $atlyginimas)
    {
        $this->darbuotojai[$asmensKodas] = [
            'asmens kodas' => $asmensKodas,
            'Pavarde' => $pavarde,
            'Vardas' => $vardas,
            'Pareigos' => $pareigos,
            'Atlyginimas' => $atlyginimas
        ];
    }

    function pasalintiDarbuotoja($asmensKodas){
        unset($this->darbuotojai[$asmensKodas]);
    }
}
$darbuotojai = new darbuotojai();
$darbuotojai->itrauktiDarbuotoja(411111111111, 'Rasiene', 'Rasa', 'vadove', 1000);
$darbuotojai->itrauktiDarbuotoja(4111111111112, 'Rasiene2', 'Dana', 'vadove2', 1000);
$darbuotojai->itrauktiDarbuotoja(4111111111113, 'Rasiene3', 'Diana', 'vadove3', 1000);
$darbuotojai->itrauktiDarbuotoja(4111111111114, 'Rasiene4', 'Simona', 'vadove4', 1000);
print_r($darbuotojai->darbuotojai);
echo '<br>';
$darbuotojai->pasalintiDarbuotoja('4111111111113');
print_r($darbuotojai->darbuotojai);
echo '<br>';echo '<br>';echo '<br>';

/**
Sukurti klasę, kurioje yra įmonės akcininkų sąrašas. Sukurti metodą, kurio pagalba galima į sąrašą įvesti įmonės akcininkų duomenis: vardas, pavardė, akcijų skaičius. Akcininkų sąrašą surūšiuoti pagal turimų akcijų skaičių mažėjančia tvarka. Sukurti metodą, kuris išvestu akcininikų sąrašą: vardas, pavardė, turimų akcijų kiekis procentais nuo visų akcijų skaičiaus. Pademonstruoti veikimą.
 */

class ImonesAkcininkai
{
    public $akcininkai = [];

    function itrauktiAkcininkus($vardas, $pavarde, $akcijuSkaicius)
    {
        $this->akcininkai[] = [

            'vardas' => $vardas,
            'pavarde' => $pavarde,
            'akcijuSkaicius' => $akcijuSkaicius
        ];
    usort($this->akcininkai, function ($a, $b) {
        if ($a['akcijuSkaicius'] > $b['akcijuSkaicius']) return -1;
        elseif ($a['akcijuSkaicius'] < $b['akcijuSkaicius']) return 1;
        else 0;
    });
    }
function info(){
        $sum = 0;
        foreach ($this->akcininkai as $akcininkas){
            $sum+=$akcininkas['akcijuSkaicius'];
        }
echo '<table>';
    foreach ($this->akcininkai as $akcininkas) {
        echo '<tr>';
        echo '<td>' . $akcininkas['vardas'] . '</td>';
        echo '<td>' . $akcininkas['pavarde'] . '</td>';
        echo '<td>' . round(($akcininkas['akcijuSkaicius'] / $sum) * 100, 1) . '% </td>';
        echo '</tr>';
    }
        echo '</table>';
    }
}

$akcininkai = new ImonesAkcininkai();
$akcininkai->itrauktiAkcininkus('Jonas', 'Jonaitis', '5');
$akcininkai->itrauktiAkcininkus('Petras', 'Petraitis', '5');
$akcininkai->itrauktiAkcininkus('Asta', 'Astaite', '1');
$akcininkai->itrauktiAkcininkus('Paulina', 'Paulyte', '50');
print_r($akcininkai->akcininkai);
$akcininkai->info();

