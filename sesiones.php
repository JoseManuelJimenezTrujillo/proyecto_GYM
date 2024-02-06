<?php
require 'conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM sesiones where ID_Usuario=$id";
$resultado = $mysqli->query($sql);
$sql2 = "SELECT * FROM USUARIOS WHERE ID=$id";
$resultado2=$mysqli->query($sql2);
$fila = $resultado->fetch_assoc();
$fila2 = $resultado2->fetch_assoc();
?>

<!doctype html>
<html lang="es">

<head>
    	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>No+Panza</title>

	<script>
		$(document).ready( function () {
			$('#tabla').DataTable();
		} );
	</script>

    <title>Partidas jugadas</title>
   
</head>

<body>
	<h1>Sesiones de <?php echo $fila2['Nombre']; ?></h1>
<table id="tabla" >
			<thead>
				<tr>
					<th>Fecha</th>
                    <th>Hora de entrada</th>
                    <th>Hora de salida</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
					echo "<td>$fila[Fecha]</td>";
                    echo "<td>$fila[Hora_de_entrada]</td>";
                    echo "<td>$fila[Hora_de_salida]</td>";
                    

					echo "</tr>";
				}
				
                echo "";
				?>
			</tbody>
		</table>

<?php
echo "<a class='btn btn-danger' href='añadir_sesion.php?id=$id'>Añadir</a>"
?>
</body>

</html>