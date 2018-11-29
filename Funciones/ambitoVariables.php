<?php

    echo "<h1>Estamos en el ambito de las Variables.</h1>";


    // Una variable global no es accesible desde un una funcion.

    $name = "Luis";

    //$name = &$name;

    function saludo(){

        echo "Hola $name <br>";
    }

    // Esto nos marca un "error Notice", como que la variable nombre no esta definida dentro de la funcion.

    saludo();


    // Para acceder desde una funcion a una variable global necesitamos anteponer "global" a la variable.

    function  saludar(){

        global $name;

        echo $name;
    }

    saludar();

