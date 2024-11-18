function operacionAritmetica($a, $b) {
        echo "<h2>Operadores Aritméticos</h2>";
        echo "Valores iniciales: a = $a, b = $b<br>";
        echo "Suma: ($a + $b)  " . ($a + $b) . "<br>";
        echo "Resta: ($a - $b) " . ($a - $b) . "<br>";
        echo "Multiplicación: ($a * $b) " . ($a * $b) . "<br>";
        echo "División: ($a / $b) " . ($a / $b) . "<br>";
        echo "Módulo: ($a % $b)  " . ($a % $b) . "<br>";
        
        $a++;
        echo "Incremento de a: $a<br>";
        
        $b--;
        echo "Decremento de b: $b<br>";
    }

    // Condicionales
    function condicionales($x, $y) {
        echo "<h2>Condicionales</h2>";
        echo "Valores iniciales: x = $x, y = $y<br>";
        echo "¿x es igual a y? " . ($x == $y ? 'Sí' : 'No') . "<br>";
        echo "¿x es idéntico a y? " . ($x === $y ? 'Sí' : 'No') . "<br>";
        echo "¿x es distinto de y? " . ($x != $y ? 'Sí' : 'No') . "<br>";
        echo "¿x no es idéntico a y? " . ($x !== $y ? 'Sí' : 'No') . "<br>";
        echo "¿x es mayor que y? " . ($x > $y ? 'Sí' : 'No') . "<br>";
        echo "¿x es menor que y? " . ($x < $y ? 'Sí' : 'No') . "<br>";
        echo "¿x es mayor o igual a y? " . ($x >= $y ? 'Sí' : 'No') . "<br>";
        echo "¿x es menor o igual a y? " . ($x <= $y ? 'Sí' : 'No') . "<br>";
    }

    // Operadores de Asignación
    function asignacion($a) {
        echo "<h2>Operadores de Asignación</h2>";
        echo "Valores iniciales: a = $a <br>";

        $a += 5;
        echo "Asignación de suma (a += 5): $a<br>";

        $a -= 3;
        echo "Asignación de resta (a -= 3): $a<br>";

        $a *= 2;
        echo "Asignación de multiplicación (a *= 2): $a<br>";

        $a /= 4;
        echo "Asignación de división (a /= 4): $a<br>";

        $a %= 3;
        echo "Asignación de módulo (a %= 3): $a<br>";
    }

    // Operadores Lógicos
    function operadoresLogicos($a, $b) {
        echo "<h2>Operadores Lógicos</h2>";
        echo "Valores iniciales: a = $a, b = $b<br>";
        echo "¿a es mayor que 5 y b es menor que 10? " . (($a > 5 && $b < 10) ? 'Sí' : 'No') . "<br>";
        echo "¿a es mayor que 5 o b es menor que 3? " . (($a > 5 || $b < 3) ? 'Sí' : 'No') . "<br>";
        echo "¿No es cierto que a es menor que 5? " . (!($a < 5) ? 'Sí' : 'No') . "<br>";
    }

    // Concatenación
    function concatenacion($nombre, $apellido) {
        echo "<h2>Concatenación</h2>";
        echo "Valores iniciales: nombre es $nombre, apellido es $apellido <br>";
        $nombreCompleto = $nombre . " " . $apellido;
        echo "Concatenación de nombre y apellido: $nombreCompleto<br>";

        $nombreCompleto .= " - Estudiante";
        echo "Asignación con concatenación: $nombreCompleto<br>";
    }

    // Llamadas a las funciones con valores de ejemplo
    operacionAritmetica(10, 3);
    condicionales(10, "10");
    asignacion(15);
    operadoresLogicos(6, 8);
    concatenacion("Ana", "Pérez");
    ?>


</body>
</html>