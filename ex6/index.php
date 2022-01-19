<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Ex6</title>
</head>
<body>

<h1> Projeto Aulas </h1>

<?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome("Pedro");
    $p2->setNome("Maria");
    $p3->setNome("Claudio");
    $p4->setNome("Mariana");



    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
?>

</body>
</html>
