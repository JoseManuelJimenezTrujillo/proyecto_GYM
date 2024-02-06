<?php
        //ESTABLEZCO CONEXION
        require 'conexion.php';
        $id = $_GET['id'];

?>
<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="estilos.css">
        <link rel="shortcut icon" href="images/icono.png">

		<title>No+Panza</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Sesiones</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form -->
					<form id="registro" name="registro" autocomplete="off" action="añadir_sesion2.php" method="Post">

                        <input type="hidden" name="id"  value="<?php echo $id; ?>"/>
					
						<div class="form-group">
						<label>Fecha de sesion <input class="form-control" type="date" name="fecha" value="2024-02-06"></label>
                        </div>
						
						<div class="form-group">
							<label>Hora de entrada<input type="text" class="form-control" name="entrada" maxlength="5" required></label>
						</div>

                        <div class="form-group">
							<label>Hora de salida<input type="text" class="form-control" name="salida" maxlength="5" required></label>
						</div>

						<div class="form-group">
						<input type="submit" class='btn btn-primary' value="Registrar" >
							
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