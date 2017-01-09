<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Registro de Alumnos</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/modern-business.css" />
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css/formStyle.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url() ?>">Division de Estudios Profesionales</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url() ?>#login">Login</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>internal_public/registro_alumno">Registro</a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/encabezado2.png');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/tecNacional.png');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/sev2.png');"></div>
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>

        <!-- Page Content -->
        <div class="container">

            <h2 style=" color:  #000"><strong>Registro de Alumnos</strong></h2>

            <hr>

            <!-- Call to Action Section -->
            <div class="well" >
                <div class="row">
                    <form class="form-horizontal" id="formRegAlumno" method="post" action="<?php echo base_url() ?>internal_public/registrar_alumno">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="nombre">Nombre:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" id="nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" placeholder="Ingrese el Nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="apellidoParteno">Apellido Paterno: </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidoPaterno" id="apellidoPaterno" value="<?php if(isset($apellido_paterno)) echo $apellido_paterno; ?>" placeholder="Ingrese el Apellido Paterno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="apellidoMaterno">Apellido Materno</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidoMaterno" id="apellidoMaterno" value="<?php if(isset($apellido_materno)) echo $apellido_materno; ?>" placeholder="Ingrese Apellido Materno">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="carrera">Carreras:</label>
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
                            <label class="col-sm-2 control-label" for="numero_control">Numero de Control:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="numero_control" id="numero_control" value="<?php if(isset($numero_control)) echo $numero_control; ?>" placeholder="Ingrese el número de control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="domicilio">Domicilio:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="domicilio" id="domicilio" value="<?php if(isset($domicilio)) echo $domicilio; ?>" placeholder="Ingrese el domicilio">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="email">Email:</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Ingrese el e-mail de contacto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="ciudad_residente">Ciudad:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="ciudad_residente" id="ciudad_residente" value="<?php if(isset($ciudad)) echo $ciudad; ?>" placeholder="Ingrese la ciudad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="telefono_residente" >Telefono(No celular):</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="telefono_residente" id="telefono_residente" value="<?php if(isset($telefono)) echo $telefono; ?>" placeholder="Ingrese el teléfono">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="seguridad_social">Para Seguridad Social acudir:</label>
                            <div class="col-sm-6">
                                <label class="radio-inline">
                                    <input type="radio" name="seguridad_social" id="IMSS" value="IMSS">IMSS
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="seguridad_social" id="ISSTE" value="ISSTE"> ISSSTE
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="seguridad_social" id="Otros" value="Otros"> Otros
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="numero_social" >Número Seguridad Social:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="numero_social" id="numero_social" value="<?php if(isset($numero_social)) echo $numero_social; ?>" placeholder="Número de Seguridad Social">
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
                            <a href="<?php echo base_url() ?>"><button type="button" id="cerrarModalAdd" class="btn btn-danger">Atras</button></a>
                        </center>

                    </form>

                </div>
            </div>

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>

        </div>


        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/messages_es.js"></script>
        <script src="<?php echo base_url() ?>assets/js/validateForm.js"></script>
        <script>
                                        $('.carousel').carousel({
                                            interval: 5000 //changes the speed
                                        });
        </script>
        
    </body>
</html>







