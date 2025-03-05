<?php
//$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);
$conexion = new mysqli("localhost", "root", "", "empresax");

if ($conexion->connect_error) 
    die("Error de conexión: " . $conexion->connect_error);
echo "<center>";
echo "<a href=''>agregar registro";
echo "<table border='2'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Sueldo</th></tr>";
$resultado = $conexion->query("SELECT * FROM empleados");    
while($fila = $resultado->fetch_assoc()){
    echo "<tr><td>".$fila['Nombre'] ."</td>";
    echo "<td>".$fila['Correo'] ."</td>"; 
    echo "<td>". $fila['Sueldo']. "</td>";
    echo "<td><a href='borrar.php?k=$fila[Clave]'><img src='../bdPrueba/img/basura.png'></a></td></tr>";
}
$conexion->close();
echo"</table>";
echo "<a href=''>agregar registro";
echo"</center>";

?>   