<?php session_start();
if (!isset($_SESSION['colores'])) {
	header("location:ejer1.php");
}
if (isset($_REQUEST['fondo'])) {
	$fondo = $_REQUEST['fondo'];
} else {
	$fondo = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body style="background-color:<?= $fondo ?>;">
	<table>
		<tr>
			<?php
			$cont = 0;
			foreach ($_SESSION['colores'] as $color) {
			?>
				<td style="background-color: <?= $color ?>;width:20px;height:20px">
					<a href='paleta.php?fondo=<?= $color ?>'>
						<div style="width:20px;height:20px"></div>
					</a>
				</td>
			<?php
				$cont++;
				if ($cont % 5 == 0) {
					echo "</tr><tr>";
				}
			}
			?>
		</tr>
	</table>
	<br>
	<form action="ejer1.php" method="post">
		<input type="submit" name="volver" value="Añadir mas colores">
	</form>
	<br>
	<form action="ejer1.php" method="post">
		<input type="submit" name="cerrarSesion" value="Crear nueva paleta">
	</form>
</body>

</html>