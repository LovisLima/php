<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula02POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1 -> modelo = "faber castel";
        $c1 -> cor = "azul";
//        $c1 -> ponta = 0.5;
//        $c1 -> carga = 99;
//        $c1 -> tampada = true;

        $c1 -> rabiscar();
        $c1 -> destampar();

        print_r($c1);
        echo"<br/>";

//        $c2 = new Caneta;
//        $c2 -> modelo = "bic cristal";
//
//        print_r($c2)


    ?>
    </pre>
</body>
</html>
