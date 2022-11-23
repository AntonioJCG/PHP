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
    include_once 'Empleado.php';

    $empleado1 = new Empleado('Antonio', 2000);
    $empleado2 = new Empleado('Daniel', 1800);
    $empleado3 = new Empleado('Fran', 3500);

    $empleados = [$empleado1, $empleado2, $empleado3];

    foreach ($empleados as $e) {
        echo $e->__toString();
    }

    $empleados[0]->asigna('Antonio', 3450);
    echo "<br>";

    foreach ($empleados as $e) {
        echo $e->__toString();
    }

    echo "<br>";
    foreach ($empleados as $e) {
        echo $e->impuestos();
    }    
    ?>
</body>

</html>