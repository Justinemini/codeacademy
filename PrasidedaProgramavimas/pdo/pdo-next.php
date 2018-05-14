<?php

try {


$cnn = new PDO('mysql:host=localhost;dbname=justine', 'root', 'root'); // rysys su db atidaromas
$res = $cnn->query("select aut_gamintojas as g, aut_modelis as m, aut_metai as mm, aut_kaina as k  from aut order by aut_kaina");
while ($row = $res->fetch()){
    echo $row['g'] . ' ' . $row['m']  . ' ' . $row['mm'] . ' ' . $row['k'] . '<br>';
}
}
catch (PDOException $e) {
    var_dump($e->getMessage());
}
