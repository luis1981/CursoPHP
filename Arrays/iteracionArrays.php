<?php
<<<<<<< HEAD
=======


    echo "<h1>Estamos en Iteracion de arrays</h1>";

    // Recorrer una array con un buvle for.

    $names = ['Luis', 'Raluca', 'Hugo', 'Pocoyo'];

    for ($i=0; $i < count($names) ; $i++) { 
        
            echo "$names[$i]<br>";

    }

        // Los bucles no deben utilizarse para recorrer arrays, una de las razones es que limitan
        // solo a recorrer a arrays numericos


    echo "<br>";    
// Bucle foreach.


    foreach($names as $name){

        echo "Mi nombres es $name<br>";
    }

    // Bucle foreach array asociativo

    echo "<br>";

    $team = ['caza' => 'f22', 'bombardero' => 'Tu-160', 'Ataque a tierra' => 'A-10'];

    foreach($team as $key => $avion){

        echo "Tipo: $key -- Nombre: $avion<br>";
    }


    // list()

    echo "<h1>Array Walk</h1>";

    // FUNCIONES PARA RECORRER ARRAYS

    /***
     *  bool array_walk( arrayb $array, callable $callback o funcion)
     * 
     *  Aplica una function definida por el usuario $callback a cada elemento del array.
     * 
    */

    function mayusculas($nombre){

        echo "Mi nombre es: " . strtoupper($nombre) . "<br>";
    }

    array_walk($names, 'mayusculas');


    echo "<br>";


    /**
     *  bool array_key_exist(mixed $key, array $array)
     * 
     *  Comprueba si el $key existe en el array pasado.
     */

     $d = array_key_exists('caza', $team);
     var_dump($d);



     echo "<br>";

     /**
      *  bool in_array(mixed $busca, array $array)
*       Comprueba si un valoir existe en el array.
      */

      $f = in_array('erjglkjre', $team);
      var_dump($f);

      echo "<br>";

      /***
       * 
       *  array array_keys(array $array, [mixed $search_value])
       * 
       *    Devuelve un array con todas las $keys o una $key de un valor concreto
       */

        //Devolver todas las $keys

        $g = array_keys($names);

        var_dump($g); // Nos devuelve todos los indices numericos del array.

            echo "<br>";

            // Vamos a buscar un $key en concreto.

            $h = array_keys($team, 'A-10');

            var_dump($h); // Me devuelve la $key del valor asociado.


    echo "<br>";
    
    /**
     *  array array_values(array $array)
     * 
     *  Devuleve todos los valores de un array.
     */

     $j = array_values($team);
     var_dump($j);

     echo "<br>";
>>>>>>> a531aeee9b393794baa44e5270c533eb3ceb144e
