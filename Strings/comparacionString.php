<?php

    echo "<h1>Extraccion de Strings</h1>";

    $cadena = "Hola mundo 10";

    echo strlen($cadena);


    // FUNCIONES DE EXTRACCION DE STRINGS

        // Extraccion parcial de strings

        // substr(string $str, int $start, opcional int $length) 

        $nueva_cadena = substr($cadena, 5, 2);

        var_dump($nueva_cadena);


    // strtok(string $string, string $token)
    // Divide un string en strings mas pequenos, segun el separador o token pasado.

    $texto = "Oye! como va, mi ritmo, vamos a bailar, mi ritmo";

    $token = strtok($texto, ",");

    while ($token !==  false) {
        
        echo "$token<br>";

        $token = strtok(",");
    }


    // EXTRACCIONES CON ARRAYS

        // explode(string $delimeter, string $string, opcional int $limite)
        // Rompe un string en array, segun el delimitador pasado como argumeto.

        $t = explode(" ", $texto);

        var_dump($t) . PHP_EOL;

        $t = explode(" ", $texto, 3);

        var_dump($t);

        echo "<br>";
        echo "<br>";

    // implode(string $union, array $array);

    $coches = ["BMW", "Ferrari", "Maserati", "Audi", "Mercedes"];

    $c = implode(",", $coches);

    echo $c;

    echo "<br>";


    //parse_str(string $str, array $array)
    // Convierte un string en variables o elementos de un array.

    $url = "id=322&cesta[]=traje+corbata&cesta[]=zapatos";
    $url = "user=2&shopping[]=445+447&cesta[]=7789";

    $u = parse_str($url);

    echo "$user<br>";
    echo "$shopping[0]<br>";

    

    
    