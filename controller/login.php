<?php 
include ('dbconfig.php');

$query = "SELECT * FROM usuarios";
$conexion = mysqli_query($conn, $query);

if(isset($_POST['ingresar'])){

	$cedula = $_POST['cedula'];
	$contraseña = $_POST['contraseña'];



	header("Location: dashboard.php");
}

 ?>