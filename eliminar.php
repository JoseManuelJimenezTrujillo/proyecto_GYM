<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Gimnasio NoMasPanza</title>
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
	
			if($resultado>0){
				echo "<p>El registro se ha eliminado correctamente</p>";
			} else {
				echo "<p>Ha habido un error al borrar el registro</p>";
			}
	
			echo "<p><a href='index.php'>Volver</a></p>"
			
			
		?>

	</body>
</html>