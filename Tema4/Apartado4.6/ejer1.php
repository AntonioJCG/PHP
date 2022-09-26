<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($_REQUEST['num'])) {
        echo "<meta http-equiv='Refresh' content='2;url=ejer1.html'>";
    }
    ?>
</head>

<body>
    <?php
    if (isset($_REQUEST['palabra'])) {
        if ($_REQUEST['palabra'] == "gollum" || $_REQUEST['palabra'] == "Gollum" || $_REQUEST['palabra'] == "GOLLUM") {
    ?>
            <h1>Correcto</h1>
            <img src="img/gollum.jpg" alt="imagen de Gollum">
        <?php
        } else {
        ?>
            <h1>Lo siento, has fallado. Sigue intentándolo.</h1>
            <a href="ejer1.html">
                <h3>Volver</h3>
            </a>
        <?php
        }
    } else {
        $num = $_REQUEST['num'];
        ?>
        <h1>Adivina la imagen</h1>
        <table border=1 cellspacing=0 cellpadding=0 bordercolor="blue">
            <tr>
                <td><img src="<?php echo ($num == 1) ? "img/1.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
                <td><img src="<?php echo ($num == 2) ? "img/2.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
                <td><img src="<?php echo ($num == 3) ? "img/3.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
            </tr>
            <tr>
                <td><img src="<?php echo ($num == 4) ? "img/4.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
                <td><img src="<?php echo ($num == 5) ? "img/5.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
                <td><img src="<?php echo ($num == 6) ? "img/6.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
            </tr>
            <tr>
                <td><img src="<?php echo ($num == 7) ? "img/7.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
                <td><img src="<?php echo ($num == 8) ? "img/8.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
                <td><img src="<?php echo ($num == 9) ? "img/9.jpg" : "img/oculto.jpg" ?>" width="100px" height="100px"></td>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>