<?php

    echo "<h1>Estamos en Strings</h1>";

    // Entrecomillad simple

    echo 'Hola estamos \'Luis\' y yo<br>';  // escapar nuevas comillas simples en un string.

    // Cualquier otra caracter dentro dentro del string se imprimira.

    echo 'Hola como estamos \n<br>';


    // Entrecomillado doble

    echo "Tengo una coche \n rojo<br>";

        //Con el entrecomillado doble podemos imprimir variables.

        $color = "rojo";

        echo "Tengo un coche $color<br>";


 // SINTAXIS HEREDOC
    
    // comenzamos con "<<<" seguido de una palabra sin espacio, y cerremos con la misma palabra pero sin
    // nigun tipo de espacio ni tabulacion.
    
    $texto = <<<EOD
        Sintaxis "HEREDOC"
        Tengo un coche
        de color
        azul
EOD;

    echo $texto;

