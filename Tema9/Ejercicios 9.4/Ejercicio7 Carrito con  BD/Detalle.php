<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="img/<?=$_SESSION['productos'][$_REQUEST['prod']][2]?>">
<?php 
echo "<h1>".$_REQUEST['prod']."</h1>";
echo "<strong>Precio: </strong>".$_SESSION['productos'][$_REQUEST['prod']][0];
echo "<br><strong>Detalle: </strong>".$_SESSION['productos'][$_REQUEST['prod']][1];
 ?>
 <form action="MeteCarro.php" method="post">
        <input type="hidden" name="prod" value="<?=$_REQUEST['prod']?>">
        <input type="submit" value="Comprar">
    </form>
 <h3><a href="index.php">VOLVER</a></h3>
</body>
</html>