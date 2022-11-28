<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once 'Cubo.php';

    $cubo1 = new Cubo("Cubo 1", 10, 4);
    $cubo2 = new Cubo("Cubo 2", 5, 3);

    echo $cubo1->__toString();
    echo $cubo2->__toString();

    echo "El cubo 1 vierte 3 litros en el cubo 2.<br>";
    echo $cubo1->verter(3, $cubo2);

    echo $cubo1->__toString();
    echo $cubo2->__toString();

    echo "El cubo 2 vierte 5 litros en el cubo 1.<br>";
    echo $cubo2->verter(5, $cubo1);

    echo $cubo1->__toString();
    echo $cubo2->__toString();

    echo "El cubo 2 vierte 2 litros en el cubo 1.<br>";
    echo $cubo2->verter(2, $cubo1);

    echo $cubo1->__toString();
    echo $cubo2->__toString();
    ?>
</body>

</html>