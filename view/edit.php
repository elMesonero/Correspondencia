<?php include('../controller/dbconfig.php'); ?>

<?php include('../controller/edit.php'); ?>

<?php include('includes/header.php'); ?>

<div class="row">
    <div class="input">
        <div class="card">
            <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
                <div class="form-group">
                    <input type="text" pattern="[A-z]* [A-z]*" name="remitente" class="form-control-name" value="<?php echo $remitente; ?>" placeholder="Remitente" autofocus required>
                    <input type="text" name="piso-remitente" class="form-control-piso" value="<?php echo $piso_remitente; ?>" placeholder="Piso" required>
                </div>
                <div class="form-group">
                    <input type="text" pattern="[A-z]* [A-z]*" name="destinatario" class="form-control-name" value="<?php echo $destinatario; ?>" placeholder="Destinatario" required>
                    <input type="text" name="piso-destinatario" class="form-control-piso" value="<?php echo $piso_destinatario; ?>" placeholder="Piso" required>
                </div>
                <div class="form-group">
                    <input type="text" name="codigo" class="form-control-code" value="<?php echo $codigo; ?>" placeholder="Codigo" required>
                </div>
                <input type="submit" class="boton-edit" name="guardar" value="Actualizar">
            </form>
        <div>
    </div>
</div>

<?php include('includes/footer.php'); ?>