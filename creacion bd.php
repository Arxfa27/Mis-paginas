<?php
require ("conexion.php");
echo "<h1>practica: creación de bd </h1><br><b>";
$conexion=mysqli_connect($servidor, $usuario, $password, $bd);
$basededatos="progweb";

$consulta="create database $basededatos";
if ($resultado=mysqli_query($conexion, $consulta))
{
echo "la base de datos $basededatos, se creo correctamente<br><br>";
echo " el scrip utilizado fue: $consulta <br> <br>";
}
else
{
echo"la base de datos $basededatos no se ha podido crear <br>".mysqli_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion);
?>