<?php
require_once 'conection.php';

function Read($con, $sentence){
    $loguser = $con->prepare("SELECT a.*, p.*, v.* 
    FROM actividades a 
    LEFT JOIN programaciones p ON p.id_atividad = a.id_actividad
    LEFT JOIN avances v ON 
    avanes v 
    ");
    try{
        $loguser->execute(array($user));
        $usuarios = $loguser->fetchAll(PDO::FETCH_ASSOC);
    }

?>