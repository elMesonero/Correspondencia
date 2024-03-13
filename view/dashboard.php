<?php include('includes/header.php'); ?>

    <div class="row">
        <div class="input">
            <div class="card content card__open">
                <div class="card__header">
                    <div class="card__title">
                        <span class="estadistica__h2">Registro</span>
                        <img src="img/arrow.png" alt="flecha" class="card__arrow">
                    </div>
                </div>
                <div class="card__grid">
                    <form action="save.php" method="post">
                        <div class="form-group">
                            <input type="date" name="fecha" class="form-control-date">
                            <input type="text" pattern="[A-z]* [A-z]*" name="remitente" class="form-control-name" placeholder="Remitente" autofocus required>
                            <select name="piso_remitente" class="form-control-date">
                                <option>Presidencia</option>
                                <option>Internacionales</option>
                                <option>Gas</option>
                                <option>Finanzas</option>
                                <option>Refinacion</option>
                                <option>Planificacion y gestion</option>
                                <option>Exploracion y produccion</option>
                                <option>Consultoria Juridica</option>
                                <option>Presupuesto y Control</option>
                                <option>Auditoria Interna</option>
                                <option>Entes Corporativos</option>
                                <option>Logistica</option>
                                <option>DSI</option>
                                <option>Calidad de Vida</option>
                                <option>Recursos Humanos</option>
                                <option>CAIJ</option>
                                <option>CAIT</option>
                                <option>AIT</option>
                                <option>Salud</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" pattern="[A-z]* [A-z]*" name="destinatario" class="form-control-name" placeholder="Destinatario" required>
                            <select name="piso_destinatario" class="form-control-date">
                                <option>Presidencia</option>
                                <option>Internacionales</option>
                                <option>Gas</option>
                                <option>Finanzas</option>
                                <option>Refinacion</option>
                                <option>Planificacion y gestion</option>
                                <option>Exploracion y produccion</option>
                                <option>Consultoria Juridica</option>
                                <option>Presupuesto y Control</option>
                                <option>Auditoria Interna</option>
                                <option>Entes Corporativos</option>
                                <option>Logistica</option>
                                <option>DSI</option>
                                <option>Calidad de Vida</option>
                                <option>Recursos Humanos</option>
                                <option>CAIJ</option>
                                <option>CAIT</option>
                                <option>AIT</option>
                                <option>Salud</option>
                                <option>Externo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="codigo" class="form-control-code" placeholder="Codigo" required>
                        </div>
                        <input type="submit" class="boton-guardar" name="guardar" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
        <div class="detalles">
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Remitente</th>
                        <th>Departamento</th>
                        <th>Destinatario</th>
                        <th>Departamento</th>
                        <th>Codigo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php #include('../controller/show.php') ?>
                </tbody>
            </table>
        </div>
    </div>

<?php include('includes/footer.php') ?>