<?php
//$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);
$conexion = new mysqli("localhost", "root", "", "empresax");

if ($conexion->connect_error) 
    die("Error de conexión: " . $conexion->connect_error);
echo "<center>";
echo "<a href='add.php'>agregar registro";
echo "<table border='2'>";
echo "<tr><th>Clave</th><th>Nombre</th><th>Correo</th><th>Celular</th><th>Fecha de Ingreso</th><th>Sueldo</th></tr>";
$resultado = $conexion->query("SELECT * FROM empleados");    
while($fila = $resultado->fetch_assoc()){
    echo "<tr><td>". $fila['Clave']. "</td>";
    echo "<td>"."<a href=edit.php?j=$fila[Clave]>".$fila['Nombre'] ."</td>";
    echo "<td>".$fila['Correo'] ."</td>"; 
    echo "<td>". $fila['Celular']. "</td>";
    echo "<td>". $fila['FechaIngreso']. "</td>";
    echo "<td>". $fila['Sueldo']. "</td>";
    echo "<td><a href='borrar.php?k=$fila[Clave]'><img src='../bdPrueba/img/basura.png'></a></td></tr>";
}
$conexion->close();
echo"</table>";
echo "<a href='add.php'>agregar registro";
echo"</center>";

?>   