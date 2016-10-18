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
            <?php if(isset($error)) echo '<br><div style ="color:#FF0000;">'.$error.'</div>';?>
            <center><input type="submit" class="btn btn-success btn-md"  value="Ingresar"/></center>
        </form>
    </body>
</html>

