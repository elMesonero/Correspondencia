<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/PDVSA-ico2.png">
    <title>PDVSA - Correspondencia</title>
</head>
<body>
	<h1 class="titulo">Sistema de Control y Analisis de Correspondencia</h1>	
	<div class="row">
		<form class="card" action="dashboard.php" method="post">
			<h2>Login</h2>
			<div>
				<input type="text" name="cedula" placeholder="Cedula" class="form-control">
				<input type="password" name="contraseña" placeholder="Contraseña" class="form-control">
				<a href="#">¿Olvido su contraseña?</a>
				<a href="registro.php">Registrese</a>
				<input type="submit" name="ingresar" class="boton" value="Ingresar">
			</div>
		</form>
	</div>
</body>
</html>