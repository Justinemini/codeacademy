<?php

error_reporting( E_ALL ); //ijungia klaidu tikrinima
ini_set('display_errors', '1'); //klaidu rodymas (nerekomenduotina prod versijoj)

//TRY - blokas, kuriame gaudomi ivykiai, kuriuose ivyksta klaida
try {
    $cnn = new PDO('mysql:host=localhost;dbname=justine', 'root', 'root');
    // rysys su db atidaromas. PDO yra atitinkama klases rysiui su db

//    $cnn->setAttribute('PDO::ATTR_ERRMODE','PDO::ERRMODE_EXCEPTION');
    //kad veiktu TRY / CATCH blokas

    $res = $cnn->query("delete from AUT WHERE aut_id=6");

        echo 'ok';
}

catch (PDOException $e){ //klaidu sugavimas. Kintamasis $e - bet koks
    echo $e->getMessage(); //getMessage - vienas is fukciju, kad parodyti tekstu errora
}