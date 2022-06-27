<?php
if($_SESSION['id_permiso'] == 1){
    $id_usuario = $_SESSION['id_usuario'];
require_once 'models/inicio_modelo.php';
// Aqui estan las variables de los Menus
$actual = $_SERVER['REQUEST_URI'];
$inicio = "/simp/index.php";
$actividades = "/simp/actividades.php";
$indicadores = "/simp/indicadores.php";


if($actual == $inicio){
    $titulo_menu = "Inicio";
}elseif($actual == $actividades){
    $titulo_menu = "Actividades";
}elseif($actual == $indicadores){
    $titulo_menu ="Indicadores";
}

function item_context($destino, $texto){
    return '
    <div class="text-center">
        <li>
        <a href="'.$destino.'"class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">'.$texto.'</a>
        </li>
    </div>
    ';
}
function item_principal($actual, $destino, $texto){
    $destino2 = "/simp/".$destino;
    $tipo = ($actual == $destino2) ? 'class="py-6 pr-4 pl-3 text-white bg-gray-200 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"' : 'class="py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"' ;
    return '<li><a href="'. $destino .'"'.$tipo.'>'.$texto.'</a></li>';
}

?>
<header>
    <nav class="bg-gray-100 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="index.php" class="flex items-center">
                <img src="../resources/img/logo-metepec.png" class="mr-6 h-6 sm:h-9" alt="SIMONTS Metepec"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="" class="text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page"><?= get_usuario($id_usuario,$con)['nombre_dependencia']?></a>
                    </li>
                    <?= item_principal($actual, "index.php", "Inicio")?>
                    <?= item_principal($actual, "actividades.php", "Actividades")?>
                    <?= item_principal($actual, "indicadores.php", "Indicadores")?>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Más<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <?php
                            if($_SERVER['REQUEST_URI'] == $inicio){
                                ?>
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <?= item_context("mis_formatos.php", "Mis Formatos") ?>
                                    <?= item_context("mi_perfil.php", "Mi Perfil") ?>
                                    <?= item_context("mis_areas.php", "Mis Areas") ?>
                                </ul>
                                <?php
                            }
                            ?>
                            <?php
                            if($_SERVER['REQUEST_URI'] == $actividades){
                                ?>
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <?= item_context("actividades.php", "Actividades por Área") ?>
                                    <?= item_context("nueva_actividad.php", "Registrar Actividades") ?>
                                    <?= item_context("reconduccion_actividades.php", "Nueva Reducción de Actividades") ?>
                                    <?= item_context("actividades_todas.php", "Todas las Actividades") ?>
                                </ul>
                            <?php
                            }
                            ?>
                            <?php
                            if($_SERVER['REQUEST_URI'] == $indicadores){
                                ?>
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <?= item_context("indiadores.php", "Indicadores por Área") ?>
                                    <?= item_context("matrices.php", "Mis Matries") ?>
                                    <?= item_context("reconduccion_indicadores.php", "Nueva Reconducción de Indicadores")?>
                                    <?= item_context("indicadores_todos.php", "Todos los Indicadores")?>
                                </ul>
                                <?php
                            }
                            ?>
                        </div>
                    </li>
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>
                    <li>
                        <a href="login.php"><svg class="w-6 h-6 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php
} else {
    ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}
?>