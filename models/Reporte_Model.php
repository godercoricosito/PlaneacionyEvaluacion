<?php
require_once 'conection.php';

function Actividades_DB($con, $id_area){
    $sql = "SELECT * FROM actividades a
    LEFT JOIN programaciones p ON p.id_atividad = a.id_actividad
    WHERE a.id_area = $id_area";
    $stm = $con->query($sql);
    $actividades = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $actividades;
}

function AvanceMes($con, $actividad, $mes){
    $sqlav = "SELECT * FROM avances a
    WHERE a.mes = $mes";
    $stma = $con->query($sqlav);
    $actividades = $stma->fetch(PDO::FETCH_ASSOC);
    return $actividades;
}


if (isset($_POST['jfnkasjnkasdf34q345']) == "Enviar") {
    $dependencia = $_POST;

    foreach ($_FILES["imagenes"]["error"] as $clave => $error) {
        if ($error == UPLOAD_ERR_OK) { 

            //Falta validacion de tipo de documentos...

            $nombre_tmp = $_FILES["imagenes"]["tmp_name"][$clave];
            $nombre = basename("Hola".$_FILES["imagenes"]["name"][$clave]);
            move_uploaded_file($nombre_tmp, "evidencias/$nombre"); // Comenzar por Anio, trimestre, y dependencia...
        }
    }
    $sql = "INSERT INTO avances (mes, avance, justificacion, dir_evidenia, dir_evidenia_evidencia, id_actividad) VALUES (?,?,?,?,?,?)";
    $sqlr = $con->prepare($sql);
    $sqlr->execute(array());
}

?>