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

    require_once "Mamifero.php";
    require_once "lobo.php";
    require_once "Cachorro.php";
    $c = new Cachorro();
//    $c->reagirFrase("Olá");
//    $c->reagirFrase("Vai Apanhar");
    $c->reagirDono(true);
    $c->reagirDono(false);

    $c->reagirIdade(2, 12.5);
    $c->reagirIdade(17, 4.5);

?>
</pre>
</body>
</html>

