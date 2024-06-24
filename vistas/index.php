<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Registro de Materias</h2>
        
    </div>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <!-- <th>id</th> -->
                    <th>Asignatura</th>
                    <th>Nombre del profesor</th>
                    <th>Hora Inicio</th>
                    <th>Creditos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id']; ?></th>
                        <th><?php echo $data['nombre']; ?></th>
                        <th><?php echo $data['profesor']; ?></th>
                        <th><?php echo $data['hora_inicio']; ?></th>
                        <th><?php echo $data['creditos']; ?></th>
                        <th>
                            <a href="index.php?m=materia&id=<?php echo $data['id']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id=<?php echo $data['id']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>