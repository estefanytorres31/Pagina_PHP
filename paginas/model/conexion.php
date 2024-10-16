<?php
    class Conexion{
        private $usuario="root";
        private $password="1234";
        private $servidor="localhost";
        private $base="bd_ventas_ds502";

        public function Conectar(){
            try{
                $cnx= new PDO("mysql:host=$this->servidor;dbname=$this->base", $this->usuario, $this->password);
                $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $cnx;    
            }
            catch(PDOException $ex){
                echo "Hubo un error: ".$ex->getMessage();
            }
        }
    } 