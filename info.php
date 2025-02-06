
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>

    <h2>Formulario de Registro</h2>
    <form action="" name="ejemplo" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label for="numero">id:</label>
        <input type="text" name="numero" required><br><br>

        <input type="submit" name="registro" value="Registrar">
    </form>


<?php


$host = "localhost";
$user = "juandiego";
$pass = "123";
$db = "Prueba";

$conexion = new mysqli($host, $user, $pass, $db);

if($conexion->connect_errno){
        die("conexion fallida". $conexion->connect_errno);
}else{

echo "conectado";
}
?>
