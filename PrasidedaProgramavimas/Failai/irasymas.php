<?php

$f = fopen('tekstai/tekstas.txt', 'w'); //nurodom kuri faila atidare rasysime jame ('w' rasymo tekste mode)
$s = 'labas rytas'; //nurodom kintamaji ir nurodom ka irasysime
fwrite($f, $s); //kur irasinejame ir ka irasinejame nurodom
fclose($f); //uzdarome irasyta faila ir issaugom atnaujinimus
echo 'ok';