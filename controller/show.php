<?php
    include('dbconfig.php');
    $query = "SELECT * FROM personal ORDER BY id DESC";
    $correo_total = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($correo_total)){ ?>
        <tr>
            <td><?php echo $row['fecha'] ?></td>
            <td><?php echo $row['remitente'] ?></td>
            <td><?php echo $row['piso_remitente'] ?></td>
            <td><?php echo $row['destinatario'] ?></td>
            <td><?php echo $row['piso_destinatario'] ?></td>
            <td><?php echo $row['codigo'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']?>">Editar</a>
                <a href="controller/delete.php?id=<?php echo $row['id']?>">Borrar</a>
            </td>
        </tr>
    <?php }
?>