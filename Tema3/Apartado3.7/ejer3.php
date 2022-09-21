<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h3>Configura tu web:</h3>
    <form action="resultado3.php" method="get">
        Color de fondo: 
        <select name="color" id="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select><br><br>
        Tipo de letra: 
        <select name="tipoLetra" id="tipoLetra">
            <option value="Arial">Arial</option>
            <option value="Roboto">Roboto</option>
            <option value="Times New Roman">Times New Roman</option>
        </select><br><br>
        Alineación de texto: 
        <select name="alineacion" id="alineacion">
            <option value="left">Izquierda</option>
            <option value="right">Derecha</option>
            <option value="center">Centrado</option>
        </select><br><br>
        Imagen: 
        <select name="img" id="img">
            <option value="gato.jpg">Gato</option>
            <option value="perro.jpg">Perro</option>
            <option value="caballo.jpg">Caballo</option>
        </select><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>