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
    if (!isset($_POST["pedido"])) {
        $pedido = [];
    } else {
        $pedido = unserialize(base64_decode($_POST["pedido"]));
        $pedido[] = $_POST["ingrediente"];
    }

    if (isset($_REQUEST["finalizado"])) {
        
    } else {
        if (isset($_POST["anadir"])) {
            $comida = $_POST["ingrediente"];
            for ($i = 0; $i < count($comida); $i++) {
                if ($i == 0) {
                    echo "$comida[$i] de ";
                } else {
                    if ($i == count($comida) - 1) {
                        echo " $comida[$i].";
                    } else {
                        echo " $comida[$i], ";
                    }
                }
            }
        }
    ?>
        <h2>Realiza tu pedido</h2>
        <form action="ejer2.php" method="get">
            <h3>Pizza</h3>
            <input type="hidden" name="ingrediente[]" value="Pizza">
            <input type="checkbox" name="ingrediente[]" value="atun"> Atún
            <input type="checkbox" name="ingrediente[]" value="jamon"> Jamón
            <input type="checkbox" name="ingrediente[]" value="olivas"> Olivas
            <input type="checkbox" name="ingrediente[]" value="bacon"> Bacon
            <input type="checkbox" name="ingrediente[]" value="peperoni"> Peperoni
            <input type="checkbox" name="ingrediente[]" value="piña"> Piña
            <input type="hidden" name="pedido" value="<?= base64_encode(serialize($pedido)) ?>">
            <br><br><input type="submit" value="Añadir" name="anadir">
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