<?php
    include_once "./usuario.php";

    if(isset($_REQUEST['option'])){
        $opcion = $_REQUEST['option'];
        switch($opcion){
            case 1:
                $login = new Usuario;
                $login -> usuario = $_REQUEST['usuario'];
                $login -> contrasena = $_REQUEST['contrasena'];

                $result = $login -> read_user();

                print_r($result);

                if(!empty($result)){
                    $sesion = $result[0];
                    session_start();
                    $_SESSION['id'] = $sesion -> id;
                    $_SESSION['email'] = $sesion -> email;
                    $_SESSION['contrasena'] = $sesion -> contrasena;
                    $_SESSION['tipo'] = $sesion -> tipo;

                    header('Location: ../../Frontend/inicio.php');
                } else{
                    header('Location: ../../Frontend/Vistas/Login/Login.php?f');
                }
                break;

        }
    }
?>