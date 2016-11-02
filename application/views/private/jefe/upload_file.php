<div>
    <div id="formulario_imagenes">
        <span style="color:red"><?php if(isset($error)){ echo $error;} ?></span>
        <form action="<?php echo base_url(); ?>jefe_carrera/do_upload" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Archivo:</label>
                <input type="file" name="userfile"/>
            </div>
            <input type="submit" value="Subir Archivo" class="btn btn-success" />
        </form>
    </div>
</div>

