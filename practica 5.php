<html> 
    <head> <title> Practica5 php</title>
    </head>
    <body>
        <?php
        $dia = "Miercoles";
        switch ($dia){
            case "Lunes":
            echo "Hoy es lunes";
            break;
            case "Martes":
            echo "Hoy es Martes";
            break;
            case "Miercoles":
            echo "Hoy es Miercoles";
            break;
            case "Jueves":
            echo "Hoy es Jueves";
            break;
            case "Viernes":
            echo "Hoy es Viernes";
            break;
            case "Sabado":
            echo "Hoy es Sabado";
            break;
            case "Domingo":
            echo "Hoy es Domingo";
            break;
            default:
        }
        ?>
    </body>
</html>