<?php
if($_POST){
    require_once 'models/conection.php';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $user = $_POST['usuario'];
    $pass = $_POST['pass'];
    $nivel = $_POST['nivel'];
    $passsegura = password_hash($pass, PASSWORD_DEFAULT);

    $sql_editar = "INSERT INTO usuarios (nombre, apellidos, email, tel, username, password, nivel) VALUES ('$nombre', '$apellidos', '$email', '$telefono', '$user', '$passsegura', '$nivel')";
    $sentencia_agregar = $con->prepare($sql_editar);
    try{
        $sentencia_agregar->execute();
        echo "Si se registro";
    }catch(Exception $e){
        echo 'No se registró: ',  $e->getMessage(), "\n";
        die();
    }
}
?>

<h4>Crear usuario y contraseña</h4>
<form action="" method="post">
    <div class="form-row">
        <input type="text" placeholder="Nombre" class="form-control" id="nombre" name="nombre">
        <input type="text" placeholder="Apellidos" class="form-control" id="apellidos" name="apellidos">
        <input type="text" placeholder="Email" class="form-control" id="email" name="email">
        <input type="text" placeholder="Telefono" class="form-control" id="telefono" name="telefono">
        <input type="text" placeholder="Usuario" class="form-control" id="usuario" name="usuario">
        <input type="password" placeholder="Contraseña" class="form-control" id="pass" name="pass">
        <input type="number" placeholder="Nivel" class="form-control" id="nivel" name="nivel">
        <button class="btn btn-primary mt-4" type="submit" name="cero" id="cero"> <i class="fas fa-user-edit"></i> Crear</button>
    </div>
</form>
<br>