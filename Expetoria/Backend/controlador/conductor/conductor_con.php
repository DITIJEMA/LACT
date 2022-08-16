<?php
    include_once "../../modelo/conductor/conductor_mod.php";

    print_r($_REQUEST);

    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];
        switch($opcion){
            case 1:
                $dia = date("d");
                $mes = date("m");
                $año = date("Y");
                $date = "$dia/$mes/$año";
                $conductor = new Conductor;
                $conductor -> nombre = $_REQUEST['nombre'];
                $conductor -> apellido_p = $_REQUEST['apellido_p'];
                $conductor -> apellido_m = $_REQUEST['apellido_m'];
                $conductor -> telefono = $_REQUEST['telefono'];
                $conductor -> direccion = $_REQUEST['direccion'];
                $conductor -> ruta = $_REQUEST['ruta'];
                $conductor -> vehiculo = $_REQUEST['vehiculo'];
                $conductor -> salario = $_REQUEST['salario'];
                $conductor -> contratacion = $date;
                $conductor -> email = $_REQUEST['email'];
                $conductor -> contrasena = $_REQUEST['contrasena'];
                $conductor -> creacion = $date;
                $conductor -> imagen = $_FILES['foto']['name'];
                $conductor -> tipo = 'CONDUCTOR';

                $result = $conductor -> create();

                if($result == 1){
                    header('Location: ../../../Frontend//Vistas/Conductor/privado/see.conductor.php');
                 } else{
                     include_once "./fileconductor.php";
                    header('Location: ../../../Frontend//Vistas/Conductor/privado/see.conductor.php');
                 }
                break;
            case 2:
                $conductor = new Conductor;
                $conductor -> id = $_REQUEST['id'];
                $conductor -> id_v = $_REQUEST['id_v'];
                $conductor -> nombre = $_REQUEST['nombre'];
                $conductor -> apellido_p = $_REQUEST['apellido_p'];
                $conductor -> apellido_m = $_REQUEST['apellido_m'];
                $conductor -> telefono = $_REQUEST['telefono'];
                $conductor -> direccion = $_REQUEST['direccion'];
                $conductor -> ruta = $_REQUEST['ruta'];
                $conductor -> vehiculo = $_REQUEST['vehiculo'];
                $conductor -> salario = $_REQUEST['salario'];

                $result = $conductor -> update();

                if($result == 1){
                    header('Location: ../../../Frontend//Vistas/Conductor/privado/see.conductor.php');
                 } else{
                    header('Location: ../../../Frontend//Vistas/Conductor/privado/see.conductor.php');
                 }
                break;

                case 3:
                    $conductor = new Conductor;
                    $conductor -> id = $_REQUEST['id'];
                    $conductor -> id_v = $_REQUEST['id_v'];

                    $result = $conductor -> delete();

                    if($result == 1){
                        header('Location: ../../../Frontend//Vistas/Conductor/privado/see.conductor.php');
                     } else{
                        header('Location: ../../../Frontend//Vistas/Conductor/privado/see.conductor.php');
                     }
                    break;
        }
    }
?>