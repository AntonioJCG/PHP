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
        <?php
        $n = 1;
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td><a href='ejer6-2.php?num=". $n ."'><img src='img/oculto.jpg' width='100px' height='100px'></a></td>";
                $n++;
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br><br>
    <form action="ejer1.php" method="post">
        <input type="text" name="palabra">
        <input type="submit" value="Comprobar">
    </form>
</body>

</html>