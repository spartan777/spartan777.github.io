<?php
if ($resultados != FALSE) {
    foreach ($resultados->result() as $row) {
        ?>
        <div class="col-md-6">
            <div class="form-group">
                <label for="numero_control">Numero de Control:</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="numero_control" id="numero_control" value="<?php echo $row->numero_control; ?>" readonly="">

            </div>
            <div class="form-group">
                <label  for="nombre">Nombre:</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" id="nombre" value="<?php echo $row->nombre; ?>" readonly>
            </div>

            <div class="form-group">
                <label for="apellidoParteno">Apellido Paterno: </label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidoPaterno" id="apellidoPaterno" value="<?php echo $row->apellido_paterno; ?>" readonly>
            </div>
            <div class="form-group">
                <label  for="apellidoMaterno">Apellido Materno</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidoMaterno" id="apellidoMaterno" value="<?php echo $row->apellido_materno; ?>" readonly>
            </div>
            <div class="form-group">
                <label  for="carrera">Carreras:</label>
                <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" value="<?php
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
                ?>" readonly>
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="domicilio" id="domicilio" value="<?php echo $row->domicilio; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="email" id="email" value="<?php echo $row->email; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="ciudad_residente">Ciudad:</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="ciudad_residente" id="ciudad_residente" value="<?php echo $row->ciudad; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="telefono_residente" >Telefono(No celular):</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="telefono_residente" id="telefono_residente" value="<?php echo $row->telefono; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="seguridad_social">Para Seguridad Social acudir:</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="telefono_residente" id="telefono_residente" value="<?php echo $row->seguridad_social; ?>" readonly>
            </div>
            <div class="form-group">
                <label  for="numero_social" >Número Seguridad Social:</label>
                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="numero_social" id="numero_social" value="<?php echo $row->numero_social; ?>" readonly>
            </div>
            <a href="<?php echo base_url() ?>alumno/datos_empresa" class="btn btn-success" role="button">Siguiente</a>
        </div>
    <?php
    }
}
?>
