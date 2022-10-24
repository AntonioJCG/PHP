<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Siguiente día de la semana</h2>
    <form action="ejer5.php" method="post">
        Día de la semana: <input type="text" name="dia" required>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if (isset($_POST['dia'])) {
        $dias = ["lunes" => "Monday", "martes" => "Tuesday", "miercoles" => "Wednesday", "jueves" => "Thursday", "viernes" => "Friday", "sábado" => "Saturday", "domingo" => "Sunday"];
        $dia = strtolower($_POST['dia']);
        if (array_key_exists($dia, $dias)) {
            $fecha =  date("d/m/Y", strtotime("next $dias[$dia]"));
            echo "<br>El próximo dia de la semana que cae en $dia es: $fecha";
        } else {
            echo "<font color=\"red\">El dia de la semana introducido es incorrecto, prueba de nuevo.</font>";
        }
    }
    ?>
</body>

</html>