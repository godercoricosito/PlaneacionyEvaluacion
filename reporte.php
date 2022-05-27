<?php
require_once 'Controllers/ReporteController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte por Área</title>
    <link rel="stylesheet" href="sources/css/bootstrap.css">
    <script type="text/javascript" src="sources/js/bootstrap.js"></script>
    <script type="text/javascript" src="sources/js/menu.js"></script>
    <link rel="stylesheet" href="sources/menu.scss">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

<?php include 'sources/menu-left.php'?>

<div class="container-fluid mt-3">

    <div class="d-flex justify-content-center">
        
        <nav aria-label="navigation">
            <ul class="pagination">
                <?= Menu_mes($mes_actual, $mesareportar)?>  
            </ul>
        </nav>
    </div>    

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Actividad</th>
            <th scope="text-center">Unidad de Medida</th>
            <th scope="text-center">Programado Anual</th>
            <th scope="text-center">Avance Actual</th>
            <th scope="text-center">Programado Abril</th>
            <th scope=""></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Supervisar las actividades realizadas de la subdirección</td>
            <td class="text-center">Evento</td>
            <td class="text-center">23</td>
            <td class="text-center">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </td>
            <td class="text-center">5</td>
            <td class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Reportar</button></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Solicitar la capacitación de personal para el manejo de la Librería del Fondo de Cultura Económica del Municipio de Metepec</td>
            <td class="text-center">Acta</td>
            <td class="text-center">81</td>
            <td class="text-center">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
            </td>
            <td class="text-center">9</td>
            <td class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Reportar</button></td>
            </tr>
            

            <tr class="bg-danger text-light" >
            <th scope="row">3</th>
            <td>Impulsar la investigaciones sobre las raices históricas, artísticas y culturales del Municipio</td>
            <td class="text-center">Investigación</td>
            <td class="text-center">8</td>
            <td class="text-center">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>
            </td>
            <td class="text-center">0</td>
            <td class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Reportar</button></td>
            </tr>

        </tbody>
    </table>

<!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reporta avance del mes de Abril</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <label for="number">Alcanzado en el mes de Abril:</label><br>
                <input type="number" name="alcanzado" id="alcanzado" placeholder="5">
                <br><br>
                <label for="fname">Sube tu Evidencia:</label><br>
                <input type="file" name="archivo" id="archivo">
                <br><br>
                <label for="fname">Justifiación caso de variación:</label><br>
                <textarea name="justifiacion" id="justificacion" cols="60" rows="5"></textarea>


            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
        </div>
    </div>
    </div>
</div>

<script>
    const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
</body>
</html>