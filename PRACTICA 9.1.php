<?php
require("BDL.php");
echo "<h1>Práctica: Creación de una tabla</h1><br><br>";
$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
$tabla = "alumnos";
$consulta = "CREATE TABLE IF NOT EXISTS $tabla (
    id INT(9) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(20),
    email  VARCHAR(40),
    edad INT(20)
);";
if (mysqli_query($conexion, $consulta)) {
    echo "La tabla $tabla se creó con éxito.<br>";
    echo "El script utilizado fue: $consulta<br><br>";
} else {
    echo "La tabla $tabla no se ha podido crear.<br>" . mysqli_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion);
?>
