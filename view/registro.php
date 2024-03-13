<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="icon" href="img/PDVSA-ico2.png">
    <title>PDVSA - Correspondencia</title>
</head>
<body>
	<h1 class="titulo">Sistema de Control y Analisis de Correspondencia</h1>	
	<div class="row">
		<form class="card" action="admin.php" method="post">
			<h2>Registro</h2>
			<div>
				<input type="text" name="nombre" placeholder="Nombre" class="form-control">
				<input type="password" name="correo" placeholder="Correo" class="form-control">
				<input type="text" name="cedula" placeholder="Cedula" class="form-control">
				<input type="password" name="contraseña" placeholder="Contraseña" class="form-control">
				<a href="index.php">Volver</a>
				<input type="submit" name="registrar" class="boton" value="Registrar">
			</div>
		</form>
	</div>
</body>
</html>