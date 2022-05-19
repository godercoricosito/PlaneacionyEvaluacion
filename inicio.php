<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="sources/css/bootstrap.css">
    <script type="text/javascript" src="sources/js/bootstrap.js"></script>
    <script type="text/javascript" src="sources/js/menu.js"></script>
    <link rel="stylesheet" href="sources/menu.scss">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

<?php include_once 'sources/menu-left.php'?>

<?php
date_default_timezone_set('America/Mexico_City');
$meses = array("sobra", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$mes = intval(date('m') - 1);
// echo $_SERVER['REQUEST_URI'];?>

    <div class="container justify-content-center">
        <br>
        <h2 class="text-center">¡¡Hola "Nombre del enlace" !!</h2>
        <br>
        <h5 class="text-center">Te sobran <?=date('t') - date('d') ?> días para reportar el mes de <?= $meses[$mes]?> o vas a ver... ;) ;)</h5><br>
        Graficas sobre el estado general de la dirección
    </div>
</body>
</html>