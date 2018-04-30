<?php

$f = fopen('tekstai/tekstas.txt', 'r');
$s = fread($f, filesize('tekstai/tekstas.txt'));
fclose($f);
echo $s;