<?php
    //! NO MOVER EL CODIGO DE ESTAS PARTES, SI ES QUE NO HAY ERRORES
    require_once "../../conexion/conexion.php";
    require_once "../../conexion/CRUD.php";

    class Producto implements CRUD{
        public $id;
        public $stock;
        public $precio;
        public $imagen;
        public $tipo;
        public $cantidad;
        public $estado;
        public $descripcion;

        public function create(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("EXECUTE Alta_producto :stock,:precio,:imagen,:cantidad,:tipo,:descripcion");
            $stmt -> bindParam(':stock', $this->stock);
            $stmt -> bindParam(':precio', $this->precio);
            $stmt -> bindParam(':imagen', $this->imagen);
            $stmt -> bindParam(':cantidad', $this->cantidad);
            $stmt -> bindParam(':tipo', $this->tipo);
            $stmt -> bindParam(':descripcion', $this->descripcion);

            $stmt -> execute();

            $conexion -> desconectar();
        } 

        public function update(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("UPDATE producto SET stock = :stock, precio = :precio, imagen = :imagen,
            cantidad = :cantidad, tipo = :tipo, descripcion = :descripcion WHERE id = :id");
            $stmt -> bindParam(':id', $this->id);
            $stmt -> bindParam(':stock', $this->stock);
            $stmt -> bindParam(':precio', $this->precio);
            $stmt -> bindParam(':imagen', $this->imagen);
            $stmt -> bindParam(':cantidad', $this->cantidad);
            $stmt -> bindParam(':tipo', $this->tipo);
            $stmt -> bindParam(':descripcion', $this->descripcion);

            $stmt -> execute();

            $conexion -> desconectar();
        } 

        public function delete(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("DELETE FROM producto WHERE id = :id");
            $stmt -> bindParam(':id', $this->id);

            $stmt -> execute();

            $conexion -> desconectar();
        } 

        public function read_by_id(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM producto WHERE id = :id");
            $stmt -> bindParam(':id', $this->id);

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_all(){
            $conexion = new ConfigDB;
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_all_productos");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_active(){
            $conexion = new ConfigDB;
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_active_productos");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_inactive(){
            $conexion = new ConfigDB;
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_inactive_productos");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function producto_leche(){
            $conexion = new ConfigDB;
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM producto WHERE tipo = 'LECHE'");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function producto_queso(){
            $conexion = new ConfigDB;
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM producto WHERE tipo = 'QUESO'");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function producto_yogurt(){
            $conexion = new ConfigDB;
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM producto WHERE tipo = 'YOGURT'");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }
    }
?>