<?php
require("conexion.php");
echo "<h1>Crear una tabla en una BD existente</h1>";
$conexion=mysqli_connect($servidor, $usuario, $password, $bd);
$basededatos="rafa";
$tabla="pruebaXD";
$consulta="create table $tabla (id int(10), nombre varchar(50));";
if ($resultado=mysqli_query($conexion, $consulta)) //Comprobación de que se ha creado la tabla correctamente o te diga el error
{
    echo "La tabla $tabla, se creó correctamente en $basededatos <br>";
    echo "El Script utilizado fue: $consulta <br><br>";
}
else {
    echo "La tabla $tabla no se pudó crear correctamente <br>" .mysqli_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion); //Cerrar el servidor
?>