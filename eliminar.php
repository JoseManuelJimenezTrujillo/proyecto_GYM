<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="shortcut icon" href="images/icono.png">
		<link rel="stylesheet" href="estilos.css">
		
		<title>Gimnasio No+Panza</title>
	</head>
	<body>
		<?php
			//Establezco conexion
			require 'conexion.php';

			//Obtengo los datos introducidos en el formulario anterior 
			$id = $_GET['id'];
	
			//Se prepara la sentencia sql
		   $sql = "DELETE FROM usuarios WHERE id=$id";
			//Se ejecuta la sentencia y se guarda el resultado en $resultado
			$resultado = $mysqli->query($sql);
	
			if($resultado > 0 ){
				echo "<p class='alert alert-primary'>Registro eliminado</p>";
				
			}else{
				echo "<p <p class='alert alert-danger'>Ha habido un error</p>";
			}
			echo "<p><a class='btn btn-primary' href='index.php'>Regresar</a></p>";
			
			
		?>

	</body>
</html>