<?php
	/*
	*  Esta clase encrypta las contraseñas usando SHA para despues poder comparar con las que
	*  estan guardadas en la base de datos.
	*/
class Encrypt_Sha {
	
	/*Variables de conexion*/
	var $conn,
		$hostname = "localhost",
		$nombreUsuario = "root",
		$contrasena = "",
		$nombreBaseDatos = "fg";
	/*
	* Conexión con la Base de Datos por medio de PHP.
	*/
	function Conn_BD()
	{
		$conn = mysqli_connect($hostname , $nombreUsuario , $contrasena);
		mysqli_select_db ($conn, $nombreBaseDatos);
	}
	/*
	* Genera la consulta para obtener el SHA correspondiente.
	*/
    function getSha($password) {
        $result = mysqli_query($nombreConexion, "select sha('".$password."');");
        return $result;
    }
}
?>