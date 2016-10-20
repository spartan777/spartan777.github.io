<div class="col-md-6">
    <!--    <div class="form-group">
            <label for="numero_control">Numero de Control:</label>
            <input type="text" class="form-control" name="numero_control" id="numero_control"  readonly="">
        </div>-->
    <form action="<?php echo base_url() ?>alumno/guardar_datos_empresa" method="post">
        <div class="form-group">
            <label  for="nombre_empresa">Nombre de la empresa:</label>
            <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa"  placeholder="Ingrese el nombre de la empresa.">
        </div>
        <div class="form-group">
            <label for="giro_ramo_sector">Giro, Ramo o Sector:</label><br>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Industrial"  value="Industrial"> Industrial
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Servicios" value="Servicios"> Servicios
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Publico" value="Público"> Público
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Privado" value="Privado"> Privado
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Otros" value="Otros"> Otros
            </label>
        </div>
        <div class="form-group">
            <label for="rfc">R.F.C.:</label>
            <input type="text" class="form-control" name="rfc" id="rfc"  placeholder="Ingrese el RFC de la empresa.">
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio:</label>
            <input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Ingrese el domicilio de la empresa.">
        </div>
        <div class="form-group">
            <label for="colonia">Colonia:</label>
            <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Ingrese la colonia de la empresa.">
        </div>
        <div class="form-group">
            <label for="codigo_postal">C.P.:</label>
            <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" placeholder="Ingrese el C.P. de la empresa.">
        </div>
        <div class="form-group">
            <label for="fax">Fax:</label>
            <input type="text" class="form-control" name="fax" id="fax" placeholder="Ingrese el fax de la empresa.">
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" class="form-control" name="ciudad" id="ciudad"  placeholder="Ingrese la ciudad de la empresa.">
        </div>
        <div class="form-group">
            <label for="telefono" >Telefono(No celular):</label>
            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el teléfono de la empresa.">
        </div>
        <div class="form-group">
            <label for="mision_empresa">Misión de la empresa:</label>
            <textarea style="resize: none" class="form-control" name="mision_empresa" id="mision_empresa"  placeholder="Ingrese la misión de la empresa." rows="3"></textarea>
        </div>
        <div class="form-group">
            <label  for="nombre_titular">Nombre del(a) titular de la empresa:</label>
            <input type="text" class="form-control" name="nombre_titular" id="nombre_titular"  placeholder="Ingrese el nombre del titular de la empresa.">
        </div>
        <div class="form-group">
            <label  for="puesto_titular">Puesto:</label>
            <input type="text" class="form-control" name="puesto_titular" id="puesto_titular" placeholder="Ingrese el puesto del titular de la empresa.">
        </div>
        <div class="form-group">
            <label for="asesor_externo">Nombre del(a) asesor(a) externo:</label>
            <input type="text" class="form-control" name="asesor_externo" id="asesor_externo"  placeholder="Ingrese el nombre del asesor externo.">
        </div>
        <div class="form-group">
            <label  for="puesto_asesor">Puesto:</label>
            <input type="text" class="form-control" name="puesto_asesor" id="puesto_asesor" placeholder="Ingrese el puesto del asesor externo.">
        </div>
        <div class="form-group">
            <label  for="nombre_acuerdo_trabajo" >Nombre de la persona que firmará el acuerdo de trabajo, Alumno(a)-Escuela-Empresa:</label>
            <input type="text" class="form-control" name="nombre_acuerdo_trabajo" id="nombre_acuerdo_trabajo"  placeholder="Ingrese el nombre de la persona del acuerdo de trabajo.">
        </div>
        <div class="form-group">
            <label  for="puesto_acuerdo_trabajo">Puesto:</label>
            <input type="text" class="form-control" name="puesto_acuerdo_trabajo" id="puesto_acuerdo_trabajo" placeholder="Ingrese el puesto de la persona del acuerdo de trabajo.">
        </div>
        <button type="submit" class="btn btn-success"></button>
        <a href="<?php echo base_url() ?>alumno/datos_escuela" class="btn btn-success" role="button">Siguiente</a>
    </form>
</div>

