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
        $res = $this->cnn->prepare("insert into aaa (aaa_vardas, aaa_lytis) VALUES(:vardas, :lytis)");

        $res->execute([':vardas' => $_POST['vardas'], ':lytis' => $_POST['lytis']]);
    }


    function info()
    { // asmenų db lenteles atvaizdavimas
        $res = $this->cnn->query("select * from aaa order by aaa_id");
        echo '<table>';
        while ($row = $res->fetch()) {
                echo '<tr>';
                echo '<td>' . $row['aaa_vardas'] . '</td>';
                echo '<td>' . $row['aaa_lytis'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
}
try {

    $o = new forma('localhost', 'justine', 'root', 'root'); // susikurti klasės egzempliorių
    $o->add(); // įdėti asmens POST formos duomenis į masyvą (ir išsaugoti faile)
    $o->info();} // atvaizduoti asmenų sąrašą lentele

catch(PDOException $e) {
        var_dump($e->getMessage());
}
echo '<a href="frontend-post-db.html">Atgal</a>';