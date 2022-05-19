<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividades</title>
    <link rel="stylesheet" href="sources/css/bootstrap.css">
    <script type="text/javascript" src="sources/js/bootstrap.js"></script>
    <script type="text/javascript" src="sources/js/menu.js"></script>
    <link rel="stylesheet" href="sources/menu.scss">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<?php include_once 'sources/menu-left.php'?>

<div class="container-fluid mt-3">

	<div class="row">
		<div class="col-sm-4">
			<div class="card text-center mr">
				<div class="card-header bg-warning">
					Pendiente
				</div>
				<div class="card-body">
					<h5 class="card-title">Direccion</h5>
					<p class="card-text">Aqui va un pequeño resumen de las metas mensuales...</p>
					<a href="reporte.php" class="btn btn-primary">Reportar</a>
				</div>
				<div class="card-footer text-muted">
					Aqui va el nivel de urgencia para reportar
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="card text-center mr">
				<div class="card-header bg-warning">
					Pendiente
				</div>
				<div class="card-body">
					<h5 class="card-title">Soporte Tecnico</h5>
					<p class="card-text">Aqui va un pequeño resumen de las metas mensuales...</p>
					<a href="reporte.php" class="btn btn-primary">Reportar</a>
				</div>
				<div class="card-footer text-muted">
					Aqui va el nivel de urgencia para reportar
				</div>
			</div>
		</div>
	</div>


</div>

</body>
</html>