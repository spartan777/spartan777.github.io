<?php if($resultados->num_rows > 0){?>
<table class="table table-condensed">
        <thead>
        <th>Archivo</th>
        <th>Fecha y Hora</th>
        <th>Opciones</th>
        </thead>
        <tbody>
            <?php
            foreach ($resultados->result() as $archivos) {
                ?>
                <tr class="info">
                    <td><?php echo $archivos->nombre_archivo; ?></td>
                    <td><?php echo $archivos->hora_fecha; ?></td>
                    <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>jefe_carrera/descargar_dictamen/<?php echo $archivos->nombre_archivo; ?>">Descargar</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>

    </table>
<?php }else{?>
<div>
    <span style="color:red">No se encuentran archivos de dictamen.<br>
        Favor de contactar a su Jefe de Carrera.
    </span>
</div>
<?php }