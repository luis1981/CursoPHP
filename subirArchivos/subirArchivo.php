<?php

// Podemos acceder al array global $FILES, el cual contiene toda la informacion del archivo subido.

var_dump($_FILES);

//$nombreTemporal = $_FILES['archivo']['tmp_name'];

//  SUBIDO DE VARIOS ARCHIVOS AL MISMO TIEMPO

// carpeta destino

$destino = 'uploads/';

echo "<br>";

foreach ($_FILES['archivo']['tmp_name'] as $key => $value) {
    
        $destino = $destino . basename($_FILES['archivo']['name'][$key]);

        if($_FILES['archivo']['type'][$key] === 'image/jpeg' || $_FILES['archivo']['type'][$key] === 'image/jpg'){

            if($_FILES['archivo']['size'][$key] <= 2000000){

                    if(move_uploaded_file($_FILES['archivo']['tmp_name'][$key], $destino)){


                        echo "El archivo $key se subio correctamente<br>";

                        header('location: subirArchivos.html');

                    }else{

                        echo "El archivo $key tuvo un problema al subirse<br>";
                    }

            }else{

                echo "El archivo con $key es demasido grande<br>";
            }

        }else{

            echo "El archivo $key  no es valido<br>";
        }
}


// Tambien podemos acceder a cada elemento del array.


// EJEMPLO DE SUBIDA DE UN ARCHIVO SOLAMENTE
/*
//echo $_FILES['archivo']['type'];

$destino = 'uploads/'; // Creamos directorio de destino.

$destino = $destino .  basename($_FILES['archivo']['name']); // Aqui apuntamos al destino con el nombre del arhivo.


if($_FILES['archivo']['type'] == 'image/jpeg' || $_FILES['archivo']['type'] == 'image/jpg'){

        if($_FILES['archivo']['size'] <= 2000000){

                if(move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)){

                    echo "El archivo se guardo correctamente";

                }else{

                    echo "Hubo un error al procesar tu archivo";
                }

        }else{

            echo "El tamano de la imagen es demasiado grande";
        }

}else{

    echo "Extension de archivo no permitida";
}
*/