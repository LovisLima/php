<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Ex4</title>
</head>
<body>
    <h1> Projeto Controle Remoto</h1>
    <pre>
    <?php
        require_once "Controle.php";
        $c = new Controle();
        $c->ligar();
        $c->maisVolume();
        $c->abrirMenu();

    ?>
    </pre>
</body>
</html>
