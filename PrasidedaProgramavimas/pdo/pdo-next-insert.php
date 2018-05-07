<?php

error_reporting( E_ALL ); //ijungia klaidu tikrinima
ini_set('display_errors', '1'); //klaidu rodymas (nerekomenduotina prod versijoj)

//TRY - blokas, kuriame gaudomi ivykiai, kuriuose ivyksta klaida
try {
    $cnn = new PDO('mysql:host=localhost;dbname=justine', 'root', 'root');
    // rysys su db atidaromas. PDO yra atitinkama klases rysiui su db

//    $cnn->setAttribute('PDO::ATTR_ERRMODE','PDO::ERRMODE_EXCEPTION');
    //kad veiktu TRY / CATCH blokas

    $res = $cnn->query("insert into AUT (aut_gamintojas, aut_modelis, aut_metai, aut_kaina) VALUES('SKODA', 'octavia', '2010-01-01', 5000)");

        echo 'ok';
}

catch (PDOException $e){ //klaidu sugavimas. Kintamasis $e - bet koks
    echo $e->getMessage(); //getMessage - vienas is fukciju, kad parodyti tekstu errora
}