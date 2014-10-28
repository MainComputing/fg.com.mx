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

                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="margin-bottom: 5px;">Información Sucursal</h1>
                        </div>
                    </div>
                    <!--Datos Sucursal -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                                <!-- Aqui va la foto-->
                                <img src="../resources/img/preview_suc.png" style="width: inherit;"/>
                            </div>
                        <div></div><div></div><div></div>
                        <div class="col-lg-5 col-md-5">
                            <div class="row">
                                <div class="col-lg-12 col-md-12" style="padding-top: 15px;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Datos Generales de la Sucursal
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row"> 
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Número de Sucursal:</label>
                                        <p>98654</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Nombre :</label>
                                        <p>JPMR800825569"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Direccion:</label>
                                        <p >Juan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Numero de empleados :</label>
                                        <p>32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5">

                                            <div class="form-group">
                                                <label>Municipio: </label>
                                                <p>Aguascalientes</p>
                                                </select>
                                            </div>


                                        </div>
                                        <div class="col-lg-2 col-md-2"></div>
                                        <div class="col-lg-5 col-md-5">
                                            <div class="form-group">
                                                <label>Estado: </label>
                                                <p>Aguascalientes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        
                                       </div>
                    <div>
                        <center>
                    <button type="button" class="btn btn-danger" id="button_cerrar">Cerrar</button>
                        </center>
                    <div>
                </div>
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
$("#button_cerrar").click(function(){
        self.close();
	});
    </script>
    

</body>

</html>

