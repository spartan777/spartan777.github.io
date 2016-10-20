<div class="col-md-6">
    <form action="<?php echo base_url() ?>alumno/guardar_datos_proyecto" method="post">
        <div class="form-group">
            <label for="lugar">Lugar:</label>
            <input type="text" class="form-control" id="lugar" name="lugar" >
        </div>
        <div class="form-group">
            <label for="fecha">Fecha: </label>
            <input type="text" class="form-control" id="fecha" name="fecha" >
        </div>

        <div class="form-group">
            <label for="jefe_division">Jefe de div de estudios profesionales:</label>
            <input type="text" class="form-control" id="jefe_division" name="jefe_division">
        </div>

        <div class="form-group">
            <label for="jefe_carrera">Coordinador de la carrera:</label>
            <input type="text" class="form-control" id="jefe_carrera" name="jefe_carrera" value="<?php echo $jefe_carrera ?>" readonly="">
        </div>

        <div class="form-group">
            <label for="nombre_carrera">Nombre de la carrera:</label>
            <input type="text" class="form-control" id="nombre_carrera" name="nombre_carrera" value="<?php
                switch ($carrera) {
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
                ?>" readonly="">
        </div>

        <div class="form-group">
            <label for="nombre_proyecto">Nombre del Proyecto:</label>
            <input type="text" class="form-control" id="nombre_proyecto" name="nombre_proyecto">
        </div>

        <div class="form-group">
            <label for="opcion_proyecto">Opcion Elegida:</label><br>

            <label class="radio-inline">
                <input type="radio" name="opcion_proyecto" id="opcion_proyecto" value="Banco de Proyectos"> Banco de Proyectos
            </label>

            <label class="radio-inline">
                <input type="radio" name="opcion_proyecto" id="opcion_proyecto" value="Propuesta Propia"> Propuesta Propia
            </label>

            <label class="radio-inline">
                <input type="radio" name="opcion_proyecto" id="opcion_proyecto" value="Trabajador(a)"> Trabajador(a)
            </label>
        </div>

        <div class="form-group">
            <label for="periodo" >Periodo Proyectado:</label>
            <input type="text" class="form-control" id="periodo" name="periodo">
        </div>

        <div class="form-group">
            <label for="numero_residentes" >Numero de Residentes:</label>
            <input type="text" class="form-control" id="numero_residentes" name="numero_residentes">
        </div>
    </form>
</div>

