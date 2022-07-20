<?php
    require_once "../../conexion/CRUD.php";
    require_once "../../conexion/conexion.php";

    class Ruta implements CRUD{
        public $id;
        public $destino;

        public function create(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("EXECUTE Alta_ruta :destino");
            $stmt -> bindParam(':id', $this->id);

            $stmt -> execute();

            $conexion -> desconectar();
        }

        public function update(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("UPDATE ruta SET destino = :destino WHERE id = :id");
            $stmt -> bindParam(':id', $this->id);
            $stmt -> bindParam(':destino', $this->destino);

            $stmt -> execute();

            $conexion -> desconectar();
        }

        public function delete(){
            //*No se puede hacer borrado de estos datos
        }
        
        public function read_by_id(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM ruta WHERE id = :id");
            $stmt -> bindParam(':id', $this->id);

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_all(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_all_rutas");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_active(){
            //*Datos no disponibles con estas caracteristicas, agregado por la interfaz CRUD
        }

        public function read_inactive(){
            //*Datos no disponibles con estas caracteristicas, agregados por la interfaz CRUD
        }
    }
?>