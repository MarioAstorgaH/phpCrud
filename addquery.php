<?php
$conexion = new mysqli("localhost", "root", "", "empresax");
$resultado=$conexion->query("INSERT INTO empleados (Clave, Nombre, Correo, Celular, FechaIngreso, Sueldo) VALUES ('$_GET[txtClave]','$_GET[txtNombre]','$_GET[txtCorreo]','$_GET[txtCelular]','$_GET[txtFecha]','$_GET[txtSueldo]')");
$conexion->close();
header("Location: http://localhost/bdPrueba/bdconexion.php");
?>