<?php //!CONSULTA LA BASE DE DATOS PARA HACER LOS COMANDOS CORRESPONDIENTES
    include_once "../../modelo/cliente/cliente_model.php";

    if(isset($_REQUEST['opcion'])){
        $opcion = $_REQUEST['opcion'];
        switch($opcion){
            case 1: //* Crear cliente
                if(isset($_GET['nombre']) && isset($_GET['apellidop']) && isset($_GET['apellidom']) && isset($_GET['telefono']) &&
                isset($_GET['telefono']) && isset($_GET['domicilio']) && isset($_GET['contraseña']) && isset($_GET['email'])){
                    $dia = date("d");
                    $mes = date("m");
                    $año = date("Y");
                    $date = "$dia/$mes/$año";

                    $cliente = new Cliente();
                    $cliente->nombre=$_REQUEST['nombre'];
                    $cliente->apellido_p=$_REQUEST['apellidop'];
                    $cliente->apellido_m=$_REQUEST['apellidom'];
                    $cliente->telefono=$_REQUEST['telefono'];
                    $cliente->domicilio=$_REQUEST['domicilio'];
                    $cliente->email=$_REQUEST['email'];
                    $cliente->contraseña=$_REQUEST['contraseña'];
                    $cliente->fecha_creacion=$date;
                    $cliente->tipo='CLIENTE';

                    echo 'si';

                    $result = $cliente->create();
                }
                break;
            case 2: //* Editar cliente
                if(isset($_GET['nombre']) && isset($_GET['apellidop']) && isset($_GET['apellidom']) && isset($_GET['telefono']) &&
                isset($_GET['telefono']) && isset($_GET['domicilio']) && isset($_GET['contraseña']) && isset($_GET['email'])){

                    $cliente = new Cliente();
                    $cliente->nombre=$_REQUEST['nombre'];
                    $cliente->apellido_p=$_REQUEST['apellidop'];
                    $cliente->apellido_m=$_REQUEST['apellidom'];
                    $cliente->telefono=$_REQUEST['telefono'];
                    $cliente->domicilio=$_REQUEST['domicilio'];
                    $cliente->email=$_REQUEST['email'];
                    $cliente->contraseña=$_REQUEST['contraseña'];

                    echo 'si';

                    $result = $cliente->update();

                    if($result == 1){
                        header("Location: ../../../RC.php?estatus=inserted");
                    } else{
                        header("Location: ../../../RC.php?estatus=notinserted");
                    }
                }
                break;
            case 3: //* Borrar cliente
                if(isset($_GET['id'])){
                    $cliente = new Cliente();
                    $cliente->id=$_REQUEST['id'];

                    $cliente->delete();
                    echo 'entro';
                }
                break;
            default: //* Opcion no accesible
                echo 'Opcion no disponible';
                break;
        }
    }
?>