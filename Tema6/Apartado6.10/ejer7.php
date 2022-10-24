<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>¿Cuántos años tendrás?</h2>
    <form action="ejer7.php" method="post">
        Fecha de nacimiento: <input type="date" name="nac" required><br>
        Fecha futura: <input type="date" name="ftura" required><br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <?php
    if (isset($_POST['nac']) && isset($_POST['ftura'])) {
        $fechaNac = strtotime($_POST['nac']);
        $fechaFutura = strtotime($_POST['ftura']);
        $tiempoTranscurrido = $fechaFutura - $fechaNac;
        $tiempoTranscurrido = (int)($tiempoTranscurrido / 31557600); //Que es lo mismo que dividir entre 60*60*24*365.25
        $fechaFutura = date("d \d\\e\l m \d\\e\l Y", $fechaFutura);
        echo "<br>El $fechaFutura tendrás $tiempoTranscurrido años";
    }
    ?>
</body>

</html>