<?php

function getNo(){
    static $n = 0; //STATIC zodis duoda is eiles reiksmes
    $n++;
    return $n;
}
echo getNo();
echo '<br>';
echo getNo();
echo '<br>';
echo getNo();
echo '<br>';
echo getNo();
echo '<br>';
echo getNo();
echo '<br>';
echo getNo();
echo '<br>';

