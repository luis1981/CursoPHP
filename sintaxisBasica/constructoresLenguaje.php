<?php

    echo "<h1>Estamos en constructores del lenguaje</h1>";


    /**
     * ALGUNOS CONSTRUCTORES DEL LENGUAJE
     * 
     * 
     * exit() -> temrina el script actual y se puede anadir un mensaje de retorno.
     * 
     * echo() -> imprime en pantalla, se pueden imprimir las variables tal cual usando comillado doble. Se pueden pasar varias
     * varibales separadas por comas. echo es mas rapido que la funcion print().
     * 
     * empty() ->determina si una variable esta vacia, no si existe. Si no esta vacia retorna 1, si esta vacia 0;
     * 
     * isset() -> Determina si una variable está definida y no es null.
     * 
     * defined() -> determina si existe una constante se utliza igual que isset().
     * 
     * 
     * unset() -> destruye una variable
     * 
     */


     $color = "rojo";
     $coche = "seat";
     $numero = null;
     $a = false;

     echo "color $color\t" , "$coche";

     //echo empty($a);

     unset($coche); // removemos la variable coche

     var_dump(isset($f));


     echo "<br>";

     // CONSTANTES

     // Definicion de constantes: define (nombreConstante, valor del ala constante)

     define("VALOR_EURO", 1.668);
     define ("IVA", 21);

     echo  "El valor del euro es de: " . VALOR_EURO . "<br>";
     echo IVA . "%";