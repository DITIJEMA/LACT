<?php
    require_once "/xampp/htdocs/EMPRESA_LACCT/Expetoria/Backend/conexion/conexion.php";

    class Usuario{
        public $usuario;
        public $contrasena;

        public function read_user(){
            $conexion = new ConfigDB();
            $conexion->conectar();
            $conn = $conexion->get_conn();

            $stmt = $conn -> prepare("SELECT * FROM usuario WHERE email = :email AND contrasena = :contrasena AND activo = 'A'");

            $stmt->bindParam(':email', $this->usuario); 
            $stmt->bindParam(':contrasena', $this->contrasena);

            $stmt -> setFetchMode(PDO::FETCH_OBJ);

            $stmt -> execute();

            $conexion -> desconectar();

            return $stmt -> fetchAll();
        }
    }


?>