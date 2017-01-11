<div id="morris-area-chart">
    <a href="<?php echo base_url() ?>internal_private/add_alumno"><button class="btn btn-success">Agregar</button></a>
    <br><br>
       
    <form class="form-inline" action="<?php echo base_url() ?>internal_private/buscar_alumnos" method="post">

        <div class="form-group">
            <label>No control:</label>
            <input class="form-control" type="text" name="no_control" value="<?php if(isset($no_control)){echo $no_control; } ?>" placeholder="Ingrese el número de control."> 
        </div>
        <div class="form-group">
            <label>Carrera:</label>
            <select name="carrera" id="disabledSelect">
                <option value=""></option>
                <option value="contador" <?php if(isset($carrera) and $carrera == "contador"){echo "selected"; } ?>>Lic. Contador Público</option>
                <option value="informatica" <?php if(isset($carrera) and $carrera == "informatica"){echo "selected"; } ?>>Ing. Informática</option>
                <option value="sistemas" <?php if(isset($carrera) and $carrera == "sistemas"){echo "selected"; } ?>>Ing. en Sistemas Computacionales</option>
                <option value="industrial" <?php if(isset($carrera) and $carrera == "industrial"){echo "selected"; } ?>>Ing. Industrial</option>
                <option value="electronica" <?php if(isset($carrera) and $carrera == "electronica"){echo "selected"; } ?>>Ing. Electrónica</option>
                <option value="gestion" <?php if(isset($carrera) and $carrera == "gestion"){echo "selected"; } ?>>Ing. en Gestión Empresarial</option>
                <option value="innovacion"<?php if(isset($carrera) and $carrera == "innovacion"){echo "selected"; } ?>>Ing. Innovación Agrícola Sustentable</option>
                <option value="petrolera" <?php if(isset($carrera) and $carrera == "petrolera"){echo "selected"; } ?>>Ing. Petrolera</option>
                <option value="tic" <?php if(isset($carrera) and $carrera == "tic"){echo "selected"; } ?>>Ing. Tic</option>
                <option value="energias" <?php if(isset($carrera) and $carrera == "energias"){echo "selected"; } ?>>Ing. Energías Renovables</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Buscar</button>
        <?php if (isset($error)){ echo '<br><div style ="color:#FF0000;">' . $error . '</div>';} ?>
    </form>
 
    <?php if (isset($registros)) { ?>
        <table class="table table-condensed">
            <thead>
            <th>No control</th>
            <th>Nombre</th>
            <th>A. Paterno</th>
            <th>A. Materno</th>
            <th>Carrera</th>
            <th>Nombre Proyecto</th>
            <th colspan="3">Opciones</th>
            </thead>
            <tbody>
                <?php
                if($registros == FALSE){ ?>
                <tr class="danger">
                    <td>No se encontraron resultados</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php }else{
                    foreach ($registros->result() as $row) {
                ?>
                    <tr class="info">
                        <td><?php echo $row->numero_control; ?></td>
                        <td><?php echo $row->nombre; ?></td>
                        <td><?php echo $row->apellido_paterno; ?></td>
                        <td><?php echo $row->apellido_materno; ?></td>
                        <td><?php
                            switch ($row->carrera) {
                                case "contador": echo "Lic. Contador Público";
                                    break;
                                case "informatica": echo "Ing. Informática";
                                    break;
                                case "sistemas": echo "Ing. en Sistemas Computacionales";
                                    break;
                                case "industrial": echo "Ing. Industrial";
                                    break;
                                case "electronica": echo "Ing. Electrónica";
                                    break;
                                case "gestion": echo "Ing. en Gestión Empresarial";
                                    break;
                                case "innovacion": echo "Ing. Innovación Agrícola Sustentable";
                                    break;
                                case "petrolera": echo "Ing. Petrolera";
                                    break;
                                case "tic": echo "Ing. Tic";
                                    break;
                                case "energias": echo "Ing. Energías Renovables";
                                    break;
                            }
                            ?></td>
                        <td><?php echo $row->nombre_proyecto; ?></td>
                        <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>internal_private/descargar_zip/<?php echo $row->numero_control; ?>">Descargar ZIP</a></td>
                        <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>internal_private/descargar_escaneos/<?php echo $row->numero_control; ?>">Descrgar Escaneos</a></td>
                        <td><a class="btn btn-primary" role="button" href="<?php echo base_url() ?>internal_private/enviar_correo/<?php echo $row->numero_control; ?>">Enviar Correo</a></td>
                    </tr>
        <?php
                }
            }
        ?>
            </tbody>

        </table>
<?php } ?>
</div>

