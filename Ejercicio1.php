<?php

//recibir informacion del formulario html   / metodo post
$nombre = $_POST['txtnombre'];


echo  "Hola:  " . $nombre;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="Ejercicio1.php" method="post">
        Nombre:
        <input type="text" placeholder="ingrese nombre" name="txtnombre" id="">
        <br />
        <input type="submit" value="Enviar">
    </form>

</body>
</html>