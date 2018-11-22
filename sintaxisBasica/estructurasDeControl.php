<?php

    echo "<h1>Estructuras de Control</h1>";



    /****
     * 
     *  break, termina la ejecucion, y no se ejecuta nada mas en el bucle.
     *  continue, salta la condicion del bucle "if".
     * 
     */


     for ($i=0; $i <= 10 ; $i++) { 
        
        if($i == 5){

            break;

            // Se detiene el bucle cuando $i toma el valor 5;
        }

        echo "Esto es un con break {$i}<br>";
     }



     for ($i=0; $i <= 10 ; $i++) { 
        
        if($i == 5){

            continue;

            // Salta el valor 5;
        }

        echo "{$i}<br>";
     }


     $coches = ['mercedes', 'Bmw', 'Ferrari'];

    foreach ($coches as $value) {
        
        if($value == 'mercedes'){

            continue;
        }

        echo "{$value}<br>";
    }