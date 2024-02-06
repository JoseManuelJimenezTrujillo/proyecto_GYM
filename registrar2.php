<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
		<?php
			 //ESTABLEZCO CONEXION
			 require 'conexion.php';

			 //obtengo los datos introducidos en el formulario anterior
			 $nombre = $_POST['nombre'];
			 $fecha= $_POST['fecha'];
	 
			 //se prepara la sentencia sql
			 $sql = "INSERT INTO usuarios (Nombre, Fecha_inscripcion) VALUES ('$nombre','$fecha')";
			 //se ejecuta la sentencia y se gurada el resultado en resultado
			 $resultado = $mysqli -> query($sql);
	 
			 if($resultado > 0 ){
				 header("location: index.php");
			 }else{
				 echo "<p class='alert alert-danger'>Ha habido un error</p>";
			 }
			 echo "<p><a class='btn btn-primary' href='index.php'>Regresar</a></p>";
		 
			
		?>

	</body>
</html>