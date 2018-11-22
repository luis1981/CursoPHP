<?php

    echo "<h1>Estamos en sintaxis Basica.</h1>";

    $a = "<br>";

    /**
     *  Caracter de escape de Bloque de codigo " : "
     */

     $edad = 54;


     if($edad > 10):

        echo "Eres un viejo";

     elseif($edad <= 10):
        
        echo "Eres un nino";
     
     endif;

     echo "<br>";

     /**
      * Asignacion por referencia
      * A la variable $y se le pasa la direccion en memeris de la variable $x, por lo el valor de $y, sera lo que hay guardado
      * en la direccion de memoria de $x.
      */

      $x = 8;
      $y = &$x;


      echo "<br>";


      $edad = 37;
      $edad2 = "37";

      var_dump($edad == $edad2);
      echo "<br>";
      var_dump($edad === $edad2);

      echo $a;


      /**
       * Operador Ternario:
       * 
       * Sintaxis operador: (condicion "Si esto es true") ? si es verdadero se ejecutara esto : si es falso se ejecutara esto otro
       * 
       */

       $edad = 7;

       $ternario = (isset($edad)) ? "Si existe" : "No existe";

       echo $ternario;

       echo $a;


       /***
        * instanceof es una funcion que nos dice si una variable es una instancia de un una clase, es decir si es un objeto.

        Sintaxis:

            $coche = new Coche();

            var_dump($coche instanceof Coche);

            Devolvera "true or false";

        */

        