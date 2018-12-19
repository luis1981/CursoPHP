<?php

    echo "<h1>Ordenacion de arrays</h1>";

    // sort(array $array), ordena menor a mayor, ordena por valor.

    $numeros = [54, 65, 2, 4, 89];

    $nombres = ['Luis', 'Hugo', 'Alex', 'Gracia', 'Emilio'];

    sort($numeros);

    var_dump($numeros);

    echo "<br>";

    sort($nombres, SORT_STRING);

    var_dump($nombres);

    echo "<br>";
    // Dividir arrays

    // array_slice(array $array, int $offset, int $longitud)
    // -> extrae una parte del array
        // $offset -> donde queremos que empiece a extraer el nuevo array.
        // $longitud -> tamano del array
        // $array -> array que queremos que reemplaze

    $salidaSlice = array_slice($nombres, 2, 2);
    
    var_dump($salidaSlice);

    // array_splice(array $array, int $offset, int $longitud, mixed $array) -> elimina una porcion del array segun los parametros.
    echo "<br>";

    $motos = ['Aprilia', 'MvAgusta'];

    $salidaSplice = array_splice($nombres, 0, 2, $motos);

    var_dump($salidaSplice);


