<div class="col-md-6">
    <!--    <div class="form-group">
            <label for="numero_control">Numero de Control:</label>
            <input type="text" class="form-control" name="numero_control" id="numero_control"  readonly="">
        </div>-->
    <form id="guardarDatosEmpresa" action="<?php echo base_url() ?>alumno/guardar_datos_empresa" method="post">
        <div class="form-group">
            <label  for="nombre_empresa">Nombre de la empresa:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre_empresa" id="nombre_empresa" <?php if(isset($nombre_empresa)){ ?> value=" <?php echo $nombre_empresa;?>" readonly <?php } ?>   placeholder="Ingrese el nombre de la empresa.">
        </div>
        <div class="form-group">
            <label for="giro_ramo_sector" >Giro, Ramo o Sector:</label><br>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Industrial" <?php if(isset($giro_ramo_sector) and $giro_ramo_sector == "Industrial"){ echo "checked"; } ?> value="Industrial"> Industrial
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Servicios" <?php if(isset($giro_ramo_sector) and $giro_ramo_sector == "Servicios"){ echo "checked"; } ?> value="Servicios"> Servicios
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Publico" <?php if(isset($giro_ramo_sector) and $giro_ramo_sector == "Público"){ echo "checked"; } ?> value="Público"> Público
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Privado" <?php if(isset($giro_ramo_sector) and $giro_ramo_sector == "Privado"){ echo "checked"; } ?> value="Privado"> Privado
            </label>
            <label class="radio-inline">
                <input type="radio" name="giro_ramo_sector" id="Otros" <?php if(isset($giro_ramo_sector) and $giro_ramo_sector == "Otros"){ echo "checked"; } ?> value="Otros"> Otros
            </label>
        </div>
        <div class="form-group">
            <label for="rfc">R.F.C.:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="13" minlength="13" name="rfc" id="rfc" <?php if(isset($RFC)){ ?> value=" <?php echo $RFC;?>" readonly <?php } ?>  placeholder="Ingrese el RFC de la empresa.">
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="domicilio" id="domicilio" <?php if(isset($domicilio)){ ?> value=" <?php echo $domicilio;?>" readonly <?php } ?> placeholder="Ingrese el domicilio de la empresa.">
        </div>
        <div class="form-group">
            <label for="colonia">Colonia:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="colonia" id="colonia" <?php if(isset($colonia)){ ?> value=" <?php echo $colonia;?>" readonly <?php } ?> placeholder="Ingrese la colonia de la empresa.">
        </div>
        <div class="form-group">
            <label for="codigo_postal">C.P.:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="codigo_postal" id="codigo_postal" <?php if(isset($codigo_postal)){ ?> value=" <?php echo $codigo_postal;?>" readonly <?php } ?> placeholder="Ingrese el C.P. de la empresa.">
        </div>
        <div class="form-group">
            <label for="fax">Fax:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="fax" id="fax" <?php if(isset($fax)){ ?> value=" <?php echo $fax;?>" readonly <?php } ?> placeholder="Ingrese el fax de la empresa.">
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="ciudad" id="ciudad" <?php if(isset($ciudad)){ ?> value=" <?php echo $ciudad;?>" readonly <?php } ?>  placeholder="Ingrese la ciudad de la empresa.">
        </div>
        <div class="form-group">
            <label for="telefono" >Telefono(No celular):</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="telefono" id="telefono" <?php if(isset($telefono)){ ?> value=" <?php echo $telefono;?>" readonly <?php } ?> placeholder="Ingrese el teléfono de la empresa.">
        </div>
        <div class="form-group">
            <label for="mision_empresa">Misión de la empresa:</label>
            <textarea style="resize: none" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="mision_empresa" id="mision_empresa" <?php if(isset($mision_empresa)){ ?> readonly <?php } ?> placeholder="Ingrese la misión de la empresa." rows="3"><?php if(isset($mision_empresa)){  echo $mision_empresa; }?></textarea>
        </div>
        <div class="form-group">
            <label  for="nombre_titular">Nombre del(a) titular de la empresa:</label>
            <input type="text" class="form-control" name="nombre_titular" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" id="nombre_titular" <?php if(isset($nombre_titular)){ ?> value=" <?php echo $nombre_titular;?>" readonly <?php } ?>  placeholder="Ingrese el nombre del titular de la empresa.">
        </div>
        <div class="form-group">
            <label  for="puesto_titular">Puesto:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="puesto_titular" id="puesto_titular" <?php if(isset($puesto_titular)){ ?> value=" <?php echo $puesto_titular;?>" readonly <?php } ?> placeholder="Ingrese el puesto del titular de la empresa.">
        </div>
        <div class="form-group">
            <label for="asesor_externo">Nombre del(a) asesor(a) externo:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="asesor_externo" id="asesor_externo" <?php if(isset($asesor_externo)){ ?> value=" <?php echo $asesor_externo;?>" readonly <?php } ?>  placeholder="Ingrese el nombre del asesor externo.">
        </div>
        <div class="form-group">
            <label  for="puesto_asesor">Puesto:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="puesto_asesor" id="puesto_asesor" <?php if(isset($puesto_asesor)){ ?> value=" <?php echo $puesto_asesor;?>" readonly <?php } ?> placeholder="Ingrese el puesto del asesor externo.">
        </div>
        <div class="form-group">
            <label  for="nombre_acuerdo_trabajo" >Nombre de la persona que firmará el acuerdo de trabajo, Alumno(a)-Escuela-Empresa:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre_acuerdo_trabajo" id="nombre_acuerdo_trabajo" <?php if(isset($nombre_acuerdo_trabajo)){ ?> value=" <?php echo $nombre_acuerdo_trabajo;?>" readonly <?php } ?>  placeholder="Ingrese el nombre de la persona del acuerdo de trabajo.">
        </div>
        <div class="form-group">
            <label  for="puesto_acuerdo_trabajo">Puesto:</label>
            <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="puesto_acuerdo_trabajo" id="puesto_acuerdo_trabajo" <?php if(isset($puesto_acuerdo_trabajo)){ ?> value=" <?php echo $puesto_acuerdo_trabajo;?>" readonly <?php } ?> placeholder="Ingrese el puesto de la persona del acuerdo de trabajo.">
        </div>
        <?php if (!isset($boton)) { ?>
            <button type="submit" class="btn btn-success">Guardar y continuar</button>
        </form>
    <?php } else { ?>
        <a href="<?php echo base_url() ?>alumno/datos_proyecto" class="btn btn-success" role="button">Siguiente</a>
    <?php } ?>
</div>

