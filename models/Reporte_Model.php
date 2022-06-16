<?php
require_once 'conection.php';

function Actividades_DB($con, $id_area){
    $sql = "SELECT * FROM actividades a
    INNER JOIN programaciones p ON p.id_atividad = a.id_actividad
    WHERE a.id_area = $id_area";
    $stm = $con->query($sql);
    $actividades = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $actividades;
}



?>