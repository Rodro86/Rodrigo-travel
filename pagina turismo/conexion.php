<?php 
$server = "127.0.0.1:3309";
$user = "root";
$pass = "";
$db = "registro";

$conexion = mysqli_connect ($server, $user, $pass, $db);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>