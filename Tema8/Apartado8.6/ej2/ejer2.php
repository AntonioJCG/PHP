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
            $fichero = "datos.txt";
            function obtenerSuma($fichero){
                $fp=fopen($fichero,'r');
                $num1=(int)fgets($fp);
                $num2=(int)fgets($fp);
                $num3=(int)fgets($fp);
                $suma=$num1+$num2+$num3;
                return "El resultado de la suma de los numeros de los ficheros es: ".$suma;
            }

            echo obtenerSuma($fichero);
         }

        
        
    ?>

    <form action="ej2.php" method="post">
        <input type="submit" value="Ver la suma de los números del fichero" name="sumar">
    </form>
</body>
</html>