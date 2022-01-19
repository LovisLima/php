<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Ex5</title>
</head>
<body>

<h1> Projeto UEC </h1>

    <pre><?php
    require_once 'Lutador.php';
    require_once 'Luta.php';
    $l = array();
    $l[0] = new Lutador("Pretty boy", "França", 30, 1.75, 68.9, 11,2,1);
    $l[1] = new Lutador("Putzcript", "Brasil", 26, 1.70,65.0,13,1,1, 2);
    $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12,2,1);
    $l[3] = new Lutador("Dead Code", "Australia", 29, 1.93, 81.6,13,0,2);
    $l[4] = new Lutador("Ufocobol","Brasil", 37, 1.70, 119.3, 5,4,3);
    $l[5] = new Lutador("Nerdaart","Eua",30,1.81,105.7,12,2,4);

    $UEC01 = new Luta();
    $UEC01 ->marcarLuta($l[4],$l[5]);
    $UEC01 ->lutar();

    $l[4]->status();
    $l[5]->status();







    ?></pre>

</body>
</html>
