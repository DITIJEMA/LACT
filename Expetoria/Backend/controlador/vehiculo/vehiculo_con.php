<?php
    include_once "../../modelo/vehiculo/vehiculo_model.php";

    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];
        switch($opcion){
            case 1: //create
                $vehiculo = new Vehiculo;
                $vehiculo -> marca = $_REQUEST['marca'];
                $vehiculo -> modelo = $_REQUEST['modelo'];
                $vehiculo -> matricula = $_REQUEST['carga'];
                $vehiculo -> carga = $_REQUEST['matricula'];

                $result = $vehiculo -> create();

                if($result == 1){
                    header('Location: ../../../Frontend/Vistas/Vehiculo/see-vehiculo.php?c=false');
                 } else{
                     header('Location: ../../../Frontend/Vistas/Vehiculo/see-vehiculo.php?c=true');
                 }
                break;
        }
    }
?>
