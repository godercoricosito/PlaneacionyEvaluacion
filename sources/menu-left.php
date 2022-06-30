<?php
// Aqui estan las variables de los Menus
$actual = $_SERVER['REQUEST_URI'];
$DIR_INICIO = "/simp/inicio.php";
$DIR_ACTIVIDADES = "/simp/actividades.php";
$DIR_INDICADORES = "/simp/indicadores.php";


if($actual == $DIR_INICIO){
    $titulo_menu = "Inicio";
}elseif($actual == $DIR_ACTIVIDADES){
    $titulo_menu = "Actividades";
}elseif($actual == $DIR_INDICADORES){
    $titulo_menu ="Indicadores";
}
?>

<nav class="navbar navbar-expand-sm bg-light h-25">
    <div class="container-fluid">
        <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
            <span class="material-symbols-outlined">menu</span>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link img-thumbnail me-3 ms-2" aria-current="page" href="inicio.php"><img src="img/logo-metepec.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $r = $actual == $DIR_INICIO ? "active" : '' ?>" aria-current="page" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $r = $actual == $DIR_ACTIVIDADES ? "active" : '' ?>" href="actividades.php">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $r = $actual == $DIR_INDICADORES ? "active" : '' ?>" href="indicadores.php">Indicadores</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href=""><b>Nombre de la Dependencia </b></a>
        </ul>
    </div>
    <div class="container-fluid justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar Sesión </a>
        </ul>
    </div>
</nav>


<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel"><?= $titulo_menu ?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body offcanvas-sm">
        <!-- El menu contextual de INICIO -->
        <?php if ($_SERVER['REQUEST_URI'] == $DIR_INICIO):?>
            <div class="list-group">
                <a href="miperfil.php" class="list-group-item list-group-item-action" aria-current="true">Mi Perfil</a>
                <a href="#" class="list-group-item list-group-item-action">Mandos Medios</a>
                <a href="#" class="list-group-item list-group-item-action">Mis Areas</a>
                <a href="#" class="list-group-item list-group-item-action">Mis Claves</a>
                <a href="#" class="list-group-item list-group-item-action">Mis Formatos</a>
                <!-- <a class="list-group-item list-group-item-action disabled"></a> -->
            </div>
        <?php endif?>

        <!-- El menu contextual de ACTIVIDADES -->
        <?php if ($_SERVER['REQUEST_URI'] == $DIR_ACTIVIDADES){?>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action" aria-current="true">Actividades por Área</a>
                <a href="#" class="list-group-item list-group-item-action">Todas las Actividades</a>
                <a href="#" class="list-group-item list-group-item-action">Registrar Actividades</a>
                <a href="#" class="list-group-item list-group-item-action">Nueva Reconducción de Actividades</a>
                <!-- <a class="list-group-item list-group-item-action disabled"></a> -->
            </div>
        <?php }?>

        <!-- El menu contextual de Indicadores -->
        <?php if ($_SERVER['REQUEST_URI'] == $DIR_INDICADORES):?>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action" aria-current="true">Indicadores por Área</a>
                <a href="#" class="list-group-item list-group-item-action">Todos los Indicadores</a>
                <a href="#" class="list-group-item list-group-item-action">Mis Matrices</a>
                <a href="#" class="list-group-item list-group-item-action">Nueva Reconducción de Indicadores</a>
                <!-- <a class="list-group-item list-group-item-action disabled"></a> -->
            </div>
        <?php endif?>
    </div>
</div>