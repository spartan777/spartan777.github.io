<div>
    <div id="formulario_imagenes">
        <span style="color:red"><?php if(isset($error)){ echo $error;} ?></span>
        <form action="<?php echo base_url(); ?>alumno/do_upload_word" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Archivo:</label>
                <input type="file" name="userfile"/>
                <input type="hidden" name="tipo_archivo" value="<?php echo $tipo_archivo; ?>" >
            </div>
            <input type="submit" value="Subir Archivo" class="btn btn-success" />
        </form>
    </div>
</div>

