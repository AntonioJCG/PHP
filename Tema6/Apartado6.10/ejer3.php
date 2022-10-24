<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Día de la semana</h2>
    <form action="ejer3.php" method="post">
        Fecha: <input type="date" name="fecha" required>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if (isset($_POST['fecha'])) {
        $diasDeSemana = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
        echo $_POST['fecha'] . "<br>";
        $fecha = date("w", strtotime($_POST['fecha']));
        echo "<br>El día de la semana es $diasDeSemana[$fecha]";
    }
    ?>
</body>

</html>