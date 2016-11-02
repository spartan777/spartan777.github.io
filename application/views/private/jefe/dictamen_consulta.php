<table class="table table-condensed">
        <thead>
        <th>Clave acceso</th>
        <th>Archivo</th>
        <th colspan="2">Opciones</th>
        </thead>
        <tbody>
            <?php
            foreach ($resultados->result() as $jefes) {
                ?>
                <tr class="info">
                    <td><?php echo $jefes->clave_acceso; ?></td>
                    <td><?php echo $jefes->nombre_archivo; ?></td>
                    <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>jefe_carrera/descargar_dictamen/<?php echo $jefes->nombre_archivo; ?>">Descargar</a></td>
                    <td><a class="btn btn-danger" role="button"  onclick="confirmarDeleteJefeCarrera('<?php echo $jefes->clave_acceso; ?>')">Eliminar</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>

    </table>
