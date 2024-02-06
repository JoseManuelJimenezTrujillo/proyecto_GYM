<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="estilos.css">

		<title>No+Panza</title>
	</head>
	<body>
    <?php
			//ESTABLEZCO CONEXION
			require 'conexion.php';

        //obtengo los datos introducidos en el formulario anterior
		$fecha = $_POST['fecha'];
		$entrada = $_POST['entrada'];
		$salida = $_POST['salida'];
			
		$sql = "INSERT INTO sesiones (Fecha, Hora_de_entrada, Hora_de_salida) VALUES ('$fecha', '$entrada', '$salida')";
			
		$resultado = $mysqli -> query($sql);

		if($resultado > 0){
			echo "<p class='alert alert-primary'>Sesión agregado</p>";
		}else{
			echo "<p class='alert alert-danger'>Ha habido un error</p>";
		}
			echo "<p><a href='index.php' class='btn btn-primary'>Volver</a></p>";
		?>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				