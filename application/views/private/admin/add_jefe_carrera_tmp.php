<form class="form-horizontal" id="formRegJefeCarrera" method="post" action="<?php echo base_url() ?>internal_private/registrar_jefe_carrera">
    <div class="form-group">
        <label class="col-sm-2 control-label" for="numero_control">Clave de acceso:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="numero_control" id="numero_control" value="<?php if (isset($numero_control)) echo $numero_control; ?>" placeholder="Ingrese el número de control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="nombre">Nombre:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php if (isset($nombre)) echo $nombre; ?>" placeholder="Ingrese el Nombre">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="apellidoParteno">Apellido Paterno: </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" value="<?php if (isset($apellido_paterno)) echo $apellido_paterno; ?>" placeholder="Ingrese el Apellido Paterno">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="apellidoMaterno">Apellido Materno</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" value="<?php if (isset($apellido_materno)) echo $apellido_materno; ?>" placeholder="Ingrese Apellido Materno">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="carrera">Carrera:</label>
        <div class="col-sm-6">
            <select name="carrera" id="disabledSelect" class="form-control">
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
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label" for="email">Email:</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="email" id="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="Ingrese el e-mail de contacto">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="telefono_residente" >Telefono(No celular):</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="telefono_residente" id="telefono_residente" value="<?php if (isset($telefono)) echo $telefono; ?>" placeholder="Ingrese el teléfono">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="inputPassword3">Password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="password2">Repetir Password</label>
        <div class="col-sm-6">
            <input type="password" class="form-control" name="password2" id="password2" placeholder="Repetir Password">
        </div>
    </div>
    <?php if (isset($error)) echo '<br><div style ="color:#FF0000;">' . $error . '</div>'; ?>

    <center>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo base_url() ?>internal_private/jefes_carrera"><button type="button" id="cerrarModalAdd" class="btn btn-danger">Cancelar</button></a>
    </center>

</form>

