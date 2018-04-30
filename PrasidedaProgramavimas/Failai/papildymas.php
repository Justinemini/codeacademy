<?php

$f = fopen('tekstai/tekstas.txt', 'a');
$s = 'stai ir as ';
fwrite($f, $s);
fclose($f);
echo 'ok';