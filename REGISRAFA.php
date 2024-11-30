<?php 
require("BDL.php");
$conexion=mysqli_connect($servidor, $usuario, $password, $bd);
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$consulta="INSERT INTO alumnos (nombre, email, edad) VALUES ('$nombre', '$email', '$edad')";
if ($resultado=mysqli_query($conexion, $consulta)) 
{
    echo "Registro guardado con exito.";  
}
else 
{
    echo "Error al guardar el registro".mysqli_connect_error($conexion);
}
mysqli_close($conexion); 
?>
<br>
<br><button onclick="history.back()">Regresar</button>