<?php
    include_once "../../modelo/ruta/ruta_model.php";

    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];
        switch($opcion){
            case 1: //create
                $ruta = new Ruta;
                $ruta -> destino = $_REQUEST['destino'];

                $result = $ruta -> create();

                if($result == 1){
                    header('Location: ../../../Frontend/Vistas/Ruta/see_ruta.php?c=false');
                 } else{
                    
                    header('Location: ../../../Frontend/Vistas/Ruta/see_ruta.php?c=true');
                 }
                break;
        }
    }
?>