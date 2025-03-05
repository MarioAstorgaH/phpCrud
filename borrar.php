<?php
$conexion = new mysqli("localhost", "root", "", "empresax");
if ($conexion->connect_error) 
    die("Error de conexión: " . $conexion->connect_error);

$conexion->query("DELETE FROM empleados WHERE Clave=$_GET[k]");
$conexion->close();
header("Location: http://localhost/bdPrueba/bdconexion.php");
?>