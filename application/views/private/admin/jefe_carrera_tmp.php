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
                    <td><?php switch ($jefes->carrera){
                        case "contador":    echo "Lic. Contador Público";                break;
                        case "informatica": echo "Ing. Informática";                     break;
                        case "sistemas":    echo "Ing. en Sistemas Computacionales";     break;
                        case "industrial":  echo "Ing. Industrial";                      break;
                        case "electronica": echo "Ing. Electrónica";                     break;
                        case "gestion":     echo "Ing. en Gestión Empresarial";          break;
                        case "innovacion":  echo "Ing. Innovación Agrícola Sustentable"; break;
                        case "petrolera":   echo "Ing. Petrolera";                       break;
                        case "tic":         echo "Ing. Tic";                             break;
                        case "energias":    echo "Ing. Energías Renovables";             break;
                    }
                    ?></td>
                    <td><?php echo $jefes->email; ?></td>
                    <td><?php echo $jefes->telefono; ?></td>
                    <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>internal_private/editar_jefe_carrera/<?php echo $jefes->clave_acceso; ?>">Editar</a></td>
                    <td><a class="btn btn-danger" role="button"  onclick="confirmarDeleteJefeCarrera('<?php echo $jefes->clave_acceso; ?>')">Eliminar</a></td>
                    <td><a class="btn btn-warning" role="button" onclick="confirmarCambiarPasJefe('<?php echo $jefes->clave_acceso; ?>')">Editar pass</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>

    </table>
</div>

<!-- Modal eliminar-->
<div class="modal fade" id="modalDeleteJefeCarrera" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tituloEliminarJefe"></h4>
            </div>

            <div class="modal-body" id="cuerpoEliminarJefe"></div>
            <div class="modal-footer">
                <a id="rutaEliminarJefe" href=""><button type="button"
                                                         class="btn btn-success">Aceptar</button></a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cambiar contraseña-->
<div class="modal fade" id="modalCambiarJefeCarrera" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tituloCambiarJefe"></h4>
            </div>
            <form id="rutaCambiarJefe" action="" method="post">
                <div class="modal-body">
                    <div  id="cuerpoCambiarJefe"></div><br>
                    <div class="form-group">
                        <label class="control-label" for="inputPassword3">Nuevo Password:</label>
                        <input type="password" class="form-control" name="password" id="passwordCambiar" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password2">Repetir Nuevo Password:</label>
                        <input type="password" class="form-control" name="password2" id="password2Cambiar" placeholder="Repetir Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit"class="btn btn-success">Aceptar</button>
                    <button type="button" class="btn btn-danger" id="closeModalCambiarJefe">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

