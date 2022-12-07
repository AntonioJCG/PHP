<?php 
	include_once 'Zona.php';
	if (session_status() == PHP_SESSION_NONE) session_start();
	if (!isset($_SESSION['zonas'])) {
		$_SESSION['zonas'][]=new Zona('principal',1000, 20);
		$_SESSION['zonas'][]=new Zona('compra-venta',200, 35);
		$_SESSION['zonas'][]=new Zona('vip',25, 50);
	}
	if (isset($_POST['numEntradas']) && isset($_POST['zona'])){
		$zona=$_SESSION['zonas'][$_POST['zona']];
		$accion = $zona->venderEntradas($_POST['numEntradas']);
		// $zona y el arrary de zonas apuntan al mismo objeto
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<style type="text/css">
			table {
				border-spacing: 0;
			}
			table, th, td {
				border: 1px solid black;
			}
			td, th {
				text-align: center;
				min-width: 50px;
				min-height: 50px;
			}
			fieldset {
				display: inline-block;
			}
			div#correcto {
				border: solid 2px green;
				background-color: honeydew;
				color: darkgreen;
				margin-top: 5px;
				padding: 15px;
			}
			div#incorrecto {
				border: solid 2px red;
				background-color: mistyrose;
				color: darkred;
				margin-top: 5px;
				padding: 15px;
			}
			div[id$=correcto] {
				animation-name: desaparecer;
				animation-delay: 3s;
				animation-duration: 1s;
				animation-fill-mode: forwards;
			}
			@keyframes desaparecer {
				0% {opacity: 1;}
				100% {opacity: 0;}
			}
		</style>
	</head>
	<body>
		<h1>Expocoches Campanillas</h1>
		<table>
			<tr>
				<th>Zona</th>
			<?php foreach ($_SESSION['zonas'] as $zona){ 
					echo "<td>".$zona->getNombre()."</td>";
			 } ?>
			</tr>
			<tr>
				<th>Entradas Disponibles</th>
			<?php foreach ($_SESSION['zonas'] as $zona){ 
					echo "<td>".$zona->getentradasDisponibles()."</td>";
			 } ?>
			</tr>
			<tr>
				<th>Precio/Entrada</th>
			<?php foreach ($_SESSION['zonas'] as $zona){ 
					echo "<td>".$zona->getPrecioEntrada()."€</td>";
			 } ?>	
			</tr>
		</table>
		<form action="Prueba.php" method="post">
			<fieldset>
			<legend><h3>Venta de entradas</h3></legend>
			Zona: 
			<select name="zona">
			<?php
				for ($i=0; $i < count($_SESSION['zonas']); $i++) { 
					echo "<option value='".$i."'>".$_SESSION['zonas'][$i]->getNombre()."</option>";
				}
			 ?>
			</select><br>
			Numero de entradas: <input type="number" name="numEntradas" min="1" required><br>
			<input type="submit" value="Comprar entradas">
			<?php 
				if (isset($accion)) {
					echo "<br>";
					if ($accion) { ?>
						<div id="correcto">
							Venta realizada correctamente.
						</div>
					<?php } else { ?>
						<div id="incorrecto">
							No hay suficientes entradas en esa zona intentelo de nuevo.
						</div>
					<?php }
				}
				echo "<h3>Ingreso total por ventas: ".Zona::getIngreso()." €</h3>";
			 ?>
			</fieldset>
		</form>
	</body>
</html>