<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EncrypSha
 *
 * @author Irwin Jhosafat
 */
class EncrypSha {
    //put your code here
    
    /*Variables*/
    var $conn,
	$hostname,
	$nombreUsuario,
	$contrasena,
	$nombreBaseDatos;
    
    function EncrypSha()
    {
        $this->hostname = "localhost";
        $this->nombreUsuario = "root";
        $this->contrasena="";
        $this->nombreBaseDatos="fg";
    }
    
    /*Conexion con la base de datos*/
    function conn_bd()
    {
        $this->conn = mysqli_connect($this->hostname ,$this->nombreUsuario ,$this->contrasena);
	mysqli_select_db ($this->conn, $this->nombreBaseDatos);
    }
    
    /*Obtener el SHA de la password*/
    function get_sha($password)
    {
        $result = mysqli_query($this->conn, "select sha('".$password."');");
        mysqli_data_seek ($result, 0);
        $row= mysqli_fetch_array($result);
        return $row;
    }
    
    /*Cerrar conexión*/
    function close_conn()
    {
        mysqli_close($this->conn);
    }
}
