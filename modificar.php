<?php
        //ESTABLEZCO CONEXION
        require 'conexion.php';
		$id=$_GET['id'];
		$sql = "SELECT * from usuarios where id=$id LIMIT 1";
		$resultado = $mysqli->query($sql);
		$fila = $resultado->fetch_assoc();
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
					<form id="registro" name="registro" autocomplete="off" action="modificar2.php" method="Post">
						<div class="form-group">
							<label>Nombre<input type="text" class="form-control"name="Nombre" maxlength="50" required value="<?php echo $fila['Nombre']; ?>"></label>
							<input type="hidden" name="id" value="<?php echo $fila['ID'];?>"> 
						</div>
						
						<div class="form-group">
							<label>Fecha de inscripcion<input type="date" class="form-control" name="fecha" required value="<?php echo $fila['Fecha_de_nacimiento']; ?>"></label>
						</div>
						
						<div class="form-group">
						<input type="submit" class='btn btn-primary' value="Confirmar cambios" >
							
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