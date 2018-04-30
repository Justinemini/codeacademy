<?php


//NEBAIGTA

class forma {
    private $fn;
function __construct($fn)
{
    $this->fn = $fn;
}
    function add($fn)
    {
        if (file_exists($this->fn)) {
            $f = fopen($this->fn, 'r');
            $s = fread($f, filesize($this->fn));
            $m = json_encode($s);
            fclose($f);
        } else $m = [];
        $m = $_POST;

        $f = fopen($this->fn, 'a');
        fwrite($f, json_encode($m));
        fclose($f);

        function info()
        {
            if (file_exists($this->fn)) {
                $f = fopen($this->fn, 'r');
                $s = fread($f, filesize($this->fn));
                $m = json_encode($m);
                fclose($f);
            }
        }
    if ()
        echo '<table>';
        foreach ($_SESSION['skaitliukas'] as $asmuo) {
            echo '<tr>';
            echo '<td>' . $asmuo['vardas'] . '</td>';
            echo '<td>' . $asmuo['lytis'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        //echo '<a href="frontend-post-session.html">Atgal</a>';
//padarem mygtuka ATGAL, kuris ale nukreips i musu duombaze
    }
}

$o = new forma();
$o->add();
$o->info();
echo '<a href="frontend-post-session.html">Atgal</a>';