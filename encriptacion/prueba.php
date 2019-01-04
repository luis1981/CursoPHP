<?php
session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="style.css">
<title>Prueba passwords</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="password.php" method="POST">
                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
                 </div>
                 <button type="submit" id="button" class="btn btn-default">Enviar</button>
                 </form>
            </div>
        </div>
    </div>
    <?php

       echo $_SESSION['intentos'];

    ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>