<?php
require 'conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM sesiones where ID_Usuario=$id";
$resultado = $mysqli->query($sql);

$fila = $resultado->fetch_assoc();

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Partidas jugadas</title>
    <table id="tabla" class="display" border="1">
			<thead>
				<tr>
					<th>ID Sesion</th>
					<th>ID Usuario</th>
					<th>Fecha</th>
                    <th>Hora de entrada</th>
                    <th>Hora de salida</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
					echo "<td>$fila[ID_Sesion]</td>";
					echo "<td>$fila[ID_Usuario]</td>";
					echo "<td>$fila[Fecha]</td>";
                    echo "<td>$fila[Hora_de_entrada]</td>";
                    echo "<td>$fila[Hora_de_salida]</td>";
                    echo "<td><a class='btn btn-danger' href='añadir_sesion.php?id=$fila[ID_Sesion]'>Añadir</td>";

					echo "</tr>";
				}
				?>
			</tbody>
		</table>

</head>

<body>
   

</body>

</html>