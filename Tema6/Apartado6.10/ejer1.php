<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Elegir formatos de fechas</h2>
    <form action="ejer1.php" method="post">
        Día: <input type="number" name="dia" required><br>
        Mes: <input type="number" name="mes" required><br>
        Año: <input type="number" name="anio" required><br>
        Elije el formato:
        <select name="formato">
            <option value="d/m/Y">DD/MM/AAAA</option>
            <option value="d/m/y">DD/MM/AA</option>
            <option value="j/n/y">D/M/AA</option>
            <option value="d-m-Y">DD-MM-AAAA</option>
            <option value="d-m-y">DD-MM-AA</option>
            <option value="j-n-y">D-M-AA</option>
            <option value="\D\i\a: d \M\e\s: m \A\ñ\o: Y">Dia: DD Mes: MM Año: AAAA</option>
            <option value="\D\i\a: d \M\e\s: m \A\ñ\o: y">Dia: DD Mes: MM Año: AA</option>
            <option value="\D\i\a: n \M\e\s: j \A\ñ\o: y">Dia: D Mes: M Año: AA</option>
            <option value="l, F d, Y ">Escrito en inglés</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if (isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['anio']) && isset($_POST['formato'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        if (checkdate($mes, $dia, $anio)) {
            $formato = $_POST['formato'];
            $fecha = date($formato, strtotime("$dia-$mes-$anio"));
            echo "$fecha";
        } else {
            echo "<font color=\"red\">La fecha no es correcta, prueba de nuevo.</font>";
        }
    }
    ?>
</body>

</html>