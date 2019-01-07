<?php

// SUBIR ARCHIVOS AL SERVIDOR PHP

echo "<h1>Subir archivos al servidor en PHP</h1>";


?>

<!--FORMULARIO SIMPLE DE VALIDACION -->
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    </head>
    <body>
       <form action="subirArchivo.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo[]" multiple=""><br>
        <button type="submit">Enviar</button>
       </form>
         
    </body>
</html>