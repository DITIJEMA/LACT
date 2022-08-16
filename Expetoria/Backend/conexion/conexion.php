<?php

    class ConfigDB{
        //* Variables que se pueden modificar
        private $conn = null;

        public function conectar(){
            // PHP Data Objects(PDO) Sample Code:
            try {
                $conn = new PDO("sqlsrv:server = tcp:lacct1.database.windows.net,1433; Database = lacct1", "KYOLIO", "CaMauAP_9");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e) {
                print("Error connecting to SQL Server.");
                die(print_r($e));
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