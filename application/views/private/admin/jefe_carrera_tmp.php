<div id="morris-area-chart">
    <a href="<?php echo base_url() ?>internal_private/add_jefe_carrera"><button class="btn btn-success">Agregar</button></a>
    <br><br>
    <table class="table table-condensed">
        <thead>
            <th>Clave acceso</th>
            <th>Nombre</th>
            <th>A. Paterno</th>
            <th>A. Materno</th>
            <th>Carrera</th>
            <th>Email</th>
            <th>Telefono</th>
            <th colspan="3">Opciones</th>
        </thead>
        <tbody>
            <?php
                foreach ($registros->result() as $jefes) {
            ?>
            <tr class="info">
                <td><?php echo $jefes->clave_acceso; ?></td>
                <td><?php echo $jefes->nombre; ?></td>
                <td><?php echo $jefes->apellido_paterno; ?></td>
                <td><?php echo $jefes->apellido_materno; ?></td>
                <td><?php echo $jefes->carrera; ?></td>
                <td><?php echo $jefes->email; ?></td>
                <td><?php echo $jefes->telefono; ?></td>
                <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>internal_private/editar_jefe_carrera/<?php echo $jefes->clave_acceso; ?>">Editar</a></td>
                <td><a class="btn btn-primary" role="button" href="">Eliminar</a></td>
                <td><a class="btn btn-primary" role="button" href="">Editar pass</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>

    </table>
</div>

