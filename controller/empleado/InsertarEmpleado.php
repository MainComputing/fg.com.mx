<?php
include('../../model/ModelEmpleado.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mode_empleado = new ModelEmpleado();
$mode_empleado ->insertar_empleado(
        $_POST['num_empleado'], 
        $_POST['rfc'], 
        $_POST['nombre'], 
        $_POST['ap_pat'], 
        $_POST['ap_mat'], 
        $_POST['edad'], 
        $_POST['calle'], 
        $_POST['num_int'], 
        $_POST['num_ext'], 
        $_POST['col'], 
        $_POST['municipio'], 
        $_POST['Estado'], 
        $_POST['puesto'], 
        $_POST['sucursal'], 
        $_POST['horario']);
//echo "Ya lo inserto";
?>