<?php

    // Comparar Arrays

    // array_dif(array $array1, array array $array2, ....etc)
    // @return devuleve los elementos de $array que no esten presentes en $array2.

    $coches = ['Mercedes', 'Bmw', 'Ferrari', 'Ducati'];

    $motos = ['Bmw', 'Aprilia', 'MvAgusta'];

    $diferencia = array_diff($coches, $motos);

    foreach ($diferencia as $value) {
        
        echo $value . "<br>";
    }


    //Tenemos array_diff_assoc() -> compara arrays asociativos $key y $value.

    $team = ['Ferrari' => 'Vettel',
            'Mclaren' => 'Alonso',
            'ForceIndia' => 'Sainz' 
            ];

    $motosTeam = ['Honda' => 'Marquez',
                'Yamaha' => 'Rossi',
                'ForceIndia' => 'hdfdjks',
                ];        

    // UNIR ARRAYS

    // Se pueden unir dos arrays mediante el operador "+"

    $union = $coches + $motos;

    var_dump($union);

    echo "<br>";

    $union_suma = $team + $motosTeam;

    var_dump($union_suma); // Como podemos ver con la union en assoc los keys repetidos no los incluye independientemente de su valor

    /* Array_merge() -> combina dos o mas arrays los arrays se van uniendo al final del anterior.
    Al contrario del operandor "+", los $keys(string) iguales se sobreescriben. Y los numericos van aumentando.              

    */

    // array_combine() -> Crea un array con los $keys de uno y los $value del otro.Los arrays tienen que tenert
    // el mismo numero de elementos

    $c = array_combine($team, $motosTeam);

    var_dump($c);

    