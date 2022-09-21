<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style=" <?php
                $color = $_REQUEST['color'];
                $letra = $_REQUEST['tipoLetra'];
                $alineacion = $_REQUEST['alineacion'];
                echo "background-color:$color;font-family:$letra;text-align:$alineacion;";
                ?> ">

    <img src=" <?= $_REQUEST['img'] ?>" alt="">

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt consequuntur numquam placeat fugit omnis vitae voluptatem a officiis odit iste ratione, quod voluptate neque quasi atque mollitia quaerat qui distinctio?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt consequuntur numquam placeat fugit omnis vitae voluptatem a officiis odit iste ratione, quod voluptate neque quasi atque mollitia quaerat qui distinctio?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt consequuntur numquam placeat fugit omnis vitae voluptatem a officiis odit iste ratione, quod voluptate neque quasi atque mollitia quaerat qui distinctio?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt consequuntur numquam placeat fugit omnis vitae voluptatem a officiis odit iste ratione, quod voluptate neque quasi atque mollitia quaerat qui distinctio?</p>

</body>

</html>