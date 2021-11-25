<?php
require_once "connection.php";
$asunto=$_POST['asunto'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$obj = new connection();
$con = $obj->connect();
$instruction_sql = "INSERT INTO contacto (asunto, nombre, apellido, email, mensaje) values ('{$asunto}', '{$nombre}', '{$apellido}', '{$email}', '{$mensaje}')";
$result = $con->prepare($instruction_sql);
$result->execute();

echo "Los datos del usuario {$apellido},{$nombre} fueron procesados satisfactoriamente.";
?>