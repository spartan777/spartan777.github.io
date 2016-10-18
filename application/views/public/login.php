<!DOCTYPE html>
<html lang="es">

    <head>
        <title>Login</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/estiloss.css" />-->
    </head>

    <body>
        <form action="<?php echo base_url() ?>internal_public/login" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="user" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Contraseña">
            </div>
            <label for="disabledSelect">Tipo de Usuario:</label>
            <select class="select" id="disabledSelect" class="form-control" name="tipoUser">
                <option></option>
                <option value="Admin">Administrador</option>
                <option value="Jefe">Jefe de Carrera</option>
                <option value="Alumno">Alumno</option>
            </select>
            <br>
            <?php if (isset($error)) echo '<br><div style ="color:#FF0000;">' . $error . '</div>'; ?>
            <center><input type="submit" class="btn btn-success btn-md"  value="Ingresar"/>
                
                    <button data-toggle="modal" data-target="#modalAgregar" class="btn btn-primary btn-md">Registrarse</button>
                4</center>
        </form>
        
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        
        <!-- Modal agregar-->
        <div class="modal fade" id="modalAgregar" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar</h4>
                    </div>
                    <form id="formAdd" method="" action="">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="clave">Clave</label> <input type="text"
                                                                        class="form-control" id="claveAdd" name="clave"
                                                                        placeholder="Ingrese la clave">
                            </div>

                            <div class="form-group">
                                <label for="nombre">Nombre:</label> <input type="text"
                                                                           class="form-control" id="nombreAdd" name="nombre"
                                                                           placeholder="Ingrese el nombre">
                            </div>

                            <div class="form-group">
                                <label for="ubicacion">Ubicación:</label> <input type="text"
                                                                                 class="form-control" id="ubicacionAdd" name="ubicacion"
                                                                                 placeholder="Ingrese la ubicación">
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefono:</label> <input type="text"
                                                                               class="form-control" id="telefonoAdd" name="telefono"
                                                                               placeholder="Ingrese el telefono">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Enviar</button>
                                <button type="button" id="cerrarModalAdd" class="btn btn-danger">Close</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        
    </body>
</html>

