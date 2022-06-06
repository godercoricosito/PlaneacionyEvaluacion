<?php
if($_GET){
    if($_GET['mes'] < 1 || $_GET['mes'] > 12){
        die();
    }
}
if(!isset($_GET['mes'])){
    $mes_actual = intval(date('m'))-1;
}else{
    $mes_actual = $_GET['mes'];
}

date_default_timezone_set('America/Mexico_City');

function MenuMes($mes_actual){
    $item = '';
    $meses = array("Sin Mes", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        for ($i=1; $i < 13; $i++) { 
            if($i == $mes_actual){
                $item .= '<li>
                <a href="" aria-current="page" class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">'.$meses[$i].'</a>
            </li>';
            }else{
                $item .='<li>
                    <a href="?mes='.$i.'" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">'.$meses[$i].'</a>
            </li>';
            }
        }
    return $item;
}

function Actividades($mes){
    if($mes == intval(date('m'))){
        echo "estamos en el mismo mes";
    }
}
?>