<?php
    require_once "../../conexion/conexion.php";
    require_once "../../conexion/CRUD.php";

    class Vehiculo implements CRUD{
        public $id;
        public $marca;
        public $modelo;
        public $matricula;
        public $carga;

        public function create(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("EXECUTE Alta_vehiculo :marca,:modelo,:matricula,:carga");
            $stmt -> bindParam(':marca', $this->marca);
            $stmt -> bindParam(':modelo', $this->modelo);
            $stmt -> bindParam(':matricula', $this->matricula);
            $stmt -> bindParam(':carga', $this->carga);

            $stmt -> execute();

            $conexion -> desconectar();
        }

        public function update(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("UPDATE vehiculo SET marca = :marca, modelo = :modelo, matricula = :matricula, carga = :carga WHERE id = :id");
            $stmt -> bindParam(':id', $this->id);
            $stmt -> bindParam(':marca', $this->marca);
            $stmt -> bindParam(':modelo', $this->modelo);
            $stmt -> bindParam(':matricula', $this->matricula);
            $stmt -> bindParam(':carga', $this->carga);

            $stmt -> execute();

            $conexion -> desconectar();
        }

        public function delete(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("DELETE FROM vehiculo WHERE id = :id");
            $stmt -> bindParam(':id', $this->id);

            $stmt -> execute();

            $conexion -> desconectar();
        }
        
        public function read_by_id(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM vehiculos WHERE id = :id");
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

            $stmt = $conn -> prepare("SELECT * FROM Vistas_all_vehiculos");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_active(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vistas_active_vehiculos");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_inactive(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vistas_inactive_vehiculos");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }
    }
?>