<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Ex6</title>
</head>
<body>
<pre>
<h1> Projeto Aulas </h1>

<?php
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';
    require_once  'Visitante.php';
    require_once  'Bolsista.php';

//    $v1 = new Visitante();
//    $v1 -> setNome("Juvenal");
//    $v1 -> setIdade(33);
//    $v1 -> setSexo("M");

//    $a1 = new Aluno();
//    $a1 -> setNome("Pedro");
//    $a1 -> setMatr(1111);
//    $a1 -> setIdade(16);
//    $a1 -> setSexo("M");
//    $a1->SetCurso("Informatica");
//    $a1->PagarMensalidade();

    $b1 = new Bolsista();
    $b1-> setMatr(11112);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12,5);
    $b1->setCurso("Administração");
    $b1->setIdade(17);
    $b1->pagarMensalidade();

    print_r($b1);




?>
</pre>
</body>
</html>
