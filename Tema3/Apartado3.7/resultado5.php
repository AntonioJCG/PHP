<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>El tiempo que tarda en llenarse es:
        <?php
        $caudal = $_GET['caudal'];
        $altura = $_GET['altura'];
        $diamentro = $_GET['diametro'];
        $radio = $diamentro / 2;
        $volumen = M_PI * pow($radio, 2) * $altura;
        $litros = $volumen * 1000;
        $tiempo = $litros / $caudal;
        echo round($tiempo, 2);
        ?> minutos.
    </h3>
    <img src="https://www.caracteristicass.de/wp-content/uploads/2018/06/caracteristicas-del-cilindro.jpg" alt="">
</body>

</html>