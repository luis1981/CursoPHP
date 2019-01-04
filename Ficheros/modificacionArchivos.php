<?php

    echo "<h1>Modificacion de Archivos</h1>";

    // Algunas funciones de modificacion de Archivos

    /**
     *  bool copy(string $fuente, string $destino, [resource $context])
     * 
     * Copia el archivo fuente al destino, ambos son rutas por lo que deben incluir el directorio
     * 
     * 
     */

     $a = copy('prueba.html', 'public/destino.html');

     var_dump($a); // Hemos copiado el contenio de prueb.html en destino.html

     echo "<br>";


     /**
      *  bool unlink(string $filename, [resource $context])
      * Elimina el archivo pasado como filename
      */

      // Vamos a eliminar el archivo prueba.html

      $b = unlink('prueba.html');

      var_dump($b);

    echo "<br>";

      /**
       *    bool rename(string $oldname, string $newName, [resource $context])
       * 
       *    renombra un archivo pasando como parametros en nombre viejo y luego el nuevo.
       */

       $c = rename('public/destino.html', 'nuevoDestino.html');

       var_dump($c);

       echo "<br>";


       /**
        * bool move_uploded_file(string $filename, string $destination)
        * mueve un archivo subido mediante POST, al archivo de destino
        */


        // FUNCIONES DE INFORMACION DE ARCHIVOS

        /**
         * 
         *  int filesize(string $filename)
         */

        var_dump(filesize('nuevoDestino.html')); // Nos devuelve el tamano del archivo

    echo "<br>";
    
    // FUNCIONES COMPROBACION DE ARCHIVOS
    
    /**
     *  bool file_exist(string $filename)
     * Comprueba si un archivo o directorio existe
     */

     $g = file_exists('nuevoDestino.html');
     var_dump($g);


     echo file_get_contents('http://www.php.net');