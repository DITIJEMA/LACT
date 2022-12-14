<?php
    require_once "/xampp/htdocs/EMPRESA_LACCT/Expetoria/Backend/conexion/CRUD.php";
    require_once "/xampp/htdocs/EMPRESA_LACCT/Expetoria/Backend/conexion/conexion.php";

    class Conductor implements CRUD{
        public $id;
        public $id_v;
        public $nombre;
        public $apellido_p;
        public $apellido_m;
        public $telefono;
        public $direccion;
        public $ruta;
        public $vehiculo;
        public $salario;
        public $contratacion;
        public $email;
        public $contrasena;
        public $creacion;
        public $imagen;
        public $activo;
        public $tipo;

        public function create(){
            $conexion = new ConfigDB();
            $conexion->conectar();
            $conn = $conexion->get_conn();

            $stmt = $conn -> prepare("EXECUTE Alta_conductor :email,:contrasena,:fecha_creacion,:tipo,:imagen,:nombre,
            :apellido_p,:apellido_m,:telefono,:domicilio,:ruta,:vehiculo,:salario,:fecha_contratacion");

            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':contrasena', $this->contrasena);
            $stmt->bindParam(':fecha_creacion', $this->creacion);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':imagen', $this->imagen);
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':apellido_p', $this->apellido_p);
            $stmt->bindParam(':apellido_m', $this->apellido_m);
            $stmt->bindParam(':telefono', $this->telefono);
            $stmt->bindParam(':domicilio', $this->direccion);
            $stmt->bindParam(':ruta', $this->ruta);
            $stmt->bindParam(':vehiculo', $this->vehiculo);
            $stmt->bindParam(':salario', $this->salario);
            $stmt->bindParam(':fecha_contratacion', $this->contratacion);

            $stmt -> execute();

            $conexion -> desconectar();

        }

        public function update(){
            $conexion = new ConfigDB();
            $conexion->conectar();
            $conn = $conexion->get_conn();

            $stmt = $conn -> prepare("EXECUTE Update_conductor :id, :id_v, :nombre, :apellido_p, :apellido_m,:telefono, :domicilio, :ruta, :vehiculo, :salario");

            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':id_v', $this->id_v);
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':apellido_p', $this->apellido_p);
            $stmt->bindParam(':apellido_m', $this->apellido_m);
            $stmt->bindParam(':telefono', $this->telefono);
            $stmt->bindParam(':domicilio', $this->direccion);
            $stmt->bindParam(':ruta', $this->ruta);
            $stmt->bindParam(':vehiculo', $this->vehiculo);
            $stmt->bindParam(':salario', $this->salario);

            $stmt -> execute();

            $conexion -> desconectar();
        }

        public function delete(){
            $conexion = new ConfigDB();
            $conexion->conectar();
            $conn = $conexion->get_conn();

            $stmt = $conn -> prepare("EXECUTE Baja_conductor :id, :id_v");

            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':id_v', $this->id_v);

            $stmt -> execute();

            $conexion -> desconectar();
        }
        
        public function read_by_id(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM conductor WHERE id = :id");
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

            $stmt = $conn -> prepare("SELECT * FROM Vista_all_conductores");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_active(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_active_conductores");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_inactive(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_inactive_conductores");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }
    }

?>