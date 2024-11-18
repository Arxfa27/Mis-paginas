<?php
require ("conexion.php");
echo "<h1>practica: conexión a mi servidor de datos MSQL </h1><br><b>";
if ($conexion=mysqli_connect($servidor, $usuario, $password, $bd))
{
echo "tu conexión ha sido exitosa";
}
else
{
echo"error conectando msql<br> ".mysqli_connect_error();
}
echo "<br><br>";

mysqli_close($conexion);
?>