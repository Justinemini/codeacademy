<!--11. Sukurkite HTML dokumenta su įvedimo formą. Forma turėtu turė
laukus : 2x teksniai
laukai:
Įmonės pavadinimas, Įmonės kodas, 1x radio pasirinkimas: Kliento pas‐
bronzinis, sidabrinis,
auksinis. Forma turėtu bu
nusiųsta į 11uzduos.php
failą metodu POST. 11uzduos.php
faile
pridėkite įrašą į sesiją ir redirecnkite
vartotoją atgal į įvedimo formos html dokumentą.
-->
<?php

session_start();
if (!isset($_SESSION['dviraciai'])) $_SESSION['dviraciai'] = [];
$_SESSION['dviraciai'][] = $_POST;
var_dump($_SESSION);
header('11.html');

echo '<a href="11.html">Atgal</a>';