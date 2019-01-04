<?php
    //header('Content-Type: text/html; charset=UTF-8');

// FILTRAR DATOS DE ENTRADA DE LOS FORMULARIOS

/**
 * htmlspecialChars()  
 * Convierte caracteres especiales en "html"
 * 
 */

    $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, "UTF-8");

    echo $nombre;



// FUNCIONES DE FILTRADO DE DATOS DE PHP

/**
 *  mixed filter_var(mixed $variable, [int $filter = FILTER_DEFAULT])
 *  
 * 
 */

 $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // si es valido retorna aun string si no retorna false.

 var_dump($email);

 echo "<br>";