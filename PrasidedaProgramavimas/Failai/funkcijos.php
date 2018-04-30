<?php

//basename
echo basename('tekstai/tekstas.txt' . '<br>');

//copy
echo copy('tekstai/tekstas.txt', 'tekstai/tekstas-copy.txt');
echo 'failas nukopijuotas' . '<br>';

//rename
rename('tekstai/tekstas-copy.txt', 'tekstai/tekstas-renamed.txt');
echo 'Pervadintas';

