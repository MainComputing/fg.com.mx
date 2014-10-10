<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('medoo.min.php');
include('EncrypSha.php');
/**
 * Description of ModelLogin
 *
 * @author Irwin Jhosafat
 */
class ModelLogin {
    //put your code here
    var $base_datos;
    
    function ModelLogin()
    {
        $this->base_datos = new medoo();
    }
    
    function verificar_login($id_empleado, $password) 
    {
        $encryp = new EncrypSha();
    	$encryp->conn_bd();
        $encrpassword = $encryp->get_sha($password);
        //print_r ($encrpassword);
        //echo $encrpassword[0];
        //$datas = $this->base_datos->select("usuario","nombre", ["idusuario" => $id_empleado, "password" => $encrpassword[0]]);
        //
        //
        //
        //
       $rows = $this->base_datos->select("usuario", "nombre", [
	"AND" => [
		"idusuario" => $id_empleado,
		"password" => $encrpassword[0]
	]
        ]);
        //echo $rows[0];
       return $rows[0];
          //$datas = $this->base_datos->select("usuario", "*");
//        foreach($datas as $data)
//        {
//            echo "user_name:" . $data["idusuario"] . " - pass:" . $data["password"] . "<br/>";
//        }
            //echo "user_name:" . $data["user_name"] . " - email:" . $data["email"] . "<br/>";
          //  echo $data["usuario"];
        
        //return $name_result;
    }
}
