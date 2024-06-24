<div class="container">
    <div class="jumbotron">
        <h2>Formulario de Registro</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div>
            <?php
            // Asegúrate de que $data esté definido y no sea null
            $data = isset($data) ? $data : array('id' => '', 'nombre' => '', 'profesor' => '', 'hora_inicio' => '', 'creditos' => '');
            ?>
            <form action="index.php?m=get_datosE<?php echo $data['id'] ? '&id=' . $data['id'] : ''; ?>" method="post">
            <input type="hidden" class="form-control" hiden name="txt_id" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>" >
                <div class="form-group">
                    <label class="control-label" for="txt_nombre">Asignatura:</label>

                    <input type="text" class="form-control" name="txt_nombre" value="<?php echo isset($data['nombre']) ? $data['nombre'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label class="control-label" for="txt_profesor">Nombre del Profesor:</label>

                    <input type="text" class="form-control" name="txt_profesor" value="<?php echo isset($data['profesor']) ? $data['profesor'] : ''; ?>">

                </div>
                <div class="form-group">
                    <label class="control-label" for="hora_inicio">Hora de Inicio:</label>

                    <input type="time" class="form-control" name="txt_hora_inicio" value="<?php echo isset($data['hora_inicio']) ? $data['hora_inicio'] : ''; ?>">

                </div>
                <div class="form-group">
                    <label class="control-label" for="txt_creditos">Créditos:</label>

                    <input type="text" class="form-control" name="txt_creditos" value="<?php echo isset($data['creditos']) ? $data['creditos'] : ''; ?>">

                </div>
                <div class="form-group">

                    <input type="submit" class="btn btn-primary form-control" value="<?php echo $data['id'] ? 'Actualizar' : 'Registrar'; ?>">

                </div>
            </form>
        </div>
    </div>
</div>