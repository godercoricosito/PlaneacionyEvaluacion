<?php
session_start();
if($_SESSION['id_permiso'] == 1){
?>
<!DOCTYPE html>
<html lang="es">
<?php include 'head.php';?>
<?php include 'header.php';?>
<body>
    <br>
    <div class="container mx-auto">
        <nav class="flex py-3 px-5 text-gray-700 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Inicio
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Indicadores</span>
                    </div>
                </li>
            </ol>
        </nav>
        <br>
        <div class="relative overflow-x-auto shadow-md sm:rounded-md">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-center text-gray-500 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nivel
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre Indicador
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Unidad de Medida
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Frecuencia
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Anual
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Trimestre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Reportar</span>
                            </th>
                        </tr>
                    </thead>
                    <?php
                    include 'conexion.php'; 
                    $consulta = "SELECT * FROM indicadores";
                    $resultado = $mysqli->query($consulta);
                    if($resultado->num_rows > 0){
                        foreach($resultado as $datos){
                        ?>
                    <tbody>
                        <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                <?php echo $datos['nivel_indicador'];?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $datos['nombre'];?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $datos['tipo'];?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $datos['frecuencia'];?>
                            </td>
                            <td class="px-6 py-4">
                                34
                            </td>
                            <td class="px-6 py-4">
                                8
                            </td>
                            <td class="px-6 py-4 text-right">
                            <a href="reportar_indicador.php?id=<?php echo $datos['id_indicador'];?>" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Reportar</a>
                            </td>
                        </tr>
                    </tbody>
                        <?php
                        }
                    } else{
                        ?>
                        <td class="px-6 py-4 text-center">Sin Indicadores</td>
                        <?php
                    }
                    ?>
            </table>
        </div>
    </div>
<?php include 'footer.php';?>    
</body>
</html>
<?php
} else{
    ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}
?>