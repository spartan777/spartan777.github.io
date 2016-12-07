<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema de Residencias.</title>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/modern-business.css" />
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                    <a class="navbar-brand" href="<?php echo base_url() ?>">División de Estudios Profesionales</a>
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
                        <h2 style=" color:  #000"><strong>División de Estudios Profesionales</strong></h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/tecNacional.png');"></div>
                    <div class="carousel-caption">
                        <h2 style=" color:  #000" ><strong>División de Estudios Profesionales</strong></h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('<?php echo base_url() ?>assets/img/sev2.png');"></div>
                    <div class="carousel-caption">
                          <h2 style=" color:  #000"><strong>División de Estudios Profesionales</strong></h2>
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

            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 style=" color:  #000" aling="center" class="page-header"><strong>Bienvenidos al Sistema de Tramites de Residencias
                        </strong>
                       
                    </h1>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style=" color:  #000"><strong>Misión</strong><i class="fa fa-fw fa-check"></i></h4>
                        </div>
                        <div class="panel-body">
                            <p>“Ofrecer servicios de calidad con cobertura, pertinente y equitativa, que coadyuve a la conformación de una sociedad justa y humana”</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style=" color:  #000"><strong>Visión</strong><i class="fa fa-fw fa-check"></i></h4>
                        </div>
                        <div class="panel-body">
                            <p>“Ser una Institución de vanguardia con  redes de colaboración entre los diferentes sectores, para lograr capital humano participativo, tolerante y consciente que contribuya  en el desarrollo sostenido, sustentable, cultural y equitativo de la Nación y del Estado”</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 style=" color:  #000"><strong>Valores</strong><i class="fa fa-fw fa-check"></i></h4>
                        </div>
                        <div class="panel-body">
                            <p>El ser humano.  Es el factor fundamental del quehacer institucional, constituyéndose en el valor central, para incidir en su calidad de vida.

El espíritu de servicio.  Es la actitud proactiva que distingue a la persona por su profesionalismo en su desempeño, proporcionando lo mejor de sí mismo.

El liderazgo.  Es la capacidad para la conducción innovadora, participativa y visionaria de la operación y desarrollo institucional.

El trabajo en equipo. Es el proceso humano realizado de manera armónica con actitud proactiva, multiplicando los logros del objetivo común.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Section -->
            <div class="row">
                <div class="col-lg-12">
                    <center> <h2 class="page-header">Nuestras carreras</h2></center>
                </div>
                <div class="col-md-4 col-sm-6">
                    <center><img class=" img-circle" src="<?php echo base_url() ?>assets/img/INFORMATICA.jpg" width="200px" height="200px">
                        <br><h4>Ing. Informática</h4></center>
                </div>
                <div class="col-md-4 col-sm-6">
                    
                        <center>  <img class="img-circle" src="<?php echo base_url() ?>assets/img/GESTION-EMPRESARIAL.jpg" width="200px" height="200px">
                            <br><h4> Ing. Gestión Empresarial</h4></center>
                            
                </div>
                <div class="col-md-4 col-sm-6">
                 
                    <center> <img class="img-circle" src="<?php echo base_url() ?>assets/img/industrial.png" width="200px" height="200px">
                        <br><h4>Ing.Industrial</h4></center>
                </div>
                
                
                <div class="col-md-4 col-sm-6">
                    
                    <center><img class="img-circle" src="<?php echo base_url() ?>assets/img/contador-publico.png" width="200px" height="200px">
                        <br><h4>Lic Contador Publico</h4></center>
                    
                        
                        
                </div>
                <div class="col-md-4 col-sm-6">
                  
                    <center> <img class="img-circle" src="<?php echo base_url() ?>assets/img/petrolera.png" width="200px" height="200px">
                        <br><h4>Ing.Petrolera</h4></center>
                    
                    
                </div>
                <div class="col-md-4 col-sm-6">
                   
                    <center>  <img class="img-circle" src="<?php echo base_url()?>assets/img/ELECTRONICA.jpg" width="200px" height="200px">
                        <br><h4>Ing.Electronica</h4></center>
                    </a>
                </div>
                
               
                
       
                </div>
                <div class="col-md-4 col-sm-6">
                    
                    <center>   <img class="img-circle" src="<?php echo base_url()?>assets/img/SISTEMAS-COMPUTACIONALES.jpg"width="200px" height="200px">
                        <br><h4>Ing.Sistemas Computacionales</h4></center>
                    
                </div>
            
            
            
            
             <div class="col-md-4 col-sm-6">
                    
                 <center> <img class="img-circle" src="<?php echo base_url()?>assets/img/INNOVACION-AGRICOLA-SUS_.jpg" width="200px" height="200px">
                     <br><h4>Ing.Innovación Agricola Sustentable</h4></center>
                  
                </div>
            
            
            <div class="col-md-4 col-sm-6">
                   
                <center> <img class="img-circle" src="<?php echo base_url()?>assets/img/Renova.jpg" width="200px"height="200px">
                    <br><h4>Ing.Energias Renovables</h4></center>
                   
                </div>
                
            </div>
            <!-- /.row -->

            <hr>

            <!-- Call to Action Section -->
            <div class="well" id="login">
                <div class="row">
                    <form class="form-horizontal" id="formLogin" action="<?php echo base_url() ?>internal_public/login" method="post">
                        <h2>Iniciar Sesión</h2>
                        <div class="form-group">
                            <label for="user" class="col-sm-2 control-label">Usuario:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" id="user" name="user" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="pass">Contraseña:</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                            </div>
                        </div></br>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="tipoUser">Tipo de Usuario:</label>
                            <div class="col-sm-6">
                                <select class="select" id="tipoUser" class="form-control" name="tipoUser">
                                    <option></option>
                                    <option value="Admin">Administrador</option>
                                    <option value="Jefe">Jefe de Carrera</option>
                                    <option value="Alumno">Alumno</option>
                                </select>
                            </div>
                        </div></br>
                        <br>
                        <?php if (isset($error)) echo '<br><div style ="color:#FF0000;">' . $error . '</div>'; ?>
                        <center><input type="submit" class="btn btn-success btn-md"  value="Ingresar"/>
                            

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
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

    </body>
</html>

