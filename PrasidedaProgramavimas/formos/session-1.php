<?php

session_start();
if (isset($_SESSION['skaitliukas'])) $_SESSION['skaitliukas']++;
else $_SESSION['skaitliukas'] = 0;
echo $_SESSION['skaitliukas'];

//pirmoji sesija skirta sukti skaitliukui, o 'session-2.php' skirtas perziureti kitame faile (sitame 'session-1.php') sukama skaitliuka