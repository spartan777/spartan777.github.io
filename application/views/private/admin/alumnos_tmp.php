<div id="morris-area-chart">
    <a href="<?php echo base_url() ?>internal_private/add_alumno"><button class="btn btn-success">Agregar</button></a>
    <br><br>
    <form class="form-inline" action="<?php echo base_url() ?>internal_private/buscar_alumnos" method="post">

        <div class="form-group">
            <label>No control:</label>
            <input class="form-control" type="text" name="no_control"> 
        </div>
        <div class="form-group">
            <label>Carrera:</label>
            <select name="carrera" id="disabledSelect">
                <option value=""></option>
                <option value="contador">Lic. Contador Público</option>
                <option value="informatica">Ing. Informática</option>
                <option value="sistemas">Ing. en Sistemas Computacionales</option>
                <option value="industrial">Ing. Industrial</option>
                <option value="electronica">Ing. Electrónica</option>
                <option value="gestion">Ing. en Gestión Empresarial</option>
                <option value="innovacion">Ing. Innovación Agrícola Sustentable</option>
                <option value="petrolera">Ing. Petrolera</option>
                <option value="tic">Ing. Tic</option>
                <option value="energias">Ing. Energías Renovables</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Buscar</button>
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
                foreach ($registros->result() as $row) {
                    ?>
                    <tr class="info">
                        <td><?php echo $row->numero_control; ?></td>
                        <td><?php echo $row->nombre; ?></td>
                        <td><?php echo $row->apellido_paterno; ?></td>
                        <td><?php echo $row->apellido_materno; ?></td>
                        <td><?php
                            switch ($jefes->carrera) {
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

                    </tr>
        <?php
    }
    ?>
            </tbody>

        </table>
<?php } ?>
</div>

