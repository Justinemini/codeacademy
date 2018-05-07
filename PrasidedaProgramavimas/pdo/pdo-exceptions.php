<?php

error_reporting( E_ALL ); //ijungia klaidu tikrinima
ini_set('display_errors', '1'); //klaidu rodymas (nerekomenduotina prod versijoj)

try { //blokas, kuriame gaudomi ivykiai, kuriuose ivyksta klaida
    $cnn = new PDO('mysql:host=codeacademy.test;dbname=justine', 'root', 'root'); // rysys su db atidaromas. PDO yra atitinkama klases rysiui su db

    $cnn->setAttribute('PDO::ATTR_ERRMODE', 'PDO::ERRMODE_EXCEPTION'); //kad veiktu TRY / CATCH blokas

    $res = $cnn->query("select aut_gamintojas as g, aut_modelis as m, aut_metai as mm, aut_kaina as k  from aut order by aut_kaina");

    while ($row = $res->fetch()){ //FETCH metodas paima is lenteles po eilute duomenis
        echo $row['g'] . ' ' . $row['m']  . ' ' . $row['mm'] . ' ' . $row['k'] . '<br>';
    }
}

catch (PDOException $e){ //klaidu sugavimas. Kintamasis $e - bet koks
    echo $e->getMessage(); //getMessage - vienas is fukciju, kad parodyti tekstu errora
}