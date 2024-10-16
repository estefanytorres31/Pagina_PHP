<?php
    class CRUDCliente extends Conexion{
        public function ListarCliente(){
            $arr_cliente= null;
            
            $cn= $this-> Conectar();

            $sql = "call sp_listar_cliente()";

            $snt = $cn->prepare($sql);
            
            $snt->execute();

            $arr_cliente=$snt->fetchAll(PDO::FETCH_OBJ);

            $cn=null;

            return $arr_cliente;
        }
    }