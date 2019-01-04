<?php
    session_start();

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    // encriptamos el password

    $hash = password_hash($password, PASSWORD_DEFAULT, ['cost'=> 10]);


if($_SESSION['intentos'] <= 3){
    
    if($nombre === 'luis'){

        if(password_verify('eclipse', $hash)){

            header('location: bienvenido.html');

        }else{

            $_SESSION['intentos']++;
            header('location:prueba.php');
        }
        

    }else{

        echo "El usuario no existe";
        header('location: prueba.php');
    }

}else{

    echo "Cuenta bloqueada";
}    