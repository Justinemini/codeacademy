<?php
class a {
    public $m = [1,2,3,4,5,6];
    public function __toString()    //funkcija, kuri pavercia i teksta
    {
        //return json_encode($this->m);      //funkcija, kuri pavercia i teksta
        return implode(', ', $this->m);    //funkcija, kuri pavercia i teksta
    }
}
$o = new a();
echo $o;
