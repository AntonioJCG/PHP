<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Adivina la imagen</h1>
    <table border=1 cellspacing=0 cellpadding=0 bordercolor="blue">
        <tr>
            <td><a href="ejer3-2.php?num=1"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
            <td><a href="ejer3-2.php?num=2"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
            <td><a href="ejer3-2.php?num=3"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
        </tr>
        <tr>
            <td><a href="ejer3-2.php?num=4"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
            <td><a href="ejer3-2.php?num=5"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
            <td><a href="ejer3-2.php?num=6"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
        </tr>
        <tr>
            <td><a href="ejer3-2.php?num=7"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
            <td><a href="ejer3-2.php?num=8"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
            <td><a href="ejer3-2.php?num=9"><img src="img/oculto.jpg" width="100px" height="100px"></a></td>
        </tr>
    </table>
    <br>
    <?php
    $intentos = 0;
    if (isset($_REQUEST['intentos'])) {
        $intentos = $_REQUEST['intentos'];
    }
    echo "<h3>Llevas ". $intentos ." intentos.</h3>";
    ?>
    <br>
    <form action="ejer3-2.php" method="post">
        <input type="text" name="palabra">
        <input type="submit" value="Comprobar">
    </form>
</body>

</html>