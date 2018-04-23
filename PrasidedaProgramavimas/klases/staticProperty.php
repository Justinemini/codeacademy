<?php

class a {
    static $id = 0;
    //function __construct()   identiskai irgi:
    function a(){
        self::$id++;
    }
function getid(){
        echo self::$id . '<br>';
}
}
$o = new a();
$o->getid();
$o = new a();
$o->getid();
echo '<br>';
echo '<br>';
echo '<br>';


class b {
    public $id = 0;
    //function __construct()   identiskai irgi:
    function a(){
        $this->id++;
    }
    function getid(){
        echo $this->id++ . '<br>';
    }
}
$o = new b();
$o->getid();
$o = new b();
$o->getid();