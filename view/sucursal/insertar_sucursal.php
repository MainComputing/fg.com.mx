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
                            <a href="/fg.com.mx/view/"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                         <li>
                            <a href="/fg.com.mx/view/empleado/admin_empleado.php"><i class="fa fa-sitemap fa-fw"></i> Administrar Empleados</a>
                        </li>
                        <li>
                            <a href="/fg.com.mx/view/sucursal/admin_sucursal.php"><i class="fa fa-bar-chart-o fa-fw"></i> Administrar Sucursales</a>
                            <ul class="nav nav-second-level">
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Administrar Cursos</a>
                            <ul class="nav nav-second-level">
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>           
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Generar Reporte</a>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

       <form method="POST" >
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="margin-bottom: 5px;">Agregar Sucursal</h1>
                        </div>
                    </div>
                    <div class="row" style="text-align: right">
                        <div class="col-lg-12" >
                            <button type="button" name="submit" id="b_submit"class="btn btn-info">Guardar</button>
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
                                            Datos Generales de la sucursal
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Número de Sucursal:</label>
                                        <input class="form-control"  name="num_sucursal" id="num_sucursal" placeholder="Ej. 00001"/>
                                    </div>
                                </div>
                            </div>                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Nombre :</label>
                                        <input class="form-control" name="nombre" id="nombre" placeholder="Ej. Ags Madero"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Dirección:</label>
                                        <input class="form-control" name="calle" id="calle" placeholder="Calle: (Ej. Díaz Suárez)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">
                                            <input class="form-control" name="num_int" id="num_int" placeholder="Núm. Int. (10)"/>
                                        </div>
                                        <div class="col-lg-2 col-md-2"></div>
                                        <div class="col-lg-5 col-md-5">
                                            <input class="form-control" name="num_ext" id="num_ext" placeholder="Núm. Ext. (120)"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row"><br></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" name="col" id="col"placeholder="Colonia: (San Cosme)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">

                                            <div class="form-group">
                                                <label>Municipio: </label>
                                                <select class="form-control" name="municipio" id="municipio">
                                                    <option>Aguascalientes</option>
                                                </select>
                                            </div>


                                        </div>
                                        <div class="col-lg-2 col-md-2"></div>
                                        <div class="col-lg-5 col-md-5">
                                            <div class="form-group">
                                                <label>Estado: </label>
                                                <select class="form-control" name="estado" id="estado">
                                                    <option>Aguascalientes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-1 col-md-1" ></div>                  

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
<script type="text/javascript">
            $("#b_submit").click(function()
                    {
                       if($("#num_sucursal").val().length<1)
                        {   alert("Ingresa un número de Sucursal");}
                        else
                        {
                            if(isNaN($("#num_sucursal").val()))
                            {
                                alert("El numero de la sucursal no es valido.");
                            }
                            else
                            {
                                if($("#nombre").val().length<1)
                                {   alert("Ingresa el Nombre.");}
                                else
                                { 
                                    if(!$("#nombre").val().match(/^[a-zA-Z]+\s+[a-zA-Z]+/))
                                    {
                                        alert("El nombre de la Sucursal es Invalido");
                                    }
                                    else
                                    {
                                        if($("#calle").val().length<1)
                                        {   alert("Ingresa la Calle");}
                                        else
                                        { if($("#num_ext").val().length<1)
                                                {   alert("Ingresa el Número Exterior.");}
                                            else
                                            {   
                                                if(isNaN($("#num_ext").val()))
                                                {
                                                    alert("El numero exterior no es valido.");
                                                }
                                                else
                                                {
                                                    if($("#col").val().length<1)
                                                    {   alert("Ingresa la Colonia.");}
                                                    else
                                                    {
                                                        alert("Todo esta bien");
                                                    }
                                                }
                                            }                                            
                                        }
                                    }
                                }
                            }
                        }
                    });
    </script>
     

</body>

</html>

