<?php

    echo "<h1>Estas en encriptacion</h1>";

    //FUNCION md5

    /**
     *  string md5(string $str, [bool $raw_output = false])
     * 
     *  Calcula un hash con el algoritmo md5, si se establece el segundo parametro como "true", devuelve un binario de 16 bits.
     *  Nos retorna un Hexadecimal de 32 bits.
     * 
     */

     $str = "eclipse2006";

     var_dump(md5($str));

     // FUNCION SHA-1
        /**
         *  string sha1(strind $str, [bool $raw_output = falswe])   
         * 
         * Calcula un hash mediante el algoritmo sha1. Nos retorna un hexadecimal de 40 bits.
         */

        var_dump(sha1($str));

    // FUNCION HASH
    /**
     * string hash(string $algoritmo, string $str, [bool $raw_output = false])
     * 
     * 
     *  */    

    echo "<br>";
    var_dump(hash('sha512', $str)); // Nos devuelcve un hash de 128 bits.

    echo "<br>";

    // FUNCIONES QUE SE UTILIZAR PARA LOS PASSWORDS
    /**
     *  string password_hash(string  $password, int $algo , int $salt)
     * 
     * 
     */

    $hash = password_hash($str, PASSWORD_DEFAULT, ['cost' => 10]);

    $str = "ehfkehfkw";
    
     if(password_verify($str, $hash)){

        echo "Las contrasenas coinciden";
     }

     


    
