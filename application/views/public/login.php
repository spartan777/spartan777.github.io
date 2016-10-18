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
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 1</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 2</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                    <div class="carousel-caption">
                        <h2>Caption 3</h2>
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
                    <h1 class="page-header">
                        Welcome to Modern Business
                    </h1>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.3.7</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Portfolio Section -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Portfolio Heading</h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio-item.html">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
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
                                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
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

