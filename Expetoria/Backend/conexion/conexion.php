<?php

    class ConfigDB{
        //* Variables que se pueden modificar
        private $server = 'localhost';
		private $port = 1433;
		private $database = 'empresa_lacct';
		private $user = 'sa';
		private $password = 'Soyelmejor';
        private $conn = null;

        public function conectar(){
            // PHP Data Objects(PDO) Sample Code:
            try{
                //! NO MOVER ESTE PEDAZO DE CODIGO, SOLO MODIFICAR LAS VARIABLES DE ARRIBA
                $this->conn= new PDO("sqlsrv:Server=$this->server,$this->port;Database=$this->database", $this->user , $this->password);
                $this->conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "";
                } catch(PDOException $e){
                echo "Conexion no exitosa: ".$e->getMessage();
                }
        }

        public function get_conn(){
            return $this->conn;
        }

        public function desconectar(){
            return $this->conn = null;
        }
    }

?>