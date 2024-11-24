<?php
    require("conexion.php");
    echo "<h1>Eliminar una BD existente</h1>";
    $conexion=mysqli_connect($servidor, $usuario, $password, $BD);
    $basedatos="leticia"; //BD a eliminar
    $consulta="drop database $basedatos";
    if ($resultado=mysqli_query($conexion, $consulta)) //Comprobación de que se ha eliminado la BD correctamente o te diga el error
{
    echo "La BD $basedatos, se elimino con éxito <br>";
    echo "El Script utilizado fue: $consulta <br><br>";
}
else {
    echo "La BD $basededatos no se ha podido eliminar <br>" .mysqli_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion); //Cerrar el servidor

    ?>    
