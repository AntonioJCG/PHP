<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
        if(isset($_REQUEST["sumar"])){
            $fichero = "ej2/datos.txt";
            function obtenerArrNum($fichero){
                $fp=fopen($fichero,'r');
                $num1=(int)fgets($fp);
                $num2=(int)fgets($fp);
                $num3=(int)fgets($fp);
                $arrayNum=[$num1,$num2,$num3];
                return "El array resulatnte de los numeros de los ficheros es: ".$arrayNum[0]." ".$arrayNum[1]."".$arrayNum[2];
            }
            echo obtenerArrNum($fichero);

        
        
    ?>

    <form action="ej3.php" method="post">
        <input type="submit" value="Obtener array con los números del fichero" name="array">
    </form>
</body>
</html>