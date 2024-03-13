<?php 

include('../model/dbconfig.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM correo WHERE id = $id";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("No se ha borrado, verifique");
    }
    header("Location: ./");
}

?>