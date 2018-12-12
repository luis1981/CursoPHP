<?php

    echo "<h1>Examinacion de Strings</h1>";

    $s = "<br>";

   /* str_word_count(string $string,  int $format, string $charlist)

        $format puede ser => 
        
        0 numeros de palabaras encontradas en el string.
        1 array con palabras encontradas
        2 Array asociativo.

        $charlist => es  una lista de caracteres que se quiere que se consideren como palabras.

   */     

   $str = "Mi hijo Hugo es muy bueno y le voy a comprar muchos regalos";

   var_dump(str_word_count($str, 0));

   echo $s;
   
   var_dump(str_word_count($str, 1));

   echo$s;

   var_dump(str_word_count($str, 2));

        