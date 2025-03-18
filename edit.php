
<form action="" method="get">
    <center>
        <table>
            <?php
                $j=$_GET["j"];
                $conexion=new mysqli("localhost", "root", "", "empresax");
                $resultado=$conexion->query("SELECT * FROM empleados WHERE Clave=$j");
                $fila = $resultado->fetch_assoc();
                echo "<tr><td><p>Clave:</p></td><td><input type='numeric' name='txtClave' id='' readonly placeholder=''".$fila['Clave']."></td></tr>";
                $conexion->close();
            ?>
        
        <tr><td><p>Nombre:</p></td><td><input type="text" name="txtNombre" id="" placeholder=""></td></tr>
        <tr><td><p>Correo</p></td><td><input type="email" name="txtCorreo" id=""></td></tr>
        <tr><td><p>Celular:</p></td><td><input type="numeric" name="txtCelular" id=""></td></tr>
        <tr><td><p>Fecha de ingreso:</p></td><td><input type="date" name="txtFecha" id=""></td></tr>
        <tr><td><p>Sueldo:</p></td><td><input type="numeric" name="txtSueldo" id=""></td></tr>
        <tr><td height="15px"></td></tr>

        </table>
    </center>
</form>
