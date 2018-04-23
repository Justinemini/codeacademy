<?php

class a {
    function __construct()
    {
        echo 'suveike konstruktorius<br>';
    }
    function __destruct()
    {
        echo 'suveike destruktorius<br>';
    }
}
$o = new a();
echo 'veikia programa1<br>';
unset($o);
echo 'veikia programa2<br>';
echo 'veikia programa3<br>';