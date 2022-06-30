<?php
require_once 'models/conection.php';
session_start();


$user = $_POST['usuario'];
$password = $_POST['password'];
$contador = 0;

$loguser = $con->prepare("SELECT * FROM usuarios WHERE username = ?");
try{
    $loguser->execute(array($user));
    $usuarios = $loguser->fetchAll(PDO::FETCH_ASSOC);
}catch(Exception $e){
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

if ($usuarios){
    foreach($usuarios as $usuario){
        $uppass = $usuario['password'];
        if (password_verify($password, $uppass)){
            $_SESSION['user'] = $usuario;
            header('Location: inicio.php');
        }else{
            header('Location: index.php?fail=1');
        }
    }
}else{
    header('Location: index.php?fail=2');
}
