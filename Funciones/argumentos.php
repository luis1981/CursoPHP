<?php

    echo "<h1>Estamos en Argumentos</h1><br>";

    // Pasar argumentos por valor


    $nombreFamilia = array("Luis", "Raluca", "Luisito", "Hugo", "Alexander");


    echo "<h3>Argumentos pasados por valor</h3><br>";

    function miembrosFamilia($nombreFamilia){


        foreach($nombreFamilia as $key => $nombre){
           

            echo "{$key} - $nombre<br>";

            
        }
    }


    miembrosFamilia($nombreFamilia);


    // Paso por referencia

    $saludo = "Hola mundo";

    // Si deseo que una variable global pasada como parametro a una funcion cambie su valor, la tenemos que pasar por referencia,
    // estos es anteponiendo a la variable el "&"

    function saludar(&$saludo){

        $saludo = "jflkewjf<br>";

        echo $saludo;
    }


    saludar($saludo);

    echo "$saludo<br>";


    echo "Variable por referencia<br>";

    $a = "Luis";
    $b = &$a; // Asignamos la direccion en memoria de $a a $b.
    $b = "Vega"; // Como $b tiene asignado la misma direccion en memoria que $a, si ha $b le cambiamos el valor a $a tambien se le cambiara
    echo $b;
    echo $a;

    // asignado valor por referencia de $a a $b.

   