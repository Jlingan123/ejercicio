<?php

if ($_POST) {
    $txtnombre =  $_POST['txtnombre'];
    $txtapellido =  $_POST['txtapellido'];
    echo "Hola = " . $txtnombre . " " . $txtapellido;
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

<body>

</body>

<form action="" method="post">
    Nombre:
    <input type="text" placeholder="ingrese nombre" name="txtnombre" id="">
    <br />
    Apellido:
    <input type="text" placeholder="ingrese apellido" name="txtapellido" id="">
    <br />
    <input type="submit" value="enviar">
</form>

</html>