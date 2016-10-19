<div id="morris-area-chart">
    <a href="<?php echo base_url() ?>internal_private/add_jefe_carrera"><button class="btn btn-success">Agregar</button></a>
    <br><br>
    <!--<table class="table table-condensed">
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
            </tr>
            <?php
                }
            ?>
        </tbody>

    </table>-->
    <label>No control:</label>
    <input type="text"> 
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
    <a href="<?php echo base_url() ?>internal_private/buscar_alumnos"><button class="btn btn-success">Buscar</button></a>
</div>

