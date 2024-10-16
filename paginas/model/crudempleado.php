<?php
    class CRUDEmpleado extends Conexion{
        public function ListarEmpleado(){
            $arr_marca= null;
            
            $cn= $this-> Conectar();

            $sql = "call sp_listar_empleado()";

            $snt = $cn->prepare($sql);
            
            $snt->execute();

            $arr_marca=$snt->fetchAll(PDO::FETCH_OBJ);

            $cn=null;

            return $arr_marca;
        }
    }