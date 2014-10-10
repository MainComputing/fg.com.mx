<?php
/*
* Controlador para el Login
*/

require_once '../model/LoginModel.php';

$id   = $_POST["idEmpleado"];
$pass = $_POST["password"];

$model_login = new LoginModel();

$nombre = $model_login -> verificarLogin($id,$pass);
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
