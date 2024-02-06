<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="shortcut icon" href="images/icono.png">
		
		<title>Gimnasio No+Panza</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Socios</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form id="registro" name="registro" autocomplete="off" method="post" action="registrar2.php">
						<div class="form-group">
							<label>Nombre <input class="form-control" type="text" name="nombre" maxlength="50"></label>
						</div>

						<div class="form-group">
						<label>Fecha de inscripción <input class="form-control" type="date" name="fecha" value="2024-02-06"></label><br/>
                        </div>
						
						<div class="form-group">
							<input type="submit" value="Registrar" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				