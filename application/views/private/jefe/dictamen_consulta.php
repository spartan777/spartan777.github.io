<table class="table table-condensed">
        <thead>
        <th>Clave acceso</th>
        <th>Archivo</th>
        <th>Opciones</th>
        </thead>
        <tbody>
            <?php
            foreach ($resultados->result() as $jefes) {
                ?>
                <tr class="info">
                    <td><?php echo $jefes->clave_acceso; ?></td>
                    <td><?php echo $jefes->nombre_archivo; ?></td>
                    <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>jefe_carrera/descargar_dictamen/<?php echo $jefes->nombre_archivo; ?>">Descargar</a></td>
                    <td><a class="btn btn-danger" role="button"  onclick="confirmarDeleteDictamen('<?php echo $jefes->nombre_archivo; ?>')">Eliminar</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>

    </table>

<!-- Modal eliminar-->
<div class="modal fade" id="modalDeleteDictamen" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tituloEliminarDictamen"></h4>
            </div>

            <div class="modal-body" id="cuerpoEliminarDictamen"></div>
            <div class="modal-footer">
                <a id="rutaEliminarDictamen" href=""><button type="button"
                                                         class="btn btn-success">Aceptar</button></a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
