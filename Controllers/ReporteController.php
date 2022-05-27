<?php
if($_GET){
    if($_GET['mes'] < 1 || $_GET['mes'] > 12){
        die();
    }
}
if(!isset($_GET['mes'])){
    $mes_actual = intval(date('m'));
    $mesareportar = $mes_actual -1;
}else{
    $mes_actual = $_GET['mes'];
    $mesareportar = $_GET['mes'];
}

date_default_timezone_set('America/Mexico_City');

function Menu_mes($mes_actual, $mesareportar){
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $retorno = '';
    for ($i=0; $i < 12; $i++) {
        if($mes_actual != $mesareportar){
            $retorno .= ($i == $mesareportar-1) ? '<li class="page-item active" aria-current="page"><span class="page-link">'. $meses[$i].'</span></li>' : '<li class="page-item"><a class="page-link" href="?mes='.$i + 1 .'">'. $meses[$i].'</a></li>';
        }else{
            $retorno .= ($i == $mes_actual-1) ? '<li class="page-item active" aria-current="page"><span class="page-link">'. $meses[$i].'</span></li>' : '<li class="page-item"><a class="page-link" href="?mes='.$i + 1 . '">'. $meses[$i].'</a></li>';
        }
    }
    return $retorno;
}

function Actividades($mes){
    if($mes == intval(date('m'))){
        echo "estamos en el mismo mes";
    }

    


}


?>