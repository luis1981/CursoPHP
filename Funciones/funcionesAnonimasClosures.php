<?php


    echo "<h1>Estamos en funciones anonimas y closures</h1>";


    // Ejecutar una funcion anonima como variable funcion

    $saludo = function(){

            echo "Hola mundo<br>";
    };

    $saludo();


    // ejecutar funcion anonima como argumento de otra funcion.

   
    function presentacion($nombre){

        echo $nombre();
    }


    $nombre = function(){

        return "Me llamo Luis Vega<br>";

    };

    presentacion($nombre);

    /*function saludar($anonima){

        echo $anonima();
    }


    saludar(function () {

        return "Hola Luis";

    });*/


    // USANDO PARAMETROS EN CLOSURES

    // Con variables globales

    $usuario = "Hugo<br>";


    $session = function () use ($usuario){

        echo "Hola $usuario";
    };

    $session();


    // Ejecutando closures como parametros de otras funciones

    $coche1 = "Audi";

    function coche($marca){

        echo $marca();
    }

    $marca = function() use ($coche1){
        $coche1 = "Mercedes";
        return "Mi coche es un $coche1<br>";
    };

    coche($marca);

    echo "$coche1<BR>";


    echo "<h1>Repaso de funciones CLOSURES</h1>";
    
    // Closures desde una variable funcion

    // Creamos el closure
    $a = function(){

        echo "Hola desde la funcion a";
    };

    // Ejecutamos la variable funcion poniendo unos parentesis despues de la variable.

    $a();

    echo "<br><br>";

    // Closure como parametro de una funcion normal.

    function nombreCompleto($fullName){

        echo $fullName();
    }

    $fullName =  function () {

        return "Me llamo Hugo Vega Strimbeanu, soy CLOSURE pasado como o";
    };


    nombreCompleto($fullName);

