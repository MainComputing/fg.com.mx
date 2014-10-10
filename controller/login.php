<?php
/*
* Controlador para el Login
*/

include('../model/ModelLogin.php');

$id   = $_POST["idEmpleado"];
$pass = $_POST["password"];

$model_login = new ModelLogin();

$nombre = $model_login->verificar_login($id, $pass);
if($nombre != null && $nombre != "")
{
	session_start();
	$_SESSION['nombre_usuario'] = $nombre;
	echo "1";
}
else
{
	echo "2";
}
?>
