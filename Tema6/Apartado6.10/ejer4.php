<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Fecha en español</h2>
    <form action="ejer4.php" method="post">
        Fecha: <input type="date" name="fecha" required>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if (isset($_POST['fecha'])) {
        $meses = ["", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        $dia = date("j", strtotime($_POST['fecha']));
        $mes = date("n", strtotime($_POST['fecha']));
        $anio = date("Y", strtotime($_POST['fecha']));
        echo "<br>La fecha introducida es: $dia de $meses[$mes] de $anio";
    }
    ?>
</body>

</html>