<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pedidoArray = [];
    $pedido = base64_encode(serialize($pedidoArray));
    if (isset($_REQUEST["finalizado"])) {
    } else {
        if (isset($_REQUEST['pedido'])) {
            $aux = unserialize(base64_decode($_REQUEST['pedido']));
            $ingredientes = [$_REQUEST];
            array_push($aux, $ingredientes);
            foreach ($aux as $comida) {
                 for ($i = 1; $i < count($comida) - 1; $i++) {
                    echo $comida[$i];
                 }
            }
            $pedido = base64_encode(serialize($aux));
            echo $pedido;
        }

    ?>
        <h2>Realiza tu pedido</h2>
        <form action="ejer2.php" method="get">
            <h3>Pizza</h3>
            <input type="hidden" name="0" value="Pizza">
            <input type="checkbox" name="1" value="atun"> Atún
            <input type="checkbox" name="2" value="jamon"> Jamón
            <input type="checkbox" name="3" value="olivas"> Olivas
            <input type="checkbox" name="4" value="bacon"> Bacon
            <input type="checkbox" name="5" value="peperoni"> Peperoni
            <input type="checkbox" name="6" value="piña"> Piña
            <input type="hidden" name="pedido" value="<?= $pedido ?>">
            <br><br><input type="submit" value="Añadir">
        </form>
        <form action="ejer2.php" method="post">
            <h3>Hamburguesa</h3>
            <input type="checkbox" name="lechuga"> Lechuga
            <input type="checkbox" name="tomate"> Tomate
            <input type="checkbox" name="queso"> Queso
            <input type="checkbox" name="bacon"> Bacon
            <input type="checkbox" name="pepinillo"> Pepinillo
            <input type="checkbox" name="cebolla"> Cebolla
            <br><br><input type="submit" value="Añadir">
        </form>
        <form action="ejer2.php" method="post">
            <h3>Perrito caliente</h3>
            <input type="checkbox" name="lechuga"> Lechuga
            <input type="checkbox" name="cebolla"> Cebolla
            <input type="checkbox" name="ketchup"> Ketchup
            <input type="checkbox" name="mostaza"> Mostaza
            <br><br><input type="submit" value="Añadir">
        </form>
        <form action="ejer2.php" method="post">
            <br><br><input type="submit" name="finalizado" value="Finalizar pedido">
            <input type="hidden" name="pedidoTotal" value="<?= $pedidoTotal ?>">
        </form>
    <?php
    }
    ?>
</body>

</html>