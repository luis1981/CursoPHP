<?php

    echo "<h1> Estamos en configuracion php.ini</h1>";


    /**
     *  La funcion ini_set() -> sobreescribe el archivo php.ini
     *      @param1 -> nombre de variable a configurar
     *      @param2 -> valor de la variable.
     * 
     * 
     *   La configuración afecta sólo al script en donde está configurado. Cuando el script termina, el valor de la variable vuelve a su valor inicial.
     * 
     */


     ini_set('max_execution_time', 1);


    