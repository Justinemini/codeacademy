<?php

class forma
{
    private $cnn; // duomenu bazes konektorius, padaromas per konstruktorių

    function __construct($srv, $dbn, $uid, $psw)
    { // konstruktorius
        $this->cnn = new PDO("mysql:host={$srv};dbname={$dbn}", $uid, $psw);
        $this->cnn->setAttribute('PDO::ATTR_ERRMODE', 'PDO::ERRMODE_EXCEPTION');
    }

    function add()
    { // papildyti asmenų db lentele
        $res = $this->cnn->prepare("insert into salys (Salies_pav, Sostine, Gyv_skaicius, Tipas) VALUES(:salis, :sostine, :skaicius, :tipas)");

        $res->execute([':salis' => $_POST['salis'], ':sostine' => $_POST['sostine'], ':skaicius' => $_POST['skaicius'], ':tipas' => $_POST['tipas'] ]);
    }

    function info()
    { // asmenų db lenteles atvaizdavimas
        $res = $this->cnn->query("select * from salys order by Gyv_skaicius desc limit 3");
        echo '<table>';
        while ($row = $res->fetch()) {
            echo '<tr>';
            echo '<td>' . $row['salis'] . '</td>';
            echo '<td>' . $row['sostine'] . '</td>';
            echo '<td>' . $row['skaicius'] . '</td>';
            echo '<td>' . $row['tipas'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
try {

    $o = new forma('localhost', 'justine', 'root', 'root'); // susikurti klasės egzempliorių
    $o->add(); // įdėti asmens POST formos duomenis į masyvą (ir išsaugoti faile)
    $o->info();
} // atvaizduoti asmenų sąrašą lentele

catch(PDOException $e) {
    echo ($e->getMessage());
}
echo '<a href="12.2-frontend.html">Atgal</a>';