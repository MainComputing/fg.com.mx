<?php
    session_start();
   if(!isset($_SESSION['nombre_usuario']))
   {
     //window.location.href = "/fg.com.mx/login.html";
     header('Location: /fg.com.mx/login.html');
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenido - Sistema Administrador de Empleados</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="padding-top: 7px;padding-left: 5px;"><img src="../resources/img/cirlogo.png"/></div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Sistema Administrador <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;de Empleados</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" style="width: 85px;">
                            <?php
                                echo $_SESSION['nombre_usuario'];
                            ?>
                        </i>  
                        <i class="fa fa-caret-down">
                        </i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraci&oacute;n</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/fg.com.mx/login.html"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" style="margin-top: 76px;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Administrar Empleados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/fg.com.mx/view/empleado/insertar_empleado.php">Agregar nuevo usuario</a>
                                </li>
                                <li>
                                    <a href="#">Buscar usuario</a>
                                </li>
                                <li>
                                    <a href="#">Modificar usuario</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Administrar Sucursales<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Agregar nueva sucursal</a>
                                </li>
                                <li>
                                    <a href="#">Buscar sucursal</a>
                                </li>
                                <li>
                                    <a href="#">Modificar sucursal</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Administrar Cursos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Agregar nuevo curso</a>
                                </li>
                                <li>
                                    <a href="#">Buscar curso</a>
                                </li>
                                <li>
                                    <a href="#">Modificar curso</a>
                                </li>
                                <li>
                                    <a href="#">Asignar curso</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>           
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Generar Reporte<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               <li>
                                    <a href="#">Generar Reporte</a>
                               </li> 
                               <li>
                                    <a href="#">Imprimir Reporte</a>
                               </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       <form method="POST" action="../../controller/empleado/InsertarEmpleado.php">
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="margin-bottom: 5px;">Agregar Empleado</h1>
                        </div>
                    </div>
                    <div class="row" style="text-align: right">
                        <div class="col-lg-12" >
                            <button type="submit" class="btn btn-info">Guardar</button>
                            <button type="button" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                    <!--Datos Personales -->
                    <div class="row">

                        <div class="col-lg-5 col-md-5">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Datos Generales del Empleado
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Número de Empleado:</label>
                                        <input class="form-control"  name="num_empleado" placeholder="Ej. 00001"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>RFC:</label>
                                        <input class="form-control" name="rfc" placeholder="Ej. CUPU800825569"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Nombre(s):</label>
                                        <input class="form-control" name="nombre" placeholder="Ej. Ulises"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Apellido Paterno:</label>
                                        <input class="form-control" name="ap_pat" placeholder="Ej. Cuevas"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Apellido Materno:</label>
                                        <input class="form-control" name="ap_mat" placeholder="Ej. Pérez"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Edad:</label>
                                        <input class="form-control" name="edad" placeholder="Ej. 25"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Dirección:</label>
                                        <input class="form-control" name="calle" placeholder="Calle: (Ej. Díaz Suárez)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">
                                            <input class="form-control" name="num_int" placeholder="Núm. Int. (10)"/>
                                        </div>
                                        <div class="col-lg-2 col-md-2"></div>
                                        <div class="col-lg-5 col-md-5">
                                            <input class="form-control" name="num_ext" placeholder="Núm. Ext. (120)"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><br></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" name="col" placeholder="Colonia: (San Cosme)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">

                                            <div class="form-group">
                                                <label>Municipio: </label>
                                                <select class="form-control" name="municipio">
                                                    <option>Aguascalientes</option>
                                                </select>
                                            </div>


                                        </div>
                                        <div class="col-lg-2 col-md-2"></div>
                                        <div class="col-lg-5 col-md-5">
                                            <div class="form-group">
                                                <label>Estado: </label>
                                                <select class="form-control" name="Estado">
                                                    <option>Aguascalientes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-1 col-md-1" ></div>
                        <!--  DATOS DE LA EMPRESA -->
                        <div class="col-lg-5 col-md-5">
                            <div class="col-lg-12 col-md-12">
                                <!-- Aqui va la foto-->
                                <img src="../resources/img/previewimage.jpg" style="width: inherit;"/>
                                <div class="form-group">
                                    <label>Seleccionar Imagen:</label>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12" style="padding-top: 26px;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Actividades en la Empresa
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">

                                    <div class="form-group">
                                        <label>Puesto: </label>
                                        <select class="form-control" name="puesto">
                                            <option>Gerente</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">

                                    <div class="form-group">
                                        <label>Sucursal: </label>
                                        <select class="form-control" name="sucursal">
                                            <option>Villas de Nuestra Señora</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">

                                    <div class="form-group">
                                        <label>Horario: </label>
                                        <select class="form-control" name="horario">
                                            <option>M</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </form>
            <!-- /#wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

</body>

</html>

