<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <link rel="StyleSheet" href="estilo/estilos.css" type="text/css">
      <title>
        Tienda de informatica
      </title>
    </meta>
</head>
<body>
<form action="grabaProducto.php" method="post" enctype="multipart/form-data">
	<h3>Producto: </h3><input type="text" name="nombre">
	<br><h3>Precio: </h3><input type="text" name="precio">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
	<br><br>IMAGEN: <input name="imagen" type="file" />
	<br><br><input type="submit" name="aceptar" value="Aceptar">
</form>
<h2><a href="Carrito.php">Cerrar</a></h2>
</body>
</html>