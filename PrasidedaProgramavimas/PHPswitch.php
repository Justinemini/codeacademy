<?php

$favcolor = "blue";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        //break;

    case "green1": echo 'papildomai';
    case "green2":
    case "green3":
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
//BREAK; skirtas nebevykdyti tolimesnes paieskos
//jei nebutu default reiksmes, tai tuscias langas

