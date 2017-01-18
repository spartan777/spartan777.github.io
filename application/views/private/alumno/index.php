<?php if($this->session->userdata('logueado') == TRUE and $this->session->userdata('tipo_login') == "Alumno"){  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/formStyle.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS 
    <link href="assets/css/plugins/morris.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>alumno">División de Estudios Profesionales - Alumno</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('user_login') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url() ?>internal_public/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li id="navHome">
                        <a href="<?php echo base_url() ?>alumno/"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li id="navDictamen">
                        <a href="<?php echo base_url() ?>alumno/consultar_dictamen"><i class="fa fa-fw fa-bar-chart-o"></i> Consultar Dictamen</a>
                    </li>
                    <li id="navSolicitud">
                        <a href="<?php echo base_url() ?>alumno/solicitud_residencia"><i class="fa fa-fw fa-dashboard"></i> Solicitud de residencia</a>
                    </li>
                    <li id="navAlum">
                        <a href="<?php echo base_url() ?>alumno/descargar_formatos"><i class="fa fa-fw fa-bar-chart-o"></i> Descargar Formatos</a>
                    </li>
                    <li id="navSubir">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Subir Archivos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo_word">Anteproyecto</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/constancia_creditos">Constancia Créditos</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/carta_presentacion">Carta Presentación</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/carta_aceptacion">Carta Aceptación Empresa</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/asig_asesor_ext">Asignacion Asesor Externo</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/liberacion_jefe">Liberación Jefe de Carrera</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/liberacion_dep">Liberación de la DEP</a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/liberacion_servicio_social">Liberación del Servicio Social</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/liberacion_empresa">Liberación de la Empresa</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/liberacion_asesor_externo">Liberación del Asesor Externo</a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/reporte_asesoria_1">Reporte de Asesoría 1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/reporte_asesoria_2">Reporte de Asesoría 2</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/reporte_asesoria_3">Reporte de Asesoría 3</a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/reporte_seguimiento_1">Reporte de Seguimiento 1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/reporte_seguimiento_2">Reporte de Seguimiento 2</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>alumno/subir_archivo/reporte_seguimiento_3">Reporte de Seguimiento 3</a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Alumno <small>Sistema de Residencias</small>
                        </h2>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> <?php echo $barraTitulo; ?></h3>
                            </div>
                            <div class="panel-body">
                                <?php $this->load->view($content); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    
                    
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/messages_es.js"></script>
    <script src="<?php echo base_url() ?>assets/js/validateForm.js"></script>
    <script src="<?php echo base_url() ?>assets/js/funcionesModal.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           document.getElementById("<?php echo $nav; ?>").className = "active"; 
        });
    </script>

    <!-- Morris Charts JavaScript 
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>-->

</body>

</html>
<?php }else{ redirect('internal_public/acceso_denegado');} ?>