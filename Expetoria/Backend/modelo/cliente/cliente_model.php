<?php
    require_once "/xampp/htdocs/EMPRESA_LACCT/Expetoria/Backend/conexion/CRUD.php";
    require_once "/xampp/htdocs/EMPRESA_LACCT/Expetoria/Backend/conexion/conexion.php";


    class Cliente implements CRUD{//aqui se usaran los procedimientos de sql server, en cada uno de las funciones
        public $id;
        public $nombre;
        public $apellido_p;
        public $apellido_m;
        public $imagen;
        public $telefono;
        public $domicilio;
        public $contraseña;
        public $email;
        public $fecha_creacion;
        public $tipo;
        
        public function create(){
            $conexion = new ConfigDB();
            $conexion->conectar();
            $conn = $conexion->get_conn();

            $stmt = $conn -> prepare("EXECUTE Alta_cliente :email,:contrasena,:fecha_creacion,:tipo,:imagen,:nombre,
            :apellido_p,:apellido_m,:telefono,:domicilio");

            $stmt->bindParam(':email', $this->email); 
            $stmt->bindParam(':contrasena', $this->contraseña);
            $stmt->bindParam(':fecha_creacion', $this->fecha_creacion);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':imagen', $this->imagen);
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':apellido_p', $this->apellido_p);
            $stmt->bindParam(':apellido_m', $this->apellido_m);
            $stmt->bindParam(':telefono', $this->telefono);
            $stmt->bindParam(':domicilio', $this->domicilio);

            $result = $stmt -> execute();

            $conexion -> desconectar();
        }

        public function update(){
            $conexion = new ConfigDB();
            $conexion->conectar();
            $conn = $conexion->get_conn();

            $stmt = $conn -> prepare("UPDATE usuario u INNER JOIN cliente c ON u.id = c.id SET u.email = :email,
            u.contrasena = :contrasena, c.nombre=:nombre, c.apellido_p=:apellidop, c.apellido_m=:apellido:m,
            c.telefono=:telefono, c.domicilio=:domicilio");

            $stmt->bindParam(':email', $this->email); 
            $stmt->bindParam(':contrasena', $this->contraseña);
            $stmt->bindParam(':nombre', $this->nombre);
            $stmt->bindParam(':apellido_p', $this->apellido_p);
            $stmt->bindParam(':apellido_m', $this->apellido_m);
            $stmt->bindParam(':telefono', $this->telefono);
            $stmt->bindParam(':domicilio', $this->domicilio);

            $stmt -> execute();

            $conexion -> desconectar();
        }

        public function delete(){
            $conexion = new ConfigDB();
            $conexion->conectar();
            $conn = $conexion->get_conn();

            $stmt = $conn -> prepare("DELETE FROM usuario WHERE id=:id");
            
            $stmt->bindParam(':id', $this->id); 

            $stmt -> execute();

            $conexion -> desconectar();
        }

        public function read_by_id(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT c.*,u.* FROM cliente c INNER JOIN usuario u ON c.id = u.id");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_all(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_all_clientes");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_active(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_active_clientes");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }

        public function read_inactive(){
            $conexion = new ConfigDB();
            $conexion -> conectar();
            $conn = $conexion -> get_conn();

            $stmt = $conn -> prepare("SELECT * FROM Vista_inactive_clientes");

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }
    }
?>