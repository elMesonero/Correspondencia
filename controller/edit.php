<?php 

if(isset($_GET{'id'})){
    $id = $_GET['id'];
    $query = "SELECT * FROM correo  WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $remitente = $row['remitente'];
        $piso_remitente = $row['piso_remitente'];
        $destinatario = $row['destinatario'];
        $piso_destinatario = $row['piso_destinatario'];
        $codigo = $row['codigo']; 
    }
}

if(isset($_POST['guardar'])){
    $id = $_GET['id'];

    $remitente = $_POST['remitente'];
    $remitente = strtolower($remitente);
    $remitente = ucwords($remitente);
    
    $piso_remitente = $_POST['piso-remitente'];
    $piso_remitente = strtoupper($piso_remitente);

    $destinatario = $_POST['destinatario'];
    $destinatario = strtolower($destinatario);
    $destinatario = ucwords($destinatario);

    $piso_destinatario = $_POST['piso-destinatario'];
    $piso_destinatario = strtoupper($piso_destinatario);

    $codigo = $_POST['codigo'];
    $codigo = strtoupper($codigo);

    $query = "UPDATE correo SET remitente = '$remitente', piso_remitente = '$piso_remitente', destinatario = '$destinatario', piso_destinatario = '$piso_destinatario', codigo = '$codigo' WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: ./");
}

?>