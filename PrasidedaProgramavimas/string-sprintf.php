<?php

$a = "%s yra %s studentas <br>"; //turi istatyt i sablona reiksmes:

echo sprintf($a, 'Jonas', 'KTU');
echo sprintf($a, 'Petras', 'VDU');
echo sprintf($a, 'Antanas', 'Codeacademy');

for ($i = 0; $i<20; $i++){
//echo $i . '<br>';
//echo sprintf("%02d", $i) . '<br>';
echo sprintf("%03d", $i) . '<br>';
}