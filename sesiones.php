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
   
</head>

<body>
<table id="tabla" class="display" border="1">
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


<a class='btn btn-danger' href='añadir_sesion.php?id=$id'>Añadir</a>

</body>

</html>