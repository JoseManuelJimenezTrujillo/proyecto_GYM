<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="login.css">
	<link rel="shortcut icon" href="images/icono.png">
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
							<a class="dropdown-item" href="proximamente.php">Proximamente</a>
						</div>
					</li>
				</ul>
			
			</div>
		</nav>
	</header>
	<title>Gimnasio No+Panza Login</title>
</head>

<body>
	<div class="container">
		<div class="logo">Gimnasio No+Panza</div>
		<form class="form" method="POST" action="login.php">
			<input type="usuario" class="input" placeholder="Usuario" name="usuario" required>
			<input type="password" class="input" placeholder="Contraseña" name="contraseña" required>
			<button type="submit" class="button">Iniciar sesión</button>
		</form>
		

	</div>
</body>

</html>