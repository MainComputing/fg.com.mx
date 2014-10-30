<?php

include('medoo.min.php');

/**
 * Description of ModelEmpleado
 *
 * @author Irwin Jhosafat
 */
class ModelEmpleado {
    
    /*Conexion con la base de datos*/
    var $base_datos;

    function ModelEmpleado() {
        $this->base_datos = new medoo();
    }

    /*
     * Esta funcion inserta los empleados utilizando los datos provenienetes del
     * Formulario de "Agregar Empleado", despues de realizar las validaciones
     * correspondientes.
     * @param $id_empleado es el identificador otorgado para el empleado.
     * @param $nombre del empleado
     * @param $asp_pat Apellido paterno del empleado 
     * @param $asp_mat Apellido materno del empleado
     * @param $edad edad al momento de ingreso del empleado
     * @param $calle domicilio de residencia del empleado
     * @param $num_int numero interior de la residencia
     * @param $num_ext numero exterior de la residencia
     * @param $col colonia de residencia
     * @param $municipio Municipio de residencia
     * @param $estado Estado de residencia del empleado
     * @param $puesto puesto que desempeñara el empleado
     * @param $sucursal sucursal en la cual sera asignado el empleado
     * @param $horario Horario en el cual iniciara el empleado actual.
     */
    
    function insertar_empleado($id_empleado, $rfc, $nombre, $ap_pat, $ap_mat, $edad, $calle, $num_int, $num_ext, $col, $municipio, $estado, $puesto, $sucursal, $horario) {

        /* Primero obtenemos el id del estado */
        $dato = $this->base_datos->select("estado", "id", [
            "nombre" => $estado]);
        $id_estado = $dato[0];
        
        /* Despues obtenemos el id del municipio */
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

        /* obtenemos el id del puesto */
        $dato = $this->base_datos->select("puesto", "id", [
            "nombre" => $puesto]);

        $id_puesto = $dato[0];
        
        /* obtenemos el id del sucursal */
        $dato = $this->base_datos->select("sucursal", "id", [
            "nombre_suc" => $sucursal]);

        $id_sucursal = $dato[0];
        
        /*obtenemos el id del Horario */
        $dato = $this->base_datos->select("horario", "id", [
            "tipo" => $horario]);

        $id_horario = $dato[0];
        
        /*Insermos el estado*/
        $fecha = getdate();
        $id_estado = $this->base_datos->insert("estadoempleado", [
            "estado" => 1,
            "fecha_ingreso" => $fecha
        ]);
        
        $last_user_id = $this->base_datos->insert("empleado", [
            "id" => $id_empleado,
            "rfc" => $rfc,
            "nombre" => $nombre,
            "apellido_pat" => $ap_pat,
            "apellido_mat" => $ap_mat,
            "edad" => $edad,
            "direccion_id" => $id_dir,
            "puesto_id" => $id_puesto,
            "sucursal_id" => $id_sucursal,
            "horario_id" => $id_horario,
            "puesto_id" => $id_puesto,
            "estadoempleado_id" =>$id_estado
        ]);
   }
}
