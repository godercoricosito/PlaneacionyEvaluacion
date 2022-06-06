<?php
require_once 'models/conection.php';


function get_usuario($id_usuario,$con){
    $stm = $con->query("SELECT * FROM dependencias dp 
    LEFT JOIN dependencias_generales dg ON dp.id_dependencia_gen = dg.id_dependencia 
    LEFT JOIN usuarios u ON u.id_dependencia = dp.id_dependencia 
    WHERE u.id_usuario = $id_usuario");
    $data_usuario = $stm->fetch(PDO::FETCH_ASSOC);
    return $data_usuario;
}


?>