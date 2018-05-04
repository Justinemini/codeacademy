<?php

/**
Tekstinio redaktoriaus pagalba sukurti failą su teleloto skaičiais (5 x 5). Parašyto PHP skriptą, kuris nuskaito failą ir išveda ekrane teleloto lentelę (5 x 5).
 */

$f = fopen('php-file-02.txt', 'r');
$s = fread($f, filesize('php-file-02.txt'));
fclose($f);

$m = json_decode($s);
echo '<table>';
foreach ($m as $row){
    echo '<tr>';
    foreach ($row as $cell){
        echo '<td>'. $cell . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
