<?php
require 'conexion.php';
$sql = "SELECT * FROM usuarios";
$resultado = $mysqli->query($sql);

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
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Gimnasio No+Panza</title>

	<script>
		$(document).ready( function () {
			$('#tabla').DataTable();
		} );
	</script>
<header>
<div class="row nombre">
			<h1>Gimnasio No+Panza</h1>
		</div>
</header>

</head>

<body>
	<div class="container">
		
		<br>

		<div class="row">
		<a class='btn btn-primary' href='registrar.php'>Registrar</a>
		</div>
		<br>
		<br>

		<table id="tabla" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Fecha de inscripcion</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
					echo "<td><a href='sesiones.php?id=$fila[ID]'>$fila[Nombre]</a></td>";
					echo "<td>$fila[Fecha_inscripcion]</td>";
					echo "<td><a class='btn btn-danger' href='eliminar.php?id=$fila[ID]'>Eliminar</td>";
					echo "</tr>";
					
				}
				?>
			</tbody>
		</table>

	</div>
	</div>


</body>

</html>