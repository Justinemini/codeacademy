<?php

error_reporting( E_ALL );
ini_set('display_errors', '1');

try {
    $cnn = new PDO('mysql:host=localhost;dbname=justine', 'root', 'root');

    $res = $cnn->prepare("insert into AUT (aut_gamintojas, aut_modelis, aut_metai, aut_kaina) VALUES(:gam, :mod, :met, :kaina)");

    $res = $res->execute([':gam'=> 'SKODA', ':mod'=> 'Octavia', ':met'=> '2010-01-01', ':kaina'=> 5000]);

        echo 'ok';
}

catch (PDOException $e){
    echo $e->getMessage();
}