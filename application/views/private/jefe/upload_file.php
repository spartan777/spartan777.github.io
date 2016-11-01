<div>
    <?= @$error ?>
    <div id="formulario_imagenes">
        <span><?php echo validation_errors(); ?></span>
        <center><form action="<?php echo base_url(); ?>jefe_carrera/do_upload" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Archivo:</label>
                    <input type="file" name="userfile"/>
                </div>
                <input type="submit" value="Subir Imágen" class="btn btn-primary" />
            </form>
    </div>

