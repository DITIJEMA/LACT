<?php
    include_once "../../modelo/vehiculo/vehiculo_model.php";

    print_r($_REQUEST);

    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];
        switch($opcion){
            case 1: //create
                $vehiculo = new Vehiculo;
                $vehiculo -> marca = $_REQUEST['marca'];
                $vehiculo -> modelo = $_REQUEST['modelo'];
                $vehiculo -> matricula = $_REQUEST['matricula'];
                $vehiculo -> carga = $_REQUEST['carga'];

                $result = $vehiculo -> create();

                if($result == 1){
                    header('Location: ../../../Frontend/Vistas/Vehiculo/see-vehiculo.php?c=false');
                 } else{
                     header('Location: ../../../Frontend/Vistas/Vehiculo/see-vehiculo.php?c=true');
                 }
                break;

            case 2:
                $vehiculo = new Vehiculo;
                $vehiculo -> marca = $_REQUEST['marca'];
                $vehiculo -> modelo = $_REQUEST['modelo'];
                $vehiculo -> matricula = $_REQUEST['matricula'];
                $vehiculo -> carga = $_REQUEST['carga'];
                $vehiculo -> id = $_REQUEST['id'];
                $vehiculo -> estado = $_REQUEST['estado'];

                $result = $vehiculo -> update();

                if($result == 1){
                    header('Location: ../../../Frontend/Vistas/Vehiculo/see-vehiculo.php?u=false');
                 } else{
                     header('Location: ../../../Frontend/Vistas/Vehiculo/see-vehiculo.php?u=true');
                 }
                break;
        }
    }
?>
