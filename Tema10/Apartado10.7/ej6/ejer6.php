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
    include_once 'Bicicleta.php';
    include_once 'Coche.php';

    $miBici = new Bicicleta("15");

    $miCoche = new Coche(1500);

    $miBici->recorre(20);
    $miCoche->recorre(100);
    echo $miBici->hazCaballito() . "<br>";
    echo $miCoche->quemaRueda() . "<br>";
    $miBici->recorre(40);
    echo "Mi bici ha recorrido " . $miBici->getKmRecorridos() . " km<br>";
    echo "Mi coche ha recorrido " . $miCoche->getKmRecorridos() . " km<br>";
    echo "Se han creado un total de " . Vehiculo::getVehiculosCreados() . " vehículos<br>";
    echo "Todos los vehículos han hecho un total de " . Vehiculo::getKmTotales() . " km<br>";
    ?>
</body>

</html>