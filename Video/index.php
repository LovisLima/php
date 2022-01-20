<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Ex9</title>
</head>
<body>
<pre>
<h1> Projeto Video</h1>


<?php
    require_once 'Video.php';
    require_once 'Visualizacao.php';
    require_once 'Aluno.php';
    $v[0] = new Video ("Aula 1 de POO");
    $v[1] = new Video ("Aula12 de PHP");
    $v[2] = new Video ("Aula 13 de HTML");

    $a[0] = new Aluno("Olegario", "32", "M", "blabla" );


    $vis[0] = new Visualizacao($a[0] , $v[2]); // Olegario assisti Html5
    $vis[1] = new Visualizacao($a[0] , $v[1]); // Olegario assisti PHP

    $vis[0] -> avaliar();
    $vis[1] -> avaliarPorc(85);

    print_r($vis);
?>
</pre>
</body>
</html>
