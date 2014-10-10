<?php

require_once 'medoo.php';
require_once 'Encrypt_Sha.php';

class LoginModel {
	/*
	*Conexión con la Base de Datos por medio de medoo Framework.
	*/
    var $database = new medoo();

    function verificarLogin($idEmpleado, $password) {
    	$encryp = new Encrypt_Sha();
    	$encryp-> Conn_BD();
        $encrpassword = $encryp->getSha($password);
        $data = $database->select("usuario", ["nombre"], ["idusuario[=]" => $encrpassword]);
        return $data;
    }
}
?>


 
