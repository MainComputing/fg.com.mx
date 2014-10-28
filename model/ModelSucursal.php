<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('medoo.min.php');

/**
 * Description of ModelEmpleado
 *
 * @author Raúl
 */
class ModelSucursal {

    //put your code here

    var $base_datos;

    function ModelSucursal() {
        $this->base_datos = new medoo();
    }

    function insertar_sucursal($id_sucursal, $nombre_suc, $num_emp, $calle, $num_int, $num_ext, $col, $municipio, $estado) {
            /* * Primero obtenemos el id del estado */
            $dato = $this->base_datos->select("estado", "id", [
                "nombre" => $estado]);
            $id_estado = $dato[0];
            //print_r($dato);

            /* * Despues obtenemos el id del municipio */
            $dato = $this->base_datos->select("municipio", "id", [
                "nombre" => $municipio]);

            $id_municipio = $dato[0];
            
            /* Insertamos la dirección */
            $id_dir = $this->base_datos->insert("direccion", [
                "calle" => $calle,
                "num_int" => $num_int,
                "num_ext" => $num_ext,
                "colonia" => $col,
                "municipio_id" => $id_municipio,
                "estado_id" => $id_estado
            ]);

            $last_sucursal_id = $this->base_datos->insert("empleado", [
                "id" => $id_sucursal,
                "nombre_suc"=>$nombre_suc,
                "num_emp"=>$num_emp,
                "direccion_id"=>$id_dir             
            ]);
       
   }

}
