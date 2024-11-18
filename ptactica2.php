<html>
<head>
<title> Scriptb Variables en php</title>
</head>
<body>
<?php
/*función nombre de la función()
{codigo a ser ejecutado
*/

function Mensaje (){
echo "<br>";
echo "Hola mundo";
}


//para mandar a llamar la finción 

Mensaje(); //Mandamos a llamar la función 



/*Variables 

Globales: Pueden ir en cualquier parte de nuestro texto
Locales: Van dentrio de una función */

$a=10; // Variable global

function Variables(){
$b=15; // Variable local ya que no se declaro
echo "Pureba de la impresión variable dentro";
echo "La variable es $a <br>";
echo "La variable es $b <br>";
}

Variables ();
echo "Pureba de la impresión variables fuera";
echo "La variable es $a <br>";
echo "La variable es $b <br>";
?>
</body>
</html>