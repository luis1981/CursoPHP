<?php

    echo "<h1>Funciones del sistema de ficheros mediante PHP</h1>";

    // Algunos funciones para los directorios


    /***
     * 
     *  string basename(string $path, [string $sufix])
     *  Devuelve el ultimo tramo de una ruta o directorio, $suffix permite excluir parte del componenete a devover  
     */

        $url = 'https://localhost:8000/Ficheros/prueba.html';
        $a = basename($url, 'html');
        var_dump($a); // devuelve "prueba" sin html.

    echo "<br>";

    /**
     *  
     * string dirname(string $path) 
     * 
     * Devuelve la ruta del directorio padre
     * 
     **/    

     $b = dirname($url);
     var_dump($b);

    echo "<br>";

     /***
      * mixed pathinfo(string $path, opciones)
        Devuelve informacion  sobre la ruta de un archivo

      */

      $c = pathinfo($url, PATHINFO_BASENAME);
      var_dump($c);

      echo "<br>";

      /**
       * string realpath(string $path)
       * Devuelve la ruta absoluta del $path pasado.
       * 
       */

       $d = realpath('https://localhost:8000/Ficheros/prueba.html');
       echo "$d";

       echo "<br>";

       /**
        * Creacion de directorios
        * bool mkdir(string $pathname, [int $mode = 0777, [bool $recursive]])
        */

        $fichero= './public/css';

        $f = mkdir($fichero, 0777, true);

        if($f){

            echo "El folder ha sido creado correctamente";
        }else{

            echo "El folder no se pudo crear";
        }


        /**
         * bool rmdir(string $dirname, [resource $context])
         * 
         * Elimina un fichero no archivos, pero debe estar vacio y los permisos deben permitir eliminarlo
         * 
         */

         $g = rmdir('public/css');

         if($g){

            echo "Fichero eleminado con exito";
         }


        