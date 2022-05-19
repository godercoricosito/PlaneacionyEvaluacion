<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indicadores</title>
    <link rel="stylesheet" href="sources/css/bootstrap.css">
    <script type="text/javascript" src="sources/js/bootstrap.js"></script>
    <script type="text/javascript" src="sources/js/menu.js"></script>
    <link rel="stylesheet" href="sources/menu.scss">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

    <?php include_once 'sources/menu-left.php'?>

    <div class="container-fluid mt-3">
    
        <h6 class="mt-5">Nombre de la matriz</h6>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nivel</th>
                <th scope="col">Nombre Indiador</th>
                <th scope="col">Unidad de Medida</th>
                <th scope="col">Frecuencia</th>
                <th scope="col">Anual</th>
                <th scope="col">Trimestre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">NF</th>
                <td>Tasa de variacion en el numero de alumnos de educacion superior inscritos en programas de calidad</td>
                <td>Reporte</td>
                <td>Anual</td>
                <td>34</td>
                <td>8</td>
                <td><button type="button" disabled class="btn btn-secondary">Reportar</button></td>
                </tr>
                <tr>
                <th scope="row">NP</th>
                <td>Tasa de variacion en el numero de otras cosas que son muy importantes como para ser evaluadas</td>
                <td>Acta</td>
                <td>Semestral</td>
                <td>12</td>
                <td>4</td>
                <td><button type="button"  class="btn btn-primary">Reportar</button></td>
                </tr>
                <tr>
                <th scope="row">NA 1.4</th>
                <td>Porcentaje de cambios generados en el uno u otro porque no siempre pero a veces si</td>
                <td>Chafaldrana</td>
                <td>Trimestral</td>
                <td>24</td>
                <td>6</td>
                <td><button type="button"  class="btn btn-primary">Reportar</button></td>
                </tr>
            </tbody>
        </table>

        <h6 class="mt-5">Nombre de otra matriz</h6>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nivel</th>
                <th scope="col">Nombre Indiador</th>
                <th scope="col">Unidad de Medida</th>
                <th scope="col">Frecuencia</th>
                <th scope="col">Anual</th>
                <th scope="col">Trimestre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">NF</th>
                <td>Nombre de otro indicador referente a programas de calidad</td>
                <td>Reporte</td>
                <td>Anual</td>
                <td>34</td>
                <td>8</td>
                <td><button type="button" disabled class="btn btn-secondary">Reportar</button></td>
                </tr>
                <tr>
                <th scope="row">NP</th>
                <td>Tasa de variacion en el numero de otras cosas que son muy importantes como para ser evaluadas</td>
                <td>Acta</td>
                <td>Semestral</td>
                <td>12</td>
                <td>4</td>
                <td><button type="button" class="btn btn-primary">Reportar</button></td>
                </tr>
                <tr>
                <th scope="row">NA 1.4</th>
                <td>Porcentaje de cambios generados en el uno u otro porque no siempre pero a veces si</td>
                <td>Chafaldrana</td>
                <td>Trimestral</td>
                <td>24</td>
                <td>6</td>
                <td><button type="button" class="btn btn-primary">Reportar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>