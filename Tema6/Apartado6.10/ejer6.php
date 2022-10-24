<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Introduce unos días, meses y años y se mostrará el día de la semana pasado ese tiempo.</h4>
    <form action="ejer6.php" method="post">
        Dias: <input type="number" name="dia" required><br>
        Meses: <input type="number" name="mes" required><br>
        Años: <input type="number" name="anio" required><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if (isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['anio'])) {
        $dias = $_POST['dia'];
        $meses = $_POST['mes'];
        $anios = $_POST['anio'];
        $fecha = date("d-m-Y");
        echo "<br>Fecha actual: $fecha";
        $fechaFutura = strtotime($fecha . "+ $dias days + $meses month + $anios year");
        $fecha = date("d/m/Y", $fechaFutura);
        echo "<br>Fecha futura: $fecha";
        $diasDeSemana = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
        $num = date("w", $fechaFutura);
        echo "<br>El dia de la semana caerá en $diasDeSemana[$num]";
    }
    ?>
</body>

</html>