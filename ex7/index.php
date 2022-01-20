<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Ex6</title>
</head>
<body>
<pre>
<h1> Projeto Animais </h1>

<?php
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Cachorro.php';
    require_once 'Canguru.php';
    require_once 'Tartaruga.php';
    require_once 'Cobra.php ';
    require_once 'Goldfish.php';
    require_once 'Arara.php';

    $m = new Mamifero;
    $r = new Reptil;
    $p = new Peixe;
    $a = new Ave;
    $t = new Tartaruga;
    $c = new Canguru;

    $m->locomover();
    $c->locomover();
    $t->locomover();


?>
</pre>
</body>
</html>
