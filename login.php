
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio No + Panza</title>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="estilos.css">
	<link rel="shortcut icon" href="images/icono.png">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<title>Gimnasio No+Panza</title>


	<header>

		<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
			<h1 class="navbar-brand">Gimnasio No+Panza</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Acciones
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="registrar.php">Registrar</a>
							<a class="dropdown-item" href="error.php">Proximamente</a>
						</div>
					</li>
				</ul>
				<a href="error.php" class="form-inline my-2 my-lg-0 nav-link">Login</a>
			</div>
		</nav>
	</header>

</head>
<body>
<?php
require 'conexion.php';
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

//se prepara y ejecuta la sentencia
$sql = "SELECT * FROM administradores where usuario='$usuario' and contraseña='$contraseña' LIMIT 1";
$resultado = $mysqli->query($sql);

//se extrae el registro. no se hace en bucle porque el resultado debe ser unico
$fila = $resultado->fetch_assoc();
if ($fila){
    header("location: panel_de_control.php");
}else{
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<h3>Usuario o contraseña incorrectos.</h3>";
    echo "</div>";
    echo "<div class='d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center' style='width:100%'>";
    echo "<p><a href='index.php'> Volver</a></p>";
    echo "</div>";
} 

?>
</body>
</html>