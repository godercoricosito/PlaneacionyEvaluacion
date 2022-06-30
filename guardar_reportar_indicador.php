<?php 
session_start();
if( $_SESSION['id_permiso'] == 1 ){
    include 'conexion.php';
    $extensiones = array('image/jpg','image/jpeg','image/png','application/pdf','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    if( in_array( $_FILES['path_evidencia']['type'], $extensiones ) && $_FILES['path_evidencia']['error'] == 0 ) {
        $ruta_base = './evidencias/editable/';
        if( !is_dir( $ruta_base ) ) {
            mkdir($ruta_base, 0755, true);
        }
        $nombre = str_replace(array(' ', 'php','js','phtml','php3'), '_', date('Ymd_His') . '_' . $_FILES['path_evidencia']['name']);
        //echo 'antes de mover el primer file';
        if( move_uploaded_file( $_FILES['path_evidencia']['tmp_name'] , $ruta_base . $nombre ) ) {
            print_r($_FILES);
            if( ( $_FILES['path_evidencia_evidencia']['type'] == 'image/jpg' || $_FILES['path_evidencia_evidencia']['type'] == 'image/jpeg' || $_FILES['path_evidencia_evidencia']['type'] == 'image/png' ) && $_FILES['path_evidencia_evidencia']['error'] == 0 ){
                $ruta_base = './evidencias/imagenes/';
                if( !is_dir( $ruta_base ) ) {
                    mkdir($ruta_base, 0755, true);
                }
                $trimestre = $mysqli->real_escape_string( $_POST['trimestre'] );
                $avance = $mysqli->real_escape_string( $_POST['avance'] );
                $justificacion = $mysqli->real_escape_string( $_POST['justificacion'] );
                $id_usuario_avance = $_SESSION['id_usuario'];
                $imagen = str_replace(array(' ', 'php','js','phtml','php3'), '_', date('Ymd_His') . '_' . $_FILES['path_evidencia_evidencia']['name']);
                if( move_uploaded_file( $_FILES['path_evidencia_evidencia']['tmp_name'] , $ruta_base . $imagen ) ) {
                    //echo 'mueve segundo file';
                    $consulta = "INSERT INTO avances_indicadores(trimestre,avance,justificacion,id_usuario_avance,path_evidencia,path_evidencia_evidencia) VALUES ('$trimestre','$avance','$justificacion',$id_usuario_avance,'$nombre','$imagen')";
                    $resultado = $mysqli->query($consulta);
                    print_r($consulta);
                    ?>
                    <script>
                        alert('Registro exitoso');
                        //window.location.href = 'indicadores.php';
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert('Ha ocurrido un error al mover el archivo, intenta nuevamente');
                        window.location.href = 'reportar_indicador.php';
                    </script>
                    <?php   
                }
            } else{
                ?>
                <script>
                    alert('Formato de imagen no válido');
                </script>
                <?php
            }
        } else{
            ?>
            <script>
                alert('Error al mover el archivo');
            </script>
            <?php
        }
    } else{
        ?>
        <script>
            alert('Formato de evidencia no válido');
        </script>
        <?php
    }
}





?>