<?php

    echo "<h1>Estamos en Funciones PHP</h1>";

    $salto = "<br>";

    echo "Delvolver valores en una funcion $salto";


    function Saludar(){

        return " Estamos llamando a la funcion Saludar<br>";
    }

    function a(){

        echo "Hola esto si se imprime<br>";

        return;

        echo "Esto no se imprimira";
    }


    function b(){

        return array("Luis", "Raluca", "Hugo", "Luisito");
    }



    echo Saludar();

    echo a();

    var_dump(b());

