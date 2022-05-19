<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
if (isset($_SESSION['user'])){
header("Location: inicio.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administración de beneficiarios</title>
    <link rel="stylesheet" href="sources/css/bootstrap.css">
    <script type="text/javascript" src="sources/js/bootstrap.js"></script>
    <script type="text/javascript" src="sources/js/menu.js"></script>
    <link rel="stylesheet" href="sources/menu.scss">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
        body {
    background-image: url('img/bg1.jpeg');
    background-size: 100%;
}
    </style>
</head>
<body>
    
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Sistema de Monitoreo, Tablero de Control y...</a>
    <img src="img/logo-metepec.png" alt="">
  </div>
</nav>


<div class="container mt-5">

    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Inicio de Sesión</h5>
            <br>
            <p class="card-text">
                <form class="formulario" action="iniciosesion.php" method="POST">
                    <div class="contenedor">
                            <input class="form-control" type="text" autofocus name="usuario" placeholder="Usuario">
                            <br>
                            <input class="form-control" type="password" name="password" placeholder="Contraseña">
                            <br>
                            <input class="btn btn-primary" type="submit" value="Entrar" class="button">
                    </div>
                </form>
            </p>
        </div>
        </div>
    </div>


    
</div>
</body>
</html>