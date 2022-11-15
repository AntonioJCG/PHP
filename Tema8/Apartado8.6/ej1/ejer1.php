<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		if (isset($_REQUEST["escribir"])) {
			function escribirTresNumeros($n1,$n2,$n3){
				// $numeros = [$n1,$n2,$n3];
				// $stringNumeros = implode("",$numeros);
				$fp=fopen('datosEjercicio.txt','w');
				fputs($fp,$n1.PHP_EOL);
				fputs($fp,$n2.PHP_EOL);
				fputs($fp,$n3.PHP_EOL);
			}
			
				escribirTresNumeros($_REQUEST['numero1'],$_REQUEST['numero2'],$_REQUEST['numero3']);

		}

	?>
	<form action="ej1.php" method="post">
		Introduce tres números para verlos en un fichero:
		<input type="number" name="numero1" required>
		<input type="number" name="numero2" required>
		<input type="number" name="numero3" required>
		<br><br>
		<input type="submit" value="Escribir en el fichero" name="escribir">
	</form>


</body>
</html>