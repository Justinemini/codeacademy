<?php

echo md5('labas') . '<br>';
echo md5('Jonas Jonaitis') . '<br>';
echo md5('39876574839292') . '<br>';
echo '<br>';

echo uniqid() . '<br>';
echo uniqid() . '<br>';
echo uniqid() . '<br>';
echo '<br>';

//pagal DATE
date_default_timezone_set("Europe/Vilnius");
$s = date('Y m d H:m:s');
echo $s . '<br>';
$s = date('m d Y H:m:s');
echo $s . '<br>';
$s = date('Y');
echo $s . '<br>';

